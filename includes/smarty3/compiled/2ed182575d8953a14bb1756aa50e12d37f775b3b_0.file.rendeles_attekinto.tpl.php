<?php
/* Smarty version 3.1.30, created on 2018-07-31 14:19:17
  from "/var/www/vhosts/lencsek.hu/uj.lencsek.hu/sablonkod/nezetek/rendeles_attekinto.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b6053c591fd43_47736801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ed182575d8953a14bb1756aa50e12d37f775b3b' => 
    array (
      0 => '/var/www/vhosts/lencsek.hu/uj.lencsek.hu/sablonkod/nezetek/rendeles_attekinto.tpl',
      1 => 1520859008,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b6053c591fd43_47736801 (Smarty_Internal_Template $_smarty_tpl) {
?>
  
<SCRIPT LANGUAGE="JavaScript">

function disableForm(theform) {
    var x = document.getElementById("nyilatkozat");

    if( !x.checked ) {
        alert("Megrendeléshez el kell fogadni a nyilatkozatot!");
        return false;
    }


if (document.all || document.getElementById) {
for (i = 0; i < theform.length; i++) {
var tempobj = theform.elements[i];
if (tempobj.type.toLowerCase() == "submit" || tempobj.type.toLowerCase() == "reset")
tempobj.disabled = true;
}
setTimeout('alert("Elküldte már a megrendelést!.")', 2000);
return true;
}
else {
// alert("The form has been submitted.  But, since you're not using IE 4+ or NS 6, the submit button was not disabled on form submission.");
return false;
   }
}

function nyilatkozat_checked() {
    var x = document.getElementById("nyilatkozat").value;
    if( x != 1 ) {
        return false;
    } else {
        return true;
    }
}

<?php echo '</script'; ?>
> 



<div class="cart-link" style="float:right; margin-right:5px;"><a href="<?php echo $_smarty_tpl->tpl_vars['sitenev']->value;
echo $_smarty_tpl->tpl_vars['alnev']->value['kosar'];?>
" class="body-link"><?php echo $_smarty_tpl->tpl_vars['ford']->value['valtoztat'];?>
</a></div>

<h2><?php echo $_smarty_tpl->tpl_vars['ford']->value['kedves'];?>
 <?php echo $_smarty_tpl->tpl_vars['user_adat']->value['felh_csaladnev'];?>
 <?php echo $_smarty_tpl->tpl_vars['user_adat']->value['felh_keresztnev'];?>
!</h2>
<p> <?php echo $_smarty_tpl->tpl_vars['ford']->value['rendeles_szoveg'];?>
 </p>

<?php if ($_smarty_tpl->tpl_vars['kupon_uzenet']->value) {?>

<center><font color="#ff0000"><b><?php echo $_smarty_tpl->tpl_vars['kupon_uzenet']->value;?>
</b></font></center>

<?php }?>
<br />
<form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['sitenev']->value;
echo $_smarty_tpl->tpl_vars['alnev']->value['megrendeles'];?>
" onSubmit="return disableForm(this);">
  <div class="cont-block cart" style="border-color:#80776f; width:765px;">
    <div class="order-page">
      <h1 class="h1_arrow_grey"><?php echo $_smarty_tpl->tpl_vars['ford']->value['termekek'];?>
</h1>
      <table width="100%" border="0" cellpadding="3" cellspacing="1" class="order-prod-table">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tetelek']->value, 't');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
?>
        <tr class="order-table-header">
          <td align="left" valign="bottom" width="220" height="30" colspan="5"><h2><?php echo $_smarty_tpl->tpl_vars['t']->value['termek_nev'];?>
</h2></td>
        </tr>
        <tr class="order-table-header">
          <td align="left" valign="top" width="150" height="20">&nbsp;</td>
          <td align="center" class="order_hatter"><?php if ($_smarty_tpl->tpl_vars['t']->value['termek_csoport'] == 1) {?><strong><?php echo $_smarty_tpl->tpl_vars['ford']->value['szem'];?>
</strong><?php }?></td>
          <!-- <td align="left" valign="top"><strong><?php echo $_smarty_tpl->tpl_vars['ford']->value['szallitas'];?>
</strong></td> -->
          <td class="order_hatter"></td>
          <td align="center" class="order_hatter"><strong><?php echo $_smarty_tpl->tpl_vars['ford']->value['ar'];?>
</strong></td>
          <td align="center" class="order_hatter"><strong><?php echo $_smarty_tpl->tpl_vars['ford']->value['mennyiseg'];?>
</strong></td>
          <td align="center" class="order_hatter"><strong><?php echo $_smarty_tpl->tpl_vars['ford']->value['osszesen'];?>
</strong></td>
        </tr>
        
        <tr style="border-bottom: 1px dashed; border-color:#bdbdbd;">
          <td align="center" valign="top"><a href="<?php echo $_smarty_tpl->tpl_vars['sitenev']->value;
echo $_smarty_tpl->tpl_vars['t']->value['termek_alnev'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['t']->value['termek_nev'];?>
">
          <img src="<?php if ($_smarty_tpl->tpl_vars['egy_termek']->value['termek_csoport'] == 3) {
echo $_smarty_tpl->tpl_vars['kepsrc2']->value;
} else {
echo $_smarty_tpl->tpl_vars['kepsrc']->value;
}?>thumb_<?php echo $_smarty_tpl->tpl_vars['t']->value['termek_kep'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_nev'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['t']->value['termek_nev'];?>
" border="0" /></a></td>
          <td align="center" class="order_hatter"> <?php if ($_smarty_tpl->tpl_vars['t']->value['termek_csoport'] == 1) {
echo $_smarty_tpl->tpl_vars['ford']->value['szemek'][$_smarty_tpl->tpl_vars['t']->value['termek_szem']];
}?></td>
          <td class="order_hatter">
            <div><?php echo jellemzoki(array('jell'=>"2",'jell_id'=>$_smarty_tpl->tpl_vars['t']->value['jell2']),$_smarty_tpl);?>
</div>
            <div><?php echo jellemzoki(array('jell'=>"1",'jell_id'=>$_smarty_tpl->tpl_vars['t']->value['jell1']),$_smarty_tpl);?>
</div>
            <div><?php echo jellemzoki(array('jell'=>"3",'jell_id'=>$_smarty_tpl->tpl_vars['t']->value['jell3']),$_smarty_tpl);?>
</div>
            <div><?php echo jellemzoki(array('jell'=>"4",'jell_id'=>$_smarty_tpl->tpl_vars['t']->value['jell4']),$_smarty_tpl);?>
</div>
            <div><?php echo jellemzoki(array('jell'=>"5",'jell_id'=>$_smarty_tpl->tpl_vars['t']->value['jell5']),$_smarty_tpl);?>
</div>
            <div><?php echo jellemzoki(array('jell'=>"6",'jell_id'=>$_smarty_tpl->tpl_vars['t']->value['jell6']),$_smarty_tpl);?>
</div>
            <div><?php echo jellemzoki(array('jell'=>"7",'jell_id'=>$_smarty_tpl->tpl_vars['t']->value['jell7']),$_smarty_tpl);?>
</div></td>
          <!-- <td align="left" valign="top"><?php echo $_smarty_tpl->tpl_vars['ford']->value['szallitas'];?>
: <?php echo $_smarty_tpl->tpl_vars['t']->value['termek_szallitas'];?>
</td> -->
          <td align="center" valign="middle" style="padding-right:10px;" class="order_hatter"><?php echo arformat($_smarty_tpl->tpl_vars['t']->value['termek_ar']);?>

          <?php if ($_SESSION['tkupon'] && $_smarty_tpl->tpl_vars['t']->value['termek_kedvezmeny'] > 0) {?><br /><font color="#47B7CB">(<?php echo $_SESSION['tkupon'];?>
)</font><?php }?></td>
          <td align="center" valign="middle" class="order_hatter"><?php echo $_smarty_tpl->tpl_vars['t']->value['termek_db'];?>
</td>
          <td align="center" valign="middle" class="order_hatter"><b><?php echo $_smarty_tpl->tpl_vars['t']->value['termek_ar']*arformat($_smarty_tpl->tpl_vars['t']->value['termek_db']);?>
</b></td>
        </tr>
        
        
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        
      </table>
    </div>
    
    <?php if (isset($_smarty_tpl->tpl_vars['ajandek_azon']->value) && $_smarty_tpl->tpl_vars['ajandek_azon']->value != 'Nemkerem') {?>
    <?php echo '<script'; ?>
 type="text/javascript" src="css/highslide.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" type="text/css" href="css/highslide.css" />

    <div style="margin-top:20px; border-color:#80756f; padding-top:10px;">
       
    <div style="font-size:14px; padding:5px; background:#F5F4F2; color:#46b7cd; font-weight:bold;">Az alábbi ajándékot választotta</div>
        <div style="float:left; padding:4px;">
          <a href="http://kepek.lencsek.hu/images/action/<?php echo $_smarty_tpl->tpl_vars['ajandek']->value['ajandek_kep'];?>
" onclick="return hs.expand (this,{ wrapperClassName: 'wide-border'})">
          <img src="images/action/thumb_<?php echo $_smarty_tpl->tpl_vars['ajandek']->value['ajandek_kep'];?>
" border="0" height="60px;" align="left" style="padding:2px;padding-right:10px;">
          </a>
          <p class="ajandek_leiras" style="max-width:500px;text-align:justify;padding:4px;"><?php echo $_smarty_tpl->tpl_vars['ajandek']->value['ajandek_leiras'];?>
</p>
          <span class="ajandek_leiras"><?php echo $_smarty_tpl->tpl_vars['ajandek']->value['ajandek_nev'];?>
</span>
        </div>
    
    </div>
    <div style="clear:both;"></div>
    </div>
<?php }?>

<div style="border:2px dashed; border-color:#ff0000;padding:8px;margin:8px;">
<b>Kedves Vásárlónk!<br />
Kérjük ellenőrizze személyes adatait, különösen a telefonszámot amelyre a csomagértesítőt küldjük Önnek!<br />
Egészségpénztári adatait is itt adhatja meg!</b>
<img src="kepek/piros_nyil.png" border="0" align="right"><br />

</div>

    <div class="order-datas">
      <table border="0" width="100%" cellspacing="0" cellpadding="3">
        <tr style="background-color:#f5f4f2; font-size:18px; padding:8px;">
          <td style="padding:5px;" colspan="2" align="center" valign="bottom">
          <a href="<?php echo $_smarty_tpl->tpl_vars['sitenev']->value;
echo $_smarty_tpl->tpl_vars['alnev']->value['regisztracio'];?>
" class="Button1" style="float:right;"><?php echo $_smarty_tpl->tpl_vars['ford']->value['adatok_modositasa'];?>
</a>
          <?php if ($_smarty_tpl->tpl_vars['bolt_id']->value > 0 || $_smarty_tpl->tpl_vars['szallmod']->value == 4) {?>
            <?php echo $_smarty_tpl->tpl_vars['ford']->value['szemelyes_adatok'];?>

            <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['ford']->value['szallitasi_adatok'];?>

            <?php }?></td>
        </tr>
        <tr style="background-color:#faf9f8; border-top: 3px solid #FFFFFF;">
          <td valign="top" width="50%" align="left" style="background: url('css/icons/arrow.png') no-repeat scroll 10px 22px transparent;padding-top:20px; background-color:#faf9f8; "><table cellpadding="5" style="border-right: 1px dashed; border-color:#bdbdbd; margin-left:78px;">
              <tr>
                <td width="50%"><b><?php echo $_smarty_tpl->tpl_vars['ford']->value['nev'];?>
:</b></td>
                <td><?php echo $_smarty_tpl->tpl_vars['user_adat']->value['felh_csaladnev'];?>
 <?php echo $_smarty_tpl->tpl_vars['user_adat']->value['felh_keresztnev'];?>
</td>
              </tr>
              <?php if (!empty($_smarty_tpl->tpl_vars['user_adat']->value['felh_mobil2'])) {?>
                  <tr>
                    <td><b><?php echo $_smarty_tpl->tpl_vars['ford']->value['mobil'];?>
:</b></td>
                    <td>06<?php echo $_smarty_tpl->tpl_vars['user_adat']->value['felh_mobil1'];?>
/<?php echo $_smarty_tpl->tpl_vars['user_adat']->value['felh_mobil2'];?>
</td>
                  </tr>
              <?php }?>
              <?php if (!empty($_smarty_tpl->tpl_vars['user_adat']->value['felh_telefon'])) {?>
                  <tr>
                    <td><b><?php echo $_smarty_tpl->tpl_vars['ford']->value['telefon'];?>
:</b></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user_adat']->value['felh_telefon'];?>
</td>
                  </tr>
              <?php }?>
              <tr>
                <td><b><?php echo $_smarty_tpl->tpl_vars['ford']->value['varos_telepules'];?>
:</b></td>
                <td><?php echo $_smarty_tpl->tpl_vars['user_adat']->value['felh_varos'];?>
</td>
              </tr>
              <tr>
                <td><b><?php echo $_smarty_tpl->tpl_vars['ford']->value['utca_hazszam'];?>
:</b></td>
                <td><?php echo $_smarty_tpl->tpl_vars['user_adat']->value['felh_utca'];?>
</td>
              </tr>
              <tr>
                <td><b><?php echo $_smarty_tpl->tpl_vars['ford']->value['iranyitoszam'];?>
:</b></td>
                <td><?php echo $_smarty_tpl->tpl_vars['user_adat']->value['felh_irsz'];?>
</td>
              </tr>
              <?php if (!empty($_smarty_tpl->tpl_vars['user_adat']->value['felh_tagnev'])) {?>
                  <tr>
                    <td><b><?php echo $_smarty_tpl->tpl_vars['ford']->value['egeszsegpenztar_tag'];?>
:</b></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user_adat']->value['felh_tagnev'];?>
</td>
                  </tr>
              <?php }?>
            </table>
            
            <!-- <br><b><?php echo $_smarty_tpl->tpl_vars['ford']->value['megye'];?>
:</b> <?php echo $_smarty_tpl->tpl_vars['user_adat']->value['felh_megye'];?>
 --> 
            
            <?php if (!empty($_smarty_tpl->tpl_vars['user_adat']->value['felh_szamlanev']) || !empty($_smarty_tpl->tpl_vars['user_adat']->value['felh_szutca'])) {?>
            <table cellpadding="5" style="border-right: 1px dashed; border-color:#bdbdbd; margin-left:78px;">
              <tr style="background-color:#f5f4f2; padding:5px;">
                <td colspan="2"><b><?php echo $_smarty_tpl->tpl_vars['ford']->value['szamlazasi_adatok_osszesiton'];?>
:</b></td>
              </tr>
              <tr>
                <td width="50%"><b><?php echo $_smarty_tpl->tpl_vars['ford']->value['szamlanev'];?>
:</b></td>
                <td><?php echo $_smarty_tpl->tpl_vars['user_adat']->value['felh_szamlanev'];?>
</td>
              </tr>
              <tr>
                <td><b><?php echo $_smarty_tpl->tpl_vars['ford']->value['utca_hazszam'];?>
:</b></td>
                <td><?php echo $_smarty_tpl->tpl_vars['user_adat']->value['felh_szutca'];?>
</td>
              </tr>
              <tr>
                <td><b><?php echo $_smarty_tpl->tpl_vars['ford']->value['varos_telepules'];?>
:</b></td>
                <td><?php echo $_smarty_tpl->tpl_vars['user_adat']->value['felh_szvaros'];?>
</td>
              </tr>
              <tr>
                <td><b><?php echo $_smarty_tpl->tpl_vars['ford']->value['iranyitoszam'];?>
:</b></td>
                <td><?php echo $_smarty_tpl->tpl_vars['user_adat']->value['felh_szirsz'];?>
</td>
              </tr>  
            </table>
            <?php }?>
            
            
            <?php if (!empty($_smarty_tpl->tpl_vars['user_adat']->value['felh_egazon'])) {?><br />
            <table cellpadding="5" style="border-right: 1px dashed; border-color:#bdbdbd; margin-left:78px;">
              <tr>
                <td width="50%"><b><?php echo $_smarty_tpl->tpl_vars['ford']->value['egeszsegpenztar_azonosito'];?>
:</b></td>
                <td><?php echo $_smarty_tpl->tpl_vars['user_adat']->value['felh_egazon'];?>
</td>
              </tr>
            </table>
            <?php }?> </td>
          <td valign="top" style="padding:20px; auto auto 18px;"><b><?php echo $_smarty_tpl->tpl_vars['ford']->value['megjegyzes'];?>
:</b> <br>
            <textarea rows="5" name="megjegyzes" cols="38" style="margin-top:10px;" maxlength="220"><?php echo $_smarty_tpl->tpl_vars['user_adat']->value['felh_megjegyzes'];?>
</textarea></td>
        </tr>
      </table>
      <div class="stripe-line"></div>
      <table border="0" width="100%" cellspacing="0" cellpadding="3">
        <tr style="background-color:#f5f4f2; font-size:18px; padding:8px; border-top: 3px solid #FFFFFF;">
          <td width="50%" align="center" valign="bottom"><a href="<?php echo $_smarty_tpl->tpl_vars['sitenev']->value;
echo $_smarty_tpl->tpl_vars['alnev']->value['szallitas'];?>
" class="Button1" style="float:right;"><?php echo $_smarty_tpl->tpl_vars['ford']->value['szallitas_modositas'];?>
</a><?php echo $_smarty_tpl->tpl_vars['ford']->value['szallitas_es_fizetes'];?>
 </td>
          <td align="center"><?php echo $_smarty_tpl->tpl_vars['ford']->value['ar'];?>
</td>
        </tr>
        <tr style="background-color:#faf9f8; border-top: 3px solid #FFFFFF;">
          <td style="background: url('css/icons/pack.png') no-repeat scroll 10px 22px transparent; border-right: 1px dashed; border-color:#bdbdbd; background-color:#faf9f8; "><table style="margin-left:78px;">
              <tr>
                <td> <?php echo $_smarty_tpl->tpl_vars['szallmod_ki']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['fizmod_ki']->value;?>

                  
                  <?php if ($_smarty_tpl->tpl_vars['bolt_id']->value > 0 && $_smarty_tpl->tpl_vars['szallmod']->value == 3) {?> <br />
                  <br />
                  <b>Elsődleges Pick-Pack Pont:</b><br />
                  <br />
                  <?php echo $_smarty_tpl->tpl_vars['boltadat']->value['hely_bolt'];?>
<br/>
                  <?php echo $_smarty_tpl->tpl_vars['boltadat']->value['hely_nev'];?>
<br/>
                  <?php echo $_smarty_tpl->tpl_vars['boltadat']->value['hely_cim'];?>
<br/>
                  <?php echo $_smarty_tpl->tpl_vars['boltadat']->value['hely_irsz'];?>
<br/>
                  <?php echo $_smarty_tpl->tpl_vars['boltadat']->value['hely_leiras'];?>
<br/>
                  Hétfő: <?php echo $_smarty_tpl->tpl_vars['boltadat']->value['ny_h'];?>
, Kedd: <?php echo $_smarty_tpl->tpl_vars['boltadat']->value['ny_k'];?>
,<br/>
                  Szerda: <?php echo $_smarty_tpl->tpl_vars['boltadat']->value['ny_sz'];?>
, Csütörtök: <?php echo $_smarty_tpl->tpl_vars['boltadat']->value['ny_cs'];?>
,<br />
                  Péntek: <?php echo $_smarty_tpl->tpl_vars['boltadat']->value['ny_p'];?>
, Szombat: <?php echo $_smarty_tpl->tpl_vars['boltadat']->value['ny_sz'];?>
,<br />
                  Vasárnap: <?php echo $_smarty_tpl->tpl_vars['boltadat']->value['ny_v'];?>

                  
                    <?php if ($_smarty_tpl->tpl_vars['bolt_id2']->value > 0) {?>
                    <br /><br />
                    <b>Másodlagos Pick-Pack Pont:</b><br />
                    <br />
                    <?php echo $_smarty_tpl->tpl_vars['boltadat2']->value['hely_bolt'];?>
<br/>
                    <?php echo $_smarty_tpl->tpl_vars['boltadat2']->value['hely_nev'];?>
<br/>
                    <?php echo $_smarty_tpl->tpl_vars['boltadat2']->value['hely_cim'];?>
<br/>
                    <?php echo $_smarty_tpl->tpl_vars['boltadat2']->value['hely_irsz'];?>
<br/>
                    Hétfő: <?php echo $_smarty_tpl->tpl_vars['boltadat2']->value['ny_h'];?>
, Kedd: <?php echo $_smarty_tpl->tpl_vars['boltadat2']->value['ny_k'];?>
,<br/>
                    Szerda: <?php echo $_smarty_tpl->tpl_vars['boltadat2']->value['ny_sz'];?>
, Csütörtök: <?php echo $_smarty_tpl->tpl_vars['boltadat2']->value['ny_cs'];?>
,<br />
                    Péntek: <?php echo $_smarty_tpl->tpl_vars['boltadat2']->value['ny_p'];?>
, Szombat: <?php echo $_smarty_tpl->tpl_vars['boltadat2']->value['ny_sz'];?>
,<br />
                    Vasárnap: <?php echo $_smarty_tpl->tpl_vars['boltadat2']->value['ny_v'];?>

                    <?php }?>
                  <?php }?> 
                  
                  <?php if ($_smarty_tpl->tpl_vars['optika_id']->value > 0 && $_smarty_tpl->tpl_vars['szallmod']->value == 4) {?>
                    <br /><br />
                    <b><?php echo $_smarty_tpl->tpl_vars['optika']->value['bolt_nev'];?>
</b><br />
                    <?php echo $_smarty_tpl->tpl_vars['optika']->value['bolt_cim'];?>

                    <!--<?php echo nl2br($_smarty_tpl->tpl_vars['optika']->value['bolt_nyitvatartas']);?>
-->
                    <br />
                  <?php }?>
                  
                  <?php if ($_smarty_tpl->tpl_vars['bolt_id']->value > 0 && $_smarty_tpl->tpl_vars['szallmod']->value == 5) {?> <br />
                  <br />
                  Átvételi hely:<br />
                  <br />
                  <b><?php echo $_smarty_tpl->tpl_vars['boltadat']->value['hely_nev'];?>
</b><br/>
                  <?php echo $_smarty_tpl->tpl_vars['boltadat']->value['hely_cim'];?>
<br/>
                  <b><?php echo $_smarty_tpl->tpl_vars['boltadat']->value['hely_open'];?>
</b><br/>
                  <div style="width:270px">
                  <?php echo nl2br($_smarty_tpl->tpl_vars['boltadat']->value['hely_findme']);?>

                  </div>
                  <?php }?> 
                  

                  <?php if ($_smarty_tpl->tpl_vars['premium_futar']->value > 0) {?>
                      <br /><br />
                      <table border="0">
                      <tr><td><b><?php echo $_smarty_tpl->tpl_vars['ford']->value['premium_futar'];?>
:</b></td><td>&nbsp;</td><td align="right"> +<?php echo $_smarty_tpl->tpl_vars['premium_futar']->value;?>
 Ft</td></tr>
                      <?php if ($_smarty_tpl->tpl_vars['sms_ertesites']->value > 0) {?> <tr><td><b>SMS értesítő:</b></td><td>&nbsp;</td><td align="right"> +<?php echo $_smarty_tpl->tpl_vars['sms_ertesites']->value;?>
 Ft</td></tr> <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['tel_ertesites']->value > 0) {?> <tr><td><b>Telefonos értesítő:</b></td><td>&nbsp;</td><td align="right"> +<?php echo $_smarty_tpl->tpl_vars['tel_ertesites']->value;?>
 Ft</td></tr> <?php }?>
                      </table>
                  <?php }?>
                  
                  
                  </td>
              </tr>
            </table></td>
          <td style="background: url('css/icons/money.png') no-repeat scroll 18px 22px transparent; background-color:#faf9f8; " valign="top"><table style="font-size:12px; margin: 12px auto 0 95px; " width="220">
              <tr>
                <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['ford']->value['termekek'];?>
:</b></td>
                <td align="right" style="padding-right:25px;"><?php echo arformat($_smarty_tpl->tpl_vars['osszesen']->value);?>
</td>
              </tr>
              
              <?php if ($_smarty_tpl->tpl_vars['kedvezmeny']->value > 0) {?>
              <tr>
                <td align="left" height="22" valign="top"><b><?php echo $_smarty_tpl->tpl_vars['ford']->value['kedvezmeny'];?>
:</b></td>
                <td align="right" height="22" valign="top" style="padding-right:25px;">- <?php echo arformat($_smarty_tpl->tpl_vars['kedvezmeny']->value);?>
</td>
              </tr>
              <?php }?>
              
              <tr>
                <td align="left" height="22" valign="top"><b><?php echo $_smarty_tpl->tpl_vars['ford']->value['szallitas'];?>
:</b></td>
                <td align="right" height="22" valign="top" style="padding-right:25px;"><?php echo arformat($_smarty_tpl->tpl_vars['szallitas_osszeg']->value);?>
</td>
              </tr>
              
              
              <tr style="border-top: 1px dashed; border-color:#FFFFFF;">
                <td align="left" valign="bottom" height="22"><b><?php echo $_smarty_tpl->tpl_vars['ford']->value['osszesen'];?>
:</b></td>
                <td align="right" valign="bottom" style="padding-right:25px; font-size:18px;"><b><?php echo arformat($_smarty_tpl->tpl_vars['mindosszesen']->value);?>
</b></td>
              </tr>
            </table></td>
        </tr>
      </table>
    </div>
  </div>
  
  <div class="cont-block" align="justify" style="margin-top:10px; border-color:#80756f;">
  <div style="font-size:18px; padding:5px; background:#F5F4F2;"><?php echo $_smarty_tpl->tpl_vars['ford']->value['vasarloi_nyilatkozat'];?>
</div>
  <?php echo $_smarty_tpl->tpl_vars['ford']->value['vasarloi_szoveg'];?>

  <!--
  Tudomásul veszem, hogy a kontaktlencse-viseléshez elengedhetetlenül szükséges a rendszeres, szemész szakorvos vagy optometrista által végzett vizsgálat és konzultáció, és ezt nem pótolhatja más forrásból szerzett információ. A vizsgálat és konzultáció elmulasztása vagy az ebből eredő helytelen kontaktlencse használat súlyos, esetenként visszafordíthatatlan következményekkel járó szem- vagy látáskárosodást okozhat.
Kijelentem, hogy elmúltam 18 éves, és panaszmentes kontaktlencse viselőként a kontaktlencsét 6 hónapnál nem régebbi, szemész szakorvos vagy optometrista által adott javaslatnak megfelelően rendelem meg. Az általam a rendelés során megadott információk megfelelnek a valóságnak és a javaslatban foglaltaknak. A kontaktlencse viselése alatt legalább félévente vizsgálaton veszek részt, illetve probléma esetén haladéktalanul szemész szakorvoshoz vagy optometristához fordulok.
A fentiek elmulasztásából eredő károkért teljes felelősséget vállalok.<br />
A vásárlással kijelentem, hogy a fenti típusú és paraméterű kontaktlencsét már viseltem, azt számomra szemész szakorvos vagy optomterista írta elő.
-->
<br /><br />
<input id="nyilatkozat" name="nyilatkozat" type="checkbox"> <b><?php echo $_smarty_tpl->tpl_vars['ford']->value['vasarloi_pipa'];?>
</b><br />
<?php if ($_smarty_tpl->tpl_vars['adm4']->value) {?>
<input id="raktaron_kerelem" name="raktaron_kerelem" type="checkbox" value="1"> <b><?php echo $_smarty_tpl->tpl_vars['ford']->value['raktar_kerelem'];?>
</b><br />
<?php }?>
&nbsp; ¤ Fizetési kötelezettséggel járó megrendelés
  </div>
  
  <div class="cont-block" style="border-color:#80776f; float:right; width:auto; margin:10px 0 auto auto;">
    <div class="purple-arrow-button-left"></div>
    <input type="submit" class="purple-arrow-button" value="<?php echo $_smarty_tpl->tpl_vars['ford']->value['rendeles_kuldese'];?>
" name="vegleges_elfogadva" style="float:left">
    <div class="purple-arrow-button-right"></div>
  </div>
</form>


<div class="cont-block" style="border-color:#80776f; float:left; margin-top:15px;">
  <form action="<?php echo $_smarty_tpl->tpl_vars['sitenev']->value;
echo $_smarty_tpl->tpl_vars['alnev']->value['rendeles_attekinto'];?>
">
  Kupon: <input name="kupon" type="text" size="10" maxlength="10" /> <input type="submit" value="Beváltás">
  </form>
</div>
<?php }
}
