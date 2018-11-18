<?php

namespace Wheel;

class Team extends Model {
    protected $id;
    protected $name;
    protected $post_type = 'ramp_team';

    public function __construct($id=null)
    {
        if ( !$id )
        {
            throw new InvalidArgumentException('Team class expects id parameter.');
        }

        $team = $this->find($id);

        return !$team ? [] : $team;
    }

    public function roster($full=false)
    {
        $players = carbon_get_post_meta($this->id, $this->post_type);
    }
}