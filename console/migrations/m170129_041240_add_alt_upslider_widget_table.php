<?php

use yii\db\Migration;

class m170129_041240_add_alt_upslider_widget_table extends Migration
{
   public function up()
    {
        $this->addColumn('upslider', 'alt', $this->string());
    }

    public function down()
    {
        $this->dropColumn('upslider', 'alt');
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
