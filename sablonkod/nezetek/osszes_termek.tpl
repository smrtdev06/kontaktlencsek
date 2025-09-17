<h1>{$ford.kontaktlencsek}</h1>
<div class="cont-block" style="border-color:#80776f; display:block; height:auto; padding:0; float:left; ">
	{foreach from=$termekek item=egy_termek}
		{include file="nezetek/osszes_egy_termek.tpl"}
	{/foreach}
</div>

<div style="display:block; height:40px; width:100%; padding:0; float:left; ">

</div>
<h1>{$ford.kiegeszitok}</h1>

<div class="cont-block" style="border-color:#80776f; display:block; height:auto; padding:0; float:left; ">
	{foreach from=$kiegeszitok_alul item=egy_termek}
		{include file="nezetek/osszes_egy_termek.tpl"}
	{/foreach}
</div>
