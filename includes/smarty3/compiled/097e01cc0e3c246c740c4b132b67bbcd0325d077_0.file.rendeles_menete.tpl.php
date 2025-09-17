<?php
/* Smarty version 3.1.30, created on 2018-05-22 15:09:56
  from "/var/www/vhosts/lencsek.hu/uj.lencsek.hu/sablonkod/new/rendeles_menete.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b0416a48b75b2_83626562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '097e01cc0e3c246c740c4b132b67bbcd0325d077' => 
    array (
      0 => '/var/www/vhosts/lencsek.hu/uj.lencsek.hu/sablonkod/new/rendeles_menete.tpl',
      1 => 1526994566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b0416a48b75b2_83626562 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <section class="page-indicator">
        <section class="steps_sec">
            <ul class="nav nav-tabs nav-justified">
                <li><span>1</span> <strong>Termék<br> kiválasztása</strong></li>
                
                <li <?php if ($_smarty_tpl->tpl_vars['oldal']->value == "kosar") {?>class="active"<?php }?>><span>2</span> <strong>Kosár<br> tartalma</strong></li>
                
                <li><span>3</span> <strong>Átvétel,<br> fizetés módja</strong></li>
                <li><span>4</span> <strong>Regisztráció,<br> bejelentkezés</strong></li>
                <li><span>5</span> <strong>Rendelés<br> áttekintése</strong></li>
                <li><span>6</span> <strong>Befejezés</strong></li>
            </ul>
        </section>
    </section><?php }
}
