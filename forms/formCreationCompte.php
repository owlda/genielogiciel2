<form id="formCreationCompte" name="formCreationCompte">
    <button type="button" class="close" data-dismiss="modal"
            onclick="fermerForms()">&times;</button>
    <h4>Créez votre compte</h4><br>

    <label for="txtPrenomNouv">Prénom</label><br>
    <input type="text" id="txtPrenomNouv" name="txtPrenomNouv"><br><br>

    <label for="txtNomNouv">Nom</label><br>
    <input type="text" id="txtNomNouv" name="txtNomNouv"><br><br>

    <label for="txtCourrielNouv">Adresse de courriel</label><br>
    <input type="text" id="txtCourrielNouv" name="txtCourrielNouv"><br><br>

    <label for="txtTelephoneNouv">Téléphone</label><br>
    <input type="text" id="txtTelephoneNouv" name="txtTelephone"><br><br>

    <label for="txtMotPasseNouv">Mot de passe</label><br>
    <input type="password" id="txtMotPasseNouv" name="txtMotPasseNouv"><br><br>

    <label for="txtMotPasseNouvConf">Confirmer le mot de passe</label><br>
    <input type="password" id="txtMotPasseNouvConf" name="txtMotPasseConf"><br><br>

    <label for="txtAdresse">Adresse</label><br>
    <input type="text" id="txtAdresse" name="txtAdresse"><br><br>

    <label for="txtVille">Ville</label><br>
    <input type="text" id="txtVille" name="txtVille"><br><br>

    <label for="txtPays">Pays</label><br>
    <input type="text" id="txtPays" name="txtPays"><br><br>

    <label for="txtCodePostal">Code postal</label><br>
    <input type="text" id="txtCodePostal" name="txtCodePostal"><br><br>

    <button type="button" class="btn btn-primary" onclick="requetEnregistrerMembre()">Créer compte</button>
    &nbsp ou &nbsp
    <a href="#" onclick="afficherFormConnexion()">utiliser un compte existant</a>
</form>

<?php
