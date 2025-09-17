{literal}
<script type="text/javascript">

$(function() {

    
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
            
            alert('Ellenőrizze, hogy ehhez a görbülethez, csak + os dioptria választható!');
            
            if( $("#jell1_2 option:contains('+')") ) {
                //$("#addcart").attr('disabled','disabled');
            } else {
                //$("#addcart").removeAttr('disabled');
            }
        }
        
        if( valasztott == '8,5' || valasztott == '8,6' || valasztott == '8,9') {
            $("#jell1_2 option:contains('-')").removeAttr('disabled');
            $("#jell1_2 option:contains('+')").attr('disabled','disabled');
            
            alert('Ellenőrizze, hogy ehhez a görbülethez, csak - os dioptria választható!');
            
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
            alert('Ellenőrizze, hogy ehhez a görbülethez, csak + os dioptria választható!');
        }
        
        if( valasztott2 == '8,5' || valasztott2 == '8,6' || valasztott2 == '8,9') {
            $("#jell2_2 option:contains('-')").removeAttr('disabled');
            $("#jell2_2 option:contains('+')").attr('disabled','disabled');
            
            alert('Ellenőrizze, hogy ehhez a görbülethez, csak - os dioptria választható!');
        }
    }
});




    
});

</script>
{/literal}

<div id="kereso" style="width:775px;">
<form id="kform" name="kform" action="{$alnev.kereses}" method="get">
    <div style="float:right;padding-bottom:4px;">
        Terméknév: <input type="text" name="keres" size="16" value="{$keres}"> <input type="submit" value="Keres">
    </div>
</form>
</div>
<br clear="all">

