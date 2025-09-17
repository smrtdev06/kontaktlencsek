{literal} 
<script language="javascript">

var ford_utalas_utan = "{/literal}{$ford.utalas_utan}{literal}";
var ford_foxpost_bankkartya = "{/literal}{$ford.foxpost_bankkartya}{literal}";
var ford_futarceggel_keszpenz = "{/literal}{$ford.futarceggel_keszpenz}{literal}";
var ford_valassz_atveteli_pontot = "{/literal}{$ford.valassz_atveteli_pontot}{literal}";
var ford_valassz_varost = "{/literal}{$ford.valassz_varost}{literal}";
var ford_valassz_optikat = "{/literal}{$ford.valassz_optikat}{literal}";

var fizmod=0; // itt kell alapérték?
var szalmod=0;
var ossz_ar={/literal}{$osszesen}{literal};
//var ar = 0;
var data = {/literal}{$helyek}{literal};

    //function dinamikusar(fizmod,szalmod){
    //    var arak={{/literal}{$artomb}{literal}};

    //    //ar=arak[fizmod][szalmod];
    //}
     
    function fox_nyitvatartas(v) {
        var nyitvatartasok = {/literal}{$fox_nyitvatartasok}{literal};
        document.getElementById('fox_nyitvatart').innerHTML = nyitvatartasok[v.value].hely_nyitva + '<br />' + nyitvatartasok[v.value].hely_findme + '<br />';
    } 
    
    function nyitvatartas(v) {
        var nyitvatartasok = {/literal}{$nyitvatartasok}{literal};
        
        document.getElementById('nyitvatart').innerHTML = nyitvatartasok[v.value].hely_nyitva;
        //document.getElementById('nyitvatart_hidden').value = nyitvatartasok[v.value].hely_nyitva;
    }
    
    function optika_nyitvatartas(v) {
        var optika_nyitvatartasok = { "0": "", "1" : "{/literal}{$optika1_ny}{literal}", "2" : "{/literal}{$optika2_ny}{literal}", "3" : "{/literal}{$optika3_ny}{literal}" };
        
        document.getElementById('optika_nyitva').innerHTML = '<br />' + optika_nyitvatartasok[v.value];
    }
        
    function hely_feltoltes(f,v,mit) {
        var helyek = data[v.value];
        
        for(var z=f.elements[mit].options.length-1; z>0; z--) {
            f.elements[mit].remove(z);
        }

        if( mit == 'p_varos') {
            for(var z=f.elements['p_hely'].options.length-1; z>0; z--) {
                f.elements['p_hely'].remove(z);
            }
        }
        
        if( v.value > 0 && mit != 'p_hely') {
            for(var i=0; i<helyek.length; i++) {
                f.elements[mit].options[f.elements[mit].options.length] = new Option(helyek[i].hely_nev, helyek[i].hely_id);
            }
        
        } 
        
        if( v.value > 0 && mit == 'p_hely' )  {
            for(var i=0; i<helyek.length; i++) {
                    f.elements[mit].options[f.elements[mit].options.length] = new Option(helyek[i].hely_bolt+': '+helyek[i].hely_cim, helyek[i].hely_id);
                }
            }
    }
    
    function foxpost_varos_feltoltes(f,v,mit) {
        
        var foxpost_varosok = {/literal}{$foxpost_varosok}{literal};
        var helyek = foxpost_varosok[v.value];
        
        // változtatáskor kiűrítjük a listát
        for(var z=f.elements[mit].options.length-1; z>0; z--) {
            f.elements[mit].remove(z);
        }

        // ha változott a város kiűrítjük az átváteli pontokat is
        for(var z=f.elements['f_hely'].options.length-1; z>0; z--) {
            f.elements['f_hely'].remove(z);
        }
        
        // majd feltöltjük az aktuális városokkal
        for(var i=0; i<helyek.length; i++) {
            f.elements[mit].options[f.elements[mit].options.length] = new Option(helyek[i].varos, helyek[i].varos_id);
        }
    }
    
    function foxpost_hely_feltoltes(f,v,mit) {
        
        var foxpost_data = {/literal}{$foxpost_helyek}{literal};
        var helyek = foxpost_data[v.value];
        
        // változtatáskor kiűrítjük a listát
        for(var z=f.elements[mit].options.length-1; z>0; z--) {
            f.elements[mit].remove(z);
        }

        if( v.value > 0 && mit != 'f_hely') {
            for(var i=0; i<helyek.length; i++) {
                f.elements[mit].options[f.elements[mit].options.length] = new Option(helyek[i].hely_nev, helyek[i].hely_id);
            }
        
        } 
        
        if( v.value > 0 && mit == 'f_hely' )  {
            for(var i=0; i<helyek.length; i++) {
                    f.elements[mit].options[f.elements[mit].options.length] = new Option(helyek[i].hely_nev + ' : ' + helyek[i].hely_cim, helyek[i].hely_id);
                }
            }
    }
    
    function checkPick() {
        if(document.getElementById('pickpackbox').style.display =="block")
        {
            if(document.form2.p_megye.value==0)
            {
                alert( ford_valassz_atveteli_pontot );
                document.form2.p_megye.focus();
                return false;
            }
            else if(document.form2.p_varos.value==0)
            {
                alert( ford_valassz_varost );
                document.form2.p_varos.focus();
                return false;
            }
            else if(document.form2.p_hely.value==0)
            {
                alert( ford_valassz_atveteli_pontot );
                document.form2.p_hely.focus();
                return false;
            }
        }
        
        if(document.getElementById('optikabox').style.display =="block")
        {
            if(document.form2.optika_id.value==0)
            {
                alert( ford_valassz_optikat );
                document.form2.optika_id.focus();
                return false;
            }
            
        }
        
    }
   
