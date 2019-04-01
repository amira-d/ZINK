
function myFunction() { 
var i=0;
var ref=document.getElementById('ref').value;
var ref_m=document.getElementById("missing_reference");
ref_m.textContent="";

if (!ref) {

//e.preventDefault();
//alert("false");

ref_m.textContent="ref missing";
ref_m.style.color='red';}
else
i++;
var prix=document.getElementById('prix').value;
var prix_m=document.getElementById("missing_prix");
prix_m.textContent="";

if (!prix) {

//e.preventDefault();
//alert("false");

prix_m.textContent="prix missing";
prix_m.style.color='red';}
else 
	if (isFinite(prix))
i++;
else
	{prix_m.textContent="not a number";
prix_m.style.color='red';}


var nbr=document.getElementById('nbr').value;
var nbr_m=document.getElementById("missing_nombre");
nbr_m.textContent="";
if (!nbr) {

//e.preventDefault();
//alert("false");

nbr_m.textContent="nbr missing";
nbr_m.style.color='red';}
else
	if (isFinite(nbr))
i++;
else
	{nbr_m.textContent="not a number";
nbr_m.style.color='red';}


if(i==3)
	alert("yaas");
//else
//	e.preventDefault();

}