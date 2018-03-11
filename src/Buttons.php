<?php
/**
 * Created by PhpStorm.
 * User: vicha
 * Date: 11/03/2018
 * Time: 11:25
 */

namespace VicHaunter\SocialShare;

use VicHaunter\Factories\SocialShare\ProvidersFactory;
use VicHaunter\Lib\SocialShare\Provider;

class Buttons {
    
    /** @var $providers Provider */
    public $providers;
    
    public function __construct($includeOnly = null, $iconPack = null) {
        foreach (ProvidersFactory::PROVIDERS as $provider => $v) {
            $low = strtolower($provider);
            $class = "VicHaunter\SocialShare\\$provider";
            if($includeOnly && in_array($low, array_map('strtolower', $includeOnly))){
                $this->providers[$low] = new $class();
            }
            if(!$includeOnly){
                $this->providers[$low] = new $class();
            }
        }
        if($iconPack){
            foreach($this->providers as $provider){
                $provider->useIconPack($iconPack);
            }
        }
    }
    
    public function setUrl($url) {
        foreach ($this->providers as $provider) {
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