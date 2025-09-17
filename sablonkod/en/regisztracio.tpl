{literal} 
<script language="javascript">

function urlap_ellenorzes(f) {
    ok = 1;

    if( !f.elements["feltetelek"].checked )
    {
        ok = 0;
        uzenet = '{/literal}{$ford.feltetel_elfogadas}{literal}';
    }  
    
    
    if( ok == 0 ) {
        alert(uzenet);
   } else {
        f.submit();
   }
}

</script> 
<script type="text/javascript" src="includes/overlib/overlib.js"><!-- overLIB (c) Erik Bosrup --></script>
<div id="overDiv" style="position:absolute; visibility:hidden; z-index:1000;"></div>
{/literal}
<div class="cont-block transport" style="border-color:#80776f; width:765px;">
  <h1 class="h1_arrow_grey">{$ford.regisztracio}</h1>
  <form id="urlap" name="urlap" method="post" action="{$sitenev}{$alnev.regisztracio}" onsubmit="return urlap_ellenorzes(this);">
    <input type="hidden" name="kuldve2" value="1">
    <input type="hidden" name="q" value="{$alnev.regisztracio}">
    <input type="hidden" name="felh_email" value="{$fadat.felh_email}">
    <input type="hidden" name="felh_jelszo" value="{$fadat.felh_jelszo}">
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="left" valign="top" width="50%"><table width="100%" border="0" align="center" cellpadding="3" cellspacing="0" class="reg-table">
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
                    <td width="150" height="40" style="border-right-color:#f7f7f7;">{$ford.email}:</td>
                    <td height="40"> {$fadat.felh_email}</td>
                  </tr>
                  <tr>
                    <td height="40" style="border-right-color:#f7f7f7;"> {if $reghiba2.csaladnev } <span class="error">{$ford.csaladnev}:</span> {else}
                      {$ford.csaladnev}:
                      {/if} </td>
                    <td height="40"><input name="felh_csaladnev" type="text" class="textfield-specs" id="felh_csaladnev" value="{$fadat.felh_csaladnev}" size="30" />
                      *</td>
                  </tr>
                  <tr>
                    <td height="40" style="border-right-color:#f7f7f7;"> {if $reghiba2.keresztnev } <span class="error">{$ford.keresztnev}:</span> {else}
                      {$ford.keresztnev}:
                      {/if} </td>
                    <td height="40"><input name="felh_keresztnev" type="text" class="textfield-specs" id="felh_keresztnev" value="{$fadat.felh_keresztnev}" size="30" />
                      *</td>
                  </tr>
                  <tr>
                    <td height="40" style="border-right-color:#f7f7f7;"> {if $reghiba2.telefon } <span class="error">{$ford.telefon}:</span> {else}
                      {$ford.telefon}:
                      {/if} </td>
                    <td height="40"><input name="felh_telefon" type="text" class="textfield-specs" id="felh_telefon" value="{$fadat.felh_telefon}" size="30" /> *</td>
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
                    <td height="40"><input name="felh_irsz" type="text" class="textfield-specs" id="felh_irsz" value="{$fadat.felh_irsz}" size="30" />
                      *</td>
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
                    <td height="40"><input name="felh_szirsz" type="text" class="textfield-specs" id="felh_szirsz" value="{$fadat.felh_szirsz}" size="30" /></td>
                  </tr>
                  {if $nyelv == 'hu'}
                <tr>
                  <td height="40" style="border-right-color:#f7f7f7;">{$ford.egpenztar}: </td>
                  <td><input name="felh_egpenztar" type="text" class="textfield-specs" id="felh_egpenztar" value="{$fadat.felh_egpenztar}" size="30" /></td>
                </tr>
                <tr>
                <td height="40" style="border-right-color:#f7f7f7;">{$ford.egazon}: </td>
                <td ><input name="felh_egazon" type="text" class="textfield-specs" id="felh_egazon" value="{$fadat.felh_egazon}" size="30" /></td>
                </tr>
                {/if}
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

