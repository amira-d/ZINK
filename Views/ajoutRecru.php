<?PHP
<<<<<<< HEAD
include "../Entities/recrutement.php";
include "../Cores/recruC.php";

$msg="";

if ( isset($_POST['submit']) and isset($_POST['titre']) and isset($_POST['type']) and isset($_POST['description']) and isset($_POST['deadline']) )
{
	if (empty($_POST['submit']) and empty($_POST['titre']) and empty($_POST['description']) and empty($_POST['type']) and empty($_POST['deadline']))
     {	
     	echo "<script>alert(\"Veuillez vérifier les champs ! Tous les champs doivent être remplis . \")</script>";
	header("Refresh: 2 ;url=carriere.php");
=======
include "../Entities/annonce.php";
include "../Cores/annonceC.php";

$msg="";

if ( isset($_POST['submit']) and isset($_POST['titre']) and isset($_POST['type']) and isset($_POST['description']) )
{
	if (empty($_POST['submit']) and empty($_POST['titre']) and empty($_POST['description']) and empty($_POST['type']))
     {	
     	echo "<script>alert(\"Veuillez vérifier les champs ! Tous les champs doivent être remplis . \")</script>";
	header("Refresh: 2 ;url=annonces-produit.php");
>>>>>>> parent of 2936103... Merge branch 'donia' of https://github.com/projet-web-elite/ZINK into donia
			
     }

     else
     {
<<<<<<< HEAD
	        $target="images/";
			$image =$_FILES['image']['name'];
					if (move_uploaded_file($_FILES['image']['tmp_name'],$target.$image ))
=======
	        $target="../zink".basename($_FILES['image']['name']);
			$image =$_FILES['image']['name'];
					if (move_uploaded_file($_FILES['image']['tmp_name'],$target ))
>>>>>>> parent of 2936103... Merge branch 'donia' of https://github.com/projet-web-elite/ZINK into donia
						{
							$msg= "IMAGE LOADED SUCCESSFULLY" ; 
						}
					else
					{
						$msg = "Problem with uploading";
					}
<<<<<<< HEAD
			$r=new Recrutement($_POST['titre'],$_POST['description'],$_POST['type'],$_POST['deadline'],$image);
			$rC=new recruC();
			echo "<script>alert(\"Votre annonce est en cours de traitement \")</script>";
			$rC->ajouterRecrutement($r);
	        header("Refresh: 1 ;url=carriere.php");
			echo " <script>if (confirm(\"Annonce enregistrée avec succès ! Voulez vous voir un aperçu ?\")) { window.location.replace('ZINK_FI/jobs.php')  ;  }  else { window.location.replace('carriere.php')  ; } </script>";
=======
			$ann=new Annonce($_POST['titre'],$_POST['type'],$_POST['description'],$image);
			$annC=new AnnonceC();
			echo "<script>alert(\"Votre annonce est en cours de traitement \")</script>";
			$annC->ajouterAnnonce($ann);
	        header("Refresh: 1 ;url=annonces-produit.php");
			echo " <script>if (confirm(\"Annonce enregistrée avec succès ! Voulez vous voir un aperçu ?\")) { window.location.replace('ZINK_FI/Z-news.php')  ;  }  else { window.location.replace('annonces-produit.php')  ; } </script>";
>>>>>>> parent of 2936103... Merge branch 'donia' of https://github.com/projet-web-elite/ZINK into donia

		    
	 }
}
else
{
	echo "<script>alert(\"Veuillez vérifier les champs !\")</script>";
<<<<<<< HEAD
    header("Refresh: 1.25 ;url=carriere.php");
=======
    header("Refresh: 1.25 ;url=annonces-produit.php");
>>>>>>> parent of 2936103... Merge branch 'donia' of https://github.com/projet-web-elite/ZINK into donia
}



?>