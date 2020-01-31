<?php
/* Smarty version 3.1.33, created on 2020-01-31 19:51:18
  from 'C:\web\xampp\htdocs\genielogiciel2-master\tmp\template\list_circuit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e3477262f1da4_20724460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b22fd0c1783db292fa65555b790c15dcea08b365' => 
    array (
      0 => 'C:\\web\\xampp\\htdocs\\genielogiciel2-master\\tmp\\template\\list_circuit.tpl',
      1 => 1580496612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:carousel-circuit.tpl' => 1,
    'file:modal_add_rabais.tpl' => 1,
  ),
),false)) {
function content_5e3477262f1da4_20724460 (Smarty_Internal_Template $_smarty_tpl) {
?><h1><?php echo $_smarty_tpl->tpl_vars['voc']->value["lb_h1_list_circuit"];?>
</h1>
<input value="<?php echo $_smarty_tpl->tpl_vars['voc']->value["btn_add_circuit"];?>
" class="btn btn-success" type="button" onclick="LoadAddCircuit();">
<div class="container-fluid" style="padding: 2%;">
    <div class="row" id="card-container"></div>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Photo</th>
            <th scope="col"><?php echo $_smarty_tpl->tpl_vars['voc']->value["lb_title"];?>
</th>
            <th scope="col"><?php echo $_smarty_tpl->tpl_vars['voc']->value["lb_price"];?>
</th>
            <th scope="col"><?php echo $_smarty_tpl->tpl_vars['voc']->value["lb_rabais"];?>
</th>
            <th scope="col"><?php echo $_smarty_tpl->tpl_vars['voc']->value["lb_status"];?>
</th>
            <th scope="col"><?php echo $_smarty_tpl->tpl_vars['voc']->value["lb_theme"];?>
</th>
            <th scope="col"><?php echo $_smarty_tpl->tpl_vars['voc']->value["lb_ville_depart"];?>
</th>
            <th scope="col"><?php echo $_smarty_tpl->tpl_vars['voc']->value["lb_date_depart"];?>
</th>
            <th scope="col"><?php echo $_smarty_tpl->tpl_vars['voc']->value["lb_date_fin"];?>
</th>
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
                <td>
                    <?php if (!(($_smarty_tpl->tpl_vars['key']->value[('titre').($_COOKIE['lang'])] !== null )) || empty($_smarty_tpl->tpl_vars['key']->value[('titre').($_COOKIE['lang'])])) {?>
                        <div class="alert alert-danger" role="alert">NULL</div>
                    <?php }?>
                    <?php echo $_smarty_tpl->tpl_vars['key']->value[('titre').($_COOKIE['lang'])];?>

                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['key']->value['prix'];?>
$</td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['key']->value['Rabais'] < 0) {?>
                        <input type="button" value="&#10133; <?php echo $_smarty_tpl->tpl_vars['voc']->value["lb_rabais"];?>
" class="btn btn-primary" style="display: inline" onclick="BtnAddRabais(<?php echo $_smarty_tpl->tpl_vars['key']->value['idCircuit'];?>
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
                <td>
                    <?php if (!isset($_smarty_tpl->tpl_vars['key']->value['NomTheme']) || empty($_smarty_tpl->tpl_vars['key']->value['NomTheme'])) {?>
                        <div class="alert alert-danger" role="alert">NULL</div>
                    <?php }?>
                    <?php echo $_smarty_tpl->tpl_vars['key']->value['NomTheme'];?>

                </td>
                <td>
                    <?php if (!(($_smarty_tpl->tpl_vars['key']->value[('pointDepart').($_COOKIE['lang'])] !== null )) || empty($_smarty_tpl->tpl_vars['key']->value[('pointDepart').($_COOKIE['lang'])])) {?>
                        <div class="alert alert-danger" role="alert">NULL</div>
                    <?php }?>
                    <?php echo $_smarty_tpl->tpl_vars['key']->value[('pointDepart').($_COOKIE['lang'])];?>

                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['key']->value['dateDepart'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['key']->value['dateFin'];?>
</td>
                <td> <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['voc']->value["btn_detail"];?>
" class="btn btn-info" onclick="DetailCircuit(<?php echo $_smarty_tpl->tpl_vars['key']->value['idCircuit'];?>
)"></td>
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
