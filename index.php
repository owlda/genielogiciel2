<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/forms.css">
</head>

<body>

<form id="formConnexion" name="formConnexion">
    <h4>Connectez-vous</h4><br>
    <a href="url">
        <img src="./images/ContinuerAvecFacebook.png"
             alt="Continuer avec Facebook"></a><br><br>
    <a href="url">
        <img src="./images/ContinuerAvecGoogle.png"
             alt="Continuer avec Google"></a><br><br>
    ou<br><br>
    <input type="text" id="txtCourrielCnx" name="txtCourrielCnx"
           placeholder="Adresse de courriel"><br><br>
    <input type="password" id="txtMotPasseCnx" name="txtMotPasseCnx"
           placeholder="Mot de passe"><br><br>
    <a href="url">Courriel ou mot de passe oubliée ?</a><br><br>
    <button type="button" class="btn btn-primary">Connexion</button>
    &nbsp &nbsp &nbsp &nbsp ou &nbsp &nbsp &nbsp &nbsp
    <a href="url">créer un compte</a>
</form>


<form id="formCreationCompte" name="formCreationCompte">
    <h4>Créez votre compte</h4><br>
    <input type="text" id="txtPrenomNouv" name="txtPrenomNouv"
           placeholder="Prénom"><br><br>
    <input type="text" id="txtNomNouv" name="txtNomNouv"
           placeholder="Nom"><br><br>
    <input type="text" id="txtCourrielNouv" name="txtCourrielNouv"
           placeholder="Adresse de courriel"><br><br>
    <input type="password" id="txtMotPasseNouv" name="txtMotPasseNouv"
           placeholder="Mot de passe"><br><br>
    <input type="password" id="txtMotPasseNouvConf" name="txtMotPasseConf"
           placeholder="Confirmer le mot de passe"><br><br>
    <input type="text" id="txtAdresse" name="txtAdresse"
           placeholder="Adresse"><br><br>
    <input type="text" id="txtVille" name="txtVille"
           placeholder="Ville"><br><br>
    <input type="text" id="txtPays" name="txtPays"
           placeholder="Pays"><br><br>
    <input type="text" id="txtCodePostal" name="txtCodePostal"
           placeholder="Code postal"><br><br>
    <button type="button" class="btn btn-primary">Créer compte</button>
    &nbsp ou &nbsp
    <a href="url">utiliser compte existant</a>
</form>

</body>
</html>
<?php
