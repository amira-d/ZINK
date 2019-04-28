
<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
  <title>ZINK NEWS</title>
  <meta name="description" content="">
  <meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- CSS
    ================================================== -->
     
   <link rel="stylesheet" href="css/default.css">
   <link rel="stylesheet" href="css/layout.css">
   <link rel="stylesheet" href="css/media-queries.css">
   <link rel="stylesheet" href="css/magnific-popup.css">
    <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="ZINK_FI/css/jquery.cslider.css" rel="stylesheet">

    <link href="ZINK_FI/css/jquery.bxslider.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- main css -->
    <link href="css/style.css" rel="stylesheet">
        <link href="jobs.css" rel="stylesheet">



   <!-- Script
   ================================================== -->
  <script src="js/modernizr.js"></script>
   <script src="js1/modernizr.js"></script>

   <!-- Favicons
  ================================================== -->
  <link rel="shortcut icon" href="photo.jpg" >

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!-- Load css styles -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
                <link rel="stylesheet" type="text/css" href="css/style1.css" />

        <link rel="stylesheet" type="text/css" href="css/pluton.css" />
        <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="css/pluton-ie7.css" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="css/jquery.cslider.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />
        <link rel="stylesheet" type="text/css" href="css/animate.css" />

</head>

<body>
 <nav id="nav-wrap">

         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
        <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>
      <ul class="nav" id="nav">
           <li><a  href="index.html">Home</a></li>
        

                       
                            <li><a >News</a></li>
             
                              <li class="current"><a class="smoothscroll" href="#jobs" >Job offers</a></li>
                 
            <li><a href="#contact">Contact</a></li>
         </ul> <!-- end #nav -->
      </nav> <!-- end #nav-wrap -->
      <p class="scrolldown">
         <a class="smoothscroll" href="#jobs"><i class="icon-down-circle"></i></a>
      </p>
    <div id="home" >

       <!-- Start cSlider -->
            <div id="da-slider" class="da-slider" >
            
                <!-- mask elemet use for masking background image -->
                <div class="mask" style="height: 612px;"></div>
                <!-- All slides centred in container element -->
                <div class="container">
                    <!-- Start first slide -->
                    <div class="da-slide" >

                        <h2 class="fittext2" style="color: white; margin-top: 50px;">Join the ZINK TEAM </h2>

                        <p>Job opportunities all year long ! </p>
                       
                        <a href="#jobs" class="da-link button">Read more</a>
                        <div class="da-img">
                            <img src="../images/zink.jpg" alt="image01" width="400">
                        </div>
                    </div>
                    <!-- End first slide -->
                    <!-- Start second slide -->
                    <div class="da-slide">
                        <h2 class ="fittext2" style="color: white; margin-top: 50px;">A cook is needed in ZINK </h2>
                        <h4 style="color: white; margin-top: 50px;">Don't miss the chance ! </h4>
                        <p style="margin-top: 50px;">Check the job details and more others .</p>
                        <a href="#" class="da-link button">Read more</a>
                        <div class="da-img">
                            <img src="../images/rocks.jpg" width="320" alt="image02">
                        </div>
                    </div>
                    <!-- End second slide -->
                    <!-- Start third slide -->
                    <div class="da-slide">
                        <h2>The best burger house in town</h2>
                        <h4>Spend your summer working with us ! </h4>
                        <p>Join our waiters Team ! </p>
                        <a href="#" class="da-link button">Read more</a>
                        <div class="da-img">
                            <img src="../images/Slider03.png" width="320" alt="image03">
                        </div>
                    </div>
                    <!-- Start third slide -->  
                    <!-- Start cSlide navigation arrows -->
                    <div class="da-arrows" >
                        <span class="da-arrows-prev"></span>
                        <span class="da-arrows-next"></span>
                    </div>
                    <!-- End cSlide navigation arrows -->
                       
                </div>
            </div>
   </div> <!-- Header End -->


   <section id="jobs" style="height: 3000px; width: 1800px; margin-top: 100px; background-color: grey;">
<div class="menu-upload-form" >

<?PHP

include "C:/wamp64/www/ZINK/zink/Cores/recruC.php";
$recru1C=new recruC();
$listeannonces=$recru1C->afficherRecrutement();

