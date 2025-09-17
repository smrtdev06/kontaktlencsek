<?php
/* Smarty version 3.1.30, created on 2018-05-18 11:21:14
  from "/var/www/vhosts/lencsek.hu/uj.lencsek.hu/sablonkod/new/kezdooldal.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5afe9b0a9a1672_12812673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3fb7401c2080e4c28069977609e0f28103c11195' => 
    array (
      0 => '/var/www/vhosts/lencsek.hu/uj.lencsek.hu/sablonkod/new/kezdooldal.tpl',
      1 => 1526558195,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:bal-menu.tpl' => 1,
    'file:felso_banner.tpl' => 1,
    'file:felso_banner_alatt.tpl' => 1,
    'file:brand_menu.tpl' => 1,
    'file:new/kezdo_termekek.tpl' => 1,
  ),
),false)) {
function content_5afe9b0a9a1672_12812673 (Smarty_Internal_Template $_smarty_tpl) {
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

    
    <div class="col-md-9 col-sm-9 col-lg-10">
      <div class="row"> 
         
        <?php $_smarty_tpl->_subTemplateRender("file:felso_banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("file:felso_banner_alatt.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        
        <div class="col-md-12">

            <div class="content">
                <h1>Azon dolgozunk, hogy Ön is tisztán lásson!</h1>

                <p>A jelentősebb gyártók legkeresettebb termékeivel, garantáltan eredeti kontaktlencsékkel, ápolószerekkel és egyéb tartozékokkal várjuk Önt webáruházunkban!<br>
                Pénztárcabarát árak és gyors kiszolgálás - Lencsék.hu </p>
            </div>
         
            <?php $_smarty_tpl->_subTemplateRender("file:brand_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          
            <div id="stickyalias"></div>
            <div class="clearfix"></div>
          
            <?php $_smarty_tpl->_subTemplateRender("file:new/kezdo_termekek.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            
        </div>
        
        
        
        

      </div>
    </div>
  
  </div>
</section>






<?php }
}
