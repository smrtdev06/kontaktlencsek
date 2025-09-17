<section class="conatiner-fluid custom-container">
    
    <div class="col-xs-12 col-sm-3 col-lg-2 left-section">
    <span class="blackBgMobile"></span>
      
    <div>
      <span class="blackBgMobile"></span>
        <!--
        <ul class="left-nav">
        <li><h1 class="main-cat">Mens</h1></li>
        <li><h2>Main Category</h2></li>
        <li><a href="#" class="active">Napszemüvegek</a></li>
        <li><a href="#">Dioptriás szemüvegek</a></li>
        <li><a href="#">Kiegészítők</a></li>
        <li><a href="#">Szemüvegek</a></li>
        <li><a href="#">Kontaktlencsék</a></li>
        
        </ul>
        -->
        
        {include 'bal-menu.tpl'}
    </div>

    
    <div class="col-xs-12 col-sm-9 col-lg-10">
            {include 'felso_banner_alatt.tpl'}
            
            {include 'brand_menu.tpl'}
            
            <div class="clearfix"></div>
            <div class="row">
                {foreach from=$termekek item=egy_termek}
                    {include file="new/termek_lista_egy_termek.tpl"}    
                {/foreach}
            </div>
            
            
    </div>
    
    
    
  
</div>
</section>






