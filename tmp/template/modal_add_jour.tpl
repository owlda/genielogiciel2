<!-- Modal -->
<div class="modal fade" id="modal_add_jour" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{$voc["btn_add_day"]}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="FormAddJour">
                    <div class="form-group" style="display: inline;">
                        <label style="display: inline;">{$voc["lb_number"]}</label>
                        <input type="number" value="0" class="form-control" id="num_jour" name="num_jour" style="width: 150px;">
                    </div>
                    <br>
                    <div class="form-group" style="display: inline;">
                        <label>{$voc["lb_pays"]}</label>
                        <select readonly="true" class="form-control"  id="SelectPays" name="SelectPays" style="width:30%;">
                            <option value="{$idPays}">{$NomPays}</option>
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <label style="display: block">{$voc["lb_ville"]}</label>
                        <select class="form-control"  id="SelectVille" name="SelectVille" style="width:50%;display: inline;">
                            {include file='select_villes.tpl' arr_list_ville=$arr_list_ville}
                        </select>
                        <input type="button" value="{$voc['btn_add_ville']}" class="btn btn-primary" style="display: inline" onclick="BtnViewNewVille()">
                    </div>

                    <div class="form-group animated zoomInRight" id="ViewNewVille" style="width: 50%;margin-left: 10%;display: none;">
                        <label>Nouvelle ville:</label>
                        <input type="text" class="form-control" id="NewVille">
                        <br>
                        <input type="button" value="{$voc['btn_submit']}" id="btn_add_theme" class="btn btn-success" onclick="BtnAddVille({$idPays})">
                        <input type="button" value="{$voc['btn_cancel']}" id="btn_not_theme" class="btn btn-secondary" onclick="BtnNotVille()">
                    </div>

                    <div class="form-group">
                        <label id="label_description_circuit">Description:</label><br>
                        <textarea id="NicEdit" name="NicEdit" cols="70" rows="5" style="width: 60%" ></textarea>
                    </div>

                    <div class="form-group" style="display: inline;">
                        <label style="display: inline;">ID_Pays:</label>
                        <input type="text" value="{$idPays}" class="form-control" id="input_id_pays" name="input_id_pays" style="width: 60px;display: inline;" readonly>
                    </div>

                    <div class="form-group" style="display: inline;margin-left: 10px;">
                        <label style="display: inline;">ID_Etape:</label>
                        <input type="text" value="{$idEtape}" class="form-control" id="input_id_etape" name="input_id_etape" style="width: 60px;display: inline;" readonly>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="register_jour" class="btn btn-success" onclick="BtnAddJour({$idEtape});">{$voc['btn_submit']}</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{$voc['btn_cancel']}</button>
            </div>
        </div>
    </div>
</div>



