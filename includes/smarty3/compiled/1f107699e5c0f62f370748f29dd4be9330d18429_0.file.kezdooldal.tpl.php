<?php
/* Smarty version 3.1.30, created on 2018-05-17 11:37:34
  from "C:\xampp\htdocs\uj_lencsek\ujsablonkod\oldalak\kezdooldal.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5afd4d5ebc0d12_97854938',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f107699e5c0f62f370748f29dd4be9330d18429' => 
    array (
      0 => 'C:\\xampp\\htdocs\\uj_lencsek\\ujsablonkod\\oldalak\\kezdooldal.tpl',
      1 => 1526042702,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:brand_menu.tpl' => 1,
    'file:kezdo_termekek.tpl' => 1,
  ),
),false)) {
function content_5afd4d5ebc0d12_97854938 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-md-12">

    <div class="content">
    <h1>Azon dolgozunk, hogy Ön is tisztán lásson!</h1>

    <p>A jelentősebb gyártók legkeresettebb termékeivel, garantáltan eredeti kontaktlencsékkel, ápolószerekkel és egyéb tartozékokkal várjuk Önt webáruházunkban!<br>
    Pénztárcabarát árak és gyors kiszolgálás - Lencsék.hu </p>
    </div>
 
    <?php $_smarty_tpl->_subTemplateRender("file:brand_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  
  
    <div id="stickyalias"></div>
    <div class="clearfix"></div>
  
    <?php $_smarty_tpl->_subTemplateRender("file:kezdo_termekek.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  
</div>
<?php }
}
