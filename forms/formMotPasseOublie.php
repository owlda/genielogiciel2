<form id="formMotPasseOublie" name="formMotPasseOublie">
    <button type="button" class="close" data-dismiss="modal"
            onclick="fermerForms()">&times;</button>
    <h4>Mot de passe oublié ?</h4><br><br>
    <p>Entrez l'adresse courriel utilisée pour créer votre compte et nous vous
        enverrons un lien de réinitialisation</p>

    <label for="txtCourrielMotPasseOublie">Adresse de courriel</label><br>
    <input type="text" id="txtCourrielMotPasseOublie"
           name="txtCourrielMotPasseOublie"><br><br>
    <button type="button" class="btn btn-primary">Envoyer le lien</button>
    &nbsp ou &nbsp
    <a href="#" onclick="afficherFormConnexion()">retour à la page de connexion</a>
</form>


<?php
