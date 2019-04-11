<?PHP
include 'ProduitC.php';
class ingprodC {


	function ajouterip($prod){
		$sql="insert into ing_p(nom_P,id) values (:prod,:ing)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom_P=$prod->getprod();
        $nom_ING=$prod->geting();
       
		$req->bindValue(':prod',$nom_P);
		$req->bindValue(':ing',$nom_ING);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function modifierip($prod,$nom,$id){
		$sql="UPDATE produit SET id= :id1  where nom_P = :noms and id= :id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
	
        $req=$db->prepare($sql);
		
        $Description=$prod->geting();
      
		
		$req->bindValue(':id',$id);
		$req->bindValue(':noms',$nom);
		$req->bindValue(':id1',$Description);
	

		
            $s=$req->execute();

        
		
	}
	function recupererip($nom)
	{
      
	$db = config::getConnexion();        
		$stmt = $db->prepare("SELECT id FROM ing_p where nom_P =:nom  ");

		 $stmt->bindValue(':nom',$nom, PDO::PARAM_STR);
        try{
        $stmt->execute();
        return $stmt;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }


	}
	function afficherips($nom)
	{

		$db = config::getConnexion();        
		$stmt = $db->prepare("SELECT id FROM ing_p where nom_P =:nom ");

		 $stmt->bindValue(':nom',$nom, PDO::PARAM_STR);
        try{
        $stmt->execute();
        return $stmt;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

	}
		function afficherip(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From ing_p";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerip($nom){
		$sql="DELETE FROM ing_p where nom_P= :nom ";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':nom',$nom);

		try{
           if ($req->execute())
	{echo "<script>alert(\"DONE\")</script>";}
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function supprimerunite($nom,$id)
	{
		$sql="DELETE FROM ing_p where nom_P= :nom and id=:id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':nom',$nom);
				$req->bindValue(':id',$id);


		try{
           if ($req->execute())
	{echo "<script>alert(\"DONE\")</script>";}
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}
	?>
	

