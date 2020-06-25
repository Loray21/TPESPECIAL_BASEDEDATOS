

<!DOCTYPE html>
<html lang="en">

<div class="container">
{foreach from=$usuarios item=s}
<li>{$s->nombre}</li>
{/foreach}
