<?php
/* Smarty version 3.1.30, created on 2018-07-05 13:46:15
  from "/var/www/vhosts/lencsek.hu/uj.lencsek.hu/sablonkod/nezetek/kategoria_nezet.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b3e0507a05f72_51033433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c14450eeff15dc5653600d05fbf6c5847352af07' => 
    array (
      0 => '/var/www/vhosts/lencsek.hu/uj.lencsek.hu/sablonkod/nezetek/kategoria_nezet.tpl',
      1 => 1472048618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:nezetek/osszes_egy_termek.tpl' => 1,
  ),
),false)) {
function content_5b3e0507a05f72_51033433 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 type="text/javascript" src="//static.criteo.net/js/ld/ld.js" async="true"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
window.criteo_q = window.criteo_q || [];
window.criteo_q.push(
{ event: "setAccount", account: 29999 },
{ event: "setEmail", email: "" },
{ event: "setSiteType", type: "d" },
{ event: "viewList", item:[ <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['termekek']->value, 'egy_elem', false, 'kulcs', 'products', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['kulcs']->value => $_smarty_tpl->tpl_vars['egy_elem']->value) {
if ($_smarty_tpl->tpl_vars['kulcs']->value > 0) {?>,<?php }?>"<?php echo $_smarty_tpl->tpl_vars['egy_elem']->value['termek_id'];?>
"<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

 ]}
);
<?php echo '</script'; ?>
>


<h1><?php echo $_smarty_tpl->tpl_vars['kat_nev']->value;?>
</h1>
<div class="cont-block" style="border-color:#80776f; display:block; height:auto; padding:0; float:left; ">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['termekek']->value, 'egy_termek');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['egy_termek']->value) {
?>
          <?php $_smarty_tpl->_subTemplateRender("file:nezetek/osszes_egy_termek.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
  

</div>
 <?php }
}
