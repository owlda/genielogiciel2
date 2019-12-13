<?php
/* Smarty version 3.1.33, created on 2019-12-13 18:29:26
  from 'C:\xampp\htdocs\files\Web3\genielogiciel2\tmp\template\addcircuit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df3ca76bfc790_56488362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9e633924ae36960e42e9f1af742db632d833eb3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\files\\Web3\\genielogiciel2\\tmp\\template\\addcircuit.tpl',
      1 => 1576258162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df3ca76bfc790_56488362 (Smarty_Internal_Template $_smarty_tpl) {
?><h1><?php echo $_smarty_tpl->tpl_vars['h1_circuit']->value;?>
</h1>
<button id="verification-NicEdit">Verification Editor</button>
<form class="animated zoomInRight" >

    <div class="form-group animated zoomInRight">
        <label for="exampleInputEmail1"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</label>
        <input type="text" class="form-control">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Date:</label>
        <div class="col-10">
            <input class="form-control" style="width: 200px" type="date" data-date-format="DD MMMM YYYY" id="date-input">
        </div>
    </div>
    <div>
        <label for="exampleInputEmail1" id="label_description_circuit">Description:</label>
        <textarea id="NicEdit" cols="70" rows="5" style="width: 60%" >Some Sample Text</textarea>
    </div>
    <div class="form-group">
        <label style="display: block"><?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
</label>
        <select class="form-control" style="width:30%;display: inline">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_theme_circuit']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <button class="btn btn-primary" style="display: inline"><?php echo $_smarty_tpl->tpl_vars['btn_add_theme']->value;?>
</button>
    </div>
    <div class="form-group">
        <label style="display: block"><?php echo $_smarty_tpl->tpl_vars['ville_depart']->value;?>
</label>
        <select class="form-control" style="width:30%;">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_ville_depart']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                <option value=""<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    </div>
    <button type="submit" id="btn_add_circuit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['btn_submit']->value;?>
</button>
</form>

<?php echo '<script'; ?>
 src="../libs/nicEdit-latest.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../js/ivan-js.js"><?php echo '</script'; ?>
><?php }
}
