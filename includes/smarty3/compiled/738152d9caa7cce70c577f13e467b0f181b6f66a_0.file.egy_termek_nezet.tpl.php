<?php
/* Smarty version 3.1.30, created on 2018-09-13 15:53:06
  from "/var/www/vhosts/lencsek.hu/uj.lencsek.hu/sablonkod/termek_oldal/egy_termek_nezet.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b9a6bc20b4202_18837322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '738152d9caa7cce70c577f13e467b0f181b6f66a' => 
    array (
      0 => '/var/www/vhosts/lencsek.hu/uj.lencsek.hu/sablonkod/termek_oldal/egy_termek_nezet.tpl',
      1 => 1536846785,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:new/4logofent.tpl' => 1,
    'file:new/akcios_termekek.tpl' => 1,
  ),
),false)) {
function content_5b9a6bc20b4202_18837322 (Smarty_Internal_Template $_smarty_tpl) {
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
{ event: "viewItem", item: "<?php echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'];?>
" }
);
<?php echo '</script'; ?>
>



<?php echo '<script'; ?>
 type="text/javascript">

$(function() {
    
// első sor Görbület érték
$("#jell1_1").change(function(){          
   
    var valasztott = $("#jell1_1 option:selected").text();

    var akt_termek = <?php echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'];?>
;
    var termekcsop1 = [21548,19461,21551,19432,19431,19460,22986,25831,29651,33568,19430,33151];

    //alert ( jQuery.inArray(akt_termek, termekcsop1) );
   
    if( jQuery.inArray(akt_termek, termekcsop1)!=-1 ) {
    
        if( valasztott == '8,4' || valasztott == '8,8' ) {
            $("#jell1_2 option:contains('-')").attr('disabled','disabled');
            $("#jell1_2 option:contains('+')").removeAttr('disabled');
            
            alert('Ellenőrizze a görbületet (BC) és a dioptriát  !!! Ehhez a görbülethez, csak + os dioptria választható!');
            
            if( $("#jell1_2 option:contains('+')") ) {
                //$("#addcart").attr('disabled','disabled');
            } else {
                //$("#addcart").removeAttr('disabled');
            }
        }
        
        if( valasztott == '8,5' || valasztott == '8,6' || valasztott == '8,9') {
            $("#jell1_2 option:contains('-')").removeAttr('disabled');
            $("#jell1_2 option:contains('+')").attr('disabled','disabled');
            
            alert('Ellenőrizze a görbületet (BC) és a dioptriát  !!! Ehhez a görbülethez, csak - os dioptria választható!');
            
            if( $("#jell1_2 option:contains('+')") ) {
                //$("#addcart").attr('disabled','disabled');
            } else {
                //$("#addcart").removeAttr('disabled');
            }
        }
    }
});

$("#jell2_1").change(function(){          
    var valasztott2 = $("#jell2_1 option:selected").text();
    var valasztott2_1 = $("#jell2_2 option:selected").text();

    var akt_termek2 = <?php echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'];?>
;
    var termekcsop2 = [21548,19461,21551,19432,19431,19460,22986,25831,29651,33568,19430,33151];
   
    //alert ( jQuery.inArray(akt_termek2, termekcsop2) );
   
    if( jQuery.inArray(akt_termek2, termekcsop2)!=-1 ) {
    
        if( valasztott2 == '8,4' || valasztott2 == '8,8' ) {
            $("#jell2_2 option:contains('-')").attr('disabled','disabled');
            $("#jell2_2 option:contains('+')").removeAttr('disabled');
            
            //$(valasztott_2_1:contains('+'))
            alert('Ellenőrizze a görbületet (BC) és a dioptriát  !!! Ehhez a görbülethez, csak + os dioptria választható!');
        }
        
        if( valasztott2 == '8,5' || valasztott2 == '8,6' || valasztott2 == '8,9') {
            $("#jell2_2 option:contains('-')").removeAttr('disabled');
            $("#jell2_2 option:contains('+')").attr('disabled','disabled');
            
            alert('Ellenőrizze a görbületet (BC) és a dioptriát  !!! Ehhez a görbülethez, csak - os dioptria választható!');
        }
    }
});

});

    function urlap_ellenorzes(f) {
    /* (f.elements['mennyiseg_1'].value != 0 && f.elements['mennyiseg_2'].value != 0) || */
        if( 
            (f.elements['mennyiseg_1'].value != 0 && (<?php echo $_smarty_tpl->tpl_vars['jell_javascript1']->value;?>
 ) ) || (f.elements['mennyiseg_2'].value != 0 && (<?php echo $_smarty_tpl->tpl_vars['jell_javascript2']->value;?>
 ) )
        ){
            alert('<?php echo $_smarty_tpl->tpl_vars['ford']->value['termek_szukseges_szoveg'];?>
');
            return false;
        } else {
            return true;
        }
    
    }

