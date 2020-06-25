<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-25 20:51:48
  from 'C:\xampp\htdocs\proyecto-de-catedra\templates\inicio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef4f24404df21_17164329',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c934e0f13f429e3c42ee43c00cd89e65b504cec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto-de-catedra\\templates\\inicio.tpl',
      1 => 1593111099,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef4f24404df21_17164329 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="buscar_eventos"  method="GET" enctype="multipart/form-data">
<input type="text" name='nombre_evento'  placeholder="buscar eventos">
<input type="submit" value="Buscar" >
</form>

<li> <a href='TOP10'> TOP 10 </a></li><?php }
}
