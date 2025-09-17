<div class="col-md-offset-3 col-md-6">

{if !empty($jelszo_uzenet)}
    {$jelszo_uzenet}
{else}
    <form id="form2" name="form2" method="post" action="/{$alnev.jelszo_valtoztatas}">
    <input type="hidden" name="kuldve" value="1">

    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="arial-12">
        <tr>
          <td height="35" colspan="2" bgcolor="#FFFFFF">{$ford.kerjuk_adjameg_jelszo_modosito}</td>

        </tr>
        {$elf_hiba}

        <tr>
          <td width="108" height="25" bgcolor="#FFFFFF">{$ford.email}:</td>
          <td width="563" height="25" bgcolor="#FFFFFF"><input name="felh_email" type="text" class="textfield-specs" id="felh_email" size="30" /></td>
        </tr>
        <tr>

          <td height="35" bgcolor="#FFFFFF">&nbsp;</td>
          <td height="25" bgcolor="#FFFFFF"><input name="submit" type="submit" class="form-button" id="submit" value="{$ford.elkuld}" /></td>
        </tr>
    </table>
    </form>
{/if}

</div>