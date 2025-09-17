<?php
/* Smarty version 3.1.30, created on 2018-08-06 12:29:21
  from "/var/www/vhosts/lencsek.hu/uj.lencsek.hu/sablonkod/nezetek/rendelesek_lista.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b682301bfe2a0_26703745',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e84bdefae1836229b432c6d7a43bf2050e01924' => 
    array (
      0 => '/var/www/vhosts/lencsek.hu/uj.lencsek.hu/sablonkod/nezetek/rendelesek_lista.tpl',
      1 => 1473764573,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b682301bfe2a0_26703745 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1>Korábbi rendelések</h1>
<div>

<div style="width:600px;margin:0 auto;">
<!--Előző rendeléséhez képest egy vagy több termék nem rendelhető már, kérjük ellenőrizze a kosár tartalmát!<br />-->
Egyes termékek árai változhattak! Kérdés esetén írj <a href="mailto:office@lencsek.hu">nekünk</a> vagy hívjd az ügyfélszolgálatot!
<br /><br />
</div>

<?php $_smarty_tpl->_assignInScope('sor', 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['megrendelesek']->value, 'egy_rendeles');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['egy_rendeles']->value) {
?>
<div style="width:600px;margin:0 auto;">
<table id="rendelesek_tabla" align="center">
<tr align="center" bgcolor="#1D2E39" style="color:#ffffff;">
<td></td>
<td>Azonosító</td>
<td>Dátum</td>
<td>Összeg</td>
<td>Fizetés mód</td>
<td>Szállítás mód</td>
<!--<td>Újrarendelés</td>-->
</tr>
<tr bgcolor="#dcdcdc"<?php if ($_smarty_tpl->tpl_vars['sor']->value%2 == 0) {
}?>>
    <td align="center"><b><?php echo $_smarty_tpl->tpl_vars['sor']->value;?>
.</b></td>
    <td align="center"><?php echo $_smarty_tpl->tpl_vars['egy_rendeles']->value['rend_id'];?>
</td> <!-- <a href="<?php echo $_smarty_tpl->tpl_vars['sitenev']->value;
echo $_smarty_tpl->tpl_vars['alnev']->value['rendelesek'];?>
&rend_id=<?php echo $_smarty_tpl->tpl_vars['egy_rendeles']->value['rend_id'];?>
" class="normal_link"> -->
    <td><?php echo $_smarty_tpl->tpl_vars['egy_rendeles']->value['rend_datum'];?>
</td>
    <td align="right"><?php echo arformat($_smarty_tpl->tpl_vars['egy_rendeles']->value['rend_osszesen']);?>
</td>
    <td align="center"><?php echo $_smarty_tpl->tpl_vars['egy_rendeles']->value['fiz_modnev'];?>
</td>
    <td align="center"><?php echo $_smarty_tpl->tpl_vars['egy_rendeles']->value['szall_modnev'];?>
</td>
    <!--<td>&nbsp;</td>-->
</tr>
<tr><td colspan="6">
<div id="rend_adatok">
    <table class="rendelesek_tabla_css" width="590">
    <?php $_smarty_tpl->_assignInScope('osszesen', 0);
?>
    <!--        <tr>
                <td>Terméknév</td>
                <td>Szem</td>
                <td></td>
                <td align="center">Ár</td>
                <td>Mennyiség</td>
                <td>Összesen</td>
            </tr>
    -->
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tetelek']->value, 'egy_tetel');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['egy_tetel']->value) {
?>
            
    
        <?php if ($_smarty_tpl->tpl_vars['egy_rendeles']->value['rend_id'] == $_smarty_tpl->tpl_vars['egy_tetel']->value['rend_id']) {?>
            
            <?php $_smarty_tpl->_assignInScope('egy_sor_osszeg', $_smarty_tpl->tpl_vars['egy_tetel']->value['termek_ar']*$_smarty_tpl->tpl_vars['egy_tetel']->value['termek_db']);
?> 
            <?php $_smarty_tpl->_assignInScope('osszesen', $_smarty_tpl->tpl_vars['osszesen']->value+$_smarty_tpl->tpl_vars['egy_sor_osszeg']->value);
?>
            <tr>
                <td align="center" rowspan="2" width="80">
                <a href="<?php echo $_smarty_tpl->tpl_vars['sitenev']->value;
echo $_smarty_tpl->tpl_vars['egy_tetel']->value['termek_alnev_hu'];?>
"><img src="http://kepek.lencsek.hu/lencsek/thumb_<?php echo $_smarty_tpl->tpl_vars['egy_tetel']->value['termek_kep'];?>
"></a></td>
                <td colspan="5" align="center"><strong><a href="<?php echo $_smarty_tpl->tpl_vars['sitenev']->value;
echo $_smarty_tpl->tpl_vars['egy_tetel']->value['termek_alnev_hu'];?>
"><?php echo $_smarty_tpl->tpl_vars['egy_tetel']->value['termek_nev_hu'];?>
</a></strong></td>
            </tr>
            <tr>
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['ford']->value['szemek'][$_smarty_tpl->tpl_vars['egy_tetel']->value['termek_szem']];?>
</td>
                <td>
                <div><?php echo jellemzoki(array('jell'=>"2",'jell_id'=>$_smarty_tpl->tpl_vars['egy_tetel']->value['jell2']),$_smarty_tpl);?>
</div>
                <div><?php echo jellemzoki(array('jell'=>"1",'jell_id'=>$_smarty_tpl->tpl_vars['egy_tetel']->value['jell1']),$_smarty_tpl);?>
</div>
                <?php if ($_smarty_tpl->tpl_vars['egy_tetel']->value['jell3'] != 0) {?>
                    <div><?php echo jellemzoki(array('jell'=>"3",'jell_id'=>$_smarty_tpl->tpl_vars['egy_tetel']->value['jell3']),$_smarty_tpl);?>
</div>
                <?php }?>
                <div><?php echo jellemzoki(array('jell'=>"4",'jell_id'=>$_smarty_tpl->tpl_vars['egy_tetel']->value['jell4']),$_smarty_tpl);?>
</div>
                <div><?php echo jellemzoki(array('jell'=>"5",'jell_id'=>$_smarty_tpl->tpl_vars['egy_tetel']->value['jell5']),$_smarty_tpl);?>
</div>
                <div><?php echo jellemzoki(array('jell'=>"6",'jell_id'=>$_smarty_tpl->tpl_vars['egy_tetel']->value['jell6']),$_smarty_tpl);?>
</div>
                </td>
                <td align="right"><?php echo arformat($_smarty_tpl->tpl_vars['egy_tetel']->value['termek_ar']);?>
</td>
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['egy_tetel']->value['termek_db'];?>
 db</td>
                <td align="right"><?php echo arformat($_smarty_tpl->tpl_vars['egy_sor_osszeg']->value);?>
</td>    
            </tr>
            
        <?php }?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    
    <tr><td colspan="5" align="right">Összesen:</td><td align="right"><?php echo arformat($_smarty_tpl->tpl_vars['osszesen']->value);?>
</td></tr>
    </table>
</div>


</td></tr>
</table>
<div align="right" style="margin-top:4px;margin-bottom:10px;"><a href="<?php echo $_smarty_tpl->tpl_vars['sitenev']->value;
echo $_smarty_tpl->tpl_vars['alnev']->value['rendelesek'];?>
&ujra_berak=<?php echo $_smarty_tpl->tpl_vars['egy_rendeles']->value['rend_id'];?>
" class="Button1">Kosárba rakom</a></div>
<?php $_smarty_tpl->_assignInScope('sor', $_smarty_tpl->tpl_vars['sor']->value+1);
?>
</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


</div>

<!--
Kék buborékba:

Fenti rendelése újból kosárba kerül, lehetséges, hogy egyes termékek ára változott.
Amennyiben további termékeket kíván hozzá adni, megteheti.
Rendelés véglegesítéséhez szállítást és fizetést kell választani, valamint megerősíteni a rendelést.
--><?php }
}
