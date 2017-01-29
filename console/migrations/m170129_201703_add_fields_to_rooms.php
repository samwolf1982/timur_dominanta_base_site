<?php

use yii\db\Migration;

class m170129_201703_add_fields_to_rooms extends Migration
{
 

   public function up()
    {
        $this->addColumn('room', 'price_usd', $this->decimal(12,2));
         $this->addColumn('room', 'price_uan', $this->decimal(12,2));
          $this->addColumn('room', 'total_square', $this->smallInteger());
    }

    public function down()
    {
        $this->dropColumn('room', 'price_usd');
        $this->dropColumn('room', 'price_uan');
          $this->dropColumn('room', 'total_square');
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
