<?php

namespace app\modules\example\commands;

use yii\console\Controller;
use yii\console\ExitCode;

use function sprintf;

/**
 * Stupid controller for the `example2` module
 */
class StupidController extends Controller
{
    /**
     * Foo desc
     * @return int
     */
    public function actionFoo()
    {
        $this->stdout(sprintf("%s\n", 'X'));

        return ExitCode::OK;
    }
}
