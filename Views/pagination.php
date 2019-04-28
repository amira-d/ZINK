 <?php  
 //pagination.php  
 $connect = mysqli_connect("localhost", "root", "amira1999", "projetweb");  
 $record_per_page = 2;  
 $page = '';  
 $output = '';  
 if(isset($_POST["page"]))  
 {  
      $page = $_POST["page"];  
 }  
 else  
 {  
      $page = 1;  
 }  
 $start_from = ($page - 1)*$record_per_page;  
 $query = "SELECT * FROM a_produit ORDER BY id DESC LIMIT $start_from, $record_per_page";  
 $result = mysqli_query($connect, $query);  
$output .= '<div class="order-list-item">

<table class="table" id="dataTable" width="100%" cellspacing="0">
    <div class="col-sm-12 col-md-6">

<thead>
<tr>
<th>ID</th>
<th>Titre</th>
<th>Type</th>
<th>Description</th>
<th>Image</th>
<th>Supprimer</th>
<th>Modifier</th>
</tr>

 </thead>


'; 
 while($row = mysqli_fetch_array($result))  
 {  
      $output .=  '<tbody>
                                   

  <tr>
  <td>'.$row["id"].'</td>
  <td>'.$row["titre"].'</td>
  <td>'.$row["type"].'</td>
  <td>'.$row["description"].'</td>
  <td style="width:100px;"><img src="images/'.$row["image"].'" alt="image" class="img-responsive"/></td>
  <td><form method="POST" action="supprimerAnnonce.php">
  <input type="submit" name="supprimer" value="supprimer">
  <input type="hidden" value="'.$row["titre"].'" name="titre">
  </form>
  </td>
  <td><a href="majAnnonce.php?titre='.$row["titre"].'">
  Update</a></td>
  </tr>'
;
 }  
 $output .= '</table><br /><div align="center">';  
 $page_query = "SELECT * FROM a_produit ORDER BY id DESC";  
 $page_result = mysqli_query($connect, $page_query);  
 $total_records = mysqli_num_rows($page_result);  
 $total_pages = ceil($total_records/$record_per_page);  
 for($i=1; $i<=$total_pages; $i++)  
 {  
      $output .= "<span class='pagination_link' style='cursor:pointer; padding:6px; border:1px solid #ccc;' id='".$i."'>".$i."</span>";  
 }  
 $output .= '</div><br /><br />';  
 echo $output;  
 ?>  