</script> 

<link rel="stylesheet" type="text/css" href="css/atvetel.css" />
<link rel="stylesheet" type="text/css" href="css/main.css" />

<script src="css/accounting.min.js" type="text/javascript"></script>
<script src="css/jquery_compress.js" type="text/javascript"></script>
<script src="css/termekvalto.js" type="text/javascript"></script>
{/literal}

<div id="overDiv" style="position:absolute; visibility:hidden; z-index:1000;"></div>

<!-- Teszt -->
<form id="form2" name="form2" method="post" action="{$alnev.szallitas}" onsubmit="return checkPick();">
<input type="hidden" name="kedvezmeny" id="kedvezmeny" value="{$kedvezmeny}" />
<div class="cont-block transport" style="border-color:#80776f; width:760px;">
  <h1 class="h1_arrow_grey">{$ford.szallitas_es_fizetes}</h1>
  
    <input type="hidden" name="kuldveszall" value="1">
    
    
    <table width="100%" align="center" cellpadding="5" cellspacing="2">
      <tr>
        <td height="30" ><!-- innentől --> 
          
          {if !empty($sz_hiba) } <span class="error">{$sz_hiba}</span> {/if}
          
          <!-- itt volt a régi szállítás -->
          
          <!--
    {foreach from=$szall_tomb item=egysor}
      <tr align="center">
        {foreach from=$egysor item=egyoszlop}
          <td>{szallarformat ar=$egyoszlop.ar ingyen=$egyoszlop.ingyen}</td>
        {/foreach}      </tr>
      {/foreach}
--> 
          
          <!-- ------------------------------------------------------------------------------------------------------------------------------------------------ -->
         
          <!-- 
              0 - probaval/noproba
              1 - átvétel módja (1-futár, 2- posta, 3 partner)
              2 - fizetés módja (1- előrre, 2-utánvét, 3-bankkártya, 4-paypal) 
              3 - értéke (free/érték)
              <a href="#" id="noprobe|2|2|free" class="payment">Ingyenes</a>
              -->
 
