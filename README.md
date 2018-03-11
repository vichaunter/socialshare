## [SocialShare](https://github.com/vichaunter/socialshare) 1.0-rc1

[![HitCount](http://hits.dwyl.com/vichaunter/socialshare.svg)](http://hits.dwyl.com/{username}/{project-name})

SocialShare enables developers to easily build social sharing buttons in their applications.

The main goal of SocialShare is to make as easy as possible adding share buttons for all social networks (and tools) in any website not depending on another packages.

Usage
---

SocialShare will provide a usage examples in short.

Anyway a simple way to use it is to call Buttons class with parameters as needed, or directly call each button:

```php
//remember to use class namespace
$shareButtons = new Buttons(); //this will create all disponible buttons
$shareButtons->setUrl($currentUrl); //pass your current url from your script

foreach($shareButtons as $button){
    echo $button->getHtml();
}

//result will be links to each social network with href and this format
//<a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fyour.domain" target="_blank">Facebook</a>
```

You can pass two attributes when call Buttons, restriction to wich social networks you want to see, and iconPack if is defined. For the moment only fontAwesome.

```php
$shareButtons = new Buttons(['facebook','twitter'], 'fontAwesome');
$shareButtons->setUrl($currentUrl); //pass your current url from your script

foreach($shareButtons as $button){
    echo $button->getHtml();
}

//this will result 
//<a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fyour.domain" target="_blank"><i class="fa fa-facebook"></i></a>
```

####Example usage with Nette Framework.

In any presenter just add this lines:

```php
$shareButtons = new Buttons(null, 'fontAwesome');
$shareButtons->setUrl($this->getHttpRequest()->getUrl()->absoluteUrl);
$this->template->shareButtons = $shareButtons->getAll();
```

Then in latte you can loop with:

```php
{ifset $shareButtons}
    {foreach $shareButtons as $shareButton}
        {$shareButton->getHtml()|noescape}
    {/foreach}
{/ifset}
```


Requirements
---

* PHP 5.x+

Installation
---

To install SocialShare right now you can clone repositori in your project [Github](https://github.com/hybridauth/hybridauth/releases).

Versions Status
---
| Version | Status      | Repository              | Documentation           | PHP Version |
|---------|-------------|-------------------------|-------------------------|-------------|
| 1.x     | Maintenance | socialshare             | socialshare             | >= 5.3      |

Questions, Help and Support?
---

For general questions (i.e, "how-to" questions), please left a message in Github issues tracker.

### License

SocialShare PHP Library is released under the terms of MIT License.

For the full Copyright Notice and Disclaimer, see [LICENSE](https://github.com/vichaunter/socialshare/blob/master/LICENSE).