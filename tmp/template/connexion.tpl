<form id="formConnexion" name="formConnexion">
    <h4>Connectez-vous</h4><br>
    <a href="url">
        <img src="./images/ContinuerAvecFacebook.png"
             alt="Continuer avec Facebook"></a><br><br>
    <a href="url">
        <img src="./images/ContinuerAvecGoogle.png"
             alt="Continuer avec Google"></a><br><br>
    ou<br><br>

    <label for="courrielCnx">Adresse de courriel</label><br>
    <input type="text" id="courrielCnx" name="courrielCnx"><br>
    <span id="erreurCourrielCnx"><br>

    <label for="motPasseCnx">Mot de passe</label><br>
    <input type="password" id="motPasseCnx" name="motPasseCnx"><br><br>
    <a href="#" onclick="afficherFormMotPasse()">
        Mot de passe oubliée ?</a><br><br>

    <button type="button" class="btn btn-primary">Connexion</button>
    &nbsp &nbsp &nbsp &nbsp ou &nbsp &nbsp &nbsp &nbsp
<a href="#" onclick="afficherFormCreerCompte()">créer un compte</a>
</form>