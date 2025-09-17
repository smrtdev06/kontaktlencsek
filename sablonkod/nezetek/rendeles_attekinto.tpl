 {literal} 
<SCRIPT LANGUAGE="JavaScript">

function disableForm(theform) {
    var x = document.getElementById("nyilatkozat");

    if( !x.checked ) {
        alert("Megrendeléshez el kell fogadni a nyilatkozatot!");
        return false;
    }


if (document.all || document.getElementById) {
for (i = 0; i < theform.length; i++) {
var tempobj = theform.elements[i];
if (tempobj.type.toLowerCase() == "submit" || tempobj.type.toLowerCase() == "reset")
tempobj.disabled = true;
}
setTimeout('alert("Elküldte már a megrendelést!.")', 2000);
return true;
}
else {
// alert("The form has been submitted.  But, since you're not using IE 4+ or NS 6, the submit button was not disabled on form submission.");
return false;
   }
}

function nyilatkozat_checked() {
    var x = document.getElementById("nyilatkozat").value;
    if( x != 1 ) {
        return false;
    } else {
        return true;
    }
}

</script> 
{/literal}


<div class="cart-link" style="float:right; margin-right:5px;"><a href="{$sitenev}{$alnev.kosar}" class="body-link">{$ford.valtoztat}</a></div>

<h2>{$ford.kedves} {$user_adat.felh_csaladnev} {$user_adat.felh_keresztnev}!</h2>
<p> {$ford.rendeles_szoveg} </p>

{if $kupon_uzenet}

<center><font color="#ff0000"><b>{$kupon_uzenet}</b></font></center>

{/if}
<br />
<form method="POST" action="{$sitenev}{$alnev.megrendeles}" onSubmit="return disableForm(this);">
  <div class="cont-block cart" style="border-color:#80776f; width:765px;">
    <div class="order-page">
      <h1 class="h1_arrow_grey">{$ford.termekek}</h1>
      <table width="100%" border="0" cellpadding="3" cellspacing="1" class="order-prod-table">
        {foreach from=$tetelek item=t}
        <tr class="order-table-header">
          <td align="left" valign="bottom" width="220" height="30" colspan="5"><h2>{$t.termek_nev}</h2></td>
        </tr>
        <tr class="order-table-header">
          <td align="left" valign="top" width="150" height="20">&nbsp;</td>
          <td align="center" class="order_hatter">{if $t.termek_csoport==1}<strong>{$ford.szem}</strong>{/if}</td>
          <!-- <td align="left" valign="top"><strong>{$ford.szallitas}</strong></td> -->
          <td class="order_hatter"></td>
          <td align="center" class="order_hatter"><strong>{$ford.ar}</strong></td>
          <td align="center" class="order_hatter"><strong>{$ford.mennyiseg}</strong></td>
          <td align="center" class="order_hatter"><strong>{$ford.osszesen}</strong></td>
        </tr>
        
        <tr style="border-bottom: 1px dashed; border-color:#bdbdbd;">
          <td align="center" valign="top"><a href="{$sitenev}{$t.termek_alnev}" title="{$t.termek_nev}">
          <img src="{if $egy_termek.termek_csoport==3}{$kepsrc2}{else}{$kepsrc}{/if}thumb_{$t.termek_kep}" alt="{$egy_termek.termek_nev}" title="{$t.termek_nev}" border="0" /></a></td>
          <td align="center" class="order_hatter"> {if $t.termek_csoport==1}{$ford.szemek[$t.termek_szem]}{/if}</td>
          <td class="order_hatter">
            <div>{jellemzoki jell="2" jell_id=$t.jell2}</div>
            <div>{jellemzoki jell="1" jell_id=$t.jell1}</div>
            <div>{jellemzoki jell="3" jell_id=$t.jell3}</div>
            <div>{jellemzoki jell="4" jell_id=$t.jell4}</div>
            <div>{jellemzoki jell="5" jell_id=$t.jell5}</div>
            <div>{jellemzoki jell="6" jell_id=$t.jell6}</div>
            <div>{jellemzoki jell="7" jell_id=$t.jell7}</div></td>
          <!-- <td align="left" valign="top">{$ford.szallitas}: {$t.termek_szallitas}</td> -->
          <td align="center" valign="middle" style="padding-right:10px;" class="order_hatter">{$t.termek_ar|arformat}
          {if $smarty.session.tkupon && $t.termek_kedvezmeny > 0}<br /><font color="#47B7CB">({$smarty.session.tkupon})</font>{/if}</td>
          <td align="center" valign="middle" class="order_hatter">{$t.termek_db}</td>
          <td align="center" valign="middle" class="order_hatter"><b>{$t.termek_ar*$t.termek_db|arformat}</b></td>
        </tr>
        
        
        {/foreach}
        
      </table>
    </div>
    
    {if isset($ajandek_azon) && $ajandek_azon != 'Nemkerem' }
    <script type="text/javascript" src="css/highslide.js"></script>
    <link rel="stylesheet" type="text/css" href="css/highslide.css" />

    <div style="margin-top:20px; border-color:#80756f; padding-top:10px;">
       
    <div style="font-size:14px; padding:5px; background:#F5F4F2; color:#46b7cd; font-weight:bold;">Az alábbi ajándékot választotta</div>
        <div style="float:left; padding:4px;">
          <a href="http://kepek.lencsek.hu/images/action/{$ajandek.ajandek_kep}" onclick="return hs.expand (this,{literal}{ wrapperClassName: 'wide-border'}{/literal})">
          <img src="images/action/thumb_{$ajandek.ajandek_kep}" border="0" height="60px;" align="left" style="padding:2px;padding-right:10px;">
          </a>
          <p class="ajandek_leiras" style="max-width:500px;text-align:justify;padding:4px;">{$ajandek.ajandek_leiras}</p>
          <span class="ajandek_leiras">{$ajandek.ajandek_nev}</span>
        </div>
    
    </div>
    <div style="clear:both;"></div>
    </div>
{/if}

