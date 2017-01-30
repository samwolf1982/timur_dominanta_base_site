<?php

use yii\db\Migration;
use common\models\NewsRecord;

class m170130_025515_fill_news_table extends Migration
{
    public function up()
    {
            $this->truncateTable('news');

  for ($j=0; $j <20 ; $j++) { 
            $faker = Faker\Factory::create();
              $contact = new NewsRecord();
              $contact->title=$faker->sentence(4);
              $contact->short_description=$faker->sentence(30);
               $contact->description=$faker->text();
              $contact->img= $faker->imageUrl($width = 800, $height = 600,'cats');
              $contact->alt=$faker->sentence(10);
              $contact->updated_at=time();
              $contact->created_at=time();


            
    

    
             echo "news ".$j.PHP_EOL;
           //  echo var_dump( $contact->errors);
            $contact->save();

             }
    }

    public function down()
    {
   $this->truncateTable('news');;
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


   // 'id' =>  $this->primaryKey(),
   //          'title'=>$this->string(),
   //          'short_description'=>$this->string(),
   //          'description' => $this->text(),
   //          'img' => $this->text(),
   //          'alt' => $this->text(),
   //          'created_at' => $this->integer()->notNull(),
   //          'updated_at' => $this->integer()->notNull(),                     
   //          'status' => $this->smallInteger()->notNull()->defaultValue(10),