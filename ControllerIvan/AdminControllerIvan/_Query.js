function GetUrlController() {
    var loc = window.location.pathname;
    var dir = loc.substring(0, loc.lastIndexOf('/'));
    var dir = dir.substring(0, dir.length-1);
    var dir = dir.substring(0, dir.lastIndexOf('/'));
    return dir + '/ControllerIvan/AdminControllerIvan/AdminController.php';
}

//TODO Load form for edit un circuit
function LoadModifierCircuit() {
    var FormModCircuit = new FormData();
    var url_string = window.location.href;
    var url = new URL(url_string);
    FormModCircuit.append('action','modcircuit');
    FormModCircuit.append('idCircuit',url.searchParams.get("id"));
    var controller = GetUrlController();
    $.ajax({
        type : 'POST',
        url : controller,
        data : FormModCircuit,
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

//TODO Load form for add un circuit
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



//TODO Enregistrer un theme
function BtnAddTheme(){
    var FormAddTheme = new FormData();
    FormAddTheme.append('action','btn_register_theme');
    let new_theme = $('#NewTheme').val();
    FormAddTheme.append('new_theme',new_theme);
    var controller = GetUrlController();

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

//TODO Enregistrer un circuit
function BtnAddCircuit(){

    var FormAddCircuit = new FormData(AddFormCircuit);
    FormAddCircuit.append('action','btn_register_circuit');
    var nicE = new nicEditors.findEditor('NicEdit');
    FormAddCircuit.append('description',nicE.getContent());
    FormAddCircuit.append('id_theme', $('#SelectTheme').val());

    var loc = window.location.pathname;
    var dir = loc.substring(0, loc.lastIndexOf('/'));
    var dir = dir.substring(0, dir.length-1);
    var dir = dir.substring(0, dir.lastIndexOf('/'));
    var controller = dir + '/ControllerIvan/AdminControllerIvan/AdminController.php';

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

//TODO Lister des circuit
function ListerCircuit(){
    var FormAddCircuit = new FormData();
    FormAddCircuit.append('action','list_circuit');
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

//TODO Detail un circuit
function DetailCircuit() {

    var FormCircuit = new FormData();
    var url_string = window.location.href;
    var url = new URL(url_string);
    FormCircuit.append('action','detail_circuit');
    FormCircuit.append('idCircuit',url.searchParams.get("id"));
    var controller = GetUrlController();
    $.ajax({
        type : 'POST',
        url : controller,
        data : FormCircuit,
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

//TODO Load form for add un circuit
function LoadAddEtape(){
    var FormAddEtape = new FormData();
    FormAddEtape.append('action','addetape');
    var url_string = window.location.href;
    var url = new URL(url_string);
    FormAddEtape.append('idCircuit',url.searchParams.get("id"));
    var controller = GetUrlController();
    $.ajax({
        type : 'POST',
        url : controller,
        data : FormAddEtape,
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

//TODO Enregistrer un rabais
function BtnRegistreRabais(idCircuit){

    var FormAddRabais = new FormData(FormAddRabais);
    FormAddRabais.append('action','btn_register_rabais');
    FormAddRabais.append('idCircuit',idCircuit);
    FormAddRabais.append('pourcentage',$('#input_pourcentage').val());
    FormAddRabais.append('dateDebut',$('#input_date_start').val());
    FormAddRabais.append('dateFin',$('#input_date_end').val());
    var controller = GetUrlController();

    $.ajax({
        type : 'POST',
        url : controller,
        data : FormAddRabais,
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