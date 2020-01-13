var SupportArrayRestaurent = {};

function ChangeRestaurent(){
    $('#text_site_restaurent').text(SupportArrayRestaurent[$('#SelectRestaurent').val()]);
    $('#link_site_restaurent').attr('href', SupportArrayRestaurent[$('#SelectRestaurent').val()]);
}

function InitialSiteSelectRestaurent(arr_list_restaurent) {
    SupportArrayRestaurent = {};
    for (var restaurent of arr_list_restaurent){
        SupportArrayRestaurent[restaurent.idRestaurent] = restaurent.site;
    }
}

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
        case "register_restaurent" :
            InitialSiteSelectRestaurent(reponse.list_restaurent);
            EnregisterRestaurent_View(reponse);
            break;
        case "del_rabais" :
            DelRabais_View();
            break;
        case "btn_add_jour" :
            AddJour_View(reponse);
            break;
        case "btn_add_restaurent" :
            InitialSiteSelectRestaurent(reponse.arr_list_restaurent);
            AddRestaurent_View(reponse);
            break;
        case "register_ville" :
            EnregisterVille_View(reponse);
            break;
        case "register_jour" :
            alert("Jour a été ajouté...");
            $('#modal_add_jour').modal('hide');
            DetailCircuit(reponse.idCircuit);
            break;
        case "register_restaurent_jour" :
            alert("Restaurent a été ajouté pour le jour.");
            $('#modal_add_restaurent').modal('hide');
            $("#detail_restaurant_jour_" + reponse.idJour).html(reponse.detail_restaurant);
            break;
    }
};

//TODO Enregistrer
function EnregisterRestaurent_View(reponse){
    alert("Restaurent a été ajouté...");
    $("#ViewNewRestaurent").css("display", "none");
    $("#SelectRestaurent").html(reponse.arr_list_restaurent);
    ChangeRestaurent();
}
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



function AddRestaurent_View(reponse) {
    $("#div_modal_add_restaurent").html(reponse.modal_add_restaurent);
    $('#modal_add_restaurent').modal('show');
    $('.modal-backdrop').css('position', 'static');
    /*$('#ViewNewVille').css('display', 'none');*/
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