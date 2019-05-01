<?php
// On démarre la session
session_start ();

// On détruit les variables de notre session
session_unset ();

// On détruit notre session
session_destroy ();

// On redirige le visiteur vers la page d'accueil
header ('location: page-login.html');

if (isset($_SESSION['l']) && isset($_SESSION['p'])) 
{ 

     echo '<b>'.$_SESSION['l'].' : </b>'.$_SESSION['r'].' '; 

}

else { 
echo"<script>window.location.replace('page-login.html');</script>";
?>
