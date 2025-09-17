<div class="termek1">
	
	<a href="{$site}{$egy_termek.termek_alnev}" title="{$egy_termek.termek_nev}">
		<img src="{$kepsrc}{$egy_termek.termek_kep}" alt="{$egy_termek.termek_nev}" title="{$egy_termek.termek_nev}" border="0" />
	</a>
	
	<p class="marka" class="product-one-of-all-man" >{$egy_termek.termek_gyarto}</p>
	{if $egy_termek.termek_akcios_ar > 0 }
	    {*<span class="ar_regi">{$egy_termek.termek_ar|arformat}</span>*}
	    <span class="ar">{$egy_termek.termek_akcios_ar|arformat}</span>
	{else}
	    <span class="ar">{$egy_termek.termek_ar|arformat}</span>
	{/if}
    
    <p class="tipus" style="width:160px;display:inline-block;"><a href="{$site}{$egy_termek.termek_alnev}" title="{$egy_termek.termek_nev}">{$egy_termek.termek_nev}</a></p>

	<span class="cikkszam">{$egy_termek.cikkszam}</span>
</div>
