
<?PHP
include "../entities/achat.php";

include "../core/AchatA.php";
        
		$sql="TRUNCATE TABLE achat ";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
        	header('Location: afficherachat1.php');
          

	

?>