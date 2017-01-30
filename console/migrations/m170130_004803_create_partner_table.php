<?php

use yii\db\Migration;

/**
 * Handles the creation of table `partner`.
 */
class m170130_004803_create_partner_table extends Migration
{
     
    /**
     * @inheritdoc
     */
    public function up()
    {
            $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('partner', [
            'id' =>  $this->primaryKey(),
            'img' => $this->text(),
            'alt' => $this->text(),
            'title' => $this->text(),
            'description' => $this->text(),            
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
             'url_local' => $this->text(),
             'url_outer' => $this->text(),
        
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('partner');
    }
}
