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
i++;
var date_n=document.getElementById('date_n').value;
var date_m=document.getElementById("missing_date");
date_m.textContent="";

if (!date_n) {

//e.preventDefault();
//alert("false");

date_m.textContent="nom missing";
date_m.style.color='red';}
else
i++;
var email=document.getElementById('email').value;
var email_m=document.getElementById("missing_email");
email_m.textContent="";

if (!email) {

//e.preventDefault();
//alert("false");

email_m.textContent="email missing";
email_m.style.color='red';}
else
i++;
var num=document.getElementById('num').value;
var num_m=document.getElementById("missing_num");
num_m.textContent="";

if (!num) {

//e.preventDefault();
//alert("false");

num_m.textContent="Number missing";
num_m.style.color='red';}
else
{
	if(!isfinite(num)) 
	{
		num_m.textContent="Not a number";
        num_m.style.color='red';
	}
}
i++;
}