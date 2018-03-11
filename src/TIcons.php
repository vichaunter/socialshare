<?php
/**
 * Created by PhpStorm.
 * User: vicha
 * Date: 11/03/2018
 * Time: 13:37
 */

namespace VicHaunter\SocialShare\Traits;

trait TIcons {
    
    public function getIcon( $pack ) {
        $iconPacks = [
            'facebook' => [
                'fontAwesome' => 'fa fa-facebook-official',
            ],
            'google'    => [
                'fontAwesome' => 'fa fa-google-plus-official',
            ],
            'twitter'  => [
                'fontAwesome' => 'fa fa-twitter',
            ],
        ];
        
        return $iconPacks[ strtolower($this->provider->getName()) ][ $pack ];
    }
}