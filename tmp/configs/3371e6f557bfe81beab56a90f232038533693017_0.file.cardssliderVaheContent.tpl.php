<?php
/* Smarty version 3.1.33, created on 2020-02-06 13:35:35
  from 'C:\web\xampp\htdocs\genielogiciel2-master\tmp\template\cardssliderVaheContent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e3c0817a87b65_01951968',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3371e6f557bfe81beab56a90f232038533693017' => 
    array (
      0 => 'C:\\web\\xampp\\htdocs\\genielogiciel2-master\\tmp\\template\\cardssliderVaheContent.tpl',
      1 => 1580496612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3c0817a87b65_01951968 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
        <img src="<?php echo $_smarty_tpl->tpl_vars['arrayPhoto']->value[0];?>
" class="card-img-top w-100 d-block">
    <div class="card-body">
        <a href onclick="showcard(<?php echo $_smarty_tpl->tpl_vars['arrayCircuit']->value[0]['idCircuit'];?>
); return false;" >
            <h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['arrayCircuit']->value[0]['titre'];?>
</h4>
        </a>
        <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['arrayCircuit']->value[0]['description'];?>
 Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
        <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['arrayCircuit']->value[0]['prix'];?>
$</p>
        <button class="btn btn-primary" type="button" onclick="addpanier(<?php echo $_smarty_tpl->tpl_vars['arrayCircuit']->value[0]['idCircuit'];?>
)">Ajouter au panier</button>
    </div>
</div>
<div class="card">
    <img src="<?php echo $_smarty_tpl->tpl_vars['arrayPhoto']->value[1];?>
" class="card-img-top w-100 d-block">
    <div class="card-body">
        <a href onclick="showcard(<?php echo $_smarty_tpl->tpl_vars['arrayCircuit']->value[1]['idCircuit'];?>
); return false;" >
            <h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['arrayCircuit']->value[1]['titre'];?>
</h4>
        </a>
        <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['arrayCircuit']->value[1]['description'];?>
 Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
        <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['arrayCircuit']->value[1]['prix'];?>
$</p>
        <button class="btn btn-primary" type="button" onclick="addpanier(<?php echo $_smarty_tpl->tpl_vars['arrayCircuit']->value[1]['idCircuit'];?>
)">Ajouter au panier</button>
    </div>
</div>
<div class="card">
    <img src="<?php echo $_smarty_tpl->tpl_vars['arrayPhoto']->value[2];?>
" class="card-img-top w-100 d-block">
    <div class="card-body">
        <a href onclick="showcard(<?php echo $_smarty_tpl->tpl_vars['arrayCircuit']->value[2]['idCircuit'];?>
); return false;" >
            <h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['arrayCircuit']->value[2]['titre'];?>
</h4>
        </a>
        <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['arrayCircuit']->value[2]['description'];?>
 Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
        <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['arrayCircuit']->value[2]['prix'];?>
$</p>
        <button class="btn btn-primary" type="button" onclick="addpanier(<?php echo $_smarty_tpl->tpl_vars['arrayCircuit']->value[2]['idCircuit'];?>
)">Ajouter au panier</button>
    </div>
</div><?php }
}
