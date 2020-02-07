function GetUrlControllerAdmin() {
    var loc = window.location.pathname;
    var dir = loc.substring(0, loc.lastIndexOf('/'));
    var dir = dir.substring(0, dir.length-1);
    var dir = dir.substring(0, dir.lastIndexOf('/'));
    return dir + '/ControllerIvan/AdminControllerIvan/AdminController.php';
}

function GetUrlControllerCart() {
    var loc = window.location.pathname;
    var dir = loc.substring(0, loc.lastIndexOf('/'));
    return dir + '/ControllerIvan/AdminControllerIvan/CartController.php';
}

//TODO Load form
//form for edit un circuit
function LoadModifierCircuit() {
    var FormModCircuit = new FormData();
    var url_string = window.location.href;
    var url = new URL(url_string);
    FormModCircuit.append('action','modcircuit');
    FormModCircuit.append('idCircuit',url.searchParams.get("id"));
    var controller = GetUrlControllerAdmin();
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
//form for add un circuit
function LoadAddCircuit(){
    var FormAddCircuit = new FormData();
    FormAddCircuit.append('action','addcircuit');
    var controller = GetUrlControllerAdmin();
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
//form for Add un etape
function LoadAddEtape(idCircuit){
    var FormAddEtape = new FormData();
    FormAddEtape.append('action','addetape');
    FormAddEtape.append('idCircuit',idCircuit);
    var controller = GetUrlControllerAdmin();
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
//Detail un circuit
function DetailCircuit(idCircuit) {
    var FormCircuit = new FormData();
    FormCircuit.append('action', 'detail_circuit');
    FormCircuit.append('idCircuit', idCircuit);
    var controller = GetUrlControllerAdmin();
    $.ajax({
        type: 'POST',
        url: controller,
        data: FormCircuit,
        dataType: 'json',
        async: false,
        cache: false,
        contentType: false,
        processData: false,
        success: function (reponse) {
            Vue(reponse);
        },
        error: function (xhr, error) {
            console.log(error);
            console.log(xhr);
        }
    });
}
//Full stat un circuit by id
function BtnFullCircuit(){
    var FormCircuit = new FormData(FormFullCircuit);
    FormCircuit.append('action', 'table_circuit');
    var controller = GetUrlControllerAdmin();
    $.ajax({
        type: 'POST',
        url: controller,
        data: FormCircuit,
        dataType: 'json',
        async: false,
        cache: false,
        contentType: false,
        processData: false,
        success: function (reponse) {
            Vue(reponse);
        },
        error: function (xhr, error) {
            console.log(error);
            console.log(xhr);
        }
    });
}
//Detail jour by idJour
function ShowDetailJourChange(idJourHtmlSelectChange, idJour, idVilleJour, NameJour, idPaysEtape, idEtape){
    var FormDetailJour = new FormData();
    FormDetailJour.append('action','detail_jour_change');
    FormDetailJour.append('idJour',idJour);
    FormDetailJour.append('idEtape',idEtape);
    FormDetailJour.append('idJourSelectChange',idJourHtmlSelectChange);
    FormDetailJour.append('idVilleJour',idVilleJour);
    FormDetailJour.append('NameJour',NameJour);
    FormDetailJour.append('idPaysEtape',idPaysEtape);
    var controller = GetUrlControllerAdmin();
    $.ajax({
        type : 'POST',
        url : controller,
        data : FormDetailJour,
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

//TODO Load modal
//modal form for Add un jour
function LoadModalAddJour(idPays, idEtape){
    var FormAddJour = new FormData();
    FormAddJour.append('action','btn_add_jour');
    FormAddJour.append('idPays', idPays);
    FormAddJour.append('idEtape', idEtape);
    var controller = GetUrlControllerAdmin();

    $.ajax({
        type : 'POST',
        url : controller,
        data : FormAddJour,
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
//modal form for Add un restaurent
function LoadModalAddRestaurent(idPaysEtape, idVilleJour, idJour){
    var FormAddRestaurent = new FormData();
    FormAddRestaurent.append('action','btn_add_restaurent');
    FormAddRestaurent.append('idPaysEtape', idPaysEtape);
    FormAddRestaurent.append('idVilleJour', idVilleJour);
    FormAddRestaurent.append('idJour', idJour);
    var controller = GetUrlControllerAdmin();

    $.ajax({
        type : 'POST',
        url : controller,
        data : FormAddRestaurent,
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
//modal form for Add une activité
function LoadModalAddActivity(idPaysEtape, idVilleJour, idJour){
    var FormAddActivity = new FormData();
    FormAddActivity.append('action','btn_add_activity');
    FormAddActivity.append('idPaysEtape', idPaysEtape);
    FormAddActivity.append('idVilleJour', idVilleJour);
    FormAddActivity.append('idJour', idJour);
    var controller = GetUrlControllerAdmin();

    $.ajax({
        type : 'POST',
        url : controller,
        data : FormAddActivity,
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
//modal form for Add un hotel
function LoadModalAddHotel(idPaysEtape, idVilleJour, idJour){
    var FormAddHotel = new FormData();
    FormAddHotel.append('action','btn_add_hotel');
    FormAddHotel.append('idPaysEtape', idPaysEtape);
    FormAddHotel.append('idVilleJour', idVilleJour);
    FormAddHotel.append('idJour', idJour);
    var controller = GetUrlControllerAdmin();

    $.ajax({
        type : 'POST',
        url : controller,
        data : FormAddHotel,
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
//modal supprimer un rabais
function BtnDelRabais(idCircuit) {
    var FormDelRabais = new FormData();
    FormDelRabais.append('action','btn_del_rabais');
    FormDelRabais.append('idCircuit',idCircuit);
    var controller = GetUrlControllerAdmin();

    $.ajax({
        type : 'POST',
        url : controller,
        data : FormDelRabais,
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
//modal show cart
function ShowCart(){
    var formiConnexion = new FormData();
    formiConnexion.append('action','show_cart_modal');
    $.ajax({
        type : 'POST',
        url : GetUrlControllerCart(),
        data : formiConnexion,
        contentType : false,
        processData : false,
        dataType : 'json',
        success : function (reponse){
            VueCart(reponse);
        },
        error: function (xhr, error) {
            alert("COUNT_ERROR!");
        }
    });
    alert("onclick ShowCart();");
}

//TODO Enregistrer
//Enregistrer un restaurent for jour
function BtnAddRestaurentForJour(){
    var BtnAddRestaurentForJour = new FormData(FormAddRestaurent);
    BtnAddRestaurentForJour.append('action','btn_register_restaurent_jour');
    BtnAddRestaurentForJour.append('site', $('#text_site_restaurent').text());
    var controller = GetUrlControllerAdmin();

    $.ajax({
        type : 'POST',
        url : controller,
        data : BtnAddRestaurentForJour,
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
//Enregistrer une activity for jour
function BtnAddActivityForJour(){
    var BtnAddActivityForJour = new FormData(FormAddActivity);
    BtnAddActivityForJour.append('action','btn_register_activity_jour');
    var controller = GetUrlControllerAdmin();

    $.ajax({
        type : 'POST',
        url : controller,
        data : BtnAddActivityForJour,
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
//Enregistrer un hotel for jour
function BtnAddHotelForJour(){
    var BtnAddHoteltForJour = new FormData(FormAddHotel);
    BtnAddHoteltForJour.append('action','btn_register_hotel_jour');
    BtnAddHoteltForJour.append('site', $('#text_site_hotel').text());
    var controller = GetUrlControllerAdmin();

    $.ajax({
        type : 'POST',
        url : controller,
        data : BtnAddHoteltForJour,
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
//Enregistrer un nouveau restaurent
function BtnAddRestaurent(idVille){
    var FormAddRestaurent = new FormData();
    FormAddRestaurent.append('action','btn_register_restaurent');
    FormAddRestaurent.append('idVille', idVille);
    FormAddRestaurent.append('NewNameRestaurent', $('#NewNameRestaurent').val());
    FormAddRestaurent.append('NewSiteRestaurent', $('#NewSiteRestaurent').val());
    var controller = GetUrlControllerAdmin();

    $.ajax({
        type : 'POST',
        url : controller,
        data : FormAddRestaurent,
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
//Enregistrer un nouveau hotel
function BtnAddHotel(idVille){
    var FormAddRestaurent = new FormData();
    FormAddRestaurent.append('action','btn_register_hotel');
    FormAddRestaurent.append('idVille', idVille);
    FormAddRestaurent.append('NewNameHotel', $('#NewNameHotel').val());
    FormAddRestaurent.append('NewSiteHotel', $('#NewSiteHotel').val());
    var controller = GetUrlControllerAdmin();

    $.ajax({
        type : 'POST',
        url : controller,
        data : FormAddRestaurent,
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
//Enregistrer un nouveau statut
function BtnAddStatus(){
    var FormAddStatut = new FormData();
    FormAddStatut.append('action','btn_register_statut');
    FormAddStatut.append('NewIdStatut', $('#NewIdStatut').val());
    FormAddStatut.append('NewNameStatut', $('#NewNameStatut').val());
    var controller = GetUrlControllerAdmin();

    $.ajax({
        type : 'POST',
        url : controller,
        data : FormAddStatut,
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
//Enregistrer un nouveau theme
function BtnAddTheme(){
    var FormAddTheme = new FormData();
    FormAddTheme.append('action','btn_register_theme');
    let new_theme = $('#NewTheme').val();
    FormAddTheme.append('new_theme',new_theme);
    var controller = GetUrlControllerAdmin();

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
//Enregistrer un nouveau pays
function BtnAddPays(){
    var FormAddPays = new FormData();
    FormAddPays.append('action','btn_register_pays');
    let new_pays = $('#NewPays').val();
    FormAddPays.append('new_pays', new_pays);
    var controller = GetUrlControllerAdmin();

    $.ajax({
        type : 'POST',
        url : controller,
        data : FormAddPays,
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
//Enregistrer une nouvelle ville
function BtnAddVille(idPays){
    var FormAddVille = new FormData();
    FormAddVille.append('action','btn_register_ville');
    FormAddVille.append('idPays', idPays);
    let new_ville = $('#NewVille').val();
    FormAddVille.append('new_ville', new_ville);
    var controller = GetUrlControllerAdmin();

    $.ajax({
        type : 'POST',
        url : controller,
        data : FormAddVille,
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
//Enregistrer un nouveau circuit
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
//Enregistrer un etape
function BtnAddEtape(idCircuit){
    var FormAddEtape = new FormData(AddFormEtape);
    FormAddEtape.append('action','btn_register_etape');
    FormAddEtape.append('idCircuit', idCircuit);
    var nicE = new nicEditors.findEditor('NicEdit');
    FormAddEtape.append('description',nicE.getContent());
    FormAddEtape.append('id_pays', $('#SelectPays').val());
    var controller = GetUrlControllerAdmin();

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
//Enregistrer un jour
function BtnAddJour(idEtape){
    var FormJourAdd = new FormData(FormAddJour);
    FormJourAdd.append('action','btn_register_jour');
    FormJourAdd.append('idEtape',idEtape);
    var controller = GetUrlControllerAdmin();

    $.ajax({
        type : 'POST',
        url : controller,
        data : FormJourAdd,
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
//Enregistrer un rabais
function BtnRegistreRabais(idCircuit){
    var FormAddRabais = new FormData(FormAddRabais);
    FormAddRabais.append('action','btn_register_rabais');
    FormAddRabais.append('idCircuit',idCircuit);
    FormAddRabais.append('pourcentage',$('#input_pourcentage').val());
    FormAddRabais.append('dateDebut',$('#input_date_start').val());
    FormAddRabais.append('dateFin',$('#input_date_end').val());
    var controller = GetUrlControllerAdmin();

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

//TODO Lister
//Lister des circuit
function ListerCircuit(){
    var FormAddCircuit = new FormData();
    FormAddCircuit.append('action','list_circuit');
    var controller = GetUrlControllerAdmin();
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

//Modifier un jour
function BtnEditJour(idJour, idEtape){
    var FormJourAdd = new FormData(FormAddJour);
    FormJourAdd.append('action','btn_register_jour');
    FormJourAdd.append('idEtape',idEtape);
    var controller = GetUrlControllerAdmin();

    $.ajax({
        type : 'POST',
        url : controller,
        data : FormJourAdd,
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

function addpanier(id) {
    var formiConnexion = new FormData();
    formiConnexion.append('action','addpanier');
    formiConnexion.append('idCircuit', id);
    $.ajax({
        type : 'POST',
        url : GetUrlControllerCart(),
        data : formiConnexion,
        contentType : false,
        processData : false,
        dataType : 'json',
        success : function (reponse){

            VueCart(reponse);
        },
        error: function (xhr, error) {
            alert("LOL_CART");
        }
    });
}

function PanierCount() {
    var formiConnexion = new FormData();
    formiConnexion.append('action','panier_count');
    $.ajax({
        type : 'POST',
        url : GetUrlControllerCart(),
        data : formiConnexion,
        contentType : false,
        processData : false,
        dataType : 'json',
        success : function (reponse){
            VueCart(reponse);
        },
        error: function (xhr, error) {
            alert("COUNT_ERROR!");
        }
    });
}




