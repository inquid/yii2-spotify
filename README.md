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
"inquid/yii2-spotify": "*"
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


for more information check out the following link:
 https://developer.spotify.com/technologies/widgets/spotify-play-button/
