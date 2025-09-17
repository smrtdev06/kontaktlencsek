
<style type="text/css">
p.lapozo a:link {
    background-color: #F7F7F7;
}

</style>

<div id="keresobox" style="width:755px; background-color: #f7f7f7; padding:10px;">
<form id="kform" name="kform" action="{$sitenev}{$q}" method="get">
<input type="hidden" name="tcs" value="{$tcs}">

<div style="float:right;">
Terméknév: <input type="text" name="keres" size="16" value="{$keres}"> <input type="submit" value="Keres">
</div>


<div style="float:left;">
Rendezés: 
<select name="r" size="1" style="border: 1px solid #46b7cb; color: #80766e;" onchange="document.kform.submit()"> 
  <option value="1" {if $r == 1}selected{/if}>Név szerint</option>
  <option value="2" {if $r == 2}selected{/if}>Ár szerint növekvő</option>
  <option value="3" {if $r == 3}selected{/if}>Ár szerint csökkenő</option>
</select>
</div>

<!--
<p class="lapozo" style="text-align:center;">
<a href="">Előző</a> <a href="">1</a> <a href="">2</a> <a href="">3</a> <a href="">4</a> <a href="">Következő</a>
</p>
-->
&nbsp;
</form>
</div>


<h1>{$gyarto_nev}</h1>
<div class="cont-block" style="border-color:#80776f; display:block; height:auto; padding:0; float:left; ">
 {foreach from=$termekek item=egy_termek}
      {include file="nezetek/osszes_egy_termek.tpl"}
    {/foreach}
</div>