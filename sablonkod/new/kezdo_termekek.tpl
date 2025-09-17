<div class="row">
    <div class="col-md-12">
        <a href="#" class="btn btn-filter" id="showFilter"><i class="fa fa-filter" aria-hidden="true"></i> Szűrők </a>
    </div>

    <div class="clearfix"></div>
        
    {foreach from=$nepszeru_termekek item=egy_termek}
        {include file="new/termek_lista_egy_termek.tpl"}
    {/foreach} 
        
    <div class="clearfix"></div>

    
    <div id="stickyheader">
        <div class="filterByValue">
            <div class="col-md-12">
              <!--select class="form-control select-block">
                <option selected="" disabled="" value="">Sort By</option>
                <option value="oakleyeuRelevanceSort">Relevance</option>
                <option selected="" value="oakleyeuName-ascSort">Name (ascending) rhherihu</option>
                <option value="oakleyeuName-descSort">Name (descending)</option>
                <option value="oakleyeuPriceValue-ascSort">Price (lowest first)</option>
                <option value="oakleyeuPriceValue-descSort">Price (highest first)</option>
                <option value="oakleyeuNewest-descSort">Newest</option>
                <option value="oakleyeuBestSellers-booleanSort">Best Sellers</option>


              </select-->

              <!--
              <ul class="pagination pull-right">
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
              </ul>
              -->
              <div class="clearfix"></div>
            </div>
            
            <div class="clearfix"></div>
        </div>
    </div>
</div>