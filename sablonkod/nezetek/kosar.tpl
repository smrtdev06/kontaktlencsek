{$kosarki}


<br />
<form action="{$sitenev}{$alnev.szallitas}" method="get" id="ajandek_form">

<div class="cont-block" style="border-color:#80776f; float:left; width:auto; ">
        <div class="purple-arrow-button-left-back"></div>
        <input name="button" type="button" class="purple-arrow-button" value="{$ford.vasarlas_folytatas}" onClick="location.href='{$sitenev}{$alnev.osszes_termek}'"   style="float:left">
        <div class="purple-arrow-button-right-back"></div>
    </div>
    
    

<div class="cont-block" style="border-color:#80776f; float:left; width:auto;  margin-left:25px;">
        <div class="purple-arrow-button-left"></div>
        <input name="button" type="button" class="purple-arrow-button" value="{$ford.vasarlas_befejezes}" onClick="this.form.submit()" style="float:left">
        <div class="purple-arrow-button-right"></div>
    </div>



<div class="cont-block" style="border-color:#80756f; float:right; width:265px;"><table style="color:#7f766f;" width="100%"><tr><td align="center" bgcolor="#f4f3f1" class="prod-title" height="35">{$ford.ar}</td></tr>
                               <tr><td align="center" height="35"><span style="float:left; font-size:16px; padding: 4px 0 0 15px;">{$ford.osszesen}:</span><span style="font-size:20px; float:right; padding-right:15px; color:#8f6299;"><b>{$osszesen|arformat}</b></span></td></tr>
</table></div>

              
            
              
<script type="text/javascript" src="css/highslide.js"></script>
<link rel="stylesheet" type="text/css" href="css/highslide.css" />
                                                  
<div style="clear:both;"></div>
                            
    <div style="margin-top:30px; border-color:#80756f; border-top:dashed 1px #bdbdbd;padding-top:10px;">
    
    <div style="font-size:14px; padding:5px; background:#F5F4F2; color:#46b7cd; font-weight:bold;">
    {if $ajandek_ok}Válasszon az alábbi ajándékok közül!{else}Ha még {$ajandek_kulonbozet|arformat} összegben vásárol, az alábbi ajándékok közül választhat!{/if}</div>
    
    
    {literal}
            <link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
            <style>
                .ui-dialog-titlebar {
                    background: #ffffff;
                    border: 0px;
                }
            </style>
            <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
    {/literal}
    
    
    
    {assign var="z" value="1"}
    {foreach from=$ajandekok item=elem}
        {literal}
        <script>
            $(function() {
            
            $( "#dialog_csomag{/literal}{$z}{literal}" ).dialog({
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
            
            $( "#ajandek{/literal}{$z}{literal}" ).click(function() {
                $( "#dialog_csomag{/literal}{$z}{literal}" ).dialog( "open" );
            });
            
            $( "#csomagnagy{/literal}{$z}{literal}" ).click(function() {
                $( "#dialog_csomag{/literal}{$z}{literal}" ).dialog( "close" );
            });
            
            });

            </script>
        {/literal}
    
    
        {if $elem.ajandek_azon != "Nemkerem" || $ajandek_ok}
        <div style="float:left; text-align:center; padding:4px; border-right:1px dashed #bdbdbd;border-bottom:1px dashed #bdbdbd; width:120px; min-height:164px;">
          
          
            <div id="dialog_csomag{$z}" align="center">
                <img style="max-width: 600px;" src="images/action/{$elem.ajandek_kep}" border="0" id="csomagnagy{$z}">
                <p class="szoveg">
                {$elem.ajandek_leiras}
                </p>
            </div>
            
          <a id="ajandek{$z}" style="cursor:pointer;">
          <img src="images/action/thumb_{$elem.ajandek_kep}" id="ajandek{$z}" border="0" height="56px;"></a><br />
          <!--<p style="max-width:300px;text-align:justify;padding:4px;">{$elem.ajandek_leiras}</p>-->
          {if $ajandek_ok && $elem.ajandek_ertekhatar < $osszesen}
              <input type="radio" name="ajandek" value="{$elem.ajandek_azon}" {if $elem.ajandek_azon == $ajandek_azon}CHECKED{/if} onchange="" />
          {else}
              {if $elem.ajandek_ertekhatar > 0}{$elem.ajandek_ertekhatar|arformat} felett{/if}
          {/if}
          {if $elem.ajandek_azon !='Nemkerem'}<br /><br /><b>{$elem.ajandek_nev}</b> <br /><br />{$elem.ajandek_leiras}{/if}
        </div>
        {/if}
        
        {assign var="z" value=$z+1}
    {/foreach}
    
    </div>
</form>

<div style="clear:both;"></div>

