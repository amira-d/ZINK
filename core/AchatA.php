<?PHP
include "../config.php";
class AchatA {
function afficherachat ($achat){
		echo "ref: ".$achat->getref()."<br>";
		echo "prix: ".$achat->getprix()."<br>";
		echo "nbr: ".$achat->getnbr()."<br>";
	}
	
	function ajouterachat($achat){
		$sql = "insert INTO achat (ref,prix,nbr) VALUES (:ref,:prix,:nbr)";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':ref',$achat->getref());
		$req->bindValue(':prix',$achat->getprix());
		$req->bindValue(':nbr',$achat->getnbr());
		try{
		$req->execute();
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
		
	}
	function afficherachat1(){
		$sql="SElECT * From panier e inner join achat a on e.reft= a.ref";
		
		$db = config3::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficherachats(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From achat order by ref";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
	        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerachat($ref){
		$sql="DELETE FROM achat where ref= :ref";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':ref',$ref);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        } }
        
       
        /*function rachat(){
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
	} */ 

	function modifierachat($achat,$ref){
		$sql="UPDATE achat SET ref=:ref, prix=:prix, nbr=:nbr WHERE ref=:ref";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$ref=$achat->getref();
        $prix=$achat->getprix();
        $nbr=$achat->getnbr();
		$datas = array(':ref'=>$ref, ':prix'=>$prix,':nbr'=>$nbr);
		$req->bindValue(':ref',$ref);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':nbr',$nbr);
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function fetch_data()
    {
    $output='';
    $conn=mysqli_connect("localhost","root","","projetb");
    $sql="SELECT * FROM achat ORDER BY ref";
    $result=mysqli_query($conn,$sql);
    while ($row=mysqli_fetch_array($result)) {
        $output .='<tr>
                            <td>'.$row["ref"].'</td>
                            <td>'.$row["prix"].'</td>
                            <td>'.$row["nbr"].'</td>
                                            </tr>
                    ';
    }
    return $output;
}
	function recupererachat($ref){
		$sql="SELECT * from achat where ref=$ref";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeclient($ref){
		$sql="SELECT * from achat where ref=$ref";
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