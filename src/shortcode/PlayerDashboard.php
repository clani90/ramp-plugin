<?php

namespace Ramp\Shortcode;

use Wheel\Player;

class PlayerDashboard extends BaseShortcode
{
    public $key = 'i90-ramp-dashboard';

    public function render()
    {
        if ( !$this->authorized() )
        {
            return $this->unauthorized();
        }

        $player = new Player(wp_get_current_user());

        require dirname(dirname(dirname(__FILE__))) . '/public/partials/shortcode-player-dashboard.php';
    }

    protected function authorized()
    {
        return is_user_logged_in();
    }
}