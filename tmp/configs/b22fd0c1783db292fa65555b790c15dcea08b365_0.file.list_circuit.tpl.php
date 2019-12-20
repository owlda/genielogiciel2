<?php
/* Smarty version 3.1.33, created on 2019-12-20 15:09:55
  from 'C:\web\xampp\htdocs\genielogiciel2-master\tmp\template\list_circuit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dfcd6336cd960_24747248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b22fd0c1783db292fa65555b790c15dcea08b365' => 
    array (
      0 => 'C:\\web\\xampp\\htdocs\\genielogiciel2-master\\tmp\\template\\list_circuit.tpl',
      1 => 1576850832,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:carousel-circuit.tpl' => 1,
    'file:modal_add_rabais.tpl' => 1,
  ),
),false)) {
function content_5dfcd6336cd960_24747248 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Liste des circuits</h1>
<input value="Ajouter un circuit" class="btn btn-success" type="button" onclick="location.href='add-circuit.php'">
<div class="container-fluid" style="width: 95%;padding: 2%;">
    <div class="row" id="card-container"></div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Photo</th>
            <th scope="col">Titre</th>
            <th scope="col">Prix</th>
            <th scope="col">Rabais</th>
            <th scope="col">Status</th>
            <th scope="col">Thème</th>
            <th scope="col">Date de départ</th>
            <th scope="col">Date de fin</th>
            <th scope="col">...</th>
        </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_list_circuit']->value, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value) {
?>
            <tr>
                <th scope="row"><?php echo $_smarty_tpl->tpl_vars['key']->value['idCircuit'];?>
</th>
                <td><div style="width: 100px;height: 100px"><?php $_smarty_tpl->_subTemplateRender('file:carousel-circuit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></td>
                <td><?php echo $_smarty_tpl->tpl_vars['key']->value['titre'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['key']->value['prix'];?>
$</td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['key']->value['Rabais'] < 0) {?>
                        <input type="button" value="&#10133; Rabais" class="btn btn-primary" style="display: inline" onclick="BtnAddRabais(<?php echo $_smarty_tpl->tpl_vars['key']->value['idCircuit'];?>
)">
                        <?php } else { ?>
                        <span style="font-size: xx-large"><?php echo $_smarty_tpl->tpl_vars['key']->value['Rabais'];?>
%</span><br>
                        <input type="button" value="Supprimer" class="btn btn-danger" onclick="BtnDelRabais(<?php echo $_smarty_tpl->tpl_vars['key']->value['idCircuit'];?>
)"><br>
                        <span class="small"><?php echo $_smarty_tpl->tpl_vars['key']->value['DateDebut'];?>
</span><br>
                        <span>*****</span><br>
                        <span class="small"><?php echo $_smarty_tpl->tpl_vars['key']->value['DateFin'];?>
</span><br>
                    <?php }?>
                </td>
                <td><strong><?php echo $_smarty_tpl->tpl_vars['key']->value['NomStatutCircuit'];?>
</strong></td>
                <td><?php echo $_smarty_tpl->tpl_vars['key']->value['NomTheme'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['key']->value['dateDepart'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['key']->value['dateFin'];?>
</td>
                <td><a href="../pages/detail-circuit.php?id=<?php echo $_smarty_tpl->tpl_vars['key']->value['idCircuit'];?>
">Détaillé</a></td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:modal_add_rabais.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
