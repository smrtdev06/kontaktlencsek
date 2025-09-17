{include 'kosar_oldal/rendeles_menete.tpl'}
    
    <section class="product-overview container clearfix ">
        <div class="col-xs-12 left-section-product step6">
            <h1 class="product_title">{$ford.kosar}</h1>
            
            <div class="clearfix  mt20"></div>
            <div class="lens_selection clearfix">

                <div class="specs-details">
                <form name="urlap2" method="post" action="{$sitenev}{$alnev.kosar}">
                <input type="hidden" name="mennyiseg_mod" value="1">
    
                {foreach from=$tartalom item=egy}
                    {include 'kosar_oldal/kosar_egy_termek.tpl'}
                {/foreach}
                
                </form>
                </div>
                
                <div class="main-flex">
                    <div class="col-md-6 left-form">
                    {*                    
                        <h3>Átvétel, fizetés </h3>
                        <table class="table table-striped">
                            <tr><td width="40%">Próba</td><td>:</td> <td>Próbát kérek</td></tr>
                            <tr><td>Átvétel</td> <td>:</td> <td>Foxpost </td></tr>
                            <tr><td>Fizetési mód</td> <td>:</td> <td>Előre utalás</td></tr>
                            <tr><td>Szállítás</td> <td>:</td> <td>Ingyenes</td></tr>
                        </table>
                    *}
                    </div>
                    
                    
                    <div class="col-md-6 right-form">
                    <h3>Fizetendő összeg</h3>
                        <table class="table table-striped">
                            <tr><td width="40%">Termékek</td><td>:</td> <td align="center">{$osszesen|arformat}</td></tr>
                            <!--<tr><td>Előleg szükséges:</td> <td>:</td> <td>39.487 Ft </td></tr>
                            <tr><td>Szállítás:</td> <td>:</td> <td>Ingyenes</td></tr>
                            <tr><td>Fizetendő átvételkor/utalandó:</td> <td>:</td> <td><strong>{$osszesen|arformat}</strong></td></tr>-->
                        </table>
                    </div>
                
                </div>    
                
                <div class="text-right clearfix">
                        <button class="green-btn" type="button" onclick="window.location.href='/szallitas'">Tovább</button>
                    </div>
                
            </div>
            
        </div>
        
    </section>

    <div class="sticky-stopper"></div>
    