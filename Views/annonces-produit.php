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
    <link href="assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/lib/weather-icons.css" rel="stylesheet" />
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
                            <li><a href="../ceevee/index-2.php">Resto</a></li>
                            <li><a href="restaurant-favourite-list.html">Favourite</a></li>
                            <li><a href="restaurant-order-list.html">Order List</a></li>
                            <li><a href="restaurant-upload-menu.html">Upload Menu</a></li>

                            <li><a href="modifierp1.html">Change Product</a></li>

                        </ul>
                    </li>
                    
                    <li class="label">Utilities</li>
                    <li><a href="app-event-calender.html"><i class="ti-calendar"></i> Calender </a></li>
                    <li><a href="app-email.html"><i class="ti-email"></i> Email</a></li>

  <li class="active"><a href="annonces-produit.php"><i class="ti-target"></i> Annonces produit</a></li>
                                         <li><a href="carriere.php" ><i class="ti-cup"></i>Carriere</a></li>                    <li><a class="sidebar-sub-toggle"><i class="ti-target"></i> Pages <span class="sidebar-collapse-icon ti-angle-down"></span></a>
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
                                </div>

     <div class="container " style="width: 100%">                 

      <div class="order-list-item"> 
      <table class="table"  id="table_produits" width="100%" cellspacing="0">

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
 $connect = mysqli_connect("localhost", "root", "amira1999", "projetweb");  
 $query ="SELECT * FROM a_produit ORDER BY id DESC";  
 $result = mysqli_query($connect, $query);  
 
                          while($row = mysqli_fetch_array($result))  
                          {  


  echo
  '
                                   

  <tr>
  <td>'.$row["id"].'</td>
  <td>'.$row["titre"].'</td>
  <td>'.$row["type"].'</td>
  <td>'.$row["description"].'</td>
  <td style="width:100px;"><img src="images/'.$row["image"].'" alt="image" class="img-responsive"/></td>
  <td><form method="POST" action="supprimerAnnonce.php">
  <input type="submit" name="supprimer" value="supprimer">
  <input type="hidden" value="'.$row["id"].'" name="id">
  </form>
  </td>
  <td><a href="majAnnonce.php?titre='.$row["titre"].'">
  Update</a></td>
  </tr>
  '
;}
  


?>
                                        </tbody>
                                </table>
                                <a href="ZINK_FI/Z-news.php" class="btn btn-danger" >Aperçu</a>                              </div>

                             </div>                 
                        
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
                                    <div class="card-header-right-icon">
                                      
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


  <!-- Page level custom scripts -->
            <script src="assets/js/lib/jquery.nanoscroller.min.js"></script><!-- nano scroller -->

    
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
         
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
    

          
      </body>  




</html>

<!--<script>
$(document).ready(function(){
    load_data();
    function load_data(query)
    {
        $.ajax({
            url:"fetch_annonce.php",
            method:"post",
            data:{query:query},
            success:function(data)
            {
                $('#result').html(data);
            }
        });
    }
    
    $('#search_text').keyup(function(){
        var search = $(this).val();
        if(search != '')
        {
            load_data(search);
        }
        else
        {
            load_data();            
        }
    });
});


</script>


<script>  
 $(document).ready(function(){  
      load_data();  
      function load_data(page)  
      {  
           $.ajax({  
                url:"pagination.php",  
                method:"POST",  
                data:{page:page},  
                success:function(data){  
                     $('#pagination_data').html(data);  
                }  
           })  
      }  
      $(document).on('click', '.pagination_link', function(){  
           var page = $(this).attr("id");  
           load_data(page);  
      });  
 });  
 </script>  -->
<script>  
 $(document).ready(function(){  
      $('#table_produits').DataTable();  
 });  
 </script> 