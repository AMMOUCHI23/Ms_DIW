console.log("Je suis connecté...!  :)");

document.forms["contact"].addEventListener("submit", function (e) {
    const inputs = this;
	const nom_v=/^[a-zA-Z\s]+$/;
	const email_v=/^[a-zA-Z0-9.-_]+@{1}[a-zA-Z_-]+[.]{1}[a-zA-Z]{2,3}$/;
	const telephone_v=/^0[1-9]{9}$/;
	const text_v=/^[a-zA-Z\s]{1,300}$/;
	
	if (nom_v.test(this["nom"].value.trim() )== false) {
		e.preventDefault();
		document.getElementById("nom_inv").innerHTML = "Nom invalide"
	}else {
			document.getElementById("nom_inv").innerHTML = "";
	}
	

	
    if (nom_v.test(this["prenom"].value.trim() )== false) {
		e.preventDefault();
		document.getElementById("prenom_inv").innerHTML = "Prenom invalide";
	}
	else {
		document.getElementById("prenom_inv").innerHTML = "";
	}

   if (email_v.test(this["email"].value.trim().split(" ").join("") )== false) {
	e.preventDefault();
		document.getElementById("email_inv").innerHTML = "Email invalide";
	}
	else {
		document.getElementById("email_inv").innerHTML = "";
	}
	 if (telephone_v.test(this["telephone"].value.trim().split(" ").join("") )== false) {
		e.preventDefault();
		document.getElementById("telephone_inv").innerHTML = "Numéro de téléphone invalide";
		e.preventDefault();
	}
	else{
		
		document.getElementById("telephone_inv").innerHTML = "";
		e.preventDefault();

	}
	if (text_v.test(this["text"].value.trim() )== false) {
		e.preventDefault();
		document.getElementById("text_inv").innerHTML = "Le champs est requis ";
	}
	else {
		document.getElementById("text_inv").innerHTML = "";
	}

   if(document.getElementById("nom_inv").innerHTML == "" && document.getElementById("prenom_inv").innerHTML == "" && document.getElementById("email_inv").innerHTML == "" 
   && document.getElementById("telephone_inv").innerHTML == "" && document.getElementById("text_inv").innerHTML == ""){
	alert("formulaire envoyé avec succé")
   }
    
});
/*	for (let i = 0; i < inputs.length; i++) {
		 if(!inputs[i].value){
			ereur="veuillez renseigner tout les champs";

		 }
		
	}
	if (ereur){
		e.preventDefault();
		document.getElementById("erreur").innerHTML= erreur;
	}else{
		alert("Formulaire envoyé");
	}
})*/

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