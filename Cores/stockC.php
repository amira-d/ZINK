<?PHP
include "../config.php";
//include "stock.php";
class stockc {
function afficherstock ($stock){
		echo "idstock: ".$stock->getidstockstock()."<br>";
		echo "nom : ".$stock->getnom()."<br>";
		echo "type: ".$stock->gettype()."<br>";
	}

	function ajouterstock($stock){
		$sql="INSERT INTO stock (idstock,nom,type) values (:idstock,:nom,:type)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $idstock=$stock->getidstock();
        $nom=$stock->getnom();
        $type=$stock->gettype();
		$req->bindValue(':idstock',$idstock);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':type',$type);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherstocks(){
		//$sql="SElECT * From stock e inner join formationphp.stock a on e.id= a.id";
		$sql="SElECT * From stock order by idstock";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerstock($id){
		$sql="DELETE FROM stock where idstock= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierstock($stock,$idd){
		$sql="UPDATE stock SET idstock=:id,nom=:nom,type=:type WHERE idstock=:idd";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id=$stock->getidstock();
        $nom=$stock->getnom();
        $type=$stock->gettype();
		$datas = array(':id'=>$id, ':nom'=>$nom,':type'=>$type);
		//$req->bindValue(':id',$id);
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':type',$type);
				$req->bindValue(':idd',$id);

		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererstock($id){
		$sql="SELECT * from stock where idstock=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListestocks($type){
		$sql="SELECT * from stock where type=$type";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

}

?>