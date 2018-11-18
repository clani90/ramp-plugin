<?php

namespace Ramp\Shortcode;

abstract class BaseShortcode
{
    public $key;
    public $filters;

    abstract protected function authorized();
    abstract protected function render();
    

    public function hook()
    {
        add_shortcode( $this->key, array( $this, 'render' ) );   
    }

    public function unauthorized()
    {
        return 'You are not authorized.';
    }
}
