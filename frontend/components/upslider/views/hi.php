<div class="container" style="    margin-top: -5em;">

	<div class="col-md-3 text-center bottom-align-text">
		<div class="wrap-media">
			<div class="media ">
				<div class="media-top">
					<div class="lead"> Сеть офисов «Доминанта»  сегодня: </div>
				</div>
				<div class="media-body">
					<a href="/filials"><img class="scale" src="img/verstka/left.jpg"></a>
				</div>
			</div>
		</div>



	</div>
	<div class="col-md-9">
		<br>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">


				<?php
				foreach (range(0, 5) as $key => $value) {?>
				<div class="item <?= $value==0?'active':'';?> ">
					<img src= "<?php Yii::getAlias('@frontend').'/web/';  ?>img/verstka/center-1140x380.png" alt="Chania" >
					<div class="carousel-caption">
						<h3>Chania</h3>
						<p>The atmosphere in Chania has a touch of Florence and Venice.</p>
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