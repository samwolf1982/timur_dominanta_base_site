<?php

use yii\db\Migration;
use common\models\TestimonialsRecord;

class m170130_023825_fill_testimonials_table2 extends Migration
{
    public function up()
    {
            $this->truncateTable('testimonials');

  for ($j=0; $j <20 ; $j++) { 
            $faker = Faker\Factory::create();
             $contact = new TestimonialsRecord();
             $contact->name=$faker->firstName(); 
             $contact->job="Топ-менеджер"; 
             
             $contact->img= $faker->imageUrl($width = 250, $height = 250,'people');
              $contact->alt=$faker->sentence(10);
              $contact->text=$faker->sentence(15);

                          $contact->updated_at=time();
             $contact->created_at=time();
    

    
             echo "testimonials ".$j.PHP_EOL;
           //  echo var_dump( $contact->errors);
            $contact->save();

             }
    }

    public function down()
    {
              $this->truncateTable('testimonials');
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
