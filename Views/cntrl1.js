function verifa()
{
        var nom=document.getElementById('nom').value;
        var prenom=document.getElementById('prenom').value;
        var date=document.getElementById('date_n').value;
        var mail=document.getElementById('email').value;
        var num=document.getElementById('num').value;
        var nom_m=document.getElementById("missing_nom");
        var prenom_m=document.getElementById("missing_prenom");
        var date_m=document.getElementById("missing_date");
        var email_m=document.getElementById("missing_email");
        var num_m=document.getElementById("missing_num");



nom_m.textContent="";
prenom_m.textContent="";
date_m.textContent="";
email_m.textContent="";
num_m.textContent="";


	if(nom.length==0)
	{
nom_m.textContent="nom missing";
nom_m.style.color='red'
		return false;
	}
	if(prenom.length==0)
	{
prenom_m.textContent="prenom missing";
prenom_m.style.color='red';		return false;
	}

if(date.length==0)
	{
date_m.textContent="nom missing";
date_m.style.color='red';		return false;
	}


if(mail.length==0)
	{
email_m.textContent="email missing";
email_m.style.color='red';		return false;
	}

	
	if(num.length==0)
	{
num_m.textContent="Number missing";
num_m.style.color='red';		return false;
	}


	}