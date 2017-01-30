<?php
use frontend\components\upslider\UpsliderWidget;
use frontend\components\largeslider\LargesliderWidget;
use frontend\components\partherslider\ParthersliderWidget;
use frontend\components\testimonials\TestimonialsWidget;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<?php   echo UpsliderWidget::widget(
    ['title' =>"Сеть офисов «Доминанта»  сегодня:",
     'img_filial'=>'img/verstka/left.jpg',
     'url_filial'=>'/filials',
     'data_provider'=>$upslider_provider,
     ]);
?>







<!-- filter -->
<div class="container" style="padding-top: 1.5em;">
    <div class="row">
        <form action="" class="form-inline">
            <div class="col-sm-6 col-md-12 wrap_fields">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="form-group pull-right">
                            <label class="control-label" for="search_id">Поиск по ID:</label>
                            <input type="text" class="form-control" id="search_id" placeholder="Введите ид">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="form-group pull-right">

                            <input style="width: 60%; margin-left: 4px;" type="text" class="form-control pull-right" id="price_from" placeholder="От"><label class="control-label pull-right" for="price">Цена</label>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="form-group pull-right">   
                            <input type="text" class="form-control" id="price_to" placeholder="До">

                        </div>
                    </div>
                </div> <!-- end row -->


                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="form-group pull-right">
                            <label class="control-label rigth_district_sm" for="all_district">Выберите район</label>
                            <input type="text" class="form-control rigth_district_sm" id="all_district" placeholder="Все районы">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="form-group pull-right">

                            <input type="text" class="form-control" id="district" placeholder="Район">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="form-group pull-right">   
                            <input type="text" class="form-control" id="count_rooms" placeholder="Количество комнат">
                        </div>
                    </div>
                </div> <!-- end row -->


                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="form-group pull-right">
                            <label class="control-label rigth_district_sm" for="all_district">Тип недвижимости</label>
                            <input type="text" class="form-control rigth_district_sm" id="type_realty" placeholder="Квартира">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="form-group pull-right">

                            <input type="text" class="form-control" id="some_type" placeholder="Любой тип">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="form-group pull-right">   
                            <input type="text" class="form-control" id="buy" placeholder="Покупка">
                        </div>
                    </div>
                </div> <!-- end row -->


            </div>
            <div class="col-sm-6 col-md-12 wrap_button">
                <div class="col-md-4 text-center hide"><a href="#" class="btn btn-default btn-block" > онлайн консультация специалиста</a></div>
                <div class="col-md-4 text-center hide"><a href="#" class="btn btn-default btn-block" > заказать звонок</a></div>
                <div class="col-md-4 text-center pull-right"><a href="#" class="btn btn-default btn-block" > Найти</a></div>
            </div>
        </form>
    </div>
</div>
<!-- end filter -->








<!-- main wrap content -->
<div class="container wrap_content">

    <!-- side bar -->
    <div class="col-md-2 text-center">
        <div class="row">

       


            <div class="left-site-bar">

                <div class="news-box">
                    <div class="news-title-obj"><a href="#">Объекты на 21.01.17</a> </div>

                       <table class="table table-striped obj_table">

    <tbody>
      
        <?php
                        $max=5;
                        foreach (range(0, $max) as $key => $value) {?>
       <tr>
        <td >Квартиры продажа </td>
        <td class="count_room">8</td>
      </tr>
      <?php }?>  

    </tbody>
  </table>


                </div> 

                <!-- end news box -->

    <div class="news-box">
                    <div class="news-title"><a href="#">Новости</a> </div>

                    <ul class="article_ul">


                        <?php
                        $max=count($news)-1;
                        for ($i=0; $i <count($news) ; $i++) { 
                                 
                            ?>
                        <li class="article_intro">
                            <div class="wrap_in_article">
                                <div class="col-sm-12 "> <span class="pull-left data_article">
                                    <?php 
                                     $d=$news[$i]->updated_at;
                                     echo date('m.d.y',$d);
                                     ?>


                                </span></div>
                                <div class=" pull-left col-sm-12 "> <p class="pull-left  title_article"><a href="#"> <?=$news[$i]->title ?> </a></p></div>
                                <div class="content_article col-sm-12"><p><?=$news[$i]->short_description ?></p></div>
                                <div class="col-sm-12"> <span class="details_article pull-right"><a href=""> Подробней </a></span>
                                </div> 
                                <?= $i==$max?'':' <div class="col-sm-12"><hr></div>';?>     
                            </div>

                        </li>


                        <?php }
                        ?>





                        <li >
                            &nbsp; 
                            <!-- !!!!! обязательно ??? потом подправить -->
                        </li>

                    </ul>

                </div> 

            </div>



        </div>

   
        </div>
        <!-- end left sidebar -->
        <div  class="col-md-10" style="padding-right: 0; ">

            <div class="wrap_catalog"> 

                <div id="catalog" class="catalog_upper" style="display: none;">
                    <div class="catalog-title"><span>Каталог недвижимости "Доминанта"</span></div>

                    <div class="catalog">

                        <?php $max=2;
                        foreach (range(0, $max) as $key => $value) {?>

                        <div class="col-md-4 col-sm-4">
                            <div class="tile">
                                <!-- one item -->
                                <?php
                                $max2=2;
                                foreach (range(0, $max2) as $key => $value) {?>
                                <div class="catalog-item">
                                    <div class="item-title">
                                        <div class="sum">2580</div>
                                        <p class="item_title_p"><a style="text-transform: uppercase;" href="">Квартиры</a><br/>
                                            <a href="">Одессы</a> и <a href="">Одесской области</a> </p>
                                        </div>
                                        <ul class="catalog-links">
                                            <li><img src="<?=Yii::getAlias("@web");?>//img/verstka/triangle-catalog.png"> <a class="catalog_links" href="">квартиры</a> </li>
                                            <li><img src="<?=Yii::getAlias("@web");?>//img/verstka/triangle-catalog.png"><a class="catalog_links" href="">квартиры до 500 тыс. грн</a> </li>
                                            <li><img src="<?=Yii::getAlias("@web");?>//img/verstka/triangle-catalog.png"><a class="catalog_links" href="">квартиры до 1 млн. грн</a> </li>
                                            <li><img src="<?=Yii::getAlias("@web");?>//img/verstka/triangle-catalog.png"><a class="catalog_links" href="">квартиры свыше 1 млн. грн</a> </li>
                                        </ul>
                                    </div>
                                    <!-- end item -->


                                    <?php }
                                    ?>




                                </div>

                            </div>





                            <?php }
                            ?>






                        </div>
                        <li >
                            &nbsp; 
                            <!-- !!!!! обязательно ??? потом подправить -->
                        </li>
                    </div>



