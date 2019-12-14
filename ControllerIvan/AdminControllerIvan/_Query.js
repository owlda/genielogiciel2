function GetUrlController() {
    var loc = window.location.pathname;
    var dir = loc.substring(0, loc.lastIndexOf('/'));
    var dir = dir.substring(0, dir.length-1);
    var dir = dir.substring(0, dir.lastIndexOf('/'));
    return dir + '/ControllerIvan/AdminControllerIvan/AdminController.php';
}

function LoadAddCircuit(){
    var FormAddCircuit = new FormData();
    FormAddCircuit.append('action','addcircuit');
    var controller = GetUrlController();
    $.ajax({
        type : 'POST',
        url : controller,
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

function BtnAddTheme(){

    var FormAddTheme = new FormData();
    FormAddTheme.append('action','btn_register_theme');
    let new_theme = $('#NewTheme').val();
    FormAddTheme.append('new_theme',new_theme);

    var loc = window.location.pathname;
    var dir = loc.substring(0, loc.lastIndexOf('/'));
    var dir = dir.substring(0, dir.length-1);
    var dir = dir.substring(0, dir.lastIndexOf('/'));
    var controller = dir + '/ControllerIvan/AdminControllerIvan/AdminController.php';

    $.ajax({
        type : 'POST',
        url : controller,
        data : FormAddTheme,
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