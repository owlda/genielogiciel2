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
    rendreInvisible("divCreationCompte");
    resetForm("formCreationCompte");
    rendreVisible("divMotPasseOublie");
}

function fermerForms() {
    rendreInvisible("divConnexion");
    resetForm("formConnexion");
    afficherFormConnexion();
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

function onSuccess(googleUser) {
    console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
    var id_token = googleUser.getAuthResponse().id_token;

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'http://localhost/genielogiciel/forms/connexionGoogle.php');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
        console.log('Signed in as: ' + xhr.responseText);
    };
    xhr.send('idtoken=' + id_token);
}

function onFailure(error) {
    console.log(error);
}

function renderButton() {
    gapi.signin2.render('my-signin2', {
        'scope': 'profile email',
        'width': 320,
        'height': 50,
        'longtitle': true,
        'theme': 'dark',
        'onsuccess': onSuccess,
        'onfailure': onFailure
    });
}

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

function onSignIn(googleUser) {
    var profile = googleUser.getBasicProfile();
    console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
    console.log('Name: ' + profile.getName());
    console.log('Image URL: ' + profile.getImageUrl());
    console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
    onSuccess(googleUser);
}



/**
 * Facebook login - SDK for JavaScript
 */

function statusChangeCallback(response) {  // Called with the results from FB.getLoginStatus().
    console.log('statusChangeCallback');
    console.log(response);                   // The current login status of the person.
    if (response.status === 'connected') {   // Logged into your webpage and Facebook.
        testAPI();
    } else {                                 // Not logged into your webpage or we are unable to tell.
        document.getElementById('status').innerHTML = 'Please log ' +
            'into this webpage.';
    }
}


function checkLoginState() {               // Called when a person is finished with the Login Button.
    FB.getLoginStatus(function(response) {   // See the onlogin handler
        statusChangeCallback(response);
    });
}


window.fbAsyncInit = function() {
    FB.init({
        appId            : '541764139741720',
        autoLogAppEvents : true,
        xfbml            : true,
        version          : 'v5.0',
        status           : true
    });

    FB.getLoginStatus(function(response) {
        statusChangeCallback(response);
    });
};


(function(d, s, id) {
    // Load the SDK asynchronously
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));


function testAPI() {
    // Testing Graph API after login.  See statusChangeCallback() for when this call is made.
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
        console.log('Successful login for: ' + response.name);
        document.getElementById('status').innerHTML =
            'Thanks for logging in, ' + response.name + '!';
    });
}
