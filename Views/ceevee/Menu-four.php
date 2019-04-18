<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Ceevee - Free Responsive HTML5/CSS3 Template</title>
	<meta name="description" content="">
	<meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/Menu.css">
   <link rel="stylesheet" href="css/media-queries.css">
   <link rel="stylesheet" href="css/magnific-popup.css">
       <link href="css/bootstrap.min.css" rel="stylesheet">

       <link href="css/style.css" rel="stylesheet">
 <link rel="icon" href="img/fav.png" type="image/x-icon">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- main css -->
    <link href="css/style.css" rel="stylesheet">


   <!-- Script
   ================================================== -->
	<script src="js/modernizr.js"></script>
   <script src="js1/modernizr.js"></script>

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.png" >

</head>

<body>

   <!-- Header
   ================================================== -->
   <header id="home">

      <nav id="nav-wrap">

         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
	      <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

         <ul id="nav" class="nav">
            <li class="current"><a class="smoothscroll" href="index.html">Home</a></li>
            <li><a class="smoothscroll" href="#portfolio">Works</a></li>
         </ul> <!-- end #nav -->

      </nav> <!-- end #nav-wrap -->
      
 <p class="scrolldown">
         <a class="smoothscroll" href="#about"><i class="icon-down-circle"></i></a>
      </p>
      
   </header> <!-- Header End -->


 





   <!-- Portfolio Section
   ================================================== -->
<section id="portfolio">
 <div class="main-container portfolio-inner clearfix">
        <!-- portfolio div -->
        <div class="portfolio-div">
            <div class="portfolio">
                <a href="index.html" class="retour"style="font-family: 'opensans-light'; text-decoration: none; font-size: 20px; font-style: bold; color: grey;">Go back home</a>
                <!-- portfolio_filter -->
                 <div class="categories-grid wow fadeInLeft">
                    <nav class="categories text-center">
                        <ul class="portfolio_filter">
                             <li><a href="Menu.php" data-filter="*">All</a></li>
                            <li><a href="Menu-two.php"c data-filter=".photography">Soupes.Salade<a></li>
                            <li><a href="Menu-three.php"  data-filter=".logo" >On the grill</a></li>
                            <li><a href="Menu-four.php"  class="active"data-filter=".graphics">Burgers</a></li>
                            <li><a href="Menu-five.php" data-filter=".ads" >Boissons</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- portfolio_filter -->

                <!-- portfolio_container -->
  <?php
  $var='burger';
  include "commun.php";
  ?>