<?php
/* Smarty version 3.1.30, created on 2018-05-17 11:39:53
  from "C:\xampp\htdocs\lencsek\sablonkod\nezetek\gyarto_nezet.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5afd4de950d732_36885114',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed4354654257c62a07898714bd7a17e24a22b7fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lencsek\\sablonkod\\nezetek\\gyarto_nezet.tpl',
      1 => 1494512891,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:nezetek/osszes_egy_termek.tpl' => 1,
  ),
),false)) {
function content_5afd4de950d732_36885114 (Smarty_Internal_Template $_smarty_tpl) {
?>

<style type="text/css">
p.lapozo a:link {
    background-color: #F7F7F7;
}

</style>

<div id="keresobox" style="width:755px; background-color: #f7f7f7; padding:10px;">
<form id="kform" name="kform" action="<?php echo $_smarty_tpl->tpl_vars['sitenev']->value;
echo $_smarty_tpl->tpl_vars['q']->value;?>
" method="get">
<input type="hidden" name="tcs" value="<?php echo $_smarty_tpl->tpl_vars['tcs']->value;?>
">

<div style="float:right;">
Terméknév: <input type="text" name="keres" size="16" value="<?php echo $_smarty_tpl->tpl_vars['keres']->value;?>
"> <input type="submit" value="Keres">
</div>


<div style="float:left;">
Rendezés: 
<select name="r" size="1" style="border: 1px solid #46b7cb; color: #80766e;" onchange="document.kform.submit()"> 
  <option value="1" <?php if ($_smarty_tpl->tpl_vars['r']->value == 1) {?>selected<?php }?>>Név szerint</option>
  <option value="2" <?php if ($_smarty_tpl->tpl_vars['r']->value == 2) {?>selected<?php }?>>Ár szerint növekvő</option>
  <option value="3" <?php if ($_smarty_tpl->tpl_vars['r']->value == 3) {?>selected<?php }?>>Ár szerint csökkenő</option>
</select>
</div>

<!--
<p class="lapozo" style="text-align:center;">
<a href="">Előző</a> <a href="">1</a> <a href="">2</a> <a href="">3</a> <a href="">4</a> <a href="">Következő</a>
</p>
-->
&nbsp;


</form>
</div>


<h1><?php echo $_smarty_tpl->tpl_vars['gyarto_nev']->value;?>
</h1>
<div class="cont-block" style="border-color:#80776f; display:block; height:auto; padding:0; float:left; ">
 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['termekek']->value, 'egy_termek');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['egy_termek']->value) {
?>
          <?php $_smarty_tpl->_subTemplateRender("file:nezetek/osszes_egy_termek.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
    

</div>

<?php }
}
