    <div class="filterContainer">
          <div class="filterTopHeadMobile">Szűrés <a href="#" id="closeFilter"><i class="fa fa-times" aria-hidden="true"></i></a></div>
          
          <!--          
          <div class="filter_gen">
            <div class="gender_">
              <div class="checkbox">
                <input type="checkbox" value="female" name="Raktáron" id="Raktáron">
                <label for="Raktáron">Raktáron</label>
                <p class="pull-right"><a href="#" class="tip" data-tip="tip-first4" data-placement="left"><i class="fa fa-question-circle pull-right"></i></a>
                </p>
                <div id="tip-first4" class="tip-content hidden">
                  <p>Lorem Ipsum is simply dummy </p>
                </div>
              </div>
            </div>
          </div>
          -->
          
          
          <div class="search-filter-sec">
            <!--<h1 class="main-cat">Szűrés Termékek Szerint</h1>-->

            <div class="clearfix mt10"></div>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            
            
              
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">{$ford.kontaktlencse_gyartok}</a> </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
                    <ul>
                     {foreach from=$gyartok item=egy_gyarto}
                        <li>
                        <div class="gender_">
                          <div class="checkbox ">
                            <a href="{$egy_gyarto.gyarto_alnev}">
                            <input type="checkbox" value="{$egy_gyarto.gyarto_nev}" name="{$egy_gyarto.gyarto_nev}" id="{$egy_gyarto.gyarto_id}">
                            <label for="{$egy_gyarto.gyarto_nev}">{$egy_gyarto.gyarto_nev} ({$egy_gyarto.gyarto_db})</label></a>
                          </div>
                        </div>
                        </li>
                      {/foreach}
                    </ul>

                  </div>
                </div>
              </div>

              
              
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                  <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">{$ford.kontaktlencse_tipusok}</a> </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body">
                  
                    <ul>
                    {foreach from=$kontaktlencsek item=egy_kat}
                      <li>
                        <div class="gender_">
                          <div class="checkbox">
                            <a href="{$egy_kat.kat_alnev}"><input type="checkbox" value="{$egy_kat.kat_alnev}" >
                            <label >{$egy_kat.kat_nev}</label></a>
                          </div>
                        </div>
                      </li>
                     {/foreach}
                     <!--<a href="{$egy_kat.kat_alnev}" {if $q==$egy_kat.kat_alnev}class="item_active"{/if}></a>-->
                    </ul>
                    
                  </div>
                </div>
              </div>
              
              
              
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                  <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">{$ford.kiegeszitok}</a> </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree">
                  <div class="panel-body">
                    <ul>
                      {foreach from=$kiegeszitok item=egy_kat}
                      <li>
                        <div class="gender_">
                          <div class="checkbox">
                            <a href="{$egy_kat.kat_alnev}"><input type="checkbox" value="Férfi" >
                            <label >{$egy_kat.kat_nev}</label></a>
                          </div>
                        </div>
                      </li>
                      {/foreach}
                    </ul>
                  </div>
                </div>
              </div>

              
              
              
            </div>

            <!-- panel-group -->

          </div>
        </div>
</div>