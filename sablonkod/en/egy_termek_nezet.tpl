<script type="text/javascript" src="includes/overlib/overlib.js"><!-- overLIB (c) Erik Bosrup --></script>

<div style="float:left; display:block;">
  <div class="product-title">
    <h1>{$egy_termek.termek_nev}</h1>
    <img src="{if $egy_termek.termek_csoport==3}{$kepsrc2}{else}{$kepsrc}{/if}{$egy_termek.termek_kep}" border="0" align="absmiddle" style="margin-top:15px; margin-bottom:auto;"/> 
    
    <!--
    <br />
    <a href="https://www.facebook.com/FakARomain" target="_blank"><img src="http://kepek.lencse.hu/kepek/romain_fak.jpg" border="0"></a>-->

<!--    
<div style="border: #ff0000 2px dashed; width:300px; padding:2px;">
<p style="padding:2px;"><b>Christmas open:</b></p>
<p style="padding:2px; padding-bottom:4px;">December 24th - January 4th Closed</p>
<p style="padding:2px;">Open 2015. January 5th</p>
</div>
-->

    </div>
  <div class="product-des">
    <p>
      <span class="prod-title">{$ford.gyarto}:</span> {$egy_termek.termek_gyarto}<br /><br />
       <span class="prod-title">{$ford.tipus}:</span> {$egy_termek.termek_tipus}<br /><br />
       <span class="prod-title">{$ford.kiszereles}:</span> {$egy_termek.termek_kiszereles}<br /><br />
       <span class="prod-title">{$ford.szallitasi_hatarido}:</span> {$egy_termek.termek_szallitas}<br />
      <br />
      <span class="prod-title">{$ford.leiras2}</span>:<br />{$egy_termek.termek_megjegyzes}<br />
    </p>
  </div>
</div>




<div style="float:left; display:block; margin-top:10px;">
<form name="urlap" method="post" action="{$filenev}" enctype="multipart/form-data" onsubmit="return urlap_ellenorzes(this);">
    <div class="cont-block product-data" style="border-color:#80756f;">
    {literal}
    <script language="javascript">
    
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
    {/literal}
    
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
    
    <!-- TermĂ©k esetĂ©n -->
    <h1 class="h1_arrow_grey">{$ford.szem}</h1>
   <table width="100%" border="0" cellpadding="3" cellspacing="0" >
          <tr> {if $egy_termek.termek_csoport == 1}
            <td bgcolor="#f4f3f1" class="" align="center" width="110"></td>
            {/if}
            
            {if termek_jellemzo($egy_termek.termek_id,2)}
            <td bgcolor="#f4f3f1" class="" align="center">{$jellemzok[1].jellnev}</td>
            {/if}
            
            {if termek_jellemzo($egy_termek.termek_id,3) }
            <td bgcolor="#f4f3f1" class="" align="center">{$jellemzok[2].jellnev}</td>
            {/if}
            
            {if termek_jellemzo($egy_termek.termek_id,1) }
            <td bgcolor="#f4f3f1" class="" align="center">{$ford.atmero}</td>
            {/if}
            
            {if termek_jellemzo($egy_termek.termek_id,4) }
            <td bgcolor="#f4f3f1" class="" align="center">{$jellemzok[3].jellnev}</td>
            {/if}
            
            {if termek_jellemzo($egy_termek.termek_id,5) }
            <td bgcolor="#f4f3f1" class="" align="center">{$jellemzok[4].jellnev}</td>
            {/if}
            
            {if termek_jellemzo($egy_termek.termek_id,6) }
            <td bgcolor="#f4f3f1" class="" align="center">{$jellemzok[5].jellnev}</td>
            {/if}
            <td bgcolor="#f4f3f1" class="" align="center">{$ford.mennyiseg}</td>
          </tr>
          {if $egy_termek.termek_csoport == 1}
          <tr>
            <td bgcolor="#f4f3f1" class="" align="center" style="border-top: 2px solid #FFFFFF;">{$ford.jobb_szem}</td>
            {if termek_jellemzo($egy_termek.termek_id,2)}
            <td bgcolor="#FFFFFF" align="center">{jellemzok jell="2" termek_id=$egy_termek.termek_id jid=1}</td>
            {/if}
            
            {if termek_jellemzo($egy_termek.termek_id,3) }
            <td bgcolor="#FFFFFF" align="center">{jellemzok jell="3" termek_id=$egy_termek.termek_id jid=1}</td>
            {/if}
            
            {if termek_jellemzo($egy_termek.termek_id,1) }
            <td bgcolor="#FFFFFF" align="center">{jellemzok jell="1" termek_id=$egy_termek.termek_id jid=1}</td>
            {/if}
            
            {if termek_jellemzo($egy_termek.termek_id,4) }
            <td bgcolor="#FFFFFF" align="center">{jellemzok jell="4" termek_id=$egy_termek.termek_id jid=1}</td>
            {/if}
            
            {if termek_jellemzo($egy_termek.termek_id,5) }
            <td bgcolor="#FFFFFF" align="center">{jellemzok jell="5" termek_id=$egy_termek.termek_id jid=1}</td>
            {/if}
            
            {if termek_jellemzo($egy_termek.termek_id,6) }
            <td bgcolor="#FFFFFF" align="center">{jellemzok jell="6" termek_id=$egy_termek.termek_id jid=1}</td>
            {/if}
            <td bgcolor="#FFFFFF" align="center"><select name="mennyiseg[]" class="dropdown-specs" id="mennyiseg_1">
                
                                      
    {mennyiseg db="20"}
    
                                    
              </select></td>
          </tr>
          {/if}
          <tr> {if $egy_termek.termek_csoport == 1}
            <td bgcolor="#f4f3f1" class="" align="center" style="border-top: 2px solid #FFFFFF;">{$ford.bal_szem}</td>
            {/if}
            
            {if termek_jellemzo($egy_termek.termek_id,2) }
            <td bgcolor="#FFFFFF" align="center">{jellemzok jell="2" termek_id=$egy_termek.termek_id jid=2}</td>
            {/if}
            
            {if termek_jellemzo($egy_termek.termek_id,3) }
            <td bgcolor="#FFFFFF" align="center">{jellemzok jell="3" termek_id=$egy_termek.termek_id jid=2}</td>
            {/if}
            
            {if termek_jellemzo($egy_termek.termek_id,1) }
            <td bgcolor="#FFFFFF" align="center">{jellemzok jell="1" termek_id=$egy_termek.termek_id jid=2}</td>
            {/if}
            
            {if termek_jellemzo($egy_termek.termek_id,4) }
            <td bgcolor="#FFFFFF" align="center">{jellemzok jell="4" termek_id=$egy_termek.termek_id jid=2}</td>
            {/if}
            
            {if termek_jellemzo($egy_termek.termek_id,5) }
            <td bgcolor="#FFFFFF" align="center">{jellemzok jell="5" termek_id=$egy_termek.termek_id jid=2}</td>
            {/if}
            
            {if termek_jellemzo($egy_termek.termek_id,6) }
            <td bgcolor="#FFFFFF" align="center">{jellemzok jell="6" termek_id=$egy_termek.termek_id jid=2}</td>
            {/if}
            <td bgcolor="#FFFFFF" align="center"><select name="mennyiseg[]" class="dropdown-specs" id="mennyiseg_2">
                
                                      
    {mennyiseg db="20"}
    
                                    
              </select></td>
          </tr>
         
        </table>
    </div>
  	<div class="cont-block product-price" style="border-color:#80756f;"><table style="color:#7f766f;" width="100%"><tr><td align="center" bgcolor="#f4f3f1" class="prod-title" height="35">{$ford.ar}</td></tr>{if $egy_termek.termek_akcios_ar > 0 }
                               <tr><td align="center" height="35"><span style="float:left; font-size:16px; padding: 4px 0 0 15px;">{$ford.regi_ar}:</span><span style="font-size:14px; float:right; padding: 4px 16px 0 0; color:#8f6299;"><s>{$egy_termek.termek_ar|arformat}</s></span></td></tr>
                            <tr><td align="center" height="35">
                            <span style="float:left; font-size:16px; padding: 4px 0 0 15px;"><b>{$ford.akcios_ar}:</b></span><span style="font-size:20px; float:right; padding-right:15px; color:#8f6299;"><b>{$egy_termek.termek_akcios_ar|arformat}</b></span></td></tr>
                            {else}
                               <tr><td align="center" height="35"><span style="float:left; font-size:16px; padding: 4px 0 0 15px;">{$ford.ar}:</span><span style="font-size:20px; float:right; padding-right:15px; color:#8f6299;"><b>{$egy_termek.termek_ar|arformat}</b></span></td></tr>
                            {/if}</table></div>

