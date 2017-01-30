<?php

use yii\db\Migration;
use common\models\PartnerRecord;

class m170130_005651_fill_partner_table extends Migration
{
    public function up()
    {
            $this->truncateTable('partner');

  for ($j=0; $j <20 ; $j++) { 
            $faker = Faker\Factory::create();
             $contact = new PartnerRecord();
             $contact->img= $faker->imageUrl($width = 200, $height = 50);
              $contact->alt=$faker->sentence(10);
              $contact->title=$faker->sentence(15);
              $contact->description=$faker->text;


              $contact->url_local=$faker->url;
              $contact->url_outer=$faker->url;

              

          
             echo "partner ".$j.PHP_EOL;
           //  echo var_dump( $contact->errors);
            $contact->save();

             }



    }

    public function down()
    {
       $this->truncateTable('partner');
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
  //           'img' => $this->text(),
  //           'alt' => $this->text(),
  //           'title' => $this->text(),
  //           'description' => $this->text(),            
  //           'status' => $this->smallInteger()->notNull()->defaultValue(10),
  //            'url_local' => $this->text(),
  //            'url_outer' => $this->text(),