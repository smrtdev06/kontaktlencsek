{literal} 

<SCRIPT language=Javascript>
      <!--
      function urlap_ellenorzes(f) {
        ok = 1;
        uzenet='';

        if( !f.elements["feltetelek"].checked ) {
            ok = 0;
            uzenet = '{/literal}{$ford.feltetel_elfogadas}{literal}';
        }  
        if( f.elements["felh_telefon"].value.length ==0 && f.elements["felh_mobil2"].value.length !=7 ) {
            ok = 0;
            uzenet += '\n{/literal}{$ford.feltetel_mobilszam_hossza}{literal}';
        }
        
        if( f.elements["felh_telefon"].value.length ==0 && f.elements["felh_mobil1"].value == 0 ) {
            ok = 0;
            uzenet += '\n{/literal}{$ford.szolgaltatot_valasztani}{literal}';
        }
        
        if( ok == 0 ) {
            alert(uzenet);
       } else {
            f.submit();
       }
     }

      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
</SCRIPT>

{/literal}





<div class="cont-block transport" style="border-color:#80776f; width:765px;">
  <h1 class="h1_arrow_grey">{$ford.regisztracio}</h1>
  
  <form id="urlap" name="urlap" method="post" action="{$sitenev}{$alnev.regisztracio}" onsubmit="return urlap_ellenorzes(this);">
    <input type="hidden" name="kuldve2" value="1">
    <input type="hidden" name="q" value="regisztracio">
    <input type="hidden" name="felh_email" value="{$fadat.felh_email}">
    <input type="hidden" name="felh_jelszo" value="{$fadat.felh_jelszo}">
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="left" valign="top" width="60%">
            <table width="100%" border="0" align="center" cellpadding="3" cellspacing="0" class="reg-table">
            <tr class="table-header">
              <td width="120" bgcolor="#f5f4f2" colspan="2" align="center" valign="middle"> {if $bolt_id > 0}
                {$ford.szemelyes_adatok}
                {else}
                {$ford.szallitasi_cim}
                {/if} :</td>
            </tr>
            <tr>
              
                    <td height="60" colspan="2"> {if $vanhiba } {$ford.kerjuk_toltseki|hibakiiras}<br />
                      <br />
                      {/if}
                      {$ford.szallitasi_szoveg}<br>
                      &nbsp;</td>
                  </tr>
                  <tr>
                    <td width="150" height="40" style="border-right-color:#f7f7f7;">{if $reghiba2.email } <span class="error">{$ford.email}:</span> {else}
                      {$ford.email}:
                    {/if}</td>
                    <td height="40">{if $reghiba2.email }<input type="text" name="felh_email" size="30" maxlength="50" value="{$fadat.felh_email}"> *{else} {$fadat.felh_email}{/if}</td>
                  </tr>
                  <tr>
                    <td height="40" style="border-right-color:#f7f7f7;"> {if $reghiba2.csaladnev } <span class="error">{$ford.csaladnev}:</span> {else}
                      {$ford.csaladnev}:
                      {/if} </td>
                    <td height="40"><input name="felh_csaladnev" type="text" class="textfield-specs" id="felh_csaladnev" value="{$fadat.felh_csaladnev}" size="30" maxlength="30" />
                      *</td>
                  </tr>
                  <tr>
                    <td height="40" style="border-right-color:#f7f7f7;"> {if $reghiba2.keresztnev } <span class="error">{$ford.keresztnev}:</span> {else}
                      {$ford.keresztnev}:
                      {/if} </td>
                    <td height="40"><input name="felh_keresztnev" type="text" class="textfield-specs" id="felh_keresztnev" value="{$fadat.felh_keresztnev}" size="30" maxlength="30" />
                      *</td>
                  </tr>


                  <tr>
                      <td height="40" style="border-right-color:#f7f7f7;">
                      {if $reghiba2.mobil2 }
                        <span class="error">{$ford.mobil}:</span>
                      {else}
                        {$ford.mobil}:
                      {/if}
                      
                      </td>
                      <td height="40" style="border-right-color:#f7f7f7;">06 
                      <select name="felh_mobil1" size="1" class="dropdown-specs">
                        <option value="0">...</option>
                        <option value="20"{if $fadat.felh_mobil1==20} selected="selected"{/if}>20</option>
                        <option value="30"{if $fadat.felh_mobil1==30} selected="selected"{/if}>30</option>
                        <option value="31"{if $fadat.felh_mobil1==31} selected="selected"{/if}>31</option>
                        <option value="70"{if $fadat.felh_mobil1==70} selected="selected"{/if}>70</option>
                      </select>
                      
                      <input name="felh_mobil2" type="text" onkeypress="return isNumberKey(event)" class="textfield-specs" id="felh_mobil2" value="{$fadat.felh_mobil2}" size="7" maxlength="7" /> <br />* {$ford.egyik_kotelezo_mobil}</td>
                    </tr>


                  <tr>
                    <td height="40" style="border-right-color:#f7f7f7;"> {if $reghiba2.telefon } <span class="error">{$ford.telefon}:</span> {else}
                      {$ford.telefon}:
                      {/if} </td>
                    <td height="40"><input name="felh_telefon" type="text" class="textfield-specs" id="felh_telefon" value="{$fadat.felh_telefon}" onkeypress="return isNumberKey(event)" size="30" maxlength="20" /> <br />* {$ford.egyik_kotelezo}</td>
                  </tr>
                  
                  
                  
                  {if 1==0 }
                  <tr>
                    <td height="40" style="border-right-color:#f7f7f7;"> {if $reghiba2.megye } <span class="error">{$ford.megye}:</span> {else}
                      {$ford.megye}:
                      {/if} </td>
                    <td height="40"><input name="felh_megye" type="text" class="textfield-specs" id="felh_megye" value="{$fadat.felh_megye}" size="30" />
                      *</td>
                  </tr>
                  {/if}
                  <tr>
                    <td height="40" style="border-right-color:#f7f7f7;"> {if $reghiba2.varos } <span class="error">{$ford.varos}:</span> {else}
                      {$ford.varos}:
                      {/if} </td>
                    <td height="40"><input name="felh_varos" type="text" class="textfield-specs" id="felh_varos" value="{$fadat.felh_varos}" size="30" />
                      *</td>
                  </tr>
                  <tr>
                    <td height="40" style="border-right-color:#f7f7f7;"> {if $reghiba2.utca } <span class="error">{$ford.utca}:</span> {else}
                      {$ford.utca}:
                      {/if} </td>
                    <td height="40"><input name="felh_utca" type="text" class="textfield-specs" id="felh_utca" value="{$fadat.felh_utca}" size="30" />
                      *</td>
                  </tr>
                  <tr>
                    <td height="40" style="border-right-color:#f7f7f7;"> {if $reghiba2.irsz } <span class="error">{$ford.iranyitoszam}:</span> {else}
                      {$ford.iranyitoszam}:
                      {/if} </td>
                    <td height="40"><input name="felh_irsz" type="text" class="textfield-specs" id="felh_irsz" value="{$fadat.felh_irsz}" size="30" maxlength="4" />
                      *</td>
                  </tr>
                  <tr>
                    <td height="40" style="border-right-color:#f7f7f7;">{$ford.egpenztar}: </td>
                    <td height="40"><select name="felh_egpenztar" size="1" onchange="egp_feltoltes(this)" class="prod-sel" style="width:230px;">
                        <!-- <option value="">VĂˇlassza ki egĂ©szsĂ©gpĂ©nztĂˇrĂˇt !</option> -->
                                    {foreach from=$egpenztarak item=egy_penztar}
                        <option value="{$egy_penztar.penztar_id}" {if $fadat.felh_egpenztar==$egy_penztar.penztar_id}SELECTED{/if}>{$egy_penztar.penztar_nev}</option>
                                    {/foreach}
                                  
                                  
                      
                      </select>&nbsp;<a onmouseover="Tip('Lehetősége van egészégpénztára nevére kérni a számlát ! Kérjük, hogy annak első példányát jutassa el számukra ! A megrendelése értékét a bankszámlájára átutalják egészségpénztári egyenlege terhére. Kérjük válassza ki a listából egészségpénztárát ! Amennyiben nem szerepel a listában, kérjük hogy, manuálisan adja meg a számlázási adatokat és ezt jelezze nekünk a megjegyzés rovatban !')" onmouseout="UnTip()" href="javascript:void(0);"><img src="css/icons/kerdojel.png" border="0"></a>
                      
                      <span id="penztar_szoveg"> </span>
                       </td>
                  <tr>
                  <tr><td colspan="2"> 
                      <div id="egp_box" {if $fadat.felh_egpenztar==0} style="display:none;"{/if} >
                      <!--<font color="#ff0000"></font><br /><br />-->
                        <table class="textfield-specs" width="100%">
                          <tr>
                            <td height="40" style="border-right-color:#f7f7f7;" >Tag neve: </td>
                            <td height="40"><input name="felh_tagnev" type="text" class="textfield-specs" id="felh_tagnev" value="{$fadat.felh_tagnev}" size="30" /></td>
                          </tr>
                          <tr>
                            <td height="40" style="border-right-color:#f7f7f7;" >Tagi azonosító: </td>
                            <td height="40"><input name="felh_egazon" type="text" class="textfield-specs" id="felh_egazon" value="{$fadat.felh_egazon}" size="30" /></td>
                          </tr>
                          <tr>
                            <td height="40" style="border-right-color:#f7f7f7;" >Kedvezményezett neve: </td>
                            <td height="40"><input name="felh_kedvezmenyezett" type="text" class="textfield-specs" id="felh_kedvezmenyezett" value="{$fadat.felh_kedvezmenyezett}" size="30" /></td>
                          </tr>
                        </table>
                        
                      </div></td>
                  
            </tr>
          </table></td>
          
          
          
          
          
          
          
        <td valign="top" width="50%"><table width="100%" border="0" align="center" cellpadding="3" cellspacing="0" class="reg-table">
            <tr class="table-header">
              <td bgcolor="#f5f4f2" colspan="2" align="center" valign="middle">{$ford.szamlazasi_adatok}:</td>
            </tr>
            <tr>
                    <td height="60" colspan="2">{$ford.szamlazasi_szoveg}<br>
                      &nbsp;</td>
                  </tr>
                  <tr>
                    <td height="40" width="150" style="border-right-color:#f7f7f7;">{$ford.szamlanev}:</td>
                    <td height="40"><input name="felh_szamlanev" type="text" class="textfield-specs" id="felh_szamlanev" value="{$fadat.felh_szamlanev}" size="30" /></td>
                  </tr>
                  {if 1==0 }
                  <tr>
                    <td height="40" style="border-right-color:#f7f7f7;">{$ford.megye}:</td>
                    <td height="40"><input name="felh_szmegye" type="text" class="textfield-specs" id="felh_szmegye" value="{$fadat.felh_szmegye}" size="30" /></td>
                  </tr>
                  {/if}
                  <tr>
                    <td height="40" style="border-right-color:#f7f7f7;">{$ford.varos}:</td>
                    <td height="40"><input name="felh_szvaros" type="text" class="textfield-specs" id="felh_szvaros" value="{$fadat.felh_szvaros}" size="30" /></td>
                  </tr>
                  <tr>
                    <td height="40" style="border-right-color:#f7f7f7;">{$ford.utca}:</td>
                    <td height="40"><input name="felh_szutca" type="text" class="textfield-specs" id="felh_szutca" value="{$fadat.felh_szutca}" size="30" /></td>
                  </tr>
                  <tr>
                    <td height="40" style="border-right-color:#f7f7f7;">{$ford.iranyitoszam}: </td>
                    <td height="40"><input name="felh_szirsz" type="text" class="textfield-specs" id="felh_szirsz" value="{$fadat.felh_szirsz}" size="30" maxlength="4" /></td>
                  </tr>
                  <tr>
                    <td colspan="2">&nbsp;</td>
                  </tr>
                  <tr>
                    <td valign="top" style="border-right-color:#f7f7f7;" height="80">{$ford.megjegyzes}:</td>
                    <td><textarea name="felh_megjegyzes" cols="18" rows="3" class="textfield-specs" id="felh_megjegyzes">{$fadat.felh_megjegyzes}</textarea></td>
                  </tr>
                  
                </table></td>
            </tr>
                <tr>
                    <td height="40" colspan="2">&nbsp;
                      <input type="checkbox" name="feltetelek" value="1">
                      {if $reghiba2.feltetel } <span class="error">{$ford.feltetelek_elfogadasa} *</span> {else} <a style="text-decoration:none; ">{$ford.feltetelek_elfogadasa} </a> *
                      {/if} </td>
                  </tr>
                  <tr>
                    <td height="40" colspan="2">&nbsp;
                      <input type="checkbox" name="hirlevel" value="1" checked="checked">
                      {$ford.kerek_hirlevelet} </td>
                  </tr>
                  
                  <tr>
                    <td height="40" colspan="2">&nbsp;
                      <input type="checkbox" name="szepulj_hirlevel" value="1">
                      {$ford.kerek_szepulj_hirlevelet} </td>
                  </tr>
                  <tr>
                    <td height="40" colspan="2">&nbsp;
                      <input type="checkbox" name="szemuvegek_hirlevel" value="1">
                      {$ford.kerek_szemuvegek_hirlevelet} </td>
                  </tr>
                  <tr>
                    <td height="30" colspan="2">&nbsp;&nbsp;* {$ford.mezok_kotelezok} </td>
                  </tr>
            
    </table>
  </form>
