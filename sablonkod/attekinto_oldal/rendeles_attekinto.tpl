{include 'kosar_oldal/rendeles_menete.tpl'}

    <section class="product-overview container clearfix ">
        <div class="col-xs-12 left-section-product step6">

        <form method="POST" action="/{$alnev.megrendeles}" onSubmit="return disableForm(this);">
        
            <h1 class="product_title">Rendelés áttekintő</h1>
            <div class="clearfix  mt20"></div>
            <div class="lens_selection clearfix">


            <div class="specs-details">
                
                {foreach from=$tetelek item=t}
                <div class="product-repeat">
                    <table cellspacing="2" class="table table-bordered">
                    <tbody>
                        <tr class="datasrow">
                            <td>
                                <div class="data-head">
                                    <h3>Termék</h3>
                                    <br />
                                </div>
                                
                                <p>{$t.termek_nev}</p>
                                <figure class="cart-product"><img src="{if $egy_termek.termek_csoport==3}{$kepsrc2}{else}{$kepsrc}{/if}{$t.termek_kep}"></figure>
                                
                            </td>
                            {if $t.termek_csoport == 1}
                            <td>
                                <div class="data-head">
                                    <h3>{if $t.termek_csoport==1}{$ford.szem}{/if}</h3>
                                    <br />
                                </div>
                            
                                {if $t.termek_csoport == 1}
                                    <p><center>{$ford.szemek[$t.termek_szem]}</center></p>
                                {/if}
                                
                                <!-- standard -->
                                <!--<p>Ütésálló műanyag lencse, fúrt és damilos kerethez.</p>
                                  <p>Az árból a lencse és a csiszolási költség 6.950 Ft</p>-->
                            </td>
                            
                            <td class="szemadatok">
                                <div class="data-head">
                                    <h3>Szemének adatai</h3>
                                    <br />
                                </div>

                                {if $t.jell2} {jellemzoki jell="2" jell_id=$t.jell2}<br /> {/if}
                                {if $t.jell1} {jellemzoki jell="1" jell_id=$t.jell1}<br /> {/if}
                                {if $t.jell3} {jellemzoki jell="3" jell_id=$t.jell3}<br /> {/if}
                                {if $t.jell4} {jellemzoki jell="4" jell_id=$t.jell4}<br /> {/if}
                                {if $t.jell5} {jellemzoki jell="5" jell_id=$t.jell5}<br /> {/if}
                                {if $t.jell6} {jellemzoki jell="6" jell_id=$t.jell6}<br /> {/if}
                                {if $t.jell7} {jellemzoki jell="7" jell_id=$t.jell7} {/if}
                                
                                
                            </td>
                            {/if}
                            <td class="mennyiseg_td">
                                <div class="data-head">
                                    <h3>{$ford.mennyiseg}</h3>
                                    <br />
                                </div>
                                
                                <div align="center">
                                <br />
                                {$t.termek_db} x {$t.termek_ar|arformat} = <span class="price"><span class="woocommerce-Price-amount amount">{($t.termek_db*$t.termek_ar)|arformat} <!--<small>72.820 Ft</small>--></span></span>
                                </div>
                                
                                <!--<span class="clearfix"> &nbsp; </span>-->

                                {*
                                <p class="total"><span class="price"><span class="woocommerce-Price-amount amount">{($t.termek_db*$t.termek_ar)|arformat} <!--<small>72.820 Ft</small>--></span></span></p>
                                *}
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="delete_item"> <!--<a href="#"> <i class="fa fa-times" aria-hidden="true"></i>  Törlés a kosárból </a>--> </div></div>
                {/foreach}
            </div>
            
        </div>

            <div class="lens_selection clearfix step4">
                <div class="top-head"><h3>{$ford.szemelyes_adatok}</h3></div>
            
            <div class="main-flex">
                <div class="col-md-6 left-form">
                    <table class="table table-striped">
                        <tr><td width="40%">{$ford.nev}</td><td>:</td><td>{$user_adat.felh_csaladnev} {$user_adat.felh_keresztnev}</td></tr>
                        <tr><td>Telefonszám</td> <td>:</td> <td>+36{$user_adat.felh_mobil1}/{$user_adat.felh_mobil2}, {$user_adat.felh_telefon}</td></tr>
                        <tr><td>Város</td> <td>:</td> <td>{$user_adat.felh_varos}</td></tr>
                        <tr><td>Utca, házszám</td> <td>:</td> <td>{$user_adat.felh_utca}</td></tr>
                        <tr><td>Irányítószám</td> <td>:</td> <td>{$user_adat.felh_irsz}</td></tr>
                        <!--<tr><td>Megye</td> <td>:</td> <td>India</td></tr>-->
                    </table>
                </div>
            
                <div class="col-md-6 right-form">
                    <table class="table table-striped">
                        <!--<tr><td width="40%">Számlázási cím</td><td>:</td> <td>A-36, Janak puri</td></tr>-->
                        <tr><td>Számlanév</td> <td>:</td> <td>{$user_adat.felh_szamlanev}</td></tr>
                        <tr><td>Város</td> <td>:</td> <td>{$user_adat.felh_szvaros}</td></tr>
                        <tr><td>Utca, házszám</td> <td>:</td> <td>{$user_adat.felh_szutca}</td></tr>
                        <tr><td>Irányítószám</td> <td>:</td> <td>{$user_adat.felh_szirsz}</td></tr>
                        <!-- <tr><td>Megye</td> <td>:</td> <td>New Delhi</td></tr>-->
                    </table>
                </div>
                
                
            </div>
                <div class="col-md-12 right-form">
                    <a href="/regisztracio" class="btn btn-success" role="button">Módosítom</a>
                </div>
                
            </div>
            
            <div class="lens_selection clearfix step4">
            
            <div class="main-flex">
                <div class="col-md-6 left-form">
                    <h3>Átvétel, fizetés </h3>
                    
                    <table class="table table-striped">
                        
                        <!--<tr><td width="40%">Próba</td><td>:</td> <td>Próbát kérek</td></tr>-->
                        <tr><td>Átvétel</td> <td>:</td> <td>{$szallmod_ki}</td></tr>
                        <tr><td>Fizetési mód</td> <td>:</td> <td>{$fizmod_ki}</td></tr>
                        <tr><td>Szállítás</td> <td>:</td> <td>Ingyenes</td></tr>
                        
                        
                    </table>
                    
                </div>
            
                <div class="col-md-6 right-form">
                <h3>{$ford.ar}</h3>
                    <table class="table table-striped">
                        <tr><td width="40%">Termékek</td><td>:</td> <td>{$osszesen|arformat}</td></tr>
                        <!--<tr><td>Előleg szükséges:</td> <td>:</td> <td>39.487 Ft </td></tr>-->
                        <tr><td>Szállítás:</td> <td>:</td> <td>{$szallitas_osszeg|arformat}</td></tr>
                        <tr><td>{$ford.osszesen}:</td> <td>:</td> <td><strong>{$mindosszesen|arformat}</strong></td></tr>
                    </table>
                </div>
            </div>
                <div class="col-md-12 right-form">
                    <a href="/szallitas" class="btn btn-success" role="button">Módosítom</a>
                </div>    
                
                
            </div>
            
            <div class="lens_selection clearfix step4">
                <div class="top-head"><h3>{$ford.megjegyzes}</h3></div>
            
                <div class="comment-area text-right"><textarea name="megjegyzes" class="form-control">{$user_adat.felh_megjegyzes}</textarea>
                    <input type="submit" class="btn btn-danger mt10" value="Rendelés feladása" />
                </div>
            </div>

        </form>                
        
        </div>
    </section>