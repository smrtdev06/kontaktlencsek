<?php
/* Smarty version 3.1.30, created on 2018-07-31 13:41:11
  from "/var/www/vhosts/lencsek.hu/uj.lencsek.hu/sablonkod/new/kosar_tablazat.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b604ad75e6893_69453807',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94cd58ca3cee7a7b69bc7473cf2e8d014f63b25e' => 
    array (
      0 => '/var/www/vhosts/lencsek.hu/uj.lencsek.hu/sablonkod/new/kosar_tablazat.tpl',
      1 => 1533037261,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:kosar_oldal/rendeles_menete.tpl' => 1,
    'file:new/kosar_egy_termek.tpl' => 1,
  ),
),false)) {
function content_5b604ad75e6893_69453807 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <?php $_smarty_tpl->_subTemplateRender("file:new/kosar_egy_termek.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
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
                        <!--
                        <h3>Átvétel, fizetés </h3>
                        <table class="table table-striped">
                            <tr><td width="40%">Próba</td><td>:</td> <td>Próbát kérek</td></tr>
                            <tr><td>Átvétel</td> <td>:</td> <td>Foxpost </td></tr>
                            <tr><td>Fizetési mód</td> <td>:</td> <td>Előre utalás</td></tr>
                            <tr><td>Szállítás</td> <td>:</td> <td>Ingyenes</td></tr>
                        </table>
                        -->
                    </div>
                    
                    
                    <div class="col-md-6 right-form">
                    <h3>Ár </h3>
                        <table class="table table-striped">
                            <tr><td width="40%">Termékek</td><td>:</td> <td><?php echo arformat($_smarty_tpl->tpl_vars['osszesen']->value);?>
</td></tr>
                            <!--<tr><td>Előleg szükséges:</td> <td>:</td> <td>39.487 Ft </td></tr>-->
                            <tr><td>Szállítás:</td> <td>:</td> <td>Ingyenes</td></tr>
                            <tr><td>Fizetendő átvételkor/utalandó:</td> <td>:</td> <td><strong><?php echo arformat($_smarty_tpl->tpl_vars['osszesen']->value);?>
</strong></td></tr>
                        </table>
                    </div>
                
                </div>    
                
                <div class="text-right clearfix mt40">
                        <button class="green-btn" type="button" onclick="window.location.href='/szallitas'">Tovább</button>
                    </div>
                
            </div>
            
            
            
            
            
            
            
        </div>
        
        
         
        
    </section>

    
    <!-- Modal FOR CASES -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Tommy Hilfiger C
        somag</h4>
                </div>
                <div class="modal-body">
                    <img src="images/tommy_csomag.jpg" alt="" class="img-responsive"/>
                    <p>A terméket a gyártó eredeti csomagolásában értékesítjük. A szemüvegtok eltérhet a képen szereplőtől.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="sticky-stopper"></div>
    <?php }
}
