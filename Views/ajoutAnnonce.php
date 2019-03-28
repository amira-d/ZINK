<?PHP
include "../Entities/annonce.php";
include "../Cores/annonceC.php";

$msg="";

if ( isset($_POST['submit']) and isset($_POST['titre']) and isset($_POST['type']) and isset($_POST['description']) )
{
	if (empty($_POST['submit']) and empty($_POST['titre']) and empty($_POST['description']) and empty($_POST['type']))
     {	
     	echo "<script>alert(\"Veuillez vérifier les champs ! Tous les champs doivent être remplis . \")</script>";
	header("Refresh: 2 ;url=annonces-produit.html");
			
     }

     else
     {
	        $target= "../zink" .basename($_FILES['image']['name']);
			$image = $_FILES['image']['name'];

					if (move_uploaded_file($_FILES['image']['tmp_name'], $target ))
						{
							$msg= "IMAGE LOADED SUCCESSFULLY" ; 
						}
					else
					{
						$msg = "Problem with uploading";
					}
			$ann=new Annonce($_POST['titre'],$_POST['type'],$_POST['description'],$image);
			$annC=new AnnonceC();
			echo "<script>alert(\"Votre annonce est en cours de traitement \")</script>";
			$annC->ajouterAnnonce($ann);
	        header("Refresh: 1 ;url=annonces-produit.html");
			echo " <script>if (confirm(\"Annonce enregistrée avec succès ! Voulez vous voir un aperçu ?\")) { window.location.replace('index2.html')  ;  }  else { window.location.replace('index-2.html')  ; } </script>";

		    
	 }
}
else
{
	echo "<script>alert(\"Veuillez vérifier les champs !\")</script>";
    header("Refresh: 1.25 ;url=annonces-produit.html");
}



?>