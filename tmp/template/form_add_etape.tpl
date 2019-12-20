<div style="padding: 20px">
<a href="../pages/list-circuit.php">Liste des circuit</a>
<h1>Ajouter un étape</h1>
    <div style="width: 50%;height: 50%">{include file='carousel-circuit.tpl'}</div>
{*<button id="verification-NicEdit">Verification Editor</button>*}
<form class="animated zoomInRight" id="AddFormEtape">

    <div class="form-group animated zoomInRight">
        <label>Titre</label>
        <input type="text" class="form-control" id="input_title" name="input_title" >
    </div>

    <div class="form-group">
        <label style="display: block">Pays:</label>
        <select class="form-control"  id="SelectPays" name="SelectPays" style="width:30%;display: inline;">
            {foreach from=$arr_pays key=k item=v}
                <option value="{$k}">
                    {$v}
                </option>
            {/foreach}
        </select>
        <input type="button" value="Ajouter un pays" class="btn btn-primary" style="display: inline" onclick="BtnViewNewPays()">
    </div>

    <div class="form-group animated zoomInRight" id="ViewNewPays" style="width: 30%;margin-left: 10%;display: none;">
        <label>Nouveau pays:</label>
        <input type="text" class="form-control" id="NewPays">
        <br>
        <input type="button" value="Enregistrer" id="btn_add_pays" class="btn btn-success" onclick="BtnAddPays()">
        <input type="button" value="Annuler" id="btn_not_pays" class="btn btn-secondary" onclick="BtnNotPays()">
    </div>

{*    <div class="form-group animated zoomInRight">
        <label>Prix:</label>
        <input type="text" class="form-control" id="input_title" name="input_title" style="width: 100px" >
    </div>*}

    <div class="form-group">
        <label>Date de début:</label>
        <div class="col-10">
            <input class="form-control" style="width: 250px" type="datetime-local" id="input_date" name="input_date">
        </div>
    </div>

    <div>
        <label for="exampleInputEmail1" id="label_description_circuit">Description:</label>
        <textarea id="NicEdit" cols="70" rows="5" style="width: 60%" ></textarea>
    </div>
    <br>
    <input type="button" value="Enregistrer" id="btn_add_circuit" class="btn btn-success"  onclick="BtnAddEtape()">
</form>
</div>
<script src="../libs/nicEdit-latest.js"></script>
<script src="../js/ivan-js.js"></script>