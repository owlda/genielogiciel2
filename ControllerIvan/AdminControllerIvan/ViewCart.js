

var VueCart=function(reponse){

    switch(reponse.action){
        case "add_to_cart" :
            AddToCart_View(reponse);
            break;
        case "panier_count" :
            AddToCart_View(reponse);
            break;
        case "show_cart" :
            ShowCart_View(reponse);
            break;
    }

    function AddToCart_View(reponse){
        $('#cart_client').text(reponse.count_item_cart);
        $('#click_cart').attr('onclick', 'ShowCart()');
    }

    function ShowCart_View(reponse){
        $('#cart_modal').html(reponse.modal_cart);
        $('#myModal_panier').modal('show');
        $('.modal-backdrop').css('position', 'static');
    }
};

function TestSchowCart() {
    $('#myModal_panier').modal('show');
    $('.modal-backdrop').css('position', 'static');

}