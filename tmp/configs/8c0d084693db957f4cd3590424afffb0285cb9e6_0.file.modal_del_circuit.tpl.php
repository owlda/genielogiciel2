<?php
/* Smarty version 3.1.33, created on 2019-12-20 15:44:58
  from 'C:\web\xampp\htdocs\genielogiciel2-master\tmp\template\modal_del_circuit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dfcde6add2e42_94427230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c0d084693db957f4cd3590424afffb0285cb9e6' => 
    array (
      0 => 'C:\\web\\xampp\\htdocs\\genielogiciel2-master\\tmp\\template\\modal_del_circuit.tpl',
      1 => 1576809762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dfcde6add2e42_94427230 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Modal -->
<div class="modal fade" id="modal_delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Suppimer le circuit?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                "<?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
" va être supprimé...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-danger">Supprimer</button>
            </div>
        </div>
    </div>
</div>
<?php }
}
