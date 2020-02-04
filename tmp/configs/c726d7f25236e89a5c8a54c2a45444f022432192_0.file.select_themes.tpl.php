<?php
/* Smarty version 3.1.33, created on 2020-01-31 21:06:25
  from 'C:\web\xampp\htdocs\genielogiciel2-master\tmp\template\select_themes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e3488c1128a85_20634584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c726d7f25236e89a5c8a54c2a45444f022432192' => 
    array (
      0 => 'C:\\web\\xampp\\htdocs\\genielogiciel2-master\\tmp\\template\\select_themes.tpl',
      1 => 1580496612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3488c1128a85_20634584 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_theme_circuit']->value, 'theme');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->value) {
?>
    <?php if ($_smarty_tpl->tpl_vars['theme']->value[('theme').($_COOKIE['lang'])] != NULL) {?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['theme']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['theme']->value[('theme').($_COOKIE['lang'])];?>
</option>
    <?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