<div style="float:left; display:block;">



  <div class="product-title">
    <h1>{$egy_termek.termek_nev}
    {if $egy_termek.termek_kat_id >=3 and $egy_termek.termek_kat_id<=11 } kontaktlencse{/if}
    {if $egy_termek.termek_kat_id ==15} napszemüveg{/if}
    {if $egy_termek.termek_kat_id ==16} szemüvegkeret{/if}
    {if $egy_termek.termek_kat_id ==12 } ápolószer{/if}
    {if $egy_termek.termek_kat_id ==1300 } szemcsepp{/if}</h1>
    <img src="{if $egy_termek.termek_csoport==3}{$kepsrc2}{else}{$kepsrc}{/if}{$egy_termek.termek_kep}" border="0" align="absmiddle" style="margin-top:15px; margin-bottom:auto;"/> 
	<p></p>

	<!-- Price -->
	  <div class="product-one-of-all-price2">
      

		 {if $egy_termek.termek_akcios_ar > 0 }
			<table width="500" border="0" cellpadding="3"><tr>
            <td align="left">
            
                <a href="orszagboltja" title="2014-ben webshopunk I.helyezést ért el az Ország Boltja versenyen Szépségápolás és egészség kategóriában."><img border="0" alt="2014-ben webshopunk I.helyezést ért el az Ország Boltja versenyen Szépségápolás és egészség kategóriában." src="kepek/orszagboltja2014.png"></a>
            
                
            </td>
            {if $egy_termek.megszunt != 1 }
            <td align="right"><span class="old_price">{$ford.regi_ar}:<br /><s>{$egy_termek.termek_ar|arformat}</s></span></td>
		 
				<td align="right" width="130">
                <table width="126" class="product-one-of-all-np">
					<tr>
						<td align="center" class="prod-title" height="25"><span style="font-size:14px; font-family:Georgia, "Times New Roman";">{$ford.uj_ar}</span></td>
					</tr>
					
					<tr>
						<td align="center" height="25">
							<span style="font-size:20px; border-top: 1px dashed; border-color:#FFFFFF;"><b>{$egy_termek.termek_akcios_ar|arformat}</b></span>
						</td>
					</tr>
				</table>
				</td>
                {else}
                <td><span style="font-weight:bold;font-size:14px;color:#ff0000;">A termék forgalmazása megszűnt!</span></td>
                {/if}
                </tr>
			</table>
			{else}
            <table width="500" border="0">
            <tr>
            <td align="left">
                <a href="http://www.orszagboltja.hu/versenyrol" title="2012-ben webshopunk I.helyezést ért el az Ország Boltja versenyen Szépségápolás és egészség kategóriában."><img border="0" alt="2012-ben webshopunk I.helyezést ért el az Ország Boltja versenyen Szépségápolás és egészség kategóriában." src="kepek/orszagboltja2014.png"></a>
                {if $egy_termek.termek_id==29997}
                <img src="kepek/kis_fulhallgato.jpg" border="0">
                {/if}
            </td>
            <td  align="right" width="130">
            
			<table width="126" class="product-one-of-all-np">
				<tr>
                
			    <td align="center" class="prod-title" height="25"><span style="font-size:14px; font-family:Georgia, "Times New Roman";">{$ford.ar}</span></td>
				</tr>
				<tr>
					<td align="center" height="25">
						<span style="font-size:20px; border-top: 1px dashed; border-color:#FFFFFF;"><b>{$egy_termek.termek_ar|arformat}</b></span>
					</td>
				</tr>
			</table>
           
            
            </td></tr>
            </table>
		   {/if}
           
           
           {if in_array($egy_termek.termek_id, array(20960,20863,19425,20058,20063,22810,19422,37197) )}
           <!-- <img src="kepek/kis_fulhallgato.jpg" border="0"> 
           <br />
           <img src="images/201703johnson.jpg" border="0"><br />
           Amennyiben legalább 2 dobozzal vásárolsz ebből a kontaktlencséből ajándék törölközőt adunk.
           -->
           {/if}
           
		</div> <!--price end -->
    
    
{if $egy_termek.megszunt != 1 }
<div style="float:left; display:block; margin-top:10px; width:100%;">
<form name="urlap" method="post" action="{$filenev}" enctype="multipart/form-data" onsubmit="return urlap_ellenorzes(this);">
    <div class="cont-block product-data" style="border-color:#80756f;">

    
    {literal}
    <script language="javascript" type="text/javascript">
    
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
    <h1 class="h1_arrow_grey" style="color:#ffffff;">{$ford.szem}</h1>
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
            
            {if termek_jellemzo($egy_termek.termek_id,7) }
            <td bgcolor="#f4f3f1" class="" align="center">{$jellemzok[6].jellnev}</td>
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
            
            {if termek_jellemzo($egy_termek.termek_id,7) }
            <td bgcolor="#FFFFFF" align="center">{jellemzok jell="7" termek_id=$egy_termek.termek_id jid=1}</td>
            {/if}
            
            <td bgcolor="#FFFFFF" align="center">
              <select name="mennyiseg[]" class="dropdown-specs" id="mennyiseg_1">          
                {mennyiseg db="20"}
              </select>
            </td>
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
            
            {if termek_jellemzo($egy_termek.termek_id,7) }
            <td bgcolor="#FFFFFF" align="center">{jellemzok jell="7" termek_id=$egy_termek.termek_id jid=1}</td>
            {/if}
            <td bgcolor="#FFFFFF" align="center">
              <select name="mennyiseg[]" class="dropdown-specs" id="mennyiseg_2">
                {mennyiseg db="20"}                      
              </select>
            </td>
          </tr>
         
        </table>
    
    <div style="float:right;">
    <div class="purple-arrow-button-left"></div>
    <input id="addcart" name="addcart" type="submit" class="purple-arrow-button" value="{$ford.kosarba}"  style="float:left"/>
    <div class="purple-arrow-button-right"></div>
    </div>
    
    
    </div>
        
        
    <!--   
    <div align="left" style="position:absolute; right: 0px; border: #80756F 2px dashed; width:261px; padding:2px;">
    <p style="padding:2px;"><b>Ünnepi nyitvatartásunk,ügyfélszolgálat:</b></p>
    <p style="padding-bottom:4px;">December 21-Január 1. Zárva</p>
    <u><b>József körúti boltunk nyitvatartása:</b></u></p>
    <p style="padding-bottom:4px;">December 21. 10-14 óráig<br />December 23. 10-18 óráig<br />December 24-Január 1. Zárva</p>
    <p style="padding:2px;">A még ki nem küldött és új rendeléseket leghamarabb 2014.január 2-án tudjuk feladni!</p>
    </div>        
    -->    
        
