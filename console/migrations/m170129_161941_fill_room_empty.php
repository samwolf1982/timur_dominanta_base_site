<?php

use yii\db\Migration;
use common\models\RoomRecord;
class m170129_161941_fill_room_empty extends Migration
{


 public function up()
    {
 






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

               //    $url=$faker->imageUrl($width = 640, $height = 480);
               //   $alt= $faker->address;
               //   $r=array('url'=>$url,'alt'=>$alt); 
               // array_push($img_json_arr, $r);
               }
               //     $url=$faker->imageUrl($width = 640, $height = 480);
               //   $alt= $faker->address;
               //   $r=array('url'=>$url,'alt'=>$alt); 
               // array_push($img_json_arr, $r);


              

               //       $url3=$faker->imageUrl($width = 640, $height = 480);
               //   $alt3= $faker->address;
               //   $r3=array('url'=>$url,'alt'=>$alt); 
               // array_push($img_json_arr, $r3);


      
                       //}
                       

      $contact->img=json_encode($img_json_arr);
     // echo $contact->img;
              
            $contact->updated_at=time();
             $contact->created_at=time();
             ;
             if($contact->validate()){
                
             }
             echo "Room ".$j.PHP_EOL;
           //  echo var_dump( $contact->errors);
            $contact->save();
         
        //  foreach (range(0, 50) as $number) {
        //     $faker = Faker\Factory::create();
        //     $contact = new Room();
        //      $contact->price= $faker->numberBetween(50000,250000);            
        // $contact->own_or_business= $faker->numberBetween(0,1)?'own':'bis';
        //      $contact->square=$faker->numberBetween(35,150);
        //     $contact->district=$faker->state ; 
        //     $contact->street=$faker->streetName ; 
        //       $contact->description=$faker->text;                 
        //     $contact->shortdistrict=$faker->sentence;
        //      $contact->manager=$faker->numberBetween(1,20);             
        //     $contact->coment=$faker->numberBetween(1,5);

        //     $contact->url=$faker->url;
        //     $contact->site= "OLX";
        //     $contact->save();
        //     }

             }
    }




    public function down()
    {

        $this->truncateTable('room');

    }
}

