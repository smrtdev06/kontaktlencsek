{literal}
<style type="text/css">
table {
    font-size:32px;
}

body {
    font-size:32px;
}

</style>
{/literal}

<body>
<center>Rendelés: {$smarty.get.rendid}</center><br />
<table align="center" cellspacing="0" cellpadding="4">
<tr bgcolor="#008000" style="color:#fff;">
<td>Név</td>
<td>Görbület</td>
<td>Dioptria</td>
<td>Cilinder</td>
<td>Fok</td>
<td>Szín</td>
<td>Addició</td>
<tr>

{foreach from=$tetelek item=egy}
<tr>
<td>{$egy.termek_nev_hu}</td>
<td>{jellki jell=1 mi=$egy.jell1}</td>
<td>{jellki jell=2 mi=$egy.jell2}</td>
<td>{jellki jell=3 mi=$egy.jell3}</td>
<td>{jellki jell=4 mi=$egy.jell4}</td>
<td>{jellki jell=5 mi=$egy.jell5}</td>
<td>{jellki jell=6 mi=$egy.jell6}</td>
</tr>
{/foreach}


</table>

<center><a href="{$smarty.server.PHP_SELF}">Vissza</a></center>

<!--teszt: {$teszt}-->

</body>