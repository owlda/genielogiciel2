<?php
/* Smarty version 3.1.33, created on 2020-02-07 04:33:13
  from 'C:\web\xampp\htdocs\genielogiciel2-master\tmp\template\stat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e3cda79e76a65_16723383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da816cb1eaad7f3def196ce58e1ece676c57a532' => 
    array (
      0 => 'C:\\web\\xampp\\htdocs\\genielogiciel2-master\\tmp\\template\\stat.tpl',
      1 => 1580496612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3cda79e76a65_16723383 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="table table-hover">
    <tbody>
    <tr style="background-color: #c1e2b3">
        <th scope="row" >Nombre de tous les étapes</th>
        <th scope="row">Nombre de tous les jours</th>
        <th scope="row">Prix (étapes et jours)</th>
    </tr>
    <tr>
        <th scope="row"><?php echo $_smarty_tpl->tpl_vars['count_etape']->value;?>
</th>
        <th scope="row"><?php echo $_smarty_tpl->tpl_vars['all_jour']->value;?>
</th>
        <th scope="row"><?php echo $_smarty_tpl->tpl_vars['all_prix']->value;?>
$</th>
    </tr>
    <?php if ($_smarty_tpl->tpl_vars['count_etape']->value > 0) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_etape']->value, 'etape');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['etape']->value) {
?>
            <tr style="background-color: #c1e2b3">
                <th scope="row">ID Etape</th>
                <th scope="row">numeroEtap</th>
                <th scope="row">Nombre de jours</th>
                <th scope="row">Prix</th>
            </tr>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['etape']->value['idEtape'];?>

                    <small><br><?php echo $_smarty_tpl->tpl_vars['etape']->value['dateDebut'];?>

                    <br><?php echo $_smarty_tpl->tpl_vars['etape']->value['dateFin'];?>
</small></td>
                <td><?php echo $_smarty_tpl->tpl_vars['etape']->value['numeroEtap'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['etape']->value['count_jour'];?>
</td>
                <td style="font-weight: bold"><?php echo $_smarty_tpl->tpl_vars['etape']->value['prix'];?>
$</td>
            </tr>
            <?php if ($_smarty_tpl->tpl_vars['etape']->value['count_jour'] > 0) {?>
                <tr style="background-color: #b3b7bb">
                    <td></td>
                    <th scope="row">ID Jour</th>
                    <th scope="row">Jour</th>
                    <th scope="row">Prix</th>
                    <th scope="row">numeroJour</th>
                    <th scope="row">Nombre de restaurents</th>
                    <th scope="row">Nombre d'activités</th>
                    <th scope="row">Nombre d'hôtels</th>
                </tr>
                <?php $_smarty_tpl->_assignInScope('tmp_count', 1);?>
                <?php
$__section_ind_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['etape']->value['arr_jour']) ? count($_loop) : max(0, (int) $_loop));
$__section_ind_0_start = $__section_ind_0_loop - 1;
$__section_ind_0_total = min(($__section_ind_0_start+ 1), $__section_ind_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_ind'] = new Smarty_Variable(array());
if ($__section_ind_0_total !== 0) {
for ($__section_ind_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ind']->value['index'] = $__section_ind_0_start; $__section_ind_0_iteration <= $__section_ind_0_total; $__section_ind_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ind']->value['index'] -= 1){
?>
                    <tr>
                        <td></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['etape']->value['arr_jour'][(isset($_smarty_tpl->tpl_vars['__smarty_section_ind']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ind']->value['index'] : null)]['idJour'];?>
</td>
                        <td style="color: #6f42c1;font-weight: bold">Jour <?php echo $_smarty_tpl->tpl_vars['tmp_count']->value;?>
</td>
                        <td style="font-weight: bold"><?php echo $_smarty_tpl->tpl_vars['etape']->value['arr_jour'][(isset($_smarty_tpl->tpl_vars['__smarty_section_ind']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ind']->value['index'] : null)]['prix'];?>
$</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['etape']->value['arr_jour'][(isset($_smarty_tpl->tpl_vars['__smarty_section_ind']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ind']->value['index'] : null)]['numeroJour'];?>
</td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['etape']->value['arr_jour'][(isset($_smarty_tpl->tpl_vars['__smarty_section_ind']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ind']->value['index'] : null)]['count_restaurent'];?>

                                <ul class="list-group">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['etape']->value['arr_jour'][(isset($_smarty_tpl->tpl_vars['__smarty_section_ind']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ind']->value['index'] : null)]['Restaurent'], 'restaurent');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['restaurent']->value) {
?>
                                        <li class="list-group-item ">
                                            <strong>ID - <?php echo $_smarty_tpl->tpl_vars['restaurent']->value['idRestaurent'];?>
</strong>
                                            <hr>
                                            <strong>Titre:</strong> <?php echo $_smarty_tpl->tpl_vars['restaurent']->value['titre'];?>

                                            <hr>
                                            <strong>Site:</strong> <?php echo $_smarty_tpl->tpl_vars['restaurent']->value['site'];?>

                                            <hr>
                                        </li>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                        </td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['etape']->value['arr_jour'][(isset($_smarty_tpl->tpl_vars['__smarty_section_ind']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ind']->value['index'] : null)]['count_activity'];?>

                            <ul class="list-group">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['etape']->value['arr_jour'][(isset($_smarty_tpl->tpl_vars['__smarty_section_ind']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ind']->value['index'] : null)]['Activity'], 'activity');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['activity']->value) {
?>
                                    <li class="list-group-item">
                                        <strong>ID - <?php echo $_smarty_tpl->tpl_vars['activity']->value['idActivity'];?>
</strong>
                                        <hr>
                                        <strong>Titre:</strong> <?php echo $_smarty_tpl->tpl_vars['activity']->value['titre'];?>

                                        <hr>
                                        <strong>Description:</strong> <?php echo $_smarty_tpl->tpl_vars['activity']->value['description'];?>

                                        <hr>
                                    </li>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ul>
                        </td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['etape']->value['arr_jour'][(isset($_smarty_tpl->tpl_vars['__smarty_section_ind']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ind']->value['index'] : null)]['count_hotel'];?>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['etape']->value['arr_jour'][(isset($_smarty_tpl->tpl_vars['__smarty_section_ind']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ind']->value['index'] : null)]['Hotel'], 'hotel');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hotel']->value) {
?>
                                <li class="list-group-item">
                                    <strong>ID - <?php echo $_smarty_tpl->tpl_vars['hotel']->value['idHotel'];?>
</strong>
                                    <hr>
                                    <strong>Titre:</strong> <?php echo $_smarty_tpl->tpl_vars['hotel']->value['titre'];?>

                                    <hr>
                                    <strong>Site:</strong> <?php echo $_smarty_tpl->tpl_vars['hotel']->value['site'];?>

                                    <hr>
                                </li>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </td>
                    </tr>
                    <?php $_smarty_tpl->_assignInScope('tmp_count', $_smarty_tpl->tpl_vars['tmp_count']->value+1);?>
                <?php
}
}
?>
            <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
    </tbody>
</table><?php }
}
