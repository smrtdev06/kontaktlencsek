<?php
/* Smarty version 3.1.30, created on 2018-08-29 16:10:15
  from "/var/www/vhosts/lencsek.hu/uj.lencsek.hu/sablonkod/megrendeles_oldal/megrendeles.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b86a9473012a0_00408097',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6cfd6ddb3e0c3c1e51be3c0f86312f5f4b56214' => 
    array (
      0 => '/var/www/vhosts/lencsek.hu/uj.lencsek.hu/sablonkod/megrendeles_oldal/megrendeles.tpl',
      1 => 1535551752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:kosar_oldal/rendeles_menete.tpl' => 1,
  ),
),false)) {
function content_5b86a9473012a0_00408097 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:kosar_oldal/rendeles_menete.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
{ event: "trackTransaction", id: "<?php echo $_smarty_tpl->tpl_vars['rend_id']->value;?>
", item: [
  <?php $_smarty_tpl->_assignInScope('z', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kosar']->value, 'elem', false, 'kulcs', 'sorok', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['kulcs']->value => $_smarty_tpl->tpl_vars['elem']->value) {
if ($_smarty_tpl->tpl_vars['z']->value > 0) {?>,<?php }?>{ id: "<?php echo $_smarty_tpl->tpl_vars['elem']->value['termek_id'];?>
", price: <?php echo $_smarty_tpl->tpl_vars['elem']->value['termek_ar']/round(310);?>
, quantity: <?php echo $_smarty_tpl->tpl_vars['elem']->value['termek_db'];?>
}
  <?php $_smarty_tpl->_assignInScope('z', 1);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

]}
);
<?php echo '</script'; ?>
>


<div class="felso_lec"><?php echo $_smarty_tpl->tpl_vars['ford']->value['vasarlas_befejezes'];?>
</div>

<div class="container">

      <div>
        <!--<h1>Bootstrap starter template</h1>-->
        <p>
        <br />
        <?php echo $_smarty_tpl->tpl_vars['valasz']->value;?>

        
<?php echo $_smarty_tpl->tpl_vars['megbizhato']->value;?>

 <br /><br />

 <div id="fb-root"></div>
<?php echo '<script'; ?>
>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/hu_HU/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));<?php echo '</script'; ?>
>


    <br style="clear:both;">
    <div>
    <a href="https://facebook.com/Lencsek.hu" target="_blank"><img src="images/lencsek_hu_fac.png" width="350"></a>
    <br>
      <div class="fb-like" data-href="https://www.facebook.com/Lencsek.hu" data-width="350" data-layout="standard" data-action="like" data-show-faces="false" data-share="false">
      </div>
    </div>
  
          
        
        </p>
      </div>

</div>

        
<?php }
}
