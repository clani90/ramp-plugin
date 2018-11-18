<?php

/**
 * Plugin Name: i90 On Ramp
 * Plugin URI: https://github.com/i90/ramp-plugin
 * Description: Setup post types, taxonomies, shortcodes and routes.
 * Version: 0.1
 * Author: Reefiki
 * Author URI: https://github.com/reefiki
 * License: MIT License
 */

require __DIR__ . '/vendor/autoload.php';

use Ramp\PostType;
use Ramp\Taxonomy;
use Ramp\Shortcode;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

/**
 * Post Types
 */
$handbook = new PostType\Handbook();
$handbook->init();

/**
 * Taxonomies
 */

$chapter = new Taxonomy\Chapter();
$chapter->init();

/**
 * Shortcodes
 */
$player_profile = new Shortcode\PlayerDashboard('player-');
$player_profile->hook();

/**
 * Query Vars
 */



add_action( 'carbon_fields_register_fields', function() {
    Container::make( 'theme_options', __( 'Theme Options', 'crb' ) )
        ->add_fields( array(
            Field::make( 'text', 'crb_text', 'Text Field' ),
        ) );
});

add_action( 'after_setup_theme', function() {
    \Carbon_Fields\Carbon_Fields::boot();
});