<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Zink : Update announcement</title>
	
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
                    <li class="active"><a href="index-2.html"><i class="ti-home"></i> Dashboard </a></li>                   
                    <li><a class="sidebar-sub-toggle"><i class="ti-cup"></i> Restaurant <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="../ceevee/index-2.html">Resto</a></li>
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
                    <li><a href="carriere.html"><i class="ti-carriere"></i>Carriere</a></li> 
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
            <div class="logo"><a href="index-2.html"><span>ZINK</span></a></div>
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
                
                <li class="header-icon dib"><span class="user-avatar">Lamia <i class="ti-angle-down f-s-10"></i></span>
                   
                     
                </li>
            </ul>
        </div>
    </div>

<?PHP
include "../Entities/annonce.php";
include "../Cores/annonceC.php";
if (isset($_GET['titre'])){
  $annC=new AnnonceC();
    $result=$annC->recupererAnnonce($_GET['titre']);
  foreach($result as $row){
    $titre=$row['titre'];
    $type=$row['type'];
    $description=$row['description'];
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
                                    <h4>Announcement Update</h4>
									
                                </div>
                                <div class="card-body">
									<div class="menu-upload-form">
										<form class="form-horizontal" method="POST" enctype="multipart/form-data" onsubmit="return confirm('Voulez vous modifier cette annonce ?')">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Upload announcement</label>
                                            <div class="col-sm-10">
                                                <div class="form-control file-input dark-browse-input-box">
                                                    <label for="inputFile-2">
                                                                <span class="btn btn-danger dark-input-button">
                                                                    <input type="file" id="inputFile-2" onchange="this.parentNode.parentNode.nextElementSibling.value = this.value"  name="image">
                                                                    <i class="fa fa-file-archive-o"></i>
                                                                </span>
                                                    </label>
                                                    <input class="file-name input-flat" type="text" readonly="readonly" placeholder="<?PHP echo $image ?>">
                                                </div>
                                            </div>
                                        </div>
                                      
                             <div class="form-group">
                                            <label class="col-sm-2 control-label">Name Product</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="<?PHP echo $titre ?>" name="titre">
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-sm-2 control-label">Type Product</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="<?PHP echo $type ?>" name="type">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Product Details</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" rows="3" value="<?PHP echo $description ?>" name="description"></textarea>
                                            </div>
                                        </div>

                                

                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                            	<input type="submit" name="update" value="Update">
                                           
                                                <input type="hidden" name="titre_ini" value="<?PHP echo $_GET['titre'];?>">
                                            </div>
                                        </div>
                                        <?PHP
  }
}

if (isset($_POST['update'])){
	 $target="images/";
            $image =$_FILES['image']['name'];
                    if (move_uploaded_file($_FILES['image']['tmp_name'],$target.$image ))
                        {
                            echo"<script>alert(\"Image loaded successfully ! \")</script>"; 
                        }
                    else
                    {
                                                    echo"<script>alert(\"Problem with uploading ! \")</script>"; 

                    }

  $annonce=new annonce($_POST['titre'],$_POST['type'],$_POST['description'],$image);
  $annC->modifierAnnonce($annonce,$_POST['titre_ini']);

            echo " <script>if (confirm(\"Annonce enregistrée avec succès ! Voulez vous voir un aperçu ?\")) { window.location.replace('ZINK_FI/Z-news.php')  ;  }  else { window.location.replace('annonces-produit.php')  ; } </script>";
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
</html>>