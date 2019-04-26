<?php
include "../entities/faq.php";
$db=config::getConnexion();
if (isset($_GET['search'])&&!empty($_GET['search']))
{   

}
else
{
    $result=$db->query('SELECT * FROM faq order by id');
}

?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ZINK: Client</title>
    
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
    <link href="assets/css/lib/calendar/fullcalendar.css" rel="stylesheet" />
    <link href="assets/css/lib/mmc-chat.css" rel="stylesheet" />
    <link href="assets/css/lib/sidebar.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/unix.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/lib/datatable/buttons.bootstrap.min" rel="stylesheet">
    <link href="assets/css/lib/datatable/dataTables.bootstrap.min" rel="stylesheet">


    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<h4><body>


    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
      



 <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <li class="label">Main</li>
                    <li class="active"><a href="index-2.html"><i class="ti-home"></i> Dashboard </a></li>                  
                    <li><a class="sidebar-sub-toggle"><i class="ti-cup"></i> Restaurant <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="../ceevee/index.html">Resto</a></li>
                            <li><a href="restaurant-favourite-list.html">Favourite</a></li>
                            <li><a href="restaurant-order-list.html">Order List</a></li>
                            <li><a href="restaurant-upload-menu.html">Upload Menu</a></li>
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
                    
                 <li><a href="page-login.html"><i class="ti-close"></i> Logout</a></li>

                </ul>
            </div>
        </div>
    </div>


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
                
                <li class="header-icon dib"><span class="user-avatar">Lamia <i class="ti-angle-down f-s-10"></i></span>
                   
                     
                </li>
            </ul>
        </div>
    </div>



 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

\assets\css\lib

    <link rel="stylesheet" href="assets/css/lib/bootstrap.min.css">
   <!-- <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css"> -->
    <!--<link rel="stylesheet" href="themify-icons.css">
    <link rel="stylesheet" href="flag-icon.min.css">
    <link rel="stylesheet" href="cs-skin-elastic.css">
    <link rel="stylesheet" href="dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="buttons.bootstrap4.min.css">-->

    <link rel="stylesheet" href="style.css">
<center><div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                      <div style="width:300px; margin:auto;">
                        <h1>Dashboard </h1>
                        </div>
                    </div>
                </div>
            </div></center>


<div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                           <li class="active"></li>
                        </ol>
                    </div>
                </div>
            </div> 
        </div>

 <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3><center><strong class="card-title">Data Table</strong></center></h3>
                              <!--  <input type="" name="">-->
                            </div>




       <center> <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"> Listes FAQ </strong>
                            </div>
                           <center> <div class="card-body">
                              <center> <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th><center>Identifiant </center></th>
                                            <th> <center>Questions</center> </th>
                                            <th><center> Réponses</center> </th>
                                            <th><center> Actions</center></th>

                                        </tr>
                                    </thead>
                                   <tbody>
                                    <?php while ($row = $result->fetch()) { 
                                    ?>
                                              <tr>

                                       
                                            <td>  <?php echo $row['id']; ?></td>
                                            <td> <?php echo $row['question']; ?></td>
                                            <td><?php echo $row['reponse']; ?></td>
                                            <td>  
              <a href="modifier-faq.php?edit=<?php echo $row['id']; ?>&edit2=<?php echo $row['question']; ?>&edit3=<?php echo $row['reponse']; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>

               <a href="supprimer-faq.php?del=<?php echo $row['id']; ?>" class="btn btn-danger btn-xs"><i class ="fa fa-trash-o"> </i> Delete</a>
                                             </td>
                                        </tr>
                                        
                                        <?php
                                        }
                                        ?>
                                        </tbody>
                                </table></center> 
                            </div></center>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->




<script type="text/javascript">
        let search=document.getElementById("search");
        search.addEventListener("keydown",function (e)
        {
            if (e.keyCode==13)
                document.location="tables-clients.php?r="+search.value;
            e.stopPropagation(); 
        });
        </script>

</body></h4>
<script src="assets/js/lib/jquery.min.js"></script><!-- jquery vendor -->
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script><!-- nano scroller -->
    <script src="assets/js/lib/sidebar.js"></script><!-- sidebar -->
    <script src="assets/js/lib/bootstrap.min.js"></script><!-- bootstrap -->
    <script src="assets/js/lib/mmc-common.js"></script>
    <script src="assets/js/lib/mmc-chat.js"></script>
    
    <script src="assets/js/lib/jquery-ui/jquery-ui.min.js"></script>
    <script src="assets/js/lib/moment/moment.js"></script>
    <script src="assets/js/lib/calendar/fullcalendar.min.js"></script>
    <script src="assets/js/lib/calendar/fullcalendar-init.js"></script>  
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>  
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>  
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>  
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>  
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>  
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>  
    <script src="assets/js/lib/data-table/jszip.min.js"></script>  
    <script src="assets/js/lib/data-table/datatables-init.js"></script>  
</html>
