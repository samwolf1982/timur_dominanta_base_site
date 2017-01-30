
        <div class="container">
            <!-- Example row of columns -->
            <div class="row">
                            <div id="catalog_about" class="catalog_upper" >
                    <div class="catalog-title-about"><span><?=$title_widget?></span></div>

                    <div class="catalog">
                           

<?php foreach ($data_provider as $key => $value): ?>
    

                        <div class="col-md-3 col-sm-3">
                            <div class="tile">
                                <!-- one item -->
                          
                                <div class="catalog-item">
                                      <div class="thumbnail user_thumbnail">
      <img  src="<?=$value->img?>" alt="<?=$value->alt?>">
      <div class="caption">
        <h3 class="user_name"><?=$value->name?></h3>
        <h5 class="user_job"><?=$value->job?></h5>
       <div class="review-text">
                   <?=$value->text?>                                                           </div>
        <!-- <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p> -->
      </div>
    </div>


                                    
                                    </div>
                                    <!-- end item -->


                            




                                </div>

                            </div>



<?php endforeach ?>





                        </div>
                        <li >
                        <div class="col-md-12 text-center "><a href="#" class="btn btn-default btn-block recall" > Оставить отзыв</a></div>
                            <!-- !!!!! обязательно ??? потом подправить -->
                        </li>
                    </div>
            </div>

            <hr>
        </div> <!-- /container -->