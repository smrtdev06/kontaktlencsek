<?php
/* Smarty version 3.1.30, created on 2018-05-18 11:22:51
  from "/var/www/vhosts/lencsek.hu/uj.lencsek.hu/sablonkod/new/termek_valtozatok.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5afe9b6bbfb117_93777914',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c6536383756821950217e05eae1ae47cd350c65' => 
    array (
      0 => '/var/www/vhosts/lencsek.hu/uj.lencsek.hu/sablonkod/new/termek_valtozatok.tpl',
      1 => 1526559383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:new/egy_valtozat.tpl' => 1,
  ),
),false)) {
function content_5afe9b6bbfb117_93777914 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="pro-variatons">
<div class="container-fluid">
    <h2 class="heading">Változatok</h2>
    <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['termek_valtozatok']->value, 'egy_valtozat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['egy_valtozat']->value) {
?>
            <?php $_smarty_tpl->_subTemplateRender("file:new/egy_valtozat.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
        
        <div class="col-md-3 col-sm-4 col-xs-6">
            <div class="item"> 
                <span class="brand-logo left" data-toggle="tooltip" data-html="true" data-placement="right" title="Raktáron">R</span>
                <span class="brand-logo right" data-toggle="tooltip" data-html="true" data-placement="left" title="Polarizált lencse!">P</span>
                <a href="#"> 
                  <span class="brand-logo-variation"><img src="images/frame3.jpg" class="img-responsive"></span>
                    <h4>Day Acuvue TRUEYE (10 db) kontaktlencse  <small>53.540 Ft</small></h4>
                </a> 
            </div>
        </div>
    </div>
    
</div>
</section><?php }
}
