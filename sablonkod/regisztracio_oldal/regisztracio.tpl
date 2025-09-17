{include 'kosar_oldal/rendeles_menete.tpl'}
<section class="product-container clearfix product-details">
        <div class="col-xs-12 col-sm-12 col-md12 col-lg-9 left-section-product">

<form id="urlap" name="urlap" method="post" action="{$alnev.regisztracio}" onsubmit="return urlap_ellenorzes(this);">
<h1 class="product_title">{$ford.regisztracio}</h1> {if $vanhiba } <center><b><font color="#ff0000">{$ford.kerjuk_toltseki|hibakiiras}</font></b></center>{/if}
            <div class="clearfix  mt20"></div>
            <div class="lens_selection clearfix step4" >
            
            
            <div class="main-flex" >
            <div class="col-md-6 left-form">
                <h3>{$ford.szemelyes_adatok}</h3>
                {if $vanhiba } {$ford.kerjuk_toltseki|hibakiiras}<br /><br />{/if}
                <p>{$ford.szallitasi_szoveg}</p>

                
    <input type="hidden" name="kuldve2" value="1">
    <input type="hidden" name="q" value="regisztracio">
    <input type="hidden" name="felh_email" value="{$fadat.felh_email}">
    <input type="hidden" name="felh_jelszo" value="{$fadat.felh_jelszo}">
                
    <div class="form-group">
     
      <label for=" "> {if $reghiba2.email } <span class="error">{$ford.email}:</span> {else}{$ford.email}:{/if}</label>
      {if $reghiba2.email }<input type="text" class="form-control" name="felh_email" size="30" maxlength="50" value="{$fadat.felh_email}"> *{else} {$fadat.felh_email}{/if}
    </div>
    <div class="form-group">
      <label for=" ">{if $reghiba2.csaladnev } <span class="error">{$ford.csaladnev}:</span> {else}
                      {$ford.csaladnev}:
                      {/if}</label>
      <input type="text" class="form-control" id="felh_csaladnev" name="felh_csaladnev" value="{$fadat.felh_csaladnev}" maxlength="30"> 
    </div>
    
    <div class="form-group">
      <label for=" "> {if $reghiba2.keresztnev } <span class="error">{$ford.keresztnev}:</span> {else}
                      {$ford.keresztnev}:
                      {/if}</label>
      <input type="text" class="form-control" id="felh_keresztnev" name="felh_keresztnev" value="{$fadat.felh_keresztnev}" maxlength="30"> 
    </div>
    
    
    <div class="form-group">
      <label for=" "> {if $reghiba2.mobil2 }
                        <span class="error">{$ford.mobil}:</span>
                      {else}
                        {$ford.mobil}:
                      {/if}</label>
      <div class="row">
      <div class="col-md-1"><span>06</span></div>
      <div class="col-md-2 mobmb10"> 
      
      <select name="felh_mobil1" size="1" class="form-control">
                        <option value="0">...</option>
                        <option value="20"{if $fadat.felh_mobil1==20} selected="selected"{/if}>20</option>
                        <option value="30"{if $fadat.felh_mobil1==30} selected="selected"{/if}>30</option>
                        <option value="31"{if $fadat.felh_mobil1==31} selected="selected"{/if}>31</option>
                        <option value="70"{if $fadat.felh_mobil1==70} selected="selected"{/if}>70</option>
                      </select>
       </div>
       <div class="col-md-9"><input type="text" class="form-control" id="felh_mobil2" name="felh_mobil2" value="{$fadat.felh_mobil2}" size="7" maxlength="7" onkeypress="return isNumberKey(event)"> </div>
       </div>
      <p>* {$ford.egyik_kotelezo_mobil}</p>
    </div>
    
    <div class="form-group">
      <label for=" "> {if $reghiba2.telefon } <span class="error">{$ford.telefon}:</span> {else}
                      {$ford.telefon}:
                      {/if}</label>
      <input type="text" class="form-control" id="felh_telefon" name="felh_telefon" value="{$fadat.felh_telefon}"  onkeypress="return isNumberKey(event)" maxlength="20"> 
      <p>* {$ford.egyik_kotelezo}</p>
    </div>
    
    <div class="form-group">
      <label for=" "> {if $reghiba2.varos } <span class="error">{$ford.varos}:</span> {else}
                      {$ford.varos}:
                      {/if}
      </label>
      <input type="text" class="form-control" id="felh_varos" name="felh_varos" value="{$fadat.felh_varos}"> 
    </div>
    
    <div class="form-group">
      <label for=" ">  {if $reghiba2.utca } <span class="error">{$ford.utca}:</span> {else}
                      {$ford.utca}:
                      {/if}</label>
      <input type="text" class="form-control" id="felh_utca" name="felh_utca" value="{$fadat.felh_utca}" maxlength="80">
    </div>
    
    <div class="form-group">
      <label for=" ">  {if $reghiba2.irsz } <span class="error">{$ford.iranyitoszam}:</span> {else}
                      {$ford.iranyitoszam}:
                      {/if}</label>
      <input type="text" class="form-control" id="felh_irsz" name="felh_irsz" value="{$fadat.felh_irsz}" maxlength="4"> 
    </div>

    <div class="form-group">
      <label for=" ">{$ford.egpenztar}: </label> 
      
      <select class="form-control" name="felh_egpenztar" size="1" onchange="egp_feltoltes(this)">
        {foreach from=$egpenztarak item=egy_penztar}
            <option value="{$egy_penztar.penztar_id}" {if $fadat.felh_egpenztar==$egy_penztar.penztar_id}SELECTED{/if}>{$egy_penztar.penztar_nev}</option>
        {/foreach}
      </select>
	  <a data-toggle="tooltip" data-html="true" style="color:#424242; top:1%; left:100%" title="Lehetősége van egészégpénztára nevére kérni a számlát ! Kérjük, hogy annak első példányát jutassa el számukra ! A megrendelése értékét a bankszámlájára átutalják egészségpénztári egyenlege terhére. Kérjük válassza ki a listából egészségpénztárát ! Amennyiben nem szerepel a listában, kérjük hogy, manuálisan adja meg a számlázási adatokat és ezt jelezze nekünk a megjegyzés rovatban !"><i class="fa fa-question-circle" aria-hidden="true"></i></a>
      
      
      <span id="penztar_szoveg"> </span>
    </div>
    
    
    <div class="form-group" id="egp_box" {if $fadat.felh_egpenztar==0} style="display:none;"{/if}>
          <table class="textfield-specs" width="100%">
          <tr>
            <td height="40" style="border-right-color:#f7f7f7;" >Tag neve: </td>
		  </tr>
		  <tr>
            <td height="40"><input name="felh_tagnev" type="text" class="textfield-specs" id="felh_tagnev" value="{$fadat.felh_tagnev}" size="24" /></td>
          </tr>
          <tr>
            <td height="40" style="border-right-color:#f7f7f7;" >Tagi azonosító: </td>
		  </tr>
		  <tr>
            <td height="40"><input name="felh_egazon" type="text" class="textfield-specs" id="felh_egazon" value="{$fadat.felh_egazon}" size="24" /></td>
          </tr>
          <tr>
            <td height="40" style="border-right-color:#f7f7f7;" >Kedvezményezett neve: </td>
		  </tr>
		  <tr>
            <td height="40"><input name="felh_kedvezmenyezett" type="text" class="textfield-specs" id="felh_kedvezmenyezett" value="{$fadat.felh_kedvezmenyezett}" size="24" /></td>
          </tr>
        </table>
    </div>    
    
