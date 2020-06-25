<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-25 18:03:29
  from 'C:\xampp\htdocs\proyecto-de-catedra\templates\busqueda_eventos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef4cad1d85d60_62651838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6eef370e9646065627e3d1e92bc2104a0d908052' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto-de-catedra\\templates\\busqueda_eventos.tpl',
      1 => 1593100939,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef4cad1d85d60_62651838 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html lang="en">

<div class="container">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 's');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
?>
<p><?php echo $_smarty_tpl->tpl_vars['s']->value->nombre;?>
</p>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
