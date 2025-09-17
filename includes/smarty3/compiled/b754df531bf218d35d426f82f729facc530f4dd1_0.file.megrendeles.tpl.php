<?php
/* Smarty version 3.1.30, created on 2018-11-24 01:38:13
  from "/var/www/vhosts/kontaktlencsek.hu/ujdesign/sablonkod/megrendeles_oldal/megrendeles.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bf89d75b82f43_59336568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b754df531bf218d35d426f82f729facc530f4dd1' => 
    array (
      0 => '/var/www/vhosts/kontaktlencsek.hu/ujdesign/sablonkod/megrendeles_oldal/megrendeles.tpl',
      1 => 1542634511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:kosar_oldal/rendeles_menete.tpl' => 1,
  ),
),false)) {
function content_5bf89d75b82f43_59336568 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:kosar_oldal/rendeles_menete.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


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


  
          
        
        </p>
      </div>

</div>

        
<?php }
}
