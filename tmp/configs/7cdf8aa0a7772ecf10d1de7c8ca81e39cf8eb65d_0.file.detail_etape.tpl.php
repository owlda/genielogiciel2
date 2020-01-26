<?php
/* Smarty version 3.1.33, created on 2020-01-24 22:24:16
  from 'C:\web\xampp\htdocs\genielogiciel2-master\tmp\template\detail_etape.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e2b6080de7f96_00506248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cdf8aa0a7772ecf10d1de7c8ca81e39cf8eb65d' => 
    array (
      0 => 'C:\\web\\xampp\\htdocs\\genielogiciel2-master\\tmp\\template\\detail_etape.tpl',
      1 => 1579704760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:carousel-circuit.tpl' => 1,
  ),
),false)) {
function content_5e2b6080de7f96_00506248 (Smarty_Internal_Template $_smarty_tpl) {
?><input class="btn btn-success" type="button" value="Ajouter un étape" style="margin-top: 5px;" onclick="location.href='add-etape.php?id=<?php echo $_smarty_tpl->tpl_vars['idCircuit']->value;?>
'">

<?php if ($_smarty_tpl->tpl_vars['Nb_etape']->value > 0) {?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_etape']->value, 'etape');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['etape']->value) {
?>
        <h4><?php echo $_smarty_tpl->tpl_vars['etape']->value['titre'];?>
</h4>
        <div class="btn-toolbar" style="margin-bottom: 10px;">
            <div class="btn-group" role="group">
                <button class="btn btn-warning" type="button">Modifier</button>
                <button class="btn btn-danger" type="button">Supprimer</button>
                <button class="btn btn-success" type="button">Ajouter un jour</button>
            </div>
            <div class="btn-group" role="group"></div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="card" style="padding: 10px;">
                    <?php $_smarty_tpl->_subTemplateRender('file:carousel-circuit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                </div>
            </div>
            <div class="col-8">
                <p><?php echo $_smarty_tpl->tpl_vars['etape']->value['description'];?>
</p>
            </div>
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>


<?php }
}
