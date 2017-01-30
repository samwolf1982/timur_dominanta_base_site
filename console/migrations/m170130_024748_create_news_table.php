<?php

use yii\db\Migration;

/**
 * Handles the creation of table `news`.
 */
class m170130_024748_create_news_table extends Migration
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
        $this->createTable('news', [
            'id' =>  $this->primaryKey(),
            'title'=>$this->string(),
            'short_description'=>$this->string(),
            'description' => $this->text(),
            'img' => $this->text(),
            'alt' => $this->text(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),                     
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
        
        ], $tableOptions);

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('news');
    }
}
