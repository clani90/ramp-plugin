<?php

namespace Ramp\Taxonomy;

use PostTypes\Taxonomy as TaxonomyCreate;

abstract class BaseTaxonomy 
{

    public function setup()
    {
        $chapters = new TaxonomyCreate($this->names);

        $chapters->options($this->options);

        $chapters->register();
    }

}