<?php echo '</script'; ?>
>


<section class="page-indicator">
  <ul class="breadcrumbs pull-left">
    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"> <a href="<?php echo $_smarty_tpl->tpl_vars['sitenev']->value;?>
" itemscope="" itemprop="item" itemtype="http://schema.org/ListItem"> <span itemprop="name">Főoldal</span> </a>
      <meta itemprop="position" content="1">
    </li>
    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"> <span class="separator">&nbsp;/ </span> <span itemprop="name">Kontaktlencsék</span>
      <meta itemprop="position" content="2">
    </li>
    <!--
    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"> <span class="separator">&nbsp;/ </span> <span itemprop="name">Opticals</span>
      <meta itemprop="position" content="2">
    </li>
    -->
  </ul>
  
  <?php $_smarty_tpl->_subTemplateRender("file:new/4logofent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</section>


<section class="product-container clearfix product-details" >
    <form name="urlap" class="cart" method="post" action="<?php echo $_smarty_tpl->tpl_vars['filenev']->value;?>
" enctype="multipart/form-data" onsubmit="return urlap_ellenorzes(this);">
    
    <input type="hidden" name="q" value="<?php echo $_smarty_tpl->tpl_vars['alnev']->value['kosar'];?>
">
    <input type="hidden" name="do" value="berak">
    <input type="hidden" name="termek_id" value="<?php echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'];?>
">
    <input type="hidden" name="termek_nev" value="<?php echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_nev'];?>
">
    <input type="hidden" name="termek_kep" value="<?php echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_kep'];?>
">
    <input type="hidden" name="termek_alnev" value="<?php echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_alnev'];?>
">
    <input type="hidden" name="termek_csoport" value="<?php echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_csoport'];?>
">
    <input type="hidden" name="termek_ar" value="<?php if ($_smarty_tpl->tpl_vars['egy_termek']->value['termek_akcios_ar'] != 0) {?> <?php echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_akcios_ar'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_ar'];?>
 <?php }?>">
    <input type="hidden" name="termek_suly" value="<?php echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_suly'];?>
">
    <input type="hidden" name="termek_szallitas" value="<?php echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_szallitas'];?>
">
    
  <div class="col-xs-12 col-sm-8 col-lg-8 left-section-product">
   <h1 itemprop="name" class="product_title"> <?php echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_nev'];?>
 <small> 
    <?php if ($_smarty_tpl->tpl_vars['egy_termek']->value['termek_kat_id'] >= 3 && $_smarty_tpl->tpl_vars['egy_termek']->value['termek_kat_id'] <= 11) {?> kontaktlencse<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['egy_termek']->value['termek_kat_id'] == 15) {?> napszemüveg<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['egy_termek']->value['termek_kat_id'] == 16) {?> szemüvegkeret<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['egy_termek']->value['termek_kat_id'] == 12) {?> ápolószer<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['egy_termek']->value['termek_kat_id'] == 1300) {?> szemcsepp<?php }?>  <br>
   <!--<span>Napszemüveg</span>--></small></h1>
   <!--<ul class="small-pics">
   <li><a href="#"><img src="images/big-product.png"></a></li>
   <li><a href="#"><img src="images/big-product.png"></a></li>
   <li><a href="#"><img src="images/big-product.png"></a></li>
   <li><a href="#"><img src="images/big-product.png"></a></li>
   </ul>-->
   
    <div align="center">

        <img src="<?php if ($_smarty_tpl->tpl_vars['egy_termek']->value['termek_csoport'] == 3) {
