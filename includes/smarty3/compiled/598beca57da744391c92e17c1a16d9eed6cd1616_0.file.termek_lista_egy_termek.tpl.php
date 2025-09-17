<?php
/* Smarty version 3.1.30, created on 2018-05-18 16:02:04
  from "/var/www/vhosts/lencsek.hu/uj.lencsek.hu/sablonkod/new/termek_lista_egy_termek.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5afedcdc410b18_40160864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '598beca57da744391c92e17c1a16d9eed6cd1616' => 
    array (
      0 => '/var/www/vhosts/lencsek.hu/uj.lencsek.hu/sablonkod/new/termek_lista_egy_termek.tpl',
      1 => 1526644748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5afedcdc410b18_40160864 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="product-tile col-md-3 col-sm-4 col-xs-6">
      <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value;
echo rawurlencode($_smarty_tpl->tpl_vars['egy_termek']->value['termek_alnev']);?>
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
