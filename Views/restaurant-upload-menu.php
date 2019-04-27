<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from zebratheme.com/html/fooadmin/restaurant-upload-menu.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Feb 2019 15:04:45 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Foodmin : Upload Menu</title>
	
	<!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon--> 
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon--> 
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
	
	<!-- Styles -->
    <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="assets/css/lib/mmc-chat.css" rel="stylesheet" />
    <link href="assets/css/lib/sidebar.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/unix.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
  
<body>


    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <li class="label">Main</li>
                    <li class="active"><a href="index-2.php"><i class="ti-home"></i> Dashboard </a></li>                   
                    

      <li><a class="sidebar-sub-toggle"><i class="ti-cup"></i> Restaurant <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <?php
                            if (isset($_SESSION['l']) && isset($_SESSION['r']))
                            {
                                if ($_SESSION['r'] == "lamia")
                            {echo "<li><a href='ceevee/index.html'>Resto</a></li>
                            <li><a href='restaurant-favourite-list.html'>Favourite</a></li>
                            <li><a href='afficherCommandeAdmin.php'>Order List</a></li>
                            <li><a href='restaurant-upload-menu.php'>Upload Menu</a></li>
                                                        <li><a href='modifierp1.php'>Change Product</a></li>
                                                                                    <li><a href='supprimerp.php'>Delete Product</a></li>
                                                                                    <li><a href='afficheringprod.php'> Product Details</a></li>

                            <li><a href='annonces-produit.html'>Annonces produit</a></li>
                                   <li><a href='afficherclient.php'>Clients</a></li>
                                   <li><a href='afficherclient1.php'>Clients fideles</a></li>
                                   <li><a href='client.html'>ajouter client</a></li>
                                   <li><a href='tables-faq.php'>FAQ</a></li>
                                   <li><a href='ajout-faq.php'>ajouter FAQ</a></li>
                                   <li><a href='clientstats.php'>Statistiques</a></li>";
                               }
                               if ($_SESSION['r']== 'doniaksia' ) {
                                
                               
                               echo "<li><a href='ceevee/index.html'>Resto</a></li>
                            <li><a href='restaurant-upload-menu.php'>Upload Menu</a></li>
                                                        <li><a href='modifierp1.php'>Change Product</a></li>
                                                                                    <li><a href='supprimerp.php'>Delete Product</a></li>
                                                                                    <li><a href='afficheringprod.php'> Product Details</a></li>";

                    
                               }
                               else  {
                                echo "<li><a href='ceevee/index.html'>Resto</a></li>
                            <li><a href='restaurant-favourite-list.html'>Favourite</a></li>
                            <li><a href='afficherCommandeAdmin.php'>Order List</a></li>
                            <li><a href='restaurant-upload-menu.php'>Upload Menu</a></li>
                                                        <li><a href='modifierp1.php'>Change Product</a></li>
                                                                                    <li><a href='supprimerp.php'>Delete Product</a></li>
                                                                                    <li><a href='afficheringprod.php'> Product Details</a></li>

                            <li><a href='annonces-produit.html'>Annonces produit</a></li>
                                   <li><a href='afficherclient.php'>Clients</a></li>
                                   <li><a href='afficherclient1.php'>Clients fideles</a></li>
                                   <li><a href='client.html'>ajouter client</a></li>
                                   <li><a href='tables-faq.php'>FAQ</a></li>
                                   <li><a href='ajout-faq.php'>ajouter FAQ</a></li>
                                   <li><a href='clientstats.php'>Statistiques</a></li>";

                               }}
                               ?>

                        </ul>
                    </li>
                    
                    <li class="label">Apps</li>
                    <li><a href="app-event-calender.html"><i class="ti-calendar"></i> Calender </a></li>
                    <li><a href="app-email.html"><i class="ti-email"></i> Email</a></li>
                    
                    
                    
                    <li><a class="sidebar-sub-toggle"><i class="ti-target"></i> Pages <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                           
                            <li><a href="page-reset-password.html">Forgot password</a></li>
                        </ul>
                    </li>
                    
                 <li><a href="logout.php"><i class="ti-close"></i> Logout</a></li>

                </ul>
            </div>
        </div>
    </div><!-- /# sidebar -->




    <div class="header">
        <div class="pull-left">
            <div class="logo"><a href="index-2.html"><span>Foodmin</span></a></div>
            <div class="hamburger sidebar-toggle">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
        </div>

        <div class="pull-right p-r-15">
            <ul>
                <li class="header-icon dib"><i class="ti-bell"></i>
                    <div class="drop-down">
                        <div class="dropdown-content-heading">
                            <span class="text-left">Recent Notifications</span>
                        </div>
                        <div class="dropdown-content-body">
                            <ul>
                               
                                <li class="text-center">
                                    <a href="" class="more-link">See All</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="header-icon dib"><i class="ti-email"></i>
                    <div class="drop-down">
                        <div class="dropdown-content-heading">
                            <a href="email.html"><i class="ti-pencil-alt pull-right"></i></a>
                        </div>
                        <div class="dropdown-content-body">
                            <ul>
                                
                                <li class="text-center">
                                    <a href="app-email.html" class="more-link">See All</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                
                <li class="header-icon dib"><span class="user-avatar">
                    <?php
                      if (isset($_SESSION['l']) && isset($_SESSION['r']))
                       { echo ''.$_SESSION['r'];
                        }?>
                        <i class="ti-angle-down f-s-10"></i></span>
                   
                     
                </li>
            </ul>
        </div>
    </div>
