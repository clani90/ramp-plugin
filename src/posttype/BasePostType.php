<?php

namespace Ramp\PostType;

use PostTypes\PostType as PostCreate;

class BasePostType 
{

    public function init()
    {
        $PostType = new PostCreate($this->names, $this->options);

        foreach( $this->taxonomies as $taxonomy )
        {
            $PostType->taxonomy($taxonomy);
        }

        $PostType->labels($this->labels);
        
        $PostType->register();
    }

}