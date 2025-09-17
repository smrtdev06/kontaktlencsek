<?php
/* Smarty version 3.1.30, created on 2022-08-31 11:30:23
  from "/var/www/vhosts/kontaktlencsek.hu/httpdocs/sablonkod/hu/megrendelo_level.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_630f464f3d67e4_90199637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93f414b735653f92dbd1fc72192f17f9b16ee01f' => 
    array (
      0 => '/var/www/vhosts/kontaktlencsek.hu/httpdocs/sablonkod/hu/megrendelo_level.tpl',
      1 => 1544003152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_630f464f3d67e4_90199637 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">


body {
    margin: auto;
    padding: 0 0 20px;
    border: none;
    background-color:#ffffff;
} 

.text-table {
    padding: 10px;
    border: 1px solid #cccccc;
    background-color: #ffffff;
}



.arial-11 { font: 11px  arial, helvetica, sans-serif; color: #333333; }

.old-price {
    color: #990000;
    text-decoration: line-through;
    font-weight: bold;
}

.arial-12 { font: 12px  arial, helvetica, sans-serif; color: #333333; }

/* line-height: 16px; */

.arial-12-bold { font: bold 12px  arial, helvetica, sans-serif; color: #333333; }

.arial-11-bold-white { font: bold 11px  arial, helvetica, sans-serif; color: #ffffff; }

.arial-12-bold-white { font: bold 12px  arial, helvetica, sans-serif; color: #ffffff; }

.arial-11-bold { font: bold 11px  arial, helvetica, sans-serif; color: #333333; }

.main-menu {
    font: bold 12px  arial, helvetica, sans-serif;
    color: #ffffff; 
}

a.main-menu-link:link {  color: #ffffff; text-decoration: none; }
a.main-menu-link:active { color: #ffffff; text-decoration: none; }
a.main-menu-link:visited { color: #ffffff; text-decoration: none; }
a.main-menu-link:hover { color: #52BAAF; text-decoration: none; }

a.signature-link:link {  color: #ffffff; text-decoration: underline; }
a.signature-link:active { color: #ffffff; text-decoration: underline; }
a.signature-link:visited { color: #ffffff; text-decoration: underline; }
a.signature-link:hover { color: #ffffff; text-decoration: none; }

a.copyright-link:link {  color: #999999; text-decoration: underline; }
a.copyright-link:active { color: #999999; text-decoration: underline; }
a.copyright-link:visited { color: #999999; text-decoration: underline; }
a.copyright-link:hover { color: #52BAAF; text-decoration: none; }

.current-main-menu {
    font: bold 12px  arial, helvetica, sans-serif;
    color: #52BAAF; 
}

.menu-title {
    background-image: url('<?php echo $_smarty_tpl->tpl_vars['sitenev']->value;?>
/kepek/arrow-grey-green.gif');
    background-repeat: no-repeat;
    background-position: left center;
    color: #333333;
    font-weight: bold;
    padding-left: 17px; font-style:normal; font-variant:normal; font-size:12px; font-family:arial, helvetica, sans-serif
}

.title {
    color: #333333;
    font-weight: bold;
    font-style:normal; font-variant:normal; font-size:12px; font-family:arial, helvetica, sans-serif
}

.signature {
    font: 10px  arial, helvetica, sans-serif;
    color: #ffffff;
    letter-spacing: 1px;
}

.copyright {
    font: 10px  arial, helvetica, sans-serif;
    color: #999999;
    letter-spacing: 1px;
}

a.body-link:link { 
    color: #333333; 
    text-decoration: underline; }
a.body-link:active { 
    color: #333333;
    text-decoration: underline; }
a.body-link:visited { 
    color: #333333;
    text-decoration: underline; }
a.body-link:hover { 
    color: #52BAAF;
    text-decoration: none; }
    
.sub-menu {
    font: 12px  arial, helvetica, sans-serif;
    color: #666666;
    line-height: 17px; 
}

a.sub-menu-link:link { 
    color: #666666; 
    text-decoration: none; }
a.sub-menu-link:active { 
    color: #666666;
    text-decoration: none; }
a.sub-menu-link:visited { 
    color: #666666;
    text-decoration: none; }
a.sub-menu-link:hover { 
    color: #52BAAF;
    text-decoration: none; }
    
.menu-background {
    background-image: url('<?php echo $_smarty_tpl->tpl_vars['sitenev']->value;?>
/kepek/menu-bar.gif');    
}    

.footer-bar {
    background-image: url('<?php echo $_smarty_tpl->tpl_vars['sitenev']->value;?>
/kepek/footer-bar.gif');    
    background-repeat: no-repeat;
    background-position: left top
}

.feher_hatter {
    background-color:#ffffff;
}


#footer {
    /*width:700px;*/
    height:50px;
    margin:0 auto 0 auto;
}
.footer {
    background-color:#47b7cb;
    height:60px;
}

.contact {
    font: 12px  arial, helvetica, sans-serif; color: #ffffff;
}
.contact a{
    color:#FFFFFF;
}
.cont1{
    font: bold 12px  arial, helvetica, sans-serif; color: #c7c4bf;
}

.ajandek_leiras{
    font: 12px  arial, helvetica, sans-serif; color: #80766E;
}



</style>
</head>

<body text="#FFFFFF">
<!-- Kerethez táblázat -->


<table style="max-width:700px;" align="center" cellspacing="10" border="0">
<tr><td>



<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
<!--
<tr bgcolor="#4a3c31">
    <td height="30" colspan="2" align="right" valign="middle"><br /></td>
</tr>
-->
<tr>
  <td height="100" bgcolor="#47b7cb" align="center" valign="middle">  
      <a href="<?php echo $_smarty_tpl->tpl_vars['sitenev']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['sitenev']->value;?>
kepek/klencsek_logo.png" alt="Kontaktlencsék.hu - Kontaktlencse webshop. Kontaktlecsék, folyadékok, tárolók online értékesítése" title="Lencsék.hu - Kontaktlencse webshop. Kontaktlecsék, folyadékok, tárolók online értékesítése" border="0" style="max-width: 90%;"  /></a>
  </td>
</tr>
  
  
<tr>
  <td align="left" valign="top">
    
    
    <table bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0" class="text-table">
      <tr>
        <td>
        
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="40" align="left" valign="middle" class="title"><!--<img src="<?php echo $_smarty_tpl->tpl_vars['sitenev']->value;?>
kepek/arrow-green.gif" border="0">&nbsp;-->
    Kedves <?php echo $_smarty_tpl->tpl_vars['rendadat']->value['rend_rendnev'];?>
!</td>
    <td width="160" align="right" valign="middle" class="title"><!--<img src="<?php echo $_smarty_tpl->tpl_vars['sitenev']->value;?>
kepek/arrow-green.gif" border="0">&nbsp;-->
    <?php echo $_smarty_tpl->tpl_vars['ford']->value['rendelesi_szam'];?>
: <?php echo $_smarty_tpl->tpl_vars['rend_id']->value;?>
 </td>
  </tr>
</table>
          
          
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="text-table">
  <tr>
    <td align="left" valign="top" class="arial-12">Köszönjük rendelését ! <br />
    Ez egy visszaigazoló email rendeléséről!<br /><br />
    <b>Külön e-mailben értesítjük amikor rendelése feladásra került, illetve átvehető!</b>
    <?php if ($_smarty_tpl->tpl_vars['rendadat']->value['fiz_mod'] == 1) {?> <br />Kérjük, hogy a végösszeget (<?php echo arformat($_smarty_tpl->tpl_vars['osszkoltseg']->value);?>
 ) utalja át az OTP Banknál vezetett 11703020 - 20000057 - 00000000 sz. számlaszámunkra.<br />
    <b>Kérjük a következő számot (<?php echo $_smarty_tpl->tpl_vars['rend_id']->value;?>
) tüntesse fel az utalás közlemény rovatában. Kérjük egyéb szöveget ne írjon be, mert a rendelését nem tudjuk beazonosítani.</b><br />
    A terméket az összeg megérkezése után tudjuk küldeni. Ha bankfiókban kívánja befizetni az összeget, a banki díj 250 Ft, kérjük ezzel az összeggel fizessen többet. Köszönjük !<?php }?>  
    </td>
  </tr>
  
  
  
</table>


  </td>
</tr>

<tr><td height="20" align="center" valign="top">&nbsp;</td></tr>

<tr>
  <td height="30" align="center" valign="top">
        
        
<table width="100%" cellpadding="3" cellspacing="1">
    <tr>
      <td colspan="3" align="left" valign="top" bgcolor="#F4F4F4" class="arial-12-bold">Termék</td>
      <!--<td align="left" valign="top" bgcolor="#F4F4F4" class="arial-12-bold"><?php if ($_smarty_tpl->tpl_vars['egy']->value['termek_csoport'] == 1) {?>Szem<?php }?></td>
      <td align="left" valign="top" bgcolor="#F4F4F4" class="arial-12-bold"><?php if ($_smarty_tpl->tpl_vars['egy']->value['termek_csoport'] == 1) {?>Jellemzők<?php }?></td>-->
      <td align="center" valign="top" bgcolor="#F4F4F4" class="arial-12-bold">Ár</td>
      <td align="center" valign="top" bgcolor="#F4F4F4" class="arial-12-bold">Db</td>
      <td align="right" valign="top" bgcolor="#F4F4F4" class="arial-12-bold">Összesen</td>
    </tr>

    
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tartalom']->value, 'egy');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['egy']->value) {
?>

<tr>
    <td colspan="3">
        <span class="arial-12-bold"><a href="<?php echo $_smarty_tpl->tpl_vars['sitenev']->value;
echo $_smarty_tpl->tpl_vars['egy']->value['termek_alnev'];?>
" class="body-link"><?php echo $_smarty_tpl->tpl_vars['egy']->value['termek_nev'];?>
</a></span><br />
        <span class="arial-12"><?php echo $_smarty_tpl->tpl_vars['ford']->value['szallitas'];?>
: <?php echo $_smarty_tpl->tpl_vars['egy']->value['termek_szallitas'];?>
*</span>
    </td>
    
    <td align="center" valign="top" bgcolor="#FFFFFF" class="arial-12"><?php if ($_smarty_tpl->tpl_vars['rendadat']->value['fiz_mod'] == 2) {?> <?php echo arformat($_smarty_tpl->tpl_vars['egy']->value['tmp_termek_ar']);?>
 <?php } else { ?> <?php echo arformat($_smarty_tpl->tpl_vars['egy']->value['termek_ar']);?>
 <?php }?></td>
    <td align="center" valign="top" bgcolor="#FFFFFF" class="arial-12"><?php echo $_smarty_tpl->tpl_vars['egy']->value['termek_db'];?>
</td>
    <td align="right" valign="top" bgcolor="#FFFFFF" class="arial-12" width="70"><?php if ($_smarty_tpl->tpl_vars['rendadat']->value['fiz_mod'] == 2) {?> <?php echo arformat(($_smarty_tpl->tpl_vars['egy']->value['tmp_termek_ar']*$_smarty_tpl->tpl_vars['egy']->value['termek_db']));?>
 <?php } else { ?> <?php echo arformat(($_smarty_tpl->tpl_vars['egy']->value['termek_ar']*$_smarty_tpl->tpl_vars['egy']->value['termek_db']));?>
 <?php }?></td>
    
</tr>

<tr>
  <td colspan="2" align="center" valign="top">
    <img src="<?php echo $_smarty_tpl->tpl_vars['sitenev']->value;
echo $_smarty_tpl->tpl_vars['kepsrc']->value;
echo $_smarty_tpl->tpl_vars['egy']->value['termek_kep'];?>
" width="150" border="0" /></td>
  </td>
  
  <td align="left" valign="top" bgcolor="#FFFFFF" class="arial-12"><?php if ($_smarty_tpl->tpl_vars['egy']->value['termek_csoport'] == 1) {
echo $_smarty_tpl->tpl_vars['ford']->value['szemek'][$_smarty_tpl->tpl_vars['egy']->value['termek_szem']];
}?></td>
  
  <td colspan="3" align="left" valign="top" bgcolor="#FFFFFF" class="arial-12" width="140">
    <div><span class="arial-12"><?php echo jellemzoki(array('jell'=>"2",'jell_id'=>$_smarty_tpl->tpl_vars['egy']->value['jell2']),$_smarty_tpl);?>
</span></div>
    <div><span class="arial-12"><?php echo jellemzoki(array('jell'=>"1",'jell_id'=>$_smarty_tpl->tpl_vars['egy']->value['jell1']),$_smarty_tpl);?>
</span></div>
    <div><span class="arial-12"><?php echo jellemzoki(array('jell'=>"3",'jell_id'=>$_smarty_tpl->tpl_vars['egy']->value['jell3']),$_smarty_tpl);?>
</span></div>
    <div><span class="arial-12"><?php echo jellemzoki(array('jell'=>"4",'jell_id'=>$_smarty_tpl->tpl_vars['egy']->value['jell4']),$_smarty_tpl);?>
</span></div>
    <div><span class="arial-12"><?php echo jellemzoki(array('jell'=>"5",'jell_id'=>$_smarty_tpl->tpl_vars['egy']->value['jell5']),$_smarty_tpl);?>
</span></div>
    <div><span class="arial-12"><?php echo jellemzoki(array('jell'=>"6",'jell_id'=>$_smarty_tpl->tpl_vars['egy']->value['jell6']),$_smarty_tpl);?>
</span></div>
    <div><span class="arial-12"><?php echo jellemzoki(array('jell'=>"7",'jell_id'=>$_smarty_tpl->tpl_vars['egy']->value['jell7']),$_smarty_tpl);?>
</span></div>
  </td>
</tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                  
<!--
<tr>
  <td colspan="6" bgcolor="#FFFFFF" class="arial-12-bold">&nbsp;</td>
</tr>
-->
<tr>
  <td colspan="5" bgcolor="#F4F4F4" class="arial-12-bold" align="right">
  Összesen: <?php echo arformat($_smarty_tpl->tpl_vars['rendadat']->value['rend_osszesen']);?>
<br />
  <?php if ($_smarty_tpl->tpl_vars['kedvezmeny']->value > 0) {?> <font color="#ff0000"><?php echo $_smarty_tpl->tpl_vars['ford']->value['kedvezmeny'];?>
: -  <?php echo arformat($_smarty_tpl->tpl_vars['kedvezmeny']->value);?>
 </font><br /><?php }?>
  Szállítási költség: + <?php echo arformat($_smarty_tpl->tpl_vars['rendadat']->value['rend_szallitasikoltseg']);?>

  </td>
  <td align="right" bgcolor="#F4F4F4" class="arial-12-bold" valign="bottom"><?php echo arformat($_smarty_tpl->tpl_vars['osszkoltseg']->value);?>
</td>
</tr>
</table>
       
 <?php if (isset($_smarty_tpl->tpl_vars['ajandek_azon']->value) && $_smarty_tpl->tpl_vars['ajandek_azon']->value != 'Nemkerem') {?>  
    <div style="margin-top:20px; border-color:#80756f; padding-top:10px;">
       
    <div style="font-size:14px; padding:5px; background:#F5F4F2; color:#46b7cd; font-weight:bold;">Az alábbi ajándékot választotta</div>
        <div style="float:left; padding:4px;">
          <img src="http://lencsek.hu/images/action/thumb_<?php echo $_smarty_tpl->tpl_vars['ajandek']->value['ajandek_kep'];?>
" border="0" height="60px;" align="left" style="padding:2px;padding-right:10px;">
          <p class="ajandek_leiras" style="max-width:500px;text-align:justify;padding:4px;"><?php echo $_smarty_tpl->tpl_vars['ajandek']->value['ajandek_leiras'];?>
</p>
          <span class="ajandek_leiras"><?php echo $_smarty_tpl->tpl_vars['ajandek']->value['ajandek_nev'];?>
</span>
        </div>
    
    </div>
    </div>
<?php }?>
        
        
        </td>
      </tr>
      
      
      <tr>
        <td height="20" align="center" valign="top">
        
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td height="40" align="left" valign="middle" class="title"><!--<img src="<?php echo $_smarty_tpl->tpl_vars['sitenev']->value;?>
kepek/arrow-green.gif" border="0">&nbsp;--><?php echo $_smarty_tpl->tpl_vars['ford']->value['szallitasi_adatok'];?>
</td>
          </tr>
        </table>
        
        </td>
      </tr>
      <tr>
        <td height="30" align="center" valign="top">
        
        <table bgcolor="#ffffff" width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="text-table">
          <tr>
            <td width="50%" align="left" valign="top" class="arial-12">
            <span class="arial-12-bold">
            <?php if ($_smarty_tpl->tpl_vars['rendadat']->value['rend_bolt_kod'] > 0 || $_smarty_tpl->tpl_vars['szallmod']->value == 4) {?>
                <?php echo $_smarty_tpl->tpl_vars['ford']->value['szemelyes_adatok'];?>

            <?php } else { ?>
                Megrendelését erre a címre küldjük
            <?php }?>
            :<br /><br /></span>
                <?php echo $_smarty_tpl->tpl_vars['ford']->value['nev'];?>
: <?php echo $_smarty_tpl->tpl_vars['rendadat']->value['rend_rendnev'];?>
<br />
                <?php echo $_smarty_tpl->tpl_vars['ford']->value['email'];?>
: <?php echo $_smarty_tpl->tpl_vars['useradat']->value['felh_email'];?>
<br />
                <?php echo $_smarty_tpl->tpl_vars['ford']->value['telefon'];?>
: <?php echo $_smarty_tpl->tpl_vars['rendadat']->value['rend_telefon'];?>
, <?php echo $_smarty_tpl->tpl_vars['rendadat']->value['rend_telefon2'];?>
<br />
                <!-- <?php echo $_smarty_tpl->tpl_vars['ford']->value['megye'];?>
: <?php echo $_smarty_tpl->tpl_vars['rendadat']->value['rend_megye'];?>
<br /> -->
                <?php echo $_smarty_tpl->tpl_vars['ford']->value['varos'];?>
: <?php echo $_smarty_tpl->tpl_vars['rendadat']->value['rend_varos'];?>
<br />
                <?php echo $_smarty_tpl->tpl_vars['ford']->value['utca'];?>
: <?php echo $_smarty_tpl->tpl_vars['rendadat']->value['rend_utca'];?>
<br />
                <?php echo $_smarty_tpl->tpl_vars['ford']->value['iranyitoszam'];?>
: <?php echo $_smarty_tpl->tpl_vars['rendadat']->value['rend_irsz'];?>
      
                        
                <p><span class="arial-12-bold"><?php echo $_smarty_tpl->tpl_vars['ford']->value['szallitas_es_fizetes'];?>
:</span><br /><br />
                <span class="arial-12"><?php echo $_smarty_tpl->tpl_vars['szallmod_ki']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['fizmod_ki']->value;?>
</span>
                
                <?php if ($_smarty_tpl->tpl_vars['rendadat']->value['rend_bolt_id'] > 0 && $_smarty_tpl->tpl_vars['rendadat']->value['szall_mod'] == 4) {?>
                    <br /><br />
                    
                    <?php echo $_smarty_tpl->tpl_vars['optika']->value['bolt_nev'];?>
<br />
                    <?php echo $_smarty_tpl->tpl_vars['optika']->value['bolt_cim'];?>
</b><br />
                    <?php echo nl2br($_smarty_tpl->tpl_vars['optika']->value['bolt_nyitvatartas']);?>

                    <br />
                    <?php echo $_smarty_tpl->tpl_vars['ford']->value['optikaban_tartjuk'];?>
<br />
                <?php }?>
                
                <?php if ($_smarty_tpl->tpl_vars['rendadat']->value['rend_bolt_kod'] > 0 && $_smarty_tpl->tpl_vars['rendadat']->value['szall_mod'] == 3) {?>
                <br />
                <br /><b>Elsődleges Pick-Pack Pont:</b><br /><br />
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
<br />
                <font color="#ffffff">Bolt kód: <?php echo $_smarty_tpl->tpl_vars['boltadat']->value['hely_bolt_kod'];?>
</font>
                <br />
                    <?php if ($_smarty_tpl->tpl_vars['rendadat']->value['rend_bolt_id2'] > 0) {?>
                    <br /><b>Másodlagos Pick-Pack Pont:</b><br /><br />
                    <?php echo $_smarty_tpl->tpl_vars['boltadat2']->value['hely_bolt'];?>
<br/>
                    <?php echo $_smarty_tpl->tpl_vars['boltadat2']->value['hely_nev'];?>
<br/>
                    <?php echo $_smarty_tpl->tpl_vars['boltadat2']->value['hely_cim'];?>
<br/>
                    <?php echo $_smarty_tpl->tpl_vars['boltadat2']->value['hely_irsz'];?>
<br/>
                    <?php echo $_smarty_tpl->tpl_vars['boltadat2']->value['hely_leiras'];?>
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
<br />
                    <font color="#ffffff">Bolt kód: <?php echo $_smarty_tpl->tpl_vars['boltadat2']->value['hely_bolt_kod'];?>
</font>
                    <br />
                    
                    <?php }?>
                <?php }?>
                
                <?php if ($_smarty_tpl->tpl_vars['rendadat']->value['rend_bolt_kod'] > 0 && $_smarty_tpl->tpl_vars['rendadat']->value['szall_mod'] == 5) {?>
                  <br />
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
                
                 <?php if ($_smarty_tpl->tpl_vars['rendadat']->value['rend_premium_futar'] > 0) {?>
                     <br /><br />
                     <table border="0" class="arial-12">
                     <tr><td><b><?php echo $_smarty_tpl->tpl_vars['ford']->value['premium_futar'];?>
:</b></td><td>&nbsp;</td><td align="right"> +<?php echo $_smarty_tpl->tpl_vars['rendadat']->value['rend_premium_futar'];?>
 Ft</td></tr>
                     <?php if ($_smarty_tpl->tpl_vars['rendadat']->value['rend_sms_ertesites'] > 0) {?> <tr><td><b>SMS értesítő:</b></td><td>&nbsp;</td><td align="right"> +<?php echo $_smarty_tpl->tpl_vars['rendadat']->value['rend_sms_ertesites'];?>
 Ft</td></tr> <?php }?>
                     <?php if ($_smarty_tpl->tpl_vars['rendadat']->value['rend_tel_ertesites'] > 0) {?> <tr><td><b>Telefonos értesítő:</b></td><td>&nbsp;</td><td align="right"> +<?php echo $_smarty_tpl->tpl_vars['rendadat']->value['rend_tel_ertesites'];?>
 Ft</td></tr> <?php }?>
                     </table>
                 <?php }?>
                </p>
                
                <?php if (!empty($_smarty_tpl->tpl_vars['rendadat']->value['rend_szamlanev']) || !empty($_smarty_tpl->tpl_vars['rendadat']->value['rend_szaml_utca'])) {?>
                
                <span class="arial-12-bold"><?php echo $_smarty_tpl->tpl_vars['ford']->value['szamlazasi_adatok'];?>
:</span><br />
                <?php echo $_smarty_tpl->tpl_vars['ford']->value['szamlanev'];?>
: <?php echo $_smarty_tpl->tpl_vars['rendadat']->value['rend_szamlanev'];?>
<br />
                <!-- <?php echo $_smarty_tpl->tpl_vars['ford']->value['megye'];?>
: <?php echo $_smarty_tpl->tpl_vars['rendadat']->value['rend_szaml_megye'];?>
<br /> -->
                <?php echo $_smarty_tpl->tpl_vars['ford']->value['varos'];?>
: <?php echo $_smarty_tpl->tpl_vars['rendadat']->value['rend_szaml_varos'];?>
<br />
                <?php echo $_smarty_tpl->tpl_vars['ford']->value['utca'];?>
: <?php echo $_smarty_tpl->tpl_vars['rendadat']->value['rend_szaml_utca'];?>
<br />
                <?php echo $_smarty_tpl->tpl_vars['ford']->value['iranyitoszam'];?>
: <?php echo $_smarty_tpl->tpl_vars['rendadat']->value['rend_szaml_irsz'];?>
<br />
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['rendadat']->value['szall_mod'] == 4 && $_smarty_tpl->tpl_vars['rendadat']->value['rend_bolt_id'] == 1) {?>
                
                <?php }?>
                
                <br /><font color="#ff0000">Kérjük várja meg értesítésünket a kiszállításról !</font>
                
                <?php if ($_smarty_tpl->tpl_vars['useradat']->value['felh_egpenztar'] > 0) {?>
                  <br /><br />
                  <?php if (!empty($_smarty_tpl->tpl_vars['useradat']->value['felh_tagnev'])) {?><br /><b><?php echo $_smarty_tpl->tpl_vars['ford']->value['egeszsegpenztar_tag'];?>
:</b> <?php echo $_smarty_tpl->tpl_vars['useradat']->value['felh_tagnev'];?>
 <?php }?>
                  <?php if (!empty($_smarty_tpl->tpl_vars['useradat']->value['felh_egazon'])) {?><br /><b><?php echo $_smarty_tpl->tpl_vars['ford']->value['egeszsegpenztar_azonosito'];?>
:</b> <?php echo $_smarty_tpl->tpl_vars['useradat']->value['felh_egazon'];?>
 <?php }?>
                <?php }?>
</p></td>
    <td align="left" valign="top" class="arial-12">
    <span class="arial-12-bold">Az eladó adatai:</span><br /><br />
O3 Optika Kft. <br />
E-mail: <a href="mailto:iroda@kontaktlencsek.hu" class="body-link">iroda@kontaktlencsek.hu</a> <br />
Ügyfélszolgálat kontaktlencsékkel és kiegészítőkkel kapcsolatban:<br />
(H-P: 8.15-16.00): 06 20 296 7871 <br />
<br /><br />
Székhely:<br />
Város: Budapest<br />
Cím: Szépvölgyi út 49-61.<br />
Irányítószám: 1037 <br />
<br />
Adószám: 13459576-2-41 <br />
Cégjegyzék szám: 01-09-736310<br />
</td>
          </tr>
          <tr>
            <td height="20" colspan="2" align="left" valign="top" class="arial-12">&nbsp;</td>
            </tr>
          <tr>
            <td colspan="2" align="left" valign="top"><span class="arial-12-bold"><?php echo $_smarty_tpl->tpl_vars['ford']->value['megjegyzes'];?>
:</span>
              <p class="arial-12"><?php echo $_smarty_tpl->tpl_vars['rendadat']->value['rend_megjegyzes'];?>
</p></td>
            </tr>
          
        </table></td>
      </tr>
      <tr>
        <td height="20" align="center" valign="top"><p><br />
          <span class="arial-12-bold">Felhívjuk figyelmét, hogy a szokásosnál több rendelés miatt átmeneti késés előfordulhat a feltűntetett szállítási időhöz képest.<br /> Megértését köszönjük.
          <br />
          
          <?php if ($_smarty_tpl->tpl_vars['useradat']->value['felh_egpenztar'] > 0 && $_smarty_tpl->tpl_vars['rendadat']->value['szall_mod'] == 4) {?>
          <br />József krt-i üzletünkben egészségpénztári kártyával is fizethet. Felhívjuk figyelmét, hogy az átvevő személy CSAK abban az esetben fizethet a kártyával, ha az az ő nevén van. Ellenkező esetben nem írhatja alá a slipet, vagy a számlát, így fizetni se tud vele. Ha az átvevő csak kedvezményezett, akkor sem és más fizetési módok kell választani. Társkártyát természetesen lehet használni fizetésre.<br /><br />
          <?php }?>
          </span>
          </p></td>
      </tr>
      <tr>
        <td height="30" align="center" valign="top">
          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td align="left" valign="top" class="arial-12"><strong> Amikor átadjuk a csomagot kézbesítésre egy értesítő e-mailt fogunk küldeni.<br>
            Köszönjük a vásárlást!<br><br>
            <font size="1">*Amennyiben több féle terméket rendel: az egyes 
            termékek szállítási ideje eltérhet,&nbsp; a termékeket egyszerre 
            szállítjuk és értelemszerűen az egyes termékek mellett feltüntetett 
            szállítási idők közül kérjük a leghosszabb szállítási időt 
            figyelembe venni.Köszönjük. 
<br /><br/>
Az elfogadott vásárlói nyilatkozat:<br /><br />
"Tudomásul veszem, hogy a kontaktlencse-viseléshez elengedhetetlenül szükséges a rendszeres, szemész szakorvos vagy optometrista által végzett vizsgálat és konzultáció, és ezt nem pótolhatja más forrásból szerzett információ. A vizsgálat és konzultáció elmulasztása vagy az ebből eredő helytelen kontaktlencse használat súlyos, esetenként visszafordíthatatlan következményekkel járó szem- vagy látáskárosodást okozhat.
Kijelentem, hogy elmúltam 18 éves, és panaszmentes kontaktlencse viselőként a kontaktlencsét 6 hónapnál nem régebbi, szemész szakorvos vagy optometrista által adott javaslatnak megfelelően rendelem meg. Az általam a rendelés során megadott információk megfelelnek a valóságnak és a javaslatban foglaltaknak. A kontaktlencse viselése alatt legalább félévente vizsgálaton veszek részt, illetve probléma esetén haladéktalanul szemész szakorvoshoz vagy optometristához fordulok.
A fentiek elmulasztásából eredő károkért teljes felelősséget vállalok.<br />
A vásárlással kijelentem, hogy a fenti típusú és paraméterű kontaktlencsét már viseltem, azt számomra szemész szakorvos vagy optometrista írta elő."
<!--
Kontaktlencse vásárlás esetén a rendelés leadásávál a vásárló kijelenti, hogy a fenti típusú és paraméterű kontaktlencsét már viselte, azt számára szemorvos írta elő valamint 6 hónapon belül kontroll vizsgálaton részt vett és kontaktlencse viseléssel kapcsolatos panasza nincs.
A kontaktlencse helytelen megválasztásából, viseléséből adódó panaszokért felelősséget nem vállalunk.-->
</font></strong>
<br /><br />
Áraink csak internetes megrendelés esetén érvényesek !<br />
Termékeinkre a jogszabályban meghatározott 14 napos elállási jogot biztosítjuk de higiéniai és egészségvédelmi okokból csak BONTATALAN csomagolású termékek esetében ! BONTOTT DOBOZÚ TERMÉKRE NEM VONATKOZIK A 14 napos elállási jog ! A visszaküldés költségét a vásárlónak kell viselnie.
<br /><br />
Amennyiben nem rendelkezik 6 hónapon belüli kontaktlencse kontroll vizsgálattal, úgy esetleges reklamációs igényét csak korlátozott feltételekkel fogadjuk be !<br />&nbsp;
<!--
<center>
Ha elégedett webshopunkkal, kérjük szavazzon ránk az <br />
Ország Boltja versenyen a <span style='color:blue'>Szépség és egészség </span>kategóriában!
<br /><br />
<a href="http://www.orszagboltja.hu/szavazas/24" target="_blank"><img border=0 id="_x0000_i1026" src="http://assets1.orszagboltja.hu/soc/widget/hu/vote-banner-220x50.png?p=24" alt="Az ország boltja 2013 - szavazok"></a>
<br /><br />
</center>
-->
    </td>
</tr>         

</table>
        
        <a title="Árukereső, a hiteles vásárlási kalauz" href="http://www.arukereso.hu/"><img src="http://image.arukereso.hu/trustedbadge/31632-150x74-9a24a16dac8c1c0773b7073d3946d681.png" alt="Árukereső, a hiteles vásárlási kalauz" style="border-style:none;" /></a>
        
        </td>
      </tr>
      
      

    </table></td>
  </tr>
  
  <tr>
        <td class="footer" align="center">
            
        <table border="0" class="arial-12" align="center" width="80%">
        <tr>
          <td align="center" class="contact"><span class="cont1">Web:</span> <a href="http://www.kontaktlencsek.hu">www.kontaktlencsek.hu</a></td>
          <td align="center" class="contact"><span class="cont1">E-mail:</span> <a href="mailto:iroda@kontaktlencsek.hu">iroda@kontaktlencsek.hu</a></td>
          <td align="center" class="contact"><span class="cont1">Telefon:</span> 06 20 296 7871</td>
        </tr>
        
        </table>
        
        </td>
    </tr>
    
    

</table>

</td></tr>
</table>

</body>
</html><?php }
}
