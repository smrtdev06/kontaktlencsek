<?php
/* Smarty version 3.1.30, created on 2022-09-02 14:16:13
  from "/var/www/vhosts/kontaktlencsek.hu/httpdocs/sablonkod/nezetek/paypal.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6312102d78d092_91593865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a93e7cc58a29436260d834abcb8aa8a38b2598fa' => 
    array (
      0 => '/var/www/vhosts/kontaktlencsek.hu/httpdocs/sablonkod/nezetek/paypal.tpl',
      1 => 1608284454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6312102d78d092_91593865 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 src="css/jquery_compress.js" type="text/javascript"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">

$(document).ready(function(){
    
  $("#creditcards").click(function(){
    $('#creditcards_radio').attr('checked', true);
  });

  $("#mastercard").click(function(){
    $('#mastercard_radio').attr('checked', true);
  });

  $("#otpay").click(function(){
    $('#otpay_radio').attr('checked', true);
  });
  
  $("#otpaymp").click(function(){
    $('#otpaymp_radio').attr('checked', true);
  });
  
});

<?php echo '</script'; ?>
>


    <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
    <td align="left" valign="top" class="arial-12">
    
    Kérjük válasszon fizetési módot és kattintson a fizetés gombra!<br /><br />
    
<form name="elektromos" method="post" action="/<?php echo $_smarty_tpl->tpl_vars['alnev']->value['megrendeles'];?>
">

<table border="0" align="center">
<tr><td><INPUT id="creditcards_radio" type="radio" name="ujfizmod" value="OTPSimple" checked="checked"></td><td><img id="creditcards" src="images/creditcards.jpg" border="0"></td><td valign="middle"> <?php echo $_smarty_tpl->tpl_vars['ford']->value['internetes_bankkartyas'];?>
</td></tr>


<!--
<tr><td><INPUT id="mastercard_radio" type="radio" name="ujfizmod" value="MPP2"></td><td><img id="mastercard" src="images/mastercardmobile.jpg" border="0"></td><td  valign="middle"> <?php echo $_smarty_tpl->tpl_vars['ford']->value['mastercard_mobile'];?>
</td></tr>
-->
<tr><td colspan="3">&nbsp;</td></tr>
<tr><td colspan="3" align="center"><input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['ford']->value['fizetes'];?>
"></td></tr>
</table>
<!-- <input type="hidden" name="MppPhoneNumber" value="36703969994"> -->
</form>
<br />
<center><b><a href="<?php echo $_smarty_tpl->tpl_vars['alnev']->value['szallitas'];?>
" class="body-link"><?php echo $_smarty_tpl->tpl_vars['ford']->value['vissza_a_fizeteshez'];?>
</a></b></center>
<!-- <?php echo $_smarty_tpl->tpl_vars['ujfizmod']->value;?>
 -->

<?php echo $_smarty_tpl->tpl_vars['paypal_gomb']->value;?>


<?php echo '<script'; ?>
 language="javascript">
<!-- //document.paypal_form.submit(); -->
<?php echo '</script'; ?>
>


    <br>
        <div class="fb-like" data-href="http://lencsek.hu" data-send="true" data-width="450" data-show-faces="true"></div>    

    </td>
    </tr>
    </table>

<?php }
}
