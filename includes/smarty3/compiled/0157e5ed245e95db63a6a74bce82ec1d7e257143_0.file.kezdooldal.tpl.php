<?php
/* Smarty version 3.1.30, created on 2018-05-17 11:43:24
  from "C:\xampp\htdocs\lencsek\sablonkod\kezdooldal.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5afd4ebc58c1a7_42991559',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0157e5ed245e95db63a6a74bce82ec1d7e257143' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lencsek\\sablonkod\\kezdooldal.tpl',
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
function content_5afd4ebc58c1a7_42991559 (Smarty_Internal_Template $_smarty_tpl) {
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
