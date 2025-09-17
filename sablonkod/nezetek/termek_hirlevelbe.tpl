<table>

{foreach from=$termekek item=egy_termek} 

<tr>
<td rowspan="2" width="233" height="110" align="center" valign="middle">
<a href="http://lencsek.hu/{$egy_termek.termek_alnev_hu}" target="_blank"><img src="http://kepek.lencsek.hu/lencsek/{$egy_termek.termek_kep}" border="0" alt="{$egy_termek.termek_nev_hu}" height="100"></a>
</td>
</tr>
<tr><td height="40">&nbsp;<a style="color: #46b7cb;
    font: arial, helvetica;
    font-size: 14px;
    font-weight: bold;" title="{$egy_termek.termek_nev_hu}" href="http://lencsek.hu/{$egy_termek.termek_alnev_hu}">{$gy_termek.termek_nev_hu}</a></td>
</tr>

{/foreach}

</table>