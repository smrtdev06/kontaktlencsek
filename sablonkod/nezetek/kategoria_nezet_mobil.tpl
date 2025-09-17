    <section class="product-pg-banner">
        <h1 class="product-heading">{$kat_nev}    

            <ul class="three_menus">
              <li><a href="#">Látásvizsgálat</a></li>
              <!--<li><a href="#">Akciók</a></li>-->
              <li><a href="#">Újdonságok</a></li>
            </ul>
        </h1>
    </section>
    
    <!--
    <section class="banner-brands">
        <ul>
            <li><a href="#"><img src="images/brand-logo/boushnlomb.png"> </a></li>
            <li><a href="#"><img src="images/brand-logo/alcon.png"> </a></li>
            <li><a href="#"><img src="images/brand-logo/copper-vision.png"> </a></li>
            <li><a href="#"><img src="images/brand-logo/johnsons.png"> </a></li><br>
            
            <li class="view-all"><a href="#">Összes termék</a></li>
        </ul>
    </section>
    -->
    
    {include 'felso_banner_alatt.tpl'}

    <section class="product-container clearfix">
        <div class="col-xs-12 col-sm-3 col-lg-2 left-section">
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
            <div id="stickyalias"></div>

            <div id="stickyheader">
            
            <div class="row filterByValue" >
                <div class="col-md-12">
                <a href="#" class="btn btn-filter" id="showFilter"><i class="fa fa-filter" aria-hidden="true"></i> Szűrők </a>
                    <select class="form-control select-block">
                        <option selected="" disabled="" value="">Rendezés</option>
                        <!--<option value="oakleyeuRelevanceSort">Relevance</option>-->
                        <option selected="" value="oakleyeuName-ascSort">Név (növekvő)</option>
                        <option value="oakleyeuName-descSort">Név (csökkenő)</option>
                        <option value="oakleyeuPriceValue-ascSort">Ár (növekvő)</option>
                        <option value="oakleyeuPriceValue-descSort">Ár (csökkenő)</option>
                        <option value="oakleyeuNewest-descSort">Legújabb</option>
                        <option value="oakleyeuBestSellers-booleanSort">Népszerű</option>
                    </select>

                    <!--
                    <ul class="pagination pull-right">
                        <li><a href="#">1</a>
                        </li>
                        <li><a href="#">2</a>
                        </li>
                        <li><a href="#">3</a>
                        </li>
                        <li><a href="#">4</a>
                        </li>
                        <li><a href="#">5</a>
                        </li>
                    </ul>
                    -->
                    <div class="clearfix"></div>

                    <!--
                    <div class="selected-filter">
                        <ul>
                            <h5>Kiválasztott szűrők</h5>
                            <li>
                                <div class="alert alert-default alert-dismissable">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> Gyártó neve
                                </div>
                            </li>
                            
                            <li>
                                <div class="alert alert-default alert-dismissable">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> High Definition Optics®
                                </div>
                            </li>
                            
                        </ul>

                    </div>        
                    -->
                    
                </div>

            </div>
            
            </div>
            
            
            <div class="clearfix"></div>
            <div class="row">
                
                {foreach from=$termekek item=egy_termek}
                    {include file="new/termek_lista_egy_termek.tpl"}    
                {/foreach}
                
                
            </div>
        </div>
    </section>
