<center><h2>Korábbi rendelések</h2></center>
<div>

<div style="max-width:600px;margin:0 auto;">
<!--Előző rendeléséhez képest egy vagy több termék nem rendelhető már, kérjük ellenőrizze a kosár tartalmát!<br />-->
Egyes termékek árai változhattak! Kérdés esetén írj <a href="mailto:iroda@kontaktlencsek.hu">nekünk</a> vagy hívjd az ügyfélszolgálatot!
<br /><br />
</div>

{assign var ="sor" value=1}
{foreach from=$megrendelesek item=egy_rendeles}
<div style="max-width:600px;margin:0 auto;">

<table width="100%" id="rendelesek_tabla" align="center">
<tr align="center" bgcolor="#1D2E39" style="color:#ffffff;">
<td></td>
<td>Azonosító</td>
<td>Dátum</td>
<td>Összeg</td>
<!--
<td>Fizetés mód</td>
<td>Szállítás mód</td>
<td>Újrarendelés</td>-->
</tr>

<tr bgcolor="#dcdcdc"{if $sor % 2 == 0}{/if}>
    <td align="center"><b>{$sor}.</b></td>
    <td align="center">{$egy_rendeles.rend_id}</td> <!-- <a href="{$sitenev}{$alnev.rendelesek}&rend_id={$egy_rendeles.rend_id}" class="normal_link"> -->
    <td>{$egy_rendeles.rend_datum}</td>
    <td align="right">{$egy_rendeles.rend_osszesen|arformat}</td>
    <!--
    <td align="center">{$egy_rendeles.fiz_modnev}</td>
    <td align="center">{$egy_rendeles.szall_modnev}</td>
    <td>&nbsp;</td>-->
</tr>

<tr><td colspan="4">
<div id="rend_adatok">
    <table width="100%" class="rendelesek_tabla_css">
    {assign var ="osszesen" value=0}
    <!--        <tr>
                <td>Terméknév</td>
                <td>Szem</td>
                <td></td>
                <td align="center">Ár</td>
                <td>Mennyiség</td>
                <td>Összesen</td>
            </tr>
    -->
    {foreach from=$tetelek item=egy_tetel}
            
        {if $egy_rendeles.rend_id == $egy_tetel.rend_id}
            
            {assign var ="egy_sor_osszeg" value=$egy_tetel.termek_ar*$egy_tetel.termek_db} 
            {assign var ="osszesen" value=$osszesen+$egy_sor_osszeg}
            
            <tr>
              <td colspan="6" align="center"><strong><a href="{$sitenev}{$egy_tetel.termek_alnev_hu}">{$egy_tetel.termek_nev_hu}</a></strong></td>
            </tr>
            
            <tr>
                <td align="center" width="80">
                <a href="{$sitenev}{$egy_tetel.termek_alnev_hu}"><img src="kepek/lencsek/{$egy_tetel.termek_kep}" width="100"></a></td>
            
                <td colspan="4" valign="middle">
                {if $ford.szemek[$egy_tetel.termek_szem]}{$ford.szemek[$egy_tetel.termek_szem]}<br />{/if}
                <div>{jellemzoki jell="2" jell_id=$egy_tetel.jell2}</div>
                <div>{jellemzoki jell="1" jell_id=$egy_tetel.jell1}</div>
                {if $egy_tetel.jell3 !=0}
                    <div>{jellemzoki jell="3" jell_id=$egy_tetel.jell3}</div>
                {/if}
                <div>{jellemzoki jell="4" jell_id=$egy_tetel.jell4}</div>
                <div>{jellemzoki jell="5" jell_id=$egy_tetel.jell5}</div>
                <div>{jellemzoki jell="6" jell_id=$egy_tetel.jell6}</div>
                </td>
                
            
                <td align="right">
                {$egy_tetel.termek_ar|arformat}<br />
                <center>{$egy_tetel.termek_db} db</center>
                {$egy_sor_osszeg|arformat}
                </td>
                
            </tr>
            
            
                
            
            
        {/if}
    {/foreach}
    
    <tr><td colspan="5" align="right">Összesen:</td><td align="right">{$osszesen|arformat}</td></tr>
    </table>
</div>


</td></tr>
</table>
<div align="right" style="margin-top:4px;margin-bottom:10px;"><a href="{$sitenev}{$alnev.rendelesek}&ujra_berak={$egy_rendeles.rend_id}" class="Button1">Kosárba rakom</a></div>
{assign var ="sor" value=$sor+1}
</div>
<br />
{/foreach}

</div>

<!--
Kék buborékba:

Fenti rendelése újból kosárba kerül, lehetséges, hogy egyes termékek ára változott.
Amennyiben további termékeket kíván hozzá adni, megteheti.
Rendelés véglegesítéséhez szállítást és fizetést kell választani, valamint megerősíteni a rendelést.
-->