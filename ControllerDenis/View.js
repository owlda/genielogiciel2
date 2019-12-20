var View=function(reponse){

    switch(reponse.action){
        case "addDenis" :
            AddCircuit_ViewDenis(reponse);
            break;

    }
};

function AddCircuit_ViewDenis(reponse){
    $("#form-circuit").html(reponse.arr_theme_circuit);
};
