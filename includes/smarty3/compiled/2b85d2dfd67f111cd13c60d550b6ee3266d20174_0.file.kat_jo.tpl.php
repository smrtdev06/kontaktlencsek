<?php
/* Smarty version 3.1.30, created on 2018-11-13 15:27:33
  from "/var/www/vhosts/kontaktlencsek.hu/ujdesign/sablonkod/o_kategoria/kat_jo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5beadf55cd0615_83742807',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b85d2dfd67f111cd13c60d550b6ee3266d20174' => 
    array (
      0 => '/var/www/vhosts/kontaktlencsek.hu/ujdesign/sablonkod/o_kategoria/kat_jo.tpl',
      1 => 1542118352,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:bal-menu.tpl' => 1,
    'file:o_kategoria/egy_termek.tpl' => 1,
  ),
),false)) {
function content_5beadf55cd0615_83742807 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="conatiner-fluid custom-container">

    <div class="col-xs-12 col-sm-3 col-lg-2 left-section">
    <span class="blackBgMobile"></span>
    
    <div>
        <span class="blackBgMobile"></span>
        <!--
        <ul class="left-nav">
            <li><h1 class="main-cat">Mens</h1></li>
            <li><h2>Main Category</h2></li>
            <li><a href="#" class="active">Napszemüvegek</a></li>
            <li><a href="#">Dioptriás szemüvegek</a></li>
            <li><a href="#">Kiegészítők</a></li>
            <li><a href="#">Szemüvegek</a></li>
            <li><a href="#">Kontaktlencsék</a></li>
        </ul>
        -->
      
        <?php $_smarty_tpl->_subTemplateRender("file:bal-menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        
    </div>

    
    <div class="col-md-9 col-sm-9 col-lg-10">
     <div class="row"> 
     



    

  
<div class="col-md-12">

<!--  
  <div class="content">
  <h1>Azon dolgozunk, hogy Ön is tisztán lásson!</h1>
  <p>A jelentősebb gyártók legkeresettebb termékeivel, garantáltan eredeti kontaktlencsékkel, ápolószerekkel és egyéb tartozékokkal várjuk Önt webáruházunkban!<br>
  Pénztárcabarát árak és gyors kiszolgálás - Lencsék.hu </p>
  </div>
-->




  
      <div id="stickyalias"></div>

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

                
        

        <!--
        <div class="product-tile  col-md-3 col-sm-4 col-xs-6">
          <a href="#" class="woocommerce-LoopProduct-link">
              <img class="brand-logo" src="images/johnsons.jpg">
                <figure class="ws-product-bg"><img src="images/products/6.jpg"></figure>
                <h3>1·Day Acuvue TRUEYE (10 db) kontaktlencse </h3>
                <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>62.820 Ft <small>72.820 Ft</small></span></span> 
          </a>
        </div>

        <div class="product-tile  col-md-3 col-sm-4 col-xs-6">
          <a href="#" class="woocommerce-LoopProduct-link">
              <img class="brand-logo" src="images/johnsons.jpg">
                <figure class="ws-product-bg"><img src="images/products/7.jpg"></figure>
                <h3>1·Day Acuvue TRUEYE (10 db) kontaktlencse </h3>
                <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>62.820 Ft <small>72.820 Ft</small></span></span> 
          </a>
        </div>
        
        
        <div class="product-tile  col-md-3 col-sm-4 col-xs-6">
          <a href="#" class="woocommerce-LoopProduct-link">
              <img class="brand-logo" src="images/alcon.jpg">
                <figure class="ws-product-bg"><img src="images/products/8.jpg"></figure>
                <h3>Air Optix Aqua (3 db) kontaktlencse </h3>
                <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>62.820 Ft <small>72.820 Ft</small></span></span> 
          </a>
        </div>

        <div class="product-tile  col-md-3 col-sm-4 col-xs-6">
          <a href="#" class="woocommerce-LoopProduct-link">
              <img class="brand-logo" src="images/alcon.jpg">
                <figure class="ws-product-bg"><img src="images/products/9.jpg"></figure>
                <h3>Air Optix Aqua (3 db) kontaktlencse </h3>
                <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>62.820 Ft <small>72.820 Ft</small></span></span> 
          </a>
        </div>
        
        <div class="product-tile  col-md-3 col-sm-4 col-xs-6">
          <a href="#" class="woocommerce-LoopProduct-link">
              <img class="brand-logo" src="images/alcon.jpg">
                <figure class="ws-product-bg"><img src="images/products/10.jpg"></figure>
                <h3>Air Optix Colors (2 db) kontaktlencse </h3>
                <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>62.820 Ft <small>72.820 Ft</small></span></span> 
          </a>
        </div>


        <div class="product-tile col-md-3 col-sm-4 col-xs-6">
          <a href="#" class="woocommerce-LoopProduct-link">
              <img class="brand-logo" src="images/johnsons.jpg">
                <figure class="ws-product-bg"><img src="images/products/1.jpg"></figure>
                <h3>1 Day Acuvue Moist for Astigmatism (30 db)</h3>
                <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>62.820 Ft <small>72.820 Ft</small></span></span> 
          </a>
        </div>
        
        
        <div class="product-tile col-md-3 col-sm-4 col-xs-6">
          <a href="#" class="woocommerce-LoopProduct-link">
              <img class="brand-logo" src="images/johnsons.jpg">
                <figure class="ws-product-bg"><img src="images/products/2.jpg"></figure>
                <h3>1·Day Acuvue Moist (10 db) kontaktlencse </h3>
                <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>62.820 Ft <small>72.820 Ft</small></span></span> 
          </a>
        </div>

        <div class="product-tile col-md-3 col-sm-4 col-xs-6">
          <a href="#" class="woocommerce-LoopProduct-link">
              <img class="brand-logo" src="images/johnsons.jpg">
                <figure class="ws-product-bg"><img src="images/products/3.jpg"></figure>
                <h3>
1·Day Acuvue Moist (30 db) kontaktlencse </h3>
                <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>62.820 Ft <small>72.820 Ft</small></span></span> 
          </a>
        </div>
        
        <div class="product-tile col-md-3 col-sm-4 col-xs-6">
          <a href="#" class="woocommerce-LoopProduct-link">
              <img class="brand-logo" src="images/johnsons.jpg">
                <figure class="ws-product-bg"><img src="images/products/4.jpg"></figure>
                <h3>1·Day Acuvue TRUEYE (10 db) kontaktlencse </h3>
                <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>62.820 Ft <small>72.820 Ft</small></span></span> 
          </a>
        </div>

        <div class="product-tile col-md-3 col-sm-4 col-xs-6">
          <a href="#" class="woocommerce-LoopProduct-link">
              <img class="brand-logo" src="images/johnsons.jpg">
                <figure class="ws-product-bg"><img src="images/products/5.jpg"></figure>
                <h3>1·Day Acuvue TRUEYE (10 db) kontaktlencse </h3>
                <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>62.820 Ft <small>72.820 Ft</small></span></span> 
          </a>
        </div>

        <div class="product-tile col-md-3 col-sm-4 col-xs-6">
          <a href="#" class="woocommerce-LoopProduct-link">
              <img class="brand-logo" src="images/johnsons.jpg">
                <figure class="ws-product-bg"><img src="images/products/6.jpg"></figure>
                <h3>1·Day Acuvue TRUEYE (10 db) kontaktlencse </h3>
                <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>62.820 Ft <small>72.820 Ft</small></span></span> 
          </a>
        </div>

        <div class="product-tile col-md-3 col-sm-4 col-xs-6">
          <a href="#" class="woocommerce-LoopProduct-link">
              <img class="brand-logo" src="images/johnsons.jpg">
                <figure class="ws-product-bg"><img src="images/products/7.jpg"></figure>
                <h3>1·Day Acuvue TRUEYE (10 db) kontaktlencse </h3>
                <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>62.820 Ft <small>72.820 Ft</small></span></span> 
          </a>
        </div>

        <div class="product-tile col-md-3 col-sm-4 col-xs-6">
          <a href="#" class="woocommerce-LoopProduct-link">
              <img class="brand-logo" src="images/alcon.jpg">
                <figure class="ws-product-bg"><img src="images/products/8.jpg"></figure>
                <h3>Air Optix Aqua (3 db) kontaktlencse </h3>
                <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>62.820 Ft <small>72.820 Ft</small></span></span> 
          </a>
        </div>

        <div class="product-tile col-md-3 col-sm-4 col-xs-6">
          <a href="#" class="woocommerce-LoopProduct-link">
              <img class="brand-logo" src="images/alcon.jpg">
                <figure class="ws-product-bg"><img src="images/products/9.jpg"></figure>
                <h3>Air Optix Aqua (3 db) kontaktlencse </h3>
                <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>62.820 Ft <small>72.820 Ft</small></span></span> 
          </a>
        </div>

        <div class="product-tile col-md-3 col-sm-4 col-xs-6">
          <a href="#" class="woocommerce-LoopProduct-link">
              <img class="brand-logo" src="images/alcon.jpg">
                <figure class="ws-product-bg"><img src="images/products/10.jpg"></figure>
                <h3>Air Optix Colors (2 db) kontaktlencse </h3>
                <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>62.820 Ft <small>72.820 Ft</small></span></span> 
          </a>
        </div>
        -->

        <div class="clearfix"></div>

        <!--
      <div id="stickyheader">
      
          <div class="filterByValue">
            <div class="col-md-12">
              <select class="form-control select-block">
                <option selected="" disabled="" value="">Sort By</option>
                <option value="oakleyeuRelevanceSort">Relevance</option>
                <option selected="" value="oakleyeuName-ascSort">Name (ascending) rhherihu</option>
                <option value="oakleyeuName-descSort">Name (descending)</option>
                <option value="oakleyeuPriceValue-ascSort">Price (lowest first)</option>
                <option value="oakleyeuPriceValue-descSort">Price (highest first)</option>
                <option value="oakleyeuNewest-descSort">Newest</option>
                <option value="oakleyeuBestSellers-booleanSort">Best Sellers</option>
              </select>

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

              <div class="clearfix"></div>
            </div>

            <div class="clearfix"></div>
          </div>
      
      </div>
      -->
    
      </div>
    </div>


  </div>
</div>
</section>
<?php }
}
