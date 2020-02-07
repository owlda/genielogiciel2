function GetUrlController() {
    var loc = window.location.pathname;
    var dir = loc.substring(0, loc.lastIndexOf('/'));
    return dir + '/ControllerVahe/membreController.php';
}



function requetEnregistrerMembre() {
    var formDevenirMembre = new FormData(document.getElementById('formCreationCompte'));
    formDevenirMembre.append('action','devenirmembre');
    $.ajax({
        type : 'POST',
        url : '../ControllerVahe/membreController.php',
        data : formDevenirMembre,
        contentType : false,
        processData : false,
        dataType : 'json',
        success : function (reponse){

            membreVue(reponse);
        },
        error: function (xhr, error) {
            alert("LOL7");
            alert('L\'execution du script n\'est pas reussit');
        }
    });
}

// la fonction pour faire POST par ajax pour envoyer les données de la formuler de la login vers le serveur
function connecter()
{
    var formConnexion = new FormData(document.getElementById('formConnexion'));
    formConnexion.append('action','connecter');
    $.ajax({
        type : 'POST',
        url : '../ControllerVahe/membreController.php',
        data : formConnexion,
        contentType : false,
        processData : false,
        dataType : 'json',
        success : function (reponse){
            membreVue(reponse);
        },
        error: function (xhr, error) {
            alert("LOL6");
            alert('Erreur de execution du script');
        }
    });
}

function initclientmenue()
{
    var formiConnexion = new FormData();
    formiConnexion.append('action','i_connecter');
    $.ajax({
        type : 'POST',
        url : GetUrlController(),
        data : formiConnexion,
        contentType : false,
        processData : false,
        dataType : 'json',
        success : function (reponse){

            membreVue(reponse);
        },
        error: function (xhr, error) {
            console.log(error);
            console.log(xhr);
            alert("LOL5");
        }
    });
}

function deconnect()
{

    var formiConnexion = new FormData();
    formiConnexion.append('action','deconnect');
    $.ajax({
        type : 'POST',
        url : 'ControllerVahe/membreController.php',
        data : formiConnexion,
        contentType : false,
        processData : false,
        dataType : 'json',
        success : function (reponse){

            membreVue(reponse);
        },
        error: function (xhr, error) {
            alert("LOL4");
            console.log(error);
            console.log(xhr);
        }
    });

}

/*on appel cette fonction pour recevoire les données du circuit à montrer*/

function showcard(id)
{
    var formiConnexion = new FormData();
    formiConnexion.append('action','showcircuit');
    formiConnexion.append('id', id);
    $.ajax({
        type : 'POST',
        url : 'ControllerVahe/membreController.php',
        data : formiConnexion,
        contentType : false,
        processData : false,
        dataType : 'json',
        success : function (reponse){

            membreVue(reponse);
        },
        error: function (xhr, error) {
            alert("LOL3");
            alert(error);
        }
    });
}

/*function addpanier(id) {
    alert(id);
    var formiConnexion = new FormData();
    formiConnexion.append('action','addpanier');
    formiConnexion.append('idCircuit', id);
    $.ajax({
        type : 'POST',
        url : 'ControllerVahe/membreController.php',
        data : formiConnexion,
        contentType : false,
        processData : false,
        dataType : 'json',
        success : function (reponse){

            membreVue(reponse);
        },
        error: function (xhr, error) {
            alert("LOL3");
            alert(error);
        }
    });
}*/