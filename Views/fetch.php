<?php
include '../config.php';
$output = '';

if(isset($_POST["query"]))
{
	$search=$_POST['query'];
	$query = "
	SELECT * FROM ingredient 
	WHERE id LIKE '%".$search."%'
	OR barcode LIKE '%".$search."%' 
	OR quantity LIKE '%".$search."%' 
	OR category LIKE '%".$search."%' 
	OR type LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM ingredient ORDER BY id";
}

$db = config::getConnexion();
		$liste=$db->query($query);

	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						 <tr>
                                            <th> id </th>
                                            <th> barcode </th>
                                            <th> quantity </th>
                                            <th> Catégorie </th>
                                            <th> type </th>
                                            <th> Option </th>
                                           
'foreach($listeingredients as $row){
    ?>
    <tr>

    <td><form method="POST" action="supprimeringredient.php">
    <button type="submit" name="supprimer" class="btn btn-danger btn-sm" value="supprimer">
        <i class="fa fa-ban"></i> delete</button>
    <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
    </form>
    </td>
    <td><a href="modifieringredient.php?edit=<?PHP echo $row['id']; ?>">
    Modifier</a></td>
    </tr>
    <?PHP
}'




                                            

                                        </tr>';
	while ($row =$liste->fetch())
	{
		$output .= 
		'<tr> <td>'.$row["id"].'</td>
                                              <td>'.$row["barcode"].'</td>
                                               <td>'.$row["quantity"].'</td>
                                               <td>'.$row["category"].'</td>
                                               <td>'.$row["type"].'</td>

                                               
	


                                              </tr>
		';
	}
	echo $output;

                               
                                           


?>