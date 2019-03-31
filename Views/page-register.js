
function test()
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

document.getElementById("erreur").innerHTML = erreur;
}
}


 