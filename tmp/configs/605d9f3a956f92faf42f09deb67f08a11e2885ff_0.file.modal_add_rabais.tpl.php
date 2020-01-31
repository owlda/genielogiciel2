<?php
/* Smarty version 3.1.33, created on 2020-01-31 19:45:09
  from 'C:\web\xampp\htdocs\genielogiciel2-master\tmp\template\modal_add_rabais.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e3475b54a4d34_95864546',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '605d9f3a956f92faf42f09deb67f08a11e2885ff' => 
    array (
      0 => 'C:\\web\\xampp\\htdocs\\genielogiciel2-master\\tmp\\template\\modal_add_rabais.tpl',
      1 => 1580432159,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3475b54a4d34_95864546 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Modal -->
<div class="modal fade" id="modal_rabais" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter un rabais</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="FormAddRabais">

                <div class="form-group">
                    <label style="display: inline;">Rabais:</label>
                    <input type="text" class="form-control" id="input_pourcentage" name="input_pourcentage" style="width: 60px;display: inline;" placeholder="%">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Date de début:</label>
                    <div class="col-10">
                        <input class="form-control small" style="width: 250px" type="datetime-local" id="input_date_start" name="input_date_start">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Date de fin:</label>
                    <div class="col-10">
                        <input class="form-control" style="width: 250px" type="datetime-local" id="input_date_end" name="input_date_end">
                    </div>
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
<?php }
}
