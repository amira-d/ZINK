function myFunction() { 
var i=0;
var question=document.getElementById('question').value;
var question_m=document.getElementById("missing_question");
nom_m.textContent="";

if (!question) {

//e.preventDefault();
//alert("false");

question_m.textContent="nom question";
question_m.style.color='red';}
else
i++;
var reponse=document.getElementById('reponse').value;
var reponse_m=document.getElementById("missing_reponse");
reponse_m.textContent="";

if (!reponse) {

//e.preventDefault();
//alert("false");

reponse_m.textContent="reponse missing";
reponse_m.style.color='red';}
else
i++;



var id=document.getElementById('id').value;
var id_m=document.getElementById("missing_id");
id_m.textContent="";
if (!id) {

//e.preventDefault();
//alert("false");

id_m.textContent="id missing";
id_m.style.color='red';}
else
	if (isFinite(id))
i++;
else
	{id_m.textContent="not";
id_m.style.color='red';}


if(i==3)
	alert("yaas");
//else
	//e.preventDefault();

}