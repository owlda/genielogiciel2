<?php
/* Smarty version 3.1.33, created on 2019-12-19 16:27:50
  from 'C:\xampp\htdocs\files\Web3\genielogiciel2\tmp\template\form_edit_circuit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dfb96f697cf98_27816979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4013bbefb7679fc7c94e21810813c64d4c363f97' => 
    array (
      0 => 'C:\\xampp\\htdocs\\files\\Web3\\genielogiciel2\\tmp\\template\\form_edit_circuit.tpl',
      1 => 1576769265,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dfb96f697cf98_27816979 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="padding: 20px">
<a href="../pages/list-circuit.php">Liste des circuit</a>
<h1><?php echo $_smarty_tpl->tpl_vars['h1_circuit']->value;?>
</h1>
<button id="verification-NicEdit">Verification Editor</button>
<form class="animated zoomInRight" id="AddFormCircuit">
    <div class="form-group">
        <label style="display: block">Status:</label>
        <select class="form-control"  id="SelectTheme" name="SelectTheme" style="width:30%;display: inline;">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_status_circuit']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"
                        <?php if ($_smarty_tpl->tpl_vars['k']->value == $_smarty_tpl->tpl_vars['db_idStatutCircuit']->value) {?> selected="selected" <?php }?>>
                    <?php echo $_smarty_tpl->tpl_vars['v']->value;?>

                </option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    </div>
    <div class="form-group animated zoomInRight">
        <label>Prix:</label>
        <input type="text" class="form-control" id="input_title" name="input_title" style="width: 100px" value="<?php echo $_smarty_tpl->tpl_vars['db_prix']->value;?>
">
    </div>

    <div class="form-group animated zoomInRight">
        <label><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</label>
        <input type="text" class="form-control" id="input_title" name="input_title" value="<?php echo $_smarty_tpl->tpl_vars['db_titre']->value;?>
">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Date de début:</label>
        <div class="col-10">
            <input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['db_dateDepart']->value;?>
" style="width: 250px" type="datetime-local" id="input_date" name="input_date">
        </div>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Date de fin:</label>
        <div class="col-10">
            <input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['db_dateDepart']->value;?>
" style="width: 250px" type="datetime-local" id="input_date" name="input_date">
        </div>
    </div>
    <div>
        <label for="exampleInputEmail1" id="label_description_circuit">Description:</label>
        <textarea id="NicEdit" cols="70" rows="5" style="width: 60%" ><?php echo $_smarty_tpl->tpl_vars['db_description']->value;?>
</textarea>
    </div>
    <div class="form-group">
        <label style="display: block"><?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
</label>
        <select class="form-control"  id="SelectTheme" name="SelectTheme" style="width:30%;display: inline;">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_theme_circuit']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"
                <?php if ($_smarty_tpl->tpl_vars['k']->value == $_smarty_tpl->tpl_vars['db_idTheme']->value) {?> selected="selected" <?php }?>>
                    <?php echo $_smarty_tpl->tpl_vars['v']->value;?>

                </option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['btn_add_theme']->value;?>
" class="btn btn-primary" style="display: inline" onclick="BtnViewNewTheme()">
    </div>
    <div class="form-group animated zoomInRight" id="ViewNewTheme" style="width: 30%;margin-left: 10%;display: none;">
        <label for="exampleInputEmail1">Nouveau thème</label>
        <input type="text" class="form-control" id="NewTheme">
        <br>
        <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['btn_submit']->value;?>
" id="btn_add_theme" class="btn btn-success" onclick="BtnAddTheme()">
        <input type="button" value="Annuler" id="btn_not_theme" class="btn btn-secondary" onclick="BtnNotTheme()">
    </div>
    <div class="form-group animated zoomInRight" style="width: 35%">
        <label><?php echo $_smarty_tpl->tpl_vars['ville_depart']->value;?>
</label>
        <input type="text" class="form-control" id="input_ville_depart" name="input_ville_depart" value="<?php echo $_smarty_tpl->tpl_vars['db_pointDepart']->value;?>
">
    </div>
    <input type="button" id="btn_add_circuit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['btn_submit']->value;?>
" onclick="BtnAddCircuit()">
</form>
</div>

<?php echo '<script'; ?>
 src="../libs/nicEdit-latest.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../js/ivan-js.js"><?php echo '</script'; ?>
><?php }
}
