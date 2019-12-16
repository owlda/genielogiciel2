<?php
/* Smarty version 3.1.33, created on 2019-12-15 23:25:07
  from 'C:\xampp\htdocs\files\Web3\genielogiciel2\tmp\template\detail_circuit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df6b2c38a0589_60955678',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aab76d2bdbcefbeeb1ad635e199591c0ffdd9c0a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\files\\Web3\\genielogiciel2\\tmp\\template\\detail_circuit.tpl',
      1 => 1576448700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df6b2c38a0589_60955678 (Smarty_Internal_Template $_smarty_tpl) {
?><h3><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</h3>
<div class="btn-toolbar">
    <div class="btn-group" role="group">
        <input value="Modifier" class="btn btn-warning" type="button" onclick="location.href='editcircuit.php?id=<?php echo $_smarty_tpl->tpl_vars['idCircuit']->value;?>
'">
        <input value="Supprimer" class="btn btn-danger" type="button">
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
        <div class="card" style="padding: 10px;"><img class="card-img-top w-100 d-block" src="building.jpg">
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
</div><?php }
}
