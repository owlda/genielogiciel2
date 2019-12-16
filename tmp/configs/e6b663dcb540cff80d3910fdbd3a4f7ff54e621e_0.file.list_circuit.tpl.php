<?php
/* Smarty version 3.1.33, created on 2019-12-15 22:42:13
  from 'C:\xampp\htdocs\files\Web3\genielogiciel2\tmp\template\list_circuit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df6a8b56ab946_27537433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6b663dcb540cff80d3910fdbd3a4f7ff54e621e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\files\\Web3\\genielogiciel2\\tmp\\template\\list_circuit.tpl',
      1 => 1576446130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df6a8b56ab946_27537433 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Liste des circuits</h1>
<div class="container-fluid" style="width: 95%;padding: 2%;">
    <div class="row" id="card-container"></div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Titre</th>
            <th scope="col">Prix</th>
            <th scope="col">Status</th>
            <th scope="col">Thème</th>
            <th scope="col">Date de départ</th>
            <th scope="col">Date de fin</th>
            <th scope="col">Durée</th>
            <th scope="col">...</th>
        </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_list_circuit']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
            <tr>
                <th scope="row"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</th>
                                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['titre'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['prix'];?>
</td>
                <td><strong><?php echo $_smarty_tpl->tpl_vars['value']->value['NomStatutCircuit'];?>
</strong></td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['NomTheme'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['dateDepart'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['dateFin'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['duree'];?>
</td>
                <td><a href="../pages/detailcircuit.html?id=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" onclick="DetaleCircuit()">Détaillé</a></td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div>
<?php }
}
