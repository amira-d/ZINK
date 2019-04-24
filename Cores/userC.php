<?PHP
include "../config.php";
class userC {

    
    function ajouteruser($user){
        $sql="insert into user (userName,Email,Password) values (:username, :email,:pwd)";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
        
        $username=$user->getuserName();
        $email=$user->getEmail();
        $pwd=$user->getPWD();
        
        $req->bindValue(':username',$username);
        $req->bindValue(':email',$email);
        $req->bindValue(':pwd',$pwd);
        
        
        
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        
    }
    
    
    function recupereruser($user,$pwd)
    {       

        $sql="select * from user where Email='".$user."' and Password='".$pwd."'";
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