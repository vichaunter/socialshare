<?php
/**
 * Created by PhpStorm.
 * User: vicha
 * Date: 11/03/2018
 * Time: 17:42
 */

namespace VicHaunter\Factories\SocialShare;

class ProvidersFactory {
    
    const PROVIDERS = [
        'Facebook' => [
            'url'         => 'https://www.facebook.com/sharer/sharer.php',
            'fontAwesome' => 'fa fa-facebook',
        ],
        'Google'   => [
            'url'         => 'https://plus.google.com/share',
            'fontAwesome' => 'fa fa-google-plus',
        ],
        'Tumblr'   => [
            'url'         => 'http://www.tumblr.com/share/link',
            'fontAwesome' => 'fa fa-tumblr',
        ],
        'Twitter'  => [
            'url'         => 'http://www.twitter.com/share',
            'fontAwesome' => 'fa fa-twitter',
        ],
    ];
    
}