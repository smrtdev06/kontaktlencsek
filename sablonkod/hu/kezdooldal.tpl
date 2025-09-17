
<div style="display:block; float:left;">
  
  <div style="float:left; width:370px;">
  <!--
    <h1>Boldog Karácsonyt!</h1>
    <p style="color:#ff0000;">Minden kedves vásárlónknak, boldog karácsonyt és sikerekben gazdag újévet kívánunk!</p>
    <p><br />December 24 - Január 4. Zárva<br />
    Nyitás Január 5.</p>
  -->
    
    
    <!--
    <h1><span style="color:#E44285;">Ügyfélszolgálat ünnepi nyitvatartás</span></h1>
    <p>2015.december 23-án 8:00 - 16:00<br />
2015.december 24-től 2016.január 3-ig zárva tartunk,<br />
kontaktlencsét nem tudunk küldeni. Nyitás: 2016.január 4-én.<br /><br />
ELŐFORDULHAT, HOGY EGYES RITKÁBB LENCSÉKET MÁR NEM TUDUNK KÜLDENI, CSAK JANUÁRBAN !<br />
KÉRJÜK VEGYE EZT FIGYELEMBE RENDELÉSE LEADÁSAKOR !</p>
-->

    <!--
    <h1>Új funkció!</h1>
    <p>Vásárlóink érdekeit szem elött tartva, belépés után (jobb felső sarokban) láthatja korábbi rendelésit, melyet ezután kosárba rakhat és újra rendelheti.</p>
    -->
    
    <h1>{$ford.udvozoljuk}</h1>
    <p>A jelentősebb gyártók legkeresettebb termékeivel, garantáltan eredeti kontaktlencsékkel, ápolószerekkel és egyéb tartozékokkal várjuk Önt webáruházunkban! <br /><br />
    Pénztárcabarát árak és gyors kiszolgálás - Lencsék.hu
    </p>
  
  <div>
    <a href="https://facebook.com/Lencsek.hu" target="_blank"><img src="images/lencsek_hu_face2.png"></a>
    <br>
      <div class="fb-like" data-href="https://www.facebook.com/Lencsek.hu" data-width="350" data-layout="standard" data-action="like" data-show-faces="false" data-share="false">
      </div>
  </div>
  </div>

  <div style="float:left; margin-left:10px; width:370px;">
  <!--
    <h1>MasterPass fizetés</h1>
    <p><a href="http://www.mastercard.com/hu/consumer/masterpass.html" target="_blank"><img id="otpaymp" src="images/masterpass_logo.png" border="0" alt="OTPay-jel történő fizetéshez válassza a MasterPass-t"></a><br />{$ford.masterpass_szoveg}</p>
    -->
  </div>
  
  
  <div style="float:left; margin-left:10px; width:370px;">
    <h1>OTPAY fizetés</h1>
    <p><a href="https://www.otpbank.hu/otpay/" target="_blank"><img src="kepek/otpay_mini.jpg" alt="OTPAY" border="0" align="left" style="padding:4px" /></a>    Online vásárlás kártya adatok nélkül. Az ingyenes OTPay alkalmazás segítségével egyszerűen és biztonságosan fizethet interneten, üzletekben vagy vendéglőkben, de mobiltelefon egyenleg feltöltést is könnyedén tud bonyolítani.<br /> Mindezt nem csak az OTP Bank ügyfeleként teheti meg!</p>
    
  <br style="clear:both;">
  
  </div>

  <!--
  <div style="float:right; margin-left:10px; width:400px;">
  <h1>Ország boltja</h1>
  {literal}
    <div>
<script type="text/javascript">/*<![CDATA[*/var __akn=new Date();var __ake=new Date(1436772600000);var __akl=Math.ceil((__ake.getTime()-__akn.getTime())/86400000); if(__akl<=0){document.write('<a href="//www.orszagboltja.hu/szavazas/2090" target="_blank"><img src="//assets3.orszagboltja.hu/soc/images/widgets/hu/vote-banner-220x50-2015.png?p=2090" style="border-style:none;" alt="Az ország boltja 2015 - szavazok" /><\/a>');}else{document.write('<div style="margin:0; padding:0; width:220px; height:50px; background:url(\'//assets3.orszagboltja.hu/soc/images/widgets/hu/vote-banner-220x50-1-2015.png?p=2090\'); color:#FFF; font-size:16px; font-weight:bold; font-family:Arial,sans-serif; text-align:center; overflow:hidden;"><a href="//www.orszagboltja.hu/szavazas/2090" target="_blank" style="display:block; margin:0; padding:4px 80px 0 5px; color:#FFF; text-decoration:none;">M&eacute;g <span style="font-size:18px; color:#dcbd84;">'+__akl+'</span> nap<br />a szavaz&aacute;sig</a></div>');}/*]]>*/</script>
</div>
{/literal}

<b>Amennyiben elégedett szolgáltatásunkkal,<br /> kérjük szavazzon ránk!</b><br /><br />
Legyen a Lencsék.hu az Ország Boltja!<br />
Köszönjük!
  </div>
-->  
  
  <div style="float:left;margin-left:10px; width:750px;">
    <h1>Egészségpénztárak</h1>
    <p>Az ország legtöbb egészségpénztárával kapcsolatban állunk, többek közt:<br />
    <img src="images/premium_logo.jpg" alt="Prémium" border="0"  />  <img src="kepek/medicina.jpg" alt="K&amp;H" border="0" height="48" />    <img src="kepek/otp.jpg" alt="OTP" border="0"  /> <img src="kepek/mkb.jpg" alt="MKB" border="0" /></p>
  </div>  
  
</div>
<div class="cont-block" style="border-color:#90609c; display:block; width:765px; float:left; margin-top:25px;">
<h1 class="h1_arrow_purple">{$ford.nepszeru_termekek}</h1>


{foreach from=$nepszeru_termekek item=egy_termek}
    {include file="nezetek/termek_lista_egy_termek.tpl"}
{/foreach} 
</div>


<table width="770" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
  <td height="60" align="center" valign="middle">
    <a href="http://www.shopmania.hu" title="Látogassa meg lencsék.hu-t a ShopMania weboldalon" onclick="target='_blank'; window.open('http://www.shopmania.hu/?m=241'); return false;" onkeypress="target='_blank'"><img src="https://www.shopmania.hu/img/cert/shopmania-store-hu.gif" style="border: 0;" alt="Látogassa meg lencsék.hu-t a ShopMania weboldalon" /></a>
  </td>
  <td>
  <!-- ÁRUKERESŐ.HU CODE - PLEASE DO NOT MODIFY THE LINES BELOW -->
<div style="background: transparent; text-align: center; padding: 0; margin: 0 auto; width: 120px">
<a title="Kontaktlencse az Árukeresőn" style="line-height:16px;font-size: 11px; font-family: Arial, Verdana; color: #000" href="//www.arukereso.hu/kontaktlencse-c3961/">Kontaktlencse az Árukeresőn</a>
</div>
<!-- ÁRUKERESŐ.HU CODE END -->
  </td>
  <td align="center">
    <a href="http://www.argep.hu/" target="_blank" title="www.argep.hu - az árösszehasonlító oldal"><img src="https://www.argep.hu/bilder/ArGepLogoSmall.jpg" width="75" height="35" border="0"></a>
  </td>
  
  <td>
  
  </td>

  
</tr>
</table>