{include 'kosar_oldal/rendeles_menete.tpl'}

{literal} 
<script language="javascript">

var ford_utalas_utan = "{/literal}{$ford.utalas_utan}{literal}";
var ford_foxpost_bankkartya = "{/literal}{$ford.foxpost_bankkartya}{literal}";
var ford_futarceggel_keszpenz = "{/literal}{$ford.futarceggel_keszpenz}{literal}";

var ford_valassz_atveteli_pontot = "{/literal}{$ford.valassz_atveteli_pontot}{literal}";
var ford_valassz_varost = "{/literal}{$ford.valassz_varost}{literal}";
var ford_valassz_optikat = "{/literal}{$ford.valassz_optikat}{literal}";

var ford_valassz_atveteli_pontot2 = "{/literal}{$ford.valassz_atveteli_pontot2}{literal}";
var ford_valassz_varost2 = "{/literal}{$ford.valassz_varost2}{literal}";


var fizmod=0; // itt kell alapérték?
var szalmod=0;
var ossz_ar={/literal}{$osszesen}{literal};
//var ar = 0;
var data = {/literal}{$helyek}{literal};

    //function dinamikusar(fizmod,szalmod){
    //    var arak={{/literal}{$artomb}{literal}};

    //    //ar=arak[fizmod][szalmod];
    //}
    
    function fox_nyitvatartas(v) {
        var nyitvatartasok = {/literal}{$fox_nyitvatartasok}{literal};
        document.getElementById('fox_nyitvatart').innerHTML = nyitvatartasok[v.value].hely_nyitva + '<br />' + nyitvatartasok[v.value].hely_findme + '<br />';
    } 
    
    function nyitvatartas(v) {
        var nyitvatartasok = {/literal}{$nyitvatartasok}{literal};
        
        document.getElementById('nyitvatart').innerHTML = nyitvatartasok[v.value].hely_nyitva;
        //document.getElementById('nyitvatart_hidden').value = nyitvatartasok[v.value].hely_nyitva;
    }
    
    function optika_nyitvatartas(v) {
        var optika_nyitvatartasok = { "0": "", "1" : "{/literal}{$optika1_ny}{literal}", "2" : "{/literal}{$optika2_ny}{literal}", "3" : "{/literal}{$optika3_ny}{literal}", "4" : "{/literal}{$optika4_ny}{literal}" };
        
        document.getElementById('optika_nyitva').innerHTML = '<br />' + optika_nyitvatartasok[v.value];
        
        if( (v.value == 2 || v.value == 4) ) { // && fizmod != 1
            document.getElementById('aznapi_atvetel').disabled = false;
        } else {
            document.getElementById('aznapi_atvetel').disabled = true;
            document.getElementById('aznapi_atvetel').checked = false;
        }
    }
    
    function nyitvatartas2(v) {
        var nyitvatartasok = {/literal}{$nyitvatartasok}{literal};
        
        document.getElementById('nyitvatart2').innerHTML = nyitvatartasok[v.value].hely_nyitva;
        //document.getElementById('nyitvatart_hidden').value = nyitvatartasok[v.value].hely_nyitva;
    }
    
    function hely_feltoltes(f,v,mit) {
        var helyek = data[v.value];
        
        for(var z=f.elements[mit].options.length-1; z>0; z--) {
            f.elements[mit].remove(z);
        }

        if( mit == 'p_varos') {
            for(var z=f.elements['p_hely'].options.length-1; z>0; z--) {
                f.elements['p_hely'].remove(z);
            }
        }
        
        if( v.value > 0 && mit != 'p_hely') {
            for(var i=0; i<helyek.length; i++) {
                f.elements[mit].options[f.elements[mit].options.length] = new Option(helyek[i].hely_nev, helyek[i].hely_id);
            }
        
        } 
        
        if( v.value > 0 && mit == 'p_hely' )  {
            for(var i=0; i<helyek.length; i++) {
                    f.elements[mit].options[f.elements[mit].options.length] = new Option(helyek[i].hely_bolt+': '+helyek[i].hely_cim, helyek[i].hely_id);
                }
            }
    }
    
    function hely_feltoltes2(f,v,mit) {
        var helyek = data[v.value];
        
        for(var z=f.elements[mit].options.length-1; z>0; z--) {
            f.elements[mit].remove(z);
        }

        if( mit == 'p_varos2') {
            for(var z=f.elements['p_hely2'].options.length-1; z>0; z--) {
                f.elements['p_hely2'].remove(z);
            }
        }
        
        if( v.value > 0 && mit != 'p_hely2') {
            for(var i=0; i<helyek.length; i++) {
                f.elements[mit].options[f.elements[mit].options.length] = new Option(helyek[i].hely_nev, helyek[i].hely_id);
            }
        
        } 
        
        if( v.value > 0 && mit == 'p_hely2' )  {
            for(var i=0; i<helyek.length; i++) {
                    f.elements[mit].options[f.elements[mit].options.length] = new Option(helyek[i].hely_bolt+': '+helyek[i].hely_cim, helyek[i].hely_id);
                }
            }
    }
    
    function pickpack_varos_feltoltes(f,v,mit) {
        
        var valtozo = {/literal}{$pickpack_varosok}{literal};
        var helyek = valtozo[v.value];
        
        // változtatáskor kiűrítjük a listát
        for(var z=f.elements[mit].options.length-1; z>0; z--) {
            f.elements[mit].remove(z);
        }

        // ha változott a város kiűrítjük az átváteli pontokat is
        for(var z=f.elements['p_hely'].options.length-1; z>0; z--) {
            f.elements['p_hely'].remove(z);
        }
        
        // majd feltöltjük az aktuális városokkal
        for(var i=0; i<helyek.length; i++) {
            f.elements[mit].options[f.elements[mit].options.length] = new Option(helyek[i].varos, helyek[i].varos_id);
        }
    }
    
    function pickpack_varos_feltoltes2(f,v,mit) {
        
        var valtozo = {/literal}{$pickpack_varosok}{literal};
        var helyek = valtozo[v.value];
        
        // változtatáskor kiűrítjük a listát
        for(var z=f.elements[mit].options.length-1; z>0; z--) {
            f.elements[mit].remove(z);
        }

        // ha változott a város kiűrítjük az átváteli pontokat is
        //for(var z=f.elements['f_hely'].options.length-1; z>0; z--) {
        //    f.elements['f_hely'].remove(z);
        //}
        
        // majd feltöltjük az aktuális városokkal
        for(var i=0; i<helyek.length; i++) {
            f.elements[mit].options[f.elements[mit].options.length] = new Option(helyek[i].varos, helyek[i].varos_id);
        }
    }
    
    
    
    
