yii2 inquid spotify
===================
spotify, utilities for yii2 framework

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

Exampple 
-----
![Ximena](https://lh4.googleusercontent.com/OkbQJHEoCEsHsTpwmid9gf_FAMfpBx7fcoD6lHtdyUFvaMjZpc_u6c_rDoar_NyHe7EojVVUj-3DcI0=w2880-h1800-rw)

Code:
```
<?= \inquid\spotify\SpotifyWidget::widget(['song' => 'spotify:track:2QB1chgLUjo4K5JwODVue1', 'height' => 400, 'width' => 400]); ?>
```


for more information check out the following link:
 https://developer.spotify.com/technologies/widgets/spotify-play-button/
