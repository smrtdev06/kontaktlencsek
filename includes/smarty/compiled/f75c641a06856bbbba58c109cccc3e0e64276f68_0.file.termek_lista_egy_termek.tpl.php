<?php
/* Smarty version 4.3.0, created on 2023-01-27 13:30:45
  from '/var/www/vhosts/kontaktlencsek.hu/httpdocs/sablonkod/new/termek_lista_egy_termek.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d3d205a67e46_86271576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f75c641a06856bbbba58c109cccc3e0e64276f68' => 
    array (
      0 => '/var/www/vhosts/kontaktlencsek.hu/httpdocs/sablonkod/new/termek_lista_egy_termek.tpl',
      1 => 1669993737,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d3d205a67e46_86271576 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-tile col-md-3 col-sm-4 col-xs-6">
      <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value;
echo rawurlencode((string)$_smarty_tpl->tpl_vars['egy_termek']->value['termek_alnev']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_nev'];?>
" class="woocommerce-LoopProduct-link">
          <img class="brand-logo" src="images/johnsons.jpg">
            <figure class="ws-product-bg"><img src="<?php echo $_smarty_tpl->tpl_vars['kepsrc']->value;
echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_kep'];?>
" style="height: 140px;"></figure>
            <h3><?php echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_nev'];?>
</h3>
            <span class="price">
                <span class="woocommerce-Price-amount amount"><?php if ($_smarty_tpl->tpl_vars['egy_termek']->value['termek_akcios_ar'] > 0) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'arformat' ][ 0 ], array( $_smarty_tpl->tpl_vars['egy_termek']->value['termek_akcios_ar'] ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'arformat' ][ 0 ], array( $_smarty_tpl->tpl_vars['egy_termek']->value['termek_ar'] ));
}?>
                                </span>
            </span> 
      </a>
</div>
<?php }
}