<?php   echo LargesliderWidget::widget(
['id_widget'=>'catalog2','id_slider'=>'myCarousel2','title'=>'Каталог недвижимости "Доминанта"','data_provider'=>$catalog_room_provider,]
); ?>




<?php   echo LargesliderWidget::widget(
['id_widget'=>'catalog3','id_slider'=>'myCarousel3','title'=>'Эксклюзивные предложения','data_provider'=>$catalog_room_provider_exclusive,]
); ?>

<?php   echo LargesliderWidget::widget(
['id_widget'=>'catalog4','id_slider'=>'myCarousel4','title'=>'Новые посутпления','data_provider'=>$catalog_room_provider_latest,]
); ?>

























                </div> 
                <!-- end wrap content -->




            </div>
        </div>
        <!--end  main wrap content -->





























        <div class="container hide">
            <!-- Example row of columns -->
            <div class="row">
                            <div id="catalog_partners" class="catalog_partners" >
                    <div class="catalog-title-about"><span>Наши партнеры</span></div>

                    <div class="catalog">

                        <?php $max=3;
                        foreach (range(0, $max) as $key => $value) {?>

                        <div class="col-md-3 col-sm-3">
                            <div class="tile">
                                <!-- one item -->
                                <?php
                                $max2=0;
                                foreach (range(0, $max2) as $key => $value) {?>
                                <div class="catalog-item">
                                      <div class="thumbnail user_thumbnail">
      <img src="http://test.dominanta-d.com/image/cache/catalog/1_main/brands/intostroi-200x50.png" alt="...">
      <div class="caption">
        <!-- <h3 class="user_name">Екатерина</h3>
        <h5 class="user_job">Топ-менеджер</h5>
       <div class="review-text">
                   С Доминантой у меня получилось реализовать практически невозможную сделку, была очень сложная недвижимость! Я очень довольна                                                            </div> -->
        
      </div>
    </div>


                                    
                                    </div>
                                    <!-- end item -->


                                    <?php }
                                    ?>




                                </div>

                            </div>





                            <?php }
                            ?>






                        </div>
                        <li >
                    <!--    <div class="col-md-12 text-center "><a href="#" class="btn btn-default btn-block recall" > Оставить отзыв</a></div> -->
                            <!-- !!!!! обязательно ??? потом подправить -->
                        &nbsp;
                        </li>
                    </div>
            </div>

            <hr>
        </div> <!-- /container -->




<?php   echo ParthersliderWidget::widget(
['id_widget'=>'catalog5','id_slider'=>'myCarousel5','title'=>'Наши партнеры','data_provider'=>$partner_provider,]
); ?>



<?php   echo TestimonialsWidget::widget(
['title'=>'Отзывы о нас','data_provider'=>$testimonials,]
); ?>















        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron bottom-line">

            <div class="row">

                <div class="col-md-6 col-lg-6 " style="padding-right: 0;">
                    <div class="pull-right">
                        <a href=""><img src="img/verstka/footl.png"></a></div>
                    </div>
                    <div class="col-md-6 col-lg-6" style="padding-left: 0;">

                        <div class="pull-left" >
                            <a href=""><img src="img/verstka/footr.png"></a></div>
                        </div>
                    </div>

                </div>


            </div>