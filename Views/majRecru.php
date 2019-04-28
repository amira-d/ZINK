<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();  
 
 
//définir la session une session est un tableau temporaire 
//1 er point c quoi une session
// 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Zink : Update job offer</title>
	
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
    <link href="assets/css/lib/mmc-chat.css" rel="stylesheet">
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
                    <li><a href="index-2.php"><i class="ti-home"></i> Dashboard </a></li>                   
                    <li><a class="sidebar-sub-toggle"><i class="ti-cup"></i> Restaurant <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="../ceevee/index-2.php">Resto</a></li>
                            <li><a href="restaurant-favourite-list.html">Favourite</a></li>
                            <li><a href="restaurant-order-list.html">Order List</a></li>
                            <li><a href="restaurant-upload-menu.html">Upload Menu</a></li>

                            <li><a href="modifierp1.html">Change Product</a></li>

                         <li><a href="annonces-produit.php">Annonces produit</a></li>
                        </ul>
                    </li>
                    
                    <li class="label">Utilities</li>
                    <li><a href="app-event-calender.html"><i class="ti-calendar"></i> Calender </a></li>
                    <li><a href="app-email.html"><i class="ti-email"></i> Email</a></li>
                      <li><a href="annonces-produit.php"><i class="ti-target"></i> Annonces produit</a></li>
                    <li class="active"><a href="carriere.php" class="sidebar-sub-toggle"><i class="ti-cup"></i>Carriere</a></li> 
                    <li><a class="sidebar-sub-toggle"><i class="ti-target"></i> Pages <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                           
                            <li><a href="page-reset-password.html">Forgot password</a></li>
                        </ul>
                    </li>
                    
                 <li><a href="page-login.html"><i class="ti-close"></i> Logout</a></li>

                </ul>
            </div>
        </div>
    </div > <!--/# sidebar -->




   <div class="header">
        <div class="pull-left">
            <div class="logo"><a href="index-2.php"><span>ZINK</span></a></div>
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
                

   <li class="header-icon dib"><span class="user-avatar"> <?php 
if (isset($_SESSION['l']) && isset($_SESSION['p'])) 
{ 

     echo '<b>'.$_SESSION['l'].' : </b>'.$_SESSION['r'].' '; 

}

else { 
echo"<script>window.location.replace('page-login.html');</script>";
}
?></span></li>
                   
                     
                </li>
            </ul>
        </div>
    </div>

<?PHP
include "../Entities/recrutement.php";
include "../Cores/recruC.php";
if (isset($_GET['id'])){
  $rC=new recruC();
    $result=$rC->recupererRecrutement($_GET['id']);
  foreach($result as $row){
    $titre=$row['titre'];
    $type=$row['service'];
    $description=$row['description'];
    $deadline=$row['deadline'];
    $image=$row['image'];
?>
  <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
<div class="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Job offer Update</h4>
									
                                </div>
                                <div class="card-body">
									<div class="menu-upload-form">
										<form class="form-horizontal" method="POST" enctype="multipart/form-data" onsubmit="return confirm('Voulez vous modifier cette annonce ?')">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Upload job offer</label>
                                            <div class="col-sm-10">
                                                <div class="form-control file-input dark-browse-input-box">
                                                    <label for="inputFile-2">
                                                                <span class="btn btn-danger dark-input-button">
                                                                    <input type="file" id="inputFile-2" onchange="this.parentNode.parentNode.nextElementSibling.value = this.value"  name="image">
                                                                    <i class="fa fa-file-archive-o"></i>
                                                                </span>
                                                    </label>
                                                    <input class="file-name input-flat" type="text" readonly="readonly" placeholder="<?PHP echo $image ;?>">
                                                </div>
                                            </div>
                                        </div>
                                      
                             <div class="form-group">
                                            <label class="col-sm-2 control-label">Name job</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="<?PHP echo $titre ?>" name="titre">
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-sm-2 control-label">Type job</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="<?PHP echo $type ?>" name="type">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">job Details</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" rows="3" value="<?PHP echo $description ?>" name="description"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">deadline job</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" placeholder="<?PHP echo $deadline ?>" name="deadline">
                                            </div>
                                        </div>
                                

                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                            	<input type="submit" name="update" value="Update">
                                           
                                                <input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>">
                                            </div>
                                        </div>
                                        <?PHP
  }
}

if (isset($_POST['update'])){
	$target=basename($_FILES['image']['name']);
			$image =$_FILES['image']['name'];
					if (move_uploaded_file($_FILES['image']['tmp_name'],$target ))
						{
							$msg= "IMAGE LOADED SUCCESSFULLY" ; 
						}
					else
					{
						$msg = "Problem with uploading";
					}
  $recrutement=new recrutement($_POST['titre'],$_POST['description'],$_POST['type'],$_POST['deadline'],$image);
  $rC->modifierRecrutement($recrutement,$_POST['id_ini']);
  echo " <script>if (confirm(\"Annonce enregistrée avec succès ! Voulez vous voir un aperçu ?\")) { window.location.replace('ZINK_FI/jobs.php')  ;  }  else { window.location.replace('carriere.php')  ; } </script>";

  //header('Location: annonces-produit.php');
}
?>
                                    </form>
									</div><!--form div-->
                                </div><!--body card-->
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
</html>