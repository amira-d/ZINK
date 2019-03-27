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
	function supprimerEmploye($cin){
		$sql="DELETE FROM employe where cin= :cin";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':cin',$cin);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierp($prod,$nom){
		$sql="UPDATE produit SET nom_P=:nom, type_P=:type,prix=:price,image=:img,Description=:description  where nom_P = :noms";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
        $Name=$prod->getnom();
        $Description=$prod->getDescription();
        $type=$prod->getType();
        $price=$prod->getPrice();
        $image=$prod->getImage();
		
		$datas = array(':nom'=>$Name, ':Description'=>$Description, ':type'=>$type,':price'=>$price,':img'=>$image);
		$req->bindValue(':nom',$Name);
		$req->bindValue(':Description',$Description);
		$req->bindValue(':type',$type);
		$req->bindValue(':price',$price);
		$req->bindValue(':img',$image);
				$req->bindValue(':noms',$nom);

		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
   function recupererP($nom)
    {
        $db=config::getConnexion();
        $stmt = $db->prepare("SELECT * FROM produit where nom_P = :nom");
        $stmt->bindValue(":nom",$nom, PDO::PARAM_STR);
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