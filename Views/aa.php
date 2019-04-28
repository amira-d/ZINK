<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from zebratheme.com/html/fooadmin/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Feb 2019 15:15:18 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Zink Fidélité </title>
    
	
	<!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon--> 
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon--> 
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
	
	<!-- Styles -->
    <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/unix.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body  class="bg-primary" style="background-color:#000000">
<form method="POST" action="ajoutclient.php" id="connexion">
	<div class="unix-login">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3">
					<div class="login-content">
						<div class="login-logo">
							<a ><span style="color:#fffc3c">ZINK</span></a>
						</div>
						<div class="login-form">
							<center><h3 style="color: black">Register to client fidèle</h3></center>
							 <form method="POST" action="ajoutclient.php" id="connexion">
								<div class="form-group">
									<label style="color: black">Cin</label>
									<input type="cin" style="border-color: black" placeholder="Cin" name="cin"
									id="cin" class="form-control"required><small class="form-text text-muted">veuillez entrer votre cin </small><span id="missing_cin"></span>
								</div>
								<div class="form-group">
									<label style="color: black">NOM</label>
									<input type="nom" style="border-color: black" placeholder="NOM" name="nom"
									id="nom"class="form-control"required><small class="form-text text-muted">veuillez entrer votre nom </small><span id="missing_nom"></span>
								</div>
								<div class="form-group">
									<label style="color: black">Prenom</label>
									<input type="prenom" style="border-color: black"id="prenom" name="prenom" placeholder="PRENOM"class="form-control"required><small class="form-text text-muted">veuillez entrer votre prenom </small><span id="missing_prenom"></span>
								</div>
								<div class="form-group">
									<label style="color: black">Email</label>
									<input type="mail" style="border-color: black"  placeholder="Email" name="mail" id="mail"class="form-control"required ><small class="form-text text-muted">veuillez entrer votre mail </small><span id="missing_mail"></span>
								</div>

								 <div class=" form-group">
                                                                    <div class="form-group"><label for="select" class=" form-contegotrol-label" style="color: black">sexe</label></div>
                                                                    <div class="form-group" >
                                                                        <select name="sexe"placeholder="Sexe" style="color: black; border-color: black" id="sexe" value="<?PHP echo $sexe?>"class="form-group">
                                                                            <option value="sexe" style="color: black">sexe</option>
                                                                            <option value="homme" style="color: black">homme</option>
                                                                            <option value="femme" style="color: black">femme</option>
                                                                            
                                                                        </select><span id="missing_sexe"></span>
                                                                    </div>
                                                                </div>
                                                                 

                                                        </form>
								
								<div class="checkbox">
									<label>
										<input type="checkbox"> Agree the terms and policy 
									</label>									
								</div>
								<br/>
								<p id="erreur"></p>

                                                            <i class="fa fa-dot-circle-o"></i> Save
                                                        </button>
                  </br></br>
								<!--<div class="social-login-content">-->
									<!--<div class="social-button">-->

										<li><a href="ZINK_FI/index.html" class="btn btn-primary  "style="background-color: black ; color: #FFFB09" ><i class="fa fa-dot-circle-o"></i> Return</a></li>
										<!--<button type="button" class="btn btn-primary bg-facebook btn-flat btn-addon m-b-10"><i class="ti-facebook"></i>Return</button>-->
									<!--</div>-->
								<!--</div>-->
								
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	   <script type="text/javascript" src="connexion.js">
      

  </script>
<script type="text/javascript" src="register.js"></script>
<script type="text/javascript" src="page-register.js"></script>
</body>


<!-- Mirrored from zebratheme.com/html/fooadmin/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Feb 2019 15:15:18 GMT -->
</html>