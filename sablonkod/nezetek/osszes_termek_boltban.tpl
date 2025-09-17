<div style="border-color:#80776f; margin-left:20px; float:right; width:300px;">
<h1>{$ford.kiegeszitok}</h1>

    <table border="0">
    {assign var="z" value=0}
    {foreach from=$kiegeszitok_alul item=egy_termek}
        <tr {if $z & 1 }bgcolor="#cccccc"{/if}><td><a href="{$site}{$egy_termek.termek_alnev}" target="_blank">{$egy_termek.termek_nev}</a></td><td align="right" width="60">{$egy_termek.termek_ar_bolt|arformat}</td></tr>
        
        {assign var="z" value=$z+1}
	{/foreach}
    </table>
</div>

<div style="border-color:#80776f;">
<h1>{$ford.kontaktlencsek}</h1>

    <table border="0">
    {assign var="z" value=0}
    {foreach from=$termekek item=egy_termek}
        <tr {if $z & 1 }bgcolor="#cccccc"{/if}><td><a href="{$site}{$egy_termek.termek_alnev}" target="_blank">{$egy_termek.termek_nev}</a></td><td align="right">{$egy_termek.termek_ar_bolt|arformat}</td></tr>
        {assign var="z" value=$z+1}
    {/foreach}
    </table>
</div>
