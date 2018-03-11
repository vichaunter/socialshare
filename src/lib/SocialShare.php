<?php
/**
 * Created by PhpStorm.
 * User: vicha
 * Date: 11/03/2018
 * Time: 10:29
 */

namespace VicHaunter\SocialShare\Lib;

use VicHaunter\Factories\SocialShare\ProvidersFactory;
use VicHaunter\Lib\SocialShare\Provider;
use VicHaunter\SocialShare\Interfaces\ISocialShare;

class SocialShare implements ISocialShare {
    
    /** @var $provider Provider */
    protected $provider;
    
    protected $icon;
    
    public function __construct() {
        $caller = (new \ReflectionClass($this))->getShortName();
        $this->provider = new Provider($caller, ProvidersFactory::PROVIDERS[$caller]['url']);
    }
    
    public function getAllowedProviders(){
        return array_keys(ProvidersFactory::PROVIDERS);
    }
    
    public function getProvider() {
        return $this->provider;
    }
    
    public function setShareButton( $url, $counter = false ) {
    
    }
    
    public function setShareText($text){
        $this->provider->setText($text);
    }
    
    public function setIconClass($htmlClass){
        $this->icon = $htmlClass;
    }
    
    protected function addUrlAttribute($key, $value) {
        $this->provider->addAttribute($key,$value);
    }

    public function getHtml(){
        
        $shareUrl = $this->provider->getUrl().'?'.http_build_query($this->provider->getAttributes());
        
        $html = '<a class="btn btn-social-icon btn-'.$this->provider->getClassName().'" href="'.$shareUrl.'" target="_blank">'.$this->getInnerText().'</a>';
        return $html;
    }
    
    private function getInnerText(){
        if($this->icon){
            return '<i class="'.$this->icon.'"></i>';
        }
        
        return $this->provider->getClassName();
    }
    
    public function useIconPack( $pack ) {
        $this->setIconClass(ProvidersFactory::PROVIDERS[$this->provider->getName()][$pack]);
    }
    
}