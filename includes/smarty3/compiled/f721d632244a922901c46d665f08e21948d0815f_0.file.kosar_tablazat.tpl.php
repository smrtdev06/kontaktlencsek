<?php
/* Smarty version 3.1.30, created on 2018-05-18 16:02:30
  from "/var/www/vhosts/lencsek.hu/uj.lencsek.hu/sablonkod/nezetek/kosar_tablazat.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5afedcf6d69286_01640154',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f721d632244a922901c46d665f08e21948d0815f' => 
    array (
      0 => '/var/www/vhosts/lencsek.hu/uj.lencsek.hu/sablonkod/nezetek/kosar_tablazat.tpl',
      1 => 1526648387,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5afedcf6d69286_01640154 (Smarty_Internal_Template $_smarty_tpl) {
?>
 
<?php echo '<script'; ?>
 language="javascript">

function uj_ar(mi, mivel) {
    document.getElementById(mi).innerHTML=mivel.toFixed(2);
}
<?php echo '</script'; ?>
> 



<?php echo '<script'; ?>
 type="text/javascript" src="//static.criteo.net/js/ld/ld.js" async="true"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
window.criteo_q = window.criteo_q || [];
window.criteo_q.push(
{ event: "setAccount", account: 29999 },
{ event: "setEmail", email: "" },
{ event: "setSiteType", type: "d" },
{ event: "viewBasket", item: [
  <?php $_smarty_tpl->_assignInScope('z', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tartalom']->value, 'kosar', false, 'kulcs', 'sorok', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['kulcs']->value => $_smarty_tpl->tpl_vars['kosar']->value) {
if ($_smarty_tpl->tpl_vars['z']->value > 0) {?>,<?php }?>{ id: "<?php echo $_smarty_tpl->tpl_vars['kosar']->value['termek_id'];?>
", price: <?php echo $_smarty_tpl->tpl_vars['kosar']->value['termek_ar']/round(310);?>
, quantity: <?php echo $_smarty_tpl->tpl_vars['kosar']->value['termek_db'];?>
}
  <?php $_smarty_tpl->_assignInScope('z', 1);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

 ]}
);
<?php echo '</script'; ?>
>


<form name="urlap2" method="post" action="<?php echo $_smarty_tpl->tpl_vars['sitenev']->value;
echo $_smarty_tpl->tpl_vars['alnev']->value['kosar'];?>
">
  <input type="hidden" name="mennyiseg_mod" value="1">
  <div class="cont-block cart" style="border-color:#80776f; width:765px;">
    <h1 class="h1_arrow_grey"><?php echo $_smarty_tpl->tpl_vars['ford']->value['kovetkezo_termekek_kosarban'];?>
</h1>
    
    <table width="100%" border="0" cellpadding="3" cellspacing="2" class="table-cart">
    
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tartalom']->value, 'egy');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['egy']->value) {
?>  
      
      <tr style="background-color:#FFF;">
        <td align="left" valign="bottom" style="background-color:#FFF;" height="30" width="240"><h2 style="margin:0"><a href="<?php echo $_smarty_tpl->tpl_vars['sitenev']->value;
echo $_smarty_tpl->tpl_vars['egy']->value['termek_alnev'];?>
" class="body-link"><?php echo $_smarty_tpl->tpl_vars['egy']->value['termek_nev'];?>
</a></h2></td>
       
        <td colspan="5" align="right" valign="bottom"><a href="<?php echo $_smarty_tpl->tpl_vars['sitenev']->value;
echo $_smarty_tpl->tpl_vars['alnev']->value['kosar'];?>
&tetel_id=<?php echo $_smarty_tpl->tpl_vars['egy']->value['tetel_id'];?>
&do=torles" class="body-link"><img src="css/icons/torles.png" border="0"> <?php echo $_smarty_tpl->tpl_vars['ford']->value['torles'];?>
</a></td>
      </tr>
      
      <tr class="table-cart-header">
      <td rowspan="2" align="center" valign="middle" style="background-color:#FFF; border-bottom: 1px dashed #bdbdbd;">
           <img src="<?php if ($_smarty_tpl->tpl_vars['egy']->value['termek_csoport'] > 2) {
echo $_smarty_tpl->tpl_vars['kepsrc2']->value;
} else {
echo $_smarty_tpl->tpl_vars['kepsrc']->value;
}?>thumb_<?php echo $_smarty_tpl->tpl_vars['egy']->value['termek_kep'];?>
" border="0" />
          </td>
        
        <td align="center" valign="middle"><?php if ($_smarty_tpl->tpl_vars['egy']->value['termek_csoport'] == 1) {
echo $_smarty_tpl->tpl_vars['ford']->value['szem'];
}?></td>
        <td align="center" valign="middle"></td>
        <td align="center" valign="middle"><?php echo $_smarty_tpl->tpl_vars['ford']->value['ar'];?>
</td>
        <td align="center" valign="middle"><?php echo $_smarty_tpl->tpl_vars['ford']->value['mennyiseg'];?>
</td>
        <td align="center" valign="middle"><?php echo $_smarty_tpl->tpl_vars['ford']->value['osszesen'];?>
</td>
      </tr>
      
      <tr style="border-bottom: 1px dashed #bdbdbd;">
        
        <?php if ($_smarty_tpl->tpl_vars['egy']->value['termek_csoport'] == 1) {?>
        <td align="center" valign="middle" style="border-bottom: 1px dashed #bdbdbd;"><?php echo $_smarty_tpl->tpl_vars['ford']->value['szemek'][$_smarty_tpl->tpl_vars['egy']->value['termek_szem']];?>
 </td>
        <?php } else { ?>
        <td style="border-bottom: 1px dashed #bdbdbd;">&nbsp;</td>
        <?php }?>
        <td style="border-bottom: 1px dashed #bdbdbd;" align="left" valign="middle">
          <div><span><?php echo jellemzoki(array('jell'=>"2",'jell_id'=>$_smarty_tpl->tpl_vars['egy']->value['jell2']),$_smarty_tpl);?>
</span></div>
          <div><span><?php echo jellemzoki(array('jell'=>"1",'jell_id'=>$_smarty_tpl->tpl_vars['egy']->value['jell1']),$_smarty_tpl);?>
</span></div>
          <div><span><?php echo jellemzoki(array('jell'=>"3",'jell_id'=>$_smarty_tpl->tpl_vars['egy']->value['jell3']),$_smarty_tpl);?>
</span></div>
          <div><span><?php echo jellemzoki(array('jell'=>"4",'jell_id'=>$_smarty_tpl->tpl_vars['egy']->value['jell4']),$_smarty_tpl);?>
</span></div>
          <div><span><?php echo jellemzoki(array('jell'=>"5",'jell_id'=>$_smarty_tpl->tpl_vars['egy']->value['jell5']),$_smarty_tpl);?>
</span></div>
          <div><span><?php echo jellemzoki(array('jell'=>"6",'jell_id'=>$_smarty_tpl->tpl_vars['egy']->value['jell6']),$_smarty_tpl);?>
</span></div>
          <div><span><?php echo jellemzoki(array('jell'=>"7",'jell_id'=>$_smarty_tpl->tpl_vars['egy']->value['jell7']),$_smarty_tpl);?>
</span></div></td>
        <td style="border-bottom: 1px dashed #bdbdbd;" align="center" valign="middle"><?php echo arformat($_smarty_tpl->tpl_vars['egy']->value['termek_ar']);?>

        <?php if ($_SESSION['tkupon'] && $_smarty_tpl->tpl_vars['egy']->value['termek_kedvezmeny'] > 0) {?><br /><font color="#47B7CB">(<?php echo $_SESSION['tkupon'];?>
)</font><?php }?>
          <input type="hidden" name="egy_ar_<?php echo $_smarty_tpl->tpl_vars['egy']->value['tetel_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['egy']->value['termek_ar'];?>
"></td>
        <td style="border-bottom: 1px dashed #bdbdbd;" align="center" valign="middle"><select name="mennyisegek[<?php echo $_smarty_tpl->tpl_vars['egy']->value['tetel_id'];?>
]" class="dropdown-specs" id="mennyiseg_<?php echo $_smarty_tpl->tpl_vars['egy']->value['tetel_id'];?>
" onchange="document.urlap2.submit()">
     
  <?php echo mennyiseg2(array('db'=>20,'akt'=>$_smarty_tpl->tpl_vars['egy']->value['termek_db']),$_smarty_tpl);?>

          </select></td>
        <td style="border-bottom: 1px dashed #bdbdbd;" align="right" valign="middle"><span id="egysor_osszes_<?php echo $_smarty_tpl->tpl_vars['egy']->value['tetel_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['egy']->value['termek_ar']*arformat($_smarty_tpl->tpl_vars['egy']->value['termek_db']);?>
</span></td>
        
      </tr>
      
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      
    </table>
    
    <div align="center"></div>
    <!--
    <table width="671" border="0" align="center" cellpadding="3" cellspacing="0">
      <tr>
        <td width="530" height="40" align="left" valign="middle" class="back"><a href="<?php echo $_smarty_tpl->tpl_vars['sitenev']->value;
echo $_smarty_tpl->tpl_vars['alnev']->value['osszes_termek'];?>
" class="body-link"><?php echo $_smarty_tpl->tpl_vars['ford']->value['vasarlas_folytatas'];?>
</a></td>
        <td width="200" height="40" align="right" valign="middle" class="fw"><a href="<?php echo $_smarty_tpl->tpl_vars['sitenev']->value;
echo $_smarty_tpl->tpl_vars['alnev']->value['szallitas'];?>
" class="body-link" ><?php echo $_smarty_tpl->tpl_vars['ford']->value['vasarlas_befejezes'];?>
</a></td>
      </tr>
    </table>
    -->
    </div>
    
  
</form>
<?php }
}
