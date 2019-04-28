<?php

include 'session.php';
include "C:\wamp\www\ZINK\cores\clientfC.php";
include "C:\wamp\www\ZINK\Entities\clientf.php";
testConnexion();
$db=config::getConnexion();
            if (isset($_POST['nom']) && isset($_POST['prenom']))
            {
            $mail = $_POST['mail'];
            $mdp =$_POST['confirm_password'];
            $sexe = $_POST['sexe'];
            $nom= $_POST['nom'];
            $prenom= $_POST['prenom'];
 $abcd=$db->prepare('UPDATE  clientf SET mail=:mail,mdp=:mdp,nom=:nom,prenom=:prenom,sexe=:sexe WHERE cin=\''.$_SESSION['cin'].'\'');
 $abcd->bindValue(":mail",$mail);
 $abcd->bindValue(":mdp",$mdp);
 $abcd->bindValue(":nom",$nom);
 $abcd->bindValue(":prenom",$prenom);
 $abcd->bindValue(":sexe",$sexe);
 
 $abcd->execute();

            }
 $result=$db->query('SELECT * FROM clientf WHERE cin=\''.$_SESSION['cin'].'\'');   


           /*    if (isset($_POST['nomste']) && isset($_POST['matfis']))
            {
            
            $mail = $_POST['mail'];
            $mdp =$_POST['mdp'];
            $sexe = $_POST['sexe'];
            $telephone= $_POST['telephone'];
            $nomste= $_POST['nomste'];
            $matfis= $_POST['matfis'];
 $abcd=$db->prepare('UPDATE  clientfste SET mail=:mail,mdp=:mdp,nomste=:nomste,matfis=:matfis,sexe=:sexe,telephone=:telephone WHERE cin=\''.$_SESSION['cin'].'\'');
 $abcd->bindValue(":mail",$mail);
 $abcd->bindValue(":mdp",$mdp);
 $abcd->bindValue(":nomste",$nomste);
 $abcd->bindValue(":matfis",$matfis);
 $abcd->bindValue(":sexe",$sexe);
 $abcd->bindValue(":telephone",$telephone);
 $abcd->execute();

            }*/

/*
            if (preg_match('/[a-zA-Z0-9]{4,25}(STE)$/',$_SESSION['cin']))
            {
                
$result=$db->query('SELECT * FROM clientfste WHERE cin=\''.$_SESSION['cin'].'\'');
            }
            else
            {
                             
$result=$db->query('SELECT * FROM clientf WHERE cin=\''.$_SESSION['cin'].'\'');   
            }*/
?>

<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from demo.devitems.com/mirora-v2/mirora/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:54:10 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">
    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets/img/icon.png">

    <!-- Title -->
    <title>ZINK</title>

    <!-- ************************* CSS Files ************************* -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Elegent Icon CSS -->
    <link rel="stylesheet" href="assets/css/elegent-icons.css">

    <!-- All Plugins CSS css -->
    <link rel="stylesheet" href="assets/css/plugins.css">

    <!-- style css -->
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- modernizr JS
    ============================================ -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    
      <script src="js/modernizr.js"></script>

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body style="background-color:#242424">

          <div class="wrapper bg--shaft">
        <!-- Breadcumb area Start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="page-title"style="color:#ffd025">ZINK</h1>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="index.php">Home</a></li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    <?php /*frontUp();*/ ?>
       
        <!-- Breadcumb area Start -->
        <!--
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="page-title">My Account</h1>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="index.html">Home</a></li>
                            <li class="current"><a href="my-account.html">My Account</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
