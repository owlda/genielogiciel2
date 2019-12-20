<?php
/* Smarty version 3.1.33, created on 2019-12-20 01:55:21
  from 'C:\web\xampp\htdocs\genielogiciel2-master\tmp\template\menu_client.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dfc1bf939bee6_29989508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d90791b5bbb0253577466d5a20db4c15e83fe1d' => 
    array (
      0 => 'C:\\web\\xampp\\htdocs\\genielogiciel2-master\\tmp\\template\\menu_client.tpl',
      1 => 1576801432,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dfc1bf939bee6_29989508 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-light navbar-expand-md navigation-clean-button bg-warning">
    <div class="container"><img src="assets/img/travel-icon.png" style="width: 30px;height: 30px;margin-right: 5px;"><a class="navbar-brand" href="#">Voyages Merveilleux</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse"
             id="navcol-1">
            <ul class="nav navbar-nav mr-auto">
                <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Circuits</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#">La carte</a></li>
                <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Profile</a>
                    <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">Mon espace</a><a class="dropdown-item" role="presentation" href="#">Panier</a><a class="dropdown-item" role="presentation" href="#">Notifications</a></div>
                </li>
            </ul>
            <span class="navbar-text actions"><a class="login" href="/cart.php"><i class="fas fa-shopping-cart"></i><a class="login" href="#"><?php echo $_smarty_tpl->tpl_vars['courriel']->value;?>
</a><a class="btn btn-light action-button" role="button" href="index_ren.php" onclick="deconnect();">Deconnexion</a></span>
            <select
                    style="margin: 5px;">
                <option value="12" selected="">FR</option>
                <option value="13">EN</option>
                <option value="14">ES</option>
            </select>
        </div>
    </div>
</nav><?php }
}
