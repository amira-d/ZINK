
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

include "../entites/Commande.php";
include "../cores/CommandeC.php";
//require_once  ('C:\xampp\htdocs\Commandes\views\consulterCommande.php');

$commande1C=new CommandeC();
$cin=$_GET['cin'];
//$result=$commande1C->rechercherListeCommandes($cin) ;
$listeCommandes=$commande1C->afficherCommande($commande1C,$cin);

//var_dump($listeCommandes);

// var_dump($listeCommandes->fetchAll());
         
foreach($listeCommandes as $data)
 // $cin=$data['cin'] ;
                           
                        echo  "<class='eight columns'>";

                      echo" <label for='contactName'>CIN :</label>";
                              echo "<p style='position:relative;  left: 70px;width:15px; overflow:visible;'>".$data['cin']."</p>";

                      echo" <label for='contactName'>NOM  :</label>";
                            echo "<p  style='position:relative;  left: 70px;width:15px; overflow:visible; '>".$data['nom']."</p>";

                      echo" <label for='contactName'>PRENOM :</label>";
                            echo "<p  style='position:relative;  left: 70px;width:15px; overflow:visible;'>".$data['prenom']."</p>";
                           
                      echo" <label for='contactName'>NUMERO TELEPHONE:</label>";
                            echo "<p  style='position:relative;  left: 70px;width:75px; overflow:visible;'>".$data['numero']."</p>";
                           
                      echo" <label for='contactName'>ADRESS EMAIL :</label>";
                            echo "<p  style='position:relative;  left: 70px;width:15px; overflow:visible;'>".$data['email']."</p>";

                      echo" <label for='contactName'>HEURES DE COMMANDE :</label>";

                            echo "<p  style='position:relative;  left: 70px;width:175px; overflow:visible;'>".$data['heures']."p.m</p>";
                      echo" <label for='contactName'>MINUTES DE COMMANDE :</label>";

                             echo "<p  style='position:relative;  left: 70px;width:175px; overflow:visible;'>".$data['minutes']."Minutes</p>";
    
                      echo" <label for='contactName'>ACHATS :</label>";
                             echo "<p style='position:relative;  left: 70px;width:75px; overflow:visible;'>".$data['produits']."</p>";

                      echo" <label for='contactName'>prix :</label>";
                             echo "<p style='position:relative;  left: 70px;width:15px; overflow:visible;'>".$data['prix']."Dinars</p>";       

                       echo" <label for='contactName'>quantite :</label>";
                             echo "<p style='position:relative;  left: 70px;width:15px; overflow:visible;'>".$data['quantite']."Pieces</p>";
                 if ($data['etat']=="Non Validee")
                       {echo" <label for='contactName'>ETAT DE COMMANDE :</label>";
                            echo "<p style='position:centre;  left: 30px;width:775px; overflow:visible;'>Commmande en cours de traitement</p>";
                            echo "</div>";}
                            else 
                                  {echo" <label for='contactName'>ETAT DE COMMANDE :</label>";
                            echo "<p style='position:centre;  left: 30px;width:775px; overflow:visible;'>Commmande Validee</p>";
                            echo "</div>";}
                             
            
                
               echo" <h4>Address and Phone</h4>";
                 echo"  <p  class='address'> ";
                    echo" LE ZINK <br>
                     Rue Salah Ben Mahmoud Menzah 1 <br>
                     Tunis 1004, Tunisie<br>
                     <span>(216) 22 420 010</span></p>";


             
   
               ?>  
                <fieldset>        
      <?php if ($data['etat']=="Non Validee") { ?>
                <div>
         <a href="modifierCommande.php?cin=<?PHP echo $data['cin']; ?>">Modifier la Commande</a>
                     <span id="image-loader">
                        <img alt="" src="images/loader.gif">
                     </span>
                  </div>  
                   <div>
         <a href="supprimerCommande.php?cin=<?PHP echo $data['cin']; ?>">Supprimer la Commande</a>
                     <span id="image-loader">
                        <img alt="" src="images/loader.gif">
                     </span>
                  </div>  
         </fieldset>

<?php } else if ($data['etat']=="Validee")  {     echo" <h6 style='color:#ffd11a; text-ligne=center ;'> Votre Commande Validée Par le ZINK</h4>";  echo" <h6 style='color:#ffd11a'> Merci pour votre fidelité</h4>"; } ?>


<!-- Form End -->
               <!-- contact-warning -->
          

   
         </section>
    </div>


            

            </div> <!-- end row -->

         </div> <!-- end .main-col -->

      </div>
  </section>
              
             
       <div class="row">

           
 <div class='eight columns'>
  
</div>
</div>
</footer>
   
 
  </HTMl>
 
   








