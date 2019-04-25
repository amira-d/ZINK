<!DOCmail html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="wcinth=device-wcinth, initial-scale=1">

    <title>Zink </title>
    
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
    <link href="assets/css/lib/scinebar.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/unix.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

        <link href="assets/css/style.css" rel="stylesheet">

</head>
<body>
<?php
include '../config.php';
$output = '';

if(isset($_POST["query"]))
{
	$search=$_POST['query'];
	$query = "
	SELECT * FROM clientf
	WHERE nom LIKE '%".$search."%'
	OR cin LIKE '%".$search."%' OR prenom LIKE '%".$search."%' OR mail LIKE '%".$search."%'  ";
}
else
{
	$query = "
	SELECT * FROM clientf ORDER BY cin ";
}

$db = config::getConnexion();
		$liste=$db->query($query);

	$output .= '

                               <div class="order-list-item">

<table class="table" id="dataTable" width="100%" cellspacing="0">
    <div class="col-sm-12 col-md-6">
                                    <thead>
                                        <tr>
                                            <th>cin</th>
                                            <th>nom</th>
                                            <th>prenom</th>
                                            <th>mail</th>
                                            <th>sexe</th>
                                            <th>supprimer</th>
                                            <th>modifier</th>
                                        </tr>
                                    </thead>


';
	while ($row =$liste->fetch())
	{
		$output .=  '<tbody>


  <tr>
  <td>'.$row['cin'].'</td>
  <td>'.$row['nom'].'</td>
  <td>'.$row['prenom'].'</td>
  <td>'.$row['mail'].'</td>
  <td>'.$row['sexe'].'</td>
  <td><form method="POST" action="supprimerclientf.php">
 <h2> <center><input type="submit"  value="Delete" class="btn btn-danger btn-xs"class ="fa fa-trash-o"></center></h2>
  <input type="hidden" value="'.$row['cin'].'" name="cin">
  </form>
  </td>
  <td><center><a href="modifierclientf.php?edit='.$row['cin'].'" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> 
  edit</a></center></td>
  </tr>
  <?PHP
}
?>
                         
                                        </tr>
                                      

		';
	}
	echo $output;

                               
                                         
?>
</body>
</html>