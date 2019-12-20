var Vue=function(reponse){

    switch(reponse.action){
        case "addcircuit" :
            AddCircuit_View(reponse);
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
    }
};

function DelRabais_View() {
    location.reload();
}


function AddCircuit_View(reponse){
    $("#form-circuit").html(reponse.form_add_circuit);
};

function AddEtape_View(reponse){
    $("#form-etape").html(reponse.form_add_etape);
};
function EnregistreTheme_View(reponse){
    alert("Thème a été ajouté...");
    $("#ViewNewTheme").css("display", "none");
    $("#SelectTheme").html(reponse.list_theme);
};

function EnregisterPays_View(reponse) {

    alert("Pays a été ajouté...");
    $("#ViewNewPays").css("display", "none");
    $("#SelectPays").html(reponse.list_pays);
}

function ListerCircuit_View(reponse){
    $("#list-circuit").html(reponse.list_circuit);
};

function DetailCircuit_View(reponse) {
    $("#ajouter-circuit").html(reponse.detail_circuit);
    $("#ajouter-etape").html(reponse.detail_etape);
}

function ModCircuit_View(reponse) {
    $("#form-circuit").html(reponse.form_edit_circuit);
}

function RegisterRabais_View() {
    location.reload();
}