<?php

namespace Ramp\PostType;

use PostTypes\PostType as PostCreate;

class BasePostType 
{

    public function setup()
    {
        $PostType = new PostCreate($this->names);

        foreach( $this->taxonomies as $taxonomy )
        {
            $PostType->taxonomy($taxonomy);
        }

        $PostType->labels($this->labels);
        
        $PostType->register();
    }

}