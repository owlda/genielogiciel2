var Vue=function(reponse){

    switch(reponse.action){
        case "addcircuit" :
            AddCircuit_View(reponse);
            break;
        case "register_theme" :
            Enregistre_View(reponse);
            break;
        case "list_circuit" :
            ListerCircuit_View(reponse);
            break;
    }
};


function AddCircuit_View(reponse){
    $("#form-circuit").html(reponse.form);
};

function Enregistre_View(reponse){
    alert("Thème a été ajouté...");
    $("#ViewNewTheme").css("display", "none");
    $("#SelectTheme").html(reponse.list_theme);
};

function ListerCircuit_View(reponse){
    $("#list-circuit").html(reponse.list_circuit);

}