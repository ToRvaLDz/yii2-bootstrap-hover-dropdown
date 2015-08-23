<?php

namespace torvalds\hoverdropdown;

use \yii\web\AssetBundle;

class HoverdropdownAsset extends AssetBundle {

    public $sourcePath = '@bower/bootstrap-hover-dropdown';
    public $js = [
        'bootstrap-hover-dropdown.min.js'
    ];
}