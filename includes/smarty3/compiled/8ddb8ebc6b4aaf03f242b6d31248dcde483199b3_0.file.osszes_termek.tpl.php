<?php
/* Smarty version 3.1.30, created on 2018-11-28 23:05:26
  from "/var/www/vhosts/kontaktlencsek.hu/ujdesign/sablonkod/nezetek/osszes_termek.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bff1126bad0c2_02688862',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ddb8ebc6b4aaf03f242b6d31248dcde483199b3' => 
    array (
      0 => '/var/www/vhosts/kontaktlencsek.hu/ujdesign/sablonkod/nezetek/osszes_termek.tpl',
      1 => 1354802480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:nezetek/osszes_egy_termek.tpl' => 2,
  ),
),false)) {
function content_5bff1126bad0c2_02688862 (Smarty_Internal_Template $_smarty_tpl) {
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
