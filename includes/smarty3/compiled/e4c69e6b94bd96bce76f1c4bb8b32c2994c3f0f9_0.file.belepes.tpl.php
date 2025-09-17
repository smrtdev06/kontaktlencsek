<?php
/* Smarty version 3.1.30, created on 2018-11-06 16:37:47
  from "/var/www/vhosts/kontaktlencsek.hu/ujdesign/sablonkod/belepes_oldal/belepes.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5be1b54bd84763_28628950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4c69e6b94bd96bce76f1c4bb8b32c2994c3f0f9' => 
    array (
      0 => '/var/www/vhosts/kontaktlencsek.hu/ujdesign/sablonkod/belepes_oldal/belepes.tpl',
      1 => 1533040463,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:kosar_oldal/rendeles_menete.tpl' => 1,
  ),
),false)) {
function content_5be1b54bd84763_28628950 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:kosar_oldal/rendeles_menete.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<section class="product-container clearfix product-details">
    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 left-section-product">

        <h1 class="product_title"><?php echo $_smarty_tpl->tpl_vars['ford']->value['regisztracio_vagy_bejelentkezes'];?>
</h1>
        
        <?php if (!empty($_smarty_tpl->tpl_vars['reg_hiba']->value) || !empty($_smarty_tpl->tpl_vars['belep_hiba']->value) || !empty($_smarty_tpl->tpl_vars['hibauzenet']->value)) {?>
        <div class="col-md-6">
            <?php echo $_smarty_tpl->tpl_vars['hibauzenet']->value;?>

            <?php echo $_smarty_tpl->tpl_vars['reg_hiba']->value;?>

            <?php echo $_smarty_tpl->tpl_vars['belep_hiba']->value;?>

        </div>
        <?php }?>        
        
        
<div class="clearfix  mt20"></div>
<div class="lens_selection clearfix step4" >
            
            
    <div class="main-flex" >
    <div class="col-md-6 left-form">
        <h3><?php echo $_smarty_tpl->tpl_vars['ford']->value['uj_vasarlo'];?>
</h3>
        <p><?php echo $_smarty_tpl->tpl_vars['ford']->value['reg_egyperc'];?>
</p>
        <form id="regisztracio" name="regisztracio" method="post" action="<?php echo $_smarty_tpl->tpl_vars['alnev']->value['regisztracio'];?>
" />
        <input type="hidden" name="kuldve1" value="1">
                
    <div class="form-group">
      <label for="felh_email"> <?php echo $_smarty_tpl->tpl_vars['ford']->value['email_cim'];?>
*:</label>
      <input type="text" class="form-control" id="felh_email" name="felh_email"> <a data-toggle="tooltip" data-html="true" style="color:#424242" title="Ezt a mezőt kötelező kitölteni!"><i class="fa fa-question-circle" aria-hidden="true"></i></a>
    </div>
    <div class="form-group">
      <label for="felh_jelszo"> <?php echo $_smarty_tpl->tpl_vars['ford']->value['jelszo'];?>
*:</label>
      <input type="password" class="form-control" name="felh_jelszo" id="felh_jelszo"> <a data-toggle="tooltip" data-html="true" style="color:#424242" title="Ezt a mezőt kötelező kitölteni!"><i class="fa fa-question-circle" aria-hidden="true"></i></a>
    </div>
    
    <div class="form-group">
      <label for="felh_jelszo2"> <?php echo $_smarty_tpl->tpl_vars['ford']->value['jelszo_ismetlese'];?>
*:</label>
      <input type="password" class="form-control" name="felh_jelszo2" id="felh_jelszo2"> <a data-toggle="tooltip" data-html="true" style="color:#424242" title="Ezt a mezőt kötelező kitölteni!"><i class="fa fa-question-circle" aria-hidden="true"></i></a>
    </div>
    
        <p class="text-right">* <?php echo $_smarty_tpl->tpl_vars['ford']->value['mezok_kotelezok'];?>
 </p>
    
        <div class="text-right mt40">
            <button class="btn btn-success" type="submit">Tovább</button>
        </div>
        </form>
                
    </div>
            
            
            
    <!-- Belépés rész -->
    <div class="col-md-6 right-form">
        <form id="belepes" name="belepes" method="post" action="<?php echo $_smarty_tpl->tpl_vars['alnev']->value['belepes'];?>
" />
        <input type="hidden" name="kuldve" value="1">        
                <h3><?php echo $_smarty_tpl->tpl_vars['ford']->value['visszatero_vasarlo'];?>
</h3>
                <p><?php echo $_smarty_tpl->tpl_vars['ford']->value['jelentkezzen_be'];?>
:</p>
    <div class="form-group">
     
      <label for="felh_email"> <?php echo $_smarty_tpl->tpl_vars['ford']->value['email_cim'];?>
:</label>
      <input type="text" class="form-control" id="felh_email" name="felh_email"> <a data-toggle="tooltip" data-html="true" style="color:#424242" title="Ezt a mezőt kötelező kitölteni!"><i class="fa fa-question-circle" aria-hidden="true"></i></a>
    </div>
    <div class="form-group">
      <label for="felh_jelszo"><?php echo $_smarty_tpl->tpl_vars['ford']->value['jelszo'];?>
:</label>
      <input type="password" class="form-control" id="felh_jelszo" name="felh_jelszo"> <a data-toggle="tooltip" data-html="true" style="color:#424242" title="Ezt a mezőt kötelező kitölteni!"><i class="fa fa-question-circle" aria-hidden="true"></i></a>
    </div>
    
    <p><a href="<?php echo $_smarty_tpl->tpl_vars['sitenev']->value;
echo $_smarty_tpl->tpl_vars['alnev']->value['jelszo_valtoztatas'];?>
"><?php echo $_smarty_tpl->tpl_vars['ford']->value['elfelejtett_jelszo'];?>
</a></p>
 
    <div class="text-right mt40">
        <button class="btn btn-success" type="submit"><?php echo $_smarty_tpl->tpl_vars['ford']->value['belepes'];?>
</button>
    </div>
 
    </form>
                
            </div>
                </div>
                
                
                
            </div>

        </div>
        
    </section><?php }
}
