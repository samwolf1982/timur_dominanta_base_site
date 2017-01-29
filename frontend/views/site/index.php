<?php
use frontend\components\upslider\UpsliderWidget;
use frontend\components\largeslider\LargesliderWidget;
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
                        $max=2;
                        foreach (range(0, $max) as $key => $value) {?>
                        <li class="article_intro">
                            <div class="wrap_in_article">
                                <div class="col-sm-12 "> <span class="pull-left data_article">06.12.2016</span></div>
                                <div class=" pull-left col-sm-12 "> <p class="pull-left  title_article"><a href="#">  Lorem ipsum dolor sit amet, </a></p></div>
                                <div class="content_article col-sm-12"><p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet quasi, tempora hic cupiditate itaque eaque deserunt quaerat, corrupti nam commodi impedit.</p></div>
                                <div class="col-sm-12"> <span class="details_article pull-right"><a href=""> Подробней </a></span>
                                </div> 
                                <?= $value==$max?'':' <div class="col-sm-12"><hr></div>';?>     
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
['id_widget'=>'catalog2','id_slider'=>'myCarousel2','title'=>'Каталог недвижимости "Доминанта"2','data_provider'=>$catalog_room_provider,]
); ?>












                    <div id="catalog3" class="catalog_upper" >
                        <div class="catalog-title"><span>Каталог недвижимости "Доминанта3"</span></div>

                        <div class="catalog">


                            <div class="col-md-12">
                                <br>
                                <div id="myCarousel3" class="carousel slide" data-ride="carousel" >
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel3" data-slide-to="1"></li>
                                        <li data-target="#myCarousel3" data-slide-to="2"></li>
                                        <li data-target="#myCarousel3" data-slide-to="3"></li>
                                    </ol>

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">


                                        <?php
                                        foreach (range(0, 5) as $key => $value) {?>
                                        <div class="item <?= $value==0?'active':'';?> ">
                                            <div class="wrap_carousele">




                                                <?php foreach (range(0, 2) as $k => $v) {?>


                                                <div class="col-sm-4 clear_padding wrap_item">
                                                    <div class="col-sm-12 clear_padding">
                                                        <div class="thumbnail right-caption span4">
                                                            <img class="span2" src="<?=Yii::getAlias("@web");?>//img/verstka/img2-320x220.jpg" width="140" alt="">
                                                            <div class="caption">
                                                                <h5 class="title_new"><a href="">Жилой комплекс "Сити Парк"</a></h5>
                                                                <div class="address_new">Сити-парк – это комплекс из 4 жилых 9-16-этажных д..</div>
                                                                <div class="sqauare_new">Общая площадь: 88м<sup>2</sup></div>
                                                                <div class="wrap_table">
                                                                    <table class="table-responsive">

                                                                        <tbody>
                                                                            <tr class="price_uan_new">
                                                                                <td>Цена:</td>
                                                                                <td>3 333 333 UAN</td>
                                                                            </tr>
                                                                            <tr class="price_uan_new">
                                                                                <td></td>
                                                                                <td>89 333 $</td>     
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


                                                <div class="col-sm-4 clear_padding wrap_item">
                                                    <div class="col-sm-12 clear_padding">
                                                        <div class="thumbnail right-caption span4">
                                                            <img class="span2" src="<?=Yii::getAlias("@web");?>//img/verstka/img2-320x220.jpg" width="140" alt="">
                                                            <div class="caption">
                                                                <h5 class="title_new"><a href="">Жилой комплекс "Сити Парк"</a></h5>
                                                                <div class="address_new">Сити-парк – это комплекс из 4 жилых 9-16-этажных д..</div>
                                                                <div class="sqauare_new">Общая площадь: 88м<sup>2</sup></div>
                                                                <div class="wrap_table">
                                                                    <table class="table-responsive">

                                                                        <tbody>
                                                                            <tr class="price_uan_new">
                                                                                <td>Цена:</td>
                                                                                <td>3 333 333 UAN</td>
                                                                            </tr>
                                                                            <tr class="price_uan_new">
                                                                                <td></td>
                                                                                <td>89 333 $</td>     
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

                                                <?php }
                                                ?>



                                            </div>
                                        </div>  
                                        <?php }
                                        ?>




                                    </div>

                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel3" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel3" role="button" data-slide="next">
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








            <div id="catalog4" class="catalog_upper" >
                        <div class="catalog-title"><span>Каталог недвижимости "Доминанта"</span></div>

                        <div class="catalog">


                            <div class="col-md-12">
                                <br>
                                <div id="myCarousel4" class="carousel slide" data-ride="carousel" >
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel4" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel4" data-slide-to="1"></li>
                                        <li data-target="#myCarousel4" data-slide-to="2"></li>
                                        <li data-target="#myCarousel4" data-slide-to="3"></li>
                                    </ol>

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">


                                        <?php
                                        foreach (range(0, 5) as $key => $value) {?>
                                        <div class="item <?= $value==0?'active':'';?> ">
                                            <div class="wrap_carousele">




                                                <?php foreach (range(0, 2) as $k => $v) {?>


                                                <div class="col-sm-4 clear_padding wrap_item">
                                                    <div class="col-sm-12 clear_padding">
                                                        <div class="thumbnail right-caption span4">
                                                            <img class="span2" src="<?=Yii::getAlias("@web");?>//img/verstka/img2-320x220.jpg" width="140" alt="">
                                                            <div class="caption">
                                                                <h5 class="title_new"><a href="">Жилой комплекс "Сити Парк"</a></h5>
                                                                <div class="address_new">Сити-парк – это комплекс из 4 жилых 9-16-этажных д..</div>
                                                                <div class="sqauare_new">Общая площадь: 88м<sup>2</sup></div>
                                                                <div class="wrap_table">
                                                                    <table class="table-responsive">

                                                                        <tbody>
                                                                            <tr class="price_uan_new">
                                                                                <td>Цена:</td>
                                                                                <td>3 333 333 UAN</td>
                                                                            </tr>
                                                                            <tr class="price_uan_new">
                                                                                <td></td>
                                                                                <td>89 333 $</td>     
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


                                                <div class="col-sm-4 clear_padding wrap_item">
                                                    <div class="col-sm-12 clear_padding">
                                                        <div class="thumbnail right-caption span4">
                                                            <img class="span2" src="<?=Yii::getAlias("@web");?>//img/verstka/img2-320x220.jpg" width="140" alt="">
                                                            <div class="caption">
                                                                <h5 class="title_new"><a href="">Жилой комплекс "Сити Парк"</a></h5>
                                                                <div class="address_new">Сити-парк – это комплекс из 4 жилых 9-16-этажных д..</div>
                                                                <div class="sqauare_new">Общая площадь: 88м<sup>2</sup></div>
                                                                <div class="wrap_table">
                                                                    <table class="table-responsive">

                                                                        <tbody>
                                                                            <tr class="price_uan_new">
                                                                                <td>Цена:</td>
                                                                                <td>3 333 333 UAN</td>
                                                                            </tr>
                                                                            <tr class="price_uan_new">
                                                                                <td></td>
                                                                                <td>89 333 $</td>     
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

                                                <?php }
                                                ?>



                                            </div>
                                        </div>  
                                        <?php }
                                        ?>




                                    </div>

                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel4" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel4" role="button" data-slide="next">
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





