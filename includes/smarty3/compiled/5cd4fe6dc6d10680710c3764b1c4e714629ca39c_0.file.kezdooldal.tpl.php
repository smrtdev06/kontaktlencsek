<?php
/* Smarty version 3.1.30, created on 2018-05-11 14:45:03
  from "/var/www/vhosts/lencsek.hu/uj.lencsek.hu/ujsablonkod/oldalak/kezdooldal.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af5904fc6ac71_85573076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cd4fe6dc6d10680710c3764b1c4e714629ca39c' => 
    array (
      0 => '/var/www/vhosts/lencsek.hu/uj.lencsek.hu/ujsablonkod/oldalak/kezdooldal.tpl',
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
function content_5af5904fc6ac71_85573076 (Smarty_Internal_Template $_smarty_tpl) {
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
