<?php
/* Smarty version 3.1.30, created on 2018-05-17 13:08:13
  from "C:\xampp\htdocs\lencsek\sablonkod\new\termek_lista_egy_termek.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5afd629d07fb56_31299891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '607f06a3911f0805c863899b64bf407751ed989a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lencsek\\sablonkod\\new\\termek_lista_egy_termek.tpl',
      1 => 1526555290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5afd629d07fb56_31299891 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="product-tile col-md-3 col-sm-4 col-xs-6">
      <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value;
echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_alnev'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_nev'];?>
" class="woocommerce-LoopProduct-link">
          <img class="brand-logo" src="images/johnsons.jpg">
            <figure class="ws-product-bg"><img src="<?php echo $_smarty_tpl->tpl_vars['kepsrc']->value;
echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_kep'];?>
" style="height: 200px;"></figure>
            <h3><?php echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_nev'];?>
</h3>
            <span class="price">
                <span class="woocommerce-Price-amount amount"><?php echo arformat($_smarty_tpl->tpl_vars['egy_termek']->value['termek_akcios_ar']);?>

                <small><?php echo arformat($_smarty_tpl->tpl_vars['egy_termek']->value['termek_ar']);?>
</small>
                </span>
            </span> 
      </a>
</div><?php }
}
