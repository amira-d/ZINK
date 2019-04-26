<?php
include"C:\wamp\www\ZINK\Views\ZINK_FI\session.php";
include "C:\wamp\www\ZINK\cores\clientfC.php";
include "C:\wamp\www\ZINK\Entities\clientf.php";
testConnexion();
?>



<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title>ZINK</title>
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

   <!-- Script
   ================================================== -->
	<script src="js/modernizr.js"></script>

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="photo.jpg" >

</head>

<body>

   <!-- Header
   ================================================== -->
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
            
           <li><a class="ti-calendar" href="listeFAQ.php">FAQ</a></li>
            <li><a class="ti-calendar" href="aa.php">Client</a></li>
            <?php 
                      if (isset($_SESSION['cin']))
                      {
                        ?>
              <!--<li><a class="ti-calendar" href="aa.php">mon compte</a></li>-->
<?php } ?>

<?php 
                      if (isset($_SESSION['cin']))
                      {
                        ?>

                        <li><a class="ti-calendar" href="moncompte.php" >Mon compte</a></li>
                        <?php
                      }
                      ?>
                                          <a class="dropdown-item" <?php if (isset($_SESSION['cin']))echo 'href="deconnexion.php"';else echo 'href="login-register.php"'; ?> >
                                            <?php if (isset($_SESSION['cin'])) 
                                            {
                                            echo "Déconnexion";
                                            }
                                            else
                                            {
                                              
                                            echo "Inscription/Connexion ";  
                                            }

                                            ?>
                                          
                                        </a>
      




            <!-- <li><a class="smoothscroll" href="clientF.html">Client</a></li>-->
         </ul> <!-- end #nav -->
          <!--<li><a  href="clientF.html"  ><i class="ti-calendar">Client</a></li>-->

      </nav> <!-- end #nav-wrap -->
      

      <p class="scrolldown">
         <a class="smoothscroll" href="#about"><i class="icon-down-circle"></i></a>
      </p>

   </header> <!-- Header End -->


   <!-- About Section
   ================================================== -->
   <section id="about">


      <div class="row">

         <div class="three columns">

            <img class="profile-pic"  src="images/profilepic.jpg" alt="" />

         </div>

         <div class="nine columns main-col">

            <h2>About Me</h2>

            <p>LE ZINK DESCRIPTION ,i make food i get cheese from abroad and fazer
            </p>

            <div class="row">

               <div class="columns contact-details">

                  <h2>Contact Details</h2>
                  <p class="address">
						   <span>LE ZINK</span><br>
						   <span>1, Rue Salah Ben Mahmoud Menzah 1<br>
						         Tunis 1004, Tunisie
                     </span><br>
						   <span>(216) 22 420 010</span><br>
                     
					   </p>

               </div>

               <div class="columns download">
                  <p>
                     <a href="the-menu.jpg" target="a_blank" class="button"><i class="fa fa-download"></i>Download Menu</a>
                  </p>
               </div>

            </div> <!-- end row -->

         </div> <!-- end .main-col -->

      </div>

   </section> <!-- About Section End-->





   <!-- Portfolio Section
   ================================================== -->
   <section id="portfolio">

      <div class="row">

         <div class="twelve columns collapsed">

            <h1>Check Out Some of our Products.</h1>

            <!-- portfolio-wrapper -->
            <div id="portfolio-wrapper" class="bgrid-quarters s-bgrid-thirds cf">

          	   <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-01" title="">
                        <img alt="" src="images/portfolio/coffee.jpg">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
          					      <h5>Coffee</h5>
                              <p>Illustrration</p>
          					   </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
          		</div> <!-- item end -->

               <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-02" title="">
                        <img alt="" src="images/portfolio/console.jpg">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
          					      <h5>Console</h5>
                              <p>Web Development</p>
          					   </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
          		</div> <!-- item end -->

               <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-03" title="">
                        <img alt="" src="images/portfolio/judah.jpg">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
          					      <h5>Judah</h5>
                              <p>Webdesign</p>
          					   </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
          		</div> <!-- item end -->

               <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-04" title="">
                        <img alt="" src="images/portfolio/into-the-light.jpg">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
          					      <h5>Into The Light</h5>
                              <p>Photography</p>
          					   </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
          		</div> <!-- item end -->

               <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-05" title="">
                        <img alt="" src="images/portfolio/farmerboy.jpg">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
          					      <h5>Farmer Boy</h5>
                              <p>Branding</p>
          					   </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
          		</div> <!-- item end -->

               <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-06" title="">
                        <img alt="" src="images/portfolio/girl.jpg">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
          					      <h5>Girl</h5>
                              <p>Photography</p>
          					   </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
          		</div> <!-- item end -->

               <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-07" title="">
                        <img alt="" src="images/portfolio/origami.jpg">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
          					      <h5>Origami</h5>
                              <p>Illustrration</p>
          					   </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
          		</div> <!-- item end -->

               <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-08" title="">
                        <img alt="" src="images/portfolio/retrocam.jpg">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
          					      <h5>Retrocam</h5>
                              <p>Web Development</p>
          					   </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
          		</div>  <!-- item end -->

            </div> <!-- portfolio-wrapper end -->

         </div> <!-- twelve columns end -->


         <!-- Modal Popup
	      --------------------------------------------------------------- -->

         <div id="modal-01" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="images/portfolio/modals/m-coffee.jpg" alt="" />

		      <div class="description-box">
			      <h4>hamburger</h4>
			      <p>haja houni.</p>
               <span class="categories"><i class="fa fa-tag"></i>Branding, Webdesign</span>
		      </div>

            <div class="link-box">
               <a href="http://www.behance.net" target="_blank">Details</a>
		         <a class="popup-modal-dismiss">Close</a>
            </div>

	      </div><!-- modal-01 End -->

         <div id="modal-02" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="images/portfolio/modals/m-console.jpg" alt="" />

		      <div class="description-box">
			      <h4>ili heya</h4>
			      <p>haja okhra.</p>
               <span class="categories"><i class="fa fa-tag"></i>Branding, Web Development</span>
		      </div>

            <div class="link-box">
               <a href="http://www.behance.net" target="_blank">Details</a>
		         <a class="popup-modal-dismiss">Close</a>
            </div>

	      </div><!-- modal-02 End -->

         <div id="modal-03" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="images/portfolio/modals/m-judah.jpg" alt="" />

		      <div class="description-box">
			      <h4>Judah</h4>
			      <p>lady gaga</p>
               <span class="categories"><i class="fa fa-tag"></i>Branding</span>
		      </div>

            <div class="link-box">
               <a href="http://www.behance.net" target="_blank">Details</a>
		         <a class="popup-modal-dismiss">Close</a>
            </div>

	      </div><!-- modal-03 End -->

         <div id="modal-04" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="images/portfolio/modals/m-intothelight.jpg" alt="" />

		      <div class="description-box">
			      <h4>Into the Light</h4>
			      <p>the gayest thing ever said</p>
               <span class="categories"><i class="fa fa-tag"></i>Photography</span>
		      </div>

            <div class="link-box">
               <a href="http://www.behance.net" target="_blank">Details</a>
		         <a class="popup-modal-dismiss">Close</a>
            </div>

	      </div><!-- modal-04 End -->

         <div id="modal-05" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="images/portfolio/modals/m-farmerboy.jpg" alt="" />

		      <div class="description-box">
			      <h4>Farmer Boy</h4>
			      <p>this is a vie reference</p>
               <span class="categories"><i class="fa fa-tag"></i>Branding, Webdesign</span>
		      </div>

            <div class="link-box">
               <a href="http://www.behance.net" target="_blank">Details</a>
		         <a class="popup-modal-dismiss">Close</a>
            </div>

	      </div><!-- modal-05 End -->

         <div id="modal-06" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="images/portfolio/modals/m-girl.jpg" alt="" />

		      <div class="description-box">
			      <h4>Girl</h4>
			      <p>or boy dont assume their gender hun.</p>
               <span class="categories"><i class="fa fa-tag"></i>Photography</span>
		      </div>

            <div class="link-box">
               <a href="http://www.behance.net" target="_blank">Details</a>
		         <a class="popup-modal-dismiss">Close</a>
            </div>

	      </div><!-- modal-06 End -->

         <div id="modal-07" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="images/portfolio/modals/m-origami.jpg" alt="" />

		      <div class="description-box">
			      <h4>Origami</h4>
			      <p>this is why asians are smart</p>
               <span class="categories"><i class="fa fa-tag"></i>Branding, Illustration</span>
		      </div>

            <div class="link-box">
               <a href="http://www.behance.net" target="_blank">Details</a>
		         <a class="popup-modal-dismiss">Close</a>
            </div>

	      </div><!-- modal-07 End -->

         <div id="modal-08" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="images/portfolio/modals/m-retrocam.jpg" alt="" />

		      <div class="description-box">
			      <h4>Retrocam</h4>
			      <p>trying to be basic edgy.</p>
               <span class="categories"><i class="fa fa-tag"></i>Webdesign, Photography</span>
		      </div>

            <div class="link-box">
               <a href="http://www.behance.net" target="_blank">Details</a>
		         <a class="popup-modal-dismiss">Close</a>
            </div>

	      </div><!-- modal-01 End -->


      </div> <!-- row End -->

   </section> <!-- Portfolio Section End-->


   <!-- Call-To-Action Section
   ================================================== -->
   


   <!-- Testimonials Section
   ================================================== -->
   <section id="testimonials">

      <div class="text-container">

         <div class="row">

            <div class="two columns header-col">

               <h1><span>Client Testimonials</span></h1>

            </div>

            <div class="ten columns flex-container">

               <div class="flexslider">

                  <ul class="slides">

                     <li>
                        <blockquote>
                           <p> 
                           </p>
                        </blockquote>
                     </li> <!-- slide ends -->

                     <li>
                        <blockquote>
                           <p>Zink is a must when in Tunis! Having tried most burger-places in and restaurants with burgers on the menu, around Tunis, this is the place to visit.
                           </p>
                        </blockquote>
                     </li> <!-- slide ends -->

                  </ul>

               </div> <!-- div.flexslider ends -->

            </div> <!-- div.flex-container ends -->

         </div> <!-- row ends -->

       </div>  <!-- text-container ends -->

   </section> <!-- Testimonials Section End-->


   <!-- News Section
   ================================================== -->
   <section id="portfolio">

      <div class="row">

         <div class="twelve columns collapsed">

            <h1>Follow the news.</h1>

            <!-- portfolio-wrapper -->
            <div id="portfolio-wrapper" class="bgrid-quarters s-bgrid-thirds cf">

               <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-01" title="">
                        <img alt="" src="photo.jpg">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
                              <h5>Offers</h5>
                              <p>Discover new products here</p>
                           </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
               </div> <!-- item end -->

              
            

               <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-07" title="">
                        <img alt="" src="photo.jpg">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
                              <h5>TEAM</h5>
                              <p>Meet the team !</p>
                           </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
               </div> <!-- item end -->

               <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-08" title="">
                        <img alt="" src="photo.jpg">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
                              <h5>Work </h5>
                              <p>Join the team</p>
                           </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
               </div>  <!-- item end -->

            </div> <!-- portfolio-wrapper end -->

         </div> <!-- twelve columns end -->




 

































         <!-- Modal Popup
         --------------------------------------------------------------- -->

         <div id="modal-01" class="popup-modal mfp-hide">

            <img class="scale-with-grid" src="" alt="" />

            <div class="description-box">
               <h4>hamburger</h4>
               <p>haja houni.</p>
               <span class="categories"><i class="fa fa-tag"></i>tags</span>
            </div>

            <div class="link-box">
               <a href="http://www.behance.net" target="_blank">Details</a>
               <a class="popup-modal-dismiss">Close</a>
            </div>

         </div><!-- modal-01 End -->

         <div id="modal-07" class="popup-modal mfp-hide">

            <img class="scale-with-grid" src="" alt="" />

            <div class="description-box">
               <h4>Origami</h4>
               <p>this is why asians are smart</p>
               <span class="categories"><i class="fa fa-tag"></i>tags</span>
            </div>

            <div class="link-box">
               <a href="http://www.behance.net" target="_blank">Details</a>
               <a class="popup-modal-dismiss">Close</a>
            </div>

         </div><!-- modal-07 End -->

         <div id="modal-08" class="popup-modal mfp-hide">

            <img class="scale-with-grid" src="" alt="" />

            <div class="description-box">
               <h4>Retrocam</h4>
               <p>trying to be basic edgy.</p>
               <span class="categories"><i class="fa fa-tag"></i>tags</span>
            </div>

            <div class="link-box">
               <a href="http://www.behance.net" target="_blank">Details</a>
               <a class="popup-modal-dismiss">Close</a>
            </div>

         </div><!-- modal-08 End -->


      </div> <!-- row End -->

   </section> <!-- news Section End-->

   <!-- Contact Section
   ================================================== -->
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


   <!-- footer
   ================================================== -->
   <footer>

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

</body>

</html>
