var Vue=function(reponse){

    switch(reponse.action){
        case "addcircuit" :
            AddCircuit_View(reponse);
            break;
    }
};


function AddCircuit_View(reponse){
    $("#form-circuit").html(reponse.form);
};