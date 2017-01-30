<?php

use yii\db\Migration;

/**
 * Handles the creation of table `testimonials`.
 */
class m170130_015855_create_testimonials_table extends Migration
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
        $this->createTable('testimonials', [
            'id' =>  $this->primaryKey(),
            'name'=>$this->string(),
            'job'=>$this->string(),
            'img' => $this->text(),
            'alt' => $this->text(),
            'text' => $this->text(),          
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
        
        ], $tableOptions);

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('testimonials');
    }
}
