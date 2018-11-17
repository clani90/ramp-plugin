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

use PostTypes\PostType;
use PostTypes\Taxonomy;

$chapters = new Taxonomy('chapter');
$chapters->options([
    'hierarchical' => false,
]);
$chapters->register();

$names = [
    'name'     => 'handbook',
    'singular' => 'Page',
    'plural'   => 'Pages',
    'slug'     => 'handbook',
];

$handbook = new PostType( $names );

$handbook->labels([
    'menu_name' => 'Handbook'
]);

$handbook->taxonomy('chapter');

$handbook->taxonomy('post_tag');

$handbook->register();