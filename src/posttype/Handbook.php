<?php

namespace Ramp\PostType;

class Handbook extends BasePostType
{
    protected $names = [
        'name'     => 'handbook',
        'singular' => 'Page',
        'plural'   => 'Pages',
        'slug'     => 'handbook',
    ];

    protected $labels = [
        'menu_name' => 'Handbook'
    ];

    protected $options = [
        'show_in_rest' => true
    ];

    protected $taxonomies = [
        'chapter', 'post_tag'
    ];

}