echo $_smarty_tpl->tpl_vars['kepsrc2']->value;
} else {
echo $_smarty_tpl->tpl_vars['kepsrc']->value;
}
echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_kep'];?>
" class="img-responsive">
        
      
    </div>
    <!--
    <div class="cases">
        <a href="#1" data-toggle="modal" data-target="#myModal"><img src="<?php if ($_smarty_tpl->tpl_vars['egy_termek']->value['termek_csoport'] == 3) {
echo $_smarty_tpl->tpl_vars['kepsrc2']->value;
} else {
echo $_smarty_tpl->tpl_vars['kepsrc']->value;
}
echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_kep'];?>
" alt="" class="img-responsive" /></a>
    </div>
    -->
    
    <div class="mobile-scroll">
        <div class="step1">
          <h1 itemprop="name" class="product_title"> Szem adatok </h1>
          <ul class="frame-selection clearfix mob_none">

            <li>&nbsp;</li>
            <!--Itt: <?php echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'];?>
-->
            <?php if (termek_jellemzo($_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],2)) {?>
                <li><strong><?php echo $_smarty_tpl->tpl_vars['jellemzok']->value[1]['jellnev'];?>
: <a data-toggle="tooltip" data-html="true" title="A receptjén az első oszlopban feltűntetett számérték, mely lehet „+” és „-” előjelű. Amennyiben nincs előjel feltűntetve, az érték „+”. Áraink és a rövid szállítási idő csak a listában felűntetett dioptriákra vonatkozik, ennél nagyobb illetve kisebb paraméterek esetén kérje egyedi ájánlatunkat !"><i class="fa fa-question-circle" aria-hidden="true"></i></a></strong>
                </li>
            <?php }?>
            <?php if (termek_jellemzo($_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],3)) {?>
                <li> <strong><?php echo $_smarty_tpl->tpl_vars['jellemzok']->value[2]['jellnev'];?>
: <a data-toggle="tooltip" data-html="true" title="A receptjén a második oszlopban feltűntetett dioptria, cylinderes (torikus) érték. Lehet  „+” és „-” előjelű, a rendeléskor ezt pontosan kell megadni! Amennyiben az Ön receptjén nincs ilyen érték, úgy ne töltse ki ezt a részt. Áraink és a rövid szállítási idő csak a listában felűntetett cylinder értékekre vonatkozik, ennél nagyobb illetve kisebb paraméterek esetén kérje egyedi ájánlatunkat !"><i class="fa fa-question-circle" aria-hidden="true"></i></a> </strong> </li>
            <?php }?>
            <?php if (termek_jellemzo($_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],1)) {?>
                <li> <strong><?php echo $_smarty_tpl->tpl_vars['ford']->value['atmero'];?>
: <i class="fa fa-question-circle" aria-hidden="true"></i></a> </strong> </li>
            <?php }?>
            
            <?php if (termek_jellemzo($_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],4)) {?>
                <li> <strong><?php echo $_smarty_tpl->tpl_vars['jellemzok']->value[3]['jellnev'];?>
: <a data-toggle="tooltip" data-html="true" title="A cylinderhez kapcsolódó jelölés, a pontos fokot adja meg. Nem mindig írják ki számmal, a recept tetején található skáláról lehet leolvasni az értéket. Amennyiben az Ön receptjén nincs ilyen érték, úgy ne töltse ki ezt a részt."><i class="fa fa-question-circle" aria-hidden="true"></i></a></strong>
                </li>
            <?php }?>
            <?php if (termek_jellemzo($_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],5)) {?>
                <li>
                    <strong><?php echo $_smarty_tpl->tpl_vars['jellemzok']->value[4]['jellnev'];?>
<i class="fa fa-question-circle" aria-hidden="true"></i></a> </strong>
                </li>
            <?php }?>
            
            <?php if (termek_jellemzo($_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],6)) {?>
                <li>
                    <strong><?php echo $_smarty_tpl->tpl_vars['jellemzok']->value[5]['jellnev'];?>
<i class="fa fa-question-circle" aria-hidden="true"></i></a> </strong>
                </li>
            <?php }?>
            
            <?php if (termek_jellemzo($_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],7)) {?>
                <li> <strong><?php echo $_smarty_tpl->tpl_vars['jellemzok']->value[6]['jellnev'];?>
: <a data-toggle="tooltip" data-html="true" title="A távoli és közeli dioptria közötti különbséget jelöli. Csak a bifokális és multifokális (progresszív) szemüvegek készítésénél kell kitölteni."><i class="fa fa-question-circle" aria-hidden="true"></i></a></strong>
                </li>
            <?php }?>
            
            <li><strong><?php echo $_smarty_tpl->tpl_vars['ford']->value['mennyiseg'];?>
