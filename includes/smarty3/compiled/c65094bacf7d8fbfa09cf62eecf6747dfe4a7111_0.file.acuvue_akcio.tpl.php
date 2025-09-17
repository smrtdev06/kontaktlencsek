<?php
/* Smarty version 3.1.30, created on 2018-07-23 15:38:26
  from "/var/www/vhosts/lencsek.hu/uj.lencsek.hu/sablonkod/hu/acuvue_akcio.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b55da5210d504_66303909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c65094bacf7d8fbfa09cf62eecf6747dfe4a7111' => 
    array (
      0 => '/var/www/vhosts/lencsek.hu/uj.lencsek.hu/sablonkod/hu/acuvue_akcio.tpl',
      1 => 1497966336,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:nezetek/termek_lista_egy_termek.tpl' => 1,
  ),
),false)) {
function content_5b55da5210d504_66303909 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1>[Az akció véget ért 2017.06.20-án!]<br />
Ajándék hűtőtáska Acuvue lencséjéhez</h1>

<div>
<img src="images/Acuvue-hirlevel-kep.jpg" />
</div>

<!--
<div align="justify">
Az AIR OPTIX® kontaktlencsék SmartShieldTM technológiával készülnek. A SmartShieldTM technológia a plazmakezelési eljárás neve, amivel az AIR OPTIX® kontaktlencsék felszínét kezelik, hogy a szilikon-hidrogél alapanyag szilikon része jobban nedvesíthető legyen és más szilikon-hidrogél alapanyagú lencsékkel összehasonlítva kevesebb fehérje és zsíradék felrakódását eredményezi20 Milyen típusú lerakódások ellen védhet:<br /><br />
<ul>
    <li>Fehérjék és zsírok - ezek a könnyben is természetesen előforduló anyagok lerakódhatnak a lencsére</li>
    <li>A kézkrémből, a szempillaspirálból, a sminkből és a sminklemosókból származó anyagok</li>
</ul>
<br />
Az AIR OPTIX® plus HydraGlyde® kontaktlencse tartalmazza a HydraGlyde® nedvesítő rendszert, ami odavonzza a lencséhez és megköti a nedvesítő anyagot, ezzel segíti a lencsefelszín egyenletes nedvesítését7. A lencséid tisztitáshoz használd minden nap a HydraGlyde®-ot tartalmazó ápolószereket, hogy hozzájárulhasson a lencse nagyfokú nedvesítéséhez és az egész napos kényelemhez.
<div>
-->

<div class="kek_acuvue">
<br />
Vásároljon 3 dobozzal egyidejűleg az akcióban részt vevő ACUVUE kontaktlencsék<br />
valamelyikéből, és a készlet erejéig ajándék hűtőtáskát adunk.<br />
Az akció a készlet erejéig tart.</div>

<h1>Az akcióban résztvevő kontaktlencsék</h1>

<div class="cont-block" style="border-color:#90609c; display:block; width:765px; float:left;">
<!--<h1 class="h1_arrow_purple"><?php echo $_smarty_tpl->tpl_vars['ford']->value['nepszeru_termekek'];?>
</h1>-->

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nepszeru_termekek']->value, 'egy_termek');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['egy_termek']->value) {
?>
    <?php $_smarty_tpl->_subTemplateRender("file:nezetek/termek_lista_egy_termek.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
</div>

<div style="clear:both;"></div>
<br />

<?php }
}
