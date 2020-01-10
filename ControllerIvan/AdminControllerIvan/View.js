var Vue=function(reponse){

    switch(reponse.action){
        case "addcircuit" :
            AddCircuit_View(reponse);
            break;
        case "btn_register_circuit" :
            alert("Circuit a été ajouté...");
            location.reload();
            break;
        case "btn_register_etape" :
            alert("Étape a été ajouté...");
            DetailCircuit(reponse.idCircuit);
            break;
        case "register_theme" :
            EnregistreTheme_View(reponse);
            break;
        case "list_circuit" :
            ListerCircuit_View(reponse);
            break;
        case "detail_circuit" :
            DetailCircuit_View(reponse);
            break;
        case "modcircuit" :
            ModCircuit_View(reponse);
            break;
        case "addetape" :
            AddEtape_View(reponse);
            break;
        case "register_rabais" :
            RegisterRabais_View(reponse);
            break;
        case "register_pays" :
            EnregisterPays_View(reponse);
            break;
        case "del_rabais" :
            DelRabais_View();
            break;
        case "btn_add_jour" :
            AddJour_View(reponse);
            break;
        case "register_ville" :
            EnregisterVille_View(reponse);
            break;
        case "register_jour" :
            alert("Jour a été ajouté...");
            $('#modal_add_jour').modal('hide');
            DetailCircuit(reponse.idCircuit);
            break;
    }
};

function EnregisterVille_View(reponse){
    alert("Ville a été ajouté...");
    $("#ViewNewVille").css("display", "none");
    $("#SelectVille").html(reponse.list_ville);
}

function EnregistreTheme_View(reponse){
    alert("Thème a été ajouté...");
    $("#ViewNewTheme").css("display", "none");
    $("#SelectTheme").html(reponse.list_theme);
}

function EnregisterPays_View(reponse) {
    alert("Pays a été ajouté...");
    $("#ViewNewPays").css("display", "none");
    $("#SelectPays").html(reponse.list_pays);
}

function AddJour_View(reponse) {
    $("#div_modal_add_jour").html(reponse.modal_add_jour);
    $('#modal_add_jour').modal('show');
    $('.modal-backdrop').css('position', 'static');
    $('#ViewNewVille').css('display', 'none');

}

function DelRabais_View() {
    location.reload();
}

function AddCircuit_View(reponse){
    document.documentElement.scrollTop = 0;
    $("#list-circuit").html(reponse.form_add_circuit);
    $("#ajouter-circuit").html("");
    $("#ajouter-etape").html("");
}

function AddEtape_View(reponse){
    document.documentElement.scrollTop = 0;
    $("#list-circuit").html(reponse.form_add_etape);
    $("#ajouter-circuit").html("");
    $("#ajouter-etape").html("");

}

function ListerCircuit_View(reponse){
    $("#list-circuit").html(reponse.list_circuit);
}

function DetailCircuit_View(reponse) {
    document.documentElement.scrollTop = 0;
    $("#list-circuit").html("");
    $("#ajouter-circuit").html(reponse.detail_circuit);
    $("#ajouter-etape").html(reponse.detail_etape);
}

function ModCircuit_View(reponse) {
    $("#form-circuit").html(reponse.form_edit_circuit);
}

function RegisterRabais_View() {
    location.reload();
}