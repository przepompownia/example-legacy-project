<?php

namespace app\modules\example;

use yii\base\BootstrapInterface;
use yii\base\Module as BaseModule;

/**
 * example2 module
 */
class Module extends BaseModule
{
    public $controllerNamespace = __NAMESPACE__ . '\commands';
}