</div>

<div class="cont-block" style="border-color:#80776f; float:right; width:auto; margin-top:10px;">
        <div class="purple-arrow-button-left"></div>
        <input name="button" type="button" class="purple-arrow-button" value="{$ford.adatok_mentese}" onClick="javascript:urlap_ellenorzes(document.urlap)"   style="float:left">
        <div class="purple-arrow-button-right"></div>
    </div>

{literal} 
<script language="javascript">

function egp_feltoltes(v) {
    var penztarak = {/literal}{$penztarak}{literal};

    if( v.value > 1 ) {
        document.getElementById("egp_box").style.display="block";
        
        document.getElementById("felh_tagnev").value = document.getElementById("felh_csaladnev").value+" "+document.getElementById("felh_keresztnev").value;
        
        document.getElementById("felh_szamlanev").value = penztarak[v.value].penztar_nev;
        document.getElementById("felh_szvaros").value = penztarak[v.value].penztar_varos;
        document.getElementById("felh_szirsz").value = penztarak[v.value].penztar_irsz;
        document.getElementById("felh_szutca").value = penztarak[v.value].penztar_utca;
       
        // letiltjuk a számla nevének megváltoztatását
        if( penztarak[v.value].penztar_szamla == 1 ) {
            document.getElementById("felh_szamlanev").readOnly = true;
            document.getElementById("felh_szvaros").readOnly = true;
            document.getElementById("felh_szirsz").readOnly= true;
            document.getElementById("felh_szutca").readOnly = true;
            
            document.getElementById('penztar_szoveg').innerHTML = '<br /><br />Ez a pénztár csak saját névre szóló számlát fogad el!';
        } else {
            document.getElementById("felh_szamlanev").readOnly = false;
            document.getElementById("felh_szvaros").readOnly = false;
            document.getElementById("felh_szirsz").readOnly = false;
            document.getElementById("felh_szutca").readOnly = false;
            
            document.getElementById('penztar_szoveg').innerHTML = '<br /><br />Egészségpénztári számla esetén kérjük számlázási adatoknál a pénztárhoz leadott adatokat használja!';
        }
        
    } else {
        
        document.getElementById("egp_box").style.display="none";
        document.getElementById("felh_tagnev").value = "";
        document.getElementById("felh_egazon").value = "";
        
        document.getElementById("felh_szamlanev").value = "";
        document.getElementById("felh_szvaros").value = "";
        document.getElementById("felh_szirsz").value = "";
        document.getElementById("felh_szutca").value = "";
        
        document.getElementById("felh_szamlanev").readOnly = false;
        document.getElementById("felh_szvaros").readOnly = false;
        document.getElementById("felh_szirsz").readOnly = false;
        document.getElementById("felh_szutca").readOnly = false;
            
        document.getElementById('penztar_szoveg').innerHTML = '';
        
    }
    
}


</script> 
{/literal}