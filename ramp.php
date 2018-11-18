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