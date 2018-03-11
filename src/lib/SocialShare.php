<?php
/**
 * Created by PhpStorm.
 * User: vicha
 * Date: 11/03/2018
 * Time: 10:29
 */

namespace VicHaunter\SocialShare\Lib;

use VicHaunter\Lib\SocialShare\Provider;
use VicHaunter\SocialShare\Interfaces\ISocialShare;
use VicHaunter\SocialShare\Traits\TIcons;

class SocialShare implements ISocialShare {
    
    use TIcons;
    
    /** @var $provider Provider */
    protected $provider;
    
    protected $icon;
    
    public function getAllowedProviders(){
        return [
          'facebook',
          'twitter',
          'gplus',
        ];
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
        
        $html = '<a class="btn btn-social-icon btn-'.$this->provider->getName().'" href="'.$shareUrl.'" target="_blank">'.$this->getInnerText().'</a>';
        return $html;
    }
    
    private function getInnerText(){
        if($this->icon){
            return '<i class="'.$this->icon.'"></i>';
        }
        
        return $this->provider->getName();
    }
    
    public function useIconPack( $pack ) {
        $this->setIconClass($this->getIcon($pack));
    }
    
}