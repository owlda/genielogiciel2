<?php
/* Smarty version 3.1.33, created on 2020-01-31 21:26:56
  from 'C:\web\xampp\htdocs\genielogiciel2-master\tmp\template\carousel_circuit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e348d904d93b0_46733929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f0c8b02fc170d9d3869b65fc34136a0397ce94a' => 
    array (
      0 => 'C:\\web\\xampp\\htdocs\\genielogiciel2-master\\tmp\\template\\carousel_circuit.tpl',
      1 => 1580496612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e348d904d93b0_46733929 (Smarty_Internal_Template $_smarty_tpl) {
?>        <div class="col" style="flex-grow: 1;">
            <div class="carousel slide" data-ride="carousel" id="carousel-1">
                <div class="carousel-inner" role="listbox">
                    <?php $_smarty_tpl->_assignInScope('count', 0);?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_image_circuit']->value, 'image_circuit');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image_circuit']->value) {
?>
                        <div class="carousel-item <?php if ($_smarty_tpl->tpl_vars['count']->value == 0) {?>active<?php }?>">
                            <img class="w-100 d-block" src="<?php echo $_smarty_tpl->tpl_vars['image_circuit']->value['imagePath'];?>
" alt="Slide Image" <?php if ($_smarty_tpl->tpl_vars['count']->value == 0) {?>loading="auto"<?php }?>>
                        </div>
                        <?php $_smarty_tpl->_assignInScope('count', $_smarty_tpl->tpl_vars['count']->value+1);?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <div>
                    <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon"></span><span class="sr-only">Next</span>
                    </a>
                </div>
                <ol class="carousel-indicators">
                    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['count']->value-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['count']->value-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                        <li data-target="#carousel-1" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['i']->value == 0) {?>class="active"<?php }?>></li>
                    <?php }
}
?>
                </ol>
            </div>
        </div><?php }
}
