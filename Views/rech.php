<?PHP
include "../entities/achat.php";
include "../core/AchatA.php"
		$listeachats=$db("select from achat order by  ref");
		if($isset($_GET['search'])&&!empty($_GET['search'])){
			$listeachats=$db->query('select from achat WHERE ref like "%'.$search.'%" ');
		}

 ?>