</form>     
</div>
{/if}
    
  </div>
    
    




    
    
  <div class="product-des">
    <p>
      <span class="prod-title">{$ford.gyarto}:</span> {$egy_termek.termek_gyarto}<br /><br />
       <span class="prod-title">{$ford.tipus}:</span> {$egy_termek.termek_tipus} {if $egy_termek.termek_kat_id >=3 and $egy_termek.termek_kat_id==10 }<br /><span style="padding-left: 55px;">kontaktlencse</span>{else}<br />{/if}<br />
       <span class="prod-title">{$ford.kiszereles}:</span> {$egy_termek.termek_kiszereles}<br /><br />
       <span class="prod-title">{$ford.szallitasi_hatarido}:</span> <a href="javascript:void(0);" onmouseout="UnTip()" onmouseover="Tip('{$egy_termek.termek_szallitas_kerdojel}')"><img src="css/icons/kerdojel.png" border="0" align="top"></a><br />{$egy_termek.termek_szallitas}<br />
      <br />
      <div id="leirasbox">
      <span class="prod-title">{$ford.leiras2}</span>:<br />{$egy_termek.termek_megjegyzes}
      </div>
      {if $egy_termek.termek_id==19430 || $egy_termek.termek_id==33151 || $egy_termek.termek_id==33568}
      <div style="overflow-y:scroll; height:200px; margin:10px;">
      <table cellspacing="0" cellpadding="0">
    <tr height="19">
      <td height="19" width="63"><div align="center">BC</div></td>
      <td height="19" width="63"><div align="center">PWR</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,6</div></td>
      <td height="19" width="63"><div align="center">-0,5</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,6</div></td>
      <td height="19" width="63"><div align="center">-0,75</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,6</div></td>
      <td height="19" width="63"><div align="center">-1,00</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,6</div></td>
      <td height="19" width="63"><div align="center">-1,25</div></td>
    </tr>
    
    <tr height="19">
      <td height="19" width="63"><div align="center">8,6</div></td>
      <td height="19" width="63"><div align="center">-1,75</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,6</div></td>
      <td height="19" width="63"><div align="center">-10,00</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,6</div></td>
      <td height="19" width="63"><div align="center">-10,50</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,6</div></td>
      <td height="19" width="63"><div align="center">-2,75</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,6</div></td>
      <td height="19" width="63"><div align="center">-3,00</div></td>
    </tr>
    
    <tr height="19">
      <td height="19" width="63"><div align="center">8,6</div></td>
      <td height="19" width="63"><div align="center">-3,50</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,6</div></td>
      <td height="19" width="63"><div align="center">-3,75</div></td>
    </tr>
    
    <tr height="19">
      <td height="19" width="63"><div align="center">8,6</div></td>
      <td height="19" width="63"><div align="center">-4,25</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,6</div></td>
      <td height="19" width="63"><div align="center">-4,50</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,6</div></td>
      <td height="19" width="63"><div align="center">-4,75</div></td>
    </tr>
    
    <tr height="19">
      <td height="19" width="63"><div align="center">8,6</div></td>
      <td height="19" width="63"><div align="center">-5,25</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,6</div></td>
      <td height="19" width="63"><div align="center">-5,50</div></td>
    </tr>
    
    <tr height="19">
      <td height="19" width="63"><div align="center">8,6</div></td>
      <td height="19" width="63"><div align="center">-6,00</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,6</div></td>
      <td height="19" width="63"><div align="center">-6,25</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,6</div></td>
      <td height="19" width="63"><div align="center">-6,50</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,6</div></td>
      <td height="19" width="63"><div align="center">-6,75</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,6</div></td>
      <td height="19" width="63"><div align="center">-7,00</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,6</div></td>
      <td height="19" width="63"><div align="center">-7,25</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,6</div></td>
      <td height="19" width="63"><div align="center">-7,50</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,6</div></td>
      <td height="19" width="63"><div align="center">-7,75</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,6</div></td>
      <td height="19" width="63"><div align="center">-8,00</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,6</div></td>
      <td height="19" width="63"><div align="center">-8,50</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,6</div></td>
      <td height="19" width="63"><div align="center">-9,00</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,6</div></td>
      <td height="19" width="63"><div align="center">-9,50</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,8</div></td>
      <td height="19" width="63"><div align="center">+0,75</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,8</div></td>
      <td height="19" width="63"><div align="center">+1,00</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,8</div></td>
      <td height="19" width="63"><div align="center">+1,50</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,8</div></td>
      <td height="19" width="63"><div align="center">+1,75</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,8</div></td>
      <td height="19" width="63"><div align="center">+2,00</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,8</div></td>
      <td height="19" width="63"><div align="center">+2,25</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,8</div></td>
      <td height="19" width="63"><div align="center">+2,50</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,8</div></td>
      <td height="19" width="63"><div align="center">+2,75</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,8</div></td>
      <td height="19" width="63"><div align="center">+3,00</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,8</div></td>
      <td height="19" width="63"><div align="center">+3,25</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,8</div></td>
      <td height="19" width="63"><div align="center">+3,75</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,8</div></td>
      <td height="19" width="63"><div align="center">+4,00</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,8</div></td>
      <td height="19" width="63"><div align="center">+4,25</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,8</div></td>
      <td height="19" width="63"><div align="center">+4,50</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,8</div></td>
      <td height="19" width="63"><div align="center">+5,00</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,8</div></td>
      <td height="19" width="63"><div align="center">+5,25</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,8</div></td>
      <td height="19" width="63"><div align="center">+5,50</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,8</div></td>
      <td height="19" width="63"><div align="center">+7,00</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,8</div></td>
      <td height="19" width="63"><div align="center">+7,50</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,8</div></td>
      <td height="19" width="63"><div align="center">+8,00</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,9</div></td>
      <td height="19" width="63"><div align="center">-0,50</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,9</div></td>
      <td height="19" width="63"><div align="center">-0,75</div></td>
    </tr>
    
    
    <tr height="19">
      <td height="19" width="63"><div align="center">8,9</div></td>
      <td height="19" width="63"><div align="center">-2,25</div></td>
    </tr>
    
    <tr height="19">
      <td height="19" width="63"><div align="center">8,9</div></td>
      <td height="19" width="63"><div align="center">-2,75</div></td>
    </tr>
    
    <tr height="19">
      <td height="19" width="63"><div align="center">8,9</div></td>
      <td height="19" width="63"><div align="center">-3,25</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,9</div></td>
      <td height="19" width="63"><div align="center">-3,50</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,9</div></td>
      <td height="19" width="63"><div align="center">-4,00</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,9</div></td>
      <td height="19" width="63"><div align="center">-4,25</div></td>
    </tr>
    
    <tr height="19">
      <td height="19" width="63"><div align="center">8,9</div></td>
      <td height="19" width="63"><div align="center">-4,75</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,9</div></td>
      <td height="19" width="63"><div align="center">-5,25</div></td>
    </tr>
    
    <tr height="19">
      <td height="19" width="63"><div align="center">8,9</div></td>
      <td height="19" width="63"><div align="center">-5,75</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,9</div></td>
      <td height="19" width="63"><div align="center">-6,00</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,9</div></td>
      <td height="19" width="63"><div align="center">-6,25</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,9</div></td>
      <td height="19" width="63"><div align="center">-6,50</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,9</div></td>
      <td height="19" width="63"><div align="center">-7,00</div></td>
    </tr>
    <tr height="19">
      <td height="19" width="63"><div align="center">8,9</div></td>
      <td height="19" width="63"><div align="center">-7,50</div></td>
    </tr>
    
    <tr height="19">
      <td height="19" width="63"><div align="center">8,9</div></td>
      <td height="19" width="63"><div align="center">-9,00</div></td>
    </tr>
    
