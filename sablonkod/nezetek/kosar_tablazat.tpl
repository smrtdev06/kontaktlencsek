{literal} 
<script language="javascript">

function uj_ar(mi, mivel) {
    document.getElementById(mi).innerHTML=mivel.toFixed(2);
}
</script> 
{/literal}

<form name="urlap2" method="post" action="{$sitenev}{$alnev.kosar}">
  <input type="hidden" name="mennyiseg_mod" value="1">
  <div class="cont-block cart" style="border-color:#80776f; width:765px;">
    <h1 class="h1_arrow_grey">{$ford.kovetkezo_termekek_kosarban}</h1>
    
    <table width="100%" border="0" cellpadding="3" cellspacing="2" class="table-cart">
    
      {foreach from=$tartalom item=egy}  
      
      <tr style="background-color:#FFF;">
        <td align="left" valign="bottom" style="background-color:#FFF;" height="30" width="240"><h2 style="margin:0"><a href="{$sitenev}{$egy.termek_alnev}" class="body-link">{$egy.termek_nev}</a></h2></td>
       
        <td colspan="5" align="right" valign="bottom"><a href="{$sitenev}{$alnev.kosar}&tetel_id={$egy.tetel_id}&do=torles" class="body-link"><img src="css/icons/torles.png" border="0"> {$ford.torles}</a></td>
      </tr>
      
      <tr class="table-cart-header">
      <td rowspan="2" align="center" valign="middle" style="background-color:#FFF; border-bottom: 1px dashed #bdbdbd;">
           <img src="{if $egy.termek_csoport>2}{$kepsrc2}{else}{$kepsrc}{/if}thumb_{$egy.termek_kep}" border="0" />
          </td>
        
        <td align="center" valign="middle">{if $egy.termek_csoport==1}{$ford.szem}{/if}</td>
        <td align="center" valign="middle"></td>
        <td align="center" valign="middle">{$ford.ar}</td>
        <td align="center" valign="middle">{$ford.mennyiseg}</td>
        <td align="center" valign="middle">{$ford.osszesen}</td>
      </tr>
      
      <tr style="border-bottom: 1px dashed #bdbdbd;">
        
        {if $egy.termek_csoport == 1}
        <td align="center" valign="middle" style="border-bottom: 1px dashed #bdbdbd;">{$ford.szemek[$egy.termek_szem]} </td>
        {else}
        <td style="border-bottom: 1px dashed #bdbdbd;">&nbsp;</td>
        {/if}
        <td style="border-bottom: 1px dashed #bdbdbd;" align="left" valign="middle">
          <div><span>{jellemzoki jell="2" jell_id=$egy.jell2}</span></div>
          <div><span>{jellemzoki jell="1" jell_id=$egy.jell1}</span></div>
          <div><span>{jellemzoki jell="3" jell_id=$egy.jell3}</span></div>
          <div><span>{jellemzoki jell="4" jell_id=$egy.jell4}</span></div>
          <div><span>{jellemzoki jell="5" jell_id=$egy.jell5}</span></div>
          <div><span>{jellemzoki jell="6" jell_id=$egy.jell6}</span></div>
          <div><span>{jellemzoki jell="7" jell_id=$egy.jell7}</span></div></td>
        <td style="border-bottom: 1px dashed #bdbdbd;" align="center" valign="middle">{$egy.termek_ar|arformat}
        {if $smarty.session.tkupon && $egy.termek_kedvezmeny > 0}<br /><font color="#47B7CB">({$smarty.session.tkupon})</font>{/if}
          <input type="hidden" name="egy_ar_{$egy.tetel_id}" value="{$egy.termek_ar}"></td>
        <td style="border-bottom: 1px dashed #bdbdbd;" align="center" valign="middle"><select name="mennyisegek[{$egy.tetel_id}]" class="dropdown-specs" id="mennyiseg_{$egy.tetel_id}" onchange="document.urlap2.submit()">
     
  {mennyiseg2 db=20 akt=$egy.termek_db}
          </select></td>
        <td style="border-bottom: 1px dashed #bdbdbd;" align="right" valign="middle"><span id="egysor_osszes_{$egy.tetel_id}">{$egy.termek_ar*$egy.termek_db|arformat}</span></td>
        
      </tr>
      
      {/foreach}
      
    </table>
    

    <div align="center"></div>
    
    <!--
    <table width="671" border="0" align="center" cellpadding="3" cellspacing="0">
      <tr>
        <td width="530" height="40" align="left" valign="middle" class="back"><a href="{$sitenev}{$alnev.osszes_termek}" class="body-link">{$ford.vasarlas_folytatas}</a></td>
        <td width="200" height="40" align="right" valign="middle" class="fw"><a href="{$sitenev}{$alnev.szallitas}" class="body-link" >{$ford.vasarlas_befejezes}</a></td>
      </tr>
    </table>
    -->
    </div>
    
  
</form>
