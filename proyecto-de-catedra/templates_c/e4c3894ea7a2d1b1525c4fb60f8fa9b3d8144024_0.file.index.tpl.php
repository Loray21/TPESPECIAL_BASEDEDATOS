<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-25 20:36:50
  from 'C:\xampp\htdocs\proyecto-de-catedra\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef4eec201eab5_60980180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4c3894ea7a2d1b1525c4fb60f8fa9b3d8144024' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto-de-catedra\\templates\\index.tpl',
      1 => 1593110181,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef4eec201eab5_60980180 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<div class="container">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['top10_usuarios']->value, 's');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
?>
<p><?php echo $_smarty_tpl->tpl_vars['s']->value->nombre;?>
,<?php echo $_smarty_tpl->tpl_vars['s']->value->apellido;?>
</p>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
