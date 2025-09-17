<?php
/* Smarty version 3.1.30, created on 2022-08-31 11:30:23
  from "/var/www/vhosts/kontaktlencsek.hu/httpdocs/sablonkod/megrendeles_oldal/megrendeles.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_630f464f495f88_83513457',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b3a9dce91593b34086ca579f0c5fec3dff6c2ee' => 
    array (
      0 => '/var/www/vhosts/kontaktlencsek.hu/httpdocs/sablonkod/megrendeles_oldal/megrendeles.tpl',
      1 => 1542634511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:kosar_oldal/rendeles_menete.tpl' => 1,
  ),
),false)) {
function content_630f464f495f88_83513457 (Smarty_Internal_Template $_smarty_tpl) {
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
