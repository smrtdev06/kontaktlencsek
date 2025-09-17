<?php
/* Smarty version 3.1.30, created on 2021-02-08 11:40:07
  from "/var/www/vhosts/kontaktlencsek.hu/ujdesign/sablonkod/termek_oldal/egy_termek_nezet.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60212317995952_00604450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c96885752867abc489a220b146dede98a4f02c6' => 
    array (
      0 => '/var/www/vhosts/kontaktlencsek.hu/ujdesign/sablonkod/termek_oldal/egy_termek_nezet.tpl',
      1 => 1612784397,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:felso_banner_alatt.tpl' => 1,
    'file:new/akcios_termekek.tpl' => 1,
  ),
),false)) {
function content_60212317995952_00604450 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="js/jquery.min.js"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="text/javascript">

$(function() {

$('[data-toggle="tooltip"]').tooltip();
    
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
<?php echo '<script'; ?>
 type="text/javascript">
//Facebook Share
window.fbAsyncInit = function(){
FB.init({
    appId: 'xxxxx', status: true, cookie: true, xfbml: true }); 
};
(function(d, debug){var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
    if(d.getElementById(id)) {return;}
    js = d.createElement('script'); js.id = id; 
    js.async = true;js.src = "//connect.facebook.net/en_US/all" + (debug ? "/debug" : "") + ".js";
    ref.parentNode.insertBefore(js, ref);}(document, /*debug*/ false));
function postToFeed(title, desc, url, image){
var obj = {method: 'feed',link: url, picture: 'http://szemuvegek.dev/termekkepek/'+image,name: title,description: desc};
function callback(response){}
FB.ui(obj, callback);
}



$('.btnShare').click(function(){
elem = $(this);
postToFeed(elem.data('title'), elem.data('desc'), elem.prop('href'), elem.data('image'));

return false;
});


    




<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
//Twitter popup Sharing Code
function tweetCurrentPage()
    { window.open("https://twitter.com/share?url="+escape(window.location.href)+"&text="+document.title, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false; }
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
</section>
<br clear="all" />
<?php $_smarty_tpl->_subTemplateRender("file:felso_banner_alatt.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



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
" class="img-responsive" width="410">
        
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
          <?php if ($_smarty_tpl->tpl_vars['egy_termek']->value['kat_id'] < 11) {?><h1 itemprop="name" class="product_title"> Szem adatok </h1><?php }?>
          <ul class="frame-selection clearfix mob_none">

            <li>&nbsp;</li>
            <!--Itt: <?php echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'];?>
-->
            <?php if (termek_jellemzo($_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],2)) {?>
                <li><strong>Dioptria (PWR): <a data-toggle="tooltip" data-html="true" title="A receptjén az első oszlopban feltűntetett számérték, mely lehet „+” és „-” előjelű. Amennyiben nincs előjel feltűntetve, az érték „+”. Áraink és a rövid szállítási idő csak a listában felűntetett dioptriákra vonatkozik, ennél nagyobb illetve kisebb paraméterek esetén kérje egyedi ájánlatunkat !"><i class="fa fa-question-circle" aria-hidden="true"></i></a></strong>
                </li>
            <?php }?>
            <?php if (termek_jellemzo($_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],3)) {?>
                <li> <strong><?php echo $_smarty_tpl->tpl_vars['jellemzok']->value[2]['jellnev'];?>
: <a data-toggle="tooltip" data-html="true" title="A receptjén a második oszlopban feltűntetett dioptria, cylinderes (torikus) érték. Lehet  „+” és „-” előjelű, a rendeléskor ezt pontosan kell megadni! Amennyiben az Ön receptjén nincs ilyen érték, úgy ne töltse ki ezt a részt. Áraink és a rövid szállítási idő csak a listában felűntetett cylinder értékekre vonatkozik, ennél nagyobb illetve kisebb paraméterek esetén kérje egyedi ájánlatunkat !"><i class="fa fa-question-circle" aria-hidden="true"></i></a> </strong> </li>
            <?php }?>
            <?php if (termek_jellemzo($_smarty_tpl->tpl_vars['egy_termek']->value['termek_id'],1)) {?>
                <li> <strong><?php echo $_smarty_tpl->tpl_vars['ford']->value['atmero'];?>
: <!-- (?) eltüntetve mert nem volt hozzá szöveg <i class="fa fa-question-circle" aria-hidden="true"></i></a> --> </strong> </li>
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
    

	<!--         ITT A HIBA -->
	
	
	
  </div>
  <div class="col-xs-12 col-sm-4 col-lg-4">
    <div class="summary">
        <div class="brandLogo"><img src="images/brand-logo/<?php echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_gyarto'];?>
.png" alt="" class="img-responsive" /></div>
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
          <div class="ws-product-social-icon"> <span>Megosztás:</span> <a class="fa fa-twitter fa-lg" href="javascript:tweetCurrentPage()" onclick="woss_twitterSharer()" target="_blank"><i class="facebook-sharer" aria-hidden="true"></i></a> <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['sitenev']->value;
echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_alnev_hu'];?>
" target="_blank"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a> <a class="pinterest-sharer" href="http://pinterest.com/pin/create/link/?url=<?php echo '<?php ';?>echo urlencode($actual_link);<?php echo '?>';?>&description=" target="_blank"" ><i class="fa fa-pinterest fa-lg" aria-hidden="true"></i></a> </div>
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

    
    <?php }
}
