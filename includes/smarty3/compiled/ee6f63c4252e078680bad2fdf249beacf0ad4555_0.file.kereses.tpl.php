<?php
/* Smarty version 3.1.30, created on 2022-08-31 17:11:26
  from "/var/www/vhosts/kontaktlencsek.hu/httpdocs/sablonkod/kereses_oldal/kereses.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_630f963e81d977_42164400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee6f63c4252e078680bad2fdf249beacf0ad4555' => 
    array (
      0 => '/var/www/vhosts/kontaktlencsek.hu/httpdocs/sablonkod/kereses_oldal/kereses.tpl',
      1 => 1543408506,
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
function content_630f963e81d977_42164400 (Smarty_Internal_Template $_smarty_tpl) {
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

            
            
            <div id="stickyalias"></div>
            <!--
            <div id="stickyheader">
                <div class="row filterByValue" >
                    <div class="col-md-12">
                    <a href="#" class="btn btn-filter" id="showFilter"><i class="fa fa-filter" aria-hidden="true"></i> Szűrők </a>
                        <select class="form-control select-block">
                            <option selected="" disabled="" value="">Rendezés</option>
                            
                            <option selected="" value="oakleyeuName-ascSort">Név (növekvő)</option>
                            <option value="oakleyeuName-descSort">Név (csökkenő)</option>
                            <option value="oakleyeuPriceValue-ascSort">Ár (növekvő)</option>
                            <option value="oakleyeuPriceValue-descSort">Ár (csökkenő)</option>
                            <option value="oakleyeuNewest-descSort">Legújabb</option>
                            <option value="oakleyeuBestSellers-booleanSort">Népszerű</option>
                        </select>

                        <div class="clearfix"></div>

                    </div>
                </div>
            </div>
            -->
            <div class="clearfix"></div>
            <div class="row">
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
