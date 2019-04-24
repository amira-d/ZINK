<?PHP
include "../config.php";
class clientfC {
function afficherclientf ($clientf){
		echo "cin: ".$clientf->getCin()."<br>";
		echo "nom: ".$clientf->getnom()."<br>";
		echo "prenom: ".$clientf->getprenom()."<br>";
		echo "mail: ".$clientf->getmail()."<br>";
		echo "sexe: ".$clientf->getsexe()."<br>";		
	}
	
	function ajouterclientf($clientf){
		$sql = "insert INTO clientf (cin,nom,prenom,mail,sexe) VALUES (:cin,:nom,:prenom,:mail, :sexe)";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':cin',$clientf->getCin());
		$req->bindValue(':nom',$clientf->getnom());
		$req->bindValue(':prenom',$clientf->getprenom());
		$req->bindValue(':mail',$clientf->getmail());
		$req->bindValue(':sexe',$clientf->getsexe());
		try{
		$req->execute();
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
		
	}
	
	function afficherclientfs(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From clientf order by cin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerclientf($cin){
		$sql="DELETE FROM clientf where cin= :cin";
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
	function modifierclientf($clientf,$cin){
		$sql="UPDATE clientf SET cin=:cin, nom=:nom, prenom=:prenom,mail=:mail, sexe=:sexe WHERE cin=:cin";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$cin=$clientf->getCin();
        $nom=$clientf->getnom();
        $prenom=$clientf->getprenom();
        $mail=$clientf->getmail();
        $sexe=$clientf->getsexe();
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
	function recupererclientf($cin){
		$sql="SELECT * from clientf where cin=$cin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeclientf($prenom){
		$sql="SELECT * from clientf where prenom=$prenom";
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