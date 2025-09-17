<?php
/* Smarty version 4.3.0, created on 2023-01-27 13:30:45
  from '/var/www/vhosts/kontaktlencsek.hu/httpdocs/sablonkod/new/kezdooldal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d3d205a49293_40549096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21387b1752990b6912b5f54a543b1eb57d26bdd7' => 
    array (
      0 => '/var/www/vhosts/kontaktlencsek.hu/httpdocs/sablonkod/new/kezdooldal.tpl',
      1 => 1543408437,
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
function content_63d3d205a49293_40549096 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="conatiner-fluid custom-container">
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
        <?php $_smarty_tpl->_subTemplateRender('file:bal-menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>

    
    <div class="col-md-9 col-sm-9 col-lg-10">
      <div class="row"> 
         
        <?php $_smarty_tpl->_subTemplateRender('file:felso_banner.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender('file:felso_banner_alatt.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender('file:brand_menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        
        <div class="col-md-12">
            
            <div class="content">
                <h1>Azon dolgozunk, hogy Ön is tisztán lásson!</h1>

                <p>A jelentősebb gyártók legkeresettebb termékeivel, garantáltan eredeti kontaktlencsékkel, ápolószerekkel és egyéb tartozékokkal várjuk Önt webáruházunkban!<br>
                Pénztárcabarát árak és gyors kiszolgálás - Kontaktlencsek.hu </p>
            </div>
            
                      
            <div id="stickyalias"></div>
            <div class="clearfix"></div>
          
            <?php $_smarty_tpl->_subTemplateRender('file:new/kezdo_termekek.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            
        </div>
        
        
        
        

      </div>
    </div>
  
  </div>
</section>






<?php }
}
