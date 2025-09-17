<?php
/* Smarty version 3.1.30, created on 2018-11-28 13:33:24
  from "/var/www/vhosts/kontaktlencsek.hu/ujdesign/sablonkod/o_kategoria/egy_termek.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bfe8b14564ca1_77030523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb8e439323946c520508e2a1759eb29bf6dfd314' => 
    array (
      0 => '/var/www/vhosts/kontaktlencsek.hu/ujdesign/sablonkod/o_kategoria/egy_termek.tpl',
      1 => 1543408173,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bfe8b14564ca1_77030523 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="product-tile col-md-3 col-sm-4 col-xs-6">
  <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value;
echo rawurlencode($_smarty_tpl->tpl_vars['egy_termek']->value['termek_alnev']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_nev'];?>
" class="woocommerce-LoopProduct-link">
  <img class="brand-logo" src="images/johnsons.jpg">
  <figure class="ws-product-bg"><img src="<?php echo $_smarty_tpl->tpl_vars['kepsrc']->value;
echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_kep'];?>
"></figure>
  <h3><?php echo substr($_smarty_tpl->tpl_vars['egy_termek']->value['termek_nev'],0,30);
if ((preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['egy_termek']->value['termek_nev'], $tmp)) >= 29) {?>...<?php }?></h3>
  <span class="price">
    <span class="woocommerce-Price-amount amount"><?php if ($_smarty_tpl->tpl_vars['egy_termek']->value['termek_akcios_ar'] > 0) {
echo arformat($_smarty_tpl->tpl_vars['egy_termek']->value['termek_akcios_ar']);
} else {
echo arformat($_smarty_tpl->tpl_vars['egy_termek']->value['termek_ar']);
}?>
    <?php if ($_smarty_tpl->tpl_vars['egy_termek']->value['termek_akcios_ar'] > 0) {?><small><?php echo arformat($_smarty_tpl->tpl_vars['egy_termek']->value['termek_ar']);?>
</small><?php }?>
    </span>
  </span>
  </a>
</div>

  
  
  
                
  

<?php }
}
