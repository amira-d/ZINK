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
    <link href="assets/css/lib/mmc-chat.css" rel="stylesheet" />
    <link href="assets/css/lib/sidebar.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/unix.css" rel="stylesheet">
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
	SELECT * FROM a_produit
	WHERE titre LIKE '%".$search."%'
	OR id LIKE '%".$search."%' 
	
	";
}
else
{
	$query = "
	SELECT * FROM a_produit ORDER BY id ";
}

$db = config::getConnexion();
		$liste=$db->query($query);

	$output .= '<div class="order-list-item">

<table class="table" id="dataTable" width="100%" cellspacing="0">
    <div class="col-sm-12 col-md-6">

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


';
	while ($row =$liste->fetch())
	{
		$output .=  '<tbody>
                                   

  <tr>
  <td>'.$row["id"].'</td>
  <td>'.$row["titre"].'</td>
  <td>'.$row["type"].'</td>
  <td>'.$row["description"].'</td>
  <td style=width: 200px;"><img src="images/'.$row["image"].'" alt="image" class="img-responsive"/></td>
  <td><form method="POST" action="supprimerAnnonce.php">
  <input type="submit" name="supprimer" value="supprimer">
  <input type="hidden" value="'.$row["id"].'" name="id">
  </form>
  </td>
  <td><a href="majAnnonce.php?titre='.$row["titre"].'">
  Update</a></td>
  </tr>

</tbody>
</table>
</div>

		';
	}
	echo $output;

                               
                                         
?>
</body>
</html>