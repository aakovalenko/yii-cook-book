<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 13.03.18
 * Time: 14:22
 */

namespace app\models;


use yii\base\Model;
use app\components\WordsValidator;

class Article extends Model
{
    public $title;
    public function rules()
    {
        return [
            ['title', 'string'],
            ['title', WordsValidator::className(), 'size' => 10],
        ];
    }
}