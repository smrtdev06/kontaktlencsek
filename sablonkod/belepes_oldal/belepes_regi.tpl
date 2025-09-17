{literal} 
<script language="javascript">

function urlap1_ellenorzes(f) {
    ok = 1;

    if( f.elements["felh_email"].value == "" ||
        f.elements["felh_jelszo"].value == "" ||
        f.elements["felh_jelszo2"].value == "" )
    {
        ok = 0;
        uzenet = '{/literal}{$ford.hianyzo_adatok}{literal}';
    }   
    
    if( f.elements["felh_jelszo"].value != f.elements["felh_jelszo2"].value )
    {
        ok = 0;
        uzenet = '{/literal}{$ford.jelszavak_nem_egyeznek}{literal}';
    }  
        
    if( ok == 0 ) {
        alert(uzenet);
        return false;
   } else {
        return true;
   }
}

function urlap2_ellenorzes(f) {
    ok = 1;

    if( f.elements["felh_email"].value == "" ||
        f.elements["felh_jelszo"].value == "" )
    {
        ok = 0;
        uzenet = '{/literal}{$ford.hianyzo_adatok}{literal}';
    }   
    
    if( ok == 0 ) {
        alert(uzenet);
        return false;
   } else {
        return true;
   }
}

</script> 
{/literal}
















<div class="cont-block transport" style="border-color:#80776f; width:765px;">
  <h1 class="h1_arrow_grey">{$ford.regisztracio_vagy_bejelentkezes}</h1>
  {$hibauzenet}
 
  <table width="100%">
    {if empty($reg_hiba) }
    
    {else}
    <tr bgcolor="#fff5f5">
      <td style="font-size:18px; color:#F00" colspan="2" align="center" valign="middle"> {$reg_hiba} </td>
    </tr>
    {/if} 
    
    {if empty($belep_hiba) }
    
    {else}
    <tr bgcolor="#fff5f5">
      <td style="font-size:18px; color:#F00" colspan="2" align="center" valign="middle"> {$belep_hiba} </td>
    </tr>
    {/if}
    <tr>
      <td width="50%" valign="top"> 
      <form id="regisztracio" name="regisztracio" method="post" action="{$sitenev}{$alnev.regisztracio}" />
      <input type="hidden" name="kuldve1" value="1">
  
  <table width="100%" class="reg-table">
          <tr class="table-header">
            <td colspan="2" bgcolor="#f5f4f2" height="40" align="center" valign="middle">{$ford.uj_vasarlo}</td>
          </tr>
          <tr>
            <td height="40" colspan="2" > {$ford.reg_egyperc} </td>
          </tr>
          <tr>
            <td height="40" width="120" style="border-right-color:#f7f7f7;"><strong>{$ford.email}: </strong></td>
            <td ><input name="felh_email" type="text" class="textfield-specs" id="felh_email" size="30" value="" />
              *</td>
          </tr>
          <tr>
            <td height="40" style="border-right-color:#f7f7f7;"><strong>{$ford.jelszo}:</strong></td>
            <td><input name="felh_jelszo" type="password" class="textfield-specs" id="felh_jelszo" size="30" />
              *</td>
          </tr>
          <tr>
            <td height="40" style="border-right-color:#f7f7f7;"><strong>{$ford.jelszo_ismetlese}: </strong></td>
            <td><input name="felh_jelszo2" type="password" class="textfield-specs" id="felh_jelszo2" size="30" />
              *</td>
          </tr>
          <tr>
            <td height="40" style="border-right-color:#f7f7f7;">&nbsp;</td>
            <td align="right"><div style="float:right">
                <div class="purple-arrow-button-left2"></div>
                <input name="submit" type="submit" class="purple-arrow-button2" value="{$ford.tovabb}"  style="float:left"/>
                <div class="purple-arrow-button-right2"></div>
              </div></td>
          </tr>
          <tr>
            <td height="40" style="border-right-color:#f7f7f7;">&nbsp;</td>
            <td><span>*
              {$ford.mezok_kotelezok} </span></td>
          </tr>
        </table>
        </form>
      </td>
      <td width="50%" valign="top">
      <form id="belepes" name="belepes" method="post" action="{$sitenev}{$alnev.belepes}" />
      <input type="hidden" name="kuldve" value="1">
        <table  width="100%" class="reg-table" style="margin-top:0;">
          <tr class="table-header">
            <td colspan="2" bgcolor="#f5f4f2" height="40" align="center" valign="middle">{$ford.visszatero_vasarlo}</td>
          </tr>
          <tr>
            <td height="40" colspan="2" > {$ford.jelentkezzen_be}: </td>
          </tr>
          <tr>
            <td height="40" style="border-right-color:#f7f7f7;" width="150"><strong>{$ford.email}: </strong></td>
            <td><input name="felh_email" type="text" class="textfield-specs" id="felh_email" size="30" value=""/></td>
          </tr>
          <tr>
            <td height="40" style="border-right-color:#f7f7f7;"><strong>{$ford.jelszo}:</strong></td>
            <td><input name="felh_jelszo" type="password" class="textfield-specs" id="felh_jelszo" size="30" /></td>
          </tr>
          <tr>
            <td height="40" style="border-right-color:#f7f7f7;">&raquo; <a href="{$sitenev}{$alnev.jelszo_valtoztatas}" class="body-link">{$ford.elfelejtett_jelszo}</a></td>
            <td align="right"><div  style="float:right">
                <div class="purple-arrow-button-left2"></div>
                <input name="submit" type="submit" class="purple-arrow-button2" value="{$ford.belepes}"  style="float:left"/>
                <div class="purple-arrow-button-right2"></div>
              </div></td>
          </tr>
        </table></form></td>
    </tr>
  </table>
  
</div>
