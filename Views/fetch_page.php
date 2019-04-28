<?php
include '../config.php';
$output = '';

if(isset($_POST["query"]))
{
	$search=$_POST['query'];
	$query = "
	SELECT * FROM a_produit
	WHERE titre LIKE '%".$search."%'
	OR id LIKE '%".$search."%' OR description LIKE '%".$search."%' OR type LIKE '%".$search."%'  ";
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
  <td style="width:100px;"><img src="images/'.$row["image"].'" alt="image" class="img-responsive"/></td>
  <td><form method="POST" action="supprimerAnnonce.php">
  <input type="submit" name="supprimer" value="supprimer">
  <input type="hidden" value="'.$row["titre"].'" name="titre">
  </form>
  </td>
  <td><a href="majAnnonce.php?titre='.$row["titre"].'">
  Update</a></td>
  </tr>



		';
	}
	echo $output;













 <?php
            //connect to database
$con = mysqli_connect('localhost','root','amira1999');
mysqli_select_db($con, 'projetweb');
$results_per_page = 2;

$sql='SELECT * FROM a_produit';

$result = mysqli_query($con, $sql);
$number_of_results = mysqli_num_rows($result);
// determine number of total pages available
$number_of_pages = ceil($number_of_results/$results_per_page);
// determine which page number visitor is currently on
if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}
// determine the sql LIMIT starting number for the results on the displaying page
$this_page_first_result = ($page-1)*$results_per_page;
// retrieve selected results from database and display them on page
$sql='SELECT * FROM a_produit LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
$result = mysqli_query($con, $sql);

// display the links to the pages
for ($page=1;$page<=$number_of_pages;$page++) {
  echo '<a href="annonces-produit.php?page=' . $page . '">' . $page . '</a> ';
}?>
