<?php
/**
 * Created by PhpStorm.
 * User: vicha
 * Date: 11/03/2018
 * Time: 10:59
 */

namespace VicHaunter\Lib\SocialShare;

use VicHaunter\SocialShare\Lib\ProviderApi;

class Provider {
    
    /** @var $providerApi ProviderApi  */
    private $providerApi;
    
    private $name;
    private $shareUrl;
    private $attributes = [];
    
    private $className;
    
    private $text; //text to show in link (can be html)
    
    public function __construct($provider, $shareUrl) {
        $this->name = $provider;
        $this->className = strtolower($provider);
        $this->shareUrl = $shareUrl;
    }
    
    public function setApi($publicKey, $privateKey){
        $api = new ProviderApi();
        $api->setKeys($publicKey, $privateKey);
        
        $this->providerApi = $api;
    }
    
    public function getApi(){
        if($this->providerApi){
            return $this->providerApi;
        }else{
            throw new SocialShareExceptions('Api not set, please call setApi first');
        }
    }
    
    public function setText($text){
        $this->text = $text;
    }
    
    public function addAttribute($key = 'url', $value){
        $this->attributes[$key] = $value;
    }
    
    public function removeAttribute($key){
        unset($this->attributes[$key]);
    }
    
    
    public function getClassName(){
        return $this->className;
    }
    
    public function getName(){
        return $this->name;
    }
    
    public function getUrl(){
        return $this->shareUrl;
    }
    
    public function getText(){
        return $this->text;
    }
    
    public function getAttributes(){
        return $this->attributes;
    }
}