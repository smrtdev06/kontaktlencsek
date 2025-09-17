<?php
/* Smarty version 3.1.30, created on 2018-09-21 09:55:57
  from "/var/www/vhosts/lencsek.hu/uj.lencsek.hu/sablonkod/nezetek/gyarto_nezet2.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ba4a40de0f6f4_84544626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc62858737677c4c4de0f6adaa9af9afd335865b' => 
    array (
      0 => '/var/www/vhosts/lencsek.hu/uj.lencsek.hu/sablonkod/nezetek/gyarto_nezet2.tpl',
      1 => 1537516556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:bal-menu.tpl' => 1,
    'file:felso_banner_alatt.tpl' => 1,
    'file:brand_menu.tpl' => 1,
    'file:new/termek_lista_egy_termek.tpl' => 1,
  ),
),false)) {
function content_5ba4a40de0f6f4_84544626 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="conatiner-fluid custom-container">
<div class="col-xs-12 col-sm-3 col-lg-2 left-section">

    <span class="blackBgMobile"></span>
      
    <div>
      <span class="blackBgMobile"></span>
        <!--<ul class="left-nav">
        <li><h1 class="main-cat">Mens</h1></li>
        <li><h2>Main Category</h2></li>
        <li><a href="#" class="active">Napszemüvegek</a></li>
        <li><a href="#">Dioptriás szemüvegek</a></li>
        <li><a href="#">Kiegészítők</a></li>
        <li><a href="#">Szemüvegek</a></li>
        <li><a href="#">Kontaktlencsék</a></li>
        
        </ul>-->
        <?php $_smarty_tpl->_subTemplateRender("file:bal-menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>

    
    <div class="col-xs-12 col-sm-9 col-lg-10">
            <?php $_smarty_tpl->_subTemplateRender("file:felso_banner_alatt.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            
            <?php $_smarty_tpl->_subTemplateRender("file:brand_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            
            <div class="clearfix"></div>
            <div class="row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['termekek']->value, 'egy_termek');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['egy_termek']->value) {
?>
                    <?php $_smarty_tpl->_subTemplateRender("file:new/termek_lista_egy_termek.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
            
            
    </div>
    
    
    
  
</div>
</section>






<?php }
}