</script> 

<script src="js/jquery.min.js"></script>
<script src="css/accounting.min.js" type="text/javascript"></script>
<script src="css/termekvalto_uj.js" type="text/javascript"></script>
{/literal}



<section class="product-container clearfix product-details">
<form id="form2" name="form2" method="post" action="{$alnev.szallitas}">

<input type="hidden" name="kedvezmeny" id="kedvezmeny" value="{$kedvezmeny}" />
<input type="hidden" name="kuldveszall" value="1" />
<input type="hidden" name="szallmod" id="szallmod" value="0" />
<input type="hidden" name="fizetesmod" id="fizetesmod" value="0" />


        <div class="container"><div class="row left-section-product">

            <div class="lens_selection">
            <h1 class="product_title">1. Átvétel, fizetés <a data-toggle="tooltip" data-html="true" style="color:#424242" title="Kérjük, hogy válassza ki az Önnek megfelelő átvételi, fizetési módot !"><i class="fa fa-question-circle" aria-hidden="true"></i></a> {if !empty($sz_hiba)} <span class="error">{$sz_hiba}</span> {/if}
            </h1>
                <div class="table-responsive mob-table mt20">
                <table class="table table-hover table-striped">
                    <thead class="mob_none">
                        
                        <tr>
                            <th style="vertical-align:text-top">&nbsp;</th>
                            {*
                            <th style="vertical-align:text-top">
                                <h3 class="blue ">{$ford.eloreutalas} <a data-toggle="tooltip" data-html="true" style="color:#424242" title="{$ford.tip_elore_utalas}"><i class="fa fa-question-circle" aria-hidden="true"></i></a></h3>
                            </th>
                            *}
                            <th style="vertical-align:text-top">
                                
                                <h3 class="green ">{$ford.keszpenz} <a data-toggle="tooltip" data-html="true" style="color:#424242" title="{$ford.tip_utanvet}"><i class="fa fa-question-circle" aria-hidden="true"></i></a></h3>
                            </th>
                            <th style="vertical-align:text-top">
                            
                                <h3 class="blue ">{$ford.bankkartya} <a data-toggle="tooltip" data-html="true" style="color:#424242" title="{$ford.tip_bankkartya}"><i class="fa fa-question-circle" aria-hidden="true"></i></a></h3>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                                            
                                            
                                            
