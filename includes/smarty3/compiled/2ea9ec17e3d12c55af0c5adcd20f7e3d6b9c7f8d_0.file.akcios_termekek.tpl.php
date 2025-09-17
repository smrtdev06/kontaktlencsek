<?php
/* Smarty version 3.1.30, created on 2022-08-31 11:29:45
  from "/var/www/vhosts/kontaktlencsek.hu/httpdocs/sablonkod/new/akcios_termekek.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_630f4629682fd9_42704992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ea9ec17e3d12c55af0c5adcd20f7e3d6b9c7f8d' => 
    array (
      0 => '/var/www/vhosts/kontaktlencsek.hu/httpdocs/sablonkod/new/akcios_termekek.tpl',
      1 => 1541511201,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_630f4629682fd9_42704992 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="frames_section also-like">
  <h2 class="heading">Akciós termékeink</h2>
  <div class="owl-carousel2 owl-theme">
  
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['akcios_termekek']->value, 'egy_termek');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['egy_termek']->value) {
?>
        <div class="item">
         <!--<img class="brand-logo" src="images/versace.jpg"/>-->
         <a href="<?php echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_alnev_hu'];?>
"> <center><img src="kepek/lencsek/<?php echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_kep'];?>
" class="img-responsive"></center>
          <h4><?php echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_nev_hu'];?>
<br>
            <small><?php echo arformat($_smarty_tpl->tpl_vars['egy_termek']->value['termek_akcios_ar']);?>
<span class="old-price"><?php echo arformat($_smarty_tpl->tpl_vars['egy_termek']->value['termek_ar']);?>
</span></small></h4>
          </a>
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    
  </div>
</section>
<?php }
}
