<?php
/* Smarty version 3.1.33, created on 2020-01-31 19:51:40
  from 'C:\web\xampp\htdocs\genielogiciel2-master\tmp\template\form_add_circuit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e34773c5719e2_73231833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '898a714988ab3d78cace35a290ce5ccff9ddec2d' => 
    array (
      0 => 'C:\\web\\xampp\\htdocs\\genielogiciel2-master\\tmp\\template\\form_add_circuit.tpl',
      1 => 1580496612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:select_statutcircuit.tpl' => 1,
    'file:select_themes.tpl' => 1,
  ),
),false)) {
function content_5e34773c5719e2_73231833 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="padding: 20px">
<a href="../pages/admin.php"><?php echo $_smarty_tpl->tpl_vars['voc']->value["lb_h1_list_circuit"];?>
</a>
<h1><?php echo $_smarty_tpl->tpl_vars['voc']->value["lb_h1_add_circuit"];?>
</h1>

<form class="animated zoomInRight" id="AddFormCircuit">
    <div class="form-group animated zoomInRight">
        <label><?php echo $_smarty_tpl->tpl_vars['voc']->value['lb_status'];?>
:</label>
        <select class="form-control"  id="SelectStatus" name="SelectStatut" style="width:25%;display: inline;">
            <?php $_smarty_tpl->_subTemplateRender("file:select_statutcircuit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('arr_list_statutcircuit'=>$_smarty_tpl->tpl_vars['arr_list_statutcircuit']->value), 0, false);
?>
        </select>
        <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['voc']->value["btn_add_status"];?>
" class="btn btn-primary" style="display: inline" onclick="BtnViewNewStatut()">
    </div>
    <div class="form-group animated zoomInRight" id="ViewNewStatut" style="width: 30%;margin-left: 20%;display: none;">
        <label>ID:</label>
        <input type="number" style="width: 100px;" class="form-control" id="NewIdStatut">
        <label><?php echo $_smarty_tpl->tpl_vars['voc']->value['lb_status'];?>
</label>
        <input type="text" class="form-control" id="NewNameStatut">
        <br>
        <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['voc']->value["btn_submit"];?>
" id="btn_add_hotel" class="btn btn-success" onclick="BtnAddStatus()">
        <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['voc']->value["btn_cancel"];?>
" id="btn_not_hotel" class="btn btn-secondary" onclick="BtnNotStatut()">
    </div>
    <div class="form-group animated zoomInRight">
        <label><?php echo $_smarty_tpl->tpl_vars['voc']->value["lb_title"];?>
</label>
        <input type="text" class="form-control" id="input_title" name="input_title">
    </div>
    <div class="form-group animated zoomInRight">
        <label><?php echo $_smarty_tpl->tpl_vars['voc']->value["lb_price"];?>
</label>
        <input type="text" class="form-control" id="prix" name="prix" style="width: 100px" value="0">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1"><?php echo $_smarty_tpl->tpl_vars['voc']->value["lb_date_depart"];?>
</label>
        <div class="col-10">
            <input class="form-control" style="width: 250px" type="datetime-local" id="input_date" name="input_date">
        </div>
    </div>
    <div>
        <label for="exampleInputEmail1" id="label_description_circuit"><?php echo $_smarty_tpl->tpl_vars['voc']->value["lb_description"];?>
</label>
        <textarea id="NicEdit" cols="70" rows="5" style="width: 60%" >Some Sample Text</textarea>
    </div>
    <div class="form-group">
        <label style="display: block"><?php echo $_smarty_tpl->tpl_vars['voc']->value["lb_theme"];?>
</label>
        <select class="form-control"  id="SelectTheme" name="SelectTheme" style="width:30%;display: inline;">
            <?php $_smarty_tpl->_subTemplateRender("file:select_themes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('arr_theme_circuit'=>$_smarty_tpl->tpl_vars['voc']->value["arr_theme_circuit"]), 0, false);
?>
        </select>
        <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['voc']->value["btn_add_theme"];?>
" class="btn btn-primary" style="display: inline" onclick="BtnViewNewTheme()">
    </div>
    <div class="form-group animated zoomInRight" id="ViewNewTheme" style="width: 30%;margin-left: 10%;display: none;">
        <label><?php echo $_smarty_tpl->tpl_vars['voc']->value["lb_add_new_theme"];?>
</label>
        <input type="text" class="form-control" id="NewTheme">
        <br>
        <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['voc']->value["btn_submit"];?>
" id="btn_add_theme" class="btn btn-success" onclick="BtnAddTheme()">
        <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['voc']->value["btn_cancel"];?>
" id="btn_not_theme" class="btn btn-secondary" onclick="BtnNotTheme()">
    </div>
    <div class="form-group animated zoomInRight" style="width: 35%">
        <label><?php echo $_smarty_tpl->tpl_vars['voc']->value["lb_ville_depart"];?>
</label>
        <input type="text" class="form-control" id="input_ville_depart" name="input_ville_depart">
    </div>
    <input type="button" id="btn_add_circuit" class="btn btn-success" value="<?php echo $_smarty_tpl->tpl_vars['voc']->value["btn_submit"];?>
" onclick="BtnAddCircuit()">
    <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['voc']->value["btn_cancel"];?>
" id="btn_not_theme" class="btn btn-secondary" onclick="location.href='admin.php'">
</form>
<?php echo '<script'; ?>
 src="../libs/nicEdit-latest.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../js/ivan-js.js"><?php echo '</script'; ?>
>
</div><?php }
}