</table>
      </div>
      {/if}
      
      {if ($egy_termek.termek_kat_id == 12 || $egy_termek.termek_kat_id == 13 || $egy_termek.termek_kat_id == 2) && !in_array($egy_termek.termek_id, array(38628,19443,19441,20821,21662,38791,19476,21850,19478,42139,42138,19445,38119,46))}
      <br />
      <img src="css/img/items_icon_active.gif"> Átvehető mai nap az optikáinkban ! <a href="javascript:void(0);" onmouseout="UnTip()" onmouseover="Tip('{$ford.atvetel_buborek}')"><img src="css/icons/kerdojel.png" align="top" border="0"></a>
      <br />
      {/if}
      <br />
      <div><b>20 ezer Ft feletti megrendelés esetén ajándékot <a href="{sitenev}/akcio" class="normal_link">választhat !</a></b> <a href="javascript:void(0);" onmouseout="UnTip()" onmouseover="Tip('Válasszon az ajándékok közül!')"><img src="css/icons/kerdojel.png" align="top" border="0"></a>
      </div>
      <br />
      {if $egy_termek.termek_csoport==3 }
      Bővebb leírás, még több szemüveg: <a href="http://www.szemuvegek.hu/termekleiras/product-{$egy_termek.termek_nev}/" class="termeklink">Szemüvegek.hu</a> oldalunkon.
      {/if}
      
      {if $egy_termek.termek_csoport==4 }
      Ha szemüveglencsével együtt szeretné megrendelni a keretet, úgy erre a <a href="http://www.szemuvegek.hu/termekleiras/product-{$egy_termek.termek_nev}/" class="termeklink">Szemüvegek.hu</a> oldalunkon van módja.
      {/if}
      
      <div style="float:left;">
      Fél évnél régebben voltál kontaktlencse kontroll vizsgálaton?<br />
      Jelentkezz be online a <a href="http://szemuvegek.hu/latasvizsgalat" target="_blank">Szemüvegek.hu oldalunkon itt</a> !
      </div>  
    </p>
  </div>
    
  
