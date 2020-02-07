

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
        // let FuncShow = 'ShowCart(' + reponse.idCircuit +');';

        $('#click_cart').attr('onclick', 'ShowCart()');
    }

    function ShowCart_View(reponse){

        alert(reponse.res);
    }
};