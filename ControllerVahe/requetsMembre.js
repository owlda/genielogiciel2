
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
            alert('L\'ecution du script n\'est pas reussit');
        }
    });

}