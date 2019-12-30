<!-- Modal -->
<div class="modal fade" id="modal_add_jour" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ajouter un jour</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="FormAddJour">

                    <div class="form-group">
                        <label style="display: block">Ville:</label>
                        <select class="form-control"  id="SelectPays" name="SelectPays" style="width:50%;display: inline;">
                            <option value="1111">1111</option>
                        </select>
                        <input type="button" value="Ajouter une ville" class="btn btn-primary" style="display: inline" onclick="BtnViewNewVille()">
                    </div>

                    <div class="form-group animated zoomInRight" id="ViewNewVille" style="width: 50%;margin-left: 10%;display: none;">
                        <label>Nouvelle ville:</label>
                        <input type="text" class="form-control" id="NewVille">
                        <br>
                        <input type="button" value="Enregistrer" id="btn_add_theme" class="btn btn-success" onclick="BtnAddVille()">
                        <input type="button" value="Annuler" id="btn_not_theme" class="btn btn-secondary" onclick="BtnNotVille()">
                    </div>

                    <div class="form-group">
                        <label id="label_description_circuit">Description:</label><br>
                        <textarea id="NicEdit" cols="70" rows="5" style="width: 60%" ></textarea>
                    </div>

                    <div class="form-group" style="display: inline;">
                        <label style="display: inline;">ID_Pays:</label>
                        <input type="text" value="111" class="form-control" id="input_id_pays" name="input_id_pays" style="width: 60px;display: inline;" readonly>
                    </div>

                    <div class="form-group" style="display: inline;margin-left: 10px;">
                        <label style="display: inline;">ID_Etape:</label>
                        <input type="text" value="111" class="form-control" id="input_id_pays" name="input_id_pays" style="width: 60px;display: inline;" readonly>
                    </div>

                    <div class="form-group" style="display: inline;margin-left: 10px;">
                        <label style="display: inline;">Pays:</label>
                        <select readonly="true" class="form-control"  id="SelectPays" name="SelectPays" style="width:30%;display: inline;">
                                <option value="111">1111</option>
                        </select>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <button type="button" id="register_rabais" class="btn btn-success">Enregistrer</button>
            </div>
        </div>
    </div>
</div>



