<?PHP
include "../config.php";
class ProduitC {


	function ajouterProduit($prod){
		$sql="insert into produit(nom_P,Description,Type_P,Prix,image) values (:nom, :Description,:type,:price,:image)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom=$prod->getnom();
        $Description=$prod->getDescription();
        $type=$prod->getType();
        $price=$prod->getPrice();
        $image=$prod->getImage();
		$req->bindValue(':nom',$nom);
		$req->bindValue(':Description',$Description);
		$req->bindValue(':type',$type);
		$req->bindValue(':price',$price);
		$req->bindValue(':image',$image);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
  
	
		function filterprice($Max,$min){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From produit where Prix BETWEEN $min  AND $Max ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
	
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function filtername(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From produit ORDER by nom_P DESC ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
	
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
		function afficherProduit(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerp($nom){
		$sql="DELETE FROM produit where nom_P= :nom";
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
	function modifierp($prod,$nom){
		$sql="UPDATE produit SET nom_P=:nom,Description=:description,Type_P=:type,prix=:price,image=:img where nom_P = :noms";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
	
        $req=$db->prepare($sql);
		
        $Name=$prod->getnom();
        $Description=$prod->getDescription();
        $type=$prod->getType();
        $price=$prod->getPrice();
        $image=$prod->getImage();
		
		$datas = array(':nom'=>$Name, ':Description'=>$Description, ':type'=>$type,':price'=>$price,':img'=>$image);
		$req->bindValue(':nom',$Name);
		$req->bindValue(':description',$Description);
		$req->bindValue(':type',$type);
		$req->bindValue(':price',$price);
		$req->bindValue(':img',$image);
				$req->bindValue(':noms',$nom);

		
            $s=$req->execute();

        
		
	}
   function recupererP($nom)
    {
        $db=config::getConnexion();
        $stmt = $db->prepare("SELECT * FROM produit where nom_P =:nom ");
        $stmt->bindValue(':nom',$nom, PDO::PARAM_STR);
        try{
        $stmt->execute();
        $liste= $stmt->fetchAll();
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

}
?>