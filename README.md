<p align="center">
    <a href="http://www.yiiframework.com/" target="_blank">
        <img src="http://static.yiiframework.com/files/logo/yii.png" width="400" alt="Yii Framework" />
    </a>
</p>

[![Donate](https://img.shields.io/badge/Donate-PayPal-green.svg)](https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=contact@inquid.co&item_name=Yii2+extensions+support&item_number=22+Campaign&amount=5%2e00&currency_code=USD)


yii2 Inquid Spotify
===================
spotify utilities for yii2 framework

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist inquid/yii2-spotify "*"
```

or add

```
"inquid/yii2-spotify": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \inquid\spotify\SpotifyWidget::widget(['song' => '/* paste here your spotify uri */']); ?>

```

Params available:
    -song
    -theme
    -view
    -width
    -height
    -frameBorder
    -transparency

* Song params is required like the next example spotify:track:5O31BTWa4XNFtE3zVgeCoh

To copy the code in spotify: ![Example](https://developer.spotify.com/wp-content/uploads/2013/11/select-track-link.jpg)

Example 
-----
![Ximena](https://lh5.googleusercontent.com/1pqDXsmIdgCCAv44l1uIpv_grzV-sjmawTq-UmL-u-es3xl5X_I11k-G6acfCg_U1Y8Or1IXA2AvT_s=w2880-h1800-rw)

Code:
```
<?= \inquid\spotify\SpotifyWidget::widget(['song' => 'spotify:track:2QB1chgLUjo4K5JwODVue1', 'height' => 400, 'width' => 400]); ?>
```

for more information check out the following link:
 https://developer.spotify.com/technologies/widgets/spotify-play-button/
 
 SUPPORT
-----
[![paypal](https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif)](https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=contact@inquid.co&item_name=Yii2+extensions+support&item_number=22+Campaign&amount=5%2e00&currency_code=USD)
