<?php 
include "../Entities/candidature.php";
include "../Cores/candiC.php";

$msg="";

if ( isset($_POST['submit']) and isset($_POST['titre']) and isset($_POST['type']) and isset($_POST['description']) and isset($_POST['deadline']) )
{
	if (empty($_POST['submit']) and empty($_POST['titre']) and empty($_POST['description']) and empty($_POST['type']) and empty($_POST['deadline']))
     {	
     	echo "<script>alert(\"Veuillez vérifier les champs ! Tous les champs doivent être remplis . \")</script>";
	header("Refresh: 2 ;url=carriere.php");
			
     }

     else
     {
	        $target="images/";
			$image =$_FILES['image']['name'];
					if (move_uploaded_file($_FILES['image']['tmp_name'],$target.$image ))
						{
							$msg= "IMAGE LOADED SUCCESSFULLY" ; 
						}
					else
					{
						$msg = "Problem with uploading";
					}
			$r=new Recrutement($_POST['titre'],$_POST['description'],$_POST['type'],$_POST['deadline'],$image);
			$rC=new recruC();
			echo "<script>alert(\"Votre annonce est en cours de traitement \")</script>";
			$rC->ajouterRecrutement($r);
	        header("Refresh: 1 ;url=carriere.php");
			echo " <script>if (confirm(\"Annonce enregistrée avec succès ! Voulez vous voir un aperçu ?\")) { window.location.replace('ZINK_FI/jobs.php')  ;  }  else { window.location.replace('carriere.php')  ; } </script>";

		    
	 }
}
else
{
	echo "<script>alert(\"Veuillez vérifier les champs !\")</script>";
    header("Refresh: 1.25 ;url=carriere.php");
}



?>