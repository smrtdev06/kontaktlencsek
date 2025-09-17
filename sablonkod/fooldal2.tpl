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
<script type="text/javascript" language="javascript" src="allscripts.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" />
{literal}
<script language="javascript">

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
<script src="css/js/jquery-1.4.2.js"></script>

<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery("body").append('<div id="overDiv" style="position:absolute; visibility:hidden; z-index:1000;"></div>');
	   
    });
</script>

{/literal}

</head>

<body>
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
<div id="bg">
  <div id="main">
    <div id="header">
      <div id="toplogo"></div>
      <div id="lang_sel">
      	<a href="{$sitenev}{$alnev.kapcsolat}">{$ford.kapcsolat}</a> <span class="separator">|</span>
      	{if $cLang eq 'hu'}
      		{$ford.nyelv} <a href="?nyelv=en" alt="English" title="English">English</a>
      	{elseif $cLang eq 'en'}
      		{$ford.nyelv} <a href="?nyelv=hu" alt="Magyar" title="Magyar" >Magyar</a> 
      	{/if}
      	</div>
      	<a href="{$sitenev}{$alnev.kosar}" class="body-link" id="basket">
          
            <div id="basket-text">{$basket}</div>
      </a>
      <div id="topmenu">
        <ul>
          <li><a href="{$sitenev}" class="main-menu-link">{$ford.fooldal}</a></li>
          <li><a href="{$sitenev}{$alnev.osszes_termek}" class="main-menu-link">{$ford.osszes_termek}</a></li>
          <li><a href="{$sitenev}{$alnev.szallitas_es_fizetes}" class="main-menu-link">{$ford.szallitas_es_fizetes}</a></li>
          <li><a href="{$sitenev}{$alnev.altalanos_tudnivalok}" class="main-menu-link">{$ford.altalanos_tudnivalok}</a></li>
          {if $user}
          <li><a href="{$sitenev}{$alnev.kilepes}" class="main-menu-link">{$ford.kilepes}</a></li>
          {/if}
        </ul>
      </div>
      <div id="topsearch">
        <form name="lencsek" id="lencsek" method="get" action="{$sitenev}">
          <label>{$ford.termekek} :&nbsp;</label>
            <select name="q" class="prod-sel" onchange="document.lencsek.submit()">
              <option value="osszes_termek">{$ford.valassz_termeket}</option>
              
              
              
                      {foreach from=$termek_nevek item=egytermek}
                        
              
              
              <option value="{$egytermek.termek_alnev}" >{$egytermek.termek_nev}</option>
              
              
              
                      {/foreach}
                      <!-- {if $q == $egytermek.termek_alnev}selected="selected"{/if} -->
            </select>
          
        </form>
      </div>
    </div>
    <div id="bg2">
      <div id="left-mod" height="100%" width="105">
        <div class="left-menu">
          <h2 class="menu-title">{$ford.kontaktlencse_gyartok}</h2>
          <p> {foreach from=$gyartok item=egy_gyarto} <a href="{$egy_gyarto.gyarto_alnev}">{$egy_gyarto.gyarto_nev}</a><br />
            {/foreach}</p>
        </div>
        <div class="left-menu">
          <h2 class="menu-title">{$ford.kontaktlencse_tipusok}</h2>
          <p> {foreach from=$kontaktlencsek item=egy_kat} <a href="{$egy_kat.kat_alnev}">{$egy_kat.kat_nev}</a><br />
            {/foreach}</p>
        </div>
        <div class="left-menu">
          <h2 class="menu-title">{$ford.kiegeszitok}</h2>
          <p> {foreach from=$kiegeszitok item=egy_kat} <a href="{$egy_kat.kat_alnev}">{$egy_kat.kat_nev}</a><br />
            {/foreach}</p>
        </div>
      </div>
      <div id="content">
        <table border="0">
          <tr>
            <td><div id="top-flash"> {$uzenet}
                <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
            codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0"
            align="top" height="120" hspace="0" vspace="0" width="706">
                  <param name="movie" value="banner.swf" />
                  <param name="quality" value="high" />
                  <param name="SCALE" value="noborder" />
                  <embed src="banner.swf"
              pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash"
              type="application/x-shockwave-flash" align="top" height="120"
              hspace="0" vspace="0" width="706" />
                </object>
              </div>
              <div id="top-icons">
                <div id="ic-i-a">
                  <h2>Ingyenes átvétel</h2>
                  <p>Budapesten, a IX. kerületben</p>
                </div>
                <div id="ic-i-sz">
                  <h2>Ingyen szállítás</h2>
                  <p>15 ill. 20 ezer Ft felett</p>
                </div>
                <div id="ic-cs-e">
                  <h2>Csak eredeti</h2>
                  <p>termékeket forgalmazunk</p>
                </div>
                <div id="ic-sz-h">
                  <h2>Szakértői háttér</h2>
                  <p>boltunkban szemvizsgálat</p>
                </div>
              </div>
              {include file="$tartalom"} </td>
          </tr>
        </table>
      </div>
    </div>
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
        <h2>{$ford.kapcsolat}</h2>
        <table border="0">
          <tr>
            <td><span class="cont-label">{$ford.telefon}:</span></td>
            <td> +36 20 288 4444</td>
          </tr>
          <tr>
            <td><span class="cont-label">{$ford.email}:</span></td>
            <td><a href="mailto:office@lencsek.hu">office@lencsek.hu</a></td>
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
          <tr>
            <td>{$ford.fejlesztes}: </td>
            <td class="created-dev"></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>
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

<!-- ÁRUKERESŐ.HU - PLEASE DO NOT MODIFY THE LINES BELOW --> 
<script type="text/javascript">
if(ak_widget_params === undefined || ak_widget_script === undefined) {
var ak_widget_params = ["9a24a16dac8c1c0773b7073d3946d681","L","HU"];
var ak_widget_script = document.createElement("script");
ak_widget_script.type = "text/javascript";
ak_widget_script.src = ("https:" == document.location.protocol ? "https" : "http" ) + "://static.arukereso.hu/widget/presenter.js";
ak_widget_script.async = true;
document.body.appendChild(ak_widget_script);
}
</script> 
<!-- ÁRUKERESŐ.HU CODE END --> 

{/literal}
</body>
</html>