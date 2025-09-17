<?php
/* Smarty version 3.1.30, created on 2018-11-06 14:33:22
  from "/var/www/vhosts/kontaktlencsek.hu/ujdesign/sablonkod/new/akcios_termekek.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5be19822ed09f1_54246715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c72db7536ae4b487a136af997af4ab0d29a92345' => 
    array (
      0 => '/var/www/vhosts/kontaktlencsek.hu/ujdesign/sablonkod/new/akcios_termekek.tpl',
      1 => 1541511201,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be19822ed09f1_54246715 (Smarty_Internal_Template $_smarty_tpl) {
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
