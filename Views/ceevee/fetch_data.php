<?php

//fetch_data.php

 include "../../Cores/ProduitC.php";
$prodC=new ProduitC();
  if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))

{

        
  $liste=$prodC->filterprice($_POST["maximum_price"],$_POST["minimum_price"]);}
   if (isset($_POST["nom_P"]))
  {

    $liste=$prodC->filtername();
  }
   if (  !isset($_POST["nom_P"]) && !isset($_POST["minimum_price"], $_POST["maximum_price"]) )
{  $liste=$prodC->afficherProduit();
}
$kiki= $_POST["type"];
while ($data=$liste->fetch())
{
  if ($_POST["type"] != 'menu') {
   
    if ($data["Type_P"] == $kiki)
     {
      echo "<div class='col-md-4 col-sm-6 graphics ads' style='height:200px;width:570px; margin:80px 40px 80px 40px;'>";
                   echo  "<div href='' class='portfolio_item'>";
                           echo "<img src=' ../web/".$data['image']."' alt='image'class='img-responsive' style='height:180px;width:180px;border-radius:20px;'/>";
 

                           echo "<div style='padding:5px;'>";
                              echo "<h1 style='bottom: 50px;'>".$data['nom_P']."</h1>";

                            echo "<p class='desc' style='position:relative; bottom: 250px; left: 200px;width:250px; max-height:200px; overflow:hidden; border-top: 2px inset grey;border-bottom: 2px inset grey;font: 18px grey 'opensans-light';'>".$data['Description']."</p>";
                            echo "</div>";


                            echo "<div class='portfolio_item_hover' style=' width:500px; height:200px;'>";
                              echo  "<div class='portfolio-border clearfix'>";
                                    echo "<div class='item_info' style=''>";
                                       echo "<span>".$data['Prix']." dt</span>";
                                       echo "<em>Add to cart</em>";
                                    echo"</div>";
                                echo "</div>";
                            echo "</div>";
                        echo "</div>";
                    echo"</div>";
}
}
else
{
  echo "<div class='col-md-4 col-sm-6 graphics ads' style='height:200px;width:570px; margin:80px 40px 80px 40px;'>";
                   echo  "<div href='' class='portfolio_item'>";
                           echo "<img src=' ../web/".$data['image']."' alt='image'class='img-responsive' style='height:180px;width:180px;border-radius:20px;'/>";
 

                           echo "<div style='padding:5px;'>";
                              echo "<h1 style='bottom: 50px;'>".$data['nom_P']."</h1>";

                            echo "<p class='desc' style='position:relative; bottom: 250px; left: 200px;width:250px; max-height:200px; overflow:hidden; border-top: 2px inset grey;border-bottom: 2px inset grey;font: 18px grey 'opensans-light';'>".$data['Description']."</p>";
                            echo "</div>";


                            echo "<div class='portfolio_item_hover' style=' width:500px; height:200px;'>";
                              echo  "<div class='portfolio-border clearfix'>";
                                    echo "<div class='item_info' style=''>";
                                       echo "<span>".$data['Prix']." dt</span>";
                                       echo "<em>Add to cart</em>";
                                    echo"</div>";
                                echo "</div>";
                            echo "</div>";
                        echo "</div>";
                    echo"</div>";
}
  

}




  
  
?>