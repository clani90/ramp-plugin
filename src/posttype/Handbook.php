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

    protected $taxonomies = [
        'chapter', 'post_tag'
    ];

}
