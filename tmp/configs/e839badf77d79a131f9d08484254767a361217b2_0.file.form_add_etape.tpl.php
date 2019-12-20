<?php
/* Smarty version 3.1.33, created on 2019-12-20 17:01:14
  from 'C:\web\xampp\htdocs\genielogiciel2-master\tmp\template\form_add_etape.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dfcf04a898536_68001717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e839badf77d79a131f9d08484254767a361217b2' => 
    array (
      0 => 'C:\\web\\xampp\\htdocs\\genielogiciel2-master\\tmp\\template\\form_add_etape.tpl',
      1 => 1576857437,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:carousel-circuit.tpl' => 1,
  ),
),false)) {
function content_5dfcf04a898536_68001717 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="padding: 20px">
<a href="../pages/list-circuit.php">Liste des circuit</a>
<h1>Ajouter un étape</h1>
    <div style="width: 50%;height: 50%"><?php $_smarty_tpl->_subTemplateRender('file:carousel-circuit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div>
<form class="animated zoomInRight" id="AddFormEtape">

    <div class="form-group animated zoomInRight">
        <label>Titre</label>
        <input type="text" class="form-control" id="input_title" name="input_title" >
    </div>

    <div class="form-group">
        <label style="display: block">Pays:</label>
        <select class="form-control"  id="SelectPays" name="SelectPays" style="width:30%;display: inline;">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_pays']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
                    <?php echo $_smarty_tpl->tpl_vars['v']->value;?>

                </option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <input type="button" value="Ajouter un pays" class="btn btn-primary" style="display: inline" onclick="BtnViewNewPays()">
    </div>

    <div class="form-group animated zoomInRight" id="ViewNewPays" style="width: 30%;margin-left: 10%;display: none;">
        <label>Nouveau pays:</label>
        <input type="text" class="form-control" id="NewPays">
        <br>
        <input type="button" value="Enregistrer" id="btn_add_pays" class="btn btn-success" onclick="BtnAddPays()">
        <input type="button" value="Annuler" id="btn_not_pays" class="btn btn-secondary" onclick="BtnNotPays()">
    </div>


    <div class="form-group">
        <label>Date de début:</label>
        <div class="col-10">
            <input class="form-control" style="width: 250px" type="datetime-local" id="input_date" name="input_date">
        </div>
    </div>

    <div>
        <label for="exampleInputEmail1" id="label_description_circuit">Description:</label>
        <textarea id="NicEdit" cols="70" rows="5" style="width: 60%" ></textarea>
    </div>
    <br>
    <input type="button" value="Enregistrer" id="btn_add_circuit" class="btn btn-success"  onclick="BtnAddEtape()">
</form>
</div>
<?php echo '<script'; ?>
 src="../libs/nicEdit-latest.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../js/ivan-js.js"><?php echo '</script'; ?>
><?php }
}
