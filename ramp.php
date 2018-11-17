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

$names = [
    'name'     => 'handbook',
    'singular' => 'Page',
    'plural'   => 'Pages',
    'slug'     => 'handbook',
];

$books = new PostType( $names );

$books->labels([
    'menu_name' => 'Handbook'
]);

$books->register();