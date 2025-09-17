<section class="conatiner-fluid custom-container">
<div class="col-xs-12 col-sm-3 col-lg-2 left-section">

    <span class="blackBgMobile"></span>
      
    <div>
      <span class="blackBgMobile"></span>
        <!--<ul class="left-nav">
        <li><h1 class="main-cat">Mens</h1></li>
        <li><h2>Main Category</h2></li>
        <li><a href="#" class="active">Napszemüvegek</a></li>
        <li><a href="#">Dioptriás szemüvegek</a></li>
        <li><a href="#">Kiegészítők</a></li>
        <li><a href="#">Szemüvegek</a></li>
        <li><a href="#">Kontaktlencsék</a></li>
        
        </ul>-->
        {include 'bal-menu.tpl'}
    </div>

    
    <div class="col-xs-12 col-sm-9 col-lg-10">
            {include 'felso_banner_alatt.tpl'}
            {include 'brand_menu.tpl'}
            
            
            <div id="stickyalias"></div>
            <!--
            <div id="stickyheader">
                <div class="row filterByValue" >
                    <div class="col-md-12">
                    <a href="#" class="btn btn-filter" id="showFilter"><i class="fa fa-filter" aria-hidden="true"></i> Szűrők </a>
                        <select class="form-control select-block">
                            <option selected="" disabled="" value="">Rendezés</option>
                            
                            <option selected="" value="oakleyeuName-ascSort">Név (növekvő)</option>
                            <option value="oakleyeuName-descSort">Név (csökkenő)</option>
                            <option value="oakleyeuPriceValue-ascSort">Ár (növekvő)</option>
                            <option value="oakleyeuPriceValue-descSort">Ár (csökkenő)</option>
                            <option value="oakleyeuNewest-descSort">Legújabb</option>
                            <option value="oakleyeuBestSellers-booleanSort">Népszerű</option>
                        </select>

                        <div class="clearfix"></div>

                    </div>
                </div>
            </div>
            -->
            <div class="clearfix"></div>
            <div class="row">
                {foreach from=$termekek item=egy_termek}
                    {include file="o_kategoria/egy_termek.tpl"}    
                {/foreach}
            </div>
            
            
    </div>
    
    
    
  
</div>
</section>






