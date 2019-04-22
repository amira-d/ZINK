
<HTML>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	   <link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/layout.css">
   <link rel="stylesheet" href="css/media-queries.css">
   <link rel="stylesheet" href="css/magnific-popup.css">
      <link rel="stylesheet" href="css/commande.css">

   <!-- Script
   ================================================== -->
	<script src="js/modernizr.js"></script>

	 <header id="home">

      <nav id="nav-wrap">

         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
	      <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

         <ul id="nav" class="nav">
            <li class="current"><a class="smoothscroll" href="#home">Home</a></li>
            <li><a class="smoothscroll" href="#about">About</a></li>
            <li><a class="smoothscroll" href="#portfolio">Menu</a></li>
            <li><a class="smoothscroll" href="#testimonials">Testimonials</a></li>
            <li><a class="smoothscroll" href="#testimonials">Z-News</a></li>
            <li><a class="smoothscroll" href="#contact">Contact</a></li>
         </ul> <!-- end #nav -->

      </nav> <!-- end #nav-wrap -->
      

      <p class="scrolldown">
         <a class="smoothscroll" href="#about"><i class="icon-down-circle"></i></a>
      </p>

   </header> <!-- Header End -->

    <section id="about">


      <div class="row1">

         <div class="three columns">

            <img class="profile-pic"  src="images/profilepic.jpg" alt="" />

         </div>

         <div class="nine columns main-col">

            

                   <div class="eight columns">
<section id="contact">

         <div class="row section-head">

            <div class="two columns header-col">

               <h1><span>Get In Touch.</span></h1>

            </div>

           

         </div>

         <div class="row">

     <div class="eight columns"> 
             
          
                  

                 
<?PHP
include "../Entities/Commande.php";
include "../Cores/CommandeC.php";

 $commandeC=new CommandeC();
 $cin=$_GET['cin'];
    echo "<script>alert(\"Confirmer la Suppression\")</script>";
$listeCommandes=$commandeC->afficherCommande($commandeC,$cin);

//var_dump($listeCommandes->fetchAll());

// var_dump($listeCommandes->fetchAll());
         
foreach($listeCommandes as $data)
    // $cin=$data['cin'] ;
                        echo  "<class='eight columns'>";

                      echo" <label for='contactName'>Votre CIN est:</label>";
                              echo "<p style='position:relative;  left: 170px;width:15px; overflow:visible;'>".$data['cin']."</p>";

                                                
            
             


?>
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

					


      </div>
    </aside>
    
 <form  method="post" >
      <div>
                     <button type="submit" name="submit" class="submit1"> Confirmer Supprsion </button>
                     <span id="image-loader">
                       <img alt="" src="images/loader.gif">
                     </span>
                  </div>
                    </form> <!-- Form End -->
<?php
    if (isset($_POST['submit']))
   {
	$commandeC->supprimerCommande($data["cin"]); 
    		header('Location: ajoutCommande.php'); 
}
	?>
   </section>    </div>

            

            </div> <!-- end row -->

         </div> <!-- end .main-col -->

      </div>

   </section>

</HTMl>