<!--                
<tr>
    <td>
<div class="lens-sel">
<h4>{$ford.foxpost} <span data-toggle="tooltip" data-html="true" title="{$ford.tip_foxpost}"><i class="fa fa-question-circle" aria-hidden="true"></i></span></h4>
</div>
    
    </td>
    <td id="w|5|1|{$szallar_tomb[5][1].ar}" class="oh_hover payment ">
    <h3 class="blue mob-ver">{$ford.eloreutalas}</h3>
        <div class="blue">
            <h2> <span>{$szallar_tomb[5][1].ar} Ft</span></h2>
            <h4> <span>{$ford.ingyenes_felette}</span> {$szallar_tomb[5][1].ingyen|arformat} {$ford.felett}</h4>
        </div>
    </td>
    <td id="w|5|3|{$szallar_tomb[5][3].ar}" class="oh_hover_green payment ">
    <h3 class="green mob-ver">{$ford.keszpenz}</h3>
        <div class="green">
            <h2> <span>{$szallar_tomb[5][3].ar} Ft</span></h2>
            <h4> <span>{$ford.ingyenes_felette}</span> {$szallar_tomb[5][3].ingyen|arformat} {$ford.felett}</h4>
        </div>
    </td>
    <td id="w|5|2|{$szallar_tomb[5][2].ar}" class="oh_hover payment ">
    <h3 class="blue mob-ver">{$ford.bankkartya}</h3>
        <div class="blue">
            <h2> <span>{$szallar_tomb[5][2].ar} Ft</span></h2>
            <h4> <span>{$ford.ingyenes_felette}</span> {$szallar_tomb[5][2].ingyen|arformat} {$ford.felett}</h4>
        </div>
    </td>
</tr>
           
<tr align="left" style="display: none; height:auto;" id="foxpostbox">
<td colspan="3">

        <br>
        <select class="kicsi-select" onchange="foxpost_varos_feltoltes(this.form,this,'f_varos')" size="1" id="f_megye" name="f_megye">
            <option value="0">{$ford.valassz_megyet}</option>
            {foreach from=$f_megyek item=f_megye}
                <option value="{$f_megye.megye_id}">{$f_megye.megye_nev}</option>
            {/foreach}
        </select>
        <br>
        <select class="kicsi-select" onchange="foxpost_hely_feltoltes(this.form,this,'f_hely')" size="1" id="f_varos" name="f_varos">
            <option value="0">{$ford.valassz_varost}</option>
        </select>
        <br>
        <select class="kicsi-select" onchange="fox_nyitvatartas(this)" size="1" id="f_hely" name="f_hely">
            <option value="0">{$ford.valassz_atveteli_pontot}</option>
        </select>
        
        <br>
        <font size="-2">
        <span id="fox_nyitvatart">
        
        </span>
        
        </font>
        <br />
        Foxpost szállítási módnál <b>helyszínen fizetés csak bankkártyával</b> lehetséges<br />
        és rendelését <b>3 napon belül</b> tudja csak átvenni !<br />
        <b>Ismételt kiküldés esetén plusz 590 Ft</b> szállítási többletdíjat számolunk !&nbsp;
        <br />

</td>
</tr>
-->

