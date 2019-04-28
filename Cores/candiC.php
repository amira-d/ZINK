<?PHP
include "C:/wamp64/www/ZINK/zink/config.php";
class candiC {


	function ajouterCandi($ann){
		$sql="insert into candidature(nom,prenom,date_naissance,email,num,cv,lettre,service,photo) values (:nom,:prenom,:date_naissance,:email,:num,:cv,:lettre,:service,:photo)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom=$ann->getNom();
        $prenom=$ann->getPrenom();
        $date_naissance=$ann->getDateN();
        $email=$ann->getEmail();
        $num=$ann->getNum();
        $cv=$ann->getCv();
        $lettre=$ann->getLettre();
        $service=$ann->getService();
        $photo=$ann->getPhoto();

		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':date_naissance',$date_naissance);
		$req->bindValue(':email',$email);
		$req->bindValue(':num',$num);
		$req->bindValue(':cv',$cv);
		$req->bindValue(':lettre',$lettre);
		$req->bindValue(':service',$service);
		$req->bindValue(':photo',$photo);

            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherCandi(){
		$sql="SElECT * From candidature Order by  date_envoi DESC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerCandi($id){
		$sql="DELETE FROM candidature where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierCandidature($ann,$id){
		$sql="UPDATE candidature SET nom=:nom ,prenom=:prenom , date_naissance=:date_naissance , email=:email , num=:num , cv=:cv , lettre=:lettre , service=:service , photo=:photo WHERE id='".$id."'";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
       // $id=$ann->getId();
        $titre=$ann->getTitre();
        $description=$ann->getDesc();
        $type=$ann->getType();
        $image=$ann->getImage();

        echo"<script>alert('!!!!!!!!!'')</script>";
		
		$datas = array(':titre'=>$titre, ':description'=>$description, ':type'=>$type,':image'=>$image);
		//$req->bindValue(':id',$id);
		$req->bindValue(':titre',$titre);
	    $req->bindValue(':type',$type);
		$req->bindValue(':description',$description);
		$req->bindValue(':image',$image);
		
            $s=$req->execute();
			
          // header('Location: annonces-produit.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
  
        }
		
	}
	function recupererAnnonce($titre){
		$sql="SELECT * from candidature where id='$id'";
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
		