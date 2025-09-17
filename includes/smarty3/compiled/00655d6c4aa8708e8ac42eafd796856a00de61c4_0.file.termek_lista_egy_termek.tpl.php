<?php
/* Smarty version 3.1.30, created on 2018-05-17 11:39:25
  from "C:\xampp\htdocs\lencsek\sablonkod\nezetek\termek_lista_egy_termek.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5afd4dcd53e1f9_99832332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00655d6c4aa8708e8ac42eafd796856a00de61c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lencsek\\sablonkod\\nezetek\\termek_lista_egy_termek.tpl',
      1 => 1397566104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5afd4dcd53e1f9_99832332 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="termek1">
	
	<a href="<?php echo $_smarty_tpl->tpl_vars['site']->value;
echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_alnev'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_nev'];?>
">
		<img src="<?php echo $_smarty_tpl->tpl_vars['kepsrc']->value;
echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_kep'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_nev'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_nev'];?>
" border="0" />
	</a>
	
	<p class="marka" class="product-one-of-all-man" ><?php echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_gyarto'];?>
</p>
	<?php if ($_smarty_tpl->tpl_vars['egy_termek']->value['termek_akcios_ar'] > 0) {?>
	    <span class="ar_regi"><?php echo arformat($_smarty_tpl->tpl_vars['egy_termek']->value['termek_ar']);?>
</span>
	    <span class="ar"><?php echo arformat($_smarty_tpl->tpl_vars['egy_termek']->value['termek_akcios_ar']);?>
</span>
	<?php } else { ?>
	    <span class="ar"><?php echo arformat($_smarty_tpl->tpl_vars['egy_termek']->value['termek_ar']);?>
</span>
	<?php }?>
    
    <p class="tipus" style="width:160px;display:inline-block;"><a href="<?php echo $_smarty_tpl->tpl_vars['site']->value;
echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_alnev'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_nev'];?>
"><?php echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_nev'];?>
</a></p>

	<span class="cikkszam"><?php echo $_smarty_tpl->tpl_vars['egy_termek']->value['cikkszam'];?>
</span>
</div><?php }
}
