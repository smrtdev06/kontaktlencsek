<?php /* Smarty version 2.6.26, created on 2018-08-02 13:24:35
         compiled from admin/rendeles_lista.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'number_format', 'admin/rendeles_lista.tpl', 145, false),array('modifier', 'substr', 'admin/rendeles_lista.tpl', 148, false),array('modifier', 'replace', 'admin/rendeles_lista.tpl', 165, false),array('modifier', 'truncate', 'admin/rendeles_lista.tpl', 165, false),array('modifier', 'db_to_domain', 'admin/rendeles_lista.tpl', 167, false),array('modifier', 'nl2br', 'admin/rendeles_lista.tpl', 186, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Rendelés ellenőrző oldal</title>
<!--
  <meta charset="utf-8">
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() );
  </script>
-->
  
  
<style type="text/css">

  body   
  #kereso_tabla   
  .eredmeny_tabla   
</style>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <?php echo '
  <script>
  $( function() {
    $( "#datum" ).datepicker({dateFormat: "yy-mm-dd",firstDay: 1});
    $( "#datumig" ).datepicker({dateFormat: "yy-mm-dd",firstDay: 1});
  } );
  </script>
  '; ?>


</head>

<body>

<form>
<table align="center">
<tr valign="top"><td>
<table id="kereso_tabla" align="center" cellspacing="0">
<tr bgcolor="#FFAE5E"><td>Dátum </td>
<td><input type="text" id="datum" name="datum"  value="<?php echo $this->_tpl_vars['datum']; ?>
"></td></tr>
<!--
<tr><td>Dátum-ig</td><td><input type="text" id="datumig" name="datumig"  value="<?php echo $this->_tpl_vars['datumig']; ?>
"></td></tr>
-->
<tr><td>Családnév </td>
<td><input type="text" name="csaladnev" value="<?php echo $this->_tpl_vars['csaladnev']; ?>
"></td></tr>

<tr bgcolor="#FFAE5E"><td>Keresztnév </td>
<td><input type="text" name="keresztnev" value="<?php echo $this->_tpl_vars['keresztnev']; ?>
"></td></tr>

<tr><td>Telefon </td>
<td><input type="text" name="telefon" value="<?php echo $this->_tpl_vars['telefon']; ?>
"></td></tr>

<tr bgcolor="#FFAE5E"><td>Oldal </td>
<td align="right"><select size=1 name="oldal">
  <option value=""> válassz </option>
  <!--<option value="michael_db" <?php if ($this->_tpl_vars['oldal'] == 'michael_db'): ?>selected<?php endif; ?>>Lencsek.hu</option>-->
  <option value="lencse_shop" <?php if ($this->_tpl_vars['oldal'] == 'lencse_shop'): ?>selected<?php endif; ?>>Lencse.hu</option>
  <option value="kontaktlencsek_hu" <?php if ($this->_tpl_vars['oldal'] == 'kontaktlencsek_hu'): ?>selected<?php endif; ?>>Kontaktlencsek.hu</option>
  <option value="optilens_hu" <?php if ($this->_tpl_vars['oldal'] == 'optilens_hu'): ?>selected<?php endif; ?>>Optilens.hu</option>
  <option value="szepulj" <?php if ($this->_tpl_vars['oldal'] == 'szepulj'): ?>selected<?php endif; ?>>Szepulj.hu</option>
  <option value="eles_szemuvegek" <?php if ($this->_tpl_vars['oldal'] == 'eles_szemuvegek'): ?>selected<?php endif; ?>>Szemuvegek.hu</option>
</select></td>
</tr>
<tr><td>Tranz.id </td>
<td><input type="text" name="tranzid" value="<?php echo $this->_tpl_vars['tranzid']; ?>
"></td></tr>


</table>

</td><td>
<table>
<tr bgcolor="#FFAE5E"><td>Összeg </td>
<td><input type="text" name="osszesen" value="<?php echo $this->_tpl_vars['osszesen']; ?>
"></td></tr>
<!-- <tr><td>&nbsp;</td><td>&nbsp;</td></tr>-->
<tr><td>Fizetés </td>
<td align="right"><select size=1 name="fiz_mod">
  <option value=""> válassz </option>
  <option value="Utánvét" <?php if ($this->_tpl_vars['fiz_mod'] == 'Utánvét'): ?>selected<?php endif; ?>>Utánvét/készpénz</option>
  <option value="utalás" <?php if ($this->_tpl_vars['fiz_mod'] == 'utalás'): ?>selected<?php endif; ?>>Előre utalás</option>
  <option value="internetes" <?php if ($this->_tpl_vars['fiz_mod'] == 'internetes'): ?>selected<?php endif; ?>>Internetes fizetés</option>
</select>
  <!--<input type="text" name="fiz_mod" value="<?php echo $this->_tpl_vars['fiz_mod']; ?>
">--></td></tr>

<tr bgcolor="#FFAE5E"><td>Rend.szám </td>
<td><input type="text" name="rend_id" value="<?php echo $this->_tpl_vars['rend_id']; ?>
"></td></tr>

<tr><td>E-mail </td>
<td><input type="text" name="email" value="<?php echo $this->_tpl_vars['email']; ?>
"></td></tr>

<tr bgcolor="#FFAE5E"><td>Felh.id </td>
<td><input type="text" name="felhid" value="<?php echo $this->_tpl_vars['felhid']; ?>
"></td></tr>

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
    <td>Dátum</td>
    <td>Összeg</td>
    <td>Fiz. mód</td>
    <td>Száll. mód</td>
    <td>Bolt</td>
    <td>Felh.</td>
    <td>E-mail</td>
    <td>Név</td>
    <td>Telefon</td>
    <td>Város</td>
    <td>Oldal</td>
    <td>Számlaszám</td>
    <td>Visszautalva</td>
</tr>



<?php $this->assign('z', '1'); ?>
<?php $this->assign('osszeg_osszesen', '1'); ?>
<?php $_from = $this->_tpl_vars['talalat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['egy']):
?>
<tr <?php if ($this->_tpl_vars['z']%2 == 0): ?>bgcolor="#dcdcdc"<?php endif; ?>>
    <td><a onclick="javascript:document.getElementById('adatok_<?php echo $this->_tpl_vars['egy']['rend_id']; ?>
').style.display = 'block';"><?php echo $this->_tpl_vars['egy']['rend_id']; ?>
</a></td>
    <td><?php echo $this->_tpl_vars['egy']['rend_datum']; ?>
</td>
    <td align="right"><?php echo ((is_array($_tmp=$this->_tpl_vars['egy']['osszeg'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ",", ".") : number_format($_tmp, 0, ",", ".")); ?>
</td>
    <td <?php if ($this->_tpl_vars['egy']['fiz_modnev_hu'] == "Internetes fizetés"): ?>bgcolor="#D69738"<?php endif; ?>><?php echo $this->_tpl_vars['egy']['fiz_modnev_hu']; ?>
</td>
    <td><?php echo $this->_tpl_vars['egy']['szall_nev_hu']; ?>
</td>
    <td><?php echo ((is_array($_tmp=$this->_tpl_vars['egy']['bolt_nev'])) ? $this->_run_mod_handler('substr', true, $_tmp, -21) : substr($_tmp, -21)); ?>
 <?php if ($this->_tpl_vars['egy']['szall_mod'] == 3 || $this->_tpl_vars['egy']['szall_mod'] == 5): ?>(<?php echo $this->_tpl_vars['egy']['rend_bolt_kod']; ?>
)<?php endif; ?></td>
    <td><?php echo $this->_tpl_vars['egy']['felh_id']; ?>
</td>
    
    <?php if (! domain_validate ( $this->_tpl_vars['egy']['felh_email'] )): ?>
    <td align="right" bgcolor="#ff0000">
        <a href="http://email-checker.eu/index.php?email=<?php echo $this->_tpl_vars['egy']['felh_email']; ?>
" target="_blank"><?php echo $this->_tpl_vars['egy']['felh_email']; ?>
</a>
    <?php elseif ($this->_tpl_vars['z']%2 != 0): ?>
    <td align="right" bgcolor="#88D28C">
        <?php echo $this->_tpl_vars['egy']['felh_email']; ?>

    <?php else: ?>
    <td align="right">
        <?php echo $this->_tpl_vars['egy']['felh_email']; ?>

    <?php endif; ?>
    </td>
    
    
    <td><?php echo $this->_tpl_vars['egy']['felh_csaladnev']; ?>
 <span title="<?php echo $this->_tpl_vars['egy']['felh_id']; ?>
"><?php echo $this->_tpl_vars['egy']['felh_keresztnev']; ?>
</span></td>
    <td><?php if ($this->_tpl_vars['egy']['felh_mobil1']): ?><?php echo $this->_tpl_vars['egy']['felh_mobil1']; ?>
/<?php echo $this->_tpl_vars['egy']['felh_mobil2']; ?>
<?php else: ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['egy']['felh_telefon'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '') : smarty_modifier_replace($_tmp, ' ', '')))) ? $this->_run_mod_handler('truncate', true, $_tmp, 14) : smarty_modifier_truncate($_tmp, 14)); ?>
<?php endif; ?></td>
    <td><?php echo $this->_tpl_vars['egy']['felh_varos']; ?>
</td>
    <td><?php echo ((is_array($_tmp=$this->_tpl_vars['egy']['oldal'])) ? $this->_run_mod_handler('db_to_domain', true, $_tmp) : db_to_domain($_tmp)); ?>
</td>
    <td <?php if ($this->_tpl_vars['egy']['szamlaszam']): ?>bgcolor="#88D28C"<?php endif; ?>><?php echo $this->_tpl_vars['egy']['szamlaszam']; ?>
</td>
    <td align="center"><?php echo $this->_tpl_vars['egy']['visszautalva']; ?>
</td>
</tr>

<tr>
<td colspan="14">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/rendeles_adatok.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</td>
</tr>


<?php $this->assign('z', $this->_tpl_vars['z']+1); ?>
<?php $this->assign('osszeg_osszesen', $this->_tpl_vars['osszeg_osszesen']+$this->_tpl_vars['egy']['osszeg']); ?>
<?php endforeach; endif; unset($_from); ?>
<tr bgcolor="#ddffdd"><td colspan="2">&nbsp;</td><td colspan="2" style="color:#ddffdd;"><?php echo ((is_array($_tmp=$this->_tpl_vars['osszeg_osszesen'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ",", ".") : number_format($_tmp, 0, ",", ".")); ?>
 Ft</td><td colspan="10" align="right">Összesen: <?php echo $this->_tpl_vars['z']-1; ?>
 db</td></tr>
</table>

<div>
  <!-- <?php echo ((is_array($_tmp=$this->_tpl_vars['sql_parancs'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
 -->
</div>

</body>
</html>