<div class="container">
            <!-- Example row of columns -->
            <div class="row">

        <div id="catalog5"  >
                        <div class="catalog-title-about"><span>Наши партнеры</span></div>

                        <div class="catalog">


                            <div class="col-md-12">
                                <br>
                                <div id="myCarousel5" class="carousel slide" data-ride="carousel" >
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel5" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel5" data-slide-to="1"></li>
                                        <li data-target="#myCarousel5" data-slide-to="2"></li>
                                        <li data-target="#myCarousel5" data-slide-to="3"></li>
                                    </ol>

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">


                                        <?php
                                        foreach (range(0, 4) as $key => $value) {?>
                                        <div class="item <?= $value==0?'active':'';?> ">
                                            <div class="wrap_carousele">




                                                <?php foreach (range(0, 2) as $k => $v) {?>


                                                <div class="col-sm-4 clear_padding wrap_item partner_padding">
                                                    <div class="col-sm-12 clear_padding">
                                                        <div class="thumbnail  span5">
                                                        <a href=""> <img class="span3" src="<?=Yii::getAlias("@web");?>//img/verstka/intostroi-200x50.png" alt=""></a>
                                                            <div class="caption">
                                                        
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                        

                                                <?php }
                                                ?>



                                            </div>
                                        </div>  
                                        <?php }
                                        ?>




                                    </div>

                                    <!-- Left and right controls -->
                                    <a class="left carousel-control  hide" href="#myCarousel5" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control hide" href="#myCarousel5" role="button" data-slide="next">
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


                        </div>  </div>















        <script type="text/javascript">
            

        </script>


        <div class="container">
            <!-- Example row of columns -->
            <div class="row">
                            <div id="catalog_about" class="catalog_upper" >
                    <div class="catalog-title-about"><span>Отзывы о нас</span></div>

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
      <img  src="<?=Yii::getAlias("@web");?>//img/verstka/3333333.jpg" alt="...">
      <div class="caption">
        <h3 class="user_name">Екатерина</h3>
        <h5 class="user_job">Топ-менеджер</h5>
       <div class="review-text">
                   С Доминантой у меня получилось реализовать практически невозможную сделку, была очень сложная недвижимость! Я очень довольна                                                            </div>
        <!-- <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p> -->
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
                        <div class="col-md-12 text-center "><a href="#" class="btn btn-default btn-block recall" > Оставить отзыв</a></div>
                            <!-- !!!!! обязательно ??? потом подправить -->
                        </li>
                    </div>
            </div>

            <hr>
        </div> <!-- /container -->



        <div class="container">
            <!-- Example row of columns -->
            <div class="row">
                <div class="col-md-4">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Heading</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div>
            </div>

            <hr>
        </div> <!-- /container -->





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