<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Rendelés szedő oldal</title>
<!--
  <meta charset="utf-8">
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datum" ).datepicker();
  });
  </script>
-->
  
  
<style type="text/css">

  body {
      font-family:Arial, Verdana, Helvetica, sans-serif;
      font-size:12px;
  }
  
  #kereso_tabla {
      font-family: Arial;
      margin-top: 20px;
  }
  
  .eredmeny_tabla {
       border:1px solid;ű
       padding-top:40px;
  }
  
</style>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  {literal}
  <script>
  $( function() {
    $( "#datum" ).datepicker({dateFormat: "yy-mm-dd"});
  } );
  </script>
  {/literal}

</head>

<body>

<form>
<table align="center">
<tr valign="top"><td>
<table id="kereso_tabla" align="center" cellspacing="0">
<tr bgcolor="#FFAE5E"><td>Dátum </td>
<td><input type="text" id="datum" name="datum"  value="{$datum}"></td></tr>

<!--<tr><td>Családnév </td>
<td><input type="text" name="csaladnev" value="{$csaladnev}"></td></tr>

<tr bgcolor="#FFAE5E"><td>Keresztnév </td>
<td><input type="text" name="keresztnev" value="{$keresztnev}"></td></tr>

<tr><td>Telefon </td>
<td><input type="text" name="telefon" value="{$telefon}"></td></tr>

<tr><td>Oldal </td>
<td align="right"><select size=1 name="oldal">
  <option value=""> válassz </option>
  <option value="michael_db" {if $oldal=='michael_db'}selected{/if}>Lencsek.hu</option>
  <option value="lencse_shop" {if $oldal=='lencse_shop'}selected{/if}>Lencse.hu</option>
  <option value="kontaktlencsek_hu" {if $oldal=='kontaktlencsek_hu'}selected{/if}>Kontaktlencsek.hu</option>
  <option value="optilens_hu" {if $oldal=='optilens_hu'}selected{/if}>Optilens.hu</option>
  <option value="szepulj" {if $oldal=='szepulj'}selected{/if}>Szepulj.hu</option>
  <option value="freelancer_new_szem" {if $oldal=='freelancer_new_szem'}selected{/if}>Szemuvegek.hu</option>
</select></td>
</tr>

<tr><td>Tranz.id </td>
<td><input type="text" name="tranzid" value="{$tranzid}"></td></tr>
-->

</table>

</td><td>
<table>

<!--
<tr bgcolor="#FFAE5E"><td>Összeg </td>
<td><input type="text" name="osszesen" value="{$osszesen}"></td></tr>

<tr><td>Fizetés </td>
<td align="right"><select size=1 name="fiz_mod">
  <option value=""> válassz </option>
  <option value="Utánvét" {if $fiz_mod=='Utánvét'}selected{/if}>Utánvét/készpénz</option>
  <option value="utalás" {if $fiz_mod=='utalás'}selected{/if}>Előre utalás</option>
  <option value="internetes" {if $fiz_mod=='internetes'}selected{/if}>Internetes fizetés</option>
</select>
</td></tr>

<tr bgcolor="#FFAE5E"><td>Rend.szám </td>
<td><input type="text" name="rend_id" value="{$rend_id}"></td></tr>

<tr><td>E-mail </td>
<td><input type="text" name="email" value="{$email}"></td></tr>

<tr bgcolor="#FFAE5E"><td>Felh.id </td>
<td><input type="text" name="felhid" value="{$felhid}"></td></tr>
-->
<tr>
<td align="right" colspan="2"><input type="submit" value="Keresés"></td></tr>
</table>

</td></tr>
</table>
</form>

<br />
<table align="center" cellpadding="4" cellspacing="0" class="eredmeny_tabla">
<tr bgcolor="#8080FF" style="color:#ffffff;">
    <td>Rendelés</td>
    <!--<td>Dátum</td>
    <td>Összeg</td>
    <td>Fiz. mód</td>
    <td>Száll. mód</td>
    <td>Bolt</td>
    <td>Felh. id</td>
    <td>E-mail</td>-->
    <td>Név</td>
    <!--<td>Telefon</td>
    <td>Város</td>
    <td>Oldal</td>
    <td>Számlaszám</td>
    <td>Visszautalva</td>-->
</tr>



{assign var="z" value="1"}
{assign var="osszeg_osszesen" value="1"}
{foreach from=$talalat item=egy}
<tr {if $z%2==0}bgcolor="#dcdcdc"{/if}>
    <td><a onclick="javascript:document.getElementById('adatok_{$egy.rend_id}').style.display = 'block';"><a href="{$smarty.server.PHP_SELF}?rendid={$egy.rend_id}">{$egy.rend_id}</a></td>
    <!--<td>{$egy.rend_datum|substr:0:10}</td>
    <td align="right">{$egy.osszeg}</td>
    <td {if $egy.fiz_modnev_hu=="Internetes fizetés" }bgcolor="#D69738"{/if}>{$egy.fiz_modnev_hu}</td>
    <td>{$egy.szall_nev_hu}</td>
    <td>{$egy.bolt_nev|substr:-21} {if $egy.szall_mod==3 || $egy.szall_mod==5}({$egy.rend_bolt_kod}){/if}</td>
    <td>{$egy.felh_id}</td>
    
    {if !domain_validate($egy.felh_email)}
    <td align="right" bgcolor="#ff0000">
        <a href="http://email-checker.eu/index.php?email={$egy.felh_email}" target="_blank">{$egy.felh_email}</a>
    {elseif $z%2!=0}
    <td align="right" bgcolor="#88D28C">
        {$egy.felh_email}
    {else}
    <td align="right">
        {$egy.felh_email}
    {/if}
    </td>-->
    
    
    <td>{$egy.felh_csaladnev} <span title="{$egy.felh_id}">{$egy.felh_keresztnev}</span></td>
    <!--<td>{if $egy.felh_mobil1}{$egy.felh_mobil1}/{$egy.felh_mobil2}{else}{$egy.felh_telefon|replace:' ':''|truncate:14}{/if}</td>
    <td>{$egy.felh_varos}</td>
    <td>{$egy.oldal|db_to_domain}</td>
    <td {if $egy.szamlaszam}bgcolor="#88D28C"{/if}>{$egy.szamlaszam}</td>
    <td align="center">{$egy.visszautalva}</td>-->
</tr>

<tr>
<td colspan="2">
{include file="admin/szedes_adatok.tpl"}
</td>
</tr>


{assign var="z" value=$z+1}
{assign var="osszeg_osszesen" value=$osszeg_osszesen+$egy.osszeg}
{/foreach}
<tr bgcolor="#ddffdd"><td>&nbsp;</td><!--<td>{$osszeg_osszesen} Ft</td>--><td colspan="11" align="right">Összesen: {$z-1} db</td></tr>
</table>

<div>
  <!-- {$sql_parancs|nl2br} -->
</div>

</body>
</html>