<?php
/* Smarty version 3.1.30, created on 2022-09-04 11:49:04
  from "/var/www/vhosts/kontaktlencsek.hu/httpdocs/sablonkod/nezetek/osszes_termek.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_631490b0554e45_09251134',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bbfe925ea712e2153d8a22bcde992fd9873aeac' => 
    array (
      0 => '/var/www/vhosts/kontaktlencsek.hu/httpdocs/sablonkod/nezetek/osszes_termek.tpl',
      1 => 1354802480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:nezetek/osszes_egy_termek.tpl' => 2,
  ),
),false)) {
function content_631490b0554e45_09251134 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1><?php echo $_smarty_tpl->tpl_vars['ford']->value['kontaktlencsek'];?>
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

<div style="display:block; height:40px; width:100%; padding:0; float:left; ">

</div>
<h1><?php echo $_smarty_tpl->tpl_vars['ford']->value['kiegeszitok'];?>
</h1>

<div class="cont-block" style="border-color:#80776f; display:block; height:auto; padding:0; float:left; ">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kiegeszitok_alul']->value, 'egy_termek');
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
