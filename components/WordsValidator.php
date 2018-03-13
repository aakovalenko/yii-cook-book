<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 13.03.18
 * Time: 14:21
 */

namespace app\components;


use yii\validators\Validator;

class WordsValidator extends Validator
{
    public $size = 50;
    public function validateValue($value){
        if (str_word_count($value) > $this->size) {
            return ['The number of words must be less than {size}', ['size' =>
                $this->size]];
        }
        return false;
    }
}