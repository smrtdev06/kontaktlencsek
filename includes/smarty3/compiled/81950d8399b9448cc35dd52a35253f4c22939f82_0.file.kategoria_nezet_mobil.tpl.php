<?php
/* Smarty version 3.1.30, created on 2018-08-30 15:39:18
  from "/var/www/vhosts/lencsek.hu/uj.lencsek.hu/sablonkod/nezetek/kategoria_nezet_mobil.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b87f386467711_41828850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81950d8399b9448cc35dd52a35253f4c22939f82' => 
    array (
      0 => '/var/www/vhosts/lencsek.hu/uj.lencsek.hu/sablonkod/nezetek/kategoria_nezet_mobil.tpl',
      1 => 1535636357,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:felso_banner_alatt.tpl' => 1,
    'file:bal-menu.tpl' => 1,
    'file:new/termek_lista_egy_termek.tpl' => 1,
  ),
),false)) {
function content_5b87f386467711_41828850 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <section class="product-pg-banner">
        <h1 class="product-heading"><?php echo $_smarty_tpl->tpl_vars['kat_nev']->value;?>
    

            <ul class="three_menus">
              <li><a href="#">Látásvizsgálat</a></li>
              <!--<li><a href="#">Akciók</a></li>-->
              <li><a href="#">Újdonságok</a></li>
            </ul>
        </h1>
    </section>
    
    <!--
    <section class="banner-brands">
        <ul>
            <li><a href="#"><img src="images/brand-logo/boushnlomb.png"> </a></li>
            <li><a href="#"><img src="images/brand-logo/alcon.png"> </a></li>
            <li><a href="#"><img src="images/brand-logo/copper-vision.png"> </a></li>
            <li><a href="#"><img src="images/brand-logo/johnsons.png"> </a></li><br>
            
            <li class="view-all"><a href="#">Összes termék</a></li>
        </ul>
    </section>
    -->
    
    <?php $_smarty_tpl->_subTemplateRender("file:felso_banner_alatt.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <section class="product-container clearfix">
        <div class="col-xs-12 col-sm-3 col-lg-2 left-section">
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
            <div id="stickyalias"></div>

            <div id="stickyheader">
            
            <div class="row filterByValue" >
                <div class="col-md-12">
                <a href="#" class="btn btn-filter" id="showFilter"><i class="fa fa-filter" aria-hidden="true"></i> Szűrők </a>
                    <select class="form-control select-block">
                        <option selected="" disabled="" value="">Rendezés</option>
                        <!--<option value="oakleyeuRelevanceSort">Relevance</option>-->
                        <option selected="" value="oakleyeuName-ascSort">Név (növekvő)</option>
                        <option value="oakleyeuName-descSort">Név (csökkenő)</option>
                        <option value="oakleyeuPriceValue-ascSort">Ár (növekvő)</option>
                        <option value="oakleyeuPriceValue-descSort">Ár (csökkenő)</option>
                        <option value="oakleyeuNewest-descSort">Legújabb</option>
                        <option value="oakleyeuBestSellers-booleanSort">Népszerű</option>
                    </select>

                    <!--
                    <ul class="pagination pull-right">
                        <li><a href="#">1</a>
                        </li>
                        <li><a href="#">2</a>
                        </li>
                        <li><a href="#">3</a>
                        </li>
                        <li><a href="#">4</a>
                        </li>
                        <li><a href="#">5</a>
                        </li>
                    </ul>
                    -->
                    <div class="clearfix"></div>

                    <!--
                    <div class="selected-filter">
                        <ul>
                            <h5>Kiválasztott szűrők</h5>
                            <li>
                                <div class="alert alert-default alert-dismissable">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> Gyártó neve
                                </div>
                            </li>
                            
                            <li>
                                <div class="alert alert-default alert-dismissable">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> High Definition Optics®
                                </div>
                            </li>
                            
                        </ul>

                    </div>        
                    -->
                    
                </div>

            </div>
            
            </div>
            
            
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
    </section>
<?php }
}
