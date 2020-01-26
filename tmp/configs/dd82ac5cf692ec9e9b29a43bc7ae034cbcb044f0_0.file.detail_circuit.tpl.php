<?php
/* Smarty version 3.1.33, created on 2020-01-24 22:24:16
  from 'C:\web\xampp\htdocs\genielogiciel2-master\tmp\template\detail_circuit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e2b60809ffc85_87248294',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd82ac5cf692ec9e9b29a43bc7ae034cbcb044f0' => 
    array (
      0 => 'C:\\web\\xampp\\htdocs\\genielogiciel2-master\\tmp\\template\\detail_circuit.tpl',
      1 => 1579704760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:carousel-circuit.tpl' => 1,
    'file:modal_del_circuit.tpl' => 1,
  ),
),false)) {
function content_5e2b60809ffc85_87248294 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="../pages/list-circuit.php">Liste des circuit</a>
<h1><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</h1>
<div class="btn-toolbar">
    <div class="btn-group" role="group">
        <input value="Modifier" class="btn btn-warning" type="button" onclick="location.href='edit-circuit.php?id=<?php echo $_smarty_tpl->tpl_vars['idCircuit']->value;?>
'">
        <input value="Supprimer" class="btn btn-danger" type="button" id="btn_del_circuit" onclick="ShowModalDeleteCircuit();">
    </div>
</div>
<div><span class="font-weight-bold">Date de début: </span><span class="small"><?php echo $_smarty_tpl->tpl_vars['dateDepart']->value;?>
</span> &nbsp; &nbsp; <span class="font-weight-bold">Date de fin: <span class="small"><?php echo $_smarty_tpl->tpl_vars['dateFin']->value;?>
</span></span></div>
<div><span><span class="font-weight-bold">Thème: </span><span><?php echo $_smarty_tpl->tpl_vars['NomTheme']->value;?>
</span> &nbsp; &nbsp; <span class="font-weight-bold">Ville de départ: </span><span><?php echo $_smarty_tpl->tpl_vars['pointDepart']->value;?>
</span></div>
<div class="row">
    <div class="col">
        <div class="card" style="padding: 10px;">
            <?php $_smarty_tpl->_subTemplateRender('file:carousel-circuit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <div class="list-group-item text-white bg-dark" style="text-align: center;display: inline;">
                <h2 class="text-center my-1" style="display: inline;margin-bottom: 10px;"><?php echo $_smarty_tpl->tpl_vars['prix']->value;?>
$</h2>
            </div>
        </div>
    </div>
    <div class="col">
        <p><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</p>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:modal_del_circuit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
