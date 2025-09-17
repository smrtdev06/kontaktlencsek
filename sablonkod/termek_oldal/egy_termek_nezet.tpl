<script src="js/jquery.min.js"></script>

{literal}
<script type="text/javascript">

$(function() {

$('[data-toggle="tooltip"]').tooltip();
    
// első sor Görbület érték
$("#jell1_1").change(function(){          
   
    var valasztott = $("#jell1_1 option:selected").text();

    var akt_termek = {/literal}{$egy_termek.termek_id}{literal};
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

    var akt_termek2 = {/literal}{$egy_termek.termek_id}{literal};
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
            (f.elements['mennyiseg_1'].value != 0 && ({/literal}{$jell_javascript1}{literal} ) ) || (f.elements['mennyiseg_2'].value != 0 && ({/literal}{$jell_javascript2}{literal} ) )
        ){
            alert('{/literal}{$ford.termek_szukseges_szoveg}{literal}');
            return false;
        } else {
            return true;
        }
    
    }
</script>
<script type="text/javascript">
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


    




</script>
<script type="text/javascript">
//Twitter popup Sharing Code
function tweetCurrentPage()
    { window.open("https://twitter.com/share?url="+escape(window.location.href)+"&text="+document.title, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false; }
</script>
{/literal}

<section class="page-indicator">
  <ul class="breadcrumbs pull-left">
    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"> <a href="{$sitenev}" itemscope="" itemprop="item" itemtype="http://schema.org/ListItem"> <span itemprop="name">Főoldal</span> </a>
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
{include 'felso_banner_alatt.tpl'}


<section class="product-container clearfix product-details" >
    <form name="urlap" class="cart" method="post" action="{$filenev}" enctype="multipart/form-data" onsubmit="return urlap_ellenorzes(this);">
    
    <input type="hidden" name="q" value="{$alnev.kosar}">
    <input type="hidden" name="do" value="berak">
    <input type="hidden" name="termek_id" value="{$egy_termek.termek_id}">
    <input type="hidden" name="termek_nev" value="{$egy_termek.termek_nev}">
    <input type="hidden" name="termek_kep" value="{$egy_termek.termek_kep}">
    <input type="hidden" name="termek_alnev" value="{$egy_termek.termek_alnev}">
    <input type="hidden" name="termek_csoport" value="{$egy_termek.termek_csoport}">
    <input type="hidden" name="termek_ar" value="{if $egy_termek.termek_akcios_ar != 0} {$egy_termek.termek_akcios_ar} {else} {$egy_termek.termek_ar} {/if}">
    <input type="hidden" name="termek_suly" value="{$egy_termek.termek_suly}">
    <input type="hidden" name="termek_szallitas" value="{$egy_termek.termek_szallitas}">
    
  <div class="col-xs-12 col-sm-8 col-lg-8 left-section-product">
   <h1 itemprop="name" class="product_title"> {$egy_termek.termek_nev} <small> 
    {if $egy_termek.termek_kat_id >=3 and $egy_termek.termek_kat_id<=11 } kontaktlencse{/if}
    {if $egy_termek.termek_kat_id ==15} napszemüveg{/if}
    {if $egy_termek.termek_kat_id ==16} szemüvegkeret{/if}
    {if $egy_termek.termek_kat_id ==12 } ápolószer{/if}
    {if $egy_termek.termek_kat_id ==1300 } szemcsepp{/if}  <br>
   <!--<span>Napszemüveg</span>--></small></h1>
   <!--<ul class="small-pics">
   <li><a href="#"><img src="images/big-product.png"></a></li>
   <li><a href="#"><img src="images/big-product.png"></a></li>
   <li><a href="#"><img src="images/big-product.png"></a></li>
   <li><a href="#"><img src="images/big-product.png"></a></li>
   </ul>-->
   
    <div align="center">
	    
        <img src="{if $egy_termek.termek_csoport==3}{$kepsrc2}{else}{$kepsrc}{/if}{$egy_termek.termek_kep}" class="img-responsive" width="410">
        
    </div>
    {*
	<br>
	<font color="red"><center>Kedves Ügyfeleink a termék kiszállítás és az ügyfélszolgálat 2018. december 22-től 2019. január 1-ig szünetel. Nyitás: 2019. január 2.</center></font>
    <br>*}
	
    <!--
    <div class="cases">
        <a href="#1" data-toggle="modal" data-target="#myModal"><img src="{if $egy_termek.termek_csoport==3}{$kepsrc2}{else}{$kepsrc}{/if}{$egy_termek.termek_kep}" alt="" class="img-responsive" /></a>
    </div>
    -->
    
    <div class="mobile-scroll">
        <div class="step1">
          {if $egy_termek.kat_id < 11}<h1 itemprop="name" class="product_title"> Szem adatok </h1>{/if}
          <ul class="frame-selection clearfix mob_none">

            <li>&nbsp;</li>
            <!--Itt: {$egy_termek.termek_id}-->
            {if termek_jellemzo($egy_termek.termek_id,2)}
                <li><strong>Dioptria (PWR): <a data-toggle="tooltip" data-html="true" title="A receptjén az első oszlopban feltűntetett számérték, mely lehet „+” és „-” előjelű. Amennyiben nincs előjel feltűntetve, az érték „+”. Áraink és a rövid szállítási idő csak a listában felűntetett dioptriákra vonatkozik, ennél nagyobb illetve kisebb paraméterek esetén kérje egyedi ájánlatunkat !"><i class="fa fa-question-circle" aria-hidden="true"></i></a></strong>
                </li>
            {/if}
            {if termek_jellemzo($egy_termek.termek_id,3) }
                <li> <strong>{$jellemzok[2].jellnev}: <a data-toggle="tooltip" data-html="true" title="A receptjén a második oszlopban feltűntetett dioptria, cylinderes (torikus) érték. Lehet  „+” és „-” előjelű, a rendeléskor ezt pontosan kell megadni! Amennyiben az Ön receptjén nincs ilyen érték, úgy ne töltse ki ezt a részt. Áraink és a rövid szállítási idő csak a listában felűntetett cylinder értékekre vonatkozik, ennél nagyobb illetve kisebb paraméterek esetén kérje egyedi ájánlatunkat !"><i class="fa fa-question-circle" aria-hidden="true"></i></a> </strong> </li>
            {/if}
            {if termek_jellemzo($egy_termek.termek_id,1) }
                <li> <strong>{$ford.atmero}: <!-- (?) eltüntetve mert nem volt hozzá szöveg <i class="fa fa-question-circle" aria-hidden="true"></i></a> --> </strong> </li>
            {/if}
            
            {if termek_jellemzo($egy_termek.termek_id,4) }
                <li> <strong>{$jellemzok[3].jellnev}: <a data-toggle="tooltip" data-html="true" title="A cylinderhez kapcsolódó jelölés, a pontos fokot adja meg. Nem mindig írják ki számmal, a recept tetején található skáláról lehet leolvasni az értéket. Amennyiben az Ön receptjén nincs ilyen érték, úgy ne töltse ki ezt a részt."><i class="fa fa-question-circle" aria-hidden="true"></i></a></strong>
                </li>
            {/if}
            {if termek_jellemzo($egy_termek.termek_id,5) }
                <li>
                    <strong>{$jellemzok[4].jellnev}<i class="fa fa-question-circle" aria-hidden="true"></i></a> </strong>
                </li>
            {/if}
            
            {if termek_jellemzo($egy_termek.termek_id,6) }
                <li>
                    <strong>{$jellemzok[5].jellnev}<i class="fa fa-question-circle" aria-hidden="true"></i></a> </strong>
                </li>
            {/if}
            
            {if termek_jellemzo($egy_termek.termek_id,7) }
                <li> <strong>{$jellemzok[6].jellnev}: <a data-toggle="tooltip" data-html="true" title="A távoli és közeli dioptria közötti különbséget jelöli. Csak a bifokális és multifokális (progresszív) szemüvegek készítésénél kell kitölteni."><i class="fa fa-question-circle" aria-hidden="true"></i></a></strong>
                </li>
            {/if}
            
            <li><strong>{$ford.mennyiseg}</strong></li>
          </ul>


          <ul class="frame-selection clearfix">

          
          <li>{if $egy_termek.kat_id<12 && $egy_termek.kat_id>2} {$ford.bal_szem} {/if}</li>
            
            
            {if termek_jellemzo($egy_termek.termek_id,2)}
            <li>
            <strong class="mob-ver">{$jellemzok[1].jellnev}: <a data-toggle="tooltip" data-html="true" title="A receptjén az első oszlopban feltűntetett számérték, mely lehet „+” és „-” előjelű. Amennyiben nincs előjel feltűntetve, az érték „+”. Áraink és a rövid szállítási idő csak a listában felűntetett dioptriákra vonatkozik, ennél nagyobb illetve kisebb paraméterek esetén kérje egyedi ájánlatunkat !"><i class="fa fa-question-circle" aria-hidden="true"></i></a></strong> 
            
                {if termek_jellemzo($egy_termek.termek_id,2) }
                    {jellemzok jell="2" termek_id=$egy_termek.termek_id jid=1}
                {/if}
            </li>
            {/if}
            
            {if termek_jellemzo($egy_termek.termek_id,3) }
            <li>
            <strong class="mob-ver">{$jellemzok[2].jellnev}: <a data-toggle="tooltip" data-html="true" title="A receptjén a második oszlopban feltűntetett dioptria, cylinderes (torikus) érték. Lehet  „+” és „-” előjelű, a rendeléskor ezt pontosan kell megadni! Amennyiben az Ön receptjén nincs ilyen érték, úgy ne töltse ki ezt a részt. Áraink és a rövid szállítási idő csak a listában felűntetett cylinder értékekre vonatkozik, ennél nagyobb illetve kisebb paraméterek esetén kérje egyedi ájánlatunkat !"><i class="fa fa-question-circle" aria-hidden="true"></i></a> </strong>
            
                {if termek_jellemzo($egy_termek.termek_id,3) }
                    {jellemzok jell="3" termek_id=$egy_termek.termek_id jid=1}
                {/if}
            </li>
            {/if}
            
            {if termek_jellemzo($egy_termek.termek_id,1) }
            <li>
            <strong class="mob-ver">{$ford.atmero}: </strong>
                {if termek_jellemzo($egy_termek.termek_id,1) }
                    {jellemzok jell="1" termek_id=$egy_termek.termek_id jid=1}
                {/if}
            </li>
            {/if}
            
            {if termek_jellemzo($egy_termek.termek_id,4) }
            <li>
            <strong class="mob-ver">{$jellemzok[3].jellnev}: <a data-toggle="tooltip" data-html="true" title="A cylinderhez kapcsolódó jelölés, a pontos fokot adja meg. Nem mindig írják ki számmal, a recept tetején található skáláról lehet leolvasni az értéket. Amennyiben az Ön receptjén nincs ilyen érték, úgy ne töltse ki ezt a részt."><i class="fa fa-question-circle" aria-hidden="true"></i></a></strong>
                {if termek_jellemzo($egy_termek.termek_id,4) }
                    {jellemzok jell="4" termek_id=$egy_termek.termek_id jid=1}
                {/if}
            </li>
            {/if}
            
            {if termek_jellemzo($egy_termek.termek_id,5) }
            <li>
            <strong class="mob-ver">{$jellemzok[4].jellnev}: </strong>
                {if termek_jellemzo($egy_termek.termek_id,5) }
                    {jellemzok jell="5" termek_id=$egy_termek.termek_id jid=1}
                {/if}
            </li>
            {/if}
            
            {if termek_jellemzo($egy_termek.termek_id,6) }
            <li>
            <strong class="mob-ver">{$jellemzok[5].jellnev}: <a data-toggle="tooltip" data-html="true" title="A cylinderhez kapcsolódó jelölés, a pontos fokot adja meg. Nem mindig írják ki számmal, a recept tetején található skáláról lehet leolvasni az értéket. Amennyiben az Ön receptjén nincs ilyen érték, úgy ne töltse ki ezt a részt."><i class="fa fa-question-circle" aria-hidden="true"></i></a></strong>
                {if termek_jellemzo($egy_termek.termek_id,6) }
                    {jellemzok jell="6" termek_id=$egy_termek.termek_id jid=1}
                {/if}
            </li>
            {/if}
            
            {if termek_jellemzo($egy_termek.termek_id,7) }
            <li>
            <strong class="mob-ver">{$jellemzok[6].jellnev}: </strong>
                {if termek_jellemzo($egy_termek.termek_id,7) }
                    {jellemzok jell="7" termek_id=$egy_termek.termek_id jid=1}
                {/if}
            </li>
            {/if}
            
            <li>
                <strong class="mob-ver">{$ford.mennyiseg}</strong>
                <select name="mennyiseg[]" class="form-control select-block" id="mennyiseg_1">          
                {mennyiseg db="20"}
              </select>
            </li>
          </ul>
          
          
          
          {if $egy_termek.kat_id<12 && $egy_termek.kat_id>2}
          <ul class="frame-selection clearfix">

            <li>{$ford.jobb_szem}</li>
            
            {if termek_jellemzo($egy_termek.termek_id,2)}
            <li>
            <strong class="mob-ver">{$jellemzok[1].jellnev}: <a data-toggle="tooltip" data-html="true" title="A receptjén az első oszlopban feltűntetett számérték, mely lehet „+” és „-” előjelű. Amennyiben nincs előjel feltűntetve, az érték „+”. Áraink és a rövid szállítási idő csak a listában felűntetett dioptriákra vonatkozik, ennél nagyobb illetve kisebb paraméterek esetén kérje egyedi ájánlatunkat !"><i class="fa fa-question-circle" aria-hidden="true"></i></a></strong> 
                {if termek_jellemzo($egy_termek.termek_id,2) }
                    {jellemzok jell="2" termek_id=$egy_termek.termek_id jid=2}
                {/if}
            </li>
            {/if}
            
            {if termek_jellemzo($egy_termek.termek_id,3) }
            <li>
            <strong class="mob-ver">{$jellemzok[2].jellnev}: <a data-toggle="tooltip" data-html="true" title="A receptjén a második oszlopban feltűntetett dioptria, cylinderes (torikus) érték. Lehet  „+” és „-” előjelű, a rendeléskor ezt pontosan kell megadni! Amennyiben az Ön receptjén nincs ilyen érték, úgy ne töltse ki ezt a részt. Áraink és a rövid szállítási idő csak a listában felűntetett cylinder értékekre vonatkozik, ennél nagyobb illetve kisebb paraméterek esetén kérje egyedi ájánlatunkat !"><i class="fa fa-question-circle" aria-hidden="true"></i></a> </strong>
                {if termek_jellemzo($egy_termek.termek_id,3) }
                    {jellemzok jell="3" termek_id=$egy_termek.termek_id jid=2}
                {/if}
            </li>
            {/if}
            
            {if termek_jellemzo($egy_termek.termek_id,1) }
            <li>
            <strong class="mob-ver">{$ford.atmero}: </strong>
                {if termek_jellemzo($egy_termek.termek_id,1) }
                    {jellemzok jell="1" termek_id=$egy_termek.termek_id jid=2}
                {/if}
            </li>
            {/if}
            
            {if termek_jellemzo($egy_termek.termek_id,4) }
            <li>
            <strong class="mob-ver">{$jellemzok[3].jellnev}: <a data-toggle="tooltip" data-html="true" title="A cylinderhez kapcsolódó jelölés, a pontos fokot adja meg. Nem mindig írják ki számmal, a recept tetején található skáláról lehet leolvasni az értéket. Amennyiben az Ön receptjén nincs ilyen érték, úgy ne töltse ki ezt a részt."><i class="fa fa-question-circle" aria-hidden="true"></i></a></strong>
                {if termek_jellemzo($egy_termek.termek_id,4) }
                    {jellemzok jell="4" termek_id=$egy_termek.termek_id jid=2}
                {/if}
            </li>
            {/if}
            
            {if termek_jellemzo($egy_termek.termek_id,5) }
            <li>
            <strong class="mob-ver">{$jellemzok[4].jellnev}: </strong>
                {if termek_jellemzo($egy_termek.termek_id,5) }
                    {jellemzok jell="5" termek_id=$egy_termek.termek_id jid=2}
                {/if}
            </li>
            {/if}
            
            {if termek_jellemzo($egy_termek.termek_id,6) }
            <li>
            <strong class="mob-ver">{$jellemzok[5].jellnev}: <a data-toggle="tooltip" data-html="true" title="A távoli és közeli dioptria közötti különbséget jelöli. Csak a bifokális és multifokális (progresszív) szemüvegek készítésénél kell kitölteni."><i class="fa fa-question-circle" aria-hidden="true"></i></a></strong>
                {if termek_jellemzo($egy_termek.termek_id,6) }
                    {jellemzok jell="6" termek_id=$egy_termek.termek_id jid=2}
                {/if}
            </li>
            {/if}
            
            {if termek_jellemzo($egy_termek.termek_id,7) }
            <li>
            <strong class="mob-ver">{$jellemzok[6].jellnev}: </strong>
                {if termek_jellemzo($egy_termek.termek_id,7) }
                    {jellemzok jell="7" termek_id=$egy_termek.termek_id jid=2}
                {/if}
            </li>
            {/if}
            
            <li>
                <strong class="mob-ver">{$ford.mennyiseg}</strong>
                <select name="mennyiseg[]" class="form-control select-block" id="mennyiseg_2">          
                {mennyiseg db="20"}
              </select>
            </li>
            
          </ul>
          {/if}

          
          
          
          
          
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
        <div class="brandLogo"><img src="images/brand-logo/{$egy_termek.termek_gyarto}.png" alt="" class="img-responsive" /></div>
	  <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
        <p class="price"><span style="display: inline-block; padding: 10px 15px; background: #18AAC9; font-size: 18px; color:#fff; border:2px solid #0f9cba; ">
         {if $egy_termek.termek_akcios_ar>0}{$egy_termek.termek_akcios_ar|arformat}{else}{$egy_termek.termek_ar|arformat}{/if}</span>
         {*if $egy_termek.termek_akcios_ar>0 && $egy_termek.termek_akcios_ar<$egy_termek.termek_ar}<span>Régi ár : <small>{$egy_termek.termek_ar|arformat}</small></span>{/if*}
        </p>
        <br />
        <button id="addcart" name="addcart" type="submit" class="single_add_to_cart_button button alt">{$ford.kosarba}</button>
        <!--<div class="clearfix">&nbsp;</div>-->
       <p><strong>Gyártó:</strong> {$egy_termek.termek_gyarto} </p>
       <p><strong>Típus:</strong> {$egy_termek.termek_tipus} </p>
       <p><strong>Kiszerelés: </strong> {$egy_termek.termek_kiszereles} </p>
       <p><strong>Szállítási határidő: </strong> {$egy_termek.termek_szallitas} </p>
      </div>
      <div itemprop="description" class="description">
      <strong>Leírás:</strong><br>
        <p>{$egy_termek.termek_megjegyzes}</p>
      </div>
      
      <!-- Social Links -->
      <div class="ws-product-description">
          <div class="ws-product-social-icon"> <span>Megosztás:</span> <a class="fa fa-twitter fa-lg" href="javascript:tweetCurrentPage()" onclick="woss_twitterSharer()" target="_blank"><i class="facebook-sharer" aria-hidden="true"></i></a> <a href="https://www.facebook.com/sharer/sharer.php?u={$sitenev}{$egy_termek.termek_alnev_hu}" target="_blank"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a> <a class="pinterest-sharer" href="http://pinterest.com/pin/create/link/?url=<?php echo urlencode($actual_link);?>&description=" target="_blank"" ><i class="fa fa-pinterest fa-lg" aria-hidden="true"></i></a> </div>
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
        <h4 class="modal-title" id="myModalLabel">{$egy_termek.termek_nev}</h4>
      </div>
      <div class="modal-body">
        <center><img src="{$kepsrc}{$egy_termek.termek_kep}" alt="" class="img-responsive" /></center>
        <p>{$egy_termek.termek_megjegyzes}</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Bezár</button>
      </div>
    </div>
  </div>
</div>
    
    {include file="new/akcios_termekek.tpl"}
    
    
