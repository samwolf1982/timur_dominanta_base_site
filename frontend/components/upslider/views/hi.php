<div class="container" style="    margin-top: -5em;">

	<div class="col-md-3 text-center bottom-align-text">
		<div class="wrap-media">
			<div class="media ">
				<div class="media-top">
					<div class="lead title_upslider_widget"> <?=$title_widget?></div>
				</div>
				<div class="media-body">
					<a href="<?=$url_filial?>"><img class="scale" src="<?=$img_filial?>"></a>
				</div>
			</div>
		</div>



	</div>
	<div class="col-md-9">
		<br>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">

                <?php 

                   for ($i=0; $i <count($data_provider) ; $i++) { ?>
             <li data-target="#myCarousel" data-slide-to="<?=$i ?>" class="<?=$i==0?'active':''; ?>"></li>         
                  <?php }

                 ?>
<!-- 
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li> -->
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">


				<?php
				$i=0;


				foreach ($data_provider as $key => $value) {
  // Yii::trace($value);
					?>
               

				<div class="wrap_img_upslider_widget item <?= ($i++)==0?'active':'';?> ">
				  	<img class="img_upslider_widget" src= "<?= Yii::getAlias('@upload_folder_upslider').$value->img; ?>" alt="<?=$value->alt ?>" >
					<div class="carousel-caption">
					<a class="nodecor" href="<?=$value->url ?>"><h3><?=$value->title ?></h3>
						<p><?=$value->description ?></p>
					</a>
					</div>
				</div>  


				<?php }
				?>
				



			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</div>