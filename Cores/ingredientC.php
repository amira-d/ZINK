<?PHP
include "../config.php";
//include "ingredient.php";
class ingredientc {
function afficheringredient ($ingredient){
		echo "id: ".$ingredient->getid()."<br>";
		echo "barcode: ".$ingredient->getbarcode()."<br>";
		echo "quantity: ".$ingredient->getquantity()."<br>";
		echo "category : ".$ingredient->getcategory()."<br>";
		echo "type: ".$ingredient->gettype()."<br>";
	}

	function ajouteringredient($ingredient){
		$sql="INSERT INTO ingredient (id,barcode,quantity,category,type) values (:id, :barcode,:quantity,:acategory,:type)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id=$ingredient->getid();
        $barcode=$ingredient->getbarcode();
        $quantity=$ingredient->getquantity();
        $category=$ingredient->getcategory();
        $type=$ingredient->gettype();
		$req->bindValue(':id',$id);
		$req->bindValue(':barcode',$barcode);
		$req->bindValue(':quantity',$quantity);
		$req->bindValue(':category',$category);
		$req->bindValue(':type',$type);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficheringredients(){
		//$sql="SElECT * From ingredient e inner join formationphp.ingredient a on e.id= a.id";
		$sql="SElECT * From ingredient order by id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimeringredient($id){
		$sql="DELETE FROM ingredient where id= :id";
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
	function modifieringredient($ingredient,$idd){
		$sql="UPDATE ingredient SET id=:id, barcode=:barcode,quantity=:quantity,category=:category,type=:type WHERE id=:idd";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id=$ingredient->getid();
        $barcode=$ingredient->getbarcode();
        $quantity=$ingredient->getquantity();
        $category=$ingredient->getcategory();
        $type=$ingredient->gettype();
		$datas = array(':id'=>$id, ':barcode'=>$barcode,':quantity'=>$quantity,':category'=>$category,':type'=>$type);
		//$req->bindValue(':id',$id);
		$req->bindValue(':id',$id);
		$req->bindValue(':barcode',$barcode);
		$req->bindValue(':quantity',$quantity);
		$req->bindValue(':category',$category);
		$req->bindValue(':type',$type);
				$req->bindValue(':idd',$type);

		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupereringredient($id){
		$sql="SELECT * from ingredient where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeingredients($type){
		$sql="SELECT * from ingredient where type=$type";
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