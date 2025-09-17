<?php
/* Smarty version 3.1.30, created on 2018-05-18 14:46:15
  from "/var/www/vhosts/lencsek.hu/uj.lencsek.hu/sablonkod/nezetek/kosar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5afecb1720ca97_98168411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd82b0f400c6e23e15dc23146b49cb345276d5bc9' => 
    array (
      0 => '/var/www/vhosts/lencsek.hu/uj.lencsek.hu/sablonkod/nezetek/kosar.tpl',
      1 => 1508852786,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5afecb1720ca97_98168411 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['kosarki']->value;?>



<br />
<form action="<?php echo $_smarty_tpl->tpl_vars['sitenev']->value;
echo $_smarty_tpl->tpl_vars['alnev']->value['szallitas'];?>
" method="get" id="ajandek_form">

<div class="cont-block" style="border-color:#80776f; float:left; width:auto; ">
        <div class="purple-arrow-button-left-back"></div>
        <input name="button" type="button" class="purple-arrow-button" value="<?php echo $_smarty_tpl->tpl_vars['ford']->value['vasarlas_folytatas'];?>
" onClick="location.href='<?php echo $_smarty_tpl->tpl_vars['sitenev']->value;
echo $_smarty_tpl->tpl_vars['alnev']->value['osszes_termek'];?>
'"   style="float:left">
        <div class="purple-arrow-button-right-back"></div>
    </div>
    
    

<div class="cont-block" style="border-color:#80776f; float:left; width:auto;  margin-left:25px;">
        <div class="purple-arrow-button-left"></div>
        <input name="button" type="button" class="purple-arrow-button" value="<?php echo $_smarty_tpl->tpl_vars['ford']->value['vasarlas_befejezes'];?>
" onClick="this.form.submit()" style="float:left">
        <div class="purple-arrow-button-right"></div>
    </div>



<div class="cont-block" style="border-color:#80756f; float:right; width:265px;"><table style="color:#7f766f;" width="100%"><tr><td align="center" bgcolor="#f4f3f1" class="prod-title" height="35"><?php echo $_smarty_tpl->tpl_vars['ford']->value['ar'];?>
</td></tr>
                               <tr><td align="center" height="35"><span style="float:left; font-size:16px; padding: 4px 0 0 15px;"><?php echo $_smarty_tpl->tpl_vars['ford']->value['osszesen'];?>
:</span><span style="font-size:20px; float:right; padding-right:15px; color:#8f6299;"><b><?php echo arformat($_smarty_tpl->tpl_vars['osszesen']->value);?>
</b></span></td></tr>
</table></div>

              
            
              
<?php echo '<script'; ?>
 type="text/javascript" src="css/highslide.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="css/highslide.css" />
                                                  
<div style="clear:both;"></div>
                            
    <div style="margin-top:30px; border-color:#80756f; border-top:dashed 1px #bdbdbd;padding-top:10px;">
    
    <div style="font-size:14px; padding:5px; background:#F5F4F2; color:#46b7cd; font-weight:bold;">
    <?php if ($_smarty_tpl->tpl_vars['ajandek_ok']->value) {?>Válasszon az alábbi ajándékok közül!<?php } else { ?>Ha még <?php echo arformat($_smarty_tpl->tpl_vars['ajandek_kulonbozet']->value);?>
 összegben vásárol, az alábbi ajándékok közül választhat!<?php }?></div>
    
    
    
            <link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
            <style>
                .ui-dialog-titlebar {
                    background: #ffffff;
                    border: 0px;
                }
            </style>
            <?php echo '<script'; ?>
 src="//code.jquery.com/ui/1.11.0/jquery-ui.js"><?php echo '</script'; ?>
>
    
    
    
    
    <?php $_smarty_tpl->_assignInScope('z', "1");
?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ajandekok']->value, 'elem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['elem']->value) {
?>
        
        <?php echo '<script'; ?>
>
            $(function() {
            
            $( "#dialog_csomag<?php echo $_smarty_tpl->tpl_vars['z']->value;?>
" ).dialog({
                autoOpen: false,
                height:"auto",
                width:"auto",
                show: {
                effect: "blind",
                duration: 1000
                },
                hide: {
                effect: "explode",
                duration: 1000
                }
            });
            
            $( "#ajandek<?php echo $_smarty_tpl->tpl_vars['z']->value;?>
" ).click(function() {
                $( "#dialog_csomag<?php echo $_smarty_tpl->tpl_vars['z']->value;?>
" ).dialog( "open" );
            });
            
            $( "#csomagnagy<?php echo $_smarty_tpl->tpl_vars['z']->value;?>
" ).click(function() {
                $( "#dialog_csomag<?php echo $_smarty_tpl->tpl_vars['z']->value;?>
" ).dialog( "close" );
            });
            
            });

            <?php echo '</script'; ?>
>
        
    
    
        <?php if ($_smarty_tpl->tpl_vars['elem']->value['ajandek_azon'] != "Nemkerem" || $_smarty_tpl->tpl_vars['ajandek_ok']->value) {?>
        <div style="float:left; text-align:center; padding:4px; border-right:1px dashed #bdbdbd;border-bottom:1px dashed #bdbdbd; width:120px; min-height:164px;">
          
          
            <div id="dialog_csomag<?php echo $_smarty_tpl->tpl_vars['z']->value;?>
" align="center">
                <img style="max-width: 600px;" src="images/action/<?php echo $_smarty_tpl->tpl_vars['elem']->value['ajandek_kep'];?>
" border="0" id="csomagnagy<?php echo $_smarty_tpl->tpl_vars['z']->value;?>
">
                <p class="szoveg">
                <?php echo $_smarty_tpl->tpl_vars['elem']->value['ajandek_leiras'];?>

                </p>
            </div>
            
          <a id="ajandek<?php echo $_smarty_tpl->tpl_vars['z']->value;?>
" style="cursor:pointer;">
          <img src="images/action/thumb_<?php echo $_smarty_tpl->tpl_vars['elem']->value['ajandek_kep'];?>
" id="ajandek<?php echo $_smarty_tpl->tpl_vars['z']->value;?>
" border="0" height="56px;"></a><br />
          <!--<p style="max-width:300px;text-align:justify;padding:4px;"><?php echo $_smarty_tpl->tpl_vars['elem']->value['ajandek_leiras'];?>
</p>-->
          <?php if ($_smarty_tpl->tpl_vars['ajandek_ok']->value && $_smarty_tpl->tpl_vars['elem']->value['ajandek_ertekhatar'] < $_smarty_tpl->tpl_vars['osszesen']->value) {?>
              <input type="radio" name="ajandek" value="<?php echo $_smarty_tpl->tpl_vars['elem']->value['ajandek_azon'];?>
" <?php if ($_smarty_tpl->tpl_vars['elem']->value['ajandek_azon'] == $_smarty_tpl->tpl_vars['ajandek_azon']->value) {?>CHECKED<?php }?> onchange="" />
          <?php } else { ?>
              <?php if ($_smarty_tpl->tpl_vars['elem']->value['ajandek_ertekhatar'] > 0) {
echo arformat($_smarty_tpl->tpl_vars['elem']->value['ajandek_ertekhatar']);?>
 felett<?php }?>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['elem']->value['ajandek_azon'] != 'Nemkerem') {?><br /><br /><b><?php echo $_smarty_tpl->tpl_vars['elem']->value['ajandek_nev'];?>
</b> <br /><br /><?php echo $_smarty_tpl->tpl_vars['elem']->value['ajandek_leiras'];
}?>
        </div>
        <?php }?>
        
        <?php $_smarty_tpl->_assignInScope('z', $_smarty_tpl->tpl_vars['z']->value+1);
?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    
    </div>
</form>

<div style="clear:both;"></div>

<?php }
}
