<?php
/* Smarty version 3.1.30, created on 2018-06-03 22:16:22
  from "/var/www/vhosts/lencsek.hu/uj.lencsek.hu/sablonkod/nezetek/szallitas_fizetes_mobil.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b144c96cd1df7_88331477',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59058a5bdd6e7e82c56fcb28665e942882d7a833' => 
    array (
      0 => '/var/www/vhosts/lencsek.hu/uj.lencsek.hu/sablonkod/nezetek/szallitas_fizetes_mobil.tpl',
      1 => 1528056977,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b144c96cd1df7_88331477 (Smarty_Internal_Template $_smarty_tpl) {
?>
 
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

<?php echo '<script'; ?>
 src="css/accounting.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="css/termekvalto_uj.js" type="text/javascript"><?php echo '</script'; ?>
>


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
                                        <td>0 Ft</td>
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
    </section>


    <?php }
}
