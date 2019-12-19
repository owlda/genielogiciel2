
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
            alert('Erreur de execution du script');
        }
    });
}