<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-25 19:36:51
  from 'C:\xampp\htdocs\proyecto-de-catedra\templates\busqueda.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef4e0b3450ad3_23107569',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '448a5e4e48117900ea7ef72de4a9073777d2f130' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto-de-catedra\\templates\\busqueda.tpl',
      1 => 1593106605,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef4e0b3450ad3_23107569 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="buscar_eventos"  method="GET" enctype="multipart/form-data">
<input type="text" name='nombre_evento'  placeholder="buscar eventos">
<input type="submit" value="Buscar" >
</form><?php }
}
