<?php
/**
 * Created by VSCdoe.
 * User: Shahimian
 * Date: 2019-09-07
 * Time: 13:33:41
 */

namespace shahimian\assets\fonts;


use yii\web\AssetBundle;

class Assets extends AssetBundle
{

    public $sourcePath = "@vendor/shahimian/yii2-persian-fonts/font";

    public $css = [
        'font.css',
    ];

}