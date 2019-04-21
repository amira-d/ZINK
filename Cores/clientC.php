<?PHP
include "../config.php";
class clientC {
function afficherclient ($client){
		echo "cin: ".$client->getCin()."<br>";
		echo "nom: ".$client->getnom()."<br>";
		echo "prenom: ".$client->getprenom()."<br>";
		echo "mail: ".$client->getmail()."<br>";
		echo "sexe: ".$client->getsexe()."<br>";		
	}
	
	function ajouterclient($client){
		$sql = "insert INTO client (cin,nom,prenom,mail,sexe) VALUES (:cin,:nom,:prenom,:mail, :sexe)";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':cin',$client->getCin());
		$req->bindValue(':nom',$client->getnom());
		$req->bindValue(':prenom',$client->getprenom());
		$req->bindValue(':mail',$client->getmail());
		$req->bindValue(':sexe',$client->getsexe());
		try{
		$req->execute();
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
		
	}
	
	function afficherclients(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From client order by cin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerclient($cin){
		$sql="DELETE FROM client where cin= :cin";
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
	function modifierclient($client,$cin){
		$sql="UPDATE client SET cin=:cin, nom=:nom, prenom=:prenom,mail=:mail, sexe=:sexe WHERE cin=:cin";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$cin=$client->getCin();
        $nom=$client->getnom();
        $prenom=$client->getprenom();
        $mail=$client->getmail();
        $sexe=$client->getsexe();
		$datas = array(':cin'=>$cin, ':nom'=>$nom,':prenom'=>$prenom,':mail'=>$mail,':sexe'=>$sexe);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':sexe',$sexe);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererclient($cin){
		$sql="SELECT * from client where cin=$cin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeclient($cin){
		$sql="SELECT * from client where cin=$cin";
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