</strong></li>
          </ul>


          <ul class="frame-selection clearfix">

          
          <li><?php if ($_smarty_tpl->tpl_vars['egy_termek']->value['kat_id'] < 12 && $_smarty_tpl->tpl_vars['egy_termek']->value['kat_id'] > 2) {?> <?php echo $_smarty_tpl->tpl_vars['ford']->value['bal_szem'];?>
 <?php }?></li>
            
            
            <?php if (termek_jellemzo($_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],2)) {?>
            <li>
            <strong class="mob-ver"><?php echo $_smarty_tpl->tpl_vars['jellemzok']->value[1]['jellnev'];?>
: <a data-toggle="tooltip" data-html="true" title="A receptjén az első oszlopban feltűntetett számérték, mely lehet „+” és „-” előjelű. Amennyiben nincs előjel feltűntetve, az érték „+”. Áraink és a rövid szállítási idő csak a listában felűntetett dioptriákra vonatkozik, ennél nagyobb illetve kisebb paraméterek esetén kérje egyedi ájánlatunkat !"><i class="fa fa-question-circle" aria-hidden="true"></i></a></strong> 
            
                <?php if (termek_jellemzo($_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],2)) {?>
                    <?php echo jellemzok(array('jell'=>"2",'termek_id'=>$_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],'jid'=>1),$_smarty_tpl);?>

                <?php }?>
            </li>
            <?php }?>
            
            <?php if (termek_jellemzo($_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],3)) {?>
            <li>
            <strong class="mob-ver"><?php echo $_smarty_tpl->tpl_vars['jellemzok']->value[2]['jellnev'];?>
: <a data-toggle="tooltip" data-html="true" title="A receptjén a második oszlopban feltűntetett dioptria, cylinderes (torikus) érték. Lehet  „+” és „-” előjelű, a rendeléskor ezt pontosan kell megadni! Amennyiben az Ön receptjén nincs ilyen érték, úgy ne töltse ki ezt a részt. Áraink és a rövid szállítási idő csak a listában felűntetett cylinder értékekre vonatkozik, ennél nagyobb illetve kisebb paraméterek esetén kérje egyedi ájánlatunkat !"><i class="fa fa-question-circle" aria-hidden="true"></i></a> </strong>
            
                <?php if (termek_jellemzo($_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],3)) {?>
                    <?php echo jellemzok(array('jell'=>"3",'termek_id'=>$_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],'jid'=>1),$_smarty_tpl);?>

                <?php }?>
            </li>
            <?php }?>
            
            <?php if (termek_jellemzo($_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],1)) {?>
            <li>
            <strong class="mob-ver"><?php echo $_smarty_tpl->tpl_vars['ford']->value['atmero'];?>
: </strong>
                <?php if (termek_jellemzo($_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],1)) {?>
                    <?php echo jellemzok(array('jell'=>"1",'termek_id'=>$_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],'jid'=>1),$_smarty_tpl);?>

                <?php }?>
            </li>
            <?php }?>
            
            <?php if (termek_jellemzo($_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],4)) {?>
            <li>
            <strong class="mob-ver"><?php echo $_smarty_tpl->tpl_vars['jellemzok']->value[3]['jellnev'];?>
: <a data-toggle="tooltip" data-html="true" title="A cylinderhez kapcsolódó jelölés, a pontos fokot adja meg. Nem mindig írják ki számmal, a recept tetején található skáláról lehet leolvasni az értéket. Amennyiben az Ön receptjén nincs ilyen érték, úgy ne töltse ki ezt a részt."><i class="fa fa-question-circle" aria-hidden="true"></i></a></strong>
                <?php if (termek_jellemzo($_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],4)) {?>
                    <?php echo jellemzok(array('jell'=>"4",'termek_id'=>$_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],'jid'=>1),$_smarty_tpl);?>

                <?php }?>
            </li>
            <?php }?>
            
            <?php if (termek_jellemzo($_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],5)) {?>
            <li>
            <strong class="mob-ver"><?php echo $_smarty_tpl->tpl_vars['jellemzok']->value[4]['jellnev'];?>
: </strong>
                <?php if (termek_jellemzo($_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],5)) {?>
                    <?php echo jellemzok(array('jell'=>"5",'termek_id'=>$_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],'jid'=>1),$_smarty_tpl);?>

                <?php }?>
            </li>
            <?php }?>
            
            <?php if (termek_jellemzo($_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],6)) {?>
            <li>
            <strong class="mob-ver"><?php echo $_smarty_tpl->tpl_vars['jellemzok']->value[5]['jellnev'];?>
: <a data-toggle="tooltip" data-html="true" title="A cylinderhez kapcsolódó jelölés, a pontos fokot adja meg. Nem mindig írják ki számmal, a recept tetején található skáláról lehet leolvasni az értéket. Amennyiben az Ön receptjén nincs ilyen érték, úgy ne töltse ki ezt a részt."><i class="fa fa-question-circle" aria-hidden="true"></i></a></strong>
                <?php if (termek_jellemzo($_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],6)) {?>
                    <?php echo jellemzok(array('jell'=>"6",'termek_id'=>$_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],'jid'=>1),$_smarty_tpl);?>

                <?php }?>
            </li>
            <?php }?>
            
            <?php if (termek_jellemzo($_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],7)) {?>
            <li>
            <strong class="mob-ver"><?php echo $_smarty_tpl->tpl_vars['jellemzok']->value[6]['jellnev'];?>
: </strong>
                <?php if (termek_jellemzo($_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],7)) {?>
                    <?php echo jellemzok(array('jell'=>"7",'termek_id'=>$_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],'jid'=>1),$_smarty_tpl);?>

                <?php }?>
            </li>
            <?php }?>
            
            <li>
                <strong class="mob-ver"><?php echo $_smarty_tpl->tpl_vars['ford']->value['mennyiseg'];?>
