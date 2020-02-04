<?php
/* Smarty version 3.1.33, created on 2020-01-31 21:26:56
  from 'C:\web\xampp\htdocs\genielogiciel2-master\tmp\template\detail_etape.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e348d9054d4f6_14201199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cdf8aa0a7772ecf10d1de7c8ca81e39cf8eb65d' => 
    array (
      0 => 'C:\\web\\xampp\\htdocs\\genielogiciel2-master\\tmp\\template\\detail_etape.tpl',
      1 => 1580501127,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:carousel-circuit.tpl' => 1,
    'file:ajouter_jour.tpl' => 1,
  ),
),false)) {
function content_5e348d9054d4f6_14201199 (Smarty_Internal_Template $_smarty_tpl) {
?><input class="btn btn-success" type="button" value="<?php echo $_smarty_tpl->tpl_vars['voc']->value["btn_add_etape"];?>
" style="margin-top: 5px;" onclick="LoadAddEtape(<?php echo $_smarty_tpl->tpl_vars['idCircuit']->value;?>
)">

<?php if ($_smarty_tpl->tpl_vars['count_etape']->value > 0) {?>
<div class="container border border-primary rounded-lg animated zoomInRight" style="padding: 10px;">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_etape']->value, 'etape');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['etape']->value) {
?>
        <h2>
            <span style="font-size: medium">(ID=<?php echo $_smarty_tpl->tpl_vars['etape']->value['idEtape'];?>
) </span>
            <?php if (!(($_smarty_tpl->tpl_vars['etape']->value[('titre').($_COOKIE['lang'])] !== null )) || empty($_smarty_tpl->tpl_vars['etape']->value[('titre').($_COOKIE['lang'])])) {?>
                <div class="alert alert-danger" role="alert">NULL</div>
            <?php }?>
            <?php echo $_smarty_tpl->tpl_vars['etape']->value[('titre').($_COOKIE['lang'])];?>

        </h2>

            <div class="btn-toolbar" style="margin-bottom: 10px;">
                <div class="btn-group" role="group">
                    <input value="<?php echo $_smarty_tpl->tpl_vars['voc']->value["btn_edit"];?>
" class="btn btn-warning" type="button">
                    <input value="<?php echo $_smarty_tpl->tpl_vars['voc']->value["btn_del"];?>
" class="btn btn-danger" type="button">
                    <?php if (isset($_smarty_tpl->tpl_vars['etape']->value['NomPays']) || !empty($_smarty_tpl->tpl_vars['etape']->value['NomPays'])) {?>
                        <input value="<?php echo $_smarty_tpl->tpl_vars['voc']->value["btn_add_day"];?>
" class="btn btn-success" type="button" onclick="LoadModalAddJour(<?php echo $_smarty_tpl->tpl_vars['etape']->value['idPays'];?>
, <?php echo $_smarty_tpl->tpl_vars['etape']->value['idEtape'];?>
)">
                    <?php }?>
                </div>
            </div>

        <div class="row">
            <div class="col"><?php echo $_smarty_tpl->tpl_vars['voc']->value["lb_pays"];?>
:
                <?php if (!isset($_smarty_tpl->tpl_vars['etape']->value['NomPays']) || empty($_smarty_tpl->tpl_vars['etape']->value['NomPays'])) {?>
                    <div class="alert alert-danger" role="alert">NULL</div>
                <?php }?>
                <?php echo $_smarty_tpl->tpl_vars['etape']->value['NomPays'];?>

            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="card" style="padding: 10px;">
                    <?php $_smarty_tpl->_subTemplateRender('file:carousel-circuit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                </div>
            </div>
            <div class="col-8">
                <?php if (!(($_smarty_tpl->tpl_vars['etape']->value[('description').($_COOKIE['lang'])] !== null )) || empty($_smarty_tpl->tpl_vars['etape']->value[('description').($_COOKIE['lang'])])) {?>
                    <div class="alert alert-danger" role="alert">NULL</div>
                <?php }?>
                <p><?php echo $_smarty_tpl->tpl_vars['etape']->value[('description').($_COOKIE['lang'])];?>
</p>
            </div>
        </div>
        <section id="ajouter_jour_<?php echo $_smarty_tpl->tpl_vars['etape']->value['idEtape'];?>
">
            <?php if ($_smarty_tpl->tpl_vars['etape']->value['count_jour'] > 0) {?>
                <?php $_smarty_tpl->_subTemplateRender("file:ajouter_jour.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('etape'=>$_smarty_tpl->tpl_vars['etape']->value), 0, true);
?>
            <?php }?>
        </section>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }?>



<?php }
}