<!-- Regi ár
	<div class="cont-block product-price" style="border-color:#80756f;"><table style="color:#7f766f;" width="100%"><tr><td align="center" bgcolor="#f4f3f1" class="prod-title" height="35">{$ford.ar}</td></tr>{if $egy_termek.termek_akcios_ar > 0 }
                               <tr><td align="center" height="35"><span style="float:left; font-size:16px; padding: 4px 0 0 15px;">{$ford.regi_ar}:</span><span style="font-size:14px; float:right; padding: 4px 16px 0 0; color:#8f6299;"><s>{$egy_termek.termek_ar|arformat}</s></span></td></tr>
                            <tr><td align="center" height="35">
                            <span style="float:left; font-size:16px; padding: 4px 0 0 15px;"><b>{$ford.akcios_ar}:</b></span><span style="font-size:20px; float:right; padding-right:15px; color:#8f6299;"><b>{$egy_termek.termek_akcios_ar|arformat}</b></span></td></tr>
                            {else}
                               <tr><td align="center" height="35"><span style="float:left; font-size:16px; padding: 4px 0 0 15px;">{$ford.ar}:</span><span style="font-size:20px; float:right; padding-right:15px; color:#8f6299;"><b>{$egy_termek.termek_ar|arformat}</b></span></td></tr>
                            {/if}</table></div> -->
<!--
<div align="right">
  &nbsp;<br />
      <iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Flencsek.hu&amp;layout=standard&amp;show_faces=true&amp;width=250&amp;action=like&amp;colorscheme=light&amp;height=30" scrolling="no" frameborder="#fff" style="border:#fff; overflow:hidden; width:250px; height:30px;"></iframe>
  </div>
  -->

    
  

  <div style="float:right;">
    <a href="https://facebook.com/Lencsek.hu" target="_blank"><img src="images/lencsek_hu_face2.png" width="220"></a>
    <br>
      <div class="fb-like" data-href="https://www.facebook.com/Lencsek.hu" data-width="220" data-layout="standard" data-action="like" data-show-faces="false" data-share="false">
      </div>
    {if $egy_termek.termek_raktari}
    <br />
    
    <a href="http://lencsek.hu/szallitas_es_fizetes"><img src="{$sitenev}images/Lencsekhu_miniBanner.png" /></a>
    
    {/if}
    
  </div>

{/literal}



</div>
  
                   
                      
<div style="float:left; display:block; margin-top:20px; width:700px;">
    <span class="arial-11">*&nbsp; &nbsp; A legtöbb egészségpénztárral kapcsolatban állunk, többek közt: <br />
    <img src="images/premium_logo.jpg" alt="Prémium" border="0" height="42" /> <img src="kepek/otp.jpg" alt="OTP" width="202" height="42" border="0" /> <img src="kepek/medicina.jpg" alt="K&amp;H" height="42" border="0" /> <img src="kepek/mkb.jpg" alt="MKB eg&eacute;szs&eacute;gp&eacute;nzt&aacute;r" height="42" border="0" /><br />
    * Egyes egészségpénztárak elszámolását szemvizsgálathoz köthetik és bekérhetik a szemvizsgálati lapot!
    </span>
    
</div>   

   


<!--
<div id="product-to-basket2" class="cont-block" style="border-color:#80756f;">
<div class="purple-arrow-button-left"></div><input name="addcart" type="submit" class="purple-arrow-button" value="{$ford.kosarba}"  style="float:left"/><div class="purple-arrow-button-right"></div>
</div>  
-->

</div>



<!--
<div class="fb-like-box" data-href="http://www.facebook.com/lencsek.hu" data-width="370" data-height="220" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="false"></div>
-->

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
    alert('KĂ©rjĂĽk, hogy adja meg a termĂ©k jellemzĹ‘it! Amennyiben csak az egyik szemĂ©re rendel kontaktlencsĂ©t vagy mindkĂ©t szemĂ©nek paramĂ©terei megegyeznek Ă©s csak 1 dobozzal rendel lencsĂ©t, 0 mennyisĂ©get jelĂ¶ljĂ¶n ki a mĂˇsik szemnĂ©l !');

    return false;
  }

  return true;
}

</script> 
{/literal}