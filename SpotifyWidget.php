<?php

namespace inquid\spotify;

/**
 * This is just an example.
 */
use PHPUnit\Framework\Exception;
use yii\base\Widget;
use yii\helpers\Html;


class SpotifyWidget extends Widget{
    public $song;
    public $theme;
    public $view;
    public $width;
    public $height;
    public $frameBorder;
    public $transparency;

    public function init(){
        parent::init();
        if($this->song===null){
            throw new Exception("Please select a song");
        }
        if($this->theme===null){
            $this->theme = "black";
        }
        if($this->view===null){
            $this->view = "list";
        }
        if($this->width===null){
            $this->width = "640";
        }
        if($this->height===null){
            $this->height = "720";
        }
        if($this->frameBorder===null){
            $this->frameBorder = "0";
        }
        if($this->transparency===null){
            $this->transparency = "true";
        }
    }

    public function run(){
        return '<iframe src="https://embed.spotify.com/?uri='.$this->song .'&theme='.$this->theme.'&view='.$this->view.'"
                width="'.$this->width.'" height="'.$this->height.'" 
                frameborder="'.$this->frameBorder.'"
                 allowtransparency='.$this->transparency.'"></iframe>';
    }
}
