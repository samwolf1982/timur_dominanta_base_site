<?php

use yii\db\Migration;
use yii\db\Schema;

class m170129_153258_create_room_empty extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('room', [
            'id' =>  $this->primaryKey(),
            'id_room'=>$this->string()->notNull(),
            'title' => $this->text(),
            'description' => $this->text(),
            'img' => $this->text(),

            
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        
        ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('room');

       //return false;
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
