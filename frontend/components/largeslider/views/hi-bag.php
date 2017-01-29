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


             <div class="thumbnail">
                <img class="span2 img-thumbnail" src="/frontend/web/upload/img/upslider/January-29-2017/78787878-320x220.jpg" alt="ALT NAME">
                <div class="caption text-center">
                    <h3 class=" wrap_titlethumbnail"><a href="">
  <?=$data_provider[$obj_counter]->title; ?></a></h3>
                  <p> <div class="address_new" style="text-align: right;">

                                                        <?=
                                                        LargesliderWidget::shortDescription($data_provider[$obj_counter]->description);
                                                          ; ?>

                                                                  

                                                                    </div></p>
</div>
                               <div class="wrap_table "> 
                                 <p class="" style="text-align: right;">
                                                       Общая площадь: <?=$data_provider[$obj_counter]->total_square; ?>м<sup>2</sup><br>
                                                                    Цена:     <?php
                                                                    echo number_format($data_provider[$obj_counter]->price_uan, 0, ',', ' ')." UAN"; ?><br>  
                                     <?php
                                                                   echo number_format($data_provider[$obj_counter]->price_usd, 0, ',', ' ')." $"; ?></p>                                    

                               </div>
                                                        
               
                </div>
              </div>

<!-- <ul class="thumbnails">
  <li class="span4">
    <div class="thumbnail right-caption span4">
      <img  class="span2 img-thumbnail" src="/frontend/web/upload/img/upslider/January-29-2017/78787878-320x220.jpg" alt=""  >
      <div class="caption">
        <h5>Thumbnail label Thumbnail label Thumbnail label </h5>
        <p>Cras justo odio, dapibus ac facilisis in, egestasdapibus ac facilisis in, egestasdapibus ac facilisis in, egestas eget. Eget metus</p>
        <p><a href="#" class="btn btn-primary">Action</a> <a href="#" class="btn">Action</a></p>
      </div>
    </div>
  </li>
</ul> -->





                                                        <div class="col-sm-12 clear_padding hide">

                                                       
                                                            <div class="thumbnail right-caption span4">

                                                             <div class="col-sm-5">
                                             <img class="span2" src="<?=Yii::getAlias("@web");?>//img/verstka/img2-320x220.jpg" width="140"    alt="">
                                                             </div>
                                                        <div class="col-sm-7">
                                                                 <div class="caption">
                                                                    <h5 class="title_new"><a href="">
                                                                    
                                                                    <?=$data_provider[$obj_counter]->title; ?>

                                                                    </a></h5>
                                                   <div class="address_new">

                                                        <?=
                                                        LargesliderWidget::shortDescription($data_provider[$obj_counter++]->description);
                                                          ; ?>

                                                                  

                                                                    </div>
                                                                    <div class="sqauare_new">Общая площадь: <?=$data_provider[$obj_counter]->total_square; ?>м<sup>2</sup></div>
                                                                    <div class="wrap_table">
                                                                        <table class="table-responsive">

                                                                            <tbody>
                                                                                <tr class="price_uan_new">
                                                                                    <td>Цена:</td>
                                                                                    <td>

                                                                                    <?php
                                                                    echo number_format($data_provider[$obj_counter]->price_uan, 0, ',', ' ')." UAN"; ?> 


                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="price_uan_new">
                                                                                    <td></td>
                                                                                    <td class=" pull-right">
                                                                                    <?php
              
                                                         echo number_format($data_provider[$obj_counter]->price_usd, 0, ',', ' ')." $";
                                                        ; ?> </td>     
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <p>
                                                                        <div class="details_new pull-right"><a href="">Подробней..</a></div>
                                                                    </p>
                                                                </div>

                                                        </div>
                                                                
                                                           
                                                            </div>
                                                        </div>

                                                    </div>
                                                        

                                                    <div class="col-sm-4 clear_padding wrap_item wrap_item_middle">
                                                        <div class="col-sm-12 clear_padding">
                                                            <div class="thumbnail right-caption span4">
                                                                <img class="span2" src="<?=Yii::getAlias("@web");?>//img/verstka/img2-320x220.jpg" width="140" alt="">
                                                                <div class="caption">
                                                                    <h5 class="title_new"><a href="">
                                                <?=$data_provider[$obj_counter]->title; ?>

                                                                    </a></h5>
                                                                    <div class="address_new">
                                                                            <?=
                                                        LargesliderWidget::shortDescription($data_provider[$obj_counter++]->description);
                                                          ; ?>

                                                                    </div>
                                                                    <div class="sqauare_new">Общая площадь: <?=$data_provider[$obj_counter]->total_square; ?>м<sup>2</sup></div>
                                                                    <div class="wrap_table">
                                                                        <table class="table-responsive">

                                                                            <tbody>
                                                                                <tr class="price_uan_new">
                                                                                    <td>Цена:</td>
                                                                                    <td>
                                                                    <?php
                                                                    echo number_format($data_provider[$obj_counter]->price_uan, 0, ',', ' ')." UAN"; ?>   
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="price_uan_new">
                                                                                    <td></td>
                                                                                    <td class="pull-right">
                                                                                            <?php
                                                                    echo number_format($data_provider[$obj_counter]->price_uan, 0, ',', ' ')." $"; ?> 
                                                                                    </td>     
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <p>
                                                                        <div class="details_new pull-right"><a href="">Подробней..</a></div>
                                                                    </p>
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