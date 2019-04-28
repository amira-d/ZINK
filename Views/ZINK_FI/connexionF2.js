function myFunctionf() { 
var i=0;


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
	{cin_m.textContent="not";
cin_m.style.color='red';}

var mdp=document.getElementById('mdp').value;
var mdp_m=document.getElementById("missing_mdp");
mdp_m.textContent="";

if (!mdp) {

//e.preventDefault();
//alert("false");

mdp_m.textContent="mdp missing";
mdp_m.style.color='red';}
else
i++;



if(i==2)
	alert("yaas");
//else
	//e.preventDefault();

}