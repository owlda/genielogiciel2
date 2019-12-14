<h1>{$h1_circuit}</h1>
<button id="verification-NicEdit">Verification Editor</button>
<form class="animated zoomInRight" >

    <div class="form-group animated zoomInRight">
        <label for="exampleInputEmail1">{$title}</label>
        <input type="text" class="form-control">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Date:</label>
        <div class="col-10">
            <input class="form-control" style="width: 200px" type="date" data-date-format="DD MMMM YYYY" id="date-input">
        </div>
    </div>
    <div>
        <label for="exampleInputEmail1" id="label_description_circuit">Description:</label>
        <textarea id="NicEdit" cols="70" rows="5" style="width: 60%" >Some Sample Text</textarea>
    </div>
    <div class="form-group">
        <label style="display: block">{$theme}</label>
        <select class="form-control" style="width:30%;display: inline">
            {foreach from=$arr_theme_circuit key=k item=v}
                <option value="{$k}">{$v}</option>
            {/foreach}
        </select>
        <input type="button" value="{$btn_add_theme}" class="btn btn-primary" style="display: inline" onclick="BtnViewNewTheme()">
    </div>
    <div class="form-group animated zoomInRight" id="ViewNewTheme" style="width: 30%;margin-left: 10%;display: none;">
        <label for="exampleInputEmail1">Nouveau thème</label>
        <input type="text" class="form-control" >
        <br>
        <input type="button" value="{$btn_submit}" id="btn_add_theme" class="btn btn-success" onclick="BtnAddTheme()">
        <input type="button" value="Annuler" id="btn_not_theme" class="btn btn-secondary" onclick="BtnNotTheme()">
    </div>
    <div class="form-group animated zoomInRight" style="width: 35%">
        <label for="exampleInputEmail1">{$ville_depart}</label>
        <input type="text" class="form-control">
    </div>
    <button type="submit" id="btn_add_circuit" class="btn btn-primary">{$btn_submit}</button>
</form>

<script src="../libs/nicEdit-latest.js"></script>
<script src="../js/ivan-js.js"></script>