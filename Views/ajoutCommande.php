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
            <li class="current"><a class="smoothscroll" href="PageMenu.html">Home</a></li>
            <li><a class="smoothscroll" href="#about">About</a></li>
            <li><a class="smoothscroll" href="#portfolio">Menu</a></li>
            <li><a class="smoothscroll" href="#testimonials">Testimonials</a></li>
            <li><a class="smoothscroll" href="#testimonials">Z-News</a></li>
            <li><a class="smoothscroll" href="#contact">Contact</a></li>
           <li><a class="smoothscroll" href="listeFAQ.php">FAQ</a></li>
            <li><a class="smoothscroll" href="clientF.html">Client</a></li>
            <li><a class="smoothscrollh" href="consulterCommande.html">Consulter Commande</a></li>
            <!-- <li><a class="smoothscroll" href="clientF.html">Client</a></li>-->
         </ul> <!-- end #nav -->
          <!--<li><a  href="clientF.html"  ><i class="ti-calendar">Client</a></li>-->

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

            


<?PHP
include "../Entities/Commande.php";
include "../Cores/CommandeC.php";

// define variables and set to empty values
$cinErr  =$nomErr = $prenomErr = $numeroErr = $emailErr  = $heuresErr = $minutesErr = $produitsErr= $quantiteErr  = "";
$cin  =$nom = $prenom = $numero = $email  = $heures = $minutes =$produits = $quantite  = "";
$mincin = 1111111 ;
$maxcin= 99999999 ;
$minheures = 00 ;
$maxheures = 23 ;
$minminutes = 00 ;
$maxminutes = 59 ;
$minquantite = 1 ;
$maxquantite = 100 ;


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
   
//if ($_SERVER["REQUEST_METHOD"] == 'post') {

    if (empty($_POST["cin"])) {
    $cinErr = "Cin est obligatoire !";
  } 
  else {
    $cin = test_input($_POST['cin']);

if (filter_var($cin, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$mincin, "max_range"=>$maxcin))) === false)
{
	$cinErr ="Invalide Cin Format " ;
}
  }


  if (empty($_POST["nom"])) {
    $nomErr = "Nom est obligatoire";
  }
   else {
    $nom = test_input($_POST["nom"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$nom)) {
      $nomErr = "Only letters and white space allowed"; 
    }
  }

   if (empty($_POST["prenom"])) {
    $prenomErr = "Prenom est obligatoire";
  } else
   {
    $prenom = test_input($_POST["prenom"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$prenom)) {
      $prenomErr = "Only letters and white space allowed"; 
    }
  }



  if (empty($_POST["numero"])) {
    $numero = "";
  } else {
    $numero = test_input($_POST["numero"]);
    if (filter_var($numero, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$mincin, "max_range"=>$maxcin))) === false)
{
	$numeroErr="Invalide Numero Format " ;
}
  }


  
  if (empty($_POST["email"])) {
    $emailErr = "Email est obligatoire";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
 
if (empty($_POST["heures"])) {
    $heuresErr = "heures est obligatoire";
  } else {
    $heures = test_input($_POST['heures']);
    if (filter_var($heures, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$minheures, "max_range"=>$maxheures))) === false)
{
	$heuresErr = "Invalide heures Format " ;
}
  }


  if (empty($_POST["minutes"])) {
    $minutesErr = "minutes est obligatoire";
  } else {
    $minutes = test_input($_POST['minutes']);
    if (filter_var($minutes, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$minminutes, "max_range"=>$maxminutes))) === false)
{
	$minutesErr= "Invalide minutes Format " ;
}
  }
  

  if (empty($_POST['produits'])) {
    $produitsErr = "Produits est obligatoire";
  } else {
    $produits = test_input($_POST['produits']);
  }

 if (empty($_POST["quantite"])) {
    $quantiteErr = "quantite est obligatoire";
  } else {
    $quantite = test_input($_POST["quantite"]);
    if (filter_var($quantite, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$minquantite, "max_range"=>$maxquantite))) === false)
{
	$quantiteErr ="Invalide quantite Format " ;
}
  }
 
