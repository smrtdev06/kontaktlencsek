<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>{$title}</title>
    <meta http-equiv="keywords" content="{$keywords}" />
    <meta http-equiv="description" content="{$description}" />
    <meta http-equiv="imagetoolbar" content="no" />
    <link rel="shortcut icon" href="favicon.ico" />
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <script type="text/javascript" language="javascript" src="allscripts.js"></script>

    <script type='text/javascript' src="/bootstrap/dist/js/bootstrap.min.js"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/offcanvas.css" rel="stylesheet">
    
    <link href="css/style.css" rel="stylesheet" type="text/css" />
{literal}
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NCQLVTG');</script>
<!-- End Google Tag Manager -->

{/literal}
</head>

<body>

<nav class="navbar navbar-inverse">
      <div class="container-fluid">
      
        <div class="navbar-header">
        <a class="navbar-brand" href="{$sitenev}"><img alt="Lencsék.hu" src="http://lencsek.hu/css/img/logo.png" style="padding-left:15px;"></a>
      
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Navigáció</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        
        
          
          <form class="navbar-form" action="{$sitenev}{$alnev.termeklista}">
            <div class="form-group">
              <input name="keres" type="text" class="form-control" placeholder="Kulcsszó">
            </div>
            <button type="submit" class="btn btn-default">Keres</button>
          
          
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{$alnev.kosar}">{if $kosar.db>0}{$kosar.db}db{/if}<span class="glyphicon glyphicon-shopping-cart"></span> {$kosar.osszesen|arformat}</a></li>
          
            {if $user}
              <li><a href="{$sitenev}rendelesek" class="Button2" style="color:#ffffff;">Korábbi rendeléseim</a></li>
              <!--   class="Button2" style="color:#ffffff;"-->
            {else}
              <li><a href="{$sitenev}belepes">Belépés</a></li>
            {/if}
          </ul>
            
          </form>
          
          
        
          
          
          
        
          <ul class="nav navbar-nav">
            <li><a href="{$sitenev}{$alnev.osszes_termek}">{$ford.osszes_termek}</a></li>
            <li><a href="{$sitenev}{$alnev.szallitas_es_fizetes}">{$ford.szallitas_es_fizetes}</a></li>
            <li><a href="{$sitenev}{$alnev.altalanos_tudnivalok}">{$ford.altalanos_tudnivalok}</a></li>
            <li><a href="{$sitenev}{$alnev.kapcsolat}">{$ford.kapcsolat}</a></li>
            <li><a href="http://szemuvegek.hu">Szemüvegek.hu</a></li>
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{$ford.nyelv} <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li><a href="{$sitenev}?nyelv=en">English</a></li>
              <li><a href="{$sitenev}?nyelv=hu">Magyar</a></li>
              </ul>
            </li>
            
            {if $user}
                <li><a href="{$sitenev}{$alnev.kilepes}">{$ford.kilepes}</a></li>
            {/if}
            
            
            
            <!--
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Több termék <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li><a href="#contact">Olvasószemüvegek</a></li>
              <li><a href="#contact">Kiegészítők</a></li>
              <li><a href="http://lencsek.hu">Kontaktlencsék</a></li>
              <li><a href="http://szepulj.hu">Szépülj.hu</a></li>
                
                
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              
              </ul>
            </li>
            -->
          </ul>
          
          
          
          
          
          
          
          
          
        </div><!--/.nav-collapse -->
      </div>
    </nav>




{literal}
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NCQLVTG"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<script language="javascript" type="text/javascript">
function hirlevel_ellenorzes(f) {
    ok = 1;

    if( f.elements["tag_email"].value == "" ||
        f.elements["tag_nev"].value == "" )
    {
        ok = 0;
        uzenet = '{/literal}{$ford.hianyzo_adatok}{literal}';
    }   
    
    if( ok == 0 ) {
        alert(uzenet);
        return false;
   } else {
        return true;
   }
}

</script>

<script src="css/tooltip.js" type="text/javascript"></script>
{/literal}

