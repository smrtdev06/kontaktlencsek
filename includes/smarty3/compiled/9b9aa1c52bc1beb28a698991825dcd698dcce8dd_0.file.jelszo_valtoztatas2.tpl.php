<?php
/* Smarty version 3.1.30, created on 2018-12-05 10:35:43
  from "/var/www/vhosts/kontaktlencsek.hu/ujdesign/sablonkod/nezetek/jelszo_valtoztatas2.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c079bef082380_09128806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b9aa1c52bc1beb28a698991825dcd698dcce8dd' => 
    array (
      0 => '/var/www/vhosts/kontaktlencsek.hu/ujdesign/sablonkod/nezetek/jelszo_valtoztatas2.tpl',
      1 => 1424439799,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c079bef082380_09128806 (Smarty_Internal_Template $_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['jelszo_uzenet']->value)) {?>
    <?php echo $_smarty_tpl->tpl_vars['jelszo_uzenet']->value;?>

<?php } else { ?>

 
<?php echo '<script'; ?>
 language="javascript">

function urlap1_ellenorzes(f) {
    ok = 1;

    if( f.elements["felh_jelszo"].value == "" ||
        f.elements["felh_jelszo2"].value == "" )
    {
        ok = 0;
        uzenet = '<?php echo $_smarty_tpl->tpl_vars['ford']->value['hianyzo_adatok'];?>
';
    }   
    
    if( f.elements["felh_jelszo"].value != f.elements["felh_jelszo2"].value )
    {
        ok = 0;
        uzenet = '<?php echo $_smarty_tpl->tpl_vars['ford']->value['jelszavak_nem_egyeznek'];?>
';
    }  
        
    if( ok == 0 ) {
        alert(uzenet);
        return false;
   } else {
        return true;
   }
}
<?php echo '</script'; ?>
> 



<div class="cont-block transport" style="border-color:#80776f; width:765px;">
  <h1 class="h1_arrow_grey">Jelszó változtatás</h1>
  <?php echo $_smarty_tpl->tpl_vars['hibauzenet']->value;?>

 
  <table width="100%">
    <?php if (empty($_smarty_tpl->tpl_vars['reg_hiba']->value)) {?>
    
    <?php } else { ?>
    <tr bgcolor="#fff5f5">
      <td style="font-size:18px; color:#F00" colspan="2" align="center" valign="middle"> <?php echo $_smarty_tpl->tpl_vars['reg_hiba']->value;?>
 </td>
    </tr>
    <?php }?> 
    
    <?php if (empty($_smarty_tpl->tpl_vars['belep_hiba']->value)) {?>
    
    <?php } else { ?>
    <tr bgcolor="#fff5f5">
      <td style="font-size:18px; color:#F00" colspan="2" align="center" valign="middle"> <?php echo $_smarty_tpl->tpl_vars['belep_hiba']->value;?>
 </td>
    </tr>
    <?php }?>
    <tr>
      <td width="50%" valign="top" align="center"> 
      <form id="regisztracio" name="regisztracio" method="post" action="<?php echo $_smarty_tpl->tpl_vars['sitenev']->value;
echo $_smarty_tpl->tpl_vars['alnev']->value['jelszo_valtoztatas'];?>
" onsubmit="return urlap1_ellenorzes(this)">
      <input type="hidden" name="kuldve" value="1">
      <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
">
  
      <table width="400" class="reg-table">
      <tr>
        <td height="40" style="border-right-color:#f7f7f7;"><strong><?php echo $_smarty_tpl->tpl_vars['ford']->value['uj_jelszo'];?>
:</strong></td>
        <td><input name="felh_jelszo" type="password" class="textfield-specs" id="felh_jelszo" size="30" />
          *</td>
      </tr>
      <tr>
        <td height="40" style="border-right-color:#f7f7f7;"><strong><?php echo $_smarty_tpl->tpl_vars['ford']->value['uj_jelszo_ismetlese'];?>
: </strong></td>
        <td><input name="felh_jelszo2" type="password" class="textfield-specs" id="felh_jelszo2" size="30" />
          *</td>
      </tr>
      <tr>
        <td height="40" style="border-right-color:#f7f7f7;">&nbsp;</td>
        <td align="right"><div style="float:right">
            <div class="purple-arrow-button-left2"></div>
            <input name="submit" type="submit" class="purple-arrow-button2" value="<?php echo $_smarty_tpl->tpl_vars['ford']->value['tovabb'];?>
" style="float:left" />
            <div class="purple-arrow-button-right2"></div>
          </div></td>
      </tr>
      <tr>
        <td height="40" style="border-right-color:#f7f7f7;">&nbsp;</td>
        <td><span>*
          <?php echo $_smarty_tpl->tpl_vars['ford']->value['mezok_kotelezok'];?>
 </span></td>
      </tr>
    </table>
    
    </form>
    
    </td>      
    </tr>
    
  </table>
  
</div>

<?php }
}
}
