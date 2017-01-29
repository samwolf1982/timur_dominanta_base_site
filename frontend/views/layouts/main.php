<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;


      


AppAsset::register($this);
?>
<?php $this->beginPage() ?>




<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
  <meta charset="<?= Yii::$app->charset ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

    <!-- заменить  meta - description в индексе перед рендером -->
    <!-- http://stackoverflow.com/questions/29974513/how-to-use-registermetatag-in-yii-2 -->
   <meta name="description" content="" />
    <?php $this->head() ?>

   
      <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

</head>
<body>
<?php $this->beginBody() ?>


    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Доминанта</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">недвижимость</a></li>
                    <li><a href="#about">новострои</a></li>
                    <li><a href="#contact">новости</a></li>
                    <li><a href="#contact">контакты</a></li>
           <!--  <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
          </li> -->
      </ul>
          <!-- <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Default</a></li>
            <li class="active"><a href="./">Static top <span class="sr-only">(current)</span></a></li>
            <li><a href="../navbar-fixed-top/">Fixed top</a></li>
        </ul> -->
    </div><!--/.nav-collapse -->
</div>
</nav>


<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container header">
        <div class="row">
            <div class="col-md-4 "></div>
            <div class="col-md-4 arka-c text-center">

                <a href=""><img src="<?=Yii::getAlias("@web");?>/img/verstka/logo.png"></a>
            </div>
            <div class="col-md-4 "></div> 
        </div>
        <div class="row contacts-row">
            <div class="col-md-4 text-center">
                <div class="social">
                    <a href="https://vk.com/club12128325"><img class="scale" src="<?=Yii::getAlias("@web");?>/img/verstka/vk.png" alt="vk"></a>
                    <a href="https://www.facebook.com/pages/Dominanta-D/127233184113790"><img class="scale" src="<?=Yii::getAlias("@web");?>/img/verstka/facebook.png" alt="facebook"></a>
                    <a href="https://www.youtube.com/channel/UCiUD9d9dDxQyd7KLqzIdtYw"><img class="scale" src="<?=Yii::getAlias("@web");?>/img/verstka/youtube.png" alt="youtube"></a>
                    <a href="https://www.instagram.com/"><img class="scale" src="<?=Yii::getAlias("@web");?>/img/verstka/insta.png" alt="insta"></a>
                </div>

            </div>
            <div class="col-md-4">

                <div class="row">

                    <div class="col-md-12 text-center large-tel"> (048) 700 84 84</div>
                </div>


            </div>
            <div class="col-md-4 contacts">


                <div >
                    <ul class="contacts-inner" style="list-style:none;">
                        <li><a href=""><img class="scale" src="<?=Yii::getAlias("@web");?>/img/verstka/phone.png"></a>    Перезвонить</li>
                        <li><a href=""><img class="scale" src="<?=Yii::getAlias("@web");?>/img/verstka/skype.png"></a>    Skype-консультация</li>
                        <li><a href=""><img class="scale" src="<?=Yii::getAlias("@web");?>/img/verstka/mail.png"></a>     Написать нам</li>
                    </ul>
                </div>

            </div>
        </div> 
    </div>
</div>



 <?= $content ?>



<div class="wrap hide">
    <?php
    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Contact', 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>













<div class="container">
    <!--footer start from here-->
    <footer>
        <div class="container">
            <div class="row">

                <div class="col-md-3 col-sm-6 paddingtop-bottom">
                    <h6 class="heading7">Недвижимость</h6>
                    <ul class="footer-ul">
                        <li><a href="#"> Каталог обьектов</a></li>
                        <li><a href="#"> Новострои</a></li>
                        <!-- <li><a href="#"> Terms & Conditions</a></li>
                        <li><a href="#"> Client Gateway</a></li>
                        <li><a href="#"> Ranking</a></li>
                        <li><a href="#"> Case Studies</a></li>
                        <li><a href="#"> Frequently Ask Questions</a></li> -->
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 paddingtop-bottom">
                    <h6 class="heading7">Доминанта</h6>
                    <ul class="footer-ul">
                        <li><a href="#"> О компании</a></li>
                        <li><a href="#"> Карьера</a></li>
                        <!-- <li><a href="#"> Terms & Conditions</a></li>
                        <li><a href="#"> Client Gateway</a></li>
                        <li><a href="#"> Ranking</a></li>
                        <li><a href="#"> Case Studies</a></li>
                        <li><a href="#"> Frequently Ask Questions</a></li> -->
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 paddingtop-bottom">
                    <h6 class="heading7">Новости</h6>
                    <ul class="footer-ul">
                        <li><a href="#"> Все</a></li>
                        <li><a href="#"> Доминанты</a></li>
                    <!--    <li><a href="#"> Terms & Conditions</a></li>
                        <li><a href="#"> Client Gateway</a></li>
                        <li><a href="#"> Ranking</a></li>
                        <li><a href="#"> Case Studies</a></li>
                        <li><a href="#"> Frequently Ask Questions</a></li> -->
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 paddingtop-bottom">
                    <h6 class="heading7">Контакты</h6>
                    <ul class="footer-ul">
                        <li><a href="#"> Контакты</a></li>
                        <li><a href="#"> Отзывы</a></li>
                    <!--    <li><a href="#"> Terms & Conditions</a></li>
                        <li><a href="#"> Client Gateway</a></li>
                        <li><a href="#"> Ranking</a></li>
                        <li><a href="#"> Case Studies</a></li>
                        <li><a href="#"> Frequently Ask Questions</a></li> -->
                    </ul>
                </div>


            </div>

            <!-- down -->
            <div class="col-sm-12 paddingtop-bottom text-center">
            <h6 class="heading7_description">Подписывайтесь на наши группы в социальных сетях!</h6>
            

                <a href="https://vk.com/club12128325"><img class="scale" src="<?=Yii::getAlias("@web");?>/img/verstka/vk.png" alt="vk"></a>
                <a href="https://www.facebook.com/pages/Dominanta-D/127233184113790"><img class="scale" src="<?=Yii::getAlias("@web");?>/img/verstka/facebook.png" alt="facebook"></a>
                <a href="https://www.youtube.com/channel/UCiUD9d9dDxQyd7KLqzIdtYw"><img class="scale" src="<?=Yii::getAlias("@web");?>/img/verstka/youtube.png" alt="youtube"></a>
            


            </div>




        </div>
    </footer>
    <!--footer start from here-->

    <div class="copyright">
        <div class="container">
            <div class="col-md-6">
                <p>© Доминанта, 2017г. Все права защищены. </p>
            </div>
            <div class="col-md-6">
   <!--    <ul class="bottom_ul">
        <li><a href="#">webenlance.com</a></li>
        <li><a href="#">About us</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Faq's</a></li>
        <li><a href="#">Contact us</a></li>
        <li><a href="#">Site Map</a></li>
    </ul> -->
</div>
</div>
</div>

<div class="footer-menu">
                    <a href="/privacy">Политика конфиденциальности</a>
                    <a href="/terms">Условия использования</a>
                    <a href="#">Юридическая информация</a>
                    <a href="/index.php?route=information/sitemap">Карта сайта</a>
                </div>


</div> <!-- /container -->


<div id="map"></div>
<?php $this->endBody() ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?=Yii::getAlias("@web");?>/js/docs/assets/js/vendor/jquery.min.js"><\/script>')</script>

    <script>    
  var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: -34.397, lng: 150.644},
    zoom: 8
  });
}    
</script>
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDB2kS5Y_XmTaIwC2h0uFxml1SDnrqYqnw&callback=initMap"
            async defer>
            </script>
</body>
</html>
<?php $this->endPage() ?>
