<?PHP
include "C:/wamp64/www/ZINK/zink/config.php";
class AnnonceC {


	function ajouterRecrutement($ann){
		$sql="insert into a_recrutement(titre,description,service,deadline,image) values (:titre,:description,:service,:deadline,:image)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $titre=$ann->getTitre();
        $description=$ann->getDesc();
        $service=$ann->getService();
        $deadline=$ann->getDeadline();
        $image=$ann->getImage();
		$req->bindValue(':titre',$titre);
		$req->bindValue(':description',$description);
		$req->bindValue(':service',$service);
		$req->bindValue(':deadline',$deadline);
		$req->bindValue(':image',$image);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherRecrutement(){
		$sql="SElECT * From a_recrutement Order by id Desc";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerRecrutement($id){
		$sql="DELETE FROM a_recrutement where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierRecrutement($ann,$titre){
		$sql="UPDATE a_recrutement SET titre=:titre , description=:description , image=:image , service=:service , deadline=:deadline WHERE titre='".$titre."'";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
       // $id=$ann->getId();
        $titre=$ann->getTitre();
        $description=$ann->getDesc();
        $image=$ann->getImage();
        $service=$ann->getService();
        $deadline=$ann->getDeadline();

        echo"<script>alert('!!!!!!!!!'')</script>";
		
		$datas = array(':titre'=>$titre, ':description'=>$description, ':type'=>$type,':image'=>$image);
		//$req->bindValue(':id',$id);
		$req->bindValue(':titre',$titre);
	    $req->bindValue(':service',$service);
		$req->bindValue(':deadline',$deadline);
		$req->bindValue(':description',$description);
		$req->bindValue(':image',$image);
		
            $s=$req->execute();
			
          // header('Location: annonces-produit.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererRecrutement($titre){
		$sql="SELECT * from a_recrutement where titre=:titre";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	


		function recherchetitre($titre){
		//$sql=`SElECT * From a_produit where titre="'.$titre'"` ;
		$sql ="SELECT * FROM a_recrutement WHERE titre LIKE '%:titre%' ORDER BY id";
		//$sql="SElECT * From a_produit where titre like "'&$titre&'" ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
	
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
		}

		function triAlph(){
			$sql="SElECT * From a_recrutement ORDER by titre DESC ";
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