<div id="bg" class="container-fluid">

    <div id="bg2" class="row row-offcanvas row-offcanvas-left">

    
    
      <div class="col-xs-6 col-sm-2 sidebar-offcanvas" id="sidebar">
        
        
        <div id="left-mod" height="100%" width="105">
      
            <div class="left-menu">
              <h2 class="menu-title">{$ford.kontaktlencse_gyartok}</h2>
              <p> {foreach from=$gyartok item=egy_gyarto} <a href="{$egy_gyarto.gyarto_alnev}" alt="{$egy_gyarto.gyarto_db} db" {if $q==$egy_gyarto.gyarto_alnev}class="item_active"{/if}>{$egy_gyarto.gyarto_nev}</a><br />
                {/foreach}</p>
            </div>
        
            
            <div class="left-menu">
              <h2 class="menu-title">{$ford.kontaktlencse_tipusok}</h2>
              <p> {foreach from=$kontaktlencsek item=egy_kat} <a href="{$egy_kat.kat_alnev}" {if $q==$egy_kat.kat_alnev}class="item_active"{/if}>{$egy_kat.kat_nev}</a><br />
                {/foreach}</p>
            </div>
        
            
            <div class="left-menu">
              <h2 class="menu-title">{$ford.kiegeszitok}</h2>
              <p> {foreach from=$kiegeszitok item=egy_kat} <a href="{$egy_kat.kat_alnev}" {if $q==$egy_kat.kat_alnev}class="item_active"{/if}>{$egy_kat.kat_nev}</a><br />
                {/foreach}</p>
            </div>
        
        
            <div class="left-menu">
              <h2 class="menu-title">{$ford.napszemuvegek}</h2>
              <p> 
              {foreach from=$gyartok2 item=egy_gyarto} 
                {if $egy_gyarto.gyarto_id > 13 && !$tobbmarka1}
                    {assign var="tobbmarka1" value="1"}
                    <div id="tobb_marka1" style="display: none;">
                {/if}
                
              <a href="{$egy_gyarto.gyarto_alnev}&tcs=napszemuveg" {if $q==$egy_gyarto.gyarto_alnev and $tcs=="napszemuveg"}class="item_active"{/if}>{$egy_gyarto.gyarto_nev} {if !$tobbmarka1}napszemüveg{/if}</a><br />
              {/foreach}
                
                {if $tobbmarka1}</div>{/if}
                </p>
                
                <div id="tobb_marka_gomb1" style="padding-left:10px;">
                <p>
                    <a style="cursor:pointer;" onclick="javascript:document.getElementById('tobb_marka1').style.display = 'block';document.getElementById('tobb_marka_gomb1').style.display = 'none';document.getElementById('visszacsuk1').style.display = 'block';document.getElementById('balreklam').style.display = 'none';document.getElementById('tobb_marka2').style.display = 'none';document.getElementById('tobb_marka_gomb2').style.display = 'block';document.getElementById('visszacsuk2').style.display = 'none';">Több márka <img src="images/nyit.png" border="0"></a>
                </p>
              </div>
              <div id="visszacsuk1" style="padding-left:10px;display:none;">
                <p>
                    <a style="cursor:pointer;" onclick="javascript:document.getElementById('tobb_marka1').style.display = 'none';document.getElementById('tobb_marka_gomb1').style.display = 'block';document.getElementById('visszacsuk1').style.display = 'none';document.getElementById('balreklam').style.display = 'block';">Kevesebb márka <img src="images/csuk.png" border="0" align="bottom"></a>
                </p>
              </div>
              
            </div>
        
            <div class="left-menu">
              <h2 class="menu-title">{$ford.szemuvegkeretek}</h2>
              
              <p>          
              {foreach from=$gyartok2 item=egy_gyarto}
                {if $egy_gyarto.gyarto_id > 13 && !$tobbmarka2}
                    {assign var="tobbmarka2" value="1"}
                    <div id="tobb_marka2" style="display: none;">
                {/if}
                <a href="{$egy_gyarto.gyarto_alnev}&tcs=szemuvegkeret" {if $q==$egy_gyarto.gyarto_alnev and $tcs=="szemuvegkeret"}class="item_active"{/if}>{$egy_gyarto.gyarto_nev} {if !$tobbmarka2}szemüvegkeret{/if}</a><br />
                
              
              {/foreach}
              
                {if $tobbmarka2}</div>{/if}
              </p>
              
              <div id="tobb_marka_gomb2" style="padding-left:10px;">
                <p>
                    <a style="cursor:pointer;" onclick="javascript:document.getElementById('tobb_marka2').style.display = 'block';document.getElementById('tobb_marka_gomb2').style.display = 'none';document.getElementById('visszacsuk2').style.display = 'block';document.getElementById('balreklam').style.display = 'none';document.getElementById('tobb_marka1').style.display = 'none';document.getElementById('tobb_marka_gomb1').style.display = 'block';document.getElementById('visszacsuk1').style.display = 'none';">Több márka <img src="images/nyit.png" border="0"></a>
                </p>
              </div>
              <div id="visszacsuk2" style="padding-left:10px;display:none;">
                <p>
                    <a style="cursor:pointer;" onclick="javascript:document.getElementById('tobb_marka2').style.display = 'none';document.getElementById('tobb_marka_gomb2').style.display = 'block';document.getElementById('visszacsuk2').style.display = 'none';document.getElementById('balreklam').style.display = 'block';">Kevesebb márka <img src="images/csuk.png" border="0" align="bottom"></a>
                </p>
              </div>
              
            </div>

        
            <!-- ÁRUKERESŐ.HU - PLEASE DO NOT MODIFY THE LINES BELOW -->
            <div id="balreklam" style="background: #fff; text-align: center; padding: 10px 0px 0px 0px; margin: 0 auto;">
            {if $oldal!="egy_termek"}
            <a title="2014-ben webshopunk I.helyezést ért el az Ország Boltja versenyen Szépségápolás és egészség kategóriában." href="orszagboltja"><img src="kepek/orszagboltja2014.png" alt="2014-ben webshopunk I.helyezést ért el az Ország Boltja versenyen Szépségápolás és egészség kategóriában." border="0"></a>
            <!-- http://www.orszagboltja.hu/nyerteseink -->
            {/if}
            
            <br /><br />
            <a title="Árukereső, a hiteles vásárlási kalauz" href="http://www.arukereso.hu/"><img src="http://image.arukereso.hu/trustedbadge/31632-150x74-9a24a16dac8c1c0773b7073d3946d681.png" alt="Árukereső, a hiteles vásárlási kalauz" style="border-style:none;" /></a>
            <br />
            
            <!--<br />
            <a href="https://www.facebook.com/FakARomain" target="_blank"><img src="http://kepek.lencse.hu/kepek/romain_fak.jpg" border="0"></a>
            -->
            </div>

        </div>
        
        
        
          <!--
          <div class="list-group">
            <a href="#" class="list-group-item active">Újdonságok</a>
            <a href="#" class="list-group-item">Látásvizsgálat</a>
            <a href="#" class="list-group-item">Akcióink</a>
            <a href="#" class="list-group-item">Márkák</a>
            <a href="#" class="list-group-item">Árkategóriák</a>
            <a href="#" class="list-group-item">Nemek</a>
            <a href="#" class="list-group-item">Anyagok</a>
          </div>
          -->
      </div><!--/.sidebar-offcanvas-->
        
        
        
        
        
      
        <div class="col-xs-12 col-sm-10" style="top:10px;">
          <p class="pull-left visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Navigáció</button>
          </p>

                {$uzenet}

                {if $oldal != $alnev.akcio}
                  <div align="center"> {include file="slideshow.tpl"} </div>
          
          
                  
                  <div id="top-icons">
                    <a class="bubi" href="javascript:void(0);" onmouseout="UnTip()" onmouseover="Tip('{$ford.atvetel_buborek}')">
                        <div id="ic-i-a">
                          <h2><img src="css/img/items_icon_active.gif" border="0" /> {$ford.ingyenes_atvetel}</h2>
                          <p>{$ford.atvetel_szoveg}</p>
                        </div>
                    </a>

                    <a class="bubi" href="javascript:void(0);" onmouseout="UnTip()" onmouseover="Tip('{$ford.szallitas_buborek}')">
                        <div id="ic-i-sz">
                          <h2><img src="css/img/items_icon_active.gif" border="0" /> {$ford.ingyenes_szallitas}</h2>
                          <p>{$ford.szallitas_szoveg}</p>
                        </div>
                    </a>

                    <a class="bubi" href="javascript:void(0);" onmouseout="UnTip()" onmouseover="Tip('{$ford.eredeti_buborek}')">
                        <div id="ic-cs-e">
                          <h2><img src="css/img/items_icon_active.gif" border="0" /> {$ford.csak_eredeti}</h2>
                          <p>{$ford.eredeti_szoveg}</p>
                        </div>
                    </a>

                    <a class="bubi" href="javascript:void(0);" onmouseout="UnTip()" onmouseover="Tip('{$ford.szakertoi_buborek}')">
                        <div id="ic-sz-h">
                          <h2><img src="css/img/items_icon_active.gif" border="0" /> {$ford.szakertoi_hatter}</h2>
                          <p>{$ford.szakertoi_szoveg}</p>
                        </div>
                    </a>

                  </div>
                {/if}
                  
            
                {include file="$tartalom"}
                  
        </div><!--/.col-xs-12.col-sm-9-->

  </div><!--/row-->

  
  

  
  
  
  

    <footer>
      <div id="footer">
      
      <div id="newsletter">
        <h2>{$ford.hirlevel_feliratkozas}</h2>
        <form id="form1" name="form1" method="post" action="{$sitenev}{$alnev.hirlevel}"  onsubmit="return hirlevel_ellenorzes(this);">
          <table id="newsletter_input" border="0">
            <tr>
              <td> {$ford.nev}:</td>
              <td>{$ford.email}:</td>
              <td></td>
            </tr>
            <tr>
              <td><input name="tag_nev" class="textfield" onfocus="formrule(this);" value="" size="20" type="text" /></td>
              <td><input name="tag_email" class="textfield" onfocus="formrule(this);" value="" size="20" type="text" /></td>
              <td><input name="go2" class="letter-button" value="{$ford.feliratkozas}" type="submit"/></td>
            </tr>
          </table>
        </form>
      </div>
      
      <div id="contact">
        <h2><a href="{$alnev.kapcsolat}" style="color:#C7C3C0;">{$ford.kapcsolat}</a></h2>
        <table border="0">
          <tr>
            <td><span class="cont-label">{$ford.telefon}:</span></td>
            <td><span class="number">06 20 288 4444</span></td>
          </tr>
          <tr>
            <td><span class="cont-label">{$ford.email}:</span></td>
            <td>
            <script TYPE="text/javascript">
                emailA='lencsek.hu';
                emailA=('office' + '@' + emailA);
                document.write('<a href="mailto:' + emailA + '">' + emailA + '</a>');
            </script>

            <noscript>
                <em>Email cím JavaScript-el védve.<br />
                Kérlek engedélyezd a JavaScript-et, hogy feltud venni velem a kapcsolatot.</em>
            </noscript>
            </td>
          </tr>
          <tr>
            <td><span class="cont-label">{$ford.web}:</span></td>
            <td><a href="http://www.lencsek.hu">www.lencsek.hu</a><br /></td>
          </tr>
        </table>
      </div>
      
      <div id="created">
        <h2>Állásajánlat</h2>
        <table border="0">
          <tr>
            <td><a href="http://www.o3optika.hu" target="_blank">www.o3optika.hu</a></td>
          </tr>
          <!-- 
          <tr>
            <td>{$ford.fejlesztes}: </td>
            <td align="right"><a href="http://websons.hu" target="_blank">websons.hu</a></td>
          </tr>
          -->
        </table>
      </div>
      
      </div>
    </footer>
    
  

