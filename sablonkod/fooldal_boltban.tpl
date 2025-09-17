<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{$title}</title>
    <meta http-equiv="keywords" content="{$keywords}" />
    <meta http-equiv="description" content="{$ford.leiras}" />
    <meta http-equiv="author" content="Web programming by Websons - http://www.websons.hu" />
    <meta http-equiv="imagetoolbar" content="no" />
    <link rel="shortcut icon" href="favicon.ico" />
    

    <script type='text/javascript' src='includes/jquery-1.9.1.js'></script>
    <script type="text/javascript" language="javascript" src="allscripts.js"></script>

    
    <link href="css/style.css" rel="stylesheet" type="text/css" />

</head>

<body>

{literal}
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

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/hu_HU/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script> 
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-7979749-2");
pageTracker._trackPageview();
} catch(err) {}</script> 


{/literal}


<div id="bg">
  <div id="main">
    
    <div id="heade">
    <!--
      <a href="{$sitenev}"><div id="toplogo"></div></a>
      <div id="lang_sel">
      <a onmouseover="Tip('Lencsék.hu oldalunkat elhagyja és átlép a szemüvegekkel foglalkozó Szemüvegek.hu oldalunkra.')" onmouseout="UnTip()" href="http://szemuvegek.hu" target="_blank">Szemüvegek.hu</a>&nbsp;&nbsp;|&nbsp;&nbsp;
      <a onmouseover="Tip('Lencsék.hu oldalunkat elhagyja és átlép a drogériai termékekkel foglalkozó Szépülj.hu oldalunkra.')" onmouseout="UnTip()" href="http://szepulj.hu" target="_blank">Szépülj.hu</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="{$sitenev}{$alnev.kapcsolat}">{$ford.kapcsolat}</a> <span class="separator">|</span> {$ford.nyelv} : {$nyelvki}</div>
      <div id="basket">
     
        <p id="basket-text"><span>{$kosar.db} db</span> {$ford.termek2} <span>{$kosar.osszesen} Ft</span> {$ford.ertekben}</p> <a href="{$sitenev}{$alnev.kosar}" class="body-link"><img src="css/img/basket.png" alt="{$ford.kosar}" title="{$ford.kosar}" /></a> 
      </div>
      
      <div id="topmenu">
        <ul>
          <li {if $oldal==""}class="active"{/if}><a href="{$sitenev}">{$ford.fooldal}</a></li>
          <li {if $oldal==$alnev.osszes_termek}class="active"{/if}><a href="{$sitenev}{$alnev.osszes_termek}">{$ford.osszes_termek}</a></li>
          <li {if $oldal==$alnev.szallitas_es_fizetes}class="active"{/if}><a href="{$sitenev}{$alnev.szallitas_es_fizetes}">{$ford.szallitas_es_fizetes}</a></li>
          <li {if $oldal==$alnev.altalanos_tudnivalok}class="active"{/if}><a href="{$sitenev}{$alnev.altalanos_tudnivalok}">{$ford.altalanos_tudnivalok}</a></li>
          {if $user}
          <li><a href="{$sitenev}{$alnev.kilepes}">{$ford.kilepes}</a></li>
          {/if}
        </ul>
      </div>
      
      <div id="topsearch">
        <form name="lencsek" id="lencsek" method="get" action="{$sitenev}">
          <label>{$ford.termekek} :&nbsp;
            <select name="q" class="prod-sel" onchange="document.lencsek.submit()">
              <option value="osszes_termek">{$ford.valassz_termeket}</option>
              
              
              
                      {foreach from=$termek_nevek item=egytermek}
                        
              
              
              <option value="{$egytermek.termek_alnev}" >{$egytermek.termek_nev}</option>
              
              
              
                      {/foreach}
                      
            </select>
          </label>
        </form>
      </div>
      -->  
    </div>
    
    
    <div id="bg2">
    
    
      <div id="left-mod" height="100%" width="105">
      <!--
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
          <p> {foreach from=$gyartok2 item=egy_gyarto} <a href="{$egy_gyarto.gyarto_alnev}&tcs=napszemuveg" {if $q==$egy_gyarto.gyarto_alnev and $tcs=="napszemuveg"}class="item_active"{/if}>{$egy_gyarto.gyarto_nev}</a><br />
            {/foreach}</p>
        </div>
        
        <div class="left-menu">
          <h2 class="menu-title">{$ford.szemuvegkeretek}</h2>
          <p> {foreach from=$gyartok2 item=egy_gyarto} <a href="{$egy_gyarto.gyarto_alnev}&tcs=szemuvegkeret" {if $q==$egy_gyarto.gyarto_alnev and $tcs=="szemuvegkeret"}class="item_active"{/if}>{$egy_gyarto.gyarto_nev}</a><br />
            {/foreach}</p>
          
        </div>
-->

<!--<p> {foreach from=$kiegeszitok item=egy_kat} <a href="{$egy_kat.kat_alnev}" {if $q==$egy_kat.kat_alnev}class="item_active"{/if}>{$egy_kat.kat_nev}</a><br />
            {/foreach}</p>-->

        <!-- ÁRUKERESŐ.HU CODE END -->


        
        
        
      </div>
      <div id="content">
        <table border="0" width="777">
          <tr>
            <td>
            {$uzenet}
            
            {if $oldal !='latasvizsgalat' }
            
            <!--
            <div id="top-flash"> 
                <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
            codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0"
            align="top" height="120" hspace="0" vspace="0" width="775">
                  <param name="movie" value="banner.swf" />
                  <param name="quality" value="high" />
                  <param name="SCALE" value="noborder" />
                  <embed src="banner.swf"
              pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash"
              type="application/x-shockwave-flash" align="top" height="120"
              hspace="0" vspace="0" width="775" />
                </object>
              </div>
              -->
              
              <!--
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
              -->
              {/if}
              
        
                {include file="$tartalom"}
              
               </td>
          </tr>
        </table>
        
        
        
        
      </div>
    </div>
    <!--
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
            <td> 06 20 288 4444</td>
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
        <h2>{$ford.keszitette}</h2>
        <table border="0">
          <tr>
            <td>{$ford.design}: </td>
            <td class="created-design"></td>
          </tr>
        </table>
      </div>
    </div>
    -->
  </div>
</div>

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



{literal} 
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script> 
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-7979749-2");
pageTracker._trackPageview();
} catch(err) {}</script> 
 
{/literal}

{$hibak}

</body>
</html>