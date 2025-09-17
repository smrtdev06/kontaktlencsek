<?php
/* Smarty version 3.1.30, created on 2022-12-02 15:04:28
  from "/var/www/vhosts/kontaktlencsek.hu/httpdocs/sablonkod/o_kategoria/egy_termek.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_638a13fc99e058_70284140',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bee97746481beadb8860eb53e1aab29842457d1' => 
    array (
      0 => '/var/www/vhosts/kontaktlencsek.hu/httpdocs/sablonkod/o_kategoria/egy_termek.tpl',
      1 => 1669993449,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638a13fc99e058_70284140 (Smarty_Internal_Template $_smarty_tpl) {
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
    
    </span>
  </span>
  </a>
</div>

  
  
  
                
  

<?php }
}
