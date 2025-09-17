<div id="adatok_{$egy.rend_id}" style="display:none;">

<div style="width: 154px; float: right;">
<fieldset>
<legend> Visszautalás </legend>
<form>
<input type="hidden" name="rend_id" value="{$egy.rend_id}">
<input type="text" name="vissz_osszeg" size="5"> <input type="submit" value="Mentés">
</form>
</fieldset>
</div>

<div>


<fieldset>
<legend><a onclick="javascript:document.getElementById('adatok_{$egy.rend_id}').style.display = 'none';"><img src="http://lencsek.hu/images/CloseButton.png"></a> Rendelés adatai&nbsp;</legend>
Egészségpénztár: {$egy.penztar_nev}<br />
<br />
Termék név

</fieldset>
</div>




</div>