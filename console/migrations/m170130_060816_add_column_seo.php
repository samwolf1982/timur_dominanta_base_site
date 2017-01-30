<?php

use yii\db\Migration;

class m170130_060816_add_column_seo extends Migration
{
    public function up()
    {
 $this->addColumn('room', 'seo_url', $this->string());
    }

    public function down()
    {
          $this->dropColumn('room', 'seo_url');
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
