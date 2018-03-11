<?php
/**
 * Created by PhpStorm.
 * User: vicha
 * Date: 11/03/2018
 * Time: 11:25
 */

namespace VicHaunter\SocialShare;

use VicHaunter\Lib\SocialShare\Provider;

class Buttons {
    
    const PROVIDERS = [
        'Google',
        'Facebook',
        'Twitter',
    ];
    
    /** @var $providers Provider */
    public $providers;
    
    public function __construct($includeOnly = null, $iconPack = null) {
        foreach (self::PROVIDERS as $provider) {
            $low = strtolower($provider);
            $class = "VicHaunter\SocialShare\\$provider";
            $this->providers[$low] = new $class();
            if($iconPack){
                $this->providers[$low]->useIconPack($iconPack);
            }
        }
    }
    
    public function setUrl($url){
        foreach($this->providers as $provider){
            $provider->addShareUrl($url);
        }
    }
    
    public function get( $providerName ) {
        return $this->providers[strtolower($providerName)];
    }
    
    public function getAll(){
        return $this->providers;
    }
}