//var_dump($listeannonces->fetchAll());


while ($data=$listeannonces->fetch())
{
     {echo "<div class='col-md-4 col-sm-6 graphics ads' style='width:340px; margin: 64px;'>";
     echo "<div style='width:320px ; height:320px;'>";
                           echo "<img src='../images/".$data['image']."' alt='image' class='img-responsive'/>";
                           echo"</div>";
                            echo "<div style='width:200px ; height:100px;'>";
                           echo "<p style='color=black;''>".$data['titre']."</p>";
                            echo "<p>".$data['description']."</p>";
                            echo "<div class='portfolio_item_hover'>";
                              echo  "<div class='portfolio-border clearfix'>";
                                    echo "<div class='item_info'>";
                                       echo "<p>".$data['service']." </p>";
                                                                              echo "<p>".$data['deadline']." </p>";

                                    echo"</div>";
                                echo "</div>";
                            echo "</div>";
                            echo"</div>";
                    echo"</div>";}
}
?>

</div>



    </section>


 <section id="contact">

         <div class="row section-head">

            <div class="two columns header-col">

               <h1><span>Get In Touch.</span></h1>

            </div>

            <div class="ten columns">
<br>
                  <p class="lead">To answer any questio you have, or any reclamation please send a mail over here
                  </p>

            </div>

         </div>

         <div class="row">

            <div class="eight columns">

               <!-- form -->
               <form action="" method="post" id="contactForm" name="contactForm">
          <fieldset>

                  <div>
               <label for="contactName">Name <span class="required">*</span></label>
               <input type="text" value="" size="35" id="contactName" name="contactName">
                  </div>

                  <div>
               <label for="contactEmail">Email <span class="required">*</span></label>
               <input type="text" value="" size="35" id="contactEmail" name="contactEmail">
                  </div>

                  <div>
               <label for="contactSubject">Subject</label>
               <input type="text" value="" size="35" id="contactSubject" name="contactSubject">
                  </div>

                  <div>
                     <label for="contactMessage">Message <span class="required">*</span></label>
                     <textarea cols="50" rows="15" id="contactMessage" name="contactMessage"></textarea>
                  </div>

                  <div>
                     <button class="submit">Submit</button>
                     <span id="image-loader">
                        <img alt="" src="images/loader.gif">
                     </span>
                  </div>

          </fieldset>
           </form> <!-- Form End -->

               <!-- contact-warning -->
               <div id="message-warning"> Error boy</div>
               <!-- contact-success -->
           <div id="message-success">
                  <i class="fa fa-check"></i>Your message was sent, thank you!<br>
           </div>

            </div>


            <aside class="four columns footer-widgets">

               <div class="widget widget_contact">

             <h4>Address and Phone</h4>
             <p class="address">
               LE ZINK<br>
               Rue Salah Ben Mahmoud Menzah 1 <br>
               Tunis 1004, Tunisie<br>
               <span>(216) 22 420 010</span>
             </p>


            </aside>

      </div>

   </section> <!-- Contact Section End-->


   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>

   <script src="js/jquery.flexslider.js"></script>
   <script src="js/waypoints.js"></script>
   <script src="js/jquery.fittext.js"></script>
   <script src="js/magnific-popup.js"></script>
   <script src="js/init.js"></script>
       <script src="js/animated-headline.js"></script>
    <!-- jQuery -->
    <script src="js1/jquery-2.1.1.js"></script>
    <!--  plugins -->
    <script src="js1/bootstrap.min.js"></script>
    <script src="js1/menu.js"></script>
    <script src="js1/animated-headline.js"></script>
    <script src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.mixitup.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.js"></script>
        <script type="text/javascript" src="js/jquery.bxslider.js"></script>
        <script type="text/javascript" src="js/jquery.cslider.js"></script>
        <script type="text/javascript" src="js/jquery.placeholder.js"></script>
        <script type="text/javascript" src="js/jquery.inview.js"></script>
        <!-- Load google maps api and call initializeMap function defined in app.js -->
        <script async="" defer="" type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initializeMap"></script>
        <script type="text/javascript" src="js/app.js"></script>

</body>

</html>