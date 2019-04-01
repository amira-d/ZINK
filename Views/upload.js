test2()
{	

var nom=document.getElementById("nom");
var type=document.getElementById("type");
var description=document.getElementById("description");
var price=document.getElementById("price");

var erreur;
if (!nom.value)
{
	erreur="Email password empty "
}
if(!type.value)
{
	erreur="password empty";
}
if(!description.value)
{
	erreur="password empty";
}
if(!price.value)
{
	erreur="password empty";
}

if (erreur)
{	e.preventDefault();

document.getElementById("erreur").innerHTML = erreur;

}









}

