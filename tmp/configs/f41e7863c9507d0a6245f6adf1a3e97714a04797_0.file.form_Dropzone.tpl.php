<?php
/* Smarty version 3.1.33, created on 2020-02-04 21:08:43
  from 'C:\web\xampp\htdocs\genielogiciel2-master\tmp\template\form_Dropzone.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e39cf4be312a1_76698042',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f41e7863c9507d0a6245f6adf1a3e97714a04797' => 
    array (
      0 => 'C:\\web\\xampp\\htdocs\\genielogiciel2-master\\tmp\\template\\form_Dropzone.tpl',
      1 => 1580496612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e39cf4be312a1_76698042 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"><?php echo '</script'; ?>
>

<form method="post" style="margin-left: 15%">
    <label for="NumberCircuit">ID Circuit</label><br>
    <input style="text-align:center;width: 100px" value="<?php echo $_smarty_tpl->tpl_vars['idNumeroC']->value;?>
" type="number" id="idNumeroC" name="idNumeroC"><br><br> <div class="form-group">
        <button type="submit" class="btn btn-primary" id="submitBtn" name="submitN">Changer ID</button>
    </div>
</form>
<div class="container">
    <form action="upload.php" class="dropzone" id="dropzoneFrom">
    </form>
    <br />
    <br />
    <div align="center">
        <button type="button" class="btn btn-info" id="submit-all">Upload</button>
    </div>
    <br />
    <br />
    <div id="preview"></div>
    <br />
    <br />
</div>
<?php }
}
