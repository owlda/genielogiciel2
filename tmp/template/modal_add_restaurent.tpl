<div class="modal fade" id="modal_add_restaurent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{$voc["lb_h1_add_restaurant"]}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="FormAddRestaurent">
                    <div class="row">
                        <div class="col">
                            <label>{$voc["lb_pays"]}</label>
                            <select readonly="true" class="form-control"  id="SelectPaysRestaurent" name="SelectPaysRestaurent" >
                                <option value="{$idPaysEtape}">{$NomPaysEtape}</option>
                            </select>
                        </div>
                        <div class="col">
                            <label>{$voc["lb_ville"]}</label>
                            <select class="form-control" readonly="true" id="SelectVilleRestaurent" name="SelectVilleRestaurent" >
                                <option value="{$idVilleJour}">{$NomVilleJour}</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label style="display: block">{$voc['lb_restaurant']}</label>
                        <select onchange="ChangeRestaurent()" class="form-control"  id="SelectRestaurent" name="SelectRestaurent" style="width:50%;display: inline;">
                            {include file="select_restaurent.tpl" arr_list_restaurent=$arr_list_restaurent}
                        </select>
                        <input type="button" value="{$voc['btn_add_restaurant']}" class="btn btn-primary" style="display: inline" onclick="BtnViewNewRestaurent()">
                    </div>
                    <div class="form-group">
                        <label style="display: inline;">{$voc['lb_site']}</label>
                        {if isset($arr_list_restaurent[0].site) || !empty($arr_list_restaurent[0].site)}
                            <a href="{$arr_list_restaurent[0].site}" id="link_site_restaurent" target="_blank">
                                <span id="text_site_restaurent">{$arr_list_restaurent[0].site}</span>
                            </a>
                        {else}
                            <a href="" id="link_site_restaurent" target="_blank">
                                <span id="text_site_restaurent"></span>
                            </a>
                        {/if}
                    </div>
                    <div class="form-group animated zoomInRight" id="ViewNewRestaurent" style="width: 50%;margin-left: 30%;display: none;">
                        <label>{$voc['lb_add_new_restaurant']}</label>
                        <input type="text" class="form-control" id="NewNameRestaurent">
                        <label>{$voc['lb_site']} (http(s)://):</label>
                        <input type="text" class="form-control" id="NewSiteRestaurent">
                        <br>
                        <input type="button" value="{$voc['btn_submit']}" id="btn_add_hotel" class="btn btn-success" onclick="BtnAddRestaurent({$idVilleJour})">
                        <input type="button" value="{$voc['btn_cancel']}" id="btn_not_hotel" class="btn btn-secondary" onclick="BtnNotRestaurent()">
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
                <button type="button" id="register_jour" class="btn btn-success" onclick="BtnAddRestaurentForJour()">{$voc['btn_submit']}</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{$voc['btn_cancel']}</button>
            </div>
        </div>
    </div>
</div>