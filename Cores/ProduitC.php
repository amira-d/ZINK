<?PHP
include "../config.php";
class vol {


	function ajoutervol($vol){
		$sql="insert into vol(ref,ca,dest,date,depart,harrive) values (:ref,:ca,:dest,:date,:depart,:harrive)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $ref=$vol->getref();
        $ca=$vol->getca();
        $dest=$vol->getdest();
        $date=$vol->getdate()();
        $depart=$vol->getdepat();
        $harrive=$vol->getharrive();
		$req->bindValue(':ref',$ref);
		$req->bindValue(':ca',$ca);
		$req->bindValue(':date',$date);
		$req->bindValue(':dest',$dest);
		$req->bindValue(':depart',$depart);
		$req->bindValue(':harrive',$harrive);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
  
	
		
}
?>