<!--
<tr>
    <td>
    <div class="lens-sel">
    <h4>{$ford.pickpackpont} <span data-toggle="tooltip" data-html="true" title="{$ford.tip_pickpackpont}"><i class="fa fa-question-circle" aria-hidden="true"></i></span></h4>
    </div>
    </td>
    {*
    <td id="w|3|1|{$szallar_tomb[3][1].ar}" class="oh_hover payment ">
    <h3 class="blue mob-ver">{$ford.eloreutalas}</h3>
        <div class="blue">
            <h2> <span>{$szallar_tomb[3][1].ar} Ft</span></h2>
            <h4> <span>{$ford.ingyenes_felette}</span> {$szallar_tomb[3][1].ingyen|arformat} {$ford.felett}</h4>
        </div>
    </td>
    *}
    <td id="w|3|3|{$szallar_tomb[3][3].ar}" class="oh_hover payment ">
    <h3 class="blue mob-ver">{$ford.keszpenz}</h3>
        <div class="blue">
            <h2> <span>{$szallar_tomb[3][3].ar} Ft</span></h2>
            <h4> <span>{$ford.ingyenes_felette}</span> {$szallar_tomb[3][3].ingyen|arformat} {$ford.felett}</h4>
        </div>
    </td>
    <td id="w|3|2|{$szallar_tomb[3][2].ar}" class="oh_hover payment ">
    <h3 class="blue mob-ver">{$ford.bankkartya}</h3>
        <div class="blue">
            <h2> <span>{$szallar_tomb[3][2].ar} Ft</span></h2>
            <h4> <span>{$ford.ingyenes_felette}</span> {$szallar_tomb[3][2].ingyen|arformat} {$ford.felett}</h4>
        </div>
    </td>
</tr>                                     

<tr style="display: none; height:auto;padding:5px;" id="pickpackbox">
<td colspan="3">
        {*<font color="#ff0000">A pickpack túlterhelt, ha teheti válasszon másik szállítási módot!</font><br />*}
        Budapest: határidő: <b>2-3 munkanap</b><br>
        Vidék: határidő: <b>4-5 munkanap</b><br />
        <br />
        <table cellpadding="10">
        <tr><td>
        <select class="kicsi-select" onchange="pickpack_varos_feltoltes(this.form,this,'p_varos')" size="1" id="p_megye" name="p_megye" >
            <option value="0">{$ford.valassz_megyet} </option>
            {foreach from=$megyek item=megye}
                <option value="{$megye.megye_id}">{$megye.megye_nev}</option>
            {/foreach}
        </select>
        <br /><br />
        <select class="kicsi-select" onchange="hely_feltoltes(this.form,this,'p_hely')" size="1" id="p_varos" name="p_varos">
            <option value="0">{$ford.valassz_varost}</option>
        </select>
        <br /><br />
        <select class="kicsi-select" onchange="nyitvatartas(this)" size="1" id="p_hely" name="p_hely">
            <option value="0">{$ford.valassz_atveteli_pontot}</option>
        </select><br>
        <font size="-2">
        <span id="nyitvatart">
        
        </span>
        </font>
        </td>
        </tr>
        </table>
        <br>
</td>
</tr>                             
-->                                       
                                                
<tr>
    <td>
        <div class="lens-sel">
            <h4>{$ford.futarceggel} <span data-toggle="tooltip" data-html="true" title="{$ford.tip_futarceg}"><i class="fa fa-question-circle" aria-hidden="true"></i></span></h4>
            
        </div>
    </td>
    {*
    <td id="w|2|1|{$szallar_tomb[2][1].ar}" class="oh_hover payment ">
    <h3 class="blue mob-ver">Előre utalás</h3>
        <div class="blue">
            <h2> <span>{$szallar_tomb[2][1].ar} Ft</span></h2>
            <h4> <span>{$ford.ingyenes_felette}</span> {$szallar_tomb[2][1].ingyen|arformat} {$ford.felett}</h4>
        </div>
    </td>
    *}
    <td id="w|2|3|{$szallar_tomb[2][3].ar}" class="oh_hover payment ">
    <h3 class="blue mob-ver">Utánvét/Készpénz </h3>
        <div class="blue">
            <h2> <span>{$szallar_tomb[2][3].ar} Ft</span></h2>
            <h4> <span>{$ford.ingyenes_felette}</span> {$szallar_tomb[2][3].ingyen|arformat} {$ford.felett}</h4>
        </div>
    </td>
    
    <td id="w|2|2|{$szallar_tomb[2][2].ar}" class="oh_hover payment ">
    <h3 class="blue mob-ver">Bankkártyás fizetés</h3>
        <div class="blue">
            <h2> <span>{$szallar_tomb[2][2].ar} Ft</span></h2>
            <h4> <span>{$ford.ingyenes_felette}</span> {$szallar_tomb[2][2].ingyen|arformat} {$ford.felett}</h4>
        </div>
    </td>
