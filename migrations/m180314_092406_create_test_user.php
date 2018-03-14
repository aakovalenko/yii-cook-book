<?php

use yii\db\Migration;

/**
 * Class m180314_092406_create_test_user
 */
class m180314_092406_create_test_user extends Migration
{
    public function up()
    {
        $testUser = new \app\models\User();
        $testUser->username = 'admin';
        $testUser->setPassword('admin');
        $testUser->generateAuthKey();
        $testUser->save();
    }
    public function down()
    {
        \app\models\User::findByUsername('turbulence')->delete();
        return false;
    }
}
