<?php
include "poster.php";
$content = "Фотограф, Артур, Баширов, Фотография, Искусство, Арт, Красота, Девушки, Фотоискусство, Места, Цвет, Лофт, Оренбург, nikon, russia, russians, girls, photoart, Arthur, Bashirov, Photographer";
?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
	<meta name="keywords" content="<?=$content;?>">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <title>Art Photographer</title>
    <meta name="description" content="">
<!--

Sprint Template

http://www.templatemo.com/tm-401-sprint

-->
    <meta name="viewport" content="width=device-width">

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="css/bootstrap-image-gallery.min.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/dopstyle.css">
    <link rel="stylesheet" href="css/templatemo_misc.css">
    <link rel="stylesheet" href="css/templatemo_style.css">
<!--   <script src="js/vendor/modernizr-2.6.2.min.js"></script> -->

</head>
<body>
    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
	<div class="otstup"> </div>
  <div id="front">
       <div class="container-fluid">
           <div class="row">
         <div class="navbar navbar-inverse navbar-fixed-top">
           <div class="container">
             <div class="navbar-header">
           <a class="navbar-brand" href="/index.php"> ARTHUR BASHIROV</a>
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
               <span class="sr-only">Contacts</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
           </div>
           <div class="collapse navbar-collapse" id="responsive-menu">
               <ul class="nav navbar-nav">
                 <li><a href="/myblog.php">Блог</a></li>
               <li><a href="/gallery.php">Портфолио</a></li>
               <li><a href="/listentome.php">Уроки и лайфхаки</a></li>
           </div>
         </div>
       </div>
       </div>
       </div>
       <div id="blueimp-gallery" class="blueimp-gallery">
           <!-- The container for the modal slides -->
           <div class="slides"></div>
           <!-- Controls for the borderless lightbox -->
           <h3 class="title"></h3>
           <a class="prev">‹</a>
           <a class="next">›</a>
           <a class="close">×</a>
           <a class="play-pause"></a>
           <ol class="indicator"></ol>
           <!-- The modal dialog, which will be used to wrap the lightbox content -->
           <div class="modal fade">
               <div class="modal-dialog">
                   <div class="modal-content">
                       <div class="modal-header">
                           <button type="button" class="close" aria-hidden="true">&times;</button>
                           <h4 class="modal-title"></h4>
                       </div>
                       <div class="modal-body next"></div>
                       <div class="modal-footer">
                           <button type="button" class="btn btn-info pull-left prev">
                               <i class="glyphicon glyphicon-chevron-left"></i>
							   <font color="#95F7F2">Previous</font>
                           </button>
                           <button type="button" class="btn btn-info next">
						    <font color="#95F7F2">Next</font>

                               <i class="glyphicon glyphicon-chevron-right"></i>
                           </button>
                       </div>
                   </div>
               </div>
           </div>
       </div>
	   <div class="row" id="links" style="text-align: center;">
    <?php post_img(); ?>
	</div>
<div class="otstup"></div>
<div class="row" style="text-align: center;">
  <div class="container">
    <div class="col-md-12">
      <a href="gallery.php" type="button" class="btn btn-info">Вернуться к выбору галереи</a>
  <div class="otstup"></div>
    </div>

  </div>

</div>
    <!-- </div> <!-- /.site-slider -->
    <script src="js/vendor/jquery-1.10.1.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
    <script src="js/jquery.easing-1.3.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
    <script src="js/bootstrap-image-gallery.min.js"></script>
    <!-- templatemo 401 sprint -->
</body>
</html>
