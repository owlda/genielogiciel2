var membreVue = function(reponse){
    switch(reponse.action)
    {
        case 'devenirmembre':
            if(reponse.msg === 'NOK')
                alert("Les mot de passe ne correspondent pas");
            break;
    }
}