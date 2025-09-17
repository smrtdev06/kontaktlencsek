<?php
/* Smarty version 3.1.30, created on 2022-09-01 02:34:44
  from "/var/www/vhosts/kontaktlencsek.hu/httpdocs/sablonkod/kiegeszitok_oldal/kiegeszitok.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63101a4474a960_20571211',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '651309031481c6e048449515fe44eb0c381e46d3' => 
    array (
      0 => '/var/www/vhosts/kontaktlencsek.hu/httpdocs/sablonkod/kiegeszitok_oldal/kiegeszitok.tpl',
      1 => 1543406318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:bal-menu.tpl' => 1,
    'file:felso_banner_alatt.tpl' => 1,
    'file:brand_menu.tpl' => 1,
    'file:o_kategoria/egy_termek.tpl' => 1,
  ),
),false)) {
function content_63101a4474a960_20571211 (Smarty_Internal_Template $_smarty_tpl) {
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
                <div class="col-md-12"><a href="#" class="btn btn-filter" id="showFilter"><i class="fa fa-filter" aria-hidden="true"></i> Szűrők </a></div>
                <div class="clearfix"></div>
                
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['termekek']->value, 'egy_termek');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['egy_termek']->value) {
?>
                    <?php $_smarty_tpl->_subTemplateRender("file:o_kategoria/egy_termek.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
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
