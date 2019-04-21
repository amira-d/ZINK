 
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Foodmin : Calendar</title>
    
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

     <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <li class="label">Main</li>
                    <li class="active"><a href="index-2.html"><i class="ti-home"></i> Dashboard </a></li>                  
                    <li><a class="sidebar-sub-toggle"><i class="ti-cup"></i> Restaurant <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="ceevee/index.html">Resto</a></li>
                            <li><a href="restaurant-favourite-list.html">Favourite</a></li>
                            <li><a href="afficherCommandeAdmin.php">Order List</a></li>
                            <li><a href="restaurant-upload-menu.html">Upload Menu</a></li>
                                                        <li><a href="modifierp1.html">Change Product</a></li>
                                                                                    <li><a href="supprimerp.php">Delete Product</a></li>
                                                                                    <li><a href="afficheringprod.php"> Product Details</a></li>

                            <li><a href="annonces-produit.html">Annonces produit</a></li>
                                   <li><a href="afficherclient.php">Clients</a></li>
                                   <li><a href="afficherclient1.php">Clients fideles</a></li>
                                   <li><a href="client.html">ajouter client</a></li>
                                   <li><a href="tables-faq.php">FAQ</a></li>
                                   <li><a href="ajout-faq.php">ajouter FAQ</a></li>
                                   <li><a href="clientstats.php">Statistiques</a></li>

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










  








 <?php
include "../config.php";
include "../entities/client.php";
include "../entities/clientf.php";

$db=config::getConnexion();
$result=$db->query('SELECT * FROM client');
$results=$db->query('SELECT * FROM clientf');
$nbc=0;
$nbf=0;
 while ($row = $result->fetch()) 
 {
 $nbc++;
 }
 while ($row = $results->fetch()) 
 {
 $nbf++;
 }
 $nbt=$nbc+$nbf;
 $nbcp=($nbc*100)/$nbt;
 $nbfp=($nbf*100)/$nbt;

?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endiff]-->

<head>
  


    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>


	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">



      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['clients', <?php echo $nbc?>],
          ['client fidèle', <?php echo $nbf ?>]
        ]);

        var options = {
          title: 'la partitions des clients'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>


</head>

<body>
  
	
	    <center><div id="piechart" style="width: 1600px; height: 750px;"></div></center>
		<br>
 <center><table style="width:50%">
  <tr>
   <th>clients</th>
    <th>clients fidèle</th> 
    <th><center>clients totale</center></th>
  </tr>
  <tr>
    <td> <?php  echo $nbc;?></td>
    <td><?php  echo $nbf;?></td> 
   <td> <center><?php  echo $nbt;?></center></td>
  </tr>
  <tr>
    <td> <?php  echo $nbcp?> %</td>
    <td> <?php echo $nbfp?> %</td> 
   <td> <center>100 %</center></td>
  </tr>
</table></center>
			                                                                                      
</body>
</html>
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