</strong>
                <select name="mennyiseg[]" class="form-control select-block" id="mennyiseg_1">          
                <?php echo mennyiseg(array('db'=>"20"),$_smarty_tpl);?>

              </select>
            </li>
          </ul>
          
          
          
          <?php if ($_smarty_tpl->tpl_vars['egy_termek']->value['kat_id'] < 12 && $_smarty_tpl->tpl_vars['egy_termek']->value['kat_id'] > 2) {?>
          <ul class="frame-selection clearfix">

            <li><?php echo $_smarty_tpl->tpl_vars['ford']->value['jobb_szem'];?>
</li>
            
            <?php if (termek_jellemzo($_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],2)) {?>
            <li>
            <strong class="mob-ver"><?php echo $_smarty_tpl->tpl_vars['jellemzok']->value[1]['jellnev'];?>
: <a data-toggle="tooltip" data-html="true" title="A receptjén az első oszlopban feltűntetett számérték, mely lehet „+” és „-” előjelű. Amennyiben nincs előjel feltűntetve, az érték „+”. Áraink és a rövid szállítási idő csak a listában felűntetett dioptriákra vonatkozik, ennél nagyobb illetve kisebb paraméterek esetén kérje egyedi ájánlatunkat !"><i class="fa fa-question-circle" aria-hidden="true"></i></a></strong> 
                <?php if (termek_jellemzo($_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],2)) {?>
                    <?php echo jellemzok(array('jell'=>"2",'termek_id'=>$_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],'jid'=>2),$_smarty_tpl);?>

                <?php }?>
            </li>
            <?php }?>
            
            <?php if (termek_jellemzo($_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],3)) {?>
            <li>
            <strong class="mob-ver"><?php echo $_smarty_tpl->tpl_vars['jellemzok']->value[2]['jellnev'];?>
: <a data-toggle="tooltip" data-html="true" title="A receptjén a második oszlopban feltűntetett dioptria, cylinderes (torikus) érték. Lehet  „+” és „-” előjelű, a rendeléskor ezt pontosan kell megadni! Amennyiben az Ön receptjén nincs ilyen érték, úgy ne töltse ki ezt a részt. Áraink és a rövid szállítási idő csak a listában felűntetett cylinder értékekre vonatkozik, ennél nagyobb illetve kisebb paraméterek esetén kérje egyedi ájánlatunkat !"><i class="fa fa-question-circle" aria-hidden="true"></i></a> </strong>
                <?php if (termek_jellemzo($_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],3)) {?>
                    <?php echo jellemzok(array('jell'=>"3",'termek_id'=>$_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],'jid'=>2),$_smarty_tpl);?>

                <?php }?>
            </li>
            <?php }?>
            
            <?php if (termek_jellemzo($_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],1)) {?>
            <li>
            <strong class="mob-ver"><?php echo $_smarty_tpl->tpl_vars['ford']->value['atmero'];?>
: </strong>
                <?php if (termek_jellemzo($_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],1)) {?>
                    <?php echo jellemzok(array('jell'=>"1",'termek_id'=>$_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],'jid'=>2),$_smarty_tpl);?>

                <?php }?>
            </li>
            <?php }?>
            
            <?php if (termek_jellemzo($_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],4)) {?>
            <li>
            <strong class="mob-ver"><?php echo $_smarty_tpl->tpl_vars['jellemzok']->value[3]['jellnev'];?>
: <a data-toggle="tooltip" data-html="true" title="A cylinderhez kapcsolódó jelölés, a pontos fokot adja meg. Nem mindig írják ki számmal, a recept tetején található skáláról lehet leolvasni az értéket. Amennyiben az Ön receptjén nincs ilyen érték, úgy ne töltse ki ezt a részt."><i class="fa fa-question-circle" aria-hidden="true"></i></a></strong>
                <?php if (termek_jellemzo($_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],4)) {?>
                    <?php echo jellemzok(array('jell'=>"4",'termek_id'=>$_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],'jid'=>2),$_smarty_tpl);?>

                <?php }?>
            </li>
            <?php }?>
            
            <?php if (termek_jellemzo($_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],5)) {?>
            <li>
            <strong class="mob-ver"><?php echo $_smarty_tpl->tpl_vars['jellemzok']->value[4]['jellnev'];?>
: </strong>
                <?php if (termek_jellemzo($_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],5)) {?>
                    <?php echo jellemzok(array('jell'=>"5",'termek_id'=>$_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],'jid'=>2),$_smarty_tpl);?>

                <?php }?>
            </li>
            <?php }?>
            
            <?php if (termek_jellemzo($_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],6)) {?>
            <li>
            <strong class="mob-ver"><?php echo $_smarty_tpl->tpl_vars['jellemzok']->value[5]['jellnev'];?>
: <a data-toggle="tooltip" data-html="true" title="A távoli és közeli dioptria közötti különbséget jelöli. Csak a bifokális és multifokális (progresszív) szemüvegek készítésénél kell kitölteni."><i class="fa fa-question-circle" aria-hidden="true"></i></a></strong>
                <?php if (termek_jellemzo($_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],6)) {?>
                    <?php echo jellemzok(array('jell'=>"6",'termek_id'=>$_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],'jid'=>2),$_smarty_tpl);?>

                <?php }?>
            </li>
            <?php }?>
            
            <?php if (termek_jellemzo($_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],7)) {?>
            <li>
            <strong class="mob-ver"><?php echo $_smarty_tpl->tpl_vars['jellemzok']->value[6]['jellnev'];?>
: </strong>
                <?php if (termek_jellemzo($_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],7)) {?>
                    <?php echo jellemzok(array('jell'=>"7",'termek_id'=>$_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],'jid'=>2),$_smarty_tpl);?>

                <?php }?>
            </li>
            <?php }?>
            
            <li>
                <strong class="mob-ver"><?php echo $_smarty_tpl->tpl_vars['ford']->value['mennyiseg'];?>
