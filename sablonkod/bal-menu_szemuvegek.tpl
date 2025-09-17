<div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFour">
                  <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">{$ford.napszemuvegek}</a> </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFour">
                  <div class="panel-body">
                    <ul>
                      <li >
                        <div class="gender_" > <!--onclick="return false;"-->
                          <div class="checkbox "> <!-- inactive -->
                            <input type="checkbox" value="female" name="adidas" id="adidas" disable >
                            <label for="adidas">Ray-Ban</label>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="gender_">
                          <div class="checkbox ">
                            <input type="checkbox" value="female" name="Boss" id="Boss">
                            <label for="Boss">Oakley</label>
                          </div>
                        </div>
                      </li>
                      <!--
                      <li>
                        <div class="gender_">
                          <div class="checkbox">
                            <input type="checkbox" value="female" name="BOrange" id="BOrange">
                            <label for="BOrange">Emporio Armani</label>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="gender_">
                          <div class="checkbox">
                            <input type="checkbox" value="female" name="Bvlgari" id="Bvlgari">
                            <label for="Bvlgari">Gucci</label>
                          </div>
                        </div>
                      </li>
                      -->
                    </ul>
                    

                    <div id="mindenMarka" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                      <div class="panel-body">
                        <ul>
                            {foreach from=$gyartok2 item=egy_gyarto}
                            <li>
                            <div class="gender_">
                              <div class="checkbox">
                                <input type="checkbox" value="{$egy_gyarto.gyarto_nev}" name="{$egy_gyarto.gyarto_nev}" id="{$egy_gyarto.gyarto_id}">
                                <label for="{$egy_gyarto.gyarto_nev}">{$egy_gyarto.gyarto_nev}</label>
                              </div>
                            </div>
                            </li>
                            {/foreach}
                        </ul>
                      </div>
                    </div>
                    <a class="search-blackBtn" role="button" data-toggle="collapse" data-parent="#mindenMarka" href="#mindenMarka" aria-expanded="true" aria-controls="mindenMarka">Minden márka</a>

                  </div>
                </div>
              </div>  