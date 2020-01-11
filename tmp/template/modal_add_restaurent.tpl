<div class="modal fade" id="modal_add_restaurent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ajouter un restaurent</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="FormAddRestaurent">
                    <div class="row">
                        <div class="col">
                            <label>Pays:</label>
                            <select readonly="true" class="form-control"  id="SelectPays" name="SelectPays" >
                                <option value="{$idPays}">{$NomPays}</option>
                            </select>
                        </div>
                        <div class="col">
                            <label>Ville:</label>
                            <select class="form-control"  id="SelectVille" name="SelectVille" >
                                {foreach $arr_list_ville as $ville}
                                    <option value="{$ville.idVille}" {if $ville.idVille == $select_ville_value} selected="selected" {/if}> {$ville.nom}</option>
                                {/foreach}
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label style="display: block">Restaurent:</label>
                        <select class="form-control"  id="SelectRestaurent" name="SelectRestaurent" style="width:50%;display: inline;">
                            <option value="AAAA">AAAA</option>
                        </select>
                        <input type="button" value="Ajouter un restaurent" class="btn btn-primary" style="display: inline" onclick="BtnViewNewRestaurent()">
                    </div>

                    <div class="form-group" style="display: inline;">
                        <label style="display: inline;">Site:</label>
                        <a href="#"><span>youtube.com</span></a>

                    </div>
                    <div class="form-group animated zoomInRight" id="ViewNewRestaurent" style="width: 50%;margin-left: 10%;display: block;">
                        <label>Nouveau restaurent:</label>
                        <input type="text" class="form-control" id="NewNameRestaurent">
                        <label>Site:</label>
                        <input type="text" class="form-control" id="NewSiteRestaurent">
                        <br>
                        <input type="button" value="Annuler" id="btn_not_hotel" class="btn btn-secondary" onclick="BtnNotRestaurent()">
                        <input type="button" value="Enregistrer" id="btn_add_hotel" class="btn btn-success" onclick="BtnAddRestaurent()">
                    </div>
                    <br>
                    <br>
                    <div class="form-group" style="display: inline;">
                        <label style="display: inline;">ID_Pays:</label>
                        <input type="text" value="{$idPays}" class="form-control" id="input_id_pays" name="input_id_pays" style="width: 60px;display: inline;" readonly>
                    </div>

                    <div class="form-group" style="display: inline;margin-left: 10px;">
                        <label style="display: inline;">ID_Jour:</label>
                        <input type="text" value="{$idJour}" class="form-control" id="input_id_etape" name="input_id_jour" style="width: 60px;display: inline;" readonly>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <button type="button" id="register_jour" class="btn btn-success">Enregistrer</button>
            </div>
        </div>
    </div>
</div>