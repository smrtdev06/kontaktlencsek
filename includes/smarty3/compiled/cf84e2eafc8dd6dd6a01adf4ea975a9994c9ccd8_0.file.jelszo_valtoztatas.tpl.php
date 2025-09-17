<?php
/* Smarty version 3.1.30, created on 2018-12-05 10:35:19
  from "/var/www/vhosts/kontaktlencsek.hu/ujdesign/sablonkod/nezetek/jelszo_valtoztatas.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c079bd707a840_48210858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf84e2eafc8dd6dd6a01adf4ea975a9994c9ccd8' => 
    array (
      0 => '/var/www/vhosts/kontaktlencsek.hu/ujdesign/sablonkod/nezetek/jelszo_valtoztatas.tpl',
      1 => 1422542235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c079bd707a840_48210858 (Smarty_Internal_Template $_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['jelszo_uzenet']->value)) {?>
    <?php echo $_smarty_tpl->tpl_vars['jelszo_uzenet']->value;?>

<?php } else { ?>
    <form id="form2" name="form2" method="post" action="<?php echo $_smarty_tpl->tpl_vars['sitenev']->value;
echo $_smarty_tpl->tpl_vars['alnev']->value['jelszo_valtoztatas'];?>
">
    <input type="hidden" name="kuldve" value="1">

    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="arial-12">
        <tr>
          <td height="35" colspan="2" bgcolor="#FFFFFF"><?php echo $_smarty_tpl->tpl_vars['ford']->value['kerjuk_adjameg_jelszo_modosito'];?>
</td>

        </tr>
        <?php echo $_smarty_tpl->tpl_vars['elf_hiba']->value;?>


        <tr>
          <td width="108" height="25" bgcolor="#FFFFFF"><?php echo $_smarty_tpl->tpl_vars['ford']->value['email'];?>
:</td>
          <td width="563" height="25" bgcolor="#FFFFFF"><input name="felh_email" type="text" class="textfield-specs" id="felh_email" size="30" /></td>
        </tr>
        <tr>

          <td height="25" bgcolor="#FFFFFF">&nbsp;</td>
          <td height="25" bgcolor="#FFFFFF"><input name="submit" type="submit" class="form-button" id="submit" value="<?php echo $_smarty_tpl->tpl_vars['ford']->value['elkuld'];?>
" /></td>
        </tr>
    </table>
    </form>
<?php }
}
}
