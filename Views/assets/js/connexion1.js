function myFunction(e)
{ 
var i=0;
var idstock=document.getElementById('idstock').value;
var idstock_m=document.getElementById("missing_idstock");
idstock_m.textContent="";

if (!idstock) {

//e.preventDefault();
//alert("false");

idstock_m.textContent="idstock missing";
idstock_m.style.color='red';}
else
i++;

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



var type=document.getElementById('type').value;
var type_m=document.getElementById("missing_type");
type_m.textContent="";

if (type=="type") {

//e.preventDefault();
//alert("false");

type_m.textContent="type missing";
type_m.style.color='red';
}
else
i++;

if(i==3)
	alert("yaas");
//else
//	e.preventDefault();

}