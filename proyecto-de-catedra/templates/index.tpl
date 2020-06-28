<!DOCTYPE html>
<html lang="en">

<div class="container">
{foreach from=$top10_usuarios item=s}
<p>{$s->nombre},{$s->apellido}</p>

{/foreach}

{include 'templates/footer.tpl'}
