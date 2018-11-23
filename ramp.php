<?php

/**
 * Plugin Name: i90 On Ramp
 * Plugin URI: https://github.com/i90/ramp-plugin
 * Description: 
 * Version: 0.1
 * Author: Reefiki
 * Author URI: https://github.com/reefiki
 * License: MIT License
 */

require __DIR__ . '/vendor/autoload.php';

use Ramp\PostType;
use Ramp\Taxonomy;

$handbook = new PostType\Handbook();
$handbook->setup();

$chapter = new Taxonomy\Chapter();
$chapter->setup();


add_action( 'rest_api_init', function () {
    register_rest_route( 'ramp/v1', '/player/(?P<id>\d+)', array(
        'methods' => 'GET',
        'callback' => function($data) {
            $user_id = (int) wsl_get_stored_hybridauth_user_id_by_provider_and_provider_uid( 'Steam', $data['id'] );

            if ( ! $user_id ) {
                return new WP_Error('204', __('User not found.', 'ramp-plugin'));
            }
            
            $user = get_user_by('ID', $user_id);

            $data = [
                'username' => $user->display_name,
                'is_admin' => in_array('administrator', $user->caps),
            ];

            // Create the response object
            $response = new WP_REST_Response( $data );

            // Add a custom status code
            $response->set_status( 200 );

            return $response;
        },
    ) );
  } );

add_action('wsl_process_login_update_wsl_user_data_start', function($is_new_user, $user_id, $provider, $adapter, $hybridauth_user_profile) {
    $hybridauth_user_profile->identifier = preg_replace('/\D/', '', $hybridauth_user_profile->identifier);
}, 10, 5);