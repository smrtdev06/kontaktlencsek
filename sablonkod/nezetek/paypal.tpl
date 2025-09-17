{literal}
<script src="css/jquery_compress.js" type="text/javascript"></script>

<script type="text/javascript">

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

</script>
{/literal}

    <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
    <td align="left" valign="top" class="arial-12">
    
    Kérjük válasszon fizetési módot és kattintson a fizetés gombra!<br /><br />
    
<form name="elektromos" method="post" action="/{$alnev.megrendeles}">

<table border="0" align="center">
<tr><td><INPUT id="creditcards_radio" type="radio" name="ujfizmod" value="OTPSimple" checked="checked"></td><td><img id="creditcards" src="images/creditcards.jpg" border="0"></td><td valign="middle"> {$ford.internetes_bankkartyas}</td></tr>

{*
<tr><td><INPUT id="otpaymp_radio" type="radio" name="ujfizmod" value="OTPayMP"></td><td><img id="otpaymp" src="images/masterpass_logo.png" border="0"></td><td  valign="middle"> {$ford.masterpass_szoveg}</td></tr>

<tr><td><INPUT id="otpay_radio" type="radio" name="ujfizmod" value="OTPAY"></td><td><img id="otpay" src="kepek/otpay_mini.jpg" border="0"></td><td valign="middle"> OTPAY<br />További információ: <a href="https://www.otpbank.hu/otpay/" target="_blank">https://www.otpbank.hu/otpay/</a></td></tr>
*}
<!--
<tr><td><INPUT id="mastercard_radio" type="radio" name="ujfizmod" value="MPP2"></td><td><img id="mastercard" src="images/mastercardmobile.jpg" border="0"></td><td  valign="middle"> {$ford.mastercard_mobile}</td></tr>
-->
<tr><td colspan="3">&nbsp;</td></tr>
<tr><td colspan="3" align="center"><input type="submit" value="{$ford.fizetes}"></td></tr>
</table>
<!-- <input type="hidden" name="MppPhoneNumber" value="36703969994"> -->
</form>
<br />
<center><b><a href="{$alnev.szallitas}" class="body-link">{$ford.vissza_a_fizeteshez}</a></b></center>
<!-- {$ujfizmod} -->

{$paypal_gomb}

<script language="javascript">
<!-- //document.paypal_form.submit(); -->
</script>


    <br>
        <div class="fb-like" data-href="http://lencsek.hu" data-send="true" data-width="450" data-show-faces="true"></div>    

    </td>
    </tr>
    </table>

