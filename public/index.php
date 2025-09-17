<?php
    require __DIR__ . '/../vendor/autoload.php';
    //phpinfo();

    // server should keep session data for AT LEAST 1 hour
    ini_set('session.gc_maxlifetime', 36000);
    // each client should remember their session id for EXACTLY 1 hour
    session_set_cookie_params(36000);
    
    //ini_set('session.cookie_domain','lencsek.hu');
    session_start();
    
    header('Content-Type: text/html; charset=UTF-8');
    
    define('FILENEV','index.php');
    define('KEDVEZMENYKOD',"OKTOBER10MC211");
    define('KEPSRC',"/kepek/lencsek/");
    define('KEPSRC2',"https://lencsek.hu/glasses/");
    // IF( termek_csoport > 2 , CONCAT('http://kepek.optilens.hu/glasses/', termek_kep), CONCAT('http://kepek.optilens.hu/lencsek/', termek_kep) ) as image,
    
    //$fp = fopen("includes/atilog/meghivott_urlk_".date("Y_m_d").".txt", 'a');
    //fwrite($fp, date("Y-m-d H:i:s")."\t".$_SERVER['REMOTE_ADDR']."\t".$_SERVER['REQUEST_URI']."\n");
    //fclose($fp);
    
    // látogató adatbázisba
    //include_once(__DIR__."/../includes/class.latogato.php");
    //Latogato::save();
    
    // nyelv beállítás
    if( isset($_REQUEST['nyelv']) && !empty($_REQUEST['nyelv']) && strlen($_REQUEST['nyelv'])==2 ) {
        $_SESSION['nyelv'] = $_REQUEST['nyelv'];
    }
    if( !isset($_SESSION['nyelv']) || empty($_SESSION['nyelv']) ) {
        $_SESSION['nyelv'] = 'hu';
    }
    if( !empty($_SESSION['nyelv']) ) {
        $nyelv = $_SESSION['nyelv'];
    }
    
    if( isset($_GET['cc1']) && $_GET['cc1']=="Rendben" ) {
        setcookie("cc1", "Rendben", time() + 2592000);
    }
    
    $sitenev = 'http://kontaktlencsek.hu/';
    //$sitenev = 'http://localhost/php/dataglobe/';
    
    // adatbáziskezelés
    require_once(__DIR__."/../includes/sql_fuggvenyek.php");
    //$db->debug = true;
    include_once(__DIR__."/../includes/bolt_fuggvenyek.php");
    include_once(__DIR__."/../includes/class.user.php");
    
    // sablonkezelés
    //include_once('includes/smarty3/libs/Smarty.class.php');
    $smarty = new Smarty;
    $smarty->template_dir = __DIR__."/../sablonkod";
    $smarty->compile_dir  = __DIR__."/../includes/smarty/compiled";
    
    //include_once('includes/smarty/libs/Smarty.class.php');
    //$smarty = new Smarty();
    //$smarty->template_dir = 'sablonkod';
    //$smarty->compile_dir  = 'includes/smarty/templates_c';
    //$smarty->cache_dir    = 'includes/smarty/cache';
    //$smarty->config_dir   = 'includes/smarty/configs';
    //$smarty->caching = 0;
    
    if( $_SERVER['REMOTE_ADDR'] == "193.91.88.194" ) {
        //$smarty->debugging = true;
        //$db->debug = true ;
        //error_reporting(1);
        //ini_set("display_errors","1");
    
        $smarty->assign('adm', 1);
        $smarty->assign("inc_files", get_included_files() );
        
        //$adm = 1;
    }

    include_once(__DIR__."/../includes/nyelvek/{$nyelv}.php");
    
    //dd($_REQUEST);

    // oldal álnév keresés
    if( isset($_REQUEST['q']) && in_array($_REQUEST['q'], $alnev) ) {
        $oldal = $_REQUEST['q'];
    }
    $title = $forditas['oldalcim'];
    $keywords = $forditas['kulcsszavak'];
    $description = $forditas['leiras'];
    
    // szállítás beállítása
    if( isset($oldal) && $oldal == $alnev['szallitas'] ) {
        $sz_hiba = "";
        
        if( isset($_REQUEST['kuldveszall']) and $_REQUEST['kuldveszall'] == 1 ) {
            if( empty($_REQUEST['fizetesmod']) ) {
                $sz_hiba .= hiba_kiiras($forditas['valasszon_fizetest']);
            }
            
            if( $_REQUEST['szallmod']==3 and $_REQUEST['p_hely'] < 1) {
                $sz_hiba .= hiba_kiiras($forditas['valasszon_atveteli_pontot']);
                
            }
            
            if( $_REQUEST['szallmod']==5 and $_REQUEST['f_hely'] < 1) {
                $sz_hiba .= hiba_kiiras($forditas['valasszon_atveteli_pontot']);
            }
            
            if( $_REQUEST['szallmod']!=3 ) {
                $_SESSION['bolt_id'] =0;
            }
            
            
             if( $_REQUEST['szallmod'] == 2 ) {
                // ez a kód kell csak
                $_SESSION['premium_futar'] = $_REQUEST['premium_futar'];
                $_SESSION['sms_ertesites'] = $_REQUEST['sms_ertesites'];
                $_SESSION['tel_ertesites'] = $_REQUEST['tel_ertesites'];
                if( isset($_REQUEST['aznapi_atvetel']) && $_REQUEST['aznapi_atvetel'] > 0 ) { $_SESSION['aznapi_atvetel'] = 390; } 
                // idáig
                 
                $_SESSION['premiumcurrier']  = $_REQUEST['premiumcurrier'];
                $_SESSION['smscurrier']  = $_REQUEST['smscurrier'];
                $_SESSION['premiumcurrierprice'] = 0;
                $_SESSION['smscurrierprice'] = 0;
                
                
                
                if($_REQUEST['premiumcurrier']) {
                    $_SESSION['premiumcurrierprice']  = $_REQUEST['premiumcurrierprice'];
                    if($_REQUEST['smscurrier'])
                        $_SESSION['smscurrierprice']  = $_REQUEST['smscurrierprice'];
                }

            }
            
            if( $_REQUEST['szallmod']==1 and $_REQUEST['fizetesmod']==3 ) {
                $sz_hiba .= hiba_kiiras("Postát utánvétellel nem lehet választani!");
            }
            
            if( empty($sz_hiba) ) {
                $oldal = $alnev['belepes'];
            }else {
                $smarty->assign('sz_hiba', $sz_hiba);
            }
        }
        
        if( isset($_REQUEST['action']) && $_REQUEST['action'] == 'cancel') {
            $sz_hiba = $forditas['sikertelen_fizetes'];
            
            $smarty->assign('sz_hiba', $sz_hiba);
        }

    }

    if( isset($oldal) && $oldal == $alnev['kilepes'] ) {
        kileptetes();
    }
    
    // ha regisztrációt küldött és ok továbbküldjük a rendelés részletekhez
    if( isset($oldal) && $oldal == $alnev['regisztracio'] ) {
        $reg_hiba = "";

        // regisztrációt küld belépés oldaról
        if( $_REQUEST['kuldve1'] == 1 ) {
            
            if( $_REQUEST['felh_jelszo'] != $_REQUEST['felh_jelszo2'] || empty($_REQUEST['felh_jelszo']) ) {
                $reg_hiba .= hiba_kiiras($forditas['jelszavak_nem_egyeznek'])."<br />";
            }
            if( empty($_REQUEST['felh_email']) || !checkEmail($_REQUEST['felh_email']) || !domain_validate($_REQUEST['felh_email']) ) {
                $reg_hiba .= hiba_kiiras($forditas['hibas_emailcim']);
            }
            if( !empty($_REQUEST['felh_email']) && email_ellenorzes($_REQUEST['felh_email']) ) {
                $reg_hiba .= hiba_kiiras($forditas['van_email_hiba']);
            }
            
            // Hiba van vissza a belépés oldalra
            if( !empty($reg_hiba) ) {
                $oldal = $alnev['belepes'];
            } 
        }
        
        
        // regisztráció oldaról küld adatot
        if( isset($_REQUEST['kuldve2']) && $_REQUEST['kuldve2'] == 1 ) {
            
            if( $_REQUEST['feltetelek'] != 1 ) { 
                $reghiba2['feltetel'] = 1;
            }
            if( empty($_REQUEST['felh_csaladnev']) ) { 
                $reghiba2['csaladnev'] = 1;
            }
            if( empty($_REQUEST['felh_keresztnev']) ) { 
                $reghiba2['keresztnev'] = 1;
            }
            if( empty($_REQUEST['felh_telefon']) && empty($_REQUEST['felh_mobil2']) ) { 
                $reghiba2['telefon'] = 1;
                $reghiba2['mobil2'] = 1;
            }
            if( empty($_REQUEST['felh_megye']) && $nyelv == 'ro') { 
                $reghiba2['megye'] = 1;
            }
            if( empty($_REQUEST['felh_varos']) ) { 
                $reghiba2['varos'] = 1;
            }
            if( empty($_REQUEST['felh_utca']) ) { 
                $reghiba2['utca'] = 1;
            }
            if( empty($_REQUEST['felh_irsz']) ) { 
                $reghiba2['irsz'] = 1;
            }
            
            if( empty($_REQUEST['felh_email']) || !domain_validate($_REQUEST['felh_email']) ) {
                // || email_ellenorzes($_REQUEST['felh_email'])
                $reghiba2['email'] = 1;
            }
            
            
            $vanhiba = count($reghiba2);
            
            
            // már bevan lépve, adatmódosítás
            if( !$vanhiba && $_SESSION['user'] > 0 ) {
                
                // Üres adatokat szeretne
                if( empty($_REQUEST['felh_szamlanev']) ) { $_REQUEST['felh_szamlanev'] = ' '; }
                if( empty($_REQUEST['felh_szmegye']) )   { $_REQUEST['felh_szmegye'] = ' '; }
                if( empty($_REQUEST['felh_szvaros']) )   { $_REQUEST['felh_szvaros'] = ' '; }
                if( empty($_REQUEST['felh_szutca']) )    { $_REQUEST['felh_szutca'] = ' '; }
                if( empty($_REQUEST['felh_szirsz']) )    { $_REQUEST['felh_szirsz'] = ' '; }
                if( empty($_REQUEST['felh_egpenztar']) ) { $_REQUEST['felh_egpenztar'] = ' '; }
                if( empty($_REQUEST['felh_egazon']) )    { $_REQUEST['felh_egazon'] = ' '; }
                if( empty($_REQUEST['felh_megjegyzes'])) { $_REQUEST['felh_megjegyzes'] = ' '; }
                
                
                $egyuser = new Felhasznalo($_REQUEST);
                $user_id = $egyuser->modositas($_SESSION['user']);
                $oldal = $alnev['rendeles_attekinto'];
                
                
                
                
                    // && !hirlevel_ellenorzes($_REQUEST['felh_email'])
                    if( $_REQUEST['hirlevel'] == 1 && email_ellenorzes($_REQUEST['felh_email'])  ) {
                        include_once("includes/class.hirlevel.php");
                        $hadat['tag_nev'] = $_REQUEST['felh_csaladnev']." ".$_REQUEST['felh_keresztnev'];
                        $hadat['tag_email'] = trim($_REQUEST['felh_email']);
                        $egy_tag = new Hirlevel($hadat);
                        $egy_tag->felvetel();
                    }
                    
                    // Webgalamb feliratkozás
                    
                    if( $_REQUEST['hirlevel'] == 1 ) {
                        include_once("includes/class.webgalamb.php");
                        $wadat['name'] = $_REQUEST['felh_csaladnev']." ".$_REQUEST['felh_keresztnev'];
                        $wadat['mail'] = trim($_REQUEST['felh_email']);
                        $egy_w = new Webgalamb($wadat);
                        $egy_w->feliratkozas();
                    } else {
                        include_once("includes/class.webgalamb.php");
                        $wadat['mail'] = $_REQUEST['felh_email'];
                        $egy_w = new Webgalamb($wadat);
                        $egy_w->leiratkozas();
                    }
                    
                    
                    //$uzenet = "Adatok módosítva!";
            } 
            // Nincs belépve regisztrálni kell
            elseif( !$vanhiba ) {
                // itt felvesszük az új felhasználót
                $_REQUEST['felh_utolsobelepes'] = date("Y-m-d H.i:s");
                $_REQUEST['felh_nyelv'] = $nyelv;
                $_REQUEST['felh_email'] = trim($_REQUEST['felh_email']);
                $egyuser = new Felhasznalo($_REQUEST);
                $user_id = $egyuser->felvetel();
                
                // ha nincs feliatkozva akkor felíratjuk
                // && !hirlevel_ellenorzes($_REQUEST['felh_email'])
                if( $_REQUEST['hirlevel'] == 1 ) {
                    include_once("includes/class.hirlevel.php");
                    $hadat['tag_nev'] = $_REQUEST['felh_csaladnev']." ".$_REQUEST['felh_keresztnev'];
                    $hadat['tag_email'] = $_REQUEST['felh_email'];
                    $egy_tag = new Hirlevel($hadat);
                    $egy_tag->felvetel();
                }
                
                    // Webgalamb feliratkozás
                    
                    //if( $_REQUEST['hirlevel'] == 1 ) {
                        include_once("includes/class.webgalamb.php");
                        $wadat['name'] = $_REQUEST['felh_csaladnev']." ".$_REQUEST['felh_keresztnev'];
                        $wadat['mail'] = $_REQUEST['felh_email'];
                        $egy_w = new Webgalamb($wadat);
                        $egy_w->feliratkozas();
                    //} else {
                        //include_once("includes/class.webgalamb.php");
                        //$wadat['mail'] = $_REQUEST['felh_email'];
                        //$egy_w = new Webgalamb($wadat);
                        //$egy_w->leiratkozas();
                    //}
                    
                //$uzenet = "Felhasználó felvéve!";
                $oldal = $alnev['rendeles_attekinto'];
                $_SESSION['user'] = $user_id;
            }
        }
        $smarty->assign('reg_hiba', $reg_hiba);
        
        if( isset($reghiba2) ) { $smarty->assign('reghiba2', $reghiba2); }
        $smarty->assign('vanhiba', $vanhiba );
    }
    
    
    
    
    
    // ha belépés oldalra jön de már be van lépve, a megrendelő áttekintőre menjen
    if( isset($oldal) && $oldal == $alnev['belepes'] ) {
        szallitas_beallitas();
        $belep_hiba = "";
        
        // bevan-e már lépve
        if( isset($_SESSION['user']) && $_SESSION['user'] > 0 ) {
            $oldal = $alnev['rendeles_attekinto'];
        } 
        elseif( $_REQUEST['kuldve'] == 1 ) {
            // beakar lépni
            if( !empty($_REQUEST['felh_email']) && !empty($_REQUEST['felh_jelszo']) ) {
                if( ($_SESSION['user'] = beleptetes($_REQUEST)) > 0 ) {
                    
                    $adatf['felh_nyelv'] = $nyelv;
                    $adatf['felh_utolsobelepes'] = date("Y-m-d H:i:s");
                    $adatf['felh_ip_cim'] = $_SERVER['REMOTE_ADDR'];
                    //$adatf['felh_ip_cim'] = geoip_country_code3_by_name($_SERVER['REMOTE_ADDR']);
                    
                    $egyuser = new Felhasznalo($adatf);
                    $user_mod = $egyuser->modositas($_SESSION['user']);
                    
                    
                    $oldal = $alnev['rendeles_attekinto'];
                    if( empty($_SESSION['kosar']) ) {
                        $oldal = $alnev['rendelesek'];
                    }
                } else {
                    // Nincs ilyen felhasználó
                    $belep_hiba = hiba_kiiras($forditas['belepes_hiba']);
                }
            } else {
                // Nem adott meg minden adatot
                $belep_hiba = hiba_kiiras($forditas['belepes_hiba']);
            }
   
        } // beakar lépni vége
        
        $smarty->assign('belep_hiba', $belep_hiba);
    } // belépés oldal feldolgozás vége
    

    // termék álnév keresés
    if( isset($_REQUEST['q']) ) {
        $result = $db->Execute("SELECT termek_alnev_{$nyelv} AS termek_alnev
        FROM termekek WHERE termek_alnev_{$nyelv} like '{$_REQUEST['q']}'");
        if( $result->RecordCount() > 0 && !empty($_REQUEST['q']) ) {
            $oldal = 'egy_termek';
        }
    }
    
    // kategória álnév keresés
    if( isset($_REQUEST['q']) ) {
        $result = $db->Execute("SELECT kat_id, kat_alnev_{$nyelv} AS kat_alnev, kat_szulo,
        kat_nev_{$nyelv} AS kat_nev
        FROM termek_kategoriak WHERE kat_alnev_{$nyelv} like '{$_REQUEST['q']}%'");
        if( $result->RecordCount() > 0 && !empty($_REQUEST['q']) ) {
            $oldal = 'kategoria_nezet';
            $egy_kategoria = $result->GetRows();
            $egy_kategoria = $egy_kategoria[0];
            $smarty->assign('kat_nev',$egy_kategoria['kat_nev']);
        }
    }
    
    
    // gyártó álnév keresés
    if( isset($_REQUEST['q']) ) {
        $result = $db->Execute("SELECT * FROM termek_gyartok WHERE gyarto_alnev like '{$_REQUEST['q']}'");
        if( $result->RecordCount() > 0 && !empty($_REQUEST['q']) ) {
            $oldal = 'gyarto_nezet';
            $egy_gyarto = $result->GetRows();
            $egy_gyarto = $egy_gyarto[0];
            $gyarto_id = $egy_gyarto['gyarto_id'];
            $smarty->assign('gyarto_nev',$egy_gyarto['gyarto_nev']);
        }
    }
    
    /*
    // napszemüveg márka álnév keresés
    $result2 = $db2->Execute("SELECT * FROM brands WHERE name like '{$_REQUEST['q']}'");
    if( $result2->RecordCount() > 0 && !empty($_REQUEST['q']) ) {
        $oldal = 'napszemuveg_nezet';
        $egy_gyarto = $result2->GetRows();
        $egy_gyarto = $egy_gyarto[0];
        $gyarto_id = $egy_gyarto['id'];
        $smarty->assign('gyarto_nev',$egy_gyarto['name_feed']); // Gyártó neve
    }
    */
     
    if( isset($oldal) ) {
        // a lehetséges oldalak
        switch( $oldal ) {
            case $alnev['szallitas_es_fizetes']:
                $tartalom = "{$nyelv}/szallitas_es_fizetes.tpl";
            break;
            
            case $alnev['adatvedelmi']:
                $tartalom = "{$nyelv}/adatvedelmi_nyilatkozat.tpl";
            break;
            
            case $alnev['altalanos_tudnivalok']:
                $tartalom = "{$nyelv}/altalanos_tudnivalok.tpl";
            break;
            
            case $alnev['kapcsolat']:
                $tartalom = "{$nyelv}/kapcsolat.tpl";
            break;
             case $alnev['mozizz']:
                $tartalom = "{$nyelv}/mozizz.tpl";
            break;
			case $alnev['husvet2018']:
                $tartalom = "{$nyelv}/husvet2018.tpl";
            break;
			
			case $alnev['szines-lencsek']:
                $tartalom = "{$nyelv}/szines-lencsek.tpl";
            break;

            /*
            case $alnev['megujult']:
                $tartalom = "{$nyelv}/megujult.tpl";
            break;
            */
            
            case $alnev['akcio']:
                $tartalom = "{$nyelv}/akcio2.tpl";
                include_once('modulok/akcio.php');
            break;

            case $alnev['akcio2']:
                $tartalom = "{$nyelv}/akcio2.tpl";
                include_once('modulok/belepes.php');
            break;
            
            case $alnev['akcio5']:
                $tartalom = "{$nyelv}/akcio5.tpl";
            break;
            
            case $alnev['akcio6']:
                $tartalom = "{$nyelv}/akcio6.tpl";
            break;
            
            case $alnev['rayban_akcio']:
                $tartalom = "nezetek/rayban_akcio.tpl";
            break;
			
            case $alnev['valentinmozi3d']:
                $tartalom = "nezetek/valentinmozi3d.tpl";
            break;
            
            case $alnev['valentinapoloszer']:
                $tartalom = "nezetek/valentinapoloszer.tpl";
            break;
            
            //case $alnev['lejaro-lencsek']:
            //    $tartalom = "nezetek/lejaro-lencsek.tpl";
            //break;
            
            case $alnev['kupon']:
                $tartalom = "nezetek/kupon.tpl";
            break;
            
            case $alnev['kontrollvizsgalat']:
                $tartalom = "hu/kontrollvizsgalat.tpl";
            break;
            
            case $alnev['myday']:
                include_once('modulok/myday.php');
            break;
            
            case $alnev['foxpost']:
                $tartalom = "{$nyelv}/foxpost.tpl";
            break;
            
            case $alnev['nyeremenyjatek']:
                $tartalom = "hu/nyeremenyjatek.tpl";
            break;
            
            case $alnev['2replenish']:
                $tartalom = "{$nyelv}/2replenish.tpl";
            break;

            case $alnev['akcios_keretek']:
                $tartalom = "hu/akcios_keretek.tpl";
            break;
			
			case $alnev['kupon3000']:
                $tartalom = "hu/kupon30002.tpl";
            break;
            
			case $alnev['2dmozi']:
                $tartalom = "hu/2dmozi.tpl";
            break;
			
            case $alnev['allinonelight50']:
                $tartalom = "hu/allinonelight50.tpl";
            break;
            
            case $alnev['impresszum']:
                $tartalom = "hu/impresszum.tpl";
            break;
            
            case $alnev['bonusznet']:
                include_once('modulok/bonusznet.php');
            break;
            
            case $alnev['kupon3000']:
                include_once('modulok/kupon3000.php');
            break;
            
            // rendelések megtekintése
            case $alnev['rendelesek']:
                include_once('modulok/rendelesek.php');
            break;
            
            // szállítás kiválasztása
            case $alnev['szallitas']:
                include_once('sablonkod/szallitas_oldal/szallitas.php');
            break;
            
            // kiegészítők oldal
            case $alnev['kiegeszitok']:
                include_once('sablonkod/kiegeszitok_oldal/kiegeszitok.php');
            break;
            
            // keresés
            case $alnev['kereses']:
                include_once('sablonkod/kereses_oldal/kereses.php');
            break;
            
            // bootstrap
            case $alnev['bootstrap']:
                include_once('modulok/bootstrap.php');
            break;
            
            // beléptető oldal
            case $alnev['belepes']:
                include_once('sablonkod/belepes_oldal/belepes.php');
            break;
            
            // regisztráció
            case $alnev['regisztracio']:
                include_once('sablonkod/regisztracio_oldal/regisztracio.php'); 
            break;
			
            // ászf
            case $alnev['aszf']:
                $tartalom = "hu/aszf.tpl"; 
            break;
            
            // rendelés áttekintő oldal
            case $alnev['rendeles_attekinto']:
                include_once('sablonkod/attekinto_oldal/rendeles_attekinto.php');
            break;
            
            // látásvizsgálat oldal
            case $alnev['latasvizsgalat']:
                include_once('modulok/latasvizsgalat.php');
            break;
            
            // látásvizsgálat mentes oldal
            case $alnev['vizsgalatmentes']:
                include_once('modulok/vizsgalatmentes.php');
            break;
            
            // megrendelés mentő oldal
            case $alnev['megrendeles']:
                // Ha nincs megadva szállítás
                if( !isset($_REQUEST['TransactionId']) && (empty($_SESSION['szallmod']) || empty($_SESSION['fizmod'])) ){
                    //header("Location:".$sitenev."szallitas");
                    include_once('modulok/szallitas.php');
                } else {
                    include_once('sablonkod/megrendeles_oldal/megrendeles.php');
                }
            break;
            
            // paypal fizetés eredménye
            case $alnev['paypal']:
                include_once('modulok/paypal.php');
            break;
            
            // boltban árak
            case $alnev['boltban']:
                include_once('modulok/boltban.php');
            break;
            
            // happy oldal
            case $alnev['happy']:
                $tartalom = "hu/happy_cooper.tpl";
            break;
            
            // air_optix_hydraglyde
            case $alnev['air_optix_hydraglyde']:
                //$tartalom = "hu/air_optix_hydraglyde.tpl";
                include_once('modulok/air_optix_hydraglyde.php');
            break;
            
            // acuvue akció
            case $alnev['acuvue_akcio']:
                include_once('modulok/acuvue_akcio.php');
            break;
            
            case $alnev['elfelejtett_jelszo']:
                include_once('modulok/elfelejtett_jelszo.php');
            break;
            
            case $alnev['jelszo_valtoztatas']:
                include_once('modulok/jelszo_valtoztatas.php');
            break;
            
            // kosár megjelenítő oldal
            case $alnev['kosar']:
                include_once("sablonkod/kosar_oldal/kosar.php");
            break;

            // leiratkozás megjelenítő oldal
            case $alnev['leiratkozas']:
                include_once("modulok/leiratkozas.php");
            break;
            
            // gyártók nézete
            case 'gyarto_nezet':
                include_once("modulok/gyarto_nezet.php");
            break;
            
            // teszt nézete
            case $alnev['teszt_oldal']:
                include_once("sablonkod/teszt_oldal/teszt_oldal.php");
            break;
            
            // napszemüveg márka nézete
            case 'napszemuveg_nezet':
                include_once("modulok/napszemuveg_nezet.php");
            break;
            
            // kategóriák nézete
            case 'kategoria_nezet':
                include_once("modulok/kategoria_nezet.php");
            break;
            
            // hírlevél feliratkozás
            case $alnev['hirlevel']:
                include_once("modulok/hirlevel.php");
            break;
            
            // ország boltja
            case $alnev['orszagboltja']:
                include_once("modulok/orszagboltja.php");
            break;
            
            // összes termék oldala
            case $alnev['osszes_termek']:
                include_once("modulok/osszes_termek.php");
            break;
            
            // egy termék adatlapi nézete
            case 'egy_termek':
                include_once("sablonkod/termek_oldal/egy_termek.php");
            break;
            
            // kezdőoldal
            default:
                include_once("modulok/kezdooldal.php");
                $oldal = "kezdooldal";
            break;
        }
    } else {
        // ha nincs megadva $oldal változó
        include_once(__DIR__."/../modulok/kezdooldal.php");
        $oldal = "kezdooldal";
    }
    
    // hibakeresés
    //$uzenet = $oldal;
    $smarty->assign('cLang', $_SESSION['nyelv']);
       
       if ( isset($_SESSION['kosar']) && count($_SESSION['kosar']) > 0) {
        $item = 0;
        $total = 0;
        foreach ($_SESSION['kosar'] as $elem) {
            $item = $item + $elem['termek_db'];
            $total = $total + $elem['termek_db'] * $elem['termek_ar'];
        }    
        
        $total = number_format($total,0,',',' ');
        $basket = sprintf($forditas['basket'], $item, $total); // ?
        $smarty->assign('basket', $basket);
        $kosar['db'] = $item;
        $kosar['osszesen'] = $total;
        $smarty->assign('kosar', $kosar);
       }
    
    $smarty->assign('filenev', FILENEV); // konstans és változó hozzárendelése sablonhoz
    $smarty->assign('sitenev', $sitenev);
    $smarty->assign('dev', $dev);
    if( isset($_REQUEST['q']) ) { $smarty->assign('q', $_REQUEST['q']); }
    $smarty->assign('ford', $forditas);
    $smarty->assign('oldal', $oldal);
    $smarty->assign('alnev', $alnev);
    $smarty->assign('nyelv', $nyelv);
    $smarty->assign('tartalom',$tartalom);
    if( isset($uzenet) ) { $smarty->assign('uzenet',$uzenet); }
    $smarty->assign('title',$title);
    $smarty->assign('keywords',$keywords);
    $smarty->assign('description',$description);
    $smarty->assign('kepsrc', KEPSRC);
    $smarty->assign('kepsrc2', KEPSRC2);
    if( isset($_SESSION['user']) ) { $smarty->assign('user',$_SESSION['user']); }
    
    
    if( $nyelv == 'hu' ) {
        $nyelvki = "<a href=\"?nyelv=en\">English</a>";
    } elseif( $nyelv == 'en' ) {
        $nyelvki = "<a href=\"?nyelv=hu\">Magyar</a>";
    }
    $smarty->assign('nyelvki', $nyelvki);
    
    $smarty->registerPlugin('modifier','arformat', 'arformat');
    $smarty->registerPlugin('modifier','hibakiiras', 'hiba_kiiras');
    $smarty->registerPlugin('modifier','substr', 'substr');
    $smarty->registerPlugin('function','szallarformat','szallarformat');
    $smarty->registerPlugin('function','jellemzok','jellemzok');
    $smarty->registerPlugin('function','mennyiseg','mennyiseg');
    $smarty->registerPlugin('function','jellemzoki','jellemzoki');
    
    //$smarty->register_modifier('arformat', 'arformat');
    //$smarty->register_modifier('hibakiiras', 'hiba_kiiras');
    //$smarty->register_function('szallarformat','szallarformat');
    //$smarty->register_function('jellemzok','jellemzok');
    //$smarty->register_function('mennyiseg','mennyiseg');
    //$smarty->register_function('jellemzoki','jellemzoki');
    
    // termékek hozzárendelése sablonhoz
    $result = $db->Execute("SELECT *, termek_nev_{$nyelv} AS termek_nev,
    termek_alnev_{$nyelv} AS termek_alnev FROM termekek WHERE termek_aktiv=1 and (termek_csoport=1 or termek_csoport=2) ORDER BY termek_nev");
    $termek_nevek = $result->GetRows();
    $smarty->assign('termek_nevek', $termek_nevek);
    
    // kategóriák hozzárendelése sablonhoz
    $result = $db->Execute("SELECT kat_nev_{$nyelv} AS kat_nev,
    kat_alnev_{$nyelv} AS kat_alnev FROM termek_kategoriak WHERE kat_szulo=1");
    $lencsek = $result->GetRows(); 
    $smarty->assign('kontaktlencsek', $lencsek);
    
    // kiegészítők hozzárendelése sablonhoz
    $result = $db->Execute("SELECT kat_nev_{$nyelv} AS kat_nev,
    kat_alnev_{$nyelv} AS kat_alnev FROM termek_kategoriak WHERE kat_szulo=2");
    $kiegeszitok = $result->GetRows(); 
    $smarty->assign('kiegeszitok', $kiegeszitok);
    
    // napszemüvegek hozzárendelése sablonhoz
    /*$result = $db->Execute("SELECT kat_nev_{$nyelv} AS kat_nev,
    kat_alnev_{$nyelv} AS kat_alnev FROM termek_kategoriak WHERE kat_szulo=15");
    $napszemuvegek = $result->GetRows(); 
    $smarty->assign('napszemuvegek', $napszemuvegek);
    */
    $result = $db->Execute("SELECT gyarto_id, gyarto_nev, gyarto_alnev FROM termek_gyartok WHERE gyarto_tip=2 and sorrend > 0 ORDER BY sorrend");
    $gyartok2 = $result->GetRows(); 
    $smarty->assign('gyartok2', $gyartok2);
    
    // gyártók hozzárendelése sablonhoz
    $result = $db->Execute("SELECT
termek_gyartok.gyarto_nev,
termek_gyartok.gyarto_alnev,
COUNT(termekek.termek_gyarto_id) AS gyarto_db
FROM termek_gyartok
LEFT JOIN termekek ON termek_gyartok.gyarto_id = termekek.termek_gyarto_id
WHERE gyarto_tip=1 and sorrend > 0 
GROUP BY termek_gyartok.gyarto_id ORDER BY sorrend");
    $gyartok = $result->GetRows(); 
    $smarty->assign('gyartok', $gyartok);
    
    // sablon megjelenítése
    $smarty->display('fooldal_mob.tpl');
?>
