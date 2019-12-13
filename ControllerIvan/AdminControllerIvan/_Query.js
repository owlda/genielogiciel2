function LoadAddCircuit(){
    var FormAddCircuit = new FormData();
    FormAddCircuit.append('action','addcircuit');

    $.ajax({
        type : 'POST',
        url : '../ControllerIvan/AdminControllerIvan/AdminController.php',
        data : FormAddCircuit,
        dataType : 'json',
        async : false,
        cache : false,
        contentType : false,
        processData : false,
        success : function (reponse){
            Vue(reponse);
        },
        error: function (xhr, error) {
            console.log(error);
            console.log(xhr);
        }
    });
}