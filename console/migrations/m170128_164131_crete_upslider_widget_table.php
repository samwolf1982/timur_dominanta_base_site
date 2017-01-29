<?php

use yii\db\Migration;
use yii\db\Schema;

class m170128_164131_crete_upslider_widget_table extends Migration
{
    public function up()
    {
             $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('upslider', [
            'id' =>  $this->primaryKey(),
            'img' => Schema::TYPE_STRING,
            'title' => Schema::TYPE_STRING,
            'description' => Schema::TYPE_TEXT,
            'url' =>Schema::TYPE_STRING,
        ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('upslider');

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}


    // const TYPE_PK = 'pk';
    // const TYPE_UPK = 'upk';
    // const TYPE_BIGPK = 'bigpk';
    // const TYPE_UBIGPK = 'ubigpk';
    // const TYPE_CHAR = 'char';
    // const TYPE_STRING = 'string';
    // const TYPE_TEXT = 'text';
    // const TYPE_SMALLINT = 'smallint';
    // const TYPE_INTEGER = 'integer';
    // const TYPE_BIGINT = 'bigint';
    // const TYPE_FLOAT = 'float';
    // const TYPE_DOUBLE = 'double';
    // const TYPE_DECIMAL = 'decimal';
    // const TYPE_DATETIME = 'datetime';
    // const TYPE_TIMESTAMP = 'timestamp';
    // const TYPE_TIME = 'time';
    // const TYPE_DATE = 'date';
    // const TYPE_BINARY = 'binary';
    // const TYPE_BOOLEAN = 'boolean';
    // const TYPE_MONEY = 'money';