<div class="nincsproba_box" >           
                                                
                <div class="ures"></div>
                <div class="fizetesi_modok"><p>{$ford.eloreutalas}<img onmouseover="Tip('{$ford.tip_elore_utalas}')" onmouseout="UnTip()" class="kerdojelicon_szallmod" title="Ide jön majd a magyarázó szöveg!" alt="Mi ez pontosan?" src="images/kerdojel_icon_sotet.gif" height="20" /></p><span class="lefelenyil">&nbsp;</span></div>
                <div class="fizetesi_modok"><p style="margin-top:6px;">{$ford.keszpenz}<img onmouseover="Tip('{$ford.tip_utanvet}')" onmouseout="UnTip()" class="kerdojelicon_szallmod" title="Ide jön majd a magyarázó szöveg!" alt="Mi ez pontosan?" src="images/kerdojel_icon_sotet.gif" height="20" /></p><span class="lefelenyil">&nbsp;</span></div>                        
                <div class="fizetesi_modok"><p style="margin-top:6px;">{$ford.bankkartya}<img onmouseover="Tip('{$ford.tip_bankkartya}')" onmouseout="UnTip()" class="kerdojelicon_szallmod" title="Ide jön majd a magyarázó szöveg!" alt="Mi ez pontosan?" src="images/kerdojel_icon_sotet.gif" height="20" /></p><span class="lefelenyil">&nbsp;</span></div>                     
                <div class="clear"></div> 
                
          <span  style="height:100%;display:;">
                

                
                
                    
     
    <!----------------------------------------------------------------------------------------->
    <div class="clear"></div>
                       
    <div class="szallitasimod" style="line-height:20px;">
        <span class="jobbranyil"></span>
        Átvételi pontok:<br />
        <input id="atv1" name="atveteli" type="radio" value="fox"><label for="atv1">{$ford.foxpost}</label> <img onmouseover="Tip('{$ford.tip_foxpost}')" onmouseout="UnTip()" class="kerdojelicon_szallmod" title="Ide jön majd a magyarázó szöveg!" alt="Mi ez pontosan?" src="images/kerdojel_icon_sotet.gif" height="20" /> <br />
        <input id="atv2" name="atveteli" type="radio" value="pick"><label for="atv2">{$ford.pickpackpont}</label>
        <img onmouseover="Tip('{$ford.tip_pickpackpont}')" onmouseout="UnTip()" class="kerdojelicon_szallmod" title="Ide jön majd a magyarázó szöveg!" alt="Mi ez pontosan?" src="images/kerdojel_icon_sotet.gif" height="20" />
    </div>
   
                <span id="foxarak">
                <a href="#" id="w|5|1|{$szallar_tomb[5][1].ar}" class="payment "><p>{$szallar_tomb[5][1].ar} Ft</p><span>{$ford.ingyenes_felette}</span> {$szallar_tomb[5][1].ingyen|arformat} {$ford.felett}</a>
                <a href="#" id="w|5|3|{$szallar_tomb[5][3].ar}" class="payment "><p>{$szallar_tomb[5][3].ar} Ft</p><span>{$ford.ingyenes_felette}</span> {$szallar_tomb[5][3].ingyen|arformat} {$ford.felett}</a>
                <a href="#" id="w|5|2|{$szallar_tomb[5][2].ar}" class="payment "><p>{$szallar_tomb[5][2].ar} Ft</p><span>{$ford.ingyenes_felette}</span> {$szallar_tomb[5][2].ingyen|arformat} {$ford.felett}</a>
                </span>

                <span id="pickpackarak" style="display:none;">
                <a href="#" id="w|3|1|{$szallar_tomb[3][1].ar}" class="payment "><p>{$szallar_tomb[3][1].ar} Ft</p><span>{$ford.ingyenes_felette}</span> {$szallar_tomb[3][1].ingyen|arformat} {$ford.felett}</a>
                <a href="#" id="w|3|3|{$szallar_tomb[3][3].ar}" class="payment "><p>{$szallar_tomb[3][3].ar} Ft</p><span>{$ford.ingyenes_felette}</span> {$szallar_tomb[3][3].ingyen|arformat} {$ford.felett}</a>
                <a href="#" id="w|3|2|{$szallar_tomb[3][2].ar}" class="payment "><p>{$szallar_tomb[3][2].ar} Ft</p><span>{$ford.ingyenes_felette}</span> {$szallar_tomb[3][2].ingyen|arformat} {$ford.felett}</a>
                </span>

                <div class="clear"></div>

    <div align="left" style="display: none; height:auto;" id="pickpackbox">
        <br>
        <select class="kicsi-select" onchange="hely_feltoltes(this.form,this,'p_varos')" size="1" name="p_megye">
            <option value="0">{$ford.valassz_megyet}</option>
            {foreach from=$megyek item=megye}
                <option value="{$megye.hely_id}">{$megye.hely_nev}</option>
            {/foreach}
        </select>
        <br>
        <select class="kicsi-select" onchange="hely_feltoltes(this.form,this,'p_hely')" size="1" name="p_varos">
            <option value="0">{$ford.valassz_varost}</option>
        </select>
        <br>
        <select class="kicsi-select" onchange="nyitvatartas(this)" size="1" name="p_hely">
            <option value="0">{$ford.valassz_atveteli_pontot}</option>
        </select>
        
        <br><br>
        <font size="-2">
        <span id="nyitvatart">
        
        </span>
        
        </font>
        <br>
    </div>
                
    <!-- Foxpost rész -->
     <div align="left" style="display: none; height:auto;" id="foxpostbox">
        <br>
        <select class="kicsi-select" onchange="foxpost_varos_feltoltes(this.form,this,'f_varos')" size="1" name="f_megye">
            <option value="0">{$ford.valassz_megyet}</option>
            {foreach from=$f_megyek item=f_megye}
                <option value="{$f_megye.megye_id}">{$f_megye.megye_nev}</option>
            {/foreach}
        </select>
        <br>
        <select class="kicsi-select" onchange="foxpost_hely_feltoltes(this.form,this,'f_hely')" size="1" name="f_varos">
            <option value="0">{$ford.valassz_varost}</option>
        </select>
        <br>
        <select class="kicsi-select" onchange="fox_nyitvatartas(this)" size="1" name="f_hely">
            <option value="0">{$ford.valassz_atveteli_pontot}</option>
        </select>
        
        <br><br>
        <font size="-2">
        <span id="fox_nyitvatart">
        
        </span>
        <input type="hidden" name="szallmod" id="szallmod" value="0" />
        <input type="hidden" name="fizetesmod" id="fizetesmod" value="0" />
        </font>
        Foxpost szállítási módnál helyszínen fizetés csak bankkártyával lehetséges !&nbsp;
        <br>
    </div>
    <!-- Foxpost vége -->
    <!----------------------------------------------------------------------------------------->
    
    
    <div class="clear"></div>
    
    <div class="szallitasimod"><span class="jobbranyil">&nbsp;</span>{$ford.futarceggel}<img onmouseover="Tip('{$ford.tip_futarceg}')" onmouseout="UnTip()" class="kerdojelicon_szallmod" alt="Mi ez pontosan?" src="view/images/kerdojel_icon_sotet.gif" height="20" /></div>
                
                <a href="#" id="w|2|1|{$szallar_tomb[2][1].ar}" class="payment "><p>{$szallar_tomb[2][1].ar} Ft</p><span>{$ford.ingyenes_felette}</span> {$szallar_tomb[2][1].ingyen|arformat} {$ford.felett}</a>
                <a href="#" id="w|2|3|{$szallar_tomb[2][3].ar}" class="payment "><p>{$szallar_tomb[2][3].ar} Ft</p><span>{$ford.ingyenes_felette}</span> {$szallar_tomb[2][3].ingyen|arformat} {$ford.felett}</a>
                <a href="#" id="w|2|2|{$szallar_tomb[2][2].ar}" class="payment "><p>{$szallar_tomb[2][2].ar} Ft</p><span>{$ford.ingyenes_felette}</span> {$szallar_tomb[2][2].ingyen|arformat} {$ford.felett}</a>
    
     </span>
    
    
    
                
                
    
     
     
          <div class="clear"></div>

          <div class="szallitasimod"><span class="jobbranyil">&nbsp;</span>{$ford.szemelyesen}<img onmouseover="Tip('{$ford.tip_optikaban}')" onmouseout="UnTip()" class="kerdojelicon_szallmod" title="Ide jön majd a magyarázó szöveg!" alt="Mi ez pontosan?" src="view/images/kerdojel_icon_sotet.gif" height="20" /></div>
          
                <a href="#" id="w|4|1|{$szallar_tomb[4][1].ar}" class="payment "><p>{$szallar_tomb[4][1].ar} Ft</p><span>{$ford.ingyenes}</span> <!-- {$szallar_tomb[4][1].ingyen|arformat} felett--> </a>
                <a href="#" id="w|4|3|{$szallar_tomb[4][3].ar}" class="payment "><p>{$szallar_tomb[4][3].ar} Ft</p><span>{$ford.ingyenes}</span> <!-- {$szallar_tomb[4][3].ingyen|arformat} felett--> </a>
                <a href="#" id="w|4|2|{$szallar_tomb[4][2].ar}" class="payment "><p>{$szallar_tomb[4][2].ar} Ft</p><span>{$ford.ingyenes}</span> <!-- {$szallar_tomb[4][2].ingyen|arformat} felett--> </a>

                <!--<a href="#" id="w|2|2|free" class="payment  "><p class="ingyenes">Ingyenes</p></a>-->
                <!--  <a href="#" id="noprobe|2|3|free" class="payment"><p class="ingyenes">Hamarosan</p></a> -->
                
                
   
    <div id="optikabox" style="display:none;margin-top:10px;margin-bottom:10px;padding:5px;" height="80">
        <b>Szemüvegek.hu Optika</b><br /><br />
        <select name="optika_id" id="optika_id" class="kicsi-select" onchange="optika_nyitvatartas(this)">
        <option value="0">{$ford.valassz_optikat}</option>
        {foreach from=$optikak item=optika}
        <option value="{$optika.bolt_id}">{$optika.bolt_cim}</option>
        {/foreach}
        </select>
        <br />
        <font size="-2">
        <span id="optika_nyitva">
        
        </span>
        </font>
    </div>
  
                <div class="clear"></div> 
