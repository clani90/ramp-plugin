<?php

namespace Wheel;

class Player
{
    public $ID = 0;
    public $user = [];
    public $username;

    public function __construct(\WP_User $user)
    {
        if ( $user->ID === 0 )
        {
            throw new InvalidArgumentException('Player class expects a WP_User object.');
        }
        
        $this->ID = $user->ID;
        $this->username =  $user->display_name;
    }

    public function teams()
    {
        return [];
    }
}