<?php 
$coun_loop=(int)(count($data_provider)/3); // count sliders
$obj_counter=0;  


?>  
<div class="container">
            <!-- Example row of columns -->
            <div class="row">

        <div id="<?=$id_widget?>"  >

                        <div class="catalog-title-about"><span><?=$title_widget?></span></div>

                        <div class="catalog">


                            <div class="col-md-12">
                                <br>
                                <div id="<?=$id_slider?>" class="carousel slide" data-ride="carousel" >
                                    <!-- Indicators -->
                                 <!--    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel5" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel5" data-slide-to="1"></li>
                                        <li data-target="#myCarousel5" data-slide-to="2"></li>
                                        <li data-target="#myCarousel5" data-slide-to="3"></li>
                                    </ol> -->

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">


                            <?php for ($i=0; $i < $coun_loop; $i++) {  ?>
                                        <div class="item <?= $i==0?'active':'';?> ">
                                            <div class="wrap_carousele">




                                                <?php foreach (range(0, 2) as $k => $v) {?>


                                                <div class="col-sm-4 clear_padding wrap_item partner_padding">
                                                    <div class="col-sm-12 clear_padding">
                                                        <div class="thumbnail  span5">
                                            <a href="<?=$data_provider[$obj_counter]->url_local?>"> <img class="partner_img" src="<?=$data_provider[$obj_counter]->img?>" alt="<?=$data_provider[$obj_counter++]->alt?>"></a>
                                                           
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


                        </div>  
    </div>