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

    <title>ZINK : Admin </title>
	
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
    <link href="assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/lib/weather-icons.css" rel="stylesheet" />
    <link href="assets/css/lib/mmc-chat.css" rel="stylesheet" />
    <link href="assets/css/lib/sidebar.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/unix.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body>


    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <li class="label">Main</li>
                    <li ><a href="index-2.php"><i class="ti-home"></i> Dashboard </a></li>                   
                   
                    <li><a class="sidebar-sub-toggle"><i class="ti-cup"></i> Restaurant <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="ceevee/index.html">Resto</a></li>
                            <li><a href="restaurant-favourite-list.html">Favourite</a></li>
                            <li><a href="restaurant-order-list.html">Order List</a></li>
                            <li><a href="restaurant-upload-menu.html">Upload Menu</a></li>

                            <li><a href="modifierp1.html">Change Product</a></li>

                                                        <li><a href="modifierp1.html">Change Product</a></li>
                                                                                    <li><a href="supprimerp.php">Delete Product</a></li>



                        </ul>
                    </li>
                    
                    <li class="label">Apps</li>
                    <li><a href="app-event-calender.html"><i class="ti-calendar"></i> Calender </a></li>
                    <li><a href="app-email.html"><i class="ti-email"></i> Email</a></li>
                      <li><a href="annonces-produit.php"><i class="ti-target"></i> Annonces produit</a></li>

                    <li class="active"><a  class="sidebar-sub-toggle" ><i class="ti-cup"></i>Carriere <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                           <ul>
                            <li><a href="carriere.php">Annonces de recrutement</a></li>
                        </ul>
                        <ul>
                              <li class="active"><a href="candidatures.php">Candidatures</a></li>
                   </ul>
                    
                    
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
            <div class="logo"><a href="index-2.php"><span>ZINK</span></a></div>
            <div class="hamburger sidebar-toggle">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
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

                     
            
            </ul>
        </div>
 
   <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-0">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Manage job applications :</h1>
                            </div>
                        </div>
                    </div><!-- /# column -->
                    <div class="col-lg-4 p-0">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">Job applications </li>
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
                                    <h4>Job applications</h4>
                              
      </div>

     <div class="container" style="width: 100%">                 

      <div class="order-list-item"> 
      <table class="table"  id="table_produits" width="100%" cellspacing="0">

<thead>
<tr>
<th>ID</th>
<th>Photo</th>
<th>Nom</th>
<th>Prénom</th>
<th>Date de naissance</th>
<th>Email</th>
<th>Numéro</th>
<th>CV</th>
<th>Lettre de motivation</th>
<th>Service</th>
<th>Date d'envoi</th>
<th>Supprimer</th>
<th>Consulter</th>
</tr>

 </thead>
    <tbody>                              
 <?PHP
 $connect = mysqli_connect("localhost", "root", "amira1999", "projetweb");  
 $query ="SELECT * FROM candidature ORDER BY nom DESC";  
 $result = mysqli_query($connect, $query);  
 
                          while($row = mysqli_fetch_array($result))  
                          {  


  echo
  '
                                   

  <tr>
  <td>'.$row["id"].'</td>
  <td style="width:100px;"><img src="images/'.$row["photo"].'" alt="image" class="img-responsive"/></td>
  <td>'.$row["nom"].'</td>
  <td>'.$row["prenom"].'</td>
  <td>'.$row["date_naissance"].'</td>
<td>'.$row["email"].'</td>
  <td>'.$row["num"].'</td>
 <td style="width:100px;"><img src="images/'.$row["cv"].'" alt="cv" class="img-responsive"/></td>
 <td style="width:100px;"><img src="images/'.$row["lettre"].'" alt="cv" class="img-responsive"/></td>
              <td>'.$row["service"].'</td>
            <td>'.$row["date_envoi"].'</td>
  
  <td><form method="POST" action="supprimerCandi.php">
  <input type="submit" name="supprimer" value="supprimer">
  <input type="hidden" value="'.$row["id"].'" name="id">
  </form>
  </td>
  <td><a href="pdfCandi.php?id='.$row["id"].'">
  Consulter en pdf</a></td>
  </tr>
  '
;}
  


?>
</tbody> 
  </table>
                             </div>   
                            </div><!-- /# card -->
                        </div><!-- /# column -->
                    </div><!-- /# row -->
                </div><!-- /# main content -->

                
                

                </div>
            </div><!-- /# container-fluid -->
        </div><!-- /# main -->
    </div><!-- /# content wrap -->
	
     <script src="assets/js/lib/jquery.min.js"></script><!-- jquery vendor -->
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script><!-- nano scroller -->    
    <script src="assets/js/lib/sidebar.js"></script><!-- sidebar -->
    <script src="assets/js/lib/bootstrap.min.js"></script><!-- bootstrap -->
    <script src="assets/js/lib/mmc-common.js"></script>
    <script src="assets/js/lib/mmc-chat.js"></script>
  <!--  Chart js -->
  <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
  <script src="assets/js/lib/chart-js/chartjs-init.js"></script>
  <!-- // Chart js -->
  
  <!--  Datamap -->
    <script src="assets/js/lib/datamap/d3.min.js"></script>
    <script src="assets/js/lib/datamap/topojson.js"></script>
    <script src="assets/js/lib/datamap/datamaps.world.min.js"></script>
    <script src="assets/js/lib/datamap/datamap-init.js"></script>
  <!-- // Datamap -->-->
    <script src="assets/js/lib/weather/jquery.simpleWeather.min.js"></script> 
    <script src="assets/js/lib/weather/weather-init.js"></script>
    <script src="assets/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/js/lib/owl-carousel/owl.carousel-init.js"></script>
    <script src="assets/js/scripts.js"></script><!-- scripit init-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
         
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>   

</body>


<!-- Mirrored from zebratheme.com/html/fooadmin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Feb 2019 15:03:45 GMT -->
</html>




<script>  
 $(document).ready(function(){  
      $('#table_produits').DataTable();  
 });  
 </script> 