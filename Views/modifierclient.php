<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/client.php";
include "../core/clientC.php";
if (isset($_GET['cin'])){
  $clientC=new clientC();
    $result=$clientC->recupererclient($_GET['cin']);
  foreach($result as $row){
    $cin=$row['cin'];
    $nom=$row['nom'];
    $prenom=$row['prenom'];
    $mail=$row['mail'];
     $sexe=$row['sexe'];
?>
<form method="POST">
<table>
<caption>Modifier client</caption>
<tr>
<td>CIN</td>
<td><input type="number" name="cin" value="<?PHP echo $cin ?>"></td>
</tr>
<tr>
<td>nom</td>
<td><input type="varchar" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>prenom</td>
<td><input type="varchar" name="prenom" value="<?PHP echo $prenom ?>"></td>
</tr>
<tr>
<td>mail</td>
<td><input type="texte" name="mail" value="<?PHP echo $mail ?>"></td>
</tr>
<tr>
<td>sexe</td>
<td><input type="varchar" name="sexe" value="<?PHP echo $sexe?>"></td>
</tr>
<tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="cin_ini" value="<?PHP echo $_GET['cin'];?>"></td>
</tr>
</table>
</form>
<?PHP
  }
}
if (isset($_POST['modifier'])){
  $client=new client($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['mail'],$_POST['sexe']);
  $clientC->modifierclient($client,$_POST['cin_ini']);
  echo $_POST['cin_ini'];
  header('Location: afficherclient.php');
}
?>
</body>
</HTMl>