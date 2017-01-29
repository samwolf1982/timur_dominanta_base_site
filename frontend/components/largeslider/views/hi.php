                  


                   <div id="catalog2" class="catalog_upper" >
                        <div class="catalog-title"><span>Каталог недвижимости "Доминанта"</span></div>

                        <div class="catalog">


                            <div class="col-md-12">
                                <br>
                                <div id="myCarousel2" class="carousel slide" data-ride="carousel" data-interval="false" >
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel2" data-slide-to="1"></li>
                                        <li data-target="#myCarousel2" data-slide-to="2"></li>
                                        <li data-target="#myCarousel2" data-slide-to="3"></li>
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
                                                                                <td class=" pull-right">89 333 $</td>     
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
                                                                                <td class="pull-right">89 333 $</td>     
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
                                    <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
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