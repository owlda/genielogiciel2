<?php
/* Smarty version 3.1.33, created on 2020-02-06 20:07:00
  from 'C:\web\xampp\htdocs\genielogiciel2-master\tmp\template\select_pays.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e3c63d4f2dda2_83141774',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0e884300e7783c14fc26b36751734545ecd7328' => 
    array (
      0 => 'C:\\web\\xampp\\htdocs\\genielogiciel2-master\\tmp\\template\\select_pays.tpl',
      1 => 1580499598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3c63d4f2dda2_83141774 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_pays']->value, 'pays');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pays']->value) {
?>
    <?php if ($_smarty_tpl->tpl_vars['pays']->value[('nom').($_COOKIE['lang'])] != NULL) {?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['pays']->value['idPays'];?>
"><?php echo $_smarty_tpl->tpl_vars['pays']->value[('nom').($_COOKIE['lang'])];?>
</option>
    <?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
