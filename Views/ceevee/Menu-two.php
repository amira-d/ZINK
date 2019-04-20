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
    <link rel="stylesheet" href="css1/bootstrap.min.css"/>
  <link rel="stylesheet" href="css1/font-awesome.min.css"/>
  <link rel="stylesheet" href="css1/flaticon.css"/>
  <link rel="stylesheet" href="css1/owl.carousel.css"/>
  <link rel="stylesheet" href="css1/anotherstyle.css"/>
  <link rel="stylesheet" href="css1/animate.css"/>

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
            <div class="portfolio" >
  <a href="index.html" class="retour" style="font-family: 'opensans-light'; text-decoration: none; font-size: 20px; font-style: bold; color: grey;">Go back home</a>
                <div class="container" style="position: relative;right: 150px; ">
                        <!--<ul class="portfolio_filter">
                             <li><a href="Menu.php" class="active"data-filter="*">All</a></li>
                            <li><a href="Menu-two.php"c data-filter=".photography">Soupes&Salade<a></li>
                            <li><a href="Menu-three.php"  data-filter=".logo" >On the grill</a></li>
                            <li><a href="Menu-four.php"  data-filter=".graphics">Burgers</a></li>
                            <li><a href="Menu-five.php" data-filter=".ads" >Boissons</a></li>
                        </ul>-->
                         <ul class="mp-menu-tab-nav nav nav-tabs" style="width: 100%;" role="tablist">
        <li class="nav-item">
          <a class="nav-link "href="Menu.php" >
            <i class="flaticon-001-wine"></i>
            <div class="mpm-text">
              <h5>All</h5>
            </div>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active"href="Menu-two.php" >
            <i class="flaticon-013-salad"></i>
            <div class="mpm-text">
              <h5>Soupes&Salades</h5>
            </div>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="Menu-three.php" >
            <i class="flaticon-006-steak"></i>
            <div class="mpm-text">
              <h5>On the grill</h5>
            </div>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Menu-four.php">
            <i class="flaticon-032-hamburger"></i>
            <div class="mpm-text">
              <h5>Burgers</h5>
            </div>
          </a>

        </li>
         <li class="nav-item" style="position:  ;">
          <a class="nav-link" href="Menu-five.php" >
            <i class="flaticon-005-coffee-1"></i>
            <div class="mpm-text">
              <h5>Boissons</h5>
            </div>
          </a>
        </li>
      </ul>
    </div>
  <?php
  $var='salade';
  include "commun.php";
  ?>

<!--$prodC=new ProduitC();
$liste=$prodC->afficherProduit();
while ($data=$liste->fetch())
{
  if ($data['Type_P'] == 'salade')
      {echo "<div class='col-md-4 col-sm-6 graphics ads' style='height:200px;width:570px; margin:80px 40px 80px 40px;'>";
                   echo  "<div href='' class='portfolio_item'>";
                           echo "<img src=' ../web/".$data['image']."' alt='image'class='img-responsive' style='height:180px;width:180px;border-radius:20px;'/>";


                           echo "<div style='padding:5px;'>";
                              echo "<h1 style='bottom: 50px;'>".$data['nom_P']."</h1>";

                            echo "<p class='desc' style='position:relative; bottom: 250px; left: 200px;width:250px; max-height:200px; overflow:hidden; border-top: 2px inset grey;border-bottom: 2px inset grey;font: 18px grey 'opensans-light';'>".$data['Description']."</p>";
                            echo "</div>";


                            echo "<div class='portfolio_item_hover' style=' width:500px; height:200px;'>";
                              echo  "<div class='portfolio-border clearfix'>";
                                    echo "<div class='item_info' style=''>";
                                       echo "<span>".$data['Prix']." dt</span>";
                                       echo "<em>Add to cart</em>";
                                    echo"</div>";
                                echo "</div>";
                            echo "</div>";
                        echo "</div>";
                    echo"</div>";
}
  
 

}


?>

                </div>
                <!-- end portfolio_container -->
            <!--</div>
            <!-- portfolio -->
        <!--</div>
        <!-- end portfolio div -->
    </div>
    <!-- end main container -->
  </section>
     
   <!--<footer>

      <div class="row">

         <div class="twelve columns">

            <ul class="social-links">
               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
               <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
               <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
               <li><a href="#"><i class="fa fa-instagram"></i></a></li>
               <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
               <li><a href="#"><i class="fa fa-skype"></i></a></li>
            </ul>

           
         </div>

         

      </div>

   </footer> <!-- Footer End-->

   <!-- Java Script
   ================================================== -->
   <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>

   <script src="js/jquery.flexslider.js"></script>
   <script src="js/waypoints.js"></script>
   <script src="js/jquery.fittext.js"></script>
   <script src="js/magnific-popup.js"></script>
   <script src="js/init.js"></script>
       <script src="js/animated-headline.js"></script>
    <!-- jQuery -->
    <!--<script src="js1/jquery-2.1.1.js"></script>
    <!--  plugins -->
    <!--<script src="js1/bootstrap.min.js"></script>
    <script src="js1/menu.js"></script>
    <script src="js1/animated-headline.js"></script>
    

</body>

</html>