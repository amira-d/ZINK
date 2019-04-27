<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Zink : Upload announcement</title>
	
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
<<<<<<< HEAD
    <link href="assets/css/lib/bootstrap.min1.css" rel="stylesheet">
    <link href="assets/css/lib/unix.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

        <link href="assets/css/style2.css" rel="stylesheet">

=======
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">jkjkjkk
    <link href="assets/css/lib/unix.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
      <link href="assets/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
        <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
>>>>>>> parent of 2936103... Merge branch 'donia' of https://github.com/projet-web-elite/ZINK into donia

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

                         <li><a href="annonces-produit.html">Annonces produit</a></li>
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
    </div><!-- /# sidebar -->




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
 


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-0">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Manage announcements :</h1>
                            </div>
                        </div>
                    </div><!-- /# column -->
                    <div class="col-lg-4 p-0">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">News Upload</li>
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
                                    <h4>Announcements</h4>
                                    <div style="position: relative; top: -29px; right: -788px;">
                                    <select name="Tri" onchange="submit();">
                                                <option value="plus" selected>Plus récent</option>
                                                <option value="moins">Moins récent</option>
                                              </select>
                                              </div>

<<<<<<< HEAD
                         <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Search</span>
                    <input type="text" name="search_text" id="search_text" placeholder="Search by  Details" class="form-control" />
                </div>
            <br />
            <div id="result"></div>                 
                          
                               </tbody>
</table>
</div>   

                          
=======
                                             <!-- <div class="form-group>-->
                                               <!--<form method="POST" action="rechercheAnnonce.php">-->

                                                    

                                                
                                             <!-- </form>
                                             </div>-->
                            
                                  
<!--<div class="order-list-item">-->
<div class="table-responsive">
<div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <div class="col-sm-12 col-md-6">
 <div class="dataTables_filter" id="dataTable_filter">

                                                   <input  type="search"  name="search1" class="form-control form-control-sm" placeholder="search" aria-controls="dataTable">        
                                        </div>   
                                        </div> 
<thead>
<tr>
<th>ID</th>
<th>Titre</th>
<th>Type</th>
<th>Description</th>
<th>Image</th>
<th>Supprimer</th>
<th>Modifier</th>
</tr>

 </thead>
 <tbody>
                                   
 <?PHP
include "C:/wamp64/www/ZINK/zink/Cores/annonceC.php";
include "C:/wamp64/www/ZINK/zink/Entities/annonce.php";
$ann2C=new AnnonceC();
 $listeannonces=$ann2C->afficherAnnonce();
$data=$listeannonces->fetch();


foreach($listeannonces as $row){
  ?>
  <tr>
  <td><?PHP echo $row['id']; ?></td>
  <td><?PHP echo $row['titre']; ?></td>
  <td><?PHP echo $row['type']; ?></td>
  <td><?PHP echo $row['description']; ?></td>
  <td><?PHP echo "<img src='../web/".$data['image']."' alt='image' class='img-responsive'/>";?></td>
  <td><form method="POST" action="supprimerAnnonce.php">
  <input type="submit" name="supprimer" value="supprimer">
  <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
  </form>
  </td>
  <td><a href="majAnnonce.php?titre=<?PHP echo $row['titre']; ?>">
  Update</a></td>
  </tr>

  <?PHP
  
}

?>
</tbody>
</table>
</div>
</div>
</div>
                          
>>>>>>> parent of 2936103... Merge branch 'donia' of https://github.com/projet-web-elite/ZINK into donia
                            </div><!-- /# card -->
                        </div><!-- /# column -->
                    </div><!-- /# row -->
                </div><!-- /# main content -->


                <div class="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Announcement Upload</h4>
<<<<<<< HEAD
                                    <div class="card-header-right-icon">
=======
									<div class="card-header-right-icon">
>>>>>>> parent of 2936103... Merge branch 'donia' of https://github.com/projet-web-elite/ZINK into donia
                                      
                                    </div>
                                </div>
                                <div class="card-body">
									<div class="menu-upload-form">
										<form class="form-horizontal" method="POST" action="ajoutAnnonce.php" enctype="multipart/form-data" onsubmit="return confirm('Voulez vous ajouter cette annonce ?')">
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
                                                    <input class="file-name input-flat" type="text" readonly="readonly" placeholder="Browse Files">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Name Product</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="Type your announcement Title" name="titre">
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-sm-2 control-label">Type Product</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="Type your announcement Type" name="type">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Product Details</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" rows="3" placeholder="Type your announcement Details" name="description"></textarea>
                                            </div>
                                        </div>

                                

                                        <div class="form-group">
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
    <!--<script src="assets/js/lib/bootstrap.min.js"></script>--><!-- bootstrap -->
    <script src="assets/js/lib/mmc-common.js"></script>
    <script src="assets/js/lib/mmc-chat.js"></script>
    <script src="assets/js/scripts.js"></script><!-- scripit init-->
    <script src="assets/js/lib/rating1/jRate.init.js"></script><!-- scripit init-->
    <script src="assets/js/scripts.js"></script><!-- scripit init-->
      <!-- Page level plugins -->
  <script src="assets/datatables/jquery.dataTables.min.js"></script>
  <script src="assets/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="assets/demo/datatables-demo.js"></script>
<<<<<<< HEAD
            <script src="assets/js/lib/jquery.nanoscroller.min.js"></script><!-- nano scroller -->

  <script src="assets/js/lib/jquery.min.js"></script><!-- jquery vendor -->
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script><!-- nano scroller -->    
    <script src="assets/js/lib/sidebar.js"></script><!-- sidebar -->
    <script src="assets/js/lib/bootstrap.min.js"></script><!-- bootstrap -->
    <script src="assets/js/lib/mmc-common.js"></script>
    <script src="assets/js/lib/mmc-chat.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
=======

>>>>>>> parent of 2936103... Merge branch 'donia' of https://github.com/projet-web-elite/ZINK into donia

</body>


<!-- Mirrored from zebratheme.com/html/fooadmin/restaurant-upload-menu.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Feb 2019 15:04:45 GMT -->
</html>