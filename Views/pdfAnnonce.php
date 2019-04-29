<?php require("phpToPDF.php"); 
 

include "../Cores/recruC.php";
$recru1C=new recruC();
$listecandi=$recru1C->afficherRecrutement();

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
    <?php  

foreach($listecandi as $row){
  $my_html='
    <tr>
<td>'.$row['image'].'</td>
    <td>'.$row['titre'].'</td>
    <td>'.$row['description'].'</td>
    <td>'.$row['service'].'</td>
    <td>'.$row['deadline'].'</td>
    
    
    </tr>';}
 

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
      






                                       
