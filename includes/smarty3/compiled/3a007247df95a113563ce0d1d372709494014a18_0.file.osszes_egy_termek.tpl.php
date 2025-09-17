<?php
/* Smarty version 3.1.30, created on 2018-11-28 23:05:26
  from "/var/www/vhosts/kontaktlencsek.hu/ujdesign/sablonkod/nezetek/osszes_egy_termek.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bff1126bcdc20_83756669',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a007247df95a113563ce0d1d372709494014a18' => 
    array (
      0 => '/var/www/vhosts/kontaktlencsek.hu/ujdesign/sablonkod/nezetek/osszes_egy_termek.tpl',
      1 => 1484033837,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bff1126bcdc20_83756669 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="product-one-of-all" >
    <h2><a href="<?php echo $_smarty_tpl->tpl_vars['site']->value;
echo rawurlencode($_smarty_tpl->tpl_vars['egy_termek']->value['termek_alnev']);?>
" class="body-link"><?php echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_nev'];?>

    <?php if ($_smarty_tpl->tpl_vars['egy_termek']->value['termek_kat_id'] >= 3 && $_smarty_tpl->tpl_vars['egy_termek']->value['termek_kat_id'] <= 11) {?> kontaktlencse<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['egy_termek']->value['termek_kat_id'] == 15) {?> napszemüveg<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['egy_termek']->value['termek_kat_id'] == 16) {?> szemüvegkeret<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['egy_termek']->value['termek_kat_id'] == 12) {?> ápolószer<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['egy_termek']->value['termek_kat_id'] == 1300) {?> szemcsepp<?php }?></a></h2>
    <p align="left" class="product-one-of-all-man"><?php echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_gyarto'];?>
</p>
    
   		<?php if ($_smarty_tpl->tpl_vars['egy_termek']->value['termek_akcios_ar'] > 0) {?><p align="center"><div class="prod-akcio"><div class="prod-akcio-text"><?php echo $_smarty_tpl->tpl_vars['ford']->value['uj_ar'];?>
</div></div><?php }?>
   		<div style="height:100%; text-align:center; vertical-align: middle;"><a href="<?php echo $_smarty_tpl->tpl_vars['site']->value;
echo rawurlencode($_smarty_tpl->tpl_vars['egy_termek']->value['termek_alnev']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_nev'];?>
">
        <img src="<?php if ($_smarty_tpl->tpl_vars['egy_termek']->value['termek_csoport'] > 2) {
echo $_smarty_tpl->tpl_vars['kepsrc2']->value;
} else {
echo $_smarty_tpl->tpl_vars['kepsrc']->value;
}
echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_kep'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_nev'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_nev'];?>
" border="0"<?php if ($_smarty_tpl->tpl_vars['egy_termek']->value['termek_csoport'] > 2) {?>style="max-width:200px;"<?php }?> /></a></div>
    </p>
    
    <div class="product-one-of-all-price">
     <?php if ($_smarty_tpl->tpl_vars['egy_termek']->value['termek_akcios_ar'] > 0) {?>
     	<table border="0" cellpadding="3"><tr><td align="center"><span class="old_price"><?php echo $_smarty_tpl->tpl_vars['ford']->value['regi_ar'];?>
:<br /><s><?php echo arformat($_smarty_tpl->tpl_vars['egy_termek']->value['termek_ar']);?>
</s></span></td>
     
            <td><table width="126" class="product-one-of-all-np">
                <tr>
                    <td align="center" class="prod-title" height="25"><span style="font-size:14px; font-family:Georgia, "Times New Roman";"><?php echo $_smarty_tpl->tpl_vars['ford']->value['ar'];?>
</span></td>
                </tr>
                
                <tr>
                    <td align="center" height="25">
                        <span style="font-size:20px; border-top: 1px dashed; border-color:#FFFFFF;"><b><?php echo arformat($_smarty_tpl->tpl_vars['egy_termek']->value['termek_akcios_ar']);?>
</b></span>
                    </td>
                </tr>
            </table>
            </td></tr>
        </table>
        <?php } else { ?>
        <table width="126" class="product-one-of-all-np">
        	<tr>
            	<td align="center" class="prod-title" height="25"><span style="font-size:14px; font-family:Georgia, "Times New Roman";"><?php echo $_smarty_tpl->tpl_vars['ford']->value['ar'];?>
</span></td>
            </tr>
            <tr>
            	<td align="center" height="25">
                	<span style="font-size:20px; border-top: 1px dashed; border-color:#FFFFFF;"><b><?php echo arformat($_smarty_tpl->tpl_vars['egy_termek']->value['termek_ar']);?>
</b></span>
                </td>
            </tr>
        </table>
       <?php }?>
    </div>

</div>



<?php }
}
