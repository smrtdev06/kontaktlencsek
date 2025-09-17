<?php
/* Smarty version 3.1.30, created on 2022-08-31 11:30:07
  from "/var/www/vhosts/kontaktlencsek.hu/httpdocs/sablonkod/kosar_oldal/kosar_tablazat.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_630f463f724965_50622407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad7cc8c9447d1eee1ec2a9adeb6cfd68044d4d8f' => 
    array (
      0 => '/var/www/vhosts/kontaktlencsek.hu/httpdocs/sablonkod/kosar_oldal/kosar_tablazat.tpl',
      1 => 1542292112,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:kosar_oldal/rendeles_menete.tpl' => 1,
    'file:kosar_oldal/kosar_egy_termek.tpl' => 1,
  ),
),false)) {
function content_630f463f724965_50622407 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:kosar_oldal/rendeles_menete.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
    <section class="product-overview container clearfix ">
        <div class="col-xs-12 left-section-product step6">
            <h1 class="product_title"><?php echo $_smarty_tpl->tpl_vars['ford']->value['kosar'];?>
</h1>
            
            <div class="clearfix  mt20"></div>
            <div class="lens_selection clearfix">

                <div class="specs-details">
                <form name="urlap2" method="post" action="<?php echo $_smarty_tpl->tpl_vars['sitenev']->value;
echo $_smarty_tpl->tpl_vars['alnev']->value['kosar'];?>
">
                <input type="hidden" name="mennyiseg_mod" value="1">
    
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tartalom']->value, 'egy');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['egy']->value) {
?>
                    <?php $_smarty_tpl->_subTemplateRender("file:kosar_oldal/kosar_egy_termek.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                
                </form>
                </div>
                
                <div class="main-flex">
                    <div class="col-md-6 left-form">
                    
                    </div>
                    
                    
                    <div class="col-md-6 right-form">
                    <h3>Fizetendő összeg</h3>
                        <table class="table table-striped">
                            <tr><td width="40%">Termékek</td><td>:</td> <td align="center"><?php echo arformat($_smarty_tpl->tpl_vars['osszesen']->value);?>
</td></tr>
                            <!--<tr><td>Előleg szükséges:</td> <td>:</td> <td>39.487 Ft </td></tr>
                            <tr><td>Szállítás:</td> <td>:</td> <td>Ingyenes</td></tr>
                            <tr><td>Fizetendő átvételkor/utalandó:</td> <td>:</td> <td><strong><?php echo arformat($_smarty_tpl->tpl_vars['osszesen']->value);?>
</strong></td></tr>-->
                        </table>
                    </div>
                
                </div>    
                
                <div class="text-right clearfix">
                        <button class="green-btn" type="button" onclick="window.location.href='/szallitas'">Tovább</button>
                    </div>
                
            </div>
            
        </div>
        
    </section>

    <div class="sticky-stopper"></div>
    <?php }
}
