function myFunction() { 
var i=0;
var nom=document.getElementById('nom').value;
var nom_m=document.getElementById("missing_nom");
nom_m.textContent="";

if (!nom) {

//e.preventDefault();
//alert("false");

nom_m.textContent="nom missing";
nom_m.style.color='red';}
else
i++;
var prenom=document.getElementById('prenom').value;
var prenom_m=document.getElementById("missing_prenom");
prenom_m.textContent="";

if (!prenom) {

//e.preventDefault();
//alert("false");

prenom_m.textContent="prenom missing";
prenom_m.style.color='red';}
else 
	if (isFinite(prenom))
i++;
else
	{prenom_m.textContent="not a number";
prenom_m.style.color='red';}


var cin=document.getElementById('cin').value;
var cin_m=document.getElementById("missing_cin");
cin_m.textContent="";
if (!cin) {

//e.preventDefault();
//alert("false");

cin_m.textContent="cin missing";
cin_m.style.color='red';}
else
	if (isFinite(cin))
i++;
else
	{cin_m.textContent="not a number";
cin_m.style.color='red';}

var titre=document.getElementById('titre').value;
var titre_m=document.getElementById("missing_mail");
mail_m.textContent="";
if (titre==0) {

//e.preventDefault();
//alert("false");

mail_m.textContent="mail missing";
mail_m.style.color='red';}
else
i++;



var sexe=document.getElementById('sexe').value;
var sexe_m=document.getElementById("missing_sexe");
sexe_m.textContent="";

if (sexe==0) {

//e.preventDefault();
//alert("false");

sexe_m.textContent="sexe missing";
sexe_m.style.color='red';
}
else
i++;

if(i==5)
	alert("yaas");
else
	e.preventDefault();

}