-->
        <!-- Breadcumb area End -->

        <!-- Main Content wrapper start -->

        <section class="main-content-wrapper">
            <div class="account-wrapper pt--40 pb--80 pt-md--30 pb-md--60">
                <div class="container">
                    <div class="user-dashboard-tab">
                        <div class="row">
                            <div class="col-lg-4 mb-md--30">
                                <div class="user-dashboard-tab__head nav flex-column" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active" data-toggle="pill" role="tab" href="#dashboard" aria-controls="dashboard" aria-selected="true">Dashboard</a>

                                    <a class="nav-link" data-toggle="pill" role="tab" href="#accountdetails" aria-controls="accountdetails" aria-selected="true">Modifier votre compte</a>
                                    <a class="nav-link" href="deconnexion.php">Deconnexion</a>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="user-dashboard-tab__content tab-content">
                                    <div class="tab-pane fade show active" id="dashboard">
                                        
                                        <?php $row = $result->fetch();  ?>
                                            <h1> <?php echo $row['cin']; ?> </h1>
                                       <h2> mail : <?php echo $row['mail']; ?> </h2>
                                       <h2> Nom  : <?php echo $row['nom']; ?> </h2>
                                       <h2> Prénom : <?php echo $row['prenom']; ?> </h2>
                                       <h2> sexe : <?php echo $row['sexe']; ?> </h2>
                                


                                        <p>bonjour <strong><?php echo $_SESSION['cin'];?></strong> (vous n'est pas <strong><?php echo $_SESSION['cin'];?></strong>? <a href="deconnexion.php">Log out</a>)</p>
                                        
                                        <p>From your account dashboard. you can easily check and edit your account details.</p>
                                    </div>
                                    
                                    <div class="tab-pane fade" id="accountdetails">
                                        <div class="account-form bg--2">
                                            <form action="moncompte.php" method="POST" class="form">



                                      
                                         <div class="form-row mb--20">

                                            <div class="col-md-6 mb-sm--20">
                                                        <div class="form__group">
                                                            <label for="cin" class="form__label" >CIN :</label>
                                                            <input type="text" name="cin" id="cin" value="<?php echo $row['cin']; ?>" class="form__input form__input--2">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 mb-sm--20">
                                                        <div class="form__group">
                                                            <label for="nom" class="form__label" >NOM :</label>
                                                            <input type="text" name="nom" id="nom" value="<?php echo $row['nom']; ?>" class="form__input form__input--2">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form__group">
                                                            <label for="account_lname" class="form__label">Prénom</label>
                                                            <input type="text" name="prenom" id="prenom" value="<?php echo $row['prenom']; ?>"class="form__input form__input--2">
                                                        </div>
                                                    </div>
                                                </div>
                                                


                                          

                                                <div class="form-row mb--20">
                                                    <div class="col-12">
                                                        <div class="form__group">
                                                            <label for="mail" class="form__label">Mail</label>
                                                            <input type="mail" name="mail" id="mail" value="<?php echo $row['mail']; ?>"class="form__input form__input--2">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-row mb--20">
                                                    <div class="col-12">
                                                        <div class="form__group">
                                                            <label for="sexe" class="form__label">Sexe:</label>
                                                            <input type="text" name="sexe" id="sexe" value="<?php echo $row['sexe']; ?>"class="form__input form__input--2">
                                                        </div>
                                                    </div>
                                                </div>


 
                                                    <div class="col-12">
                                                        <div class="form__group">
                                                            <label for="sexe" class="form__label"> Mot de passe:</label>
                                                            <input type="text" name="mdp" id="mdp" value="<?php echo $row['mdp']; ?>"class="form__input form__input--2">
                                                        </div>
                                                    </div>
                                               


                                                <div class="form-row">
                                                    <div class="col-12">
                                                        <h4>PASSWORD CHANGE</h4>
                                                    </div>
                                                </div>
                                                <div class="form-row mb--20">
                                                    <div class="col-12">
                                                        <div class="form__group">
                                                            <label for="cur_password" class="form__label">Current Password  </label>
                                                            <input type="password" name="cur_password" id="cur_password" class="form__input form__input--2">
                                                        </div>
                                                    </div>
                                                </div>                                             
                                               
                                                <div class="form-row mb--20">
                                                    <div class="col-12">
                                                        <div class="form__group">
                                                            <label for="new_password" class="form__label">New Password</label>
                                                            <input type="password" name="confirm_password" id="confirm_password" class="form__input form__input--2">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-medium btn-style-2">Save Changes</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>    
            </div>
        </section>

        <!-- Main Content wrapper end -->

        <?php/* frontDown(); */?>

        <script src="assets/js/vendor/jquery.min.js"></script>

    <!-- Bootstrap and Popper Bundle JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- All Plugins Js -->
    <script src="assets/js/plugins.js"></script>
    <!-- Ajax Mail Js -->
    <script src="assets/js/ajax-mail.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
</div>
</body>


<!-- Mirrored from demo.devitems.com/mirora-v2/mirora/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:54:11 GMT -->
</html>