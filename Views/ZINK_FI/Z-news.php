<?PHP
include "../core/clientC.php";
$client1C=new clientC();
$listeclient=$client1C->afficherclients();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>Cin</td>
<td>nom</td>
<td>prenom</td>
<td>mail</td>
<td>sexe</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeclient as $row){
  ?>
  <tr>
  <td><?PHP echo $row['cin']; ?></td>
  <td><?PHP echo $row['nom']; ?></td>
  <td><?PHP echo $row['prenom']; ?></td>
  <td><?PHP echo $row['mail']; ?></td>
  <td><?PHP echo $row['sexe']; ?></td>
  <td><form method="POST" action="supprimerclient.php">
  <input type="submit" name="supprimer" value="supprimer">
  <input type="hidden" value="<?PHP echo $row['cin']; ?>" name="cin">
  </form>
  </td>
  <td><a href="modifierclient.php?cin=<?PHP echo $row['cin']; ?>">
  Modifier</a></td>
  </tr>
  <?PHP
}
?>
</table>
