<!DOCTYPE HTML>
<!DOCTYPE html>
<html>

</head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>zink : Client</title>
    
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="paging.js"></script>
 
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






  






<?PHP
include "../cores/clientC.php";
$db=config::getConnexion();
$client1C=new clientC();
$listeclient=$client1C->afficherclients();

$produitparpage=3;
$produittotalreq=$db->query('SELECT cin from client ');
            $produittotal= $produittotalreq->rowCount();
        //$produittotal= $listeclient->rowCount();
        $pagestotales=ceil($produittotal/$produitparpage);
if( isset($_GET['page']) AND !empty($_GET['page']) AND $_GET['page'] > 0)
{
    $_GET['page']=intval($_GET['page']);
    $pagecourante=$_GET['page'];
}
else
{
    $pagecourante=1;
}
$depart=($pagecourante-1)*$produitparpage;
$result=$db->query('SELECT * from client LIMIT '.$depart.','.$produitparpage.'');

//var_dump($listeEmployes->fetchAll());
?>




<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
      

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3><center><strong class="card-title">Data Table</strong></center></h3>
                              <!--  <input type="" name="">-->

                        <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Search</span>
                    <input type="text" name="search_text" id="search_text" placeholder="Search by  Details" class="form-control" />
                </div>
            <br />
            <div id="result"></div>                 
                          </div>  
                               </tbody>
</table>
 
                         

            

   </div>



 
                        </div>
                                  <?php 
                                for ($i=1;$i<$pagestotales;$i++)
                                {?>
                                    <ul class="pagination">
                                 <!-- echo ' <a href="shop.php?page='.$i.'">'.$i.'</a>' ; -->
                                  <li> 
                                    <?php 
                                    echo ' <a href="afficherclient.php?page='.$i.'">'.$i.'</a>' ;
                                    ?>
                                  </li>
                              </ul>
                                 <?php
                                }
                                ?>
                    </div>


                </div>
            </div><!-- .animated -->

  
        </div><!-- .content -->



 </div> 

    <script src="assets/js/lib/jquery.min.js"></script><!-- jquery vendor -->
  <script src="assets/js/lib/jquery.nanoscroller.min.js"></script><!-- nano scroller --> 
    <script src="assets/js/lib/sidebar.js"></script><!-- sidebar -->
   <!-- <script src="assets/js/lib/bootstrap.min.js"></script><!-- bootstrap --> 
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


    <script src="assets/js/paging.min.js"></script>
    <script src="assets/js/paging.js"></script>
</body>


</html>


<script>
$(document).ready(function(){
    load_data();
    function load_data(query)
    {
        $.ajax({
            url:"fetch_client.php",
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



      $(function() {
        $("#listPage").JPaging({
          pageSize: 7
        });
      });
    </script>