</strong>
                <select name="mennyiseg[]" class="form-control select-block" id="mennyiseg_2">          
                <?php echo mennyiseg(array('db'=>"20"),$_smarty_tpl);?>

              </select>
            </li>
            
          </ul>
          <?php }?>

          
          
          
          
          
          <!--
          <div class="bottom_lenselection">
            <ul>
              <li>Szemtávolság (PD):</li>
              <li>
                <select class="form-control select-block">
                  <option value="">Válasszon</option>
                  <option value="73">73</option>
                  <option value="74">74</option>
                  <option value="75">75</option>
                  <option value="76">76</option>
                  <option value="77">77</option>
                  <option value="78">78</option>
                  <option value="79">79</option>
                  <option value="80">80</option>
                </select>
                &nbsp;<a data-toggle="tooltip" data-html="true" title="A két pupilla közötti távolságot jelöli, a vizsgálati eredményeken általában a teljes értéket szokták feltűntetni."><i class="fa fa-question-circle" aria-hidden="true"></i></a> </li>
            </ul>
          </div>
          -->

        </div>
      </div>
    

  </div>
  <div class="col-xs-12 col-sm-4 col-lg-4">
    <div class="summary">
        <div class="brandLogo"><img src="images/airoptix.jpg" alt="" class="img-responsive" /></div>
      <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
        <p class="price"><span style="display: inline-block; padding: 10px 15px; background: #18AAC9; font-size: 18px; color:#fff; border:2px solid #0f9cba; ">
         <?php if ($_smarty_tpl->tpl_vars['egy_termek']->value['termek_akcios_ar'] > 0) {
echo arformat($_smarty_tpl->tpl_vars['egy_termek']->value['termek_akcios_ar']);
} else {
echo arformat($_smarty_tpl->tpl_vars['egy_termek']->value['termek_ar']);
}?></span>
         <?php if ($_smarty_tpl->tpl_vars['egy_termek']->value['termek_akcios_ar'] > 0 && $_smarty_tpl->tpl_vars['egy_termek']->value['termek_akcios_ar'] < $_smarty_tpl->tpl_vars['egy_termek']->value['termek_ar']) {?><span>Régi ár : <small><?php echo arformat($_smarty_tpl->tpl_vars['egy_termek']->value['termek_ar']);?>
</small></span><?php }?>
        </p>
        <br />
        <button id="addcart" name="addcart" type="submit" class="single_add_to_cart_button button alt"><?php echo $_smarty_tpl->tpl_vars['ford']->value['kosarba'];?>
