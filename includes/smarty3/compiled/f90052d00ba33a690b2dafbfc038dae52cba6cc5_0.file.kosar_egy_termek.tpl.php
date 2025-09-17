<?php
/* Smarty version 3.1.30, created on 2018-11-22 13:13:38
  from "/var/www/vhosts/kontaktlencsek.hu/ujdesign/sablonkod/kosar_oldal/kosar_egy_termek.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bf69d72692617_27400431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f90052d00ba33a690b2dafbfc038dae52cba6cc5' => 
    array (
      0 => '/var/www/vhosts/kontaktlencsek.hu/ujdesign/sablonkod/kosar_oldal/kosar_egy_termek.tpl',
      1 => 1542888752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf69d72692617_27400431 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="product-repeat">
<table cellspacing="2" class="table table-bordered">
                    <tbody>
                        <tr class="datasrow">
                            <td>
                                <div class="data-head">
                                    
                                    <h3>Termék</h3>
                                    <br />
                                    <!--
                                    <input type="submit" name="editProduct" value="Változtat" class="valtoztat">
                                    -->
                                </div>
                                
                                <p><strong><?php echo $_smarty_tpl->tpl_vars['egy']->value['termek_marka'];?>
</strong> <?php echo $_smarty_tpl->tpl_vars['egy']->value['termek_nev'];?>
</p>
                                <p></p>
                                <!--<p>Unisex keret</p>-->
                                <figure class="cart-product"><img src="<?php if ($_smarty_tpl->tpl_vars['egy']->value['termek_csoport'] > 2) {
echo $_smarty_tpl->tpl_vars['kepsrc2']->value;
} else {
echo $_smarty_tpl->tpl_vars['kepsrc']->value;
}
echo $_smarty_tpl->tpl_vars['egy']->value['termek_kep'];?>
" height="100"></figure>
                                
                            </td>
                            
                            <?php if ($_smarty_tpl->tpl_vars['egy']->value['termek_csoport'] == 1) {?> 
                            <td>
                                <div class="data-head">
                                    
                                    <h3><?php if ($_smarty_tpl->tpl_vars['egy']->value['termek_csoport'] == 1) {
echo $_smarty_tpl->tpl_vars['ford']->value['szem'];
}?></h3><br />
                                <!--<form action="termekleiras/product-VE3205BA GB1/catnumber-0/editbasket-1" method="post">
                                    <input type="submit" name="editProduct" value="Változtat" class="valtoztat">
                                </form>-->
                                </div>
                            
                                <?php if ($_smarty_tpl->tpl_vars['egy']->value['termek_csoport'] == 1) {?>
                                    <p><center><?php echo $_smarty_tpl->tpl_vars['ford']->value['szemek'][$_smarty_tpl->tpl_vars['egy']->value['termek_szem']];?>
</center></p>
                                <?php }?>
                                <!-- standard -->
                                <!--
                                <p>Egyfókuszú lencse</p>
                                <p>Standard</p>
                                <p>1,53 PNX / 1,5</p>
                                <p><strong>Keret ára:</strong>&nbsp; 56.410 Ft </p>
                                <p><strong>Csiszolás:</strong>&nbsp;990 Ft</p>
                                <p><strong>Lencse ár:</strong>&nbsp;5.960 Ft</p>
                                -->
                                <!--<p>Ütésálló műanyag lencse, fúrt és damilos kerethez.</p>
                                  <p>Az árból a lencse és a csiszolási költség 6.950 Ft</p>-->
                            </td>
                            
                            <td class="szemadatok">
                                <div class="data-head">
                                    <h3>Szemének adatai</h3><br />
                                <!--<form action="termekleiras/product-VE3205BA GB1/catnumber-0/editbasket-1" method="post">
                                    <input type="submit" name="editProduct" value="Változtat" class="valtoztat">
                                </form>-->
                                </div>
                                
                                <?php if ($_smarty_tpl->tpl_vars['egy']->value['jell2']) {?> <?php echo jellemzoki(array('jell'=>"2",'jell_id'=>$_smarty_tpl->tpl_vars['egy']->value['jell2']),$_smarty_tpl);?>
<br /> <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['egy']->value['jell1']) {?> <?php echo jellemzoki(array('jell'=>"1",'jell_id'=>$_smarty_tpl->tpl_vars['egy']->value['jell1']),$_smarty_tpl);?>
<br /> <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['egy']->value['jell3']) {?> <?php echo jellemzoki(array('jell'=>"3",'jell_id'=>$_smarty_tpl->tpl_vars['egy']->value['jell3']),$_smarty_tpl);?>
<br /> <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['egy']->value['jell4']) {?> <?php echo jellemzoki(array('jell'=>"4",'jell_id'=>$_smarty_tpl->tpl_vars['egy']->value['jell4']),$_smarty_tpl);?>
<br /> <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['egy']->value['jell5']) {?> <?php echo jellemzoki(array('jell'=>"5",'jell_id'=>$_smarty_tpl->tpl_vars['egy']->value['jell5']),$_smarty_tpl);?>
<br /> <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['egy']->value['jell6']) {?> <?php echo jellemzoki(array('jell'=>"6",'jell_id'=>$_smarty_tpl->tpl_vars['egy']->value['jell6']),$_smarty_tpl);?>
<br /> <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['egy']->value['jell7']) {?> <?php echo jellemzoki(array('jell'=>"7",'jell_id'=>$_smarty_tpl->tpl_vars['egy']->value['jell7']),$_smarty_tpl);?>
 <?php }?>
                                
                                
                            </td>
                            <?php }?>
                            
                            
                            
                            <td class="mennyiseg_td">
                                <div class="data-head">
                                    <h3>Mennyiség</h3>
                                    <br />
                                    <!--<input type="submit" name="editProduct" value="Változtat" class="valtoztat">-->
                                </div>
                                <input type="hidden" name="egy_ar_<?php echo $_smarty_tpl->tpl_vars['egy']->value['tetel_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['egy']->value['termek_ar'];?>
">
                                
                                <select class="form-control" name="mennyisegek[<?php echo $_smarty_tpl->tpl_vars['egy']->value['tetel_id'];?>
]"  id="mennyiseg_<?php echo $_smarty_tpl->tpl_vars['egy']->value['tetel_id'];?>
" onchange="document.urlap2.submit()">
                                <?php echo mennyiseg2(array('db'=>20,'akt'=>$_smarty_tpl->tpl_vars['egy']->value['termek_db']),$_smarty_tpl);?>

                                </select>
                                <center>
                                db
                                <br /> x <span class="price"><span class="woocommerce-Price-amount amount"><?php echo arformat($_smarty_tpl->tpl_vars['egy']->value['termek_ar']);?>
</span></span> </center>
                                <span class="clearfix"> </span>

                                <p class="total"><span class="price"><span class="woocommerce-Price-amount amount"><?php echo arformat(($_smarty_tpl->tpl_vars['egy']->value['termek_db']*$_smarty_tpl->tpl_vars['egy']->value['termek_ar']));?>
</span></span></p>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="delete_item"><a href="<?php echo $_smarty_tpl->tpl_vars['sitenev']->value;
echo $_smarty_tpl->tpl_vars['alnev']->value['kosar'];?>
&tetel_id=<?php echo $_smarty_tpl->tpl_vars['egy']->value['tetel_id'];?>
&do=torles"> <i class="fa fa-times" aria-hidden="true"></i> Törlés a kosárból </a></div>
                </div>
<?php }
}
