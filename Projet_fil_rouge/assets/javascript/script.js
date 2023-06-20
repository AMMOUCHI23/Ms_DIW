console.log("Je suis connecté...!  :)");
/*document.getElementById("form1").addEventListener("submit", function (f) {
    var nom = document.getElementById("inputNom");
	var nom_inv=document.getElementById("nom_inv");
	var nom_v=/^[a-zA-Z\s]+$/;
    var prenom = document.getElementById("inputPrenom");
	var prenom_inv=document.getElementById("prenom_inv");
	var prenom_v=/^[a-zA-Z\s]+$/;
	var email = document.getElementById("inputEmail");
	var email_inv=document.getElementById("email_inv");
	var email_v=/^w+@[a-zA-Z_]+?.[a-zA-Z] {2,3}$/;
    var telephone = document.getElementById("inputTelephone");
	var telephone_inv=document.getElementById("telephone_inv");
	var telephone_v=/^(0[1-68])(?:[ _.-]?(\d{2})){4}$/;

	if (nom.value.trim()==""){
		document.getElementById("nom_inv").innerHTML="Le champs nom est requis";
		f.preventDefault();
	}
	else if (nom_v.test(nom.value)==false) {
		document.getElementById("nom_inv").innerHTML="nom non valide";
		f.preventDefault();
		
	}
	else if (prenom.value.trim()==""){
		document.getElementById("prenom_inv").innerHTML="Le champs nom est requis";
		f.preventDefault();
	}
	else if (prenom_v.test(prenom.value)==false) {
		document.getElementById("prenom_inv").innerHTML="Prenom non valide";
		f.preventDefault();
	}
	else if (email.value.trim()==""){
		document.getElementById("email_inv").innerHTML="Le champs email est requis";
		f.preventDefault();
	}
	else if (email_v.test(email.value)==false) {
		document.getElementById("email_inv").innerHTML="Email non valide";
		f.preventDefault();
	}
	else if (telephone.value.trim()==""){
		document.getElementById("telephone_inv").innerHTML="Le champs numéro de téléphone est requis";
		f.preventDefault();
	}
	else if (email_v.test(telephone.value)==false) {
		document.getElementById("telephone_inv").innerHTML="Numéro de téléphone non valide";
		f.preventDefault();
	}


})*/
document.getElementById("form1").addEventListener("submit", function (f){
	var ereur;
	var inputs=document.getElementsByTagName("input");
	for (let i = 0; i < inputs.length; i++) {
	     if(!inputs[i].value){
			ereur="veuillez renseigner tout les champs";

		 }
		
	}
})