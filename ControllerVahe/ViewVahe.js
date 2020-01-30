var membreVue = function(reponse){
    switch(reponse.action)
    {
        case 'devenirmembre':
            if(reponse.msg === 'NOK')
                alert("Les mot de passe ne correspondent pas");
            if(reponse.msg == 'OK')
            {
                window.location.href = '../index_ren.php';
            }
            break;
        case 'connecter':
            if(reponse.msg=='BADPASS')
            {
                alert('Mauvais mot de passe ou courriel')
            }
            else if(reponse.msg == 'NOTMEMBER')
            {
                alert('Vous n\'étes pas membre');
            }
            else
            {
                // si le requete marche et le mot de passe est correct on dirige vers le site du client
                window.location.href = '../index_client_vahe.php';

            }
            break;
        case 'i_connecter':

            $("#menu").html(reponse.temp);
            $("#card1").html(reponse.card1);
            break;
        case 'deconnect':
            window.location.href = 'index_ren.php';
        default:
            break;
    }
}