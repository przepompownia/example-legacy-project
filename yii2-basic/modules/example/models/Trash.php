<?php

namespace app\modules\example\models;

use stdClass;
use yii\db\ActiveRecord;

/**
 * Trash
 *
 * @property integer $id
 * @property string $id2
 * @property stdclass $id3
 * @property bool $id4
 * @property array $id5
 * @property integer $id6
 */
class Trash extends ActiveRecord
{
    const CONST_1 = '1';
    const CONST_2 = '2';
}
