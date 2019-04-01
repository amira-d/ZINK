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
         <?PHP
include "../entites/Commande.php";
include "../cores/CommandeC.php";
if (isset($_GET['cin'])){
$commandeC=new CommandeC();

 $result=$commandeC->recupererCommande($_GET['cin']) ;

 
	foreach($result as $row)
		$cin=$row['cin'];
		$nom=$row['nom'];
		$prenom=$row['prenom'];
			$numero=$row['numero'];
		$email=$row['email'];
		$heures=$row['heures'];
			$minutes=$row['minutes'];
		$produits=$row['produits'];
		$prix=$row['prix'];
			$quantite=$row['quantite'];
		

	
				}

if (isset($_POST['submit'])){
			$commande=new commande($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['numero'],$_POST['email'],$_POST['heures'],$_POST['minutes'],$_POST['produits'],$_POST['prix'],$_POST['quantite'],"Non validee");
	$commandeC->modifierCommande($commande,$_POST['cin_ini']);

	header('Location: afficherCommande.php?cin='.$cin.'');
}
?>
         <div class="row">

     <div class="eight columns"> 

               <!-- form -->
               <form  method="post" >
					<fieldset>


                  <div>
						   <label for="contactName" >Cin <span class="required">*</span></label>
						   <input type="text" value="<?PHP echo $cin ?>" size="1135" id="contactName" name="cin">
                  </div>

                  <div>
						   <label for="contactName">nom <span class="required">*</span></label>
						   <input type="text" value="<?PHP echo $nom ?>" size="35" id="contactName" name="nom">
                  </div>

                  <div>
						   <label for="contactName">prenom <span class="required">*</span></label>
						   <input type="text" value="<?PHP echo $prenom ?>" size="35" id="contactName" name="prenom">
                  </div>
                    <div>
						   <label for="contactName">Numero <span class="required">*</span></label>
						   <input type="text" value="<?PHP echo $numero ?>" size="35" id="contactName" name="numero">
                  </div>

                  <div>
						   <label for="contactEmail">Email <span class="required">*</span></label>
						   <input type="text" value="<?PHP echo $email ?>" size="35" id="contactEmail" name="email">
                  </div>
                  <div>
						   <label for="contactEmail">Heures <span class="required">*</span></label>
						   <input type="text" value="<?PHP echo $heures ?>" size="35" id="contactEmail"  name="heures">
                  </div>
                  <div>
						   <label for="contactEmail">Minutes <span class="required">*</span></label>
						   <input type="text" value="<?PHP echo $minutes ?>" size="35" id="contactEmail" name="minutes">
                  </div>

                  <div>
						   <label for="contactEmail">Produits <span class="required">*</span></label>
						   <input type="text" value="<?PHP echo $produits ?>" size="35" id="contactEmail" name="produits">
                  </div>
                  <div>
						   <label for="contactEmail">Prix <span class="required">*</span></label>
						   <input type="text" value="<?PHP echo $prix ?>" size="35" id="contactEmail" name="prix">
                  </div>
                  <div>
						   <label for="contactEmail">Quantite <span class="required">*</span></label>
						   <input type="text" value="<?PHP echo $quantite ?>" size="35" id="contactEmail" name="quantite">
                  </div>
                 
                

                  <div>
                     <input  type="submit" name="submit" class="submit" value="Modifier" > 
                     <span id="image-loader">
                        <img alt="" src="images/loader.gif">
                     </span>
                  </div>
                  <input type="hidden" name="cin_ini" value="<?PHP echo $_GET['cin'];?>">
                  

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

   </section>
    </div>

            

            </div> <!-- end row -->

         </div> <!-- end .main-col -->

      </div>

   </section>

</HTMl>
