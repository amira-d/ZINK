<?php require("phpToPDF.php"); 
 
 
include "../Cores/candiC.php";
$candi1C=new candiC();
$listecandi=$candi1C->afficherCandi();

//var_dump($listeclients->fetchAll());
?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">




    <link rel="stylesheet" href="assets/css/lib/bootstrap.min.css">
 


    <link rel="stylesheet" href="assets/css/lib/bootstrap.min.css">
   <!-- <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css"> -->
    <!--<link rel="stylesheet" href="themify-icons.css">
    <link rel="stylesheet" href="flag-icon.min.css">
    <link rel="stylesheet" href="cs-skin-elastic.css">
    <link rel="stylesheet" href="dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="buttons.bootstrap4.min.css">-->
     <div class="content-wrap">

    <link rel="stylesheet" href="style.css">
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                           <center> <li class="active">liste des candidats</li></center>
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
                                <strong class="card-title">Data Table</strong>
                                                      

          
            
        </div>                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>nom</th>
                                            <th>prenom</th>
                                            <th>mail</th>
                                            <th>numéro</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
<?PHP
foreach($listeclients as $row){
    ?>
    <tr>
<td><?PHP echo $row['cin']; ?></td>
    <td><?PHP echo $row['nom']; ?></td>
    <td><?PHP echo $row['prenom']; ?></td>
    <td><?PHP echo $row['mail']; ?></td>
    <td><?PHP echo $row['num']; ?></td>
    
    
    </tr>
    <?PHP
}
// SET YOUR PDF OPTIONS -- FOR ALL AVAILABLE OPTIONS, VISIT HERE:  http://phptopdf.com/documentation/
$pdf_options = array(
  "source_type" => 'html',
  "source" => $my_html,
  "action" => 'save',
  "save_directory" => '',
  "file_name" => 'pdf_invoice.pdf');

// CALL THE phpToPDF FUNCTION WITH THE OPTIONS SET ABOVE
phptopdf($pdf_options);

// OPTIONAL - PUT A LINK TO DOWNLOAD THE PDF YOU JUST CREATED
echo ("<a href='pdf_invoice.pdf'>Download Your PDF</a>");
?>
                                        </tr>
                                      

                                    </tbody>
                                </table>
                            </div>
        <div style="clear:both"></div>
                                      

                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div> 
                 <script src="assets/js/lib/jquery.nanoscroller.min.js"></script><!-- nano scroller -->

  <script src="assets/js/lib/jquery.min.js"></script><!-- jquery vendor -->
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script><!-- nano scroller -->    
    <script src="assets/js/lib/sidebar.js"></script><!-- sidebar -->
    <script src="assets/js/lib/bootstrap.min.js"></script><!-- bootstrap -->
    <script src="assets/js/lib/mmc-common.js"></script>
    <script src="assets/js/lib/mmc-chat.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
      






                                       
