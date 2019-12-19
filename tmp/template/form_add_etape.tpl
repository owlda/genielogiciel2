<div style="padding: 20px">
<a href="../pages/list-circuit.php">Liste des circuit</a>
<h1>Ajouter un étape</h1>
<button id="verification-NicEdit">Verification Editor</button>
<form class="animated zoomInRight" id="AddFormCircuit">

    <div class="form-group animated zoomInRight">
        <label>NumeroEtape:</label>
        <input type="number" class="form-control" id="input_title" name="input_title" style="width: 100px" value="{$db_prix}">
    </div>

    <div class="form-group animated zoomInRight">
        <label>{$title}</label>
        <input type="text" class="form-control" id="input_title" name="input_title" value="{$db_titre}">
    </div>

    <div class="form-group animated zoomInRight">
        <label>Prix:</label>
        <input type="text" class="form-control" id="input_title" name="input_title" style="width: 100px" value="{$db_prix}">
    </div>

    <div class="form-group">
        <label>Date de début:</label>
        <div class="col-10">
            <input class="form-control" value="{$db_dateDepart}" style="width: 250px" type="datetime-local" id="input_date" name="input_date">
        </div>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Date de fin:</label>
        <div class="col-10">
            <input class="form-control" value="{$db_dateDepart}" style="width: 250px" type="datetime-local" id="input_date" name="input_date">
        </div>
    </div>

    <div class="form-group animated zoomInRight" style="width: 50px;">
        <label>Durée:</label>
        <input type="text" class="form-control" id="input_ville_depart" name="input_ville_depart" readonly><span>  jour(s)</span>
    </div>

    <div class="form-group">
        <label style="display: block">Pays:</label>
        <select class="form-control"  id="SelectPays" name="SelectPays" style="width:30%;display: inline;">
            {foreach from=$arr_pays key=k item=v}
                <option value="{$k}"
                        {if $k == $db_idStatutCircuit} selected="selected" {/if}>
                    {$v}
                </option>
            {/foreach}
        </select>
    </div>

    <div>
        <label for="exampleInputEmail1" id="label_description_circuit">Description:</label>
        <textarea id="NicEdit" cols="70" rows="5" style="width: 60%" >{$db_description}</textarea>
    </div>
    <div class="form-group">
        <label style="display: block">{$theme}</label>
        <select class="form-control"  id="SelectTheme" name="SelectTheme" style="width:30%;display: inline;">
            {foreach from=$arr_theme_circuit key=k item=v}
                <option value="{$k}"
                        {if $k == $db_idTheme} selected="selected" {/if}>
                    {$v}
                </option>
            {/foreach}
        </select>
        <input type="button" value="{$btn_add_theme}" class="btn btn-primary" style="display: inline" onclick="BtnViewNewPays()">
    </div>

    <div class="form-group animated zoomInRight" id="ViewNewTheme" style="width: 30%;margin-left: 10%;">
        <label>Nouveau pays</label>
        <input type="text" class="form-control" id="NewPays">
        <br>
        <input type="button" value="{$btn_submit}" id="btn_add_pays" class="btn btn-success" onclick="BtnAddPays()">
        <input type="button" value="Annuler" id="btn_not_pays" class="btn btn-secondary" onclick="BtnNotPays()">
    </div>

    <div class="form-group animated zoomInRight" style="width: 35%">
        <label>{$ville_depart}</label>
        <input type="text" class="form-control" id="input_ville_depart" name="input_ville_depart" value="{$db_pointDepart}">
    </div>

    <input type="button" id="btn_add_circuit" class="btn btn-primary" value="{$btn_submit}" onclick="BtnAddCircuit()">
</form>
</div>
<script src="../libs/nicEdit-latest.js"></script>
<script src="../js/ivan-js.js"></script>