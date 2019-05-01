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
    <link href="assets/css/lib/mmc-chat.css" rel="stylesheet" />
    <link href="assets/css/lib/sidebar.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/unix.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

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
  <link rel="shortcut icon" href="photo.jpg" >

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!-- Load css styles -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
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
                                <li><a  href="Z-news.php">News</a></li>
                                <li class="current"><a  href="jobs.php" >Job offers</a></li>
                                <li><a  href="index.html">CONTACT</a></li>
         </ul> <!-- end #nav -->
    </nav> <!-- end #nav-wrap -->
      
   

<section id="contact" >

        
<?PHP
include "../../Entities/recrutement.php";
include "../../Cores/recruC.php";
if (isset($_GET['id'])){
  $rC=new recruC();
    $result=$rC->recupererRecrutement($_GET['id']);
  foreach($result as $row){
    $id=$row['id'];
    $titre=$row['titre'];
    $type=$row['service'];
    $description=$row['description'];
    $deadline=$row['deadline'];
    $image=$row['image'];

                                               }}
?>
            <div class="ten columns"  style="margin-left: 230px;">
            <br>
                  <p>Fill the blank to send your candidature !</p>
                  <p> <?PHP echo $id ;?></p>
                  <p> <?PHP echo $titre ;?></p>
                  <p> <?PHP echo $type ;?></p>
                  <p> <?PHP echo $description ;?></p>
                  <p> <?PHP echo $deadline ;?></p>
                  <p> <?PHP echo $image ;?></p>
            </div>

         

         <div class="row" style="margin-left: 270px;">

            <div class="eight columns">

               <!-- form -->
               <form action="ajoutCandi.php" method="post" id="contactForm" name="contactForm">
          <fieldset>

                  <div>
               <label for="contactName">Name <span class="required">*</span></label>
               <input type="text" value="" size="35" id="contactName" name="nom">
                  </div>

                   <div>
               <label for="contactSurName">Surname <span class="required">*</span></label>
               <input type="text" value="" size="35" id="contactName" name="prenom">
                  </div>

                    <div>
               <label for="BirthDate">Birth date <span class="required">*</span></label>
               <input type="date" value=""  id="contactName" name="date_naissance">
                  </div>

                  <div>
               <label for="contactEmail">Email <span class="required">*</span></label>
               <input type="text" value="" size="35" id="contactEmail" name="email">
                  </div>

                  <div>
               <label for="contactSubject">Number<span class="required">*</span></label>
               <input type="text" value="" size="35" id="contactSubject" name="num">
                  </div>

                   <div>
               <label for="contactSubject">CV<span class="required">*</span></label>              
                 <input type="file" id="contactSubject" onchange="this.parentNode.parentNode.nextElementSibling.value = this.value"  name="cv">
                        </div>

                           <div>
               <label for="contactSubject">Motivation letter<span class="required">*</span></label>              
                 <input type="file" id="contactSubject" onchange="this.parentNode.parentNode.nextElementSibling.value = this.value"  name="letter">
                        </div>

                    
                             <div>
               <label for="contactSubject">Photo<span class="required">*</span></label>              
                 <input type="file" id="contactSubject" onchange="this.parentNode.parentNode.nextElementSibling.value = this.value"  name="photo">
                        </div>

                  <div>
                     <button  name="submit" value="Get Selected Values">Submit</button>
                     <input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>">
                     <input type="hidden" name="type" value="<?PHP echo $type;?>">
                     <span id="image-loader">
                        <img alt="" src="images/loader.gif">
                     </span>
                  </div>

          </fieldset>
           </form> <!-- Form End -->
 <?php
if(isset($_POST['submit1'])){
$selected_val = $_POST['type'];  // Storing Selected Value In Variable
echo "You have selected :" .$selected_val;  // Displaying Selected Value
};?>
               <!-- contact-warning -->
               <div id="message-warning"> Error boy</div>
               <!-- contact-success -->
           <div id="message-success">
                  <i class="fa fa-check"></i>Your message was sent, thank you!<br>
           </div>

            </div>


           

      </div>

   </section> <!-- Contact Section End-->

   <footer style="margin-left: 80px;">

      <div class="row" style="margin-left: 60px;">

         <div class="twelve columns">

            <ul class="social-links" >
               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
               <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
               <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
               <li><a href="#"><i class="fa fa-instagram"></i></a></li>
               <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
               <li><a href="#"><i class="fa fa-skype"></i></a></li>
            </ul>

           
         </div>

         <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#home"><i class="icon-up-open"></i></a></div>

      </div>

   </footer> <!-- Footer End-->

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