<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from zebratheme.com/html/fooadmin/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Feb 2019 15:15:18 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Zink admin : Widget</title>
	
	<!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114"  href="http://placehold.it/114.png/000/fff">
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

<body class="bg-primary">

	<div class="unix-login">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3">
					<div class="login-content">
						<div class="login-logo">
							<a ><span>ZINK</span></a>
						</div>
						<div class="login-form">
							<h4>Register to Administration</h4>
							<form  action="ajoutAdmin.php" onsubmit="return test(event)" method="POST" id="inscription">
								<div class="form-group">
									<label>User Name</label>
									<input type="text" class="form-control" placeholder="User Name" name="username"
									id="userName">
								</div>
								<div class="form-group">
									<label>Email address</label>
									<input type="email" class="form-control" placeholder="Email" name="email" id="Email">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" class="form-control" placeholder="Password" name = "pwd" id="PWD">
								
							
								<br/>
								<p id="erreur"></p></div>
								<button type="submit"  class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>									
								<div>
								<p>Already have account ? <a href="page-login.html"> Sign in</a></p>
							         </div>
                                   

                                   </form>
								
								</div>	

							
						
						</div>
					</div>
				</div>
			</div>
		</div>
</body>


<!-- Mirrored from zebratheme.com/html/fooadmin/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Feb 2019 15:15:18 GMT -->
</html>
<script type="text/javascript">
	



function test(event)
{
var email=document.getElementById("Email");
var Pwd=document.getElementById("PWD");
var user= document.getElementById("userName")
var erreur='';
if (!email.value)
{

	erreur="Email password empty "
}
if(!Pwd.value)
{
	erreur="password empty";
}
if ((!Pwd.value)&&(!email.value))
{
	erreur="Please fill your email and password";
}if (erreur)
{
	event.preventDefault();

document.getElementById("erreur").innerHTML = erreur;
}
}


 
</script>