</tr>

<tr>
    <td>
        <div class="lens-sel">
            <h4>{$ford.posta} <span data-toggle="tooltip" data-html="true" title="{$ford.tip_posta}"><i class="fa fa-question-circle" aria-hidden="true"></i></span></h4>
            
        </div>
    </td>
    <td id="w|6|3|{$szallar_tomb[6][3].ar}" class="oh_hover payment ">
    <h3 class="blue mob-ver">Utánvét/Készpénz </h3>
        <div class="blue">
            <h2> <span>{$szallar_tomb[6][3].ar} Ft</span></h2>
            <h4> <span>{$ford.ingyenes_felette}</span> {$szallar_tomb[6][3].ingyen|arformat} {$ford.felett}</h4>
        </div>
    </td>
    
    <td id="w|6|2|{$szallar_tomb[6][2].ar}" class="oh_hover payment ">
    <h3 class="blue mob-ver">Bankkártyás fizetés</h3>
        <div class="blue">
            <h2> <span>{$szallar_tomb[6][2].ar} Ft</span></h2>
            <h4> <span>{$ford.ingyenes_felette}</span> {$szallar_tomb[6][2].ingyen|arformat} {$ford.felett}</h4>
        </div>
    </td>
</tr>

                                                
                                                
                                                
        </tbody>
    </table>
    
    
    
