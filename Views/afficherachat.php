<HTML>
<head>
</head>
<body>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Panier Zink</title>
    
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
<form method="get" action="rech.php">
  RECHERCHE: <input type="text" value="" placeholder="rechercher une panier">
</form>




<?PHP
include "../core/AchatA.php";
$achat1C=new  AchatA();
$listeachat=$achat1C->afficherachats();
//var_dump($listeEmployes->fetchAll());
?>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">



    <link rel="stylesheet" href="assets/css/lib/bootstrap.min.css">



    <link rel="stylesheet" href="style.css">

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Panier</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>refrence</th>
                                            <th>prix</th>
                                            <th>nombres de porduits</th>
                                            <th>supprimer</th>
                                            <th>modifier</th>
                                            <th>vider</th>

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
  <td><form method="POST" action="supprimerachat.php">
  <input type="submit" name="supprimer" value="supprimer">
  <input type="hidden" value="<?PHP echo $row['ref']; ?>" name="ref">
  </form>
  </td>
  <td><a href="modifierachat.php?ref=<?PHP echo $row['ref']; ?>">
  Modifier</a></td>
  </form>
  </td>
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
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script><!-- nano scroller -->
    <script src="assets/js/lib/sidebar.js"></script><!-- sidebar -->
    <script src="assets/js/lib/bootstrap.min.js"></script><!-- bootstrap -->
    <script src="assets/js/lib/mmc-common.js"></script>
    <script src="assets/js/lib/mmc-chat.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="assets/js/lib/jquery-ui/jquery-ui.min.js"></script>
    <script src="assets/js/lib/moment/moment.js"></script>
    <script src="assets/js/lib/calendar/fullcalendar.min.js"></script>
    <script src="assets/js/lib/calendar/fullcalendar-init.js"></script>  
</table>
</body>
</HTMl>
