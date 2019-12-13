function rendreVisible(elem) {
    document.getElementById(elem).style.display = 'block';
}

function rendreInvisible(elem) {
    document.getElementById(elem).style.display = 'none';
}

function afficherFormMotPasse() {
    rendreVisible("divMotPasseOublie");
    rendreInvisible("divConnexion");
    reinitialiserForm("formConnexion");
}

function afficherFormCreerCompte() {
    rendreVisible("divCreationCompte");
    rendreInvisible("divConnexion");
    reinitialiserForm("formConnexion");
}

function afficherFormConnexion() {
    rendreVisible("divConnexion");
    rendreInvisible("divCreationCompte");
    reinitialiserForm("formCreationCompte");
}

function afficherFormConnexion2() {
    rendreVisible("divConnexion");
    rendreInvisible("divMotPasseOublie");
    reinitialiserForm("formMotPasseOublie");
}

function reinitialiserForm(elem) {
    document.getElementById(elem).reset();
}

function validerFormConnexion() {
    let courrielCnx = document.forms["formConnexion"]["courrielCnx"].value;
    if (courrielCnx.toString().trim() === "") {
        alert("Veuillez saisir votre adresse courriel");
        return false;
    }

    let motPasseCnx = document.forms["formConnexion"]["motPasseCnx"].value;
    if (motPasseCnx.toString().trim() === "") {
        alert("Veuillez saisir votre mot de passe");
        return false;
    }


}