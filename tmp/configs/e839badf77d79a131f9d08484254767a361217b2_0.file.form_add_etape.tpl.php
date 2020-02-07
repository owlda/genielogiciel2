<?php
/* Smarty version 3.1.33, created on 2020-02-06 20:07:00
  from 'C:\web\xampp\htdocs\genielogiciel2-master\tmp\template\form_add_etape.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e3c63d4b49ad3_04318248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e839badf77d79a131f9d08484254767a361217b2' => 
    array (
      0 => 'C:\\web\\xampp\\htdocs\\genielogiciel2-master\\tmp\\template\\form_add_etape.tpl',
      1 => 1580499598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:carousel-circuit.tpl' => 1,
    'file:select_pays.tpl' => 1,
  ),
),false)) {
function content_5e3c63d4b49ad3_04318248 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="padding: 20px">
<a href="../pages/admin.php"><?php echo $_smarty_tpl->tpl_vars['voc']->value["lb_h1_list_circuit"];?>
</a>
<h1><?php echo $_smarty_tpl->tpl_vars['voc']->value["lb_h1_add_etape"];?>
</h1>
    <div style="width: 50%;height: 50%"><?php $_smarty_tpl->_subTemplateRender('file:carousel-circuit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div>
<form class="animated zoomInRight" id="AddFormEtape">

    <div class="form-group animated zoomInRight">
        <label><?php echo $_smarty_tpl->tpl_vars['voc']->value["lb_title"];?>
</label>
        <input type="text" class="form-control" id="input_title" name="input_title" >
    </div>

    <div class="form-group animated zoomInRight">
        <label><?php echo $_smarty_tpl->tpl_vars['voc']->value["lb_price"];?>
</label>
        <input type="text" style="width: 150px" class="form-control" id="input_price" name="input_price" >
    </div>

    <div class="form-group animated zoomInRight">
        <label><?php echo $_smarty_tpl->tpl_vars['voc']->value["lb_number"];?>
</label>
        <input type="number" style="width: 150px" class="form-control" id="input_number" name="input_number" >
    </div>

    <div class="form-group">
        <label style="display: block"><?php echo $_smarty_tpl->tpl_vars['voc']->value["lb_pays"];?>
</label>
        <select class="form-control"  id="SelectPays" name="SelectPays" style="width:30%;display: inline;">
            <?php $_smarty_tpl->_subTemplateRender("file:select_pays.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('arr_pays'=>$_smarty_tpl->tpl_vars['voc']->value["arr_pays"]), 0, false);
?>
        </select>
        <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['voc']->value["btn_add_pays"];?>
" class="btn btn-primary" style="display: inline" onclick="BtnViewNewPays()">
    </div>

    <div class="form-group animated zoomInRight" id="ViewNewPays" style="width: 30%;margin-left: 10%;display: none;">
        <label><?php echo $_smarty_tpl->tpl_vars['voc']->value["lb_add_new_pays"];?>
</label>
        <input type="text" class="form-control" id="NewPays">
        <br>
        <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['voc']->value["btn_submit"];?>
" id="btn_add_pays" class="btn btn-success" onclick="BtnAddPays()">
        <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['voc']->value["btn_cancel"];?>
" id="btn_not_pays" class="btn btn-secondary" onclick="BtnNotPays()">
    </div>

    <div class="form-group">
        <label><?php echo $_smarty_tpl->tpl_vars['voc']->value["lb_date_depart"];?>
</label>
        <div class="col-10">
            <input class="form-control" style="width: 250px" type="datetime-local" id="input_date_start" name="input_date_start">
        </div>
    </div>

    <div class="form-group">
        <label><?php echo $_smarty_tpl->tpl_vars['voc']->value["lb_date_fin"];?>
</label>
        <div class="col-10">
            <input class="form-control" style="width: 250px" type="datetime-local" id="input_date_end" name="input_date_end">
        </div>
    </div>

    <div>
        <label id="label_description_circuit"><?php echo $_smarty_tpl->tpl_vars['voc']->value["lb_description"];?>
</label>
        <textarea id="NicEdit" cols="70" rows="5" style="width: 60%" ></textarea>
    </div>
    <br>
    <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['voc']->value["btn_submit"];?>
" id="btn_add_circuit" class="btn btn-success"  onclick="BtnAddEtape(<?php echo $_smarty_tpl->tpl_vars['idCircuit']->value;?>
)">
    <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['voc']->value["btn_cancel"];?>
" class="btn btn-secondary" onclick="DetailCircuit(<?php echo $_smarty_tpl->tpl_vars['idCircuit']->value;?>
)"">
</form>
</div>
<?php echo '<script'; ?>
 src="../libs/nicEdit-latest.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../js/ivan-js.js"><?php echo '</script'; ?>
><?php }
}
