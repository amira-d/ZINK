document.getElementById("connexion").addEventListener("submit",function(e)
{	

var email=document.getElementById("Email");
var Pwd=document.getElementById("PWD");
var erreur;
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
}
if (erreur)
{	e.preventDefault();

document.getElementById("erreur").innerHTML = erreur;

}









})

