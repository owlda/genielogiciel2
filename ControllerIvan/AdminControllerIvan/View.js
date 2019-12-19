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

    }
};


function AddCircuit_View(reponse){
    $("#form-circuit").html(reponse.arr_theme_circuit);
};
function EnregistreTheme_View(reponse){
    alert("Thème a été ajouté...");
    $("#ViewNewTheme").css("display", "none");
    $("#SelectTheme").html(reponse.list_theme);
};

function ListerCircuit_View(reponse){
    $("#list-circuit").html(reponse.list_circuit);
};

function DetailCircuit_View(reponse) {
    $("#ajouter_circuit").html(reponse.detail_circuit);
}

function ModCircuit_View(reponse) {
    $("#form-circuit").html(reponse.arr_theme_circuit);
}