<meta csharset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>listes d'achat</title>
    
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
   
                                            <?PHP
include "../Core/AchatA.php";
$AchatA=new achatA();
$listeachat=$AchatA->afficherachats();

//var_dump($listeingredients->fetchAll());
?>
<!--<table border="1">
<tr>
<td>id</td>
<td>barcode</td>
<td>quantity</td>
<td>category</td>
<td>type</td>
<td>supprimer</td>
<td>modifier</td>
</tr>-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="assets/css/lib/bootstrap.min.css">
   <!-- <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css"> -->
    <!--<link rel="stylesheet" href="themify-icons.css">
    <link rel="stylesheet" href="flag-icon.min.css">
    <link rel="stylesheet" href="cs-skin-elastic.css">
    <link rel="stylesheet" href="dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="buttons.bootstrap4.min.css">-->


                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Reference</th>
                                            <th>Prix</th>
                                            <th>Nombre des produits</th>
                                            <th>supprimer</th>
                                            <th>modifier</th>
                                            <th>vider panier</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
<?PHP
foreach($listeachat as $row){
  ?>
  <tr>
  <td><?PHP echo $row['ref']; ?></td>
  <td><?PHP echo $row['prix']; ?></td>
  <td><?PHP echo $row['nbr']; ?></td>
  <form method="GET" action="ajoutachat.php">
  <td><form method="POST" action="supprimerachat.php">
  <input type="submit" name="supprimer" value="supprimer">
  <input type="hidden" value="<?PHP echo $row['ref']; ?>" name="ref">
  </form>
  </td>
  <td><a href="modifierachat.php?ref=<?PHP echo $row['ref']; ?>">
  Modifier</a></td>
  </form>
  </td>
  <td><a href="pdf.php ?>">
  facture</a></td>
  </form>
  <td><form method="POST" action="rachat.php">
  <input type="submit" name="vider" value="vider">

  <?PHP
}
?>
</tr>
                                      

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div> 
    </table>
</body>

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

</HTMl>
