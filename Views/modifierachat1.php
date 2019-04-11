<HTML>
<head>
  <!DOCTYPE html>
<html lang="en-FR">

<head>
    <meta charset="utf-8">
<title> PANIER</title>
<link rel="stylesheet"  href="ZINK_FI/css/layout.css">
<link rel="stylesheet" href="ZINK_FI/css/media-queries.css">
<link rel="stylesheet" href="ZINK_FI/css/default.css">

    <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/lib/weather-icons.css" rel="stylesheet" />
    <link href="assets/css/lib/mmc-chat.css" rel="stylesheet" />
    <link href="assets/css/lib/sidebar.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/unix.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

</head>
<body>
<?PHP
include "../entities/achat.php";
include "../core/AchatA.php";
if (isset($_GET['ref'])){
  $AchatA=new AchatA();
    $result=$AchatA->recupererachat($_GET['ref']);
  foreach($result as $row){
    $ref=$row['ref'];
    $prix=$row['prix'];
    $nbr=$row['nbr'];
   
?>
<form method="POST">
<table>
<caption>Modifier Achats</caption>
<tr>
<td>Reference</td>
<td><input type="varchar" name="ref" value="<?PHP echo $ref ?>"></td>
</tr>
<tr>
<td>Prix</td>
<td><input type="number" name="prix" value="<?PHP echo $prix ?>"></td>
</tr>
<tr>
<td>Nombres d'articles</td>
<td><input type="number" name="nbr" value="<?PHP echo $nbr ?>"></td>
</tr>
<tr>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="ref_ini" value="<?PHP echo $_GET['ref'];?>"></td>
</tr>
</table>
</form>
<?PHP
  }
}
if (isset($_POST['modifier'])){
  $achat=new achat($_POST['ref'],$_POST['prix'],$_POST['nbr']);
  $AchatA->modifierachat($achat,$_POST['ref_ini']);
  echo $_POST['ref_ini'];
  header('Location: afficherachat1.php');

}
?>
</body>
</HTMl>