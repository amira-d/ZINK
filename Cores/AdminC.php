<?PHP
include "../config.php";
class AdminC {

	
	function ajouterAdmin($admin){
		$sql="insert into admin (userName,Email,Password) values (:userName,:Email,:PWD)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $username=$admin->getuserName();
        $email=$admin->getEmail();
        $pwd=$admin->getPWD();
        
		$req->bindValue(':userName',$username);
		$req->bindValue(':Email',$email);
		$req->bindValue(':PWD',$pwd);
		
		
		
            if($req->execute())
            {
            	return true;
            }
            else
            {
            	return false;
            }
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	
	function recupererAdmin($user,$pwd)
	{		

		$sql="select * from admin where Email='".$user."' and Password='".$pwd."'";
		$db = config::getConnexion();
		try
		{
		$liste=$db->query($sql);
		
         if ($liste->rowCount() > 0 )
         {
         	return true ;
         }
         else {
         	return false;
         }       

         }
       


        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }


	}
	
	
}

?>