<?php /* Smarty version 2.6.26, created on 2018-07-18 16:15:36
         compiled from admin/rendeles_adatok.tpl */ ?>
<div id="adatok_<?php echo $this->_tpl_vars['egy']['rend_id']; ?>
" style="display:none;">

<div style="width: 154px; float: right;">
<fieldset>
<legend> Visszautalás </legend>
<form>
<input type="hidden" name="rend_id" value="<?php echo $this->_tpl_vars['egy']['rend_id']; ?>
">
<input type="text" name="vissz_osszeg" size="5"> <input type="submit" value="Mentés">
</form>
</fieldset>
</div>

<div>


<fieldset>
<legend><a onclick="javascript:document.getElementById('adatok_<?php echo $this->_tpl_vars['egy']['rend_id']; ?>
').style.display = 'none';"><img src="http://lencsek.hu/images/CloseButton.png"></a> Rendelés adatai&nbsp;</legend>
Egészségpénztár: <?php echo $this->_tpl_vars['egy']['penztar_nev']; ?>
<br />
<br />
Termék név

</fieldset>
</div>




</div>