<!--  <center><font color="#ff0000"><b>Boltunk címe megváltozik! Április 10-től VIII. Budapest, József Krt. 11.</b></font></center> -->
              <div class="clear"></div>
</div>              

     <!-- ------------------------------------------------------------------------------------------------------------------------------------------------ -->
     
     
      
    </table>
    <!-- <center><span style="color:#f00; font-size:16px; font-weight:bold;">Kérem jelenleg ne válasszon internetes fizetést, hibát javítunk, köszönettel a programozó!</span><center> -->
<!--
<center>Nem érte el rendelésének értéke az ingyenes szállítási összeghatárt?
Rendeljen a <a href="http://www.szepulj.hu" target="_blank">Szépülj.hu</a> oldalunkról is és a 2 rendelés értéke összeadódik.<br/>
Remington, L'Oreal, Palmolive és egyéb márkás kozmetikai termékek és parfümök közül válogathat !
Kérjük először a Lencsék.hu oldalunkon adja le rendelését.
</center>
-->
    </div>
    
    

    
    
    <div class="cont-block transport-price" style="border-color:#80756f;">
        <table style="color:#7f766f;" width="100%"><tr><td align="center" bgcolor="#f4f3f1" class="prod-title" height="35">{$ford.ar}</td></tr>
            <tr>
                <td align="center" height="35">
                    <span style="float:left; font-size:13px; padding: 4px 0 0 15px;">{$ford.termek_ara}:</span><span style="font-size:13px; float:right; padding: 4px 16px 0 0; color:#8f6299;"><span id="osz_ar">{$osszesen|arformat}</span></span>
                </td>
            </tr>
            {if $kedvezmeny>0} 
            <tr>
                <td align="center" height="35">
                    <span style="float:left; font-size:13px; padding: 4px 0 0 15px;">{$ford.kedvezmeny}:</span><span style="font-size:13px; float:right; padding-right:15px; color:#8f6299;"><span id="kedvezmeny">- {$kedvezmeny|arformat}</span></span>
                </td>
            </tr>
            {/if}
            <tr>
                <td align="center" height="35">
                    <span style="float:left; font-size:13px; padding: 4px 0 0 15px;">{$ford.szallitasi_koltseg}:</span><span style="font-size:13px; float:right; padding-right:15px; color:#8f6299;"><span id="szall_ar">{$szall_ar|arformat}</span></span>
                </td>
            </tr>
            <tr>
                <td align="center" height="35">
                    <span style="float:left; font-size:16px; padding: 4px 0 0 15px;"><b>{$ford.osszesen}:</b></span><span style="font-size:20px; float:right; padding-right:15px; color:#8f6299;"><b><span id="osszesen">{$osszesen-$kedvezmeny|arformat}</span> </b></span>
                </td>
            </tr>
        </table>
    </div>

