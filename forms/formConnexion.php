<form id="formConnexion" name="formConnexion">
    <button type="button" class="close" data-dismiss="modal"
            onclick="fermerForms()">&times;
    </button>
    <h4>Connectez-vous</h4><br>
    <a href="#">
        <img src="../images/ContinuerAvecFacebook.png"
             alt="Continuer avec Facebook"></a><br><br>

<!--    <div class="g-signin2" data-width="300" data-height="50"-->
<!--         data-longtitle="false" data-theme="dark"></div>-->

    <!-- In the callback, you would hide the gSignInWrapper element on a
  successful sign in -->
    <div id="gSignInWrapper">
        <span class="label"> </span>
        <div id="customBtn" class="customGPlusSignIn">
            <span class="icon"></span>
<!--            <span class="buttonText">Continuer avec Google</span>-->
        </div>
    </div>
    <div id="name"></div>
    <script>startApp();</script>

<!--    <br><br>-->
<!--    <a href="#">-->
<!--        <img src="./images/ContinuerAvecGoogle.png"-->
<!--             alt="Continuer avec Google"></a>-->
    <br>
    ou<br><br>

    <label for="courrielCnx">Adresse de courriel</label><br>
    <input type="text" id="courrielCnx" name="courrielCnx"><br>
    <span id="erreurCourrielCnx"><br>

    <label for="motPasseCnx">Mot de passe</label><br>
    <input type="password" id="motPasseCnx" name="motPasseCnx"><br><br>
    <a href="#" onclick="afficherFormMotPasse()">
        Mot de passe oubliée ?</a><br><br>

    <button type="button" class="btn btn-primary" onclick="connecter()">Connexion</button>
    &nbsp &nbsp &nbsp &nbsp ou &nbsp &nbsp &nbsp &nbsp
<a href="#" onclick="afficherFormCreerCompte()">créer un compte</a>
</form>

<script src="https://apis.google.com/js/platform.js?onload=renderButton"
        async defer></script>
<?php