<div style="border:2px dashed; border-color:#ff0000;padding:8px;margin:8px;">
<b>Kedves Vásárlónk!<br />
Kérjük ellenőrizze személyes adatait, különösen a telefonszámot amelyre a csomagértesítőt küldjük Önnek!<br />
Egészségpénztári adatait is itt adhatja meg!</b>
<img src="kepek/piros_nyil.png" border="0" align="right"><br />

</div>

    <div class="order-datas">
      <table border="0" width="100%" cellspacing="0" cellpadding="3">
        <tr style="background-color:#f5f4f2; font-size:18px; padding:8px;">
          <td style="padding:5px;" colspan="2" align="center" valign="bottom">
          <a href="{$sitenev}{$alnev.regisztracio}" class="Button1" style="float:right;">{$ford.adatok_modositasa}</a>
          {if $bolt_id > 0 || $szallmod == 4}
            {$ford.szemelyes_adatok}
            {else}
            {$ford.szallitasi_adatok}
            {/if}</td>
        </tr>
        <tr style="background-color:#faf9f8; border-top: 3px solid #FFFFFF;">
          <td valign="top" width="50%" align="left" style="background: url('css/icons/arrow.png') no-repeat scroll 10px 22px transparent;padding-top:20px; background-color:#faf9f8; "><table cellpadding="5" style="border-right: 1px dashed; border-color:#bdbdbd; margin-left:78px;">
              <tr>
                <td width="50%"><b>{$ford.nev}:</b></td>
                <td>{$user_adat.felh_csaladnev} {$user_adat.felh_keresztnev}</td>
              </tr>
              {if !empty($user_adat.felh_mobil2) }
                  <tr>
                    <td><b>{$ford.mobil}:</b></td>
                    <td>06{$user_adat.felh_mobil1}/{$user_adat.felh_mobil2}</td>
                  </tr>
              {/if}
              {if !empty($user_adat.felh_telefon) }
                  <tr>
                    <td><b>{$ford.telefon}:</b></td>
                    <td>{$user_adat.felh_telefon}</td>
                  </tr>
              {/if}
              <tr>
                <td><b>{$ford.varos_telepules}:</b></td>
                <td>{$user_adat.felh_varos}</td>
              </tr>
              <tr>
                <td><b>{$ford.utca_hazszam}:</b></td>
                <td>{$user_adat.felh_utca}</td>
              </tr>
              <tr>
                <td><b>{$ford.iranyitoszam}:</b></td>
                <td>{$user_adat.felh_irsz}</td>
              </tr>
              {if !empty($user_adat.felh_tagnev) }
                  <tr>
                    <td><b>{$ford.egeszsegpenztar_tag}:</b></td>
                    <td>{$user_adat.felh_tagnev}</td>
                  </tr>
              {/if}
            </table>
            
            <!-- <br><b>{$ford.megye}:</b> {$user_adat.felh_megye} --> 
            
            {if !empty($user_adat.felh_szamlanev) || !empty($user_adat.felh_szutca) }
            <table cellpadding="5" style="border-right: 1px dashed; border-color:#bdbdbd; margin-left:78px;">
              <tr style="background-color:#f5f4f2; padding:5px;">
                <td colspan="2"><b>{$ford.szamlazasi_adatok_osszesiton}:</b></td>
              </tr>
              <tr>
                <td width="50%"><b>{$ford.szamlanev}:</b></td>
                <td>{$user_adat.felh_szamlanev}</td>
              </tr>
              <tr>
                <td><b>{$ford.utca_hazszam}:</b></td>
                <td>{$user_adat.felh_szutca}</td>
              </tr>
              <tr>
                <td><b>{$ford.varos_telepules}:</b></td>
                <td>{$user_adat.felh_szvaros}</td>
              </tr>
              <tr>
                <td><b>{$ford.iranyitoszam}:</b></td>
                <td>{$user_adat.felh_szirsz}</td>
              </tr>  
            </table>
            {/if}
            
            
            {if !empty($user_adat.felh_egazon) }<br />
            <table cellpadding="5" style="border-right: 1px dashed; border-color:#bdbdbd; margin-left:78px;">
              <tr>
                <td width="50%"><b>{$ford.egeszsegpenztar_azonosito}:</b></td>
                <td>{$user_adat.felh_egazon}</td>
              </tr>
            </table>
            {/if} </td>
          <td valign="top" style="padding:20px; auto auto 18px;"><b>{$ford.megjegyzes}:</b> <br>
            <textarea rows="5" name="megjegyzes" cols="38" style="margin-top:10px;" maxlength="220">{$user_adat.felh_megjegyzes}</textarea></td>
        </tr>
      </table>
      <div class="stripe-line"></div>
      <table border="0" width="100%" cellspacing="0" cellpadding="3">
        <tr style="background-color:#f5f4f2; font-size:18px; padding:8px; border-top: 3px solid #FFFFFF;">
          <td width="50%" align="center" valign="bottom"><a href="{$sitenev}{$alnev.szallitas}" class="Button1" style="float:right;">{$ford.szallitas_modositas}</a>{$ford.szallitas_es_fizetes} </td>
          <td align="center">{$ford.ar}</td>
        </tr>
        <tr style="background-color:#faf9f8; border-top: 3px solid #FFFFFF;">
          <td style="background: url('css/icons/pack.png') no-repeat scroll 10px 22px transparent; border-right: 1px dashed; border-color:#bdbdbd; background-color:#faf9f8; "><table style="margin-left:78px;">
              <tr>
                <td> {$szallmod_ki}, {$fizmod_ki}
                  
                  {if $bolt_id > 0 && $szallmod == 3} <br />
                  <br />
                  <b>Elsődleges Pick-Pack Pont:</b><br />
                  <br />
                  {$boltadat.hely_bolt}<br/>
                  {$boltadat.hely_nev}<br/>
                  {$boltadat.hely_cim}<br/>
                  {$boltadat.hely_irsz}<br/>
                  {$boltadat.hely_leiras}<br/>
                  Hétfő: {$boltadat.ny_h}, Kedd: {$boltadat.ny_k},<br/>
                  Szerda: {$boltadat.ny_sz}, Csütörtök: {$boltadat.ny_cs},<br />
                  Péntek: {$boltadat.ny_p}, Szombat: {$boltadat.ny_sz},<br />
                  Vasárnap: {$boltadat.ny_v}
                  
                    {if $bolt_id2 > 0}
                    <br /><br />
                    <b>Másodlagos Pick-Pack Pont:</b><br />
                    <br />
                    {$boltadat2.hely_bolt}<br/>
                    {$boltadat2.hely_nev}<br/>
                    {$boltadat2.hely_cim}<br/>
                    {$boltadat2.hely_irsz}<br/>
                    Hétfő: {$boltadat2.ny_h}, Kedd: {$boltadat2.ny_k},<br/>
                    Szerda: {$boltadat2.ny_sz}, Csütörtök: {$boltadat2.ny_cs},<br />
                    Péntek: {$boltadat2.ny_p}, Szombat: {$boltadat2.ny_sz},<br />
                    Vasárnap: {$boltadat2.ny_v}
                    {/if}
                  {/if} 
                  
                  {if $optika_id > 0 && $szallmod == 4}
                    <br /><br />
                    <b>{$optika.bolt_nev}</b><br />
                    {$optika.bolt_cim}
                    <!--{$optika.bolt_nyitvatartas|nl2br}-->
                    <br />
                  {/if}
                  
                  {if $bolt_id > 0 && $szallmod == 5} <br />
                  <br />
                  Átvételi hely:<br />
                  <br />
                  <b>{$boltadat.hely_nev}</b><br/>
                  {$boltadat.hely_cim}<br/>
                  <b>{$boltadat.hely_open}</b><br/>
                  <div style="width:270px">
                  {$boltadat.hely_findme|nl2br}
                  </div>
                  {/if} 
                  

                  {if $premium_futar > 0}
                      <br /><br />
                      <table border="0">
                      <tr><td><b>{$ford.premium_futar}:</b></td><td>&nbsp;</td><td align="right"> +{$premium_futar} Ft</td></tr>
                      {if $sms_ertesites > 0} <tr><td><b>SMS értesítő:</b></td><td>&nbsp;</td><td align="right"> +{$sms_ertesites} Ft</td></tr> {/if}
                      {if $tel_ertesites > 0} <tr><td><b>Telefonos értesítő:</b></td><td>&nbsp;</td><td align="right"> +{$tel_ertesites} Ft</td></tr> {/if}
                      </table>
                  {/if}
                  
                  
                  </td>
              </tr>
            </table></td>
          <td style="background: url('css/icons/money.png') no-repeat scroll 18px 22px transparent; background-color:#faf9f8; " valign="top"><table style="font-size:12px; margin: 12px auto 0 95px; " width="220">
              <tr>
                <td align="left"><b>{$ford.termekek}:</b></td>
                <td align="right" style="padding-right:25px;">{$osszesen|arformat}</td>
              </tr>
              
              {if $kedvezmeny > 0}
              <tr>
                <td align="left" height="22" valign="top"><b>{$ford.kedvezmeny}:</b></td>
                <td align="right" height="22" valign="top" style="padding-right:25px;">- {$kedvezmeny|arformat}</td>
              </tr>
              {/if}
              
              <tr>
                <td align="left" height="22" valign="top"><b>{$ford.szallitas}:</b></td>
                <td align="right" height="22" valign="top" style="padding-right:25px;">{$szallitas_osszeg|arformat}</td>
              </tr>
              
              
              <tr style="border-top: 1px dashed; border-color:#FFFFFF;">
                <td align="left" valign="bottom" height="22"><b>{$ford.osszesen}:</b></td>
                <td align="right" valign="bottom" style="padding-right:25px; font-size:18px;"><b>{$mindosszesen|arformat}</b></td>
              </tr>
            </table></td>
        </tr>
      </table>
    </div>
  </div>
  
  <div class="cont-block" align="justify" style="margin-top:10px; border-color:#80756f;">
  <div style="font-size:18px; padding:5px; background:#F5F4F2;">{$ford.vasarloi_nyilatkozat}</div>
  {$ford.vasarloi_szoveg}
  <!--
  Tudomásul veszem, hogy a kontaktlencse-viseléshez elengedhetetlenül szükséges a rendszeres, szemész szakorvos vagy optometrista által végzett vizsgálat és konzultáció, és ezt nem pótolhatja más forrásból szerzett információ. A vizsgálat és konzultáció elmulasztása vagy az ebből eredő helytelen kontaktlencse használat súlyos, esetenként visszafordíthatatlan következményekkel járó szem- vagy látáskárosodást okozhat.
