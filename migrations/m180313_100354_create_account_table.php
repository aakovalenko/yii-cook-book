<?php

use yii\db\Migration;

/**
 * Handles the creation of table `account`.
 */
class m180313_100354_create_account_table extends Migration
{
const TABLE_NAME = '{{%account}}';
    /**
     * {@inheritdoc}
     */
    public function Up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci
ENGINE=InnoDB';
        }
        $this->createTable(self::TABLE_NAME, [
            'id' => \yii\db\Schema::TYPE_PK,
            'balance' => ' NUMERIC(15,2) DEFAULT NULL',
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function Down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}
