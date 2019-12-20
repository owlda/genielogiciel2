function afficherFormConnexion() {
    rendreInvisible("divCreationCompte");
    resetForm("formCreationCompte");
    rendreInvisible("divMotPasseOublie");
    resetForm("formMotPasseOublie");
    rendreVisible("divConnexion");
}

function afficherFormCreerCompte() {
    rendreInvisible("divConnexion");
    resetForm("formConnexion");
    rendreInvisible("divMotPasseOublie");
    resetForm("formMotPasseOublie");
    rendreVisible("divCreationCompte");
}

function afficherFormMotPasse() {
    rendreInvisible("divConnexion");
    resetForm("formConnexion");

    rendreVisible("divCreationCompte");
    resetForm("formCreationCompte");
    rendreVisible("divMotPasseOublie");
}

function fermerForms() {
    // rendreInvisible("divConnexion");
    resetForm("formConnexion");
    // rendreInvisible("divMotPasseOublie");
    resetForm("formMotPasseOublie");
    // rendreInvisible("divCreationCompte");
    resetForm("formCreationCompte");
    // afficherFormConnexion();

}

function rendreVisible(elem) {
    document.getElementById(elem).style.display = 'block';
}

function rendreInvisible(elem) {
    document.getElementById(elem).style.display = 'none';
}

function resetForm(elem) {
    document.getElementById(elem).reset();
}


// function validerFormConnexion() {
//     let courrielCnx = document.forms["formConnexion"]["courrielCnx"].value;
//     if (courrielCnx.toString().trim() === "") {
//         alert("Veuillez saisir votre adresse courriel");
//         return false;
//     }
//
//     let motPasseCnx = document.forms["formConnexion"]["motPasseCnx"].value;
//     if (motPasseCnx.toString().trim() === "") {
//         alert("Veuillez saisir votre mot de passe");
//         return false;
//     }
// }

//
// Google sign-in
//

// function onSuccess(googleUser) {
//     console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
// }
//
// function onFailure(error) {
//     console.log(error);
// }

// function renderButton() {
//     gapi.signin2.render('my-signin2', {
//         'scope': 'profile email',
//         'width': 240,
//         'height': 50,
//         'longtitle': true,
//         'theme': 'dark',
//         'onsuccess': onSuccess,
//         'onfailure': onFailure
//     });
// }

var googleUser = {};

var startApp = function () {
    gapi.load('auth2', function () {
        // Retrieve the singleton for the GoogleAuth library and set up the client.
        auth2 = gapi.auth2.init({
            client_id: '266969397484-tlf4h2dn463kvmhn9lpovtgm93re0i63.apps.googleusercontent.com',
            cookiepolicy: 'single_host_origin',
            // Request scopes in addition to 'profile' and 'email'
            //scope: 'additional_scope'
        });
        attachSignin(document.getElementById('customBtn'));
    });
};

function attachSignin(element) {
    console.log(element.id);
    auth2.attachClickHandler(element, {},
        function (googleUser) {
            let tmp = googleUser.getBasicProfile().getName();
            document.getElementById('name').innerText = "Connecté : " + tmp;
            document.getElementById('name1').innerText = tmp;
        }, function (error) {
            alert(JSON.stringify(error, undefined, 2));
        });
}

function initialiserMenu() {
    document.getElementById('name1').innerText = "Connexion";
}

