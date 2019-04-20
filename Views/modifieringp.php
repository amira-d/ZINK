

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
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="jquery.lwMultiSelect.js"></script>
		<link rel="stylesheet" href="jquery.lwMultiSelect.css" />
</head>

<body>

    <body>


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
                            <li><a href="restaurant-order-list.html">Order List</a></li>
                            <li><a href="restaurant-upload-menu.html">Upload Menu</a></li>
                                                        <li><a href="modifierp1.html">Change Product</a></li>
                                                                                    <li><a href="supprimerp.php">Delete Product</a></li>
                                                                                    <li><a href="afficheringprod.php"> Product Details</a></li>

                            <li><a href="annonces-produit.html">Annonces produit</a></li>


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
                
                <li class="header-icon dib"><span class="user-avatar">Lamia <i class="ti-angle-down f-s-10"></i></span>
                   
                     
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
                                    <li class="active">fill product</li>
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
                                    <a href="ceevee/Menu.php" style="text-decoration: none; color: grey; float: right;">Wanna see your final Menu?</a>
                                    <h4>Fill your product by ingredient</h4>
									<div class="card-header-right-icon">
                                        <ul>
                                            <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                                            <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <?php

include"../Cores/ingprodC.php";
$country = '';
$nom= $_GET['mavar'];

$prodC=new ingprodC();
$liste=$prodC->afficherips($nom);
while ($data=$liste->fetch())
    # code...
{ 
    $country .= '<option value="'.$data["id"].'">'.$data["id"].'</option>';
}


?>
                                <div class="card-body">
									<div class="menu-upload-form">
                                
													<form method="POST" action="modify.php" id="insert_data">
				<input type="text" name="name"readonly="readonly"id="name" >

				<select name="ingredient[]" id="ingredient" multiple 
                class="form-control">
                    <?php echo $country; ?>
				</select>
				<br />
                                          <input type="hidden" name="hidden_city" id="hidden_city" >
				<input type="submit" name="insert" id="action" class="btn btn-info" value="Insert" />
			</form>                       
                                </div>

									</div>
                                </div>
							</div><!-- /# card -->
						</div><!-- /# column -->
					</div><!-- /# row -->
				</div><!-- /# main content -->
            </div><!-- /# container-fluid -->
        </div><!-- /# main -->
    </div><!-- /# content wrap -->

    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script><!-- nano scroller -->

    <script src="assets/js/lib/sidebar.js"></script><!-- sidebar -->
    <script src="assets/js/lib/bootstrap.min.js"></script><!-- bootstrap -->
       <script src="assets/js/lib/mmc-common.js"></script>
    <script src="assets/js/lib/mmc-chat.js"></script>
    <script src="assets/js/scripts.js"></script><!-- scripit init-->

</body>
 <!-- Mirrored from zebratheme.com/html/fooadmin/restaurant-upload-menu.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Feb 2019 15:04:45 GMT -->
</html>
<script>
$(document).ready(function(){

	$('#ingredient').lwMultiSelect();


var val = "<?php echo $nom ?>";
document.getElementById("name").value = val;




}
    );

	$('#insert_data').on('submit', function(event){
       /* if($('#ingredient').val() == '')
        {
            alert("Please Select Country");
            return false;
        }*/
       

            $('#hidden_city').val($('#ingredient').val());
            //$('#action').attr('disabled', 'disabled');
           
            //(test);
            var form_data = $(this).serialize();  
            var array= $('select#ingredient').val()
            alert(array[0]);

            $.ajax({
                url:"modify.php",
                method:"POST",
                data:form_data,
                success:function(data)
                {
                                            alert('Data Inserted');
                    $('#action').attr("disabled", "disabled");
                    if(data == 'done')
                    {
                        $('#ingredient').html('');
                        $('#ingredient').data('plugin_lwMultiSelect').updateList();
                        $('#ingredient').data('plugin_lwMultiSelect').removeAll();
                        $('#insert_data')[0].reset();
                        alert('Data Inserted');
                    }
                }
                
            });
            }

            );

        
        
       
        
       



</script>

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