<div id="product-to-basket" class="cont-block" style="border-color:#80756f;">
<div class="purple-arrow-button-left"></div><input name="addcart" type="submit" class="purple-arrow-button" value="{$ford.kosarba}"  style="float:left"/><div class="purple-arrow-button-right"></div>
</div>
</form>  
</div>

<div style="display:block; margin-top:25px; float:left;">
<table><tr><td valign="top">
<!--
<a href="#" onclick="javascript:window.open('https://www.paypal.com/cgi-bin/webscr?cmd=xpt/Marketing/popup/OLCWhatIsPayPal-outside','olcwhatispaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=400, height=350');"><img  src="https://www.paypal.com/en_US/i/bnr/horizontal_solution_PPeCheck.gif" border="0" alt="Solution Graphics"></a>
-->
</td><td valign="bottom"><iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Flenscity.co.uk&amp;layout=standard&amp;show_faces=true&amp;width=450&amp;action=like&amp;colorscheme=light&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px; margin-top:26px;" allowTransparency="true"></iframe></td></tr></table>
</div>

{literal} 
<script type="text/javascript">
function ValidateForm()

{

  var propvalue = document.getElementsByName('prop_value[]');

  var propvalue2 = document.getElementsByName('prop_value2[]');

  


  var error = false;

  if (document.getElementById('qr').selectedIndex > 0)

    for ( var i=0; i<propvalue.length; i++ )

    {

      if (propvalue[i].selectedIndex == 0) error = true;

    }



  if (document.getElementById('ql').selectedIndex > 0)

    for ( var i=0; i<propvalue2.length; i++ )

    {

      if (propvalue2[i].selectedIndex == 0) error = true;

    }



  if ( error )

  {

     alert('Kérjük, hogy adja meg a termék jellemzőit! Amennyiben csak az egyik szemére rendel kontaktlencsét vagy mindkét szemének paraméterei megegyeznek és csak 1 dobozzal rendel lencsét, 0 mennyiséget jelöljön ki a másik szemnél !');

    return false;

  }



  return true;

}

</script> 
{/literal}

