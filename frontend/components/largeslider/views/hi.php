<?php 
use frontend\components\largeslider\LargesliderWidget;
$coun_loop=(int)(count($data_provider)/6); // count sliders
$obj_counter=0;  



?>                  



                       <div id="<?=$id_widget?>" class="catalog_upper" >
                            <div class="catalog-title"><span><?=$title_widget?> <?=count($data_provider);?>  <?php ?> </span></div>

                            <div class="catalog">


                                <div class="col-md-12">
                                    <br>
                                    <div id="<?=$id_slider?>" class="carousel slide" data-ride="carousel" data-interval="false" >
                                        <!-- Indicators -->
                                        <ol class="carousel-indicators">
                                            <li data-target="#<?=$id_slider?>" data-slide-to="0" class="active"></li>
                                            <li data-target="#<?=$id_slider?>" data-slide-to="1"></li>
                                            <li data-target="#<?=$id_slider?>" data-slide-to="2"></li>
                                            <li data-target="#<?=$id_slider?>" data-slide-to="3"></li>
                                        </ol>

                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner" role="listbox">


                                            <?php
                                          $r=  count($data_provider)/6;
                                            // foreach (range(0, 5) as $key => $value) {
                                        
                                for ($i=0; $i < $coun_loop; $i++) { 
                          ?>
                                            <div class="item <?= $i==0?'active':'';?> ">
                                                <div class="wrap_carousele">




                                                   <!--  <?php foreach (range(0, 2) as $k => $v) {?> -->


                                                    <div class="col-sm-4 clear_padding wrap_item wrap_item_left ">
                                                      <div class="col-sm-12 clear_padding">
    <div class="wrap_thumb">
     <div class="thumbnail">
     <div class="wrap_img_thumb text-center">  
     <?php 
     
     $json_img_arr=   json_decode( $data_provider[$obj_counter]->img);

    // Yii::trace($json_img_arr[0]->url);
      ?> 
            <img class="img-thumbnail" src="<?=$json_img_arr[0]->url?>" alt="<?=$json_img_arr[0]->alt?>" >
            </div>
         <div class="caption">
                <h4 class=" wrap_titlethumbnail"><a href="">
  <?=$data_provider[$obj_counter]->title; ?></a></h4>
                <p>     <?=
                                                        LargesliderWidget::shortDescription($data_provider[$obj_counter]->description);
                                                          ; ?></p>
                       <div class="wrap_table "> 
                                 <p class="" style="text-align: right;">
                                                       Общая площадь: <?=$data_provider[$obj_counter]->total_square; ?>м<sup>2</sup><br>
                                                                    Цена:     <?php
                                                                    echo number_format($data_provider[$obj_counter]->price_uan, 0, ',', ' ')." UAN"; ?><br>  
                                     <?php
                                                                   echo number_format($data_provider[$obj_counter++]->price_usd, 0, ',', ' ')." $"; ?></p>                                    

                               </div>
            </div>
          </div>
        
        
    </div>
</div>

                                                    </div>
                                                        

                                                    <div class="col-sm-4 clear_padding wrap_item wrap_item_middle">
                                                        <div class="col-sm-12 clear_padding">
                                             <div class="wrap_thumb">
     <div class="thumbnail">
             <div class="wrap_img_thumb text-center">  
     <?php 
     
     $json_img_arr=   json_decode( $data_provider[$obj_counter]->img);

    // Yii::trace($json_img_arr[0]->url);
      ?> 
            <img class="img-thumbnail" src="<?=$json_img_arr[0]->url?>" alt="<?=$json_img_arr[0]->alt?>" >
            </div>
              <div class="caption">
                <h4 class=" wrap_titlethumbnail"><a href="">
  <?=$data_provider[$obj_counter]->title; ?></a></h4>
                <p>     <?=
                                                        LargesliderWidget::shortDescription($data_provider[$obj_counter]->description);
                                                          ; ?></p>
                       <div class="wrap_table "> 
                                 <p class="" style="text-align: right;">
                                                       Общая площадь: <?=$data_provider[$obj_counter]->total_square; ?>м<sup>2</sup><br>
                                                                    Цена:     <?php
                                                                    echo number_format($data_provider[$obj_counter]->price_uan, 0, ',', ' ')." UAN"; ?><br>  
                                     <?php
                                                                   echo number_format($data_provider[$obj_counter++]->price_usd, 0, ',', ' ')." $"; ?></p>                                    

                               </div>
            </div>
          </div>
        
        
    </div>
                                                        </div>

                                                    </div>


                                       

                                                 <!--    <?php  

                                                             }
                                                    ?> -->



                                                </div>
                                            </div>  
                                            <?php }
                                            ?>




                                        </div>

                                        <!-- Left and right controls -->
                                        <a class="left carousel-control" href="#<?=$id_slider?>" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#<?=$id_slider?>" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>



                            </div>
                            <li >
                                &nbsp; 
                                <!-- !!!!! обязательно ??? потом подправить -->
                            </li>
                        </div>