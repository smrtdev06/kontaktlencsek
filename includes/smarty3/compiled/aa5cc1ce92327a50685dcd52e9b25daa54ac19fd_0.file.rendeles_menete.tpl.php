<?php
/* Smarty version 3.1.30, created on 2018-12-06 13:12:05
  from "/var/www/vhosts/kontaktlencsek.hu/ujdesign/sablonkod/kosar_oldal/rendeles_menete.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c0912155daf98_57547617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa5cc1ce92327a50685dcd52e9b25daa54ac19fd' => 
    array (
      0 => '/var/www/vhosts/kontaktlencsek.hu/ujdesign/sablonkod/kosar_oldal/rendeles_menete.tpl',
      1 => 1544098298,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0912155daf98_57547617 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <section class="page-indicator">
        <section class="steps_sec">
            <ul class="nav nav-tabs nav-justified">
                <li><span>1</span> <strong>Termék<br> kiválasztása</strong></li>
                
                <li <?php if ($_smarty_tpl->tpl_vars['oldal']->value == $_smarty_tpl->tpl_vars['alnev']->value['kosar']) {?>class="active"<?php }?>><span>2</span> <strong>Kosár<br> tartalma</strong></li>
                
                <li <?php if ($_smarty_tpl->tpl_vars['oldal']->value == $_smarty_tpl->tpl_vars['alnev']->value['szallitas']) {?>class="active"<?php }?>><span>3</span> <strong>Átvétel,<br> fizetés módja</strong></li>
                
                <li <?php if ($_smarty_tpl->tpl_vars['oldal']->value == $_smarty_tpl->tpl_vars['alnev']->value['belepes'] || $_smarty_tpl->tpl_vars['oldal']->value == $_smarty_tpl->tpl_vars['alnev']->value['regisztracio']) {?>class="active"<?php }?>><span>4</span> <strong>Regisztráció,<br> bejelentkezés</strong></li>
                
                <li <?php if ($_smarty_tpl->tpl_vars['oldal']->value == $_smarty_tpl->tpl_vars['alnev']->value['rendeles_attekinto']) {?>class="active"<?php }?>><span>5</span> <strong>Rendelés<br> áttekintése</strong></li>
                
                <li <?php if ($_smarty_tpl->tpl_vars['oldal']->value == $_smarty_tpl->tpl_vars['alnev']->value['megrendeles']) {?>class="active"<?php }?>><span>6</span> <strong>Befejezés</strong></li>
            </ul>
        </section>
    </section>        <?php }
}
