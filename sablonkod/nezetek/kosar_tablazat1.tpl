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
      {foreach from=$tartalom item=egy }
      
      <tr style="background-color:#FFF;">
        <td align="left" valign="bottom" style="background-color:#FFF;" height="45" width="240"><h2 style="margin:0"><a href="{$sitenev}{$egy.termek_alnev}" class="body-link">{$egy.termek_nev}</a></h2></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
       
        <td align="right" valign="bottom"><a href="{$sitenev}{$alnev.kosar}&tetel_id={$egy.tetel_id}&do=torles" class="body-link"><img src="css/icons/torles.png" border="0"> {$ford.torles}</a></td>
      </tr>
      <tr class="table-cart-header">
        <td align="center" valign="middle" style="background-color:#FFF; height=45; rowspan=2; align=center;">
        	<img src="kepek/termek_kepek/thumb_{$egy.termek_id}.jpg" class="smallpic" border="0" />
        </td>
        <td align="center" valign="middle">{$ford.szem}</td>
        <td align="center" valign="middle">{$ford.adatok}</td>
        
        <td align="center" valign="middle">{$ford.mennyiseg}</td>
        <td align="center" valign="middle">{$ford.ar}</td>
        
      </tr>
      
      <tr  class="trboderbottom">
      	<!--
        <td align="left" valign="middle" style="background-color:#FFF;">
          	{$ford.szallitas}: {$egy.termek_szallitas}<br />
          </td>
         -->
        {if $egy.termek_csoport == 1}
        <td align="center" valign="middle">{$ford.szemek[$egy.termek_szem]} </td>
        {else}
        <td>&nbsp;</td>
        {/if}
        <td align="left" valign="middle" class="tdadatok">
          <div><span>{jellemzoki jell="2" jell_id=$egy.jell2}</span></div>
          <div><span>{jellemzoki jell="1" jell_id=$egy.jell1}</span></div>
          <div><span>{jellemzoki jell="3" jell_id=$egy.jell3}</span></div>
          <div><span>{jellemzoki jell="4" jell_id=$egy.jell4}</span></div>
          <div><span>{jellemzoki jell="5" jell_id=$egy.jell5}</span></div>
          <div><span>{jellemzoki jell="6" jell_id=$egy.jell6}</span></div></td>
        
        <td align="center" valign="middle">
        <b>{$ford.mennyiseg}:</b> <br /> <br />
        <select name="mennyisegek[{$egy.tetel_id}]" class="dropdown-specs" id="mennyiseg_{$egy.tetel_id}" onchange="document.urlap2.submit()">                  
            {mennyiseg2 db=20 akt=$egy.termek_db}
          </select>
           {$ford.db}
          </td>
        
        <td align="center" valign="middle" class="td15px">{$egy.termek_ar|arformat}
          <input type="hidden" name="egy_ar_{$egy.tetel_id}" value="{$egy.termek_ar}"></td>
      </tr>
      
      <tr class="trborderbottomx">
        <td colspan="9">&nbsp;
            
        </td>
      </tr>
      {/foreach}
      
    </table>
    <div align="center"></div>
    
  </div>
</form>
<br />

<div class="cont-block" style="border-color:#cfcfcf; float:left; width:auto; ">
        <div class="purple-arrow-button-left-back"></div>
        <input name="button" type="button" class="purple-arrow-button backbutton" value="{$ford.vasarlas_folytatas}" onClick="location.href='{$sitenev}{$alnev.osszes_termek}'"   style="float:left">
        <div class="purple-arrow-button-right-back"></div>
    </div>
    
    

<div class="cont-block" style="border-color:#80776f; float:left; width:auto;  margin-left:25px;">
        <div class="purple-arrow-button-left"></div>
        <input name="button" type="button" class="purple-arrow-button" value="{$ford.vasarlas_befejezes}" onClick="location.href='{$sitenev}{$alnev.szallitas}'"   style="float:left">
        <div class="purple-arrow-button-right"></div>
    </div>



<div class="cont-block pricebox" style="border-color:#80756f; float:right; width:265px;"><table style="color:#7f766f;" width="100%"><tr><td align="center" bgcolor="#f4f3f1" class="prod-title" height="35">{$ford.ar}</td></tr>
                               <tr><td align="center" height="35"><span style="float:left; font-size:16px; padding: 4px 0 0 15px;">{$ford.osszesen}:</span><span style="font-size:20px; float:right; padding-right:15px; color:#8f6299;"><b>{$osszesen|arformat}</b></span></td></tr>
                            </table></div>