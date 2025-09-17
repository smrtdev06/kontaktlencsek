<?php
/* Smarty version 3.1.30, created on 2018-12-02 00:03:10
  from "/var/www/vhosts/kontaktlencsek.hu/ujdesign/sablonkod/hu/akcio2.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c03132e725a04_63745481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e7ce574aa0b155f8277e7711ca7395a17727180' => 
    array (
      0 => '/var/www/vhosts/kontaktlencsek.hu/ujdesign/sablonkod/hu/akcio2.tpl',
      1 => 1525786271,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c03132e725a04_63745481 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--
<div>
    <a href="/akcio"><img u="image" src="images/201703pol_lencsek.jpg" /></a>
</div>

<h2>Választható Polarizált napszemüvegeink !</h2>

     <div>
     Most minden 24 ezer Ft feletti vásárláshoz ajándék 5000Ft értékű Polariázált napszemüveget adunk !
     <br /><br />
     
     <b>Fontos:</b> az akció csak internetes rendelésekre vonatkozik !<br /><br />
     </div>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ajandekok1']->value, 'elem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['elem']->value) {
?>
    <div style="float:left;text-align:center; padding:4px; height:165px;width:220px;" >
      <img src="http://kepek.lencsek.hu/images/action/<?php echo $_smarty_tpl->tpl_vars['elem']->value['ajandek_kep'];?>
" border="0" style="max-width:220px;max-height:120px;"><br />
      <br /><?php echo $_smarty_tpl->tpl_vars['elem']->value['ajandek_nev'];?>
<br />
      <?php echo $_smarty_tpl->tpl_vars['elem']->value['ajandek_leiras'];?>

      <?php echo arformat($_smarty_tpl->tpl_vars['elem']->value['ajandek_ertekhatar']);?>
 felett
    </div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


<div style="clear:both;"></div>
<br />

<p align="justify">
Miért jobb a Polarizált napszemüveglencse a hagyományosnál? A napszemüveg lencséjén egy speciális réteg található, amely megszűri a különböző tárgyak, felületekről visszaverődő fényt. Különösen hasznos: autóvezetésnél, vizparton, vizi tevékenységeknél.<br />
Amennyiben a kiküldött napszemüveg nem nyeri el tetszését, úgy azt kicserélheti egy másikra 30 napon belül a József Krt-i optikánkban. <br />
<br />
</p>
-->
<center><img src="images/tavaszi_ajandek2.jpg" border="0"  height="400" width="680"></center><br>
<h1>Válaszd ajándékaink közül:</h1>

<div class="ajandek_cim">10.000 Ft vásárlás felett :</div>
<div style="float:left;text-align:center; padding:4px; height:165px;width:220px;" >
<img src="/images/action/optifree.jpg" border="0" style="max-width:220px;max-height:120px;"><br />
<br />Opti-Free Pure Moist 60ml + kistáska
</div>
<div style="clear:both;"></div>

<div class="ajandek_cim">15.000 Ft vásárlás felett :</div>
<div style="float:left;text-align:center; padding:4px; height:165px;width:220px;" >
<img src="/images/action/bogre.jpg" border="0" style="max-width:220px;max-height:120px;"><br />
<br />AIR OPTIX bögre
</div>
<div style="clear:both;"></div>

<!--
<div class="ajandek_cim">20.000 Ft vásárlás felett :</div>
<div style="float:left;text-align:center; padding:4px; height:165px;width:220px;" >
<img src="/images/action/OPTI-FREE_szemfedo.jpg" border="0" style="max-width:220px;max-height:120px;"><br />
<br />OPTI-FREE Szemmaszk
</div>

<div style="float:left;text-align:left;">
<br>
- A szemmaszk segít megnyugtatni a fáradt szemet.<br />
- A szem körüli vérkeringést gyorsítja.<br />
- Enyhíti a szem fáradtságát. <br />
</div>
</div>
-->

<div style="clear:both;"></div>
<div class="ajandek_cim">20.000 Ft-os vásárlás felett :</div>
<br />
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ajandekok2']->value, 'elem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['elem']->value) {
?>
    <div style="float:left;text-align:center; padding:4px; height:165px;width:220px;" >
      <img src="/images/action/<?php echo $_smarty_tpl->tpl_vars['elem']->value['ajandek_kep'];?>
" border="0" style="max-width:220px;max-height:120px;"><br />
      <br /><?php echo $_smarty_tpl->tpl_vars['elem']->value['ajandek_nev'];?>
<br />
      <?php echo $_smarty_tpl->tpl_vars['elem']->value['ajandek_leiras'];?>

    </div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 

<img src="images/szemuvegtok.jpg" width="220" border="0"><br />
<br />
A napszemüvegekhez tokot is biztosítunk.<br>               
</div>
</div>


<div style="clear:both;"></div>

<div class="ajandek_cim">25.000 Ft-os vásárlás felett :</div>
<!--
<div style="float:left;text-align:center; padding:4px; height:165px;width:220px;">
<img src="/images/ajandek1.jpg" width="260" border="0"><br />
<br />
Napszemüveg 7-es<br>
</div>
-->
<div style="float:left;text-align:center; padding:4px; height:165px;width:220px;">
<img src="/images/ajandek2.jpg" width="220" border="0"><br />
<br />
Napszemüveg 7 - Polarizált!<br>
</div>
<!--
<div style="float:left;text-align:center; padding:4px; height:165px;width:220px;">
<img src="/images/ajandek3.jpg" width="220" border="0"><br />
<br />
Napszemüveg 9-es<br>
</div>
-->
<img src="images/szemuvegtok.jpg" width="220" border="0"><br />
<br />
A napszemüvegekhez tokot is biztosítunk.<br>

<div style="clear:both;"></div>

<div style="float:left;text-align:center; padding:4px; height:165px;width:220px;" >
<img src="/images/action/DAILIES_torolkozo.jpg" border="0" style="max-width:220px;max-height:120px;"><br />
<br />DAILIES törölköző<br />
70x140cm prémium minőség<br />
</div>

<div style="float:left;text-align:center; padding:4px; height:210px;width:220px;" >
<img src="/images/action/vizsgalat.jpg" border="0" style="max-width:220px;max-height:120px;"><br />
<br />Kontaktlencse kontrollvizsgálat<br />
A félévenként ajánlott de egy évnél semmiképpen nem hosszabb időközönként esedékes kontaktlencse kontrollvizsgálat.
</div>



<div style="clear:both;"><br /></div>

<div class="ajandek_cim">30.000 Ft vásárlás felett :</div>
<!--
<div style="float:left;text-align:center; padding:4px; height:265px;width:220px;" >
<img src="/images/action/takaro.jpg" border="0" style="max-width:220px;max-height:120px;"><br />
<br />AIR OPTIX Polár takaró<br />
</div>

<div style="float:left;text-align:left;">
<br>
Puha, finom tapintású könnyű polár takaró.<br />
Hideg estéken ezt a könnyed takarót magunkra terítve,<br /> rendkívül hamar felmelegedhetünk.<br />
Színe: sötét kék<br />
Méret: 165x135 cm<br />
Minőség: I. osztály
</div>
-->
<div style="float:left;text-align:center; padding:4px; height:165px;width:220px;" >
<img src="/images/action/225_pendrive_javitott.jpg" border="0" style="max-width:220px;max-height:120px;"><br />
<br />8GB AIR OPTIX Exclusive pendrive
</div>
<div style="clear:both;"></div>

<div class="ajandek_cim">35.000 Ft vásárlás felett :</div>
<div style="float:left;text-align:center; padding:4px; height:165px;width:220px;" >
<img src="/images/action/hangszoro.jpg" border="0" style="max-width:220px;max-height:120px;"><br />
<br />Dailies Aqua Comfort Plus mobil hangszóró és akku töltő egyben*
</div>

<!--
<div style="float:left;text-align:center; padding:4px; height:165px;width:220px;" >
<img src="/images/action/tengerkek_torolkozo.jpg" border="0" style="max-width:220px;max-height:120px;"><br />
<br />DAILIES törölköző tengerkék<br />
70x140cm prémium minőségű törölköző
</div>
-->

<!--
<span class="arial-12-bold"><br>
<b>Most napszemüveg helyett 3ml-es Systane szemcseppet is választhat!</b><br /><br />
<table border="0" align="center">

<tr><td><img src="http://kepek.lencsek.hu/lencsek/22996.jpg" border="0"></td>
<td width="200">
A Systane® Ultra szemcsepp hatékony terápiát kínál, és egyedülállóan intelligens formulájának köszönhetően kiterjesztett védelmert nyújt szemeinek. 
</td></tr>


<!--
<tr><td align="center"><img src="http://kepek.lencsek.hu/lencsek/20138.jpg" border="0"></td>
<td width="200">
Univerzális folyadék lágy kontaktlencsékhez tároló tokkal. (120ml) MINDEN TÍPUSÚ LÁGY KONTAKTLENCSÉHEZ HASZNÁLHATÓ (BAUSCH&LOMB, CIBAVISION, JOHNSON&JOHNSON,COOPERVISION,SAUFLON,STB.)  AUG-i lejáratú !
</td></tr>

<tr><td><img src="http://kepek.lencsek.hu/lencsek/22939.jpg" border="0"></td>
<td width="200">
16 órán át tartó nedvesítést biztosít, eltávolítja a zsírokat és a fehérjéket, biztosítja az éleslátást, hatékony csíraölő összetétel, amely gyengéd a szemhez. 
</td></tr>

</table>


</span><br /><br />
-->
<div style="float:left; display:block; margin-top:20px; width:700px;">
    <span class="arial-11">* A hangszórót a csomagban mellékelt mindkét végén mini jack csatlakozós vezetékkel lehet a telefonhoz csatlakoztatni. Az akku töltő funkcióhoz az Ön eszközének saját töltő kábele szükséges, ez nincsen a csomagban. Az akkumulátor 2200 mAh kapacitású.<br /><br />
    <img src="images/premium_logo.jpg" alt="Prémium" border="0" height="42" /> <img src="kepek/otp.jpg" alt="OTP" width="202" height="42" border="0" /> <img src="kepek/mkb.jpg" alt="MKB eg&eacute;szs&eacute;gp&eacute;nzt&aacute;r" height="42" border="0" /> <img src="kepek/medicina.jpg" alt="K&amp;H" height="42" border="0" />
</span>
</div><?php }
}