</div>
            </div>

            <section class="extras_question">
            <div class="row">
                
            <div class="col-md-4">
                    <div class="table-responsive" id="extrabox" style="display:none;">
                    <table class="table border table-hover table-striped mt20">
                        
                        <tbody>
                        <tr><th colspan="2" style="text-align: center;">Extra opciók</th></tr>
                        <tr id="gls_sor">
                             <td><p>  GLS futár
                                        <span data-toggle="tooltip" data-html="true" title="Csomagját még nagyobb megbízhatósággal kapja meg a GLS futárcég segítségével."><i class="fa fa-question-circle" aria-hidden="true"></i></span>
                                    </p>
                                </td>
                                <td>
                                    <div class="checkbox">  <label><input id="premium_futar" type="checkbox" name="premium_futar" value="200">200 Ft</label></div>
                                </td>
                        </tr>

                            <tr id="sms_sor">
                                <td>
                                    <p>  SMS értesítés
                                        <span data-toggle="tooltip" data-html="true" title="A kézbesítés reggelén a kézbesítés várható idejét egy 3 órás intervallumban elküldjük SMS-ben aznap. Csak a GLS futár szolgáltatással együtt kérhető."><i class="fa fa-question-circle" aria-hidden="true"></i></span>
                                        
                                    </p>
                                </td>
                                <td>
                                    <div class="checkbox">  <label><input id="sms_ertesites" name="sms_ertesites" type="checkbox" disabled="disabled" value="80">80 Ft</label></div>
                                </td>
                                
                                
                            </tr>

                            <tr id="tel_sor">
                                <td>
                                    <p>  Telefonos értesítés
                                        <span data-toggle="tooltip" data-html="true" title="A várható kézbesítést megelőző 1 órán belül a futár felhívja Önt a megadott telefonszámon. Tájékoztatja a várható kiszállítás időpontjáról, az utánvét összegéről vagy az egyéb kapcsolódó szolgáltatásról. Így felkészülhet a csomag átvételére."><i class="fa fa-question-circle" aria-hidden="true"></i></span>
                                        
                                    </p>
                                </td>
                                <td>
                                    <div class="checkbox">  <label><input id="tel_ertesites" name="tel_ertesites" type="checkbox" disabled="disabled" value="80">80 Ft</label></div>
                                </td>
                            </tr>

                            <!--
                            <tr id="aznapi_sor">
                                <td>
                                    <p>  Expressz átvétel
                                        <span data-toggle="tooltip" data-html="true" title="Csak személyes átvétel esetén választható. A termék adatlapján tűntetjük fel, mely terméket tudjuk aznap szállítani. Az aznapi átvétel kontaktlencsék esetében feláras (390 Ft, akciósan 0 Ft), jelenleg a Bartók Béla u. és a Bajcsy Zs. úti üzletünkben elérhető. A délután 3 után és éjfél között, valamint hétvégén leadott rendelésekre következő munkanapi átadást tudunk vállani, amelynek a díja 290 Ft (akciósan 0 Ft). Az ápolószereket rendelés nélkül aznap átveheti boltjainkban felár és rendelés nélkül, de javasoljuk, hogy rendelje meg interneten az ápolószereket is, hogy készlethiány esetén tudjuk értesíteni ! Aznapi vásárlást munkanapokon tudjuk biztosítani a délután 3ig leadott rendelésekre. <br >Az aznapi átvételre csak szűk időkeret áll rendelkezésre: Bajcsy Zs-i út H: 17.40-18.00 K-CS: 17.40-19.00 P: 17.40-18.00"><i class="fa fa-question-circle" aria-hidden="true"></i></span>
                                        
                                    </p>
                                </td>
                                <td>
                                    <div class="checkbox">  <label><input name="aznapi_atvetel" id="aznapi_atvetel" type="checkbox" value="">0 Ft</label></div>
                                </td>
                            </tr>
                            -->

                        </tbody>
                    </table>
                </div>

            </div>




            <div class="col-md-4 col-md-offset-4">
                <table class="table border table-striped mt20">
                                    <tr>
                                        <th colspan="3" style="text-align: center;">{$ford.ar}</th>
                                    </tr>
                                    <tr>
                                        <td>{$ford.termek_ara}</td>
                                        <td>:</td>
                                        <td><span id="osz_ar">{$osszesen|arformat}</span></td>
                                    </tr>
                                    {if $kedvezmeny>0}
                                    <tr>
                                        <td>{$ford.kedvezmeny}</td>
                                        <td>:</td>
                                        <td><span id="kedvezmeny">- {$kedvezmeny|arformat}</span></td>
                                    </tr>
                                    {/if}
                                    <tr>
                                        <td>{$ford.szallitasi_koltseg}</td>
                                        <td>:</td>
                                        <td><span id="szall_ar">{$szall_ar|arformat}</span></td>
                                    </tr>
                                    
                                    <tr>
                                        <td><strong>{$ford.osszesen}</strong>
                                        </td>
                                        <td>:</td>
                                        <td><strong><span id="osszesen">{($osszesen-$kedvezmeny)|arformat}</span></strong>
                                        </td>
                                    </tr>
                                </table>    
            <div class="text-right clearfix">
            <button class="green-btn" type="submit">Tovább</button>

        </div>

            </div>

            </div>    

          </section>
            
        </div>
        <!--<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
            <div class="summary">
                <div class="brandLogo"><img src="images/tommy_hilfiger_logo.jpg" alt="" class="img-responsive"/>
                </div>
                <div class="side-product">
                    <h2>Az ön által válaszott keret:</h2>
                    <h3> Emporio Armani <small>EA3099 5553</small></h3>
                    <img src="images/44750.jpg"/>
                    <p><strong>Leírás:</strong> Emporio Armani EA3099 5553</p>
                </div>
                <button type="submit" class="green-btn dsktp_none">Next</button>
            </div>
        </div>-->


        
<input value="w|2|1|990" name="paymentMode" id="paymentMode" type="hidden">   
</form>        
</section>


    