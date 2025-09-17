<div class="product-repeat">
<table cellspacing="2" class="table table-bordered">
                    <tbody>
                        <tr class="datasrow">
                            <td>
                                <div class="data-head">
                                    
                                    <h3>Termék</h3>
                                    <br />
                                    <!--
                                    <input type="submit" name="editProduct" value="Változtat" class="valtoztat">
                                    -->
                                </div>
                                
                                <p><strong>{$egy.termek_marka}</strong> {$egy.termek_nev}</p>
                                <p></p>
                                <!--<p>Unisex keret</p>-->
                                <figure class="cart-product"><img src="{if $egy.termek_csoport>2}{$kepsrc2}{else}{$kepsrc}{/if}{$egy.termek_kep}" height="100"></figure>
                                
                            </td>
                            
                            {if $egy.termek_csoport == 1} {* Ha kontaktlencse *}
                            <td>
                                <div class="data-head">
                                    
                                    <h3>{if $egy.termek_csoport==1}{$ford.szem}{/if}</h3><br />
                                <!--<form action="termekleiras/product-VE3205BA GB1/catnumber-0/editbasket-1" method="post">
                                    <input type="submit" name="editProduct" value="Változtat" class="valtoztat">
                                </form>-->
                                </div>
                            
                                {if $egy.termek_csoport == 1}
                                    <p><center>{$ford.szemek[$egy.termek_szem]}</center></p>
                                {/if}
                                <!-- standard -->
                                <!--
                                <p>Egyfókuszú lencse</p>
                                <p>Standard</p>
                                <p>1,53 PNX / 1,5</p>
                                <p><strong>Keret ára:</strong>&nbsp; 56.410 Ft </p>
                                <p><strong>Csiszolás:</strong>&nbsp;990 Ft</p>
                                <p><strong>Lencse ár:</strong>&nbsp;5.960 Ft</p>
                                -->
                                <!--<p>Ütésálló műanyag lencse, fúrt és damilos kerethez.</p>
                                  <p>Az árból a lencse és a csiszolási költség 6.950 Ft</p>-->
                            </td>
                            
                            <td class="szemadatok">
                                <div class="data-head">
                                    <h3>Szemének adatai</h3><br />
                                <!--<form action="termekleiras/product-VE3205BA GB1/catnumber-0/editbasket-1" method="post">
                                    <input type="submit" name="editProduct" value="Változtat" class="valtoztat">
                                </form>-->
                                </div>
                                
                                {if $egy.jell2} {jellemzoki jell="2" jell_id=$egy.jell2}<br /> {/if}
                                {if $egy.jell1} {jellemzoki jell="1" jell_id=$egy.jell1}<br /> {/if}
                                {if $egy.jell3} {jellemzoki jell="3" jell_id=$egy.jell3}<br /> {/if}
                                {if $egy.jell4} {jellemzoki jell="4" jell_id=$egy.jell4}<br /> {/if}
                                {if $egy.jell5} {jellemzoki jell="5" jell_id=$egy.jell5}<br /> {/if}
                                {if $egy.jell6} {jellemzoki jell="6" jell_id=$egy.jell6}<br /> {/if}
                                {if $egy.jell7} {jellemzoki jell="7" jell_id=$egy.jell7} {/if}
                                
                                {*
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="strongtext"></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="strongtext">SPH:</td>
                                            <td class="dashedborder">jobb: +1,00</td>
                                            <td>bal: +1,00</td>
                                        </tr>
                                        <tr>
                                            <td class="strongtext">CYL:</td>
                                            <td class="dashedborder">jobb: 0,00</td>
                                            <td>bal: 0,00</td>
                                        </tr>
                                        <tr>
                                            <td class="strongtext">A:</td>
                                            <td class="dashedborder">jobb: 0</td>
                                            <td>bal: 0</td>
                                        </tr>
                                        <tr>
                                            <td class="strongtext">Add:</td>
                                            <td class="dashedborder">jobb: 0,00</td>
                                            <td>bal: 0,00</td>
                                        </tr>
                                    </tbody>
                                </table>
                                *}
                            </td>
                            {/if}
                            
                            
                            
                            <td class="mennyiseg_td">
                                <div class="data-head">
                                    <h3>Mennyiség</h3>
                                    <br />
                                    <!--<input type="submit" name="editProduct" value="Változtat" class="valtoztat">-->
                                </div>
                                <input type="hidden" name="egy_ar_{$egy.tetel_id}" value="{$egy.termek_ar}">
                                
                                <select class="form-control" name="mennyisegek[{$egy.tetel_id}]"  id="mennyiseg_{$egy.tetel_id}" onchange="document.urlap2.submit()">
                                {mennyiseg2 db=20 akt=$egy.termek_db}
                                </select>
                                <center>
                                db
                                <br /> x <span class="price"><span class="woocommerce-Price-amount amount">{$egy.termek_ar|arformat}</span></span> </center>
                                <span class="clearfix"> </span>

                                <p class="total"><span class="price"><span class="woocommerce-Price-amount amount">{($egy.termek_db*$egy.termek_ar)|arformat}</span></span></p>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="delete_item"><a href="{$sitenev}{$alnev.kosar}&tetel_id={$egy.tetel_id}&do=torles"> <i class="fa fa-times" aria-hidden="true"></i> Törlés a kosárból </a></div>
                </div>