if ($cin&&$nom&&$prenom&&$numero&&$email&&$heures&&$minutes&&$produits&&$quantite)
{
$commande1=new commande($cin,$nom,$prenom,$numero,$email,$heures,$minutes,$produits,$_POST['prix'],$quantite,$_POST['etat']);
//Partie3

$commande1C=new CommandeC();
$commande1C->ajouterCommande($commande1);
echo "<script>alert(\"Votre Commande est envoyee\")</script>";
header('Location: sendmail1.php?email='.$email.''); 
 }  




?>


                   <div class="eight columns">
<section id="contact">

         <div class="row section-head">

            <div class="two columns header-col">

               <h1><span>Get In Touch.</span></h1>

            </div>



         </div>

         <div class="row">

     <div class="eight columns"> 

               <!-- form -->
              <form method="post" >
					<fieldset>


                  <div>
						   <label for="contactName" >Cin </label>
						   <input type="text" value="" size="1135" id="contactName"  placeholder="8 chiffres"name="cin">
						    <span class="required">* <?php echo $cinErr;?></span>
  <br><br>
                  </div>

                  <div>
						   <label for="contactName">nom </label>
						   <input type="text" value="" size="35" id="contactName"  placeholder="votre Nom" name="nom">
						    <span class="required">* <?php echo $nomErr;?></span>
  <br><br>
                  </div>

                  <div>
						   <label for="contactName">prenom </label>
						   <input type="text" value="" size="35" id="contactName" placeholder="votre Prenom" name="prenom">
						    <span class="required">* <?php echo $prenomErr;?></span>
  <br><br>
                  </div>
                    <div>
						   <label for="contactName">Numero </label>
						   <input type="text" value="" size="35" id="contactName"  placeholder="+216********" name="numero">
						   <span class="required"><?php echo $numeroErr;?></span>
                  </div>

                  <div>
						   <label for="contactEmail">Email</label>
						   <input type="text" value="" size="35" id="contactEmail"  placeholder="email@gmail.com" name="email">
						   <span class="required">* <?php echo $emailErr;?></span>
                  </div>
                  <div>
						   <label for="contactEmail">Heures </label>
						   <input type="text" value="" size="35" id="contactEmail" placeholder="12H" name="heures">
						   <span class="required">* <?php echo $heuresErr;?></span>
                  </div>
                  <div>
						   <label for="contactEmail">Minutes </label>
						   <input type="text" value="" size="35" id="contactEmail" placeholder="15Minutes" name="minutes">
						   <span class="required">* <?php echo $minutesErr;?></span>
                  </div>
                  <div>
                         <label for="contactEmail">Cocher votre choix :</label>
  </div>
  <br>  <br>  <br>  <br>
                        <div>
                           
                       <input type="radio" id="Pizza" name="produits" value="Pizza" checked><
                        <label for="coding">Pizza : 10 dinars</label>

             </div>
             <div>
                         <input type="radio" id="Plats" name="produits" value="Plats">
                         <label for="Plats">Plats :10 dinars</label>
                </div>
                     <div>
                         <input type="radio" id="Sandwitch" name="produits" value="Sandwitch">
                         <label for="Sandwitch">Sandwitch :10 dinars</label>
                </div>

                 <br> <span class="required">*<?php echo $produitsErr ;?></span>
                  <br>  <br>  <br>
                 
                  <div>
						   <label for="contactEmail">Nombre de Pieces</label>
						   <input type="text" value="" size="35" id="contactEmail" placeholder="1 Piece à 100 Pieces" name="quantite">
						   <span class="required">* <?php echo $quantiteErr;?></span>
                  </div>


                

                  <div>

                     <button type="submit" name="submit" class="submit" > COMMANDER AU ZINK </button>
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
					   <div>
                     <a href="consulterCommande.html"> <button type="submit" name="submit" class="submit1"> CONSULTER COMMANDES </button></a>
                     
                     <a href="aaaaaa.php"> <button type="submit" name="submit" class="submit1"> livresaier a domicile </button></a>
                    
                  </div>


            </aside>

      </div>

   </section>
    </div>

            

            </div> <!-- end row -->

         </div> <!-- end .main-col -->

      </div>

   </section>

</HTMl>














