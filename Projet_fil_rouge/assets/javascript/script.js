console.log("Je suis connecté...!  :)");
/*var validation=document.getElementById("envoi");
var prenom=document.getElementById("inputPrenom").value;
var prenom_inv=document.getElementById("prenom_inv");
validation.addEventListener("submit",f_envoi);
function f_envoi(f){
	if(prenom==""){
		f.preventDefault();
		prenom_inv.textContent="Prénom manquant";
		
	}

}*/
document.getElementById("form1").addEventListener("submit", function (f) {
    f.preventDefault();
    var prenom = document.getElementById("inputPrenom").value;
	var prenom_inv=("Prenom invalid");
	//var prenom_v=/^[a-zA-Z]

	if (prenom==""){
		document.getElementById("prenom_inv").innerHTML=prenom_inv
	}

})