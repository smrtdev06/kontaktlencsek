{include 'kosar_oldal/rendeles_menete.tpl'}

<section class="product-container clearfix product-details">
    <div class="col-xs-12 col-sm-8 col-md-offset-2 col-md-6 col-lg-8 left-section-product">

        <h1 class="product_title">{$ford.regisztracio_vagy_bejelentkezes}</h1>
        
        {if !empty($reg_hiba) || !empty($belep_hiba) || !empty($hibauzenet) }
        <div class="col-md-6">
            {$hibauzenet}
            {$reg_hiba}
            {$belep_hiba}
        </div>
        {/if}        
        
        
<div class="clearfix  mt20"></div>
<div class="lens_selection clearfix step4" >
            
            
    <div class="main-flex" >        
            
    <!-- Belépés rész -->
    <div class="col-md-6 left-form">
        <form id="belepes" name="belepes" method="post" action="{$alnev.belepes}" />
        <input type="hidden" name="kuldve" value="1">        
                <h3>{$ford.visszatero_vasarlo}</h3>
                <p>{$ford.jelentkezzen_be}:</p>
    <div class="form-group">
     
      <label for="felh_email"> {$ford.email_cim}:</label>
      <input type="text" class="form-control" id="felh_email" name="felh_email"> <a data-toggle="tooltip" data-html="true" style="color:#424242" title="Ezt a mezőt kötelező kitölteni!"><i class="fa fa-question-circle" aria-hidden="true"></i></a>
    </div>
    <div class="form-group">
      <label for="felh_jelszo">{$ford.jelszo}:</label>
      <input type="password" class="form-control" id="felh_jelszo" name="felh_jelszo"> <a data-toggle="tooltip" data-html="true" style="color:#424242" title="Ezt a mezőt kötelező kitölteni!"><i class="fa fa-question-circle" aria-hidden="true"></i></a>
    </div>
    
    <p><a href="{$sitenev}{$alnev.jelszo_valtoztatas}">{$ford.elfelejtett_jelszo}</a></p>
 
    <div class="text-right mt40">
        <button class="btn btn-success" type="submit">{$ford.belepes}</button>
    </div>
 
    </form>
                
    </div>


    <div class="col-md-6 right-form">
        <h3>{$ford.uj_vasarlo}</h3>
        <p>{$ford.reg_egyperc}</p>
        <form id="regisztracio" name="regisztracio" method="post" action="{$alnev.regisztracio}" />
        <input type="hidden" name="kuldve1" value="1">
                
    <div class="form-group">
      <label for="felh_email"> {$ford.email_cim}*:</label>
      <input type="text" class="form-control" id="felh_email" name="felh_email"> <a data-toggle="tooltip" data-html="true" style="color:#424242" title="Ezt a mezőt kötelező kitölteni!"><i class="fa fa-question-circle" aria-hidden="true"></i></a>
    </div>
    <div class="form-group">
      <label for="felh_jelszo"> {$ford.jelszo}*:</label>
      <input type="password" class="form-control" name="felh_jelszo" id="felh_jelszo"> <a data-toggle="tooltip" data-html="true" style="color:#424242" title="Ezt a mezőt kötelező kitölteni!"><i class="fa fa-question-circle" aria-hidden="true"></i></a>
    </div>
    
    <div class="form-group">
      <label for="felh_jelszo2"> {$ford.jelszo_ismetlese}*:</label>
      <input type="password" class="form-control" name="felh_jelszo2" id="felh_jelszo2"> <a data-toggle="tooltip" data-html="true" style="color:#424242" title="Ezt a mezőt kötelező kitölteni!"><i class="fa fa-question-circle" aria-hidden="true"></i></a>
    </div>
    
        <p class="text-right">* {$ford.mezok_kotelezok} </p>
    
        <div class="text-right mt40">
            <button class="btn btn-success" type="submit">Tovább</button>
        </div>
        </form>
                
    </div>


            </div>  
        </div>
    </div>
</section>