</button>
        <!--<div class="clearfix">&nbsp;</div>-->
       <p><strong>Gyártó:</strong> <?php echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_gyarto'];?>
 </p>
       <p><strong>Típus:</strong> <?php echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_tipus'];?>
 </p>
       <p><strong>Kiszerelés: </strong> <?php echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_kiszereles'];?>
 </p>
       <p><strong>Szállítási határidő: </strong> <?php echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_szallitas'];?>
 </p>
      </div>
      <div itemprop="description" class="description">
      <strong>Leírás:</strong><br>
        <p><?php echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_megjegyzes'];?>
</p>
      </div>
      
      <!-- Social Links -->
      <div class="ws-product-description">
          <div class="ws-product-social-icon"> <span>Share:</span> <a class="facebook-sharer" href="#x" onclick="woss_twitterSharer()"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a> <a class="twitter-sharer" href="#x" ><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a> <a class="pinterest-sharer" href="#x" ><i class="fa fa-pinterest fa-lg" aria-hidden="true"></i></a> </div>
      </div>
      
      <div class="clearfix"></div>
      <div class="product_meta"> 
          <p>Fél évnél régebben voltál kontaktlencse kontroll vizsgálaton?</p>
        <p>Jelentkezz be online a <a href="https://szemuvegek.hu/latasvizsgalat_bejelentkezes/" target="_blank">Szemüvegek.hu</a> oldalunkon itt ! </p>
      </div>
    </div>
  </div>
  
  </form>
</section>

<!-- Modal FOR CASES -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_nev'];?>
</h4>
      </div>
      <div class="modal-body">
        <center><img src="<?php echo $_smarty_tpl->tpl_vars['kepsrc']->value;
echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_kep'];?>
" alt="" class="img-responsive" /></center>
        <p><?php echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_megjegyzes'];?>
</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Bezár</button>
      </div>
    </div>
  </div>