Kijelentem, hogy elmúltam 18 éves, és panaszmentes kontaktlencse viselőként a kontaktlencsét 6 hónapnál nem régebbi, szemész szakorvos vagy optometrista által adott javaslatnak megfelelően rendelem meg. Az általam a rendelés során megadott információk megfelelnek a valóságnak és a javaslatban foglaltaknak. A kontaktlencse viselése alatt legalább félévente vizsgálaton veszek részt, illetve probléma esetén haladéktalanul szemész szakorvoshoz vagy optometristához fordulok.
A fentiek elmulasztásából eredő károkért teljes felelősséget vállalok.<br />
A vásárlással kijelentem, hogy a fenti típusú és paraméterű kontaktlencsét már viseltem, azt számomra szemész szakorvos vagy optomterista írta elő.
-->
<br /><br />
<input id="nyilatkozat" name="nyilatkozat" type="checkbox"> <b>{$ford.vasarloi_pipa}</b><br />
{if $adm4}
<input id="raktaron_kerelem" name="raktaron_kerelem" type="checkbox" value="1"> <b>{$ford.raktar_kerelem}</b><br />
{/if}
&nbsp; ¤ Fizetési kötelezettséggel járó megrendelés
  </div>
  
  <div class="cont-block" style="border-color:#80776f; float:right; width:auto; margin:10px 0 auto auto;">
    <div class="purple-arrow-button-left"></div>
    <input type="submit" class="purple-arrow-button" value="{$ford.rendeles_kuldese}" name="vegleges_elfogadva" style="float:left">
    <div class="purple-arrow-button-right"></div>
  </div>
</form>


<div class="cont-block" style="border-color:#80776f; float:left; margin-top:15px;">
  <form action="{$sitenev}{$alnev.rendeles_attekinto}">
  Kupon: <input name="kupon" type="text" size="10" maxlength="10" /> <input type="submit" value="Beváltás">
  </form>
</div>