<!--
<div style="position:fixed; right:0px; bottom:0px;">
<a href="http://szepulj.hu" target="_blank"><img src="http://szepulj.hu/kepek/szepulj1.png" border="0"></a>
</div>
-->

<!--
<div style="position:fixed; left:0px; bottom:0px;">
<a href="http://szemuvegek.hu" target="_blank"><img src="http://szemuvegek.hu//view/images/szemuvegek_logo.gif" border="0"></a>
</div>
-->

<!--
<script type="text/javascript" src="view/js/highslide.js"></script>
<link rel="stylesheet" type="text/css" href="view/css/highslide.css" />
<div style="position:fixed;right:0px;top:50%;">
<a href="/akcio" id="kuponkep">

<img src="images/polarizalt_logo.png" border="0"></a>
onclick="return hs.expand (this, &#123; wrapperClassName: 'wide-border'&#125;)"
</div>
-->

{if (!isset($smarty.cookies.cc1) && !isset($smarty.get.cc1)) }
{include file="nezetek/cookie_elfogadas.tpl"}
{/if}

{if $adm5 && $smarty.session.user == 75111 }
<div style="background-color:#ECD893;width:280px;height:700px;position:fixed;right:0px;top:0px;overflow:scroll;padding:4px;">
<table>

<tr><td colspan="2" bgcolor="#8080FF">Page : </td></tr>
<tr><td colspan="2">{$oldal}   </td></tr>
<!--
<tr><td colspan="2" bgcolor="#8080FF">Kosar : </td></tr>
<tr><td colspan="2">{$smarty.session.kosar|print_r}   </td></tr>
-->

</table>
<pre>
includes: {$inc_files|@tomb_fileba}
-----------------------------------
SESSION:
{$smarty.session|@tomb_fileba}
<!--
POST:
{$smarty.post|@tomb_fileba}
GET:
{$smarty.get|@tomb_fileba}
-->
</pre>

</div>
{/if}

{if !isset($smarty.cookies.hirl) }
    {include file="hirlevel_popup.tpl"}
{/if}

{$hibak}




<script src="/css/offcanvas.js"></script>

</body>
</html>