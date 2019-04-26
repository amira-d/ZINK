<HTML>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

       <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/layout.css">
   <link rel="stylesheet" href="css/media-queries.css">
   <link rel="stylesheet" href="css/magnific-popup.css">
      <link rel="stylesheet" href="css/commande.css">


<style>

    /* Optional: Makes the sample page fill the window. */
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }
 /* Always set the map height explicitly to define the size of the div
 * element that contains the map. */
    #map {
        height: 100%;
    }
</style>



   <!-- Script
   ================================================== -->
    <script src="js/modernizr.js"></script>

     <header id="home">

      <nav id="nav-wrap">

         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
          <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

         <ul id="nav" class="nav">
            <li class="current"><a class="smoothscroll" href="#home">Home</a></li>
            <li><a class="smoothscroll" href="#about">About</a></li>
            <li><a class="smoothscroll" href="#portfolio">Menu</a></li>
            <li><a class="smoothscroll" href="#testimonials">Testimonials</a></li>
            <li><a class="smoothscroll" href="#testimonials">Z-News</a></li>
            <li><a class="smoothscroll" href="#contact">Contact</a></li>
         </ul> <!-- end #nav -->

      </nav> <!-- end #nav-wrap -->
      

      <p class="scrolldown">
         <a class="smoothscroll" href="#about"><i class="icon-down-circle"></i></a>
      </p>

   </header>

    <section id="about">


      <div class="row1">

         <div class="three columns">

            <img class="profile-pic"  src="images/profilepic.jpg" alt="" />

         </div>

         <div class="nine columns main-col">

            


<?PHP
include "../entites/Livraison.php";
include "../cores/LivraisonC.php";
include_once 'locations_model.php';
$cinErr  =$nomErr = $prenomErr = $numeroErr = $emailErr  = $heuresErr = $minutesErr = "";
$cin  =$nom = $prenom = $numero = $email  = $heures = $minutes = "";
$mincin = 1111111 ;
$maxcin= 99999999 ;
$minheures = 00 ;
$maxheures = 23 ;
$minminutes = 00 ;
$maxminutes = 59 ;



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
   
//if ($_SERVER["REQUEST_METHOD"] == 'post') {

    if (empty($_POST["cin"])) {
    $cinErr = "Cin est obligatoire !";
  } 
  else {
    $cin = test_input($_POST['cin']);

if (filter_var($cin, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$mincin, "max_range"=>$maxcin))) === false)
{
    $cinErr ="Invalide Cin Format " ;
}
  }


  if (empty($_POST["nom"])) {
    $nomErr = "Nom est obligatoire";
  }
   else {
    $nom = test_input($_POST["nom"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$nom)) {
      $nomErr = "Only letters and white space allowed"; 
    }
  }

   if (empty($_POST["prenom"])) {
    $prenomErr = "Prenom est obligatoire";
  } else
   {
    $prenom = test_input($_POST["prenom"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$prenom)) {
      $prenomErr = "Only letters and white space allowed"; 
    }
  }



  if (empty($_POST["numero"])) {
    $numero = "";
  } else {
    $numero = test_input($_POST["numero"]);
    if (filter_var($numero, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$mincin, "max_range"=>$maxcin))) === false)
{
    $numeroErr="Invalide Numero Format " ;
}
  }


  
  if (empty($_POST["email"])) {
    $emailErr = "Email est obligatoire";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
 
if (empty($_POST["heures"])) {
    $heuresErr = "heures est obligatoire";
  } else {
    $heures = test_input($_POST['heures']);
    if (filter_var($heures, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$minheures, "max_range"=>$maxheures))) === false)
{
    $heuresErr = "Invalide heures Format " ;
}
  }


  if (empty($_POST["minutes"])) {
    $minutesErr = "minutes est obligatoire";
  } else {
    $minutes = test_input($_POST['minutes']);
    if (filter_var($minutes, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$minminutes, "max_range"=>$maxminutes))) === false)
{
    $minutesErr= "Invalide minutes Format " ;
}
  }
  


 
 
if ($cin&&$nom&&$prenom&&$numero&&$email&&$heures&&$minutes)
{
$livraison1=new livraison($cin,$nom,$prenom,$numero,$email,$heures,$minutes,$_POST['location'],$_POST['etat']);
//Partie3

$livraison1C=new LivraisonC();
$livraison1C->ajouterLivraison($livraison1);
echo "<script>alert(\"Votre livraison est envoyee\")</script>";
//header('Location: sendmail1.php?email='.$email.''); 
 }  




?>
        
                   <div class="eight columns">