</div>
            

<div class="col-md-6 right-form">
    <h3>{$ford.szamlazasi_adatok}</h3>
    <p>{$ford.szamlazasi_szoveg}</p>
                
                
    
    <div class="form-group">
      <label for=" ">{$ford.szamlanev}:</label>
      <input type="text" class="form-control" id="felh_szamlanev" name="felh_szamlanev" value="{$fadat.felh_szamlanev}" maxlength="80"> 
    </div>

    <div class="form-group">
      <label for=" ">{$ford.varos}:</label>
      <input type="text" class="form-control" id="felh_szvaros" name="felh_szvaros" value="{$fadat.felh_szvaros}"> 
    </div>    

    <div class="form-group">
      <label for=" "> {$ford.utca}:</label>
      <input type="text" class="form-control" id="felh_szutca" name="felh_szutca" value="{$fadat.felh_szutca}"> 
    </div>

    <div class="form-group">
      <label for=" "> {$ford.iranyitoszam}:</label>
      <input type="text" class="form-control" id="felh_szirsz" name="felh_szirsz" value="{$fadat.felh_szirsz}" maxlength="4"> 
    </div>

    <div class="form-group mt30">
      <label for=" "> {$ford.megjegyzes}:</label>
      <textarea id="felh_megjegyzes" name="felh_megjegyzes" class="form-control comment">{$fadat.felh_megjegyzes}</textarea>
    </div>
	
 <div class="form-group">
 <input type="checkbox" name="feltetelek" value="1">
 <span class="error">A <a href="/szallitas_es_fizetes" target="_blank\" style="position: static;">szállítási és fizetési feltételeket</a>, valamint az <a href="altalanos_tudnivalok" target="_blank\" style="position: static;">általános tudnivalókat</a> elolvastam és elfogadom. *</span>
 </div>
 
 <!--
    <div class="form-group">
      <!--<label for=" "> {$ford.iranyitoszam}:</label>-->
 <!--      <input type="checkbox" name="feltetelek" value="1">
          {if $reghiba2.feltetel } <span class="error">{$ford.feltetelek_elfogadasa} *</span> {else} <a style="text-decoration:none; position: static;">{$ford.feltetelek_elfogadasa} </a> *
          {/if}
    </div>
    -->
	
	
	<!-- régi vége -->
	
    <div class="form-group">
        <input type="checkbox" name="hirlevel" value="1" checked="checked"> {$ford.kerek_hirlevelet}<br /><br />
        * {$ford.mezok_kotelezok} 
    </div>
 
 
 
 
 
 
        <div class="text-right mt40">
            <button class="btn btn-success" type="submit">Tovább</button>
        </div>
  
                        
            </div>
                </div>
                
            </div>

            
  </form>             
        </div>
        
        <!--
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
            <div class="summary">
                <div class="brandLogo"><img src="images/tommy_hilfiger_logo.jpg" alt="" class="img-responsive"/>
                </div>
                <div class="side-product">
                    <h2>Az ön által válaszott keret:</h2>
                    <h3> Emporio Armani <small>EA3099 5553</small></h3>
                    <img src="images/frame1.jpg"/>
                    <p><strong>Leírás:</strong> Emporio Armani EA3099 5553</p>
                </div>
                <button type="submit" class="green-btn dsktp_none">Next</button>
            </div>
        </div>
        -->
    </section>