<?php
/* Smarty version 3.1.33, created on 2020-01-31 21:06:25
  from 'C:\web\xampp\htdocs\genielogiciel2-master\tmp\template\select_statutcircuit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e3488c10d2700_59435025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45f4948bbf3cc58c910fbbae95a698561496a1cb' => 
    array (
      0 => 'C:\\web\\xampp\\htdocs\\genielogiciel2-master\\tmp\\template\\select_statutcircuit.tpl',
      1 => 1580499598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3488c10d2700_59435025 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_list_statutcircuit']->value, 'status');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['status']->value) {
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['status']->value['idStatutCircuit'];?>
"><?php echo $_smarty_tpl->tpl_vars['status']->value['idStatutCircuit'];?>
 - <?php echo $_smarty_tpl->tpl_vars['status']->value['statut'];?>
</option>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
