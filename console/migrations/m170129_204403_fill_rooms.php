<?php

use yii\db\Migration;
use common\models\RoomRecord;

class m170129_204403_fill_rooms extends Migration
{
    public function up()
    {
           $this->truncateTable('room');



 for ($j=0; $j <100 ; $j++) { 
            $faker = Faker\Factory::create();
            $contact = new RoomRecord();
             $contact->id_room= (string) $faker->numberBetween(50000,250000);
             $contact->title=$faker->address;
              $contact->description=$faker->text;
            $img_json_arr=array();
                      for ($i=0; $i < 10; $i++) { 
                         $f = Faker\Factory::create();
                 $url=$f->imageUrl($width = 640, $height = 480);
                 $alt= $f->address;
                 $r=array('url'=>$url,'alt'=>$alt); 
               array_push($img_json_arr, $r);


               }


      $contact->img=json_encode($img_json_arr);
     // echo $contact->img;
              
            $contact->updated_at=time();
             $contact->created_at=time();
               $contact->price_usd=$faker->numberBetween(50000,500000);
                 $contact->price_uan=$faker->numberBetween(200000,50000000);
                   $contact->total_square=$faker->numberBetween(25,250);



             echo "Room ".$j.PHP_EOL;
           //  echo var_dump( $contact->errors);
            $contact->save();

             }

    }

    public function down()
    {
          $this->truncateTable('room');
    }

}
