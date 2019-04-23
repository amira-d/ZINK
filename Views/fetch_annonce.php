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

	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						 <tr>
                                            <th style="font-size:30px; font-family:stencil;color:#ffc515"> Nom du produit </th>
                                            <th style="position:relative; font-family:stencil;right:300px;font-size:30px; color:#ffc515"> Ingrédient </th>
                                            

                                            

                                        </tr>';
	while ($row =$liste->fetch())
	{
		$output .= 
		'<tr> 
                                              <td>'.$row["titre"].'</td>
                                               <td style="position:relative; right:800px;">'.$row["id"].'</td>
                                              

                                              </tr>
		';
	}
	echo $output;

                               
                                           


?>