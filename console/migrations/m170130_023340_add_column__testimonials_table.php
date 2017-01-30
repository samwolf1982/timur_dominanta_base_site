<?php

use yii\db\Migration;

class m170130_023340_add_column__testimonials_table extends Migration
{
    public function up()
    {
          $this->addColumn('testimonials', 'updated_at', $this->integer());
          $this->addColumn('testimonials', 'created_at', $this->integer());
     
    }

    public function down()
    {
         $this->dropColumn('testimonials', 'updated_at');
         $this->dropColumn('testimonials', 'created_at');
   
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


 //            $contact->updated_at=time();
 //             $contact->created_at=time();