</div>
    
    <?php $_smarty_tpl->_subTemplateRender("file:new/akcios_termekek.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>








<?php echo '<script'; ?>
 src="js/jquery.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="owl-js/owl.carousel.js"><?php echo '</script'; ?>
> 



<?php echo '<script'; ?>
 type="text/javascript">
        /*********** Replace all SVG images with inline SVG ***********/
        jQuery('img.svg').each(function(){
            var $img = jQuery(this);
            var imgID = $img.attr('id');
            var imgClass = $img.attr('class');
            var imgURL = $img.attr('src');

            jQuery.get(imgURL, function(data) {
                // Get the SVG tag, ignore the rest
                var $svg = jQuery(data).find('svg');

                // Add replaced image's ID to the new SVG
                if(typeof imgID !== 'undefined') {
                    $svg = $svg.attr('id', imgID);
                }
                // Add replaced image's classes to the new SVG
                if(typeof imgClass !== 'undefined') {
                    $svg = $svg.attr('class', imgClass+' replaced-svg');
                }

                // Remove any invalid XML tags as per http://validator.w3.org
                $svg = $svg.removeAttr('xmlns:a');

                // Replace image with new SVG
                $img.replaceWith($svg);

            }, 'xml');
        });
        
        
        /**********OWL HOME SLIDER**********/
        var owl = $("#home-slide");             
          owl.owlCarousel({
            navigation : true,
            singleItem : true,
            transitionStyle : "fadeUp"
          });
          
          //************Scroll Down Btn************//
            $(".scroll-btn").on("click", function(){
                var section = $(this).attr("data-section-id");
                $('html, body').animate({scrollTop:$('#' + section).offset().top-0}, 750);    
                return false;
            });
            
            $(document).ready(function() {
              var owl = $('.owl-carousel2');
              owl.owlCarousel({
                margin: 10,
                nav: true,
                loop: true,
                autoPlay : true,
                itemsMobile: [479, 2],
                responsive: {
                  0: {
                    items: 2
                  },
                  600: {
                    items: 3
                  },
                  1000: {
                    items: 5
                  }
                }
              })
            })
            
            
            $(document).ready(function() {
              var owl = $('.owl-carousel3');
              owl.owlCarousel({
                margin: 10,
                nav: true,
                singleItem : true,
                loop: true,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 1
                  },
                  1000: {
                    items: 1
                  }
                }
              })
            });
        
        /********Tooltips*********/
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
        
        // Tooltips
        $('.tip').each(function () {
            $(this).tooltip(
            {
                html: true,
                title: $('#' + $(this).data('tip')).html(),
            });
        });
        
        
        
/************LEFT FILTER MOBILE TOGGLE************/
  $(document).ready(function(){
   $('.left-section').height($(window).height());
   $('.blackBgMobile').height($(window).height());
   $(window).resize(function() {
     var bodyheight = $(window).height();
     $(".left-section").height(bodyheight);
     $(".blackBgMobile").height(bodyheight);
   });
   
   
   $("#showFilter").click(function(){
    $(".left-section").stop().animate({"left" : "0px"});
    $(".blackBgMobile").css("opacity" , "0.4");
    $("body").css("overflow" , "hidden");
    $(".blackBgMobile").css("display" , "block");
   });
   
   $("#closeFilter, .blackBgMobile").click(function(){
    $(".left-section").stop().animate({"left" : "-100%"});
    $("body").css("overflow" , "auto");
    $(".blackBgMobile").css("display" , "none");
   });
   
  });
        
/**** expand search***/

$(document).ready(function(){
            var submitIcon = $('.searchbox-icon');
            var inputBox = $('.searchbox-input');
            var searchBox = $('.searchbox');
            var isOpen = false;
            submitIcon.click(function(){
                if(isOpen == false){
                    searchBox.addClass('searchbox-open');
                    inputBox.focus();
                    isOpen = true;
                } else {
                    searchBox.removeClass('searchbox-open');
                    inputBox.focusout();
                    isOpen = false;
                }
            });  
             submitIcon.mouseup(function(){
                    return false;
                });
            searchBox.mouseup(function(){
                    return false;
                });
            $(document).mouseup(function(){
                    if(isOpen == true){
                        $('.searchbox-icon').css('display','block');
                        submitIcon.click();
                    }
                });
        });
            function buttonUp(){
                var inputVal = $('.searchbox-input').val();
                inputVal = $.trim(inputVal).length;
                if( inputVal !== 0){
                    $('.searchbox-icon').css('display','none');
                } else {
                    $('.searchbox-input').val('');
                    $('.searchbox-icon').css('display','block');
                }
            }        
    <?php echo '</script'; ?>
>
<?php }
}
