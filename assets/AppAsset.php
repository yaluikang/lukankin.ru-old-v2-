<?php
 namespace app\assets;

 use Yii\web\AssetBundle;

 class AppAsset extends AssetBundle
 {
     public $basePath = '@webroot';
     public $baseUrl = '@web';
     public $css = [

     ];
     public $js = [
         'js/test.js'
     ];
     public $depends = [
         'yii\web\YiiAsset',
         'yii\bootstrap\BootstrapAsset',
     ];
 }