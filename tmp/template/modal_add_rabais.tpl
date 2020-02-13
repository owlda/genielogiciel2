<!-- Modal -->
<div class="modal fade" id="modal_rabais" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{$voc["lb_h1_add_rabais"]}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="FormAddRabais">
                    <div class="form-group">
                        <label style="display: inline;">{$voc["lb_rabais"]}</label>
                        <input type="text" class="form-control" id="input_pourcentage" name="input_pourcentage" style="width: 60px;display: inline;" placeholder="%">
                    </div>
                    <div class="form-group">
                        <label>{$voc["lb_date_debut"]}</label>
                        <div class="col-10">
                            <input class="form-control small" style="width: 250px" type="datetime-local" id="input_date_start" name="input_date_start">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>{$voc["lb_date_fin"]}</label>
                        <div class="col-10">
                            <input class="form-control" style="width: 250px" type="datetime-local" id="input_date_end" name="input_date_end">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="register_rabais" class="btn btn-success">{$voc["btn_submit"]}</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{$voc["btn_cancel"]}</button>
            </div>
        </div>
    </div>
</div>
