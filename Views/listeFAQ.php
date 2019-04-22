<?php
include "../Entities/faq.php";


//testConnexion();
$db=config::getConnexion();

    $result=$db->query('SELECT * FROM faq');
$x=0;
?>

<html>


<!-- Mirrored from demo.devitems.com/mirora-v2/mirora/faq.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:54:11 GMT -->
<head>
    

    <!-- ************************* CSS Files ************************* -->

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
            <li class="current"><a class="smoothscroll" href="PageMenu.html">Home</a></li>
            <li><a class="smoothscroll" href="#about">About</a></li>
            <li><a class="smoothscroll" href="#portfolio">Menu</a></li>
            <li><a class="smoothscroll" href="#testimonials">Testimonials</a></li>
            <li><a class="smoothscroll" href="#testimonials">Z-News</a></li>
            <li><a class="smoothscroll" href="#contact">Contact</a></li>
           <li><a class="smoothscroll" href="listeFAQ.php">FAQ</a></li>
            <li><a class="smoothscroll" href="clientF.html">Client</a></li>
            <li><a class="ti-calendar" href="consulterCommande.html">Consulter Commande</a></li>
            <!-- <li><a class="smoothscroll" href="clientF.html">Client</a></li>-->
         </ul><!-- end #nav -->

      </nav> <!-- end #nav-wrap -->
      

      <p class="scrolldown">
         <a class="smoothscroll" href="#about"><i class="icon-down-circle"></i></a>
      </p>

   </header> <!-- Header End -->

</head>

<body>

 <?php 
    if (isset($_POST['id'])&&isset($_POST['question'])&&isset($_POST['reponse']))
    {
        if ($_POST['accounttype']=="per")
        {
            $e=new client($_POST['id'],$_POST['question'],$_POST['reponse'],"","","",5575);
            if ($e->ajouter())
            {
                $panier=new panier($_POST['id']);
                $panierC=new panierC();
                $panierC->ajouter($panier);
            }
        }   
        else
        {
            $s=new clientste($_POST['id'],$_POST['question'],$_POST['reponse'],"","","",5575);
            $s->ajouter();
            if (!preg_match("/[a-zA-Z0-9]{4,22}(STE)$/",$_POST['id']))
                $id=$_POST['id'].'STE';
            $panier=new panier($id);
            $panierC=new panierC();
            $panierC->ajouter($panier);
        }
    }
    ?>
    <!-- Main Wrapper Start -->
    
        <!-- Breadcumb area End -->

        <!-- Main Content Wrapper Start -->
        <div class="row section-head">
<div class="row">
            <div class="two columns header-col">
 <div class="ten columns">
                            <div class="faq-heading">
                                <h2 class="mb--20">Voici les questions fréquemment posées, vous pouvez trouver la réponse vous-même</h2>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-12">
                            <div id="accordion" class="accordion">
                             <?php while ($row = $result->fetch()) { 
                            
                                    ?>
                                    <div class="card accordion__single">
                                        <div class="card-header accordion__header" id="headingNine">
                                            <a class="btn btn-link accordion__link collapsed" data-toggle="collapse" data-target="#c<?php echo $row['id']; ?>" aria-expanded="true" aria-controls="collapseNine">
                                              <?php echo $row['question']; ?>
                                            </a>
                                        </div>
                                        <div id="c<?php echo $row['id']; ?>" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
                                            <div class="card-body accordion__body">
                                                <?php echo $row['reponse']; ?>
                                            </div>
                                        </div>
                                    </div>
                    
    <?php
                                        
                                        }
                                        ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content Wrapper Start -->


        <!-- Scroll To Top Start -->    
        <a class="scroll-to-top" href="#"><i class="fa fa-angle-double-up"></i></a>
        <!-- Scroll To Top End -->

        <!-- Popup Subscribe Box Start -->

      

        <!-- Popup Subscribe Box End -->

        <!-- Modal Start -->
        
        <!-- Modal End -->

    </div>
    <!-- Main Wrapper End -->


    <!-- ************************* JS Files ************************* -->

    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery.min.js"></script>

    <!-- Bootstrap and Popper Bundle JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- All Plugins Js -->
    <script src="assets/js/plugins.js"></script>
    <!-- Ajax Mail Js -->
    <script src="assets/js/ajax-mail.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>



    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>

   <script src="js/jquery.flexslider.js"></script>
   <script src="js/waypoints.js"></script>
   <script src="js/jquery.fittext.js"></script>
   <script src="js/magnific-popup.js"></script>
   <script src="js/init.js"></script>

</body>


<!-- Mirrored from demo.devitems.com/mirora-v2/mirora/faq.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:54:11 GMT -->
</html>