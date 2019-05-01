<?php 
include "../../Entities/candidature.php";
include "../../Cores/candiC.php";

$msg="";

if ( isset($_POST['submit1']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['email']) and isset($_POST['num'])   and isset($_POST['date_naissance'])   and isset($_POST['type']))
{
	if (empty($_POST['submit1']) and empty($_POST['nom']) and empty($_POST['prenom']) and empty($_POST['email']) and empty($_POST['num'])and empty($_POST['date_naissance']) and empty($_POST['cv']) and empty($_POST['lettre']) and empty($_POST['type']) and empty($_POST['photo'])  )
     {	
     	echo "<script>alert(\"Veuillez vérifier les champs ! Tous les champs doivent être remplis . \")</script>";
	header("Refresh: 2 ;url=candidat.php");
			
     }

     else
     {
	        /*$target="images/";
			$image =$_FILES['photo']['name'];
					if (move_uploaded_file($_FILES['photo']['tmp_name'],$target.$image ))
						{
							$msg= "IMAGE LOADED SUCCESSFULLY" ; 
						}
					else
					{
						$msg = "Problem with uploading";
					}
			$cv =$_FILES['cv']['name'];
					if (move_uploaded_file($_FILES['cv']['tmp_name'],$target.$cv ))
						{
							$msg= "cv LOADED SUCCESSFULLY" ; 
						}
					else
					{
						$msg = "Problem with uploading";
					}
			$lettre =$_FILES['letter']['name'];
					if (move_uploaded_file($_FILES['letter']['tmp_name'],$target.$lettre ))
						{
							$msg= "lettre LOADED SUCCESSFULLY" ; 
						}
					else
					{
						$msg = "Problem with uploading";
					}*/
			$r=new Candidature($_POST['nom'],$_POST['prenom'],$_POST['date_naissance'],$_POST['email'],$_POST['num'],$_POST['cv'],$_POST['letter'],$_POST['type'],$_POST['photo'],2);
			$cC=new candiC();
			echo "<script>alert(\"Votre annonce est en cours de traitement \")</script>";
			$cC->ajouterCandi($r);
	        header("Refresh: 1 ;url=jobs.php");
			echo " <script>if (confirm(\"candidature enregistrée avec succès ! \")) { window.location.replace('jobs.php')  ;  } </script>";

		    
	 }
}
else
{
	echo "<script>alert(\"Veuillez vérifier les champs !\")</script>";
    header("Refresh: 1.25 ;url=candidat.php");
}



?>