<?php
/* Smarty version 3.1.30, created on 2019-01-28 16:09:32
  from "/var/www/vhosts/kontaktlencsek.hu/ujdesign/sablonkod/regisztracio_oldal/regisztracio.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c4f1b2c272b12_85143751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b652d011c5fdc61cdce3d3e7127ddaaeeee3468' => 
    array (
      0 => '/var/www/vhosts/kontaktlencsek.hu/ujdesign/sablonkod/regisztracio_oldal/regisztracio.tpl',
      1 => 1548688158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:kosar_oldal/rendeles_menete.tpl' => 1,
  ),
),false)) {
function content_5c4f1b2c272b12_85143751 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:kosar_oldal/rendeles_menete.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section class="product-container clearfix product-details">
        <div class="col-xs-12 col-sm-12 col-md12 col-lg-9 left-section-product">

<form id="urlap" name="urlap" method="post" action="<?php echo $_smarty_tpl->tpl_vars['alnev']->value['regisztracio'];?>
" onsubmit="return urlap_ellenorzes(this);">
<h1 class="product_title"><?php echo $_smarty_tpl->tpl_vars['ford']->value['regisztracio'];?>
</h1> <?php if ($_smarty_tpl->tpl_vars['vanhiba']->value) {?> <center><b><font color="#ff0000"><?php echo hiba_kiiras($_smarty_tpl->tpl_vars['ford']->value['kerjuk_toltseki']);?>
</font></b></center><?php }?>
            <div class="clearfix  mt20"></div>
            <div class="lens_selection clearfix step4" >
            
            
            <div class="main-flex" >
            <div class="col-md-6 left-form">
                <h3><?php echo $_smarty_tpl->tpl_vars['ford']->value['szemelyes_adatok'];?>
</h3>
                <?php if ($_smarty_tpl->tpl_vars['vanhiba']->value) {?> <?php echo hiba_kiiras($_smarty_tpl->tpl_vars['ford']->value['kerjuk_toltseki']);?>
<br /><br /><?php }?>
                <p><?php echo $_smarty_tpl->tpl_vars['ford']->value['szallitasi_szoveg'];?>
</p>

                
    <input type="hidden" name="kuldve2" value="1">
    <input type="hidden" name="q" value="regisztracio">
    <input type="hidden" name="felh_email" value="<?php echo $_smarty_tpl->tpl_vars['fadat']->value['felh_email'];?>
">
    <input type="hidden" name="felh_jelszo" value="<?php echo $_smarty_tpl->tpl_vars['fadat']->value['felh_jelszo'];?>
">
                
    <div class="form-group">
     
      <label for=" "> <?php if ($_smarty_tpl->tpl_vars['reghiba2']->value['email']) {?> <span class="error"><?php echo $_smarty_tpl->tpl_vars['ford']->value['email'];?>
:</span> <?php } else {
echo $_smarty_tpl->tpl_vars['ford']->value['email'];?>
:<?php }?></label>
      <?php if ($_smarty_tpl->tpl_vars['reghiba2']->value['email']) {?><input type="text" class="form-control" name="felh_email" size="30" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['fadat']->value['felh_email'];?>
"> *<?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['fadat']->value['felh_email'];
}?>
    </div>
    <div class="form-group">
      <label for=" "><?php if ($_smarty_tpl->tpl_vars['reghiba2']->value['csaladnev']) {?> <span class="error"><?php echo $_smarty_tpl->tpl_vars['ford']->value['csaladnev'];?>
:</span> <?php } else { ?>
                      <?php echo $_smarty_tpl->tpl_vars['ford']->value['csaladnev'];?>
:
                      <?php }?></label>
      <input type="text" class="form-control" id="felh_csaladnev" name="felh_csaladnev" value="<?php echo $_smarty_tpl->tpl_vars['fadat']->value['felh_csaladnev'];?>
" maxlength="30"> 
    </div>
    
    <div class="form-group">
      <label for=" "> <?php if ($_smarty_tpl->tpl_vars['reghiba2']->value['keresztnev']) {?> <span class="error"><?php echo $_smarty_tpl->tpl_vars['ford']->value['keresztnev'];?>
:</span> <?php } else { ?>
                      <?php echo $_smarty_tpl->tpl_vars['ford']->value['keresztnev'];?>
:
                      <?php }?></label>
      <input type="text" class="form-control" id="felh_keresztnev" name="felh_keresztnev" value="<?php echo $_smarty_tpl->tpl_vars['fadat']->value['felh_keresztnev'];?>
" maxlength="30"> 
    </div>
    
    
    <div class="form-group">
      <label for=" "> <?php if ($_smarty_tpl->tpl_vars['reghiba2']->value['mobil2']) {?>
                        <span class="error"><?php echo $_smarty_tpl->tpl_vars['ford']->value['mobil'];?>
:</span>
                      <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['ford']->value['mobil'];?>
:
                      <?php }?></label>
      <div class="row">
      <div class="col-md-1"><span>06</span></div>
      <div class="col-md-2 mobmb10"> 
      
      <select name="felh_mobil1" size="1" class="form-control">
                        <option value="0">...</option>
                        <option value="20"<?php if ($_smarty_tpl->tpl_vars['fadat']->value['felh_mobil1'] == 20) {?> selected="selected"<?php }?>>20</option>
                        <option value="30"<?php if ($_smarty_tpl->tpl_vars['fadat']->value['felh_mobil1'] == 30) {?> selected="selected"<?php }?>>30</option>
                        <option value="31"<?php if ($_smarty_tpl->tpl_vars['fadat']->value['felh_mobil1'] == 31) {?> selected="selected"<?php }?>>31</option>
                        <option value="70"<?php if ($_smarty_tpl->tpl_vars['fadat']->value['felh_mobil1'] == 70) {?> selected="selected"<?php }?>>70</option>
                      </select>
       </div>
       <div class="col-md-9"><input type="text" class="form-control" id="felh_mobil2" name="felh_mobil2" value="<?php echo $_smarty_tpl->tpl_vars['fadat']->value['felh_mobil2'];?>
" size="7" maxlength="7" onkeypress="return isNumberKey(event)"> </div>
       </div>
      <p>* <?php echo $_smarty_tpl->tpl_vars['ford']->value['egyik_kotelezo_mobil'];?>
</p>
    </div>
    
    <div class="form-group">
      <label for=" "> <?php if ($_smarty_tpl->tpl_vars['reghiba2']->value['telefon']) {?> <span class="error"><?php echo $_smarty_tpl->tpl_vars['ford']->value['telefon'];?>
:</span> <?php } else { ?>
                      <?php echo $_smarty_tpl->tpl_vars['ford']->value['telefon'];?>
:
                      <?php }?></label>
      <input type="text" class="form-control" id="felh_telefon" name="felh_telefon" value="<?php echo $_smarty_tpl->tpl_vars['fadat']->value['felh_telefon'];?>
"  onkeypress="return isNumberKey(event)" maxlength="20"> 
      <p>* <?php echo $_smarty_tpl->tpl_vars['ford']->value['egyik_kotelezo'];?>
</p>
    </div>
    
    <div class="form-group">
      <label for=" "> <?php if ($_smarty_tpl->tpl_vars['reghiba2']->value['varos']) {?> <span class="error"><?php echo $_smarty_tpl->tpl_vars['ford']->value['varos'];?>
:</span> <?php } else { ?>
                      <?php echo $_smarty_tpl->tpl_vars['ford']->value['varos'];?>
:
                      <?php }?>
      </label>
      <input type="text" class="form-control" id="felh_varos" name="felh_varos" value="<?php echo $_smarty_tpl->tpl_vars['fadat']->value['felh_varos'];?>
"> 
    </div>
    
    <div class="form-group">
      <label for=" ">  <?php if ($_smarty_tpl->tpl_vars['reghiba2']->value['utca']) {?> <span class="error"><?php echo $_smarty_tpl->tpl_vars['ford']->value['utca'];?>
:</span> <?php } else { ?>
                      <?php echo $_smarty_tpl->tpl_vars['ford']->value['utca'];?>
:
                      <?php }?></label>
      <input type="text" class="form-control" id="felh_utca" name="felh_utca" value="<?php echo $_smarty_tpl->tpl_vars['fadat']->value['felh_utca'];?>
" maxlength="80">
    </div>
    
    <div class="form-group">
      <label for=" ">  <?php if ($_smarty_tpl->tpl_vars['reghiba2']->value['irsz']) {?> <span class="error"><?php echo $_smarty_tpl->tpl_vars['ford']->value['iranyitoszam'];?>
:</span> <?php } else { ?>
                      <?php echo $_smarty_tpl->tpl_vars['ford']->value['iranyitoszam'];?>
:
                      <?php }?></label>
      <input type="text" class="form-control" id="felh_irsz" name="felh_irsz" value="<?php echo $_smarty_tpl->tpl_vars['fadat']->value['felh_irsz'];?>
" maxlength="4"> 
    </div>

    <div class="form-group">
      <label for=" "><?php echo $_smarty_tpl->tpl_vars['ford']->value['egpenztar'];?>
: </label> 
      
      <select class="form-control" name="felh_egpenztar" size="1" onchange="egp_feltoltes(this)">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['egpenztarak']->value, 'egy_penztar');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['egy_penztar']->value) {
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['egy_penztar']->value['penztar_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['fadat']->value['felh_egpenztar'] == $_smarty_tpl->tpl_vars['egy_penztar']->value['penztar_id']) {?>SELECTED<?php }?>><?php echo $_smarty_tpl->tpl_vars['egy_penztar']->value['penztar_nev'];?>
</option>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      </select>
	  <a data-toggle="tooltip" data-html="true" style="color:#424242; top:1%; left:100%" title="Lehetősége van egészégpénztára nevére kérni a számlát ! Kérjük, hogy annak első példányát jutassa el számukra ! A megrendelése értékét a bankszámlájára átutalják egészségpénztári egyenlege terhére. Kérjük válassza ki a listából egészségpénztárát ! Amennyiben nem szerepel a listában, kérjük hogy, manuálisan adja meg a számlázási adatokat és ezt jelezze nekünk a megjegyzés rovatban !"><i class="fa fa-question-circle" aria-hidden="true"></i></a>
      
      
      <span id="penztar_szoveg"> </span>
    </div>
    
    
    <div class="form-group" id="egp_box" <?php if ($_smarty_tpl->tpl_vars['fadat']->value['felh_egpenztar'] == 0) {?> style="display:none;"<?php }?>>
          <table class="textfield-specs" width="100%">
          <tr>
            <td height="40" style="border-right-color:#f7f7f7;" >Tag neve: </td>
		  </tr>
		  <tr>
            <td height="40"><input name="felh_tagnev" type="text" class="textfield-specs" id="felh_tagnev" value="<?php echo $_smarty_tpl->tpl_vars['fadat']->value['felh_tagnev'];?>
" size="24" /></td>
          </tr>
          <tr>
            <td height="40" style="border-right-color:#f7f7f7;" >Tagi azonosító: </td>
		  </tr>
		  <tr>
            <td height="40"><input name="felh_egazon" type="text" class="textfield-specs" id="felh_egazon" value="<?php echo $_smarty_tpl->tpl_vars['fadat']->value['felh_egazon'];?>
" size="24" /></td>
          </tr>
          <tr>
            <td height="40" style="border-right-color:#f7f7f7;" >Kedvezményezett neve: </td>
		  </tr>
		  <tr>
            <td height="40"><input name="felh_kedvezmenyezett" type="text" class="textfield-specs" id="felh_kedvezmenyezett" value="<?php echo $_smarty_tpl->tpl_vars['fadat']->value['felh_kedvezmenyezett'];?>
" size="24" /></td>
          </tr>
        </table>
    </div>    
    
</div>
            

<div class="col-md-6 right-form">
    <h3><?php echo $_smarty_tpl->tpl_vars['ford']->value['szamlazasi_adatok'];?>
</h3>
    <p><?php echo $_smarty_tpl->tpl_vars['ford']->value['szamlazasi_szoveg'];?>
</p>
                
                
    
    <div class="form-group">
      <label for=" "><?php echo $_smarty_tpl->tpl_vars['ford']->value['szamlanev'];?>
:</label>
      <input type="text" class="form-control" id="felh_szamlanev" name="felh_szamlanev" value="<?php echo $_smarty_tpl->tpl_vars['fadat']->value['felh_szamlanev'];?>
" maxlength="80"> 
    </div>

    <div class="form-group">
      <label for=" "><?php echo $_smarty_tpl->tpl_vars['ford']->value['varos'];?>
:</label>
      <input type="text" class="form-control" id="felh_szvaros" name="felh_szvaros" value="<?php echo $_smarty_tpl->tpl_vars['fadat']->value['felh_szvaros'];?>
"> 
    </div>    

    <div class="form-group">
      <label for=" "> <?php echo $_smarty_tpl->tpl_vars['ford']->value['utca'];?>
:</label>
      <input type="text" class="form-control" id="felh_szutca" name="felh_szutca" value="<?php echo $_smarty_tpl->tpl_vars['fadat']->value['felh_szutca'];?>
"> 
    </div>

    <div class="form-group">
      <label for=" "> <?php echo $_smarty_tpl->tpl_vars['ford']->value['iranyitoszam'];?>
:</label>
      <input type="text" class="form-control" id="felh_szirsz" name="felh_szirsz" value="<?php echo $_smarty_tpl->tpl_vars['fadat']->value['felh_szirsz'];?>
" maxlength="4"> 
    </div>

    <div class="form-group mt30">
      <label for=" "> <?php echo $_smarty_tpl->tpl_vars['ford']->value['megjegyzes'];?>
:</label>
      <textarea id="felh_megjegyzes" name="felh_megjegyzes" class="form-control comment"><?php echo $_smarty_tpl->tpl_vars['fadat']->value['felh_megjegyzes'];?>
</textarea>
    </div>
	
 <div class="form-group">
 <input type="checkbox" name="feltetelek" value="1">
 <span class="error">A <a href="/szallitas_es_fizetes" target="_blank\" style="position: static;">szállítási és fizetési feltételeket</a>, valamint az <a href="altalanos_tudnivalok" target="_blank\" style="position: static;">általános tudnivalókat</a> elolvastam és elfogadom. *</span>
 </div>
 
 <!--
    <div class="form-group">
      <!--<label for=" "> <?php echo $_smarty_tpl->tpl_vars['ford']->value['iranyitoszam'];?>
:</label>-->
 <!--      <input type="checkbox" name="feltetelek" value="1">
          <?php if ($_smarty_tpl->tpl_vars['reghiba2']->value['feltetel']) {?> <span class="error"><?php echo $_smarty_tpl->tpl_vars['ford']->value['feltetelek_elfogadasa'];?>
 *</span> <?php } else { ?> <a style="text-decoration:none; position: static;"><?php echo $_smarty_tpl->tpl_vars['ford']->value['feltetelek_elfogadasa'];?>
 </a> *
          <?php }?>
    </div>
    -->
	
	
	<!-- régi vége -->
	
    <div class="form-group">
        <input type="checkbox" name="hirlevel" value="1" checked="checked"> <?php echo $_smarty_tpl->tpl_vars['ford']->value['kerek_hirlevelet'];?>
<br /><br />
        * <?php echo $_smarty_tpl->tpl_vars['ford']->value['mezok_kotelezok'];?>
 
    </div>
 
 
 
 
 
 
        <div class="text-right mt40">
            <button class="btn btn-success" type="submit">Tovább</button>
        </div>
  
                        
            </div>
                </div>
                
            </div>

            
  </form>             
        </div>
        
        <!--
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
            <div class="summary">
                <div class="brandLogo"><img src="images/tommy_hilfiger_logo.jpg" alt="" class="img-responsive"/>
                </div>
                <div class="side-product">
                    <h2>Az ön által válaszott keret:</h2>
                    <h3> Emporio Armani <small>EA3099 5553</small></h3>
                    <img src="images/frame1.jpg"/>
                    <p><strong>Leírás:</strong> Emporio Armani EA3099 5553</p>
                </div>
                <button type="submit" class="green-btn dsktp_none">Next</button>
            </div>
        </div>
        -->
    </section><?php }
}
