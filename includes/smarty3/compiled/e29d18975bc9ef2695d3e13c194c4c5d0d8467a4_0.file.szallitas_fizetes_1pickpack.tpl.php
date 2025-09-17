<?php
/* Smarty version 3.1.30, created on 2018-06-01 13:14:44
  from "/var/www/vhosts/lencsek.hu/uj.lencsek.hu/sablonkod/nezetek/szallitas_fizetes_1pickpack.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b112aa4156d89_33019284',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e29d18975bc9ef2695d3e13c194c4c5d0d8467a4' => 
    array (
      0 => '/var/www/vhosts/lencsek.hu/uj.lencsek.hu/sablonkod/nezetek/szallitas_fizetes_1pickpack.tpl',
      1 => 1527851681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b112aa4156d89_33019284 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="product-container clearfix product-details">
        <div class="container"><div class="row left-section-product">



            <div class="lens_selection">
            <h1 class="product_title">1. Átvétel, fizetés <a data-toggle="tooltip" data-html="true" style="color:#424242" title="Kérjük, hogy válassza ki az Önnek megfelelő átvételi, fizetési módot !"><i class="fa fa-question-circle" aria-hidden="true"></i></a>
            
            
            </h1>
                <div class="table-responsive mob-table mt20">
                                        <table class="table table-hover table-striped">
                                            <thead class="mob_none">
                                                <tr>
                                                    <th style="vertical-align:text-top">&nbsp;</th>
                                                    <th style="vertical-align:text-top">
                                                        <h3 class="blue ">Előre utalás </h3>
                                                    </th>
                                                    
                                                    <th style="vertical-align:text-top">
                                                        
                                                        <h3 class="green ">Utánvét/Készpénz </h3>
                                                    </th>
                                                    <th style="vertical-align:text-top">
                                                    
                                                        <h3 class="blue ">Bankkártyás fizetés</h3>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="lens-sel">
                                                            <h4>Átvételi pontok:</h4>
                            <div class="radio">
                                <label><input type="radio" name="pick-pack"> Foxpost <span data-toggle="tooltip" data-html="true" title="Foxpost átvétel, a kiszállítástól számított 3 munkanapig tárolják a csomagot."><i class="fa fa-question-circle" aria-hidden="true"></i></span> </label>
                </div>

                <div class="radio">
                    <label><input type="radio" name="pick-pack"> Pick-pack <span data-toggle="tooltip" data-html="true" title="Amennyiben nem tud megadni olyan átvételi helyet, ahol hétköznap 8-17 óra között át tudják venni csomagot, illetve nem akarja egész nap a futárt, postást várni úgy lehetősége van az ország több mint 220 Pick-pack pontján átvenni azt. A Pick-pack pontok  RELAY és INMEDIO  újság üzletek, melyek frekventált helyeken találhatóak meg. Többségükben bankkártyával is fizethet és hétvégén is nyitva vannak. SZÁLLÍTÁSI IDŐ: A CSOMAG FELADÁST  követő GARANTÁLTAN 2. munkanap."><i class="fa fa-question-circle" aria-hidden="true"></i></span> </label>
                </div>
                                                        </div>
                                                    </td>
                                                    <td class="oh_hover">
                                                    <h3 class="blue mob-ver">Előre utalás </h3>
                                                        <div class="blue">
                                                            <h2>2.490 Ft</h2>
                                                            <h4> <span>Ingyenes</span>  3.000 Ft felett</h4> </div>
                                                    </td>
                                                    <td class="oh_hover_green">
                                                    <h3 class="green mob-ver">Utánvét/Készpénz </h3>
                                                        <div class="green">
                                                            <h2>2.490 Ft</h2>
                                                            <h4> <span>Ingyenes</span>  3.000 Ft felett</h4> </div>
                                                    </td>
                                                    <td class="oh_hover">
                                                    <h3 class="blue mob-ver">Bankkártyás fizetés</h3>
                                                        <div class="blue">
                                                            <h2>2.490 Ft</h2>
                                                            <h4> <span>Ingyenes</span>  3.000 Ft felett</h4> </div>
                                                    </td>
                                                </tr>
                                                
                                                
                                                <tr><td>
                                                    
                                                    <div class="form-group"><select name="p_megye" size="1" onchange="hely_feltoltes(this.form,this,'p_varos')" class="form-control">
        <option value="0">Válassz megyét</option>
                    <option value="13">Bács-Kiskun</option>
                    <option value="11">Baranya</option>
                    <option value="15">Békés</option>
                    <option value="18">Borsod-Abaúj-Zemplén</option>
                    <option value="24">Budapest</option>
                    <option value="14">Csongrád</option>
                    <option value="5">Fejér</option>
                    <option value="12">Győr-Moson-Sopron</option>
                    <option value="16">Hajdú-Bihar</option>
                    <option value="3">Heves</option>
                    <option value="17">Jász-Nagykun-Szolnok</option>
                    <option value="4">Komárom-Esztergom</option>
                    <option value="2">Nógrád</option>
                    <option value="1">Pest</option>
                    <option value="9">Somogy</option>
                    <option value="19">Szabolcs-Szatmár-Bereg</option>
                    <option value="10">Tolna</option>
                    <option value="7">Vas</option>
                    <option value="6">Veszprém</option>
                    <option value="8">Zala</option>
                        </select></div>
                        
                        
                        <div class="form-group"><select name="p_varos" size="1" onchange="hely_feltoltes(this.form,this,'p_hely')" class="form-control">
        <option value="0">Válassz várost/kerületet</option>
        </select></div>
                                                
        <div class="form-group"><select name="p_hely" size="1" onchange="nyitvatartas(this)" class="form-control">
        <option value="0">Válassz átvételi pontot</option>
        </select>    </div>                                    
                                                
                                                </td>
                                                
                                                <td colspan="3"></td>
                                                
                                                </tr>
                                                
                                                
                                                <tr>
                                                    <td>
                                                        <div class="lens-sel">
                                                            <h4>Futárcéggel <span data-toggle="tooltip" data-html="true" title="A futárral való szállí­tás előnyt jelenthet, ha sürgős a szállí­tás, mivel a kézbesí­tés nagyobb biztonságú és sikertelen kézbesí­tés esetén telefonon egyeztetnek az újabb szállí­tási időpontról. Kérjük, hogy olyan szállí­tási cí­met adjon meg, ahol hétköznap 8-17 óra között át tudják venni a csomagot, a futár csak ebben az időpontban kézbesít ! Felhívjuk figyelmét, hogy napon belül nem tudjuk meghatározott időre küldeni a csomagot ! Amennyiben ez probléma Önnek, kérjük, hogy válasszon egy Pick-pack pontot az átvétel helyének ! SZÁLLÍTÁSI IDŐ: A CSOMAG FELADÁST  követő GARANTÁLTAN Budapesten 1., vidékre általában 1., maximum 2. munkanap."><i class="fa fa-question-circle" aria-hidden="true"></i></span></h4>
                                                            
                                                        </div>
                                                    </td>
                                                    <td class="oh_hover">
                                                    <h3 class="blue mob-ver">Előre utalás</h3>
                                                        <div class="blue">
                                                            <h2>2.490 Ft</h2>
                                                            <h4> <span>Ingyenes</span>  3.000 Ft felett</h4></h4> </div>
                                                    </td>
                                                    <td class="oh_hover_green">
                                                    <h3 class="green mob-ver">Utánvét/Készpénz </h3>
                                                        <div class="green">
                                                            <h2>2.490 Ft</h2>
                                                            <h4> <span>Ingyenes</span>  3.000 Ft felett</h4> </div>
                                                    </td>
                                                    
                                                    <td class="oh_hover">
                                                    <h3 class="blue mob-ver">Bankkártyás fizetés</h3>
                                                        <div class="blue">
                                                            <h2>2.490 Ft</h2>
                                                            <h4> <span>Ingyenes</span>  3.000 Ft felett</h4> </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="lens-sel">
                                                            
                                                            <h4> Személyesen <span data-toggle="tooltip" data-html="true" title="Partnerünk boltjában, a Blahánál 1088 Bp. József Krt. 11. vagy a Nyugatinál 1065 Bp. Bajcsy-Zsilinszky 55. szám alatt található optikában. Szállítási idő: 0-1 munkanap (raktáron lévő termékek esetében). A nem fizetett terméket maximum 2 munkanapig tudjuk félretenni!"><i class="fa fa-question-circle" aria-hidden="true"></i></span> </h4>
                                                            
                                                        </div>
                                                    </td>
                                                    <td class="oh_hover">
                                                    <h3 class="blue mob-ver">Előre utalás </h3>
                                                        <div class="blue">
                                                            <h2>2.490 Ft</h2>
                                                            <h4> <span>Ingyenes</span>  3.000 Ft felett</h4> </div>
                                                    </td>
                                                    <td class="oh_hover_green">
                                                    <h3 class="green mob-ver">Utánvét/Készpénz</h3>
                                                        <div class="green">
                                                            <h2>2.490 Ft</h2>
                                                            <h4> <span>Ingyenes</span>  3.000 Ft felett</h4> </div>
                                                    </td>
                                                    <td class="oh_hover oh_hover_active">
                                                    <h3 class="blue mob-ver">Bankkártyás fizetés</h3>
                                                        <div class="blue">
                                                            <h2>2.490 Ft</h2>
                                                            <h4> <span>Ingyenes</span>  3.000 Ft felett</h4> </div>
                                                    </td>
                                                </tr>
                                                
                                                
                                                
                                            </tbody>
                                        </table>
                                    </div>
                
                
                
            </div>



            <section class="extras_question">
                
                
            <div class="row">
                
            <div class="col-md-4">
                    <div class="table-responsive">
                    <table class="table border table-hover table-striped mt20">
                        
                        <tbody>
                        <tr><th colspan="2" style="text-align: center;">
                             Extra opciók 

                        </th></tr>
                            <tr>
                                <td>
                                    <p>  GLS futár
                                        <span data-toggle="tooltip" data-html="true" title="Csomagját még nagyobb megbízhatósággal kapja meg a GLS futárcég segítségével."><i class="fa fa-question-circle" aria-hidden="true"></i></span>
                                        
                                    </p>
                                </td>
                                <td>
                                    <div class="checkbox">  <label><input type="checkbox" value="">200 Ft</label></div>
                                </td>
                                
                                
                            </tr>

                            <tr>
                                <td>
                                    <p>  SMS értesítés
                                        <span data-toggle="tooltip" data-html="true" title="A kézbesítés reggelén a kézbesítés várható idejét egy 3 órás intervallumban elküldjük SMS-ben aznap. Csak a GLS futár szolgáltatással együtt kérhető."><i class="fa fa-question-circle" aria-hidden="true"></i></span>
                                        
                                    </p>
                                </td>
                                <td>
                                    <div class="checkbox">  <label><input type="checkbox" value="">80 Ft</label></div>
                                </td>
                                
                                
                            </tr>

                            <tr>
                                <td>
                                    <p>  Telefonos értesítés
                                        <span data-toggle="tooltip" data-html="true" title="A várható kézbesítést megelőző 1 órán belül a futár felhívja Önt a megadott telefonszámon. Tájékoztatja a várható kiszállítás időpontjáról, az utánvét összegéről vagy az egyéb kapcsolódó szolgáltatásról. Így felkészülhet a csomag átvételére."><i class="fa fa-question-circle" aria-hidden="true"></i></span>
                                        
                                    </p>
                                </td>
                                <td>
                                    <div class="checkbox">  <label><input type="checkbox" value="">80 Ft</label></div>
                                </td>
                                
                                
                            </tr>


                            <tr>
                                <td>
                                    <p>  Expressz átvétel
                                        <span data-toggle="tooltip" data-html="true" title="Csak személyes átvétel esetén választható. A termék adatlapján tűntetjük fel, mely terméket tudjuk aznap szállítani. Az aznapi átvétel kontaktlencsék esetében feláras (390 Ft, akciósan 0 Ft), jelenleg a Bartók Béla u. és a Bajcsy Zs. úti üzletünkben elérhető. A délután 3 után és éjfél között, valamint hétvégén leadott rendelésekre következő munkanapi átadást tudunk vállani, amelynek a díja 290 Ft (akciósan 0 Ft). Az ápolószereket rendelés nélkül aznap átveheti boltjainkban felár és rendelés nélkül, de javasoljuk, hogy rendelje meg interneten az ápolószereket is, hogy készlethiány esetén tudjuk értesíteni ! Aznapi vásárlást munkanapokon tudjuk biztosítani a délután 3ig leadott rendelésekre. <br >Az aznapi átvételre csak szűk időkeret áll rendelkezésre: Bajcsy Zs-i út H: 17.40-18.00 K-CS: 17.40-19.00 P: 17.40-18.00"><i class="fa fa-question-circle" aria-hidden="true"></i></span>
                                        
                                    </p>
                                </td>
                                <td>
                                    <div class="checkbox">  <label><input type="checkbox" value="">0 Ft</label></div>
                                </td>
                                
                                
                            </tr>




                            


                            
                        </tbody>
                    </table>
                </div>


            </div>




            <div class="col-md-4 col-md-offset-4">
                    
                
                <table class="table border table-striped mt20">
                                    <tr>
                                        <th colspan="3" style="text-align: center;">Ár</th>
                                    </tr>
                                    <tr>
                                        <td> Termék ára</td>
                                        <td>:</td>
                                        <td> 42 760 Ft</td>
                                    </tr>
                                    <tr>
                                        <td>Szállítási költség*</td>
                                        <td>:</td>
                                        <td>0 ft</td>
                                    </tr>
                                    
                                    <tr>
                                        <td><strong>Összesen</strong>
                                        </td>
                                        <td>:</td>
                                        <td><strong>42 760 Ft</strong>
                                        </td>
                                    </tr>



                                </table>    


            <div class="text-right clearfix mt40">
            <button class="green-btn" type="submit">Next</button>

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
    </section>



 
<?php echo '<script'; ?>
 language="javascript">

var ford_utalas_utan = "<?php echo $_smarty_tpl->tpl_vars['ford']->value['utalas_utan'];?>
";
var ford_foxpost_bankkartya = "<?php echo $_smarty_tpl->tpl_vars['ford']->value['foxpost_bankkartya'];?>
";
var ford_futarceggel_keszpenz = "<?php echo $_smarty_tpl->tpl_vars['ford']->value['futarceggel_keszpenz'];?>
";

var ford_valassz_atveteli_pontot = "<?php echo $_smarty_tpl->tpl_vars['ford']->value['valassz_atveteli_pontot'];?>
";
var ford_valassz_varost = "<?php echo $_smarty_tpl->tpl_vars['ford']->value['valassz_varost'];?>
";
var ford_valassz_optikat = "<?php echo $_smarty_tpl->tpl_vars['ford']->value['valassz_optikat'];?>
";

var ford_valassz_atveteli_pontot2 = "<?php echo $_smarty_tpl->tpl_vars['ford']->value['valassz_atveteli_pontot2'];?>
";
var ford_valassz_varost2 = "<?php echo $_smarty_tpl->tpl_vars['ford']->value['valassz_varost2'];?>
";


var fizmod=0; // itt kell alapérték?
var szalmod=0;
var ossz_ar=<?php echo $_smarty_tpl->tpl_vars['osszesen']->value;?>
;
//var ar = 0;
var data = <?php echo $_smarty_tpl->tpl_vars['helyek']->value;?>
;

    //function dinamikusar(fizmod,szalmod){
    //    var arak={<?php echo $_smarty_tpl->tpl_vars['artomb']->value;?>
};

    //    //ar=arak[fizmod][szalmod];
    //}
    
    function fox_nyitvatartas(v) {
        var nyitvatartasok = <?php echo $_smarty_tpl->tpl_vars['fox_nyitvatartasok']->value;?>
;
        document.getElementById('fox_nyitvatart').innerHTML = nyitvatartasok[v.value].hely_nyitva + '<br />' + nyitvatartasok[v.value].hely_findme + '<br />';
    } 
    
    function nyitvatartas(v) {
        var nyitvatartasok = <?php echo $_smarty_tpl->tpl_vars['nyitvatartasok']->value;?>
;
        
        document.getElementById('nyitvatart').innerHTML = nyitvatartasok[v.value].hely_nyitva;
        //document.getElementById('nyitvatart_hidden').value = nyitvatartasok[v.value].hely_nyitva;
    }
    
    function optika_nyitvatartas(v) {
        var optika_nyitvatartasok = { "0": "", "1" : "<?php echo $_smarty_tpl->tpl_vars['optika1_ny']->value;?>
", "2" : "<?php echo $_smarty_tpl->tpl_vars['optika2_ny']->value;?>
", "3" : "<?php echo $_smarty_tpl->tpl_vars['optika3_ny']->value;?>
", "4" : "<?php echo $_smarty_tpl->tpl_vars['optika4_ny']->value;?>
" };
        
        document.getElementById('optika_nyitva').innerHTML = '<br />' + optika_nyitvatartasok[v.value];
        
        if( (v.value == 2 || v.value == 4) ) { // && fizmod != 1
            document.getElementById('aznapi_atvetel').disabled = false;
        } else {
            document.getElementById('aznapi_atvetel').disabled = true;
            document.getElementById('aznapi_atvetel').checked = false;
        }
    }
    
    function nyitvatartas2(v) {
        var nyitvatartasok = <?php echo $_smarty_tpl->tpl_vars['nyitvatartasok']->value;?>
;
        
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
        
        var valtozo = <?php echo $_smarty_tpl->tpl_vars['pickpack_varosok']->value;?>
;
        var helyek = valtozo[v.value];
        
        // változtatáskor kiűrítjük a listát
        for(var z=f.elements[mit].options.length-1; z>0; z--) {
            f.elements[mit].remove(z);
        }

        // ha változott a város kiűrítjük az átváteli pontokat is
        for(var z=f.elements['f_hely'].options.length-1; z>0; z--) {
            f.elements['f_hely'].remove(z);
        }
        
        // majd feltöltjük az aktuális városokkal
        for(var i=0; i<helyek.length; i++) {
            f.elements[mit].options[f.elements[mit].options.length] = new Option(helyek[i].varos, helyek[i].varos_id);
        }
    }
    
    function pickpack_varos_feltoltes2(f,v,mit) {
        
        var valtozo = <?php echo $_smarty_tpl->tpl_vars['pickpack_varosok']->value;?>
;
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
    
    function foxpost_varos_feltoltes(f,v,mit) {
        
        var foxpost_varosok = <?php echo $_smarty_tpl->tpl_vars['foxpost_varosok']->value;?>
;
        var helyek = foxpost_varosok[v.value];
        
        // változtatáskor kiűrítjük a listát
        for(var z=f.elements[mit].options.length-1; z>0; z--) {
            f.elements[mit].remove(z);
        }

        // ha változott a város kiűrítjük az átváteli pontokat is
        for(var z=f.elements['f_hely'].options.length-1; z>0; z--) {
            f.elements['f_hely'].remove(z);
        }
        
        // majd feltöltjük az aktuális városokkal
        for(var i=0; i<helyek.length; i++) {
            f.elements[mit].options[f.elements[mit].options.length] = new Option(helyek[i].varos, helyek[i].varos_id);
        }
    }
    
    function foxpost_hely_feltoltes(f,v,mit) {
        
        var foxpost_data = <?php echo $_smarty_tpl->tpl_vars['foxpost_helyek']->value;?>
;
        var helyek = foxpost_data[v.value];
        
        // változtatáskor kiűrítjük a listát
        for(var z=f.elements[mit].options.length-1; z>0; z--) {
            f.elements[mit].remove(z);
        }

        if( v.value > 0 && mit != 'f_hely') {
            for(var i=0; i<helyek.length; i++) {
                f.elements[mit].options[f.elements[mit].options.length] = new Option(helyek[i].hely_nev, helyek[i].hely_id);
            }
        
        } 
        
        if( v.value > 0 && mit == 'f_hely' )  {
            for(var i=0; i<helyek.length; i++) {
                    f.elements[mit].options[f.elements[mit].options.length] = new Option(helyek[i].hely_nev + ' : ' + helyek[i].hely_cim, helyek[i].hely_id);
                }
            }
    }
    
    function checkPick() {
        if(document.getElementById('pickpackbox').style.display =="block")
        {
            if(document.form2.p_megye.value==0)
            {
                alert( ford_valassz_atveteli_pontot );
                document.form2.p_megye.focus();
                return false;
            }
            else if(document.form2.p_varos.value==0)
            {
                alert( ford_valassz_varost );
                document.form2.p_varos.focus();
                return false;
            }
            else if(document.form2.p_hely.value==0)
            {
                alert( ford_valassz_atveteli_pontot );
                document.form2.p_hely.focus();
                return false;
            }
            
            if(document.form2.p_megye2.value==0)
            {
                //alert( ford_valassz_atveteli_pontot2 );
                //document.form2.p_megye2.focus();
                //return false;
            }
            else if(document.form2.p_varos2.value==0)
            {
                //alert( ford_valassz_varost2 );
                //document.form2.p_varos2.focus();
                //return false;
            }
            else if(document.form2.p_hely2.value==0)
            {
                //alert( ford_valassz_atveteli_pontot2 );
                //document.form2.p_hely2.focus();
                //return false;
            }
        }
        
        if(document.getElementById('optikabox').style.display =="block")
        {
            if(document.form2.optika_id.value==0)
            {
                alert( ford_valassz_optikat );
                document.form2.optika_id.focus();
                return false;
            }
            
        }
        
    }
   
<?php echo '</script'; ?>
> 

<link rel="stylesheet" type="text/css" href="css/atvetel.css" />
<link rel="stylesheet" type="text/css" href="css/main.css" />

<?php echo '<script'; ?>
 src="css/accounting.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="css/jquery_compress.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="css/termekvalto_uj.js" type="text/javascript"><?php echo '</script'; ?>
>


<div id="overDiv" style="position:absolute; visibility:hidden; z-index:1000;"></div>

<!-- Teszt -->
<form id="form2" name="form2" method="post" action="<?php echo $_smarty_tpl->tpl_vars['alnev']->value['szallitas'];?>
" onsubmit="return checkPick();">
<input type="hidden" name="kedvezmeny" id="kedvezmeny" value="<?php echo $_smarty_tpl->tpl_vars['kedvezmeny']->value;?>
" />
<div class="cont-block transport" style="border-color:#80776f; width:760px;">
    <input type="hidden" name="kuldveszall" value="1">
    <table width="100%" align="center" cellpadding="5" cellspacing="2">
      <tr>
        <td height="30" ><!-- innentől --> 
          <?php if (!empty($_smarty_tpl->tpl_vars['sz_hiba']->value)) {?> <span class="error"><?php echo $_smarty_tpl->tpl_vars['sz_hiba']->value;?>
</span> <?php }?>
          <!-- itt volt a régi szállítás -->
          <!--
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['szall_tomb']->value, 'egysor');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['egysor']->value) {
?>
      <tr align="center">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['egysor']->value, 'egyoszlop');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['egyoszlop']->value) {
?>
          <td><?php echo szallarformat(array('ar'=>$_smarty_tpl->tpl_vars['egyoszlop']->value['ar'],'ingyen'=>$_smarty_tpl->tpl_vars['egyoszlop']->value['ingyen']),$_smarty_tpl);?>
</td>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
      </tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

--> 
          
          <!-- ------------------------------------------------------------------------------------------------------------------------------------------------ -->
         
          <!-- 
              0 - probaval/noproba
              1 - átvétel módja (1-futár, 2- posta, 3 partner)
              2 - fizetés módja (1- előrre, 2-utánvét, 3-bankkártya, 4-paypal) 
              3 - értéke (free/érték)
              <a href="#" id="noprobe|2|2|free" class="payment">Ingyenes</a>
              -->
 
    <div class="nincsproba_box" >           
                <div class="ures"></div>
                <div class="fizetesi_modok"><p><?php echo $_smarty_tpl->tpl_vars['ford']->value['eloreutalas'];?>
<img onmouseover="Tip('<?php echo $_smarty_tpl->tpl_vars['ford']->value['tip_elore_utalas'];?>
')" onmouseout="UnTip()" class="kerdojelicon_szallmod" title="Ide jön majd a magyarázó szöveg!" alt="Mi ez pontosan?" src="images/kerdojel_icon_sotet.gif" height="20" /></p><span class="lefelenyil">&nbsp;</span></div>
                <div class="fizetesi_modok"><p style="margin-top:6px;"><?php echo $_smarty_tpl->tpl_vars['ford']->value['keszpenz'];?>
<img onmouseover="Tip('<?php echo $_smarty_tpl->tpl_vars['ford']->value['tip_utanvet'];?>
')" onmouseout="UnTip()" class="kerdojelicon_szallmod" title="Ide jön majd a magyarázó szöveg!" alt="Mi ez pontosan?" src="images/kerdojel_icon_sotet.gif" height="20" /></p><span class="lefelenyil">&nbsp;</span></div>                        
                <div class="fizetesi_modok"><p style="margin-top:6px;"><?php echo $_smarty_tpl->tpl_vars['ford']->value['bankkartya'];?>
<img onmouseover="Tip('<?php echo $_smarty_tpl->tpl_vars['ford']->value['tip_bankkartya'];?>
')" onmouseout="UnTip()" class="kerdojelicon_szallmod" title="Ide jön majd a magyarázó szöveg!" alt="Mi ez pontosan?" src="images/kerdojel_icon_sotet.gif" height="20" /></p><span class="lefelenyil">&nbsp;</span></div>                     
                <div class="clear"></div> 
                
          <span  style="height:100%;display:;">
                
    <!----------------------------------------------------------------------------------------->
    <div class="clear"></div>
                       
    <div class="szallitasimod" style="line-height:20px;">
        <span class="jobbranyil"></span>
        Átvételi pontok:<br />
        <input id="atv1" name="atveteli" type="radio" value="fox"><label for="atv1"><?php echo $_smarty_tpl->tpl_vars['ford']->value['foxpost'];?>
</label> <img onmouseover="Tip('<?php echo $_smarty_tpl->tpl_vars['ford']->value['tip_foxpost'];?>
')" onmouseout="UnTip()" class="kerdojelicon_szallmod" title="Ide jön majd a magyarázó szöveg!" alt="Mi ez pontosan?" src="images/kerdojel_icon_sotet.gif" height="20" /> <br />
        <input id="atv2" name="atveteli" type="radio" value="pick"><label for="atv2"><?php echo $_smarty_tpl->tpl_vars['ford']->value['pickpackpont'];?>
</label>
        <img onmouseover="Tip('<?php echo $_smarty_tpl->tpl_vars['ford']->value['tip_pickpackpont'];?>
')" onmouseout="UnTip()" class="kerdojelicon_szallmod" title="Ide jön majd a magyarázó szöveg!" alt="Mi ez pontosan?" src="images/kerdojel_icon_sotet.gif" height="20" />
    </div>
   
                <span id="foxarak">
                <a href="#" id="w|5|1|<?php echo $_smarty_tpl->tpl_vars['szallar_tomb']->value[5][1]['ar'];?>
" class="payment "><p><?php echo $_smarty_tpl->tpl_vars['szallar_tomb']->value[5][1]['ar'];?>
 Ft</p><span><?php echo $_smarty_tpl->tpl_vars['ford']->value['ingyenes_felette'];?>
</span> <?php echo arformat($_smarty_tpl->tpl_vars['szallar_tomb']->value[5][1]['ingyen']);?>
 <?php echo $_smarty_tpl->tpl_vars['ford']->value['felett'];?>
*</a>
                <a href="#" id="w|5|3|<?php echo $_smarty_tpl->tpl_vars['szallar_tomb']->value[5][3]['ar'];?>
" class="payment "><p><?php echo $_smarty_tpl->tpl_vars['szallar_tomb']->value[5][3]['ar'];?>
 Ft</p><span><?php echo $_smarty_tpl->tpl_vars['ford']->value['ingyenes_felette'];?>
</span> <?php echo arformat($_smarty_tpl->tpl_vars['szallar_tomb']->value[5][3]['ingyen']);?>
 <?php echo $_smarty_tpl->tpl_vars['ford']->value['felett'];?>
*</a>
                <a href="#" id="w|5|2|<?php echo $_smarty_tpl->tpl_vars['szallar_tomb']->value[5][2]['ar'];?>
" class="payment "><p><?php echo $_smarty_tpl->tpl_vars['szallar_tomb']->value[5][2]['ar'];?>
 Ft</p><span><?php echo $_smarty_tpl->tpl_vars['ford']->value['ingyenes_felette'];?>
</span> <?php echo arformat($_smarty_tpl->tpl_vars['szallar_tomb']->value[5][2]['ingyen']);?>
 <?php echo $_smarty_tpl->tpl_vars['ford']->value['felett'];?>
*</a>
                </span>

                <span id="pickpackarak" style="display:none;">
                <a href="#" id="w|3|1|<?php echo $_smarty_tpl->tpl_vars['szallar_tomb']->value[3][1]['ar'];?>
" class="payment "><p><?php echo $_smarty_tpl->tpl_vars['szallar_tomb']->value[3][1]['ar'];?>
 Ft</p><span><?php echo $_smarty_tpl->tpl_vars['ford']->value['ingyenes_felette'];?>
</span> <?php echo arformat($_smarty_tpl->tpl_vars['szallar_tomb']->value[3][1]['ingyen']);?>
 <?php echo $_smarty_tpl->tpl_vars['ford']->value['felett'];?>
</a>
                <a href="#" id="w|3|3|<?php echo $_smarty_tpl->tpl_vars['szallar_tomb']->value[3][3]['ar'];?>
" class="payment "><p><?php echo $_smarty_tpl->tpl_vars['szallar_tomb']->value[3][3]['ar'];?>
 Ft</p><span><?php echo $_smarty_tpl->tpl_vars['ford']->value['ingyenes_felette'];?>
</span> <?php echo arformat($_smarty_tpl->tpl_vars['szallar_tomb']->value[3][3]['ingyen']);?>
 <?php echo $_smarty_tpl->tpl_vars['ford']->value['felett'];?>
</a>
                <a href="#" id="w|3|2|<?php echo $_smarty_tpl->tpl_vars['szallar_tomb']->value[3][2]['ar'];?>
" class="payment "><p><?php echo $_smarty_tpl->tpl_vars['szallar_tomb']->value[3][2]['ar'];?>
 Ft</p><span><?php echo $_smarty_tpl->tpl_vars['ford']->value['ingyenes_felette'];?>
</span> <?php echo arformat($_smarty_tpl->tpl_vars['szallar_tomb']->value[3][2]['ingyen']);?>
 <?php echo $_smarty_tpl->tpl_vars['ford']->value['felett'];?>
</a>
                </span>

                <div class="clear"></div>

    <div style="display: none; height:auto;padding:5px;" id="pickpackbox">
        Budapest: szállítási határidő: <b>2-3 munkanap</b><br>
        Vidéki pontok: szállítási határidő: <b>4-5 munkanap</b><br />
        
        <table cellpadding="10">
        <tr><td>
        <select class="kicsi-select" onchange="pickpack_varos_feltoltes(this.form,this,'p_varos')" size="1" name="p_megye">
            <option value="0"><?php echo $_smarty_tpl->tpl_vars['ford']->value['valassz_megyet'];?>
</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['megyek']->value, 'megye');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['megye']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['megye']->value['megye_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['megye']->value['megye_nev'];?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </select>
        <br>
        <select class="kicsi-select" onchange="hely_feltoltes(this.form,this,'p_hely')" size="1" name="p_varos">
            <option value="0"><?php echo $_smarty_tpl->tpl_vars['ford']->value['valassz_varost'];?>
</option>
        </select>
        <br>
        <select class="kicsi-select" onchange="nyitvatartas(this)" size="1" name="p_hely">
            <option value="0"><?php echo $_smarty_tpl->tpl_vars['ford']->value['valassz_atveteli_pontot'];?>
</option>
        </select><br>
        <font size="-2">
        <span id="nyitvatart">
        
        </span>
        </font>
        </td>
        </tr>
        </table>
        <br>
    </div>
                
    <!-- Foxpost rész -->
     <div align="left" style="display: none; height:auto;" id="foxpostbox">
        <br>
        <select class="kicsi-select" onchange="foxpost_varos_feltoltes(this.form,this,'f_varos')" size="1" name="f_megye">
            <option value="0"><?php echo $_smarty_tpl->tpl_vars['ford']->value['valassz_megyet'];?>
</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['f_megyek']->value, 'f_megye');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['f_megye']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['f_megye']->value['megye_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['f_megye']->value['megye_nev'];?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </select>
        <br>
        <select class="kicsi-select" onchange="foxpost_hely_feltoltes(this.form,this,'f_hely')" size="1" name="f_varos">
            <option value="0"><?php echo $_smarty_tpl->tpl_vars['ford']->value['valassz_varost'];?>
</option>
        </select>
        <br>
        <select class="kicsi-select" onchange="fox_nyitvatartas(this)" size="1" name="f_hely">
            <option value="0"><?php echo $_smarty_tpl->tpl_vars['ford']->value['valassz_atveteli_pontot'];?>
</option>
        </select>
        
        <br>
        <font size="-2">
        <span id="fox_nyitvatart">
        
        </span>
        <input type="hidden" name="szallmod" id="szallmod" value="0" />
        <input type="hidden" name="fizetesmod" id="fizetesmod" value="0" />
        </font>
        <br />
        Foxpost szállítási módnál <b>helyszínen fizetés csak bankkártyával</b> lehetséges<br />
        és rendelését <b>3 napon belül</b> tudja csak átvenni !<br />
        <b>Ismételt kiküldés esetén plusz 590 Ft</b> szállítási többletdíjat számolunk !&nbsp;
        <br />
    </div>
    <!-- Foxpost vége -->
    <!----------------------------------------------------------------------------------------->
    
    
    <div class="clear"></div>
    
    <div class="szallitasimod"><span class="jobbranyil">&nbsp;</span><?php echo $_smarty_tpl->tpl_vars['ford']->value['futarceggel'];?>
<img onmouseover="Tip('<?php echo $_smarty_tpl->tpl_vars['ford']->value['tip_futarceg'];?>
')" onmouseout="UnTip()" class="kerdojelicon_szallmod" alt="Mi ez pontosan?" src="view/images/kerdojel_icon_sotet.gif" height="20" /></div>
                
                <a href="#" id="w|2|1|<?php echo $_smarty_tpl->tpl_vars['szallar_tomb']->value[2][1]['ar'];?>
" class="payment "><p><?php echo $_smarty_tpl->tpl_vars['szallar_tomb']->value[2][1]['ar'];?>
 Ft</p><span><?php echo $_smarty_tpl->tpl_vars['ford']->value['ingyenes_felette'];?>
</span> <?php echo arformat($_smarty_tpl->tpl_vars['szallar_tomb']->value[2][1]['ingyen']);?>
 <?php echo $_smarty_tpl->tpl_vars['ford']->value['felett'];?>
</a>
                <a href="#" id="w|2|3|<?php echo $_smarty_tpl->tpl_vars['szallar_tomb']->value[2][3]['ar'];?>
" class="payment "><p><?php echo $_smarty_tpl->tpl_vars['szallar_tomb']->value[2][3]['ar'];?>
 Ft</p><span><?php echo $_smarty_tpl->tpl_vars['ford']->value['ingyenes_felette'];?>
</span> <?php echo arformat($_smarty_tpl->tpl_vars['szallar_tomb']->value[2][3]['ingyen']);?>
 <?php echo $_smarty_tpl->tpl_vars['ford']->value['felett'];?>
</a>
                <a href="#" id="w|2|2|<?php echo $_smarty_tpl->tpl_vars['szallar_tomb']->value[2][2]['ar'];?>
" class="payment "><p><?php echo $_smarty_tpl->tpl_vars['szallar_tomb']->value[2][2]['ar'];?>
 Ft</p><span><?php echo $_smarty_tpl->tpl_vars['ford']->value['ingyenes_felette'];?>
</span> <?php echo arformat($_smarty_tpl->tpl_vars['szallar_tomb']->value[2][2]['ingyen']);?>
 <?php echo $_smarty_tpl->tpl_vars['ford']->value['felett'];?>
</a>
    
     </span>
    
    

     
          <div class="clear"></div>

          <div class="szallitasimod"><span class="jobbranyil">&nbsp;</span><?php echo $_smarty_tpl->tpl_vars['ford']->value['szemelyesen'];?>
<img onmouseover="Tip('<?php echo $_smarty_tpl->tpl_vars['ford']->value['tip_optikaban'];?>
')" onmouseout="UnTip()" class="kerdojelicon_szallmod" title="Ide jön majd a magyarázó szöveg!" alt="Mi ez pontosan?" src="view/images/kerdojel_icon_sotet.gif" height="20" /></div>
          
                <a href="#" id="w|4|1|<?php echo $_smarty_tpl->tpl_vars['szallar_tomb']->value[4][1]['ar'];?>
" class="payment "><p><?php echo $_smarty_tpl->tpl_vars['szallar_tomb']->value[4][1]['ar'];?>
 Ft</p><span><?php echo $_smarty_tpl->tpl_vars['ford']->value['ingyenes'];?>
</span> <!-- <?php echo arformat($_smarty_tpl->tpl_vars['szallar_tomb']->value[4][1]['ingyen']);?>
 felett--> </a>
                <a href="#" id="w|4|3|<?php echo $_smarty_tpl->tpl_vars['szallar_tomb']->value[4][3]['ar'];?>
" class="payment "><p><?php echo $_smarty_tpl->tpl_vars['szallar_tomb']->value[4][3]['ar'];?>
 Ft</p><span><?php echo $_smarty_tpl->tpl_vars['ford']->value['ingyenes'];?>
</span> <!-- <?php echo arformat($_smarty_tpl->tpl_vars['szallar_tomb']->value[4][3]['ingyen']);?>
 felett--> </a>
                <a href="#" id="w|4|2|<?php echo $_smarty_tpl->tpl_vars['szallar_tomb']->value[4][2]['ar'];?>
" class="payment "><p><?php echo $_smarty_tpl->tpl_vars['szallar_tomb']->value[4][2]['ar'];?>
 Ft</p><span><?php echo $_smarty_tpl->tpl_vars['ford']->value['ingyenes'];?>
</span> <!-- <?php echo arformat($_smarty_tpl->tpl_vars['szallar_tomb']->value[4][2]['ingyen']);?>
 felett--> </a>

                <!--<a href="#" id="w|2|2|free" class="payment  "><p class="ingyenes">Ingyenes</p></a>-->
                <!--  <a href="#" id="noprobe|2|3|free" class="payment"><p class="ingyenes">Hamarosan</p></a> -->
                
                
   
    <div id="optikabox" style="display:none;margin-top:10px;margin-bottom:10px;padding:5px;" height="80">
        <b>Szemüvegek.hu Optika</b><br />
        <br />
        <select name="optika_id" id="optika_id" class="kicsi-select" onchange="optika_nyitvatartas(this)">
        <option value="0"><?php echo $_smarty_tpl->tpl_vars['ford']->value['valassz_optikat'];?>
</option>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['optikak']->value, 'optika');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['optika']->value) {
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['optika']->value['bolt_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['optika']->value['bolt_cim'];?>
</option>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </select>
        <br />
        <font size="-2">
        <span id="optika_nyitva">
        
        </span>
        </font>
    </div>
    
    <!--
    <div style="border: #ff0000 2px dashed;width:300px;float:right;padding:5px;margin-top:10px;">
<b>Ügyfélszolgálat és csomagküldés az ünnepek alatt</b><br /><br />
december 23 - január 1.: zárva<br />
Nyitás: január 2-án<br />
Személyes átvétel: január 4-től<br />
</div>
-->
  
        <div class="clear"></div> 
        
              
              
</div>              

<div class="clear"></div>
<span style="font-size:11px;">* Foxpost esetén</span><br />
<!--<a href="<?php echo $_smarty_tpl->tpl_vars['sitenev']->value;
echo $_smarty_tpl->tpl_vars['alnev']->value['kapcsolat'];?>
" target="_blank"><font color="#ff0000">Ünnepi nyitvatartás!</font></a>-->
</table>
    <!-- <center><span style="color:#f00; font-size:16px; font-weight:bold;">Kérem jelenleg ne válasszon internetes fizetést, hibát javítunk, köszönettel a programozó!</span><center> -->
<!--
<center>Nem érte el rendelésének értéke az ingyenes szállítási összeghatárt?
Rendeljen a <a href="http://www.szepulj.hu" target="_blank">Szépülj.hu</a> oldalunkról is és a 2 rendelés értéke összeadódik.<br/>
Remington, L'Oreal, Palmolive és egyéb márkás kozmetikai termékek és parfümök közül válogathat !
Kérjük először a Lencsék.hu oldalunkon adja le rendelését.
</center>
-->


    </div>
    
    

    
    
    <div class="cont-block transport-price" style="border-color:#80756f;">
        <table style="color:#7f766f;" width="100%"><tr><td align="center" bgcolor="#f4f3f1" class="prod-title" height="35"><?php echo $_smarty_tpl->tpl_vars['ford']->value['ar'];?>
</td></tr>
            <tr>
                <td align="center" height="35">
                    <span style="float:left; font-size:13px; padding: 4px 0 0 15px;"><?php echo $_smarty_tpl->tpl_vars['ford']->value['termek_ara'];?>
:</span><span style="font-size:13px; float:right; padding: 4px 16px 0 0; color:#8f6299;"><span id="osz_ar"><?php echo arformat($_smarty_tpl->tpl_vars['osszesen']->value);?>
</span></span>
                </td>
            </tr>
            <?php if ($_smarty_tpl->tpl_vars['kedvezmeny']->value > 0) {?> 
            <tr>
                <td align="center" height="35">
                    <span style="float:left; font-size:13px; padding: 4px 0 0 15px;"><?php echo $_smarty_tpl->tpl_vars['ford']->value['kedvezmeny'];?>
:</span><span style="font-size:13px; float:right; padding-right:15px; color:#8f6299;"><span id="kedvezmeny">- <?php echo arformat($_smarty_tpl->tpl_vars['kedvezmeny']->value);?>
</span></span>
                </td>
            </tr>
            <?php }?>
            <tr>
                <td align="center" height="35">
                    <span style="float:left; font-size:13px; padding: 4px 0 0 15px;"><?php echo $_smarty_tpl->tpl_vars['ford']->value['szallitasi_koltseg'];?>
:</span><span style="font-size:13px; float:right; padding-right:15px; color:#8f6299;"><span id="szall_ar"><?php echo arformat($_smarty_tpl->tpl_vars['szall_ar']->value);?>
</span></span>
                </td>
            </tr>
            <tr>
                <td align="center" height="35">
                    <span style="float:left; font-size:16px; padding: 4px 0 0 15px;"><b><?php echo $_smarty_tpl->tpl_vars['ford']->value['osszesen'];?>
:</b></span><span style="font-size:20px; float:right; padding-right:15px; color:#8f6299;"><b><span id="osszesen"><?php echo $_smarty_tpl->tpl_vars['osszesen']->value-arformat($_smarty_tpl->tpl_vars['kedvezmeny']->value);?>
</span> </b></span>
                </td>
            </tr>
        </table>
    </div>

<!--    
<?php if ($_smarty_tpl->tpl_vars['osszesen']->value > 3000) {?>
<div class="cont-block" style="border-color:#80776f; float:left; margin-top:15px;">
  Kupon: <input name="kupon" type="text" size="10" maxlength="10" />
</div>
<?php }?>  
-->

    <div id="product-to-basket" class="cont-block" style="border-color:#80756f; float:right;">
        <div class="purple-arrow-button-left"></div>
        <input name="szallitas" type="submit" class="purple-arrow-button" value="<?php echo $_smarty_tpl->tpl_vars['ford']->value['tovabb'];?>
" style="float:left"/><div class="purple-arrow-button-right"></div>
    </div>


    <!-- Extra Box -->
    <div id="extrabox" class="cont-block transport-price2" style="border-color:#80756f;display:block;">
        <table style="color:#7f766f;" width="100%">
            <tr><td align="center" bgcolor="#f4f3f1" class="prod-title" height="35" colspan="4"><?php echo $_smarty_tpl->tpl_vars['ford']->value['extra_opciok'];?>
</td></tr>
            <tr>
                <td align="center" height="35">
                    <span style="float:left; font-size:13px; padding: 4px 0 0 15px;"><?php echo $_smarty_tpl->tpl_vars['ford']->value['premium_futar'];?>
</span>
                    </td>
                    <td><img onmouseover="Tip('<?php echo $_smarty_tpl->tpl_vars['ford']->value['tip_premium_futar'];?>
')" onmouseout="UnTip()" class="kerdojelicon_szallmod" title="<?php echo $_smarty_tpl->tpl_vars['ford']->value['tip_premium_futar'];?>
" alt="Mi ez pontosan?" src="view/images/kerdojel_icon_sotet.gif" height="20" />
                    </td><td>
                    <input id="premium_futar" type="checkbox" name="premium_futar" disabled="disabled" value="200" />
                    </td><td>
                    <span style="font-size:13px; float:right; padding: 4px 16px 0 0; color:#8f6299;"><span id="futar_ar">200</span> <?php echo $_smarty_tpl->tpl_vars['dev']->value;?>
</span>
                </td>
            </tr>
            
            <tr>
                <td align="center" height="35">
                    <span style="float:left; font-size:13px; padding: 4px 0 0 15px;"><?php echo $_smarty_tpl->tpl_vars['ford']->value['sms_ertesites'];?>
</span>
                    </td>
                    <td><img onmouseover="Tip('<?php echo $_smarty_tpl->tpl_vars['ford']->value['tip_sms_futar'];?>
')" onmouseout="UnTip()" class="kerdojelicon_szallmod" title="<?php echo $_smarty_tpl->tpl_vars['ford']->value['tip_sms_futar'];?>
" alt="Mi ez pontosan?" src="view/images/kerdojel_icon_sotet.gif" height="20" />
                    </td>
                    <td><input id="sms_ertesites" type="checkbox" name="sms_ertesites" disabled="disabled" value="80" /></td>
                    <td><span style="font-size:13px; float:right; padding-right:15px; color:#8f6299;"><span id="sms_ar">80</span> <?php echo $_smarty_tpl->tpl_vars['dev']->value;?>
 </span></td>
            </tr>
            
            <tr>
                <td align="center" height="35">
                    <span style="float:left; font-size:13px; padding: 4px 0 0 15px;"><?php echo $_smarty_tpl->tpl_vars['ford']->value['tel_ertesites'];?>
</span>
                    </td>
                    <td><img onmouseover="Tip('<?php echo $_smarty_tpl->tpl_vars['ford']->value['tip_tel_futar'];?>
')" onmouseout="UnTip()" class="kerdojelicon_szallmod" title="<?php echo $_smarty_tpl->tpl_vars['ford']->value['tip_tel_futar'];?>
" alt="Mi ez pontosan?" src="view/images/kerdojel_icon_sotet.gif" height="20" />
                    </td>
                    <td><input id="tel_ertesites" type="checkbox" name="tel_ertesites" disabled="disabled" value="80" /></td>
                    <td><span style="font-size:13px; float:right; padding-right:15px; color:#8f6299;"><span id="tel_ar">80</span> <?php echo $_smarty_tpl->tpl_vars['dev']->value;?>
 </span></td>
            </tr>
            
            <tr>
                <td align="center" height="35">
                    <span style="float:left; font-size:13px; padding: 4px 0 0 15px;"><?php echo $_smarty_tpl->tpl_vars['ford']->value['mai_bolti_atvetel'];?>
</span>
                    </td>
                    <td><img onmouseover="Tip('<?php echo $_smarty_tpl->tpl_vars['ford']->value['tip_aznapi'];?>
')" onmouseout="UnTip()" class="kerdojelicon_szallmod" title="<?php echo $_smarty_tpl->tpl_vars['ford']->value['tip_aznapi'];?>
" alt="Mi ez pontosan?" src="view/images/kerdojel_icon_sotet.gif" height="20" />
                    </td><td>
                    <input id="aznapi_atvetel" type="checkbox" name="aznapi_atvetel" value="<?php echo $_smarty_tpl->tpl_vars['aznapi_osszeg']->value;?>
" disabled="disabled" />
                    </td><td>
                    <span style="font-size:13px; float:right; padding: 4px 16px 0 0; color:#8f6299;"><span id="futar_ar"><?php echo $_smarty_tpl->tpl_vars['aznapi_osszeg']->value;?>
</span> <?php echo $_smarty_tpl->tpl_vars['dev']->value;?>
</span>
                </td>
            </tr>
            
        </table>
    </div>
    
    
    <!--
    <div style="position:absolute;bottom:10px;left:10px;">
    Utalvány kód: <input name="utalvany_kod" type="text" size="10" maxlength="10">
    </div>
    -->
    <input value="w|2|1|990" name="paymentMode" id="paymentMode" type="hidden">
    
  </form>

    <div class="clear"></div>
    
    <!--<div>
        <b>Technikai okok miatt <font color="ff0000">2016. február 12-13. József Körúti üzletünk ZÁRVA !</font></b>
    </div>
    
    
    <div id="extrabox23" class="transport-price3" style="border: dashed 2px #ff0000;margin-top:20px;" align="justify">
    <div style="padding:10px;">
    * Nem érte el rendelésének értéke az ingyenes szállítási összeghatárt?
Rendeljen a <a href="http://www.szepulj.hu" target="_blank"><img src="http://lencsek.hu/kepek/szepulj_mini.jpg" alt="Szépülj.hu" border="0"></a> oldalunkról is és a 2 rendelés értéke összeadódik.<br/>Vagy ha elérte az ingyenességi határt, akkor szállítási költség nélkül rendelhet !
<img src="http://lencsek.hu/kepek/remington_mini.jpg" alt="Remington" border="0">, <img src="http://lencsek.hu/kepek/loreal_mini.jpg" alt="L'Oreal" border="0">, <img src="http://lencsek.hu/kepek/palmolive_mini.jpg" alt="Palmolive" border="0"> és egyéb márkás kozmetikai termékek és parfümök közül válogathat !
Kérjük először a Lencsék.hu oldalunkon adja le rendelését.
    </div>
    </div>
    -->
    <?php }
}
