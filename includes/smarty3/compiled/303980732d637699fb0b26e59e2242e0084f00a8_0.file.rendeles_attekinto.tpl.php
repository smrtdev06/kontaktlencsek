<?php
/* Smarty version 3.1.30, created on 2022-08-31 11:30:19
  from "/var/www/vhosts/kontaktlencsek.hu/httpdocs/sablonkod/attekinto_oldal/rendeles_attekinto.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_630f464ba72311_52641964',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '303980732d637699fb0b26e59e2242e0084f00a8' => 
    array (
      0 => '/var/www/vhosts/kontaktlencsek.hu/httpdocs/sablonkod/attekinto_oldal/rendeles_attekinto.tpl',
      1 => 1594818344,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:kosar_oldal/rendeles_menete.tpl' => 1,
  ),
),false)) {
function content_630f464ba72311_52641964 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:kosar_oldal/rendeles_menete.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <section class="product-overview container clearfix ">
        <div class="col-xs-12 left-section-product step6">

        <form method="POST" action="/<?php echo $_smarty_tpl->tpl_vars['alnev']->value['megrendeles'];?>
" onSubmit="return disableForm(this);">
        
            <h1 class="product_title">Rendelés áttekintő</h1>
            <div class="clearfix  mt20"></div>
            <div class="lens_selection clearfix">


            <div class="specs-details">
                
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tetelek']->value, 't');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
?>
                <div class="product-repeat">
                    <table cellspacing="2" class="table table-bordered">
                    <tbody>
                        <tr class="datasrow">
                            <td>
                                <div class="data-head">
                                    <h3>Termék</h3>
                                    <br />
                                </div>
                                
                                <p><?php echo $_smarty_tpl->tpl_vars['t']->value['termek_nev'];?>
</p>
                                <figure class="cart-product"><img src="<?php if ($_smarty_tpl->tpl_vars['egy_termek']->value['termek_csoport'] == 3) {
echo $_smarty_tpl->tpl_vars['kepsrc2']->value;
} else {
echo $_smarty_tpl->tpl_vars['kepsrc']->value;
}
echo $_smarty_tpl->tpl_vars['t']->value['termek_kep'];?>
"></figure>
                                
                            </td>
                            <?php if ($_smarty_tpl->tpl_vars['t']->value['termek_csoport'] == 1) {?>
                            <td>
                                <div class="data-head">
                                    <h3><?php if ($_smarty_tpl->tpl_vars['t']->value['termek_csoport'] == 1) {
echo $_smarty_tpl->tpl_vars['ford']->value['szem'];
}?></h3>
                                    <br />
                                </div>
                            
                                <?php if ($_smarty_tpl->tpl_vars['t']->value['termek_csoport'] == 1) {?>
                                    <p><center><?php echo $_smarty_tpl->tpl_vars['ford']->value['szemek'][$_smarty_tpl->tpl_vars['t']->value['termek_szem']];?>
</center></p>
                                <?php }?>
                                
                                <!-- standard -->
                                <!--<p>Ütésálló műanyag lencse, fúrt és damilos kerethez.</p>
                                  <p>Az árból a lencse és a csiszolási költség 6.950 Ft</p>-->
                            </td>
                            
                            <td class="szemadatok">
                                <div class="data-head">
                                    <h3>Szemének adatai</h3>
                                    <br />
                                </div>

                                <?php if ($_smarty_tpl->tpl_vars['t']->value['jell2']) {?> <?php echo jellemzoki(array('jell'=>"2",'jell_id'=>$_smarty_tpl->tpl_vars['t']->value['jell2']),$_smarty_tpl);?>
<br /> <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['t']->value['jell1']) {?> <?php echo jellemzoki(array('jell'=>"1",'jell_id'=>$_smarty_tpl->tpl_vars['t']->value['jell1']),$_smarty_tpl);?>
<br /> <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['t']->value['jell3']) {?> <?php echo jellemzoki(array('jell'=>"3",'jell_id'=>$_smarty_tpl->tpl_vars['t']->value['jell3']),$_smarty_tpl);?>
<br /> <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['t']->value['jell4']) {?> <?php echo jellemzoki(array('jell'=>"4",'jell_id'=>$_smarty_tpl->tpl_vars['t']->value['jell4']),$_smarty_tpl);?>
<br /> <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['t']->value['jell5']) {?> <?php echo jellemzoki(array('jell'=>"5",'jell_id'=>$_smarty_tpl->tpl_vars['t']->value['jell5']),$_smarty_tpl);?>
<br /> <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['t']->value['jell6']) {?> <?php echo jellemzoki(array('jell'=>"6",'jell_id'=>$_smarty_tpl->tpl_vars['t']->value['jell6']),$_smarty_tpl);?>
<br /> <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['t']->value['jell7']) {?> <?php echo jellemzoki(array('jell'=>"7",'jell_id'=>$_smarty_tpl->tpl_vars['t']->value['jell7']),$_smarty_tpl);?>
 <?php }?>
                                
                                
                            </td>
                            <?php }?>
                            <td class="mennyiseg_td">
                                <div class="data-head">
                                    <h3><?php echo $_smarty_tpl->tpl_vars['ford']->value['mennyiseg'];?>
</h3>
                                    <br />
                                </div>
                                
                                <div align="center">
                                <br />
                                <?php echo $_smarty_tpl->tpl_vars['t']->value['termek_db'];?>
 x <?php echo arformat($_smarty_tpl->tpl_vars['t']->value['termek_ar']);?>
 = <span class="price"><span class="woocommerce-Price-amount amount"><?php echo arformat(($_smarty_tpl->tpl_vars['t']->value['termek_db']*$_smarty_tpl->tpl_vars['t']->value['termek_ar']));?>
 <!--<small>72.820 Ft</small>--></span></span>
                                </div>
                                
                                <!--<span class="clearfix"> &nbsp; </span>-->

                                
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="delete_item"> <!--<a href="#"> <i class="fa fa-times" aria-hidden="true"></i>  Törlés a kosárból </a>--> </div></div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
            
        </div>

            <div class="lens_selection clearfix step4">
                <div class="top-head"><h3><?php echo $_smarty_tpl->tpl_vars['ford']->value['szemelyes_adatok'];?>
</h3></div>
            
            <div class="main-flex">
                <div class="col-md-6 left-form">
                    <table class="table table-striped">
                        <tr><td width="40%"><?php echo $_smarty_tpl->tpl_vars['ford']->value['nev'];?>
</td><td>:</td><td><?php echo $_smarty_tpl->tpl_vars['user_adat']->value['felh_csaladnev'];?>
 <?php echo $_smarty_tpl->tpl_vars['user_adat']->value['felh_keresztnev'];?>
</td></tr>
                        <tr><td>Telefonszám</td> <td>:</td> <td>+36<?php echo $_smarty_tpl->tpl_vars['user_adat']->value['felh_mobil1'];?>
/<?php echo $_smarty_tpl->tpl_vars['user_adat']->value['felh_mobil2'];?>
, <?php echo $_smarty_tpl->tpl_vars['user_adat']->value['felh_telefon'];?>
</td></tr>
                        <tr><td>Város</td> <td>:</td> <td><?php echo $_smarty_tpl->tpl_vars['user_adat']->value['felh_varos'];?>
</td></tr>
                        <tr><td>Utca, házszám</td> <td>:</td> <td><?php echo $_smarty_tpl->tpl_vars['user_adat']->value['felh_utca'];?>
</td></tr>
                        <tr><td>Irányítószám</td> <td>:</td> <td><?php echo $_smarty_tpl->tpl_vars['user_adat']->value['felh_irsz'];?>
</td></tr>
                        <!--<tr><td>Megye</td> <td>:</td> <td>India</td></tr>-->
                    </table>
                </div>
            
                <div class="col-md-6 right-form">
                    <table class="table table-striped">
                        <!--<tr><td width="40%">Számlázási cím</td><td>:</td> <td>A-36, Janak puri</td></tr>-->
                        <tr><td>Számlanév</td> <td>:</td> <td><?php echo $_smarty_tpl->tpl_vars['user_adat']->value['felh_szamlanev'];?>
</td></tr>
                        <tr><td>Város</td> <td>:</td> <td><?php echo $_smarty_tpl->tpl_vars['user_adat']->value['felh_szvaros'];?>
</td></tr>
                        <tr><td>Utca, házszám</td> <td>:</td> <td><?php echo $_smarty_tpl->tpl_vars['user_adat']->value['felh_szutca'];?>
</td></tr>
                        <tr><td>Irányítószám</td> <td>:</td> <td><?php echo $_smarty_tpl->tpl_vars['user_adat']->value['felh_szirsz'];?>
</td></tr>
                        <!-- <tr><td>Megye</td> <td>:</td> <td>New Delhi</td></tr>-->
                    </table>
                </div>
                
                
            </div>
                <div class="col-md-12 right-form">
                    <a href="/regisztracio" class="btn btn-success" role="button">Módosítom</a>
                </div>
                
            </div>
            
            <div class="lens_selection clearfix step4">
            
            <div class="main-flex">
                <div class="col-md-6 left-form">
                    <h3>Átvétel, fizetés </h3>
                    
                    <table class="table table-striped">
                        
                        <!--<tr><td width="40%">Próba</td><td>:</td> <td>Próbát kérek</td></tr>-->
                        <tr><td>Átvétel</td> <td>:</td> <td><?php echo $_smarty_tpl->tpl_vars['szallmod_ki']->value;?>
</td></tr>
                        <tr><td>Fizetési mód</td> <td>:</td> <td><?php echo $_smarty_tpl->tpl_vars['fizmod_ki']->value;?>
</td></tr>
                        <tr><td>Szállítás</td> <td>:</td> <td>Ingyenes</td></tr>
                        
                        
                    </table>
                    
                </div>
            
                <div class="col-md-6 right-form">
                <h3><?php echo $_smarty_tpl->tpl_vars['ford']->value['ar'];?>
</h3>
                    <table class="table table-striped">
                        <tr><td width="40%">Termékek</td><td>:</td> <td><?php echo arformat($_smarty_tpl->tpl_vars['osszesen']->value);?>
</td></tr>
                        <!--<tr><td>Előleg szükséges:</td> <td>:</td> <td>39.487 Ft </td></tr>-->
                        <tr><td>Szállítás:</td> <td>:</td> <td><?php echo arformat($_smarty_tpl->tpl_vars['szallitas_osszeg']->value);?>
</td></tr>
                        <tr><td><?php echo $_smarty_tpl->tpl_vars['ford']->value['osszesen'];?>
:</td> <td>:</td> <td><strong><?php echo arformat($_smarty_tpl->tpl_vars['mindosszesen']->value);?>
</strong></td></tr>
                    </table>
                </div>
            </div>
                <div class="col-md-12 right-form">
                    <a href="/szallitas" class="btn btn-success" role="button">Módosítom</a>
                </div>    
                
                
            </div>
            
            <div class="lens_selection clearfix step4">
                <div class="top-head"><h3><?php echo $_smarty_tpl->tpl_vars['ford']->value['megjegyzes'];?>
</h3></div>
            
                <div class="comment-area text-right"><textarea name="megjegyzes" class="form-control"><?php echo $_smarty_tpl->tpl_vars['user_adat']->value['felh_megjegyzes'];?>
</textarea>
                    <input type="submit" class="btn btn-danger mt10" value="Rendelés feladása" />
                </div>
            </div>

        </form>                
        
        </div>
    </section><?php }
}
