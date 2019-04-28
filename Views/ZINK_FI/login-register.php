<?php
include 'session.php';

testConnexion();
    include "C:\wamp\www\ZINK\Views\ajoutclient.php";

//include "captcha.php";

    if (isset($_SESSION['prob']))
    {
        echo "<script>alert(\"prob\")</script>";
        unset($_SESSION['prob']);
    }
	
if (isset($_POST['cin'])&&isset($_POST['motdepasse']))
{
    if (($_POST['cin']=='admin')&&($_POST['motdepasse']='admin'))
        header('Location: index.php');
    $clientf=new clientf($_POST['cin'],"","",$_POST['motdepasse'],"","");
   
    if ($clientf->exist())
    {
        $_SESSION['cin']=$_POST['cin'];
        $_SESSION['mdp']=$_POST['motdepasse'];
        
       
		header('Location: index.php');
    }
}

?>
<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from demo.devitems.com/mirora-v2/mirora/login-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:53:11 GMT -->
<head>
    <meta charset="utf-8">
   

    <!-- Title -->
    <title>ZINK</title>

    <!-- ************************* CSS Files ************************* -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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
       <link rel="shortcut icon" href="photo.jpg" >
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>


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


<!--<a><h2><center><span class="heading-secondary mb--30" style="color:#fffc3c">ZINK</span></center><h2></a>-->

    <?php /*

if(isset($_POST['captcha_challenge']) && ($_POST['captcha_challenge'] !== $_SESSION['captcha_text']))
{
?>
<p>
<?php echo"captcha incorrect"; ?>
</p>	 
<?php
}


	  if(isset($_POST['captcha_challenge']) && $_POST['captcha_challenge'] == $_SESSION['captcha_text']){


	  
    if ($_POST['cin']!=""&&isset($_POST['mail'])&&isset($_POST['mdp']))
    {
	

            $clientfC=new client($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['mdp'],$_POST['mail'],$_POST['sexe']);
            if ($clientf->ajouterclientf())
            {

               
            }
        }   
    */
    ?>
	

        <!-- Main Wrapper Start -->
        <div class="main-content-wrapper">
            <div class="login-register-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mb-md--40">
                            <h1>CONNEXION</h1>
                            <div class="login-reg-box p-4 bg--2">
                                <form class="form" method="post" onsubmit="return verifForm(this)" action="login-register.php">
                                    <div class="form__group mb--20">
                                        <label class="form__label" for="username">
                                            CIN<span>*</span>
                                        </label>
                                        <input type="text" name="cin" id="cin" class="form__input form__input--2" required><small class="form-text text-muted">veuillez entrer votre cin </small>
                                    </div>
                                    <div class="form__group mb--20">
                                        <label class="form__label" for="password">
                                            Mot de passe <span>*</span>
                                        </label>
                                        <input type="password" name="motdepasse" id="motdepasse" class="form__input form__input--2" required><small class="form-text text-muted">veuillez entrer votre mdp </small>
                                    </div>
                                    <div class="form__group d-flex align-items-center">
                                        <button type="submit" class="btn btn-5 btn-style-1 color-1" >Se connecter</button>
                                        
										
                                        <div class="custom-checkbox ml--20">
                                            <input type="checkbox" name="sessionStore" id="sessionStore" class="form__checkbox">
                                            
                                            <label for="sessionStore" class="form__checkbox--label">Remember me</label>
                                        </div>
                                    
											
                                    </div>
									
                                    <a href="#" class="forgot-pass">vous avez oublié votre mot de passe?</a>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h1>INSCRIPTION</h1>
                            <div class="login-reg-box p-4 bg--2">
                                <form class="form" method="POST" action="../ajoutclient.php"  id="testform">
								<div class="form__group mb--20">
                                        <label class="form__label" for="cin">
                                           CIN <span>*</span>
                                        </label>
                                        <input type="text" name="cin" id="cin" class="form__input form__input--2"class="form-control"required ><small class="form-text text-muted">veuillez entrer votre cin </small><span id="missing_cin"></span>
                                    </div>
                                      <div class="form__group mb--20">
                                        <label class="form__label" for="register_nom">
                                            NOM <span>*</span>
                                        </label>
                                        <input type="text" name="nom" id="nom" class="form__input form__input--2"required ><small class="form-text text-muted">veuillez entrer votre nom </small><span id="missing_nom"></span>
                                    </div>
                                   
                                       <div class="form__group mb--20">
                                        <label class="form__label" for="register_password">
                                            Prenom <span>*</span>
                                        </label>
                                        <input type="prenom" name="prenom" id="prenom" class="form__input form__input--2" class="form-control"required><small class="form-text text-muted">veuillez entrer votre prenom </small><span id="missing_prenom"></span>
                                    </div>
                                    

                                    <div class="form__group mb--20">
                                        <label class="form__label" for="register_email">
                                            Email <span>*</span>
                                        </label>
                                        <input type="text" name="mail" id="mail" class="form__input form__input--2"class="form-control"required ><small class="form-text text-muted">veuillez entrer votre mail </small><span id="missing_mail"></span>
                                    </div>

                                    <div class="form__group mb--20">
                                        <label class="form__label" for="register_password">
                                            Mot de passe <span>*</span>
                                        </label>
                                        <input type="text" name="mdp" id="mdp" class="form__input form__input--2"class="form-control"required ><small class="form-text text-muted">veuillez entrer votre mdp </small><span id="missing_mdp"></span>
                                    </div>
									
									<div class="form__group mb--20">
                                        <label class="form__label" for="accounttype">
                                            sexe <span>*</span></label>
											<br>
                                        <label><input type="radio" name="sexe" checked="checked" value="Homme"> Homme</label>
    									<label><input type="radio" name="sexe" value="Femme"> Femme</label><br><span id="missing_sexe"></span>
                                    </div>
									
									<div class="form__group mb--20">
									<div class="elem-group">
									    <label for="captcha">Please Enter the Captcha Text</label> <br>
									    <img src="captcha.php" alt="CAPTCHA" class="captcha-image"><i class="material-icons">computer</i>
									    
									    <input type="text" id="captcha" name="captcha_challenge" pattern="[A-Z]{6}">
									</div>
									</div>
									
                                    <div class="form__group">
                                        <button type="submit" id="ajouter" value="ajouter" form="testform" class="btn btn-5 btn-style-2"onclick="myFunction()">Inscription</button>
                             
                                        <button type="reset" class="btn btn-5 btn-style-2">reset</button>
                                    </div>
									
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <script type="text/javascript" src="connexionF.js">
  </script>
  <!-- <script type="text/javascript" src="connexionF2.js">
  </script>-->
      		<script src="assets/js/vendor/inscription.js"></script>
		<script>
		var refreshButton = document.querySelector(".refresh-captcha");
refreshButton.onclick = function() {
  document.querySelector(".captcha-image").src = 'captcha.php?' + Date.now();
}
		</script>
        <a class="scroll-to-top" href="#"><i class="fa fa-angle-double-up"></i></a>



</div>
</body>


<!-- Mirrored from demo.devitems.com/mirora-v2/mirora/login-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:53:11 GMT -->
</html>