<!--    
{if $osszesen > 3000 }
<div class="cont-block" style="border-color:#80776f; float:left; margin-top:15px;">
  Kupon: <input name="kupon" type="text" size="10" maxlength="10" />
</div>
{/if}  
-->

    <div id="product-to-basket" class="cont-block" style="border-color:#80756f; float:right;">
        <div class="purple-arrow-button-left"></div>
        <input name="szallitas" type="submit" class="purple-arrow-button" value="{$ford.tovabb}" style="float:left"/><div class="purple-arrow-button-right"></div>
    </div>


    <!-- Extra Box -->
    <div id="extrabox" class="cont-block transport-price2" style="border-color:#80756f;">
        <table style="color:#7f766f;" width="100%">
            <tr><td align="center" bgcolor="#f4f3f1" class="prod-title" height="35" colspan="3">{$ford.extra_opciok}</td></tr>
            <tr>
                <td align="center" height="35">
                    <span style="float:left; font-size:13px; padding: 4px 0 0 15px;">{$ford.premium_futar}</span> <img onmouseover="Tip('{$ford.tip_premium_futar}')" onmouseout="UnTip()" class="kerdojelicon_szallmod" title="{$ford.tip_premium_futar}" alt="Mi ez pontosan?" src="view/images/kerdojel_icon_sotet.gif" height="20" />
                    </td><td>
                    <input id="premium_futar" type="checkbox" name="premium_futar" value="200" />
                    </td><td>
                    <span style="font-size:13px; float:right; padding: 4px 16px 0 0; color:#8f6299;"><span id="futar_ar">200</span> {$dev}</span>
                </td>
            </tr>
            
            <tr>
                <td align="center" height="35">
                    <span style="float:left; font-size:13px; padding: 4px 0 0 15px;">{$ford.sms_ertesites}</span> <img onmouseover="Tip('{$ford.tip_sms_futar}')" onmouseout="UnTip()" class="kerdojelicon_szallmod" title="{$ford.tip_sms_futar}" alt="Mi ez pontosan?" src="view/images/kerdojel_icon_sotet.gif" height="20" />
                    </td>
                    <td><input id="sms_ertesites" type="checkbox" name="sms_ertesites" disabled="disabled" value="80" /></td>
                    <td><span style="font-size:13px; float:right; padding-right:15px; color:#8f6299;"><span id="sms_ar">80</span> {$dev} </span></td>
            </tr>
            
            <tr>
                <td align="center" height="35">
                    <span style="float:left; font-size:13px; padding: 4px 0 0 15px;">{$ford.tel_ertesites}</span> <img onmouseover="Tip('{$ford.tip_tel_futar}')" onmouseout="UnTip()" class="kerdojelicon_szallmod" title="{$ford.tip_tel_futar}" alt="Mi ez pontosan?" src="view/images/kerdojel_icon_sotet.gif" height="20" />
                    </td>
                    <td><input id="tel_ertesites" type="checkbox" name="tel_ertesites" disabled="disabled" value="80" /></td>
                    <td><span style="font-size:13px; float:right; padding-right:15px; color:#8f6299;"><span id="tel_ar">80</span> {$dev} </span></td>
            </tr>
            
        </table>
    </div>
    
    
    
    
    
    <!--
    <div style="position:absolute;bottom:10px;left:10px;">
    Utalvány kód: <input name="utalvany_kod" type="text" size="10" maxlength="10">
    </div>
    -->
    <input value="w|2|1|990" name="paymentMode" id="paymentMode" type="hidden">
    
  </form>

    <div class="clear"></div>
    <!--
    <div id="extrabox23" class="transport-price3" style="border: dashed 2px #ff0000;margin-top:20px;" align="justify">
    <div style="padding:10px;">
    * Nem érte el rendelésének értéke az ingyenes szállítási összeghatárt?
Rendeljen a <a href="http://www.szepulj.hu" target="_blank"><img src="http://lencsek.hu/kepek/szepulj_mini.jpg" alt="Szépülj.hu" border="0"></a> oldalunkról is és a 2 rendelés értéke összeadódik.<br/>Vagy ha elérte az ingyenességi határt, akkor szállítási költség nélkül rendelhet !
<img src="http://lencsek.hu/kepek/remington_mini.jpg" alt="Remington" border="0">, <img src="http://lencsek.hu/kepek/loreal_mini.jpg" alt="L'Oreal" border="0">, <img src="http://lencsek.hu/kepek/palmolive_mini.jpg" alt="Palmolive" border="0"> és egyéb márkás kozmetikai termékek és parfümök közül válogathat !
Kérjük először a Lencsék.hu oldalunkon adja le rendelését.
    </div>
    </div>
    -->