<div class="modal fade" id="modal_add_hotel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ajouter un hotel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="FormAddHotel">
                    <div class="row">
                        <div class="col">
                            <label>Pays:</label>
                            <select readonly="true" class="form-control"  id="SelectPaysHotel" name="SelectPaysHotel" >
                                <option value="{$idPaysEtape}">{$NomPaysEtape}</option>
                            </select>
                        </div>
                        <div class="col">
                            <label>Ville:</label>
                            <select class="form-control" readonly="true" id="SelectVilleHotel" name="SelectVilleHotel" >
                                <option value="{$idVilleJour}">{$NomVilleJour}</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label style="display: block">Hotel:</label>
                        <select onchange="ChangeHotel()" class="form-control"  id="SelectHotel" name="SelectHotel" style="width:50%;display: inline;">
                            {include file="select_hotel.tpl" arr_list_hotel=$arr_list_hotel}
                        </select>
                        <input type="button" value="Ajouter un hotel" class="btn btn-primary" style="display: inline" onclick="BtnViewNewHotel()">
                    </div>
                    <div class="form-group">
                        <label style="display: inline;">Site:</label>
                        <a href="{$arr_list_hotel[0].site}" id="link_site_hotel" target="_blank"><span id="text_site_hotel">{$arr_list_hotel[0].site}</span></a>
                    </div>
                    <div class="form-group animated zoomInRight" id="ViewNewHotel" style="width: 50%;margin-left: 30%;display: none;">
                        <label>Nouveau hotel:</label>
                        <input type="text" class="form-control" id="NewNameHotel">
                        <label>Site (avec http(s)://):</label>
                        <input type="text" class="form-control" id="NewSiteHotel">
                        <br>
                        <input type="button" value="Annuler" id="btn_not_hotel" class="btn btn-secondary" onclick="BtnNotHotel()">
                        <input type="button" value="Enregistrer" id="btn_add_hotel" class="btn btn-success" onclick="BtnAddHotel({$idVilleJour})">
                    </div>
                    <br>
                    <br>
                    <div class="form-group" style="display: inline;">
                        <label style="display: inline;">ID_Pays_Etape:</label>
                        <input type="text" value="{$idPaysEtape}" class="form-control" id="input_id_pays" name="input_id_pays" style="width: 60px;display: inline;" readonly>
                    </div>

                    <div class="form-group" style="display: inline;margin-left: 10px;">
                        <label style="display: inline;">ID_Jour:</label>
                        <input type="text" value="{$idJour}" class="form-control" id="input_id_jour" name="input_id_jour" style="width: 60px;display: inline;" readonly>
                    </div>
                    <div class="form-group" style="display: inline;margin-left: 10px;">
                        <label style="display: inline;">ID_VilleJour:</label>
                        <input type="text" value="{$idVilleJour}" class="form-control" id="input_id_ville_jour" name="input_id_ville_jour" style="width: 60px;display: inline;" readonly>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <button type="button" id="register_jour" class="btn btn-success" onclick="BtnAddHotelForJour()">Enregistrer</button>
            </div>
        </div>
    </div>
</div>