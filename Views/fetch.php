<?php
include '../config.php';
$output = '';

if(isset($_POST["query"]))
{
	$search=$_POST['query'];
	$query = "
	SELECT * FROM client 
	WHERE cin LIKE '%".$search."%'
	OR nom LIKE '%".$search."%' 
	OR prenom LIKE '%".$search."%' 
	OR mail LIKE '%".$search."%' 
	OR sexe LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM client ORDER BY cin";
}

$db = config::getConnexion();
		$liste=$db->query($query);

	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						 <tr>
                                            <th> cin </th>
                                            <th> nom </th>
                                            <th> prenom </th>
                                            <th> mail </th>
                                            <th> sexe </th>
                                          

                                            

                                        </tr>';
	while ($row =$liste->fetch())
	{
		$output .= 
		'<tr> <td>'.$row["cin"].'</td>
                                              <td>'.$row["nom"].'</td>
                                               <td>'.$row["prenom"].'</td>
                                               <td>'.$row["mail"].'</td>
                                               <td>'.$row["sexe"].'</td>

                                              </tr>
		';
	}
	echo $output;

                               
                                           


?>