</div>
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-0">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Add new product</h1>
                            </div>
                        </div>
                    </div><!-- /# column -->
                    <div class="col-lg-4 p-0">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">Menu Upload</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /# column -->
                </div><!-- /# row -->
                <div class="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Menu Upload</h4>
									<div class="card-header-right-icon">
                                        <ul>
                                            <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                                            <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
									<div class="menu-upload-form">
										<form class="form-horizontal" onsubmit="return test2(event)" method="POST" action="ajoutProduit.php" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Upload Product</label>
                                            <div class="col-sm-10">
                                                <div class="form-control file-input dark-browse-input-box">
                                                    <label for="inputFile-2">
                                                                <span class="btn btn-danger dark-input-button">
                                                                    <input type="file" id="inputFile-2" onchange="this.parentNode.parentNode.nextElementSibling.value = this.value"  name="image">
                                                                    <i class="fa fa-file-archive-o"></i>
                                                                </span>
                                                    </label>
                                                    <input class="file-name input-flat" type="text" readonly="readonly" placeholder="Browse Files">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Name Product</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nom"placeholder="Type your menu Title" name="nom">
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-sm-2 control-label">Type Product</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="type"placeholder="Type your menu Type" name="type">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Product Details</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" rows="3"id="description" placeholder="Type your menu Details" name="description"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Product Price</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="price"placeholder="$00.00" name="price">
                                            </div>
                                            
                                        </div>
                                        <div class="form-group">              
                                                                    <p id="erreur" style="color: red;"></p>

                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="submit" name="submit">Upload</button>
                                            </div>
                                        </div>
                                    </form>
									</div>
                                </div>
							</div><!-- /# card -->
						</div><!-- /# column -->
					</div><!-- /# row -->
				</div><!-- /# main content -->
            </div><!-- /# container-fluid -->
        </div><!-- /# main -->
    </div><!-- /# content wrap -->

    <script src="assets/js/lib/jquery.min.js"></script><!-- jquery vendor -->
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script><!-- nano scroller -->
    <script src="assets/js/lib/sidebar.js"></script><!-- sidebar -->
    <script src="assets/js/lib/bootstrap.min.js"></script><!-- bootstrap -->
    <script src="assets/js/lib/mmc-common.js"></script>
    <script src="assets/js/lib/mmc-chat.js"></script>
    <script src="assets/js/scripts.js"></script><!-- scripit init-->
</body>
 <!-- Mirrored from zebratheme.com/html/fooadmin/restaurant-upload-menu.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Feb 2019 15:04:45 GMT -->
</html>
<script type="text/javascript">
   function test2(event)
{   

var nom=document.getElementById("nom");
var type=document.getElementById("type");
var description=document.getElementById("description");
var price=document.getElementById("price");
var erreur;
if (!nom.value)
{
    erreur="nom  empty "
}
if(!type.value)
{
    erreur="type empty";
}
if(!description.value)
{
    erreur="description empty";
}
if(!price.value)
{
    erreur="price empty";
}

if (erreur)
{   event.preventDefault();
alert("vos champs sont vides ");
document.getElementById("erreur").innerHTML = erreur;

}









}
</script>