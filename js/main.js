/**
 * @file Script contenant les fonctions de base
 * @author Jonathan Martel (jmartel@gmail.com)
 * @version 0.1
 * @update 2013-12-11
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 *
 */

 // Placer votre JavaScript ici

//Ici seront les fonctions de validation générales utilisées pour toutes nos validations personnelles.

//Par exemple, estNumérique(), estBooleen(), estVide(), etc.

function estVide(varATester){
   if(varATester.length == 0){
      return true;
   }
   return false;
}

function estNumerique(varATester){
   //Approche négative
   var regex = /[^0-9]/;
   if(regex.test(varATester)){
      return false;
   }
   return true;
}

function estTitre(varATester){
    // regex pour que l'utilisateur ne rentre pas les caractères non désirés
	var regex = /[^a-zA-Z0-9\s\-\*\xC0-\xFC'\!\?\.\,\t\n\r]/;

	if(regex.test(varATester)) { //on teste le champ et si il y a  des caractères invalides 
		return false;			 // on retourne false
	}
	return true;
}

function estUrl(varATester){
    // regex pour que l'utilisateur ne rentre pas les caractères non désirés
	var regex = /[^a-zA-Z0-9\s\/\<\>'="\?\._]/;

	if(regex.test(varATester)) { //on teste le champ et si il y a  des caractères invalides 
		return false;			 // on retourne false
	}
	return true;
}
    
//Tester pour une valeur alpha
function estLettre(varATester) {
	// regex pour que l'utilisateur ne rentre pas les caractères non désirés
	var regex = /[^a-zA-Z0-9\s\xC0-\xFC]/;

	if(regex.test(varATester)) { //on teste le champ et si il y a  des caractères invalides 
		return false;			 // on retourne false
	}
	return true;
}

//Tester pour un courriel
function estCourriel(varATester) {
	//approche positive
	var regex = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
	if(regex.test(varATester)) {
		return true;
	}
    return true;
}