<section id="contact">

         <div class="row section-head">

            <div class="two columns header-col">

               <h1><span>Get In Touch.</span></h1>

            </div>



         </div>

         <div class="row">

     <div class="eight columns"> 

               <!-- form -->
              <form method="post" >
                    <fieldset>


                  <div>
                           <label for="contactName" >Cin </label>
                           <input type="text" value="" size="1135" id="contactName"  placeholder="8 chiffres"name="cin">
                            <span class="required">* <?php echo $cinErr;?></span>
  <br><br>
                  </div>

                  <div>
                           <label for="contactName">nom </label>
                           <input type="text" value="" size="35" id="contactName"  placeholder="votre Nom" name="nom">
                            <span class="required">* <?php echo $nomErr;?></span>
  <br><br>
                  </div>

                  <div>
                           <label for="contactName">prenom </label>
                           <input type="text" value="" size="35" id="contactName" placeholder="votre Prenom" name="prenom">
                            <span class="required">* <?php echo $prenomErr;?></span>
  <br><br>
                  </div>
                    <div>
                           <label for="contactName">Numero </label>
                           <input type="text" value="" size="35" id="contactName"  placeholder="+216********" name="numero">
                           <span class="required"><?php echo $numeroErr;?></span>
                  </div>

                  <div>
                           <label for="contactEmail">Email</label>
                           <input type="text" value="" size="35" id="contactEmail"  placeholder="email@gmail.com" name="email">
                           <span class="required">* <?php echo $emailErr;?></span>
                  </div>
                  <div>
                           <label for="contactEmail">Heures </label>
                           <input type="text" value="" size="35" id="contactEmail" placeholder="12H" name="heures">
                           <span class="required">* <?php echo $heuresErr;?></span>
                  </div>
                  <div>
                           <label for="contactEmail">Minutes </label>
                           <input type="text" value="" size="35" id="contactEmail" placeholder="15Minutes" name="minutes">
                           <span class="required">* <?php echo $minutesErr;?></span>
                  </div>
                 
                  <div>
                           <label for="contactEmail">PRECISER VOTRE LOCALISATION </label>
                  </div>


                

                 




 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?language=en&key=AIzaSyA-AB-9XZd-iQby-bNLYPFyb0pR2Qw3orw">
    </script>
  <div>
    <div id="map"></div>
    <script>
        /**
         * Create new map
         */
        var infowindow;
        var map;
        var red_icon =  'http://maps.google.com/mapfiles/ms/icons/red-dot.png' ;
        var purple_icon =  'http://maps.google.com/mapfiles/ms/icons/purple-dot.png' ;
        var locations = <?php get_confirmed_locations() ?>;
        var myOptions = {
            zoom: 7,
            center: new google.maps.LatLng(36.621227,10.000767),
            mapTypeId: 'roadmap'
        };
        map = new google.maps.Map(document.getElementById('map'), myOptions);

        /**
         * Global marker object that holds all markers.
         * @type {Object.<string, google.maps.LatLng>}
         */
        var markers = {};

        /**
         * Concatenates given lat and lng with an underscore and returns it.
         * This id will be used as a key of marker to cache the marker in markers object.
         * @param {!number} lat Latitude.
         * @param {!number} lng Longitude.
         * @return {string} Concatenated marker id.
         */
        var getMarkerUniqueId= function(lat, lng) {
            return lat + '_' + lng;
        };

        /**
         * Creates an instance of google.maps.LatLng by given lat and lng values and returns it.
         * This function can be useful for getting new coordinates quickly.
         * @param {!number} lat Latitude.
         * @param {!number} lng Longitude.
         * @return {google.maps.LatLng} An instance of google.maps.LatLng object
         */
        var getLatLng = function(lat, lng) {
            return new google.maps.LatLng(lat, lng);
        };

        /**
         * Binds click event to given map and invokes a callback that appends a new marker to clicked location.
         */
        var addMarker = google.maps.event.addListener(map, 'click', function(e) {
            var lat = e.latLng.lat(); // lat of clicked point
            var lng = e.latLng.lng(); // lng of clicked point
            var markerId = getMarkerUniqueId(lat, lng); // an that will be used to cache this marker in markers object.
            var marker = new google.maps.Marker({
                position: getLatLng(lat, lng),
                map: map,
                animation: google.maps.Animation.DROP,
                id: 'marker_' + markerId,
                html: "    <div id='info_"+markerId+"'>\n" +
                "        <table class=\"map1\">\n" +
                "            <tr>\n" +
                "                <td><a>Description:</a></td>\n" +
                "                <td><textarea  id='manual_description' placeholder='Description'></textarea></td></tr>\n" +
                "            <tr><td></td><td><input type='button' value='Save' onclick='saveData("+lat+","+lng+")'/></td></tr>\n" +
                "        </table>\n" +
                "    </div>"
            });
            markers[markerId] = marker; // cache marker in markers object
            bindMarkerEvents(marker); // bind right click event to marker
            bindMarkerinfo(marker); // bind infowindow with click event to marker
        });

        /**
         * Binds  click event to given marker and invokes a callback function that will remove the marker from map.
         * @param {!google.maps.Marker} marker A google.maps.Marker instance that the handler will binded.
         */
        var bindMarkerinfo = function(marker) {
            google.maps.event.addListener(marker, "click", function (point) {
                var markerId = getMarkerUniqueId(point.latLng.lat(), point.latLng.lng()); // get marker id by using clicked point's coordinate
                var marker = markers[markerId]; // find marker
                infowindow = new google.maps.InfoWindow();
                infowindow.setContent(marker.html);
                infowindow.open(map, marker);
                // removeMarker(marker, markerId); // remove it
            });
        };

        /**
         * Binds right click event to given marker and invokes a callback function that will remove the marker from map.
         * @param {!google.maps.Marker} marker A google.maps.Marker instance that the handler will binded.
         */
        var bindMarkerEvents = function(marker) {
            google.maps.event.addListener(marker, "rightclick", function (point) {
                var markerId = getMarkerUniqueId(point.latLng.lat(), point.latLng.lng()); // get marker id by using clicked point's coordinate
                var marker = markers[markerId]; // find marker
                removeMarker(marker, markerId); // remove it
            });
        };

        /**
         * Removes given marker from map.
         * @param {!google.maps.Marker} marker A google.maps.Marker instance that will be removed.
         * @param {!string} markerId Id of marker.
         */
        var removeMarker = function(marker, markerId) {
            marker.setMap(null); // set markers setMap to null to remove it from map
            delete markers[markerId]; // delete marker instance from markers object
        };


        /**
         * loop through (Mysql) dynamic locations to add markers to map.
         */
        var i ; var confirmed = 0;
        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map,
                icon :   locations[i][4] === '1' ?  red_icon  : purple_icon,
                html: "<div>\n" +
                "<table class=\"map1\">\n" +
                "<tr>\n" +
                "<td><a>Description:</a></td>\n" +
                "<td><textarea disabled id='manual_description' placeholder='Description'>"+locations[i][3]+"</textarea></td></tr>\n" +
                "</table>\n" +
                "</div>"
            });

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infowindow = new google.maps.InfoWindow();
                    confirmed =  locations[i][4] === '1' ?  'checked'  :  0;
                    $("#confirmed").prop(confirmed,locations[i][4]);
                    $("#id").val(locations[i][0]);
                    $("#description").val(locations[i][3]);
                    $("#form").show();
                    infowindow.setContent(marker.html);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }

        /**
         * SAVE save marker from map.
         * @param lat  A latitude of marker.
         * @param lng A longitude of marker.
         */
        function saveData(lat,lng) {
            var description = document.getElementById('manual_description').value;
            var url = 'locations_model.php?add_location&description=' + description + '&lat=' + lat + '&lng=' + lng;
            downloadUrl(url, function(data, responseCode) {
                if (responseCode === 200  && data.length > 1) {
                    var markerId = getMarkerUniqueId(lat,lng); // get marker id by using clicked point's coordinate
                    var manual_marker = markers[markerId]; // find marker
                    manual_marker.setIcon(purple_icon);
                    infowindow.close();
                    infowindow.setContent("<div style=' color: purple; font-size: 25px;'> Waiting for admin confirm!!</div>");
                    infowindow.open(map, manual_marker);

                }else{
                    console.log(responseCode);
                    console.log(data);
                    infowindow.setContent("<div style='color: red; font-size: 25px;'>Inserting Errors</div>");
                }
            });
        }

        function downloadUrl(url, callback) {
            var request = window.ActiveXObject ?
                new ActiveXObject('Microsoft.XMLHTTP') :
                new XMLHttpRequest;

            request.onreadystatechange = function() {
                if (request.readyState == 4) {
                    callback(request.responseText, request.status);
                }
            };

            request.open('GET', url, true);
            request.send(null);
        }


    </script>
<br>
<br>
<br>
</div>
    <div>

                     <button type="submit" name="submit" class="submit1"  > CONFIRMER LIVRAISON </button>
                     <span id="image-loader">
                        <img alt="" src="images/loader.gif">
                     </span>
                  </div>


          </fieldset>
           </form>


                            
               <!-- contact-warning -->
               <div id="message-warning"> Error boy</div>
               <!-- contact-success -->
                   <div id="message-success">
                  <i class="fa fa-check"></i>Your message was sent, thank you!<br>
                </div>

            </div>


            <aside class="four columns footer-widgets">

               <div class="widget widget_contact">

                       <h4>Address and Phone</h4>
                       <p class="address">
                           LE ZINK<br>
                           Rue Salah Ben Mahmoud Menzah 1 <br>
                           Tunis 1004, Tunisie<br>
                           <span>(216) 22 420 010</span>
                       </p>
                    


    </aside>

      </div>

   </section>
    </div>
    
            

            </div> <!-- end row -->

         </div> <!-- end .main-col -->

      </div>

   </section>

</HTMl>
