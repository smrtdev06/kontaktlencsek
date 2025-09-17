<?php
    error_reporting(1);
    ini_set("display_errors","1");


    // megrendelés elmentése
    include_once('includes/class.megrendeles.php');
    require_once "includes/lib/paymentgateway.php";
    require_once 'includes/bolt_fuggvenyek.php';
    
    function termek_nev_from_id($id) {
        $adat = lekerdezes_tombbe("SELECT termek_nev_hu FROM termekek WHERE termek_id={$id}");
        
        return $adat['termek_nev_hu'];
    }
    
    function telefonszam($str) {
        $v = "";
        for($i=0; $i<=strlen($str); $i++) {
            if( is_numeric($str[$i]) ) {
                $v+= $str[$i];
            }
        }
        return $v;
    }

    function utf8_to_latin2_hun ($str) {
       return str_replace ( array ("\xc3\xb6", "\xc3\xbc", "\xc3\xb3", "\xc5\x91", "\xc3\xba", "\xc3\xa9", "\xc3\xa1", "\xc5\xb1", "\xc3\xad", "\xc3\x96", "\xc3\x9c", "\xc3\x93", "\xc5\x90", "\xc3\x9a", "\xc3\x89", "\xc3\x81", "\xc5\xb0", "\xc3\x8d"), array ("\xf6", "\xfc", "\xf3", "\xf5", "\xfa", "\xe9", "\xe1", "\xfb", "\xed", "\xd6", "\xdc", "\xd3", "\xd5", "\xda", "\xc9", "\xc1", "\xdb", "\xcd"), $str);
    }
    
    
    $optika_adat = lekerdezes_tombbe("SELECT * FROM boltok WHERE bolt_id={$_SESSION['optika_id']}");

    
    if( isset($_REQUEST['raktaron_kerelem']) ) {
        $_SESSION['raktaron_kerelem'] = $_REQUEST['raktaron_kerelem'];
    }
    
    // Visszajött a vásárlásból
    if( isset($_GET['TransactionId']) and !Tranzakcio_vizsgalat($_GET['TransactionId']) and Tranzakcio_vizsgalat2($_GET['TransactionId']) and strlen($_GET['TransactionId'])>5 ) {
        
        $response = PaymentGateway::result(new PaymentGateway_Result_Request($_GET["TransactionId"]));
        
        if ($response->ResultCode == "SUCCESSFUL") {
            // elvileg ezek már bevannak töltve mert : index.php?q=megrendeles
            $nyelvek = array('hu','en');
                        
            if( !in_array($_SESSION['nyelv'],$nyelvek) ) { $nyelv = 'hu'; }
            $sitenev = 'https://kontaktlencsek.hu/';
                
            require_once 'includes/sql_fuggvenyek.php';
            
            include_once("includes/nyelvek/{$nyelv}.php");
            //include_once('includes/smarty/libs/Smarty.class.php');
            // idáig ok
            
            // $_SESSION['rendeles_elkuldve'] == 0 || !isset($_SESSION['rendeles_elkuldve'])
            if( $_SESSION['rendeles_elkuldve'] == 0 || !isset($_SESSION['gateway_volt']) ) {    // ha elhagyja a fizető oldalt e miatt itt nem lesz jó
 
            // megrendelés elmentése
            //include_once('includes/class.megrendeles.php');
            
            // itt üres a megrendelesek_tmp.kedvezmeny, nem menti bele a kedvezményt, azért nincs a levélben
            
            // kellenek a felhasználó adatai
            $rend_adat = lekerdezes_tombbe("SELECT * FROM megrendelesek_tmp WHERE TransactionId='{$_GET["TransactionId"]}'");
            //$rend_adat['rend_tranzakcio_id'] = $p->ipn_data['txn_id'];
            $rend_adat['ResultMessage'] = $response->ResultMessage;
            $rend_adat['ProviderTransactionId'] = $response->ProviderTransactionId;
            $rend_adat['Anum'] = $response->Anum;
            
            // kellenek a felhasználó adatai
            $user_adat = lekerdezes_tombbe("SELECT * FROM felhasznalok WHERE felh_id={$rend_adat['rend_felh_id']}");
            
            //print "SELECT * FROM felhasznalok WHERE felh_id={$rend_adat['rend_felh_id']}";
     
            $megr = new Megrendeles($rend_adat);
            $rend_id = $megr->felvetel();
            
            
            $result = $db->Execute("SELECT *,termek_nev_{$nyelv} AS termek_nev,
            termek_alnev_{$nyelv} AS termek_alnev, rendeles_tetelek_tmp.termek_ar AS tmp_termek_ar,
            termek_szallitas_{$nyelv} AS termek_szallitas FROM rendeles_tetelek_tmp LEFT JOIN termekek ON rendeles_tetelek_tmp.termek_id=termekek.termek_id WHERE rend_id='{$rend_adat['rend_id']}'");
            $kosar = $result->GetRows();
            // itt hamarabb tölti fel a rendes árral a termek_ar mezőt ezért rossz a levélben
            
            if( isset($rend_adat['rend_bolt_kod']) && $rend_adat['szall_mod'] == 3) {
                $bolt_adat = lekerdezes_tombbe("SELECT * FROM pickpackpontok WHERE hely_bolt_kod={$rend_adat['rend_bolt_kod']}");
            }
        
            if( isset($rend_adat['rend_bolt_kod']) && $rend_adat['szall_mod'] == 5) {
                $bolt_adat = lekerdezes_tombbe("SELECT hely_nev,hely_cim,hely_open,hely_findme,hely_bolt_kod FROM foxpost WHERE hely_bolt_kod={$rend_adat['rend_bolt_kod']}");
            }
            
            $optika_adat = lekerdezes_tombbe("SELECT * FROM boltok WHERE bolt_id={$rend_adat['rend_bolt_id']}");
            
            // megrendelés tételeinek elmentése
            foreach( $kosar as $elem ) {

                $egytetel['rend_id']   = $rend_id;
                $egytetel['termek_id'] = $elem['termek_id'];
                $egytetel['termek_db'] = $elem['termek_db'];
                $egytetel['termek_ar'] = $elem['tmp_termek_ar'];
                $egytetel['termek_szem'] = $elem['termek_szem']; // szöveges adat kell bele
                $egytetel['jell1']     = $elem['jell1'];
                $egytetel['jell2']     = $elem['jell2'];
                $egytetel['jell3']     = $elem['jell3'];
                $egytetel['jell4']     = $elem['jell4'];
                $egytetel['jell5']     = $elem['jell5'];
                $egytetel['jell6']     = $elem['jell6'];
                
                $egyt = new Rendeles_tetel($egytetel);
                $egyt->felvetel();
            }
            
     
            // levél kiküldése
            include_once('includes/class.phpmailer.php');
            
            $mail                = new PHPMailer();
            $mail->Host          = $levelezes['host']; 
            //$mail->Port       = 465;   
            //$mail->SMTPSecure = 'ssl';                
            $mail->CharSet       = 'utf-8';
            $mail->SetFrom($levelezes['user'], $levelezes['kitol']);
            $mail->Subject       = $levelezes['targy'].$rend_id;
            
            // ha én vagyok
            //if( $adm ) {
                //$mail->IsSMTP();     
                $mail->IsMail();
                //$mail->SMTPAuth      = true;
                //$mail->SMTPKeepAlive = true;            
                //$mail->Port          = 25;
                $mail->Username      = $levelezes['user'];
                $mail->Password      = $levelezes['jelszo'];
            //} else {
            //    $mail->IsMail();    
            //}
            
            // sablon feltöltése adatokkal
            $tpl = new Smarty();
            $tpl->template_dir = 'sablonkod';
            $tpl->compile_dir  = 'includes/smarty/templates_c';
            $tpl->cache_dir    = 'includes/smarty/cache';
            $tpl->config_dir   = 'includes/smarty/configs';
            
            $tpl->assign('optika',$optika_adat);
            $tpl->assign('optika_id',$rend_dat['rend_bolt_id']);
    
            // ajándék táblázat a kiválasztáshoz
            $tpl->assign('ajandek_azon', $_SESSION['ajandek_azon'] );
            if( isset($_SESSION['ajandek_azon']) && $_SESSION['ajandek_azon'] != 'Nemkerem' ) {
                $ajandek = lekerdezes_tombbe("SELECT * FROM ajandekok WHERE ajandek_azon=".qstr($_SESSION['ajandek_azon']) ); // 
                $tpl->assign('ajandek',$ajandek);
                $tpl->assign('ajandek_azon', $_SESSION['ajandek_azon'] );
            }
            
         

            $mindosszesen = ($rend_adat['rend_osszesen']+$rend_adat['rend_szallitasikoltseg']);
            if( $rend_adat['kedvezmeny'] > 0) {
                $kedvezmeny = $rend_adat['kedvezmeny'];
                $mindosszesen -= $kedvezmeny;
            }
            
            $tpl->assign('ford', $forditas);
            $tpl->assign('alnev', $alnev);
            $tpl->assign('dev', $dev);
            $tpl->assign('rend_id', $rend_id);
            $tpl->assign('rendadat', $rend_adat);
            $tpl->assign('sitenev', $sitenev);
            $tpl->registerPlugin('modifier','arformat', 'arformat');
            $tpl->registerPlugin('function','jellemzoki','jellemzoki');
            $tpl->assign('useradat', $user_adat);
            $tpl->assign('boltadat', $bolt_adat);
            $tpl->assign('boltadat2', $bolt_adat2);
            $tpl->assign('kepsrc', KEPSRC);
            $tpl->assign('osszes_suly',$rend_adat['rend_suly']);
            $tpl->assign('osszesen',$rend_adat['rend_osszesen']);
            $tpl->assign('osszkoltseg', $mindosszesen );
            $tpl->assign('kedvezmeny',  $rend_adat['kedvezmeny'] );
            $tpl->assign('optika',$optika_adat);
            $tpl->assign('optika_id',$rend_adat['rend_bolt_id']);

            
            $tpl->assign('tartalom',$kosar); // itt a kosár tartalmát írja a levélbe
            $tpl->assign('kosar',$kosar); // itt a kosár tartalmát írja a levélbe
            
            //-------------------------------------------
            $sz_tomb = lekerdezes_tombbe("SELECT szall_nev_{$nyelv} as szallnev FROM szallitasi_modok WHERE szall_id = {$rend_adat['szall_mod']}");
            $tpl->assign('szallmod_ki',$sz_tomb['szallnev']);

            $f_tomb = lekerdezes_tombbe("SELECT fiz_modnev_{$nyelv} as fiznev FROM fizetesi_modok WHERE fiz_id = {$rend_adat['fiz_mod']}");
            $fizki = $f_tomb['fiznev'];
            if( $rend_adat['ujfizmod']=='OTPSimple') { $fiztipus = "bankkártya"; }
            $fizki.= " (".$fiztipus.")";
            
            $tpl->assign('fizmod_ki',$fizki);
            //-------------------------------------------

            $body = $tpl->fetch($nyelv.'/megrendelo_level.tpl');
            
            $mail->MsgHTML($body);
            $mail->AddAddress($user_adat['felh_email']);
            $mail->AddBCC($levelezes['admin_email']);
            $mail->AddBCC('kozos@lencsek.hu');
            $mail->AddBCC("rgazda@o3optika.hu");
            
            if( !$mail->Send() ) {
                $uzenet['level_hiba'] = $mail->ErrorInfo;
                    
                sql_update('megrendelesek',$uzenet,"rend_id=".$rend_id);
            } else {
                // elmentjük, hogy elment a levél
                $modosit['level_ment'] = date("Y-m-d H:i:s");
                sql_update('megrendelesek',$modosit,"rend_id=".$rend_id);
                //$akt_megrendeles = new Megrendeles($modosit);
                //$akt_megrendeles->modositas($rend_id);
            }
            
            $mail->ClearAddresses();
            $mail->ClearAttachments();
            
            // levél archiválása
            
            
            // megbízható program
            
            //if( csak_havi_vagy_apoloszer($kosar) ) {
                require_once 'includes/TrustedShop.php';
                $Client = new TrustedShop('5dd19406ebf3b4f676e77cc1e90f5daf');
                $Client->SetEmail($user_adat['felh_email']);
                  

                foreach( $kosar as $elem ) {
                  $Client->AddProduct(termek_nev_from_id($elem['termek_id']));
                }
                $Client->Send();
                
                //hibalevel($rend_id);
            //}
            
            // megbízható program vége
            
            
            // Ha rendben van a vásárlás ez történjen
            $tartalom = "megrendeles_oldal/megrendeles.tpl";
            
            $smarty->assign('kosar',$kosar); // itt a kosár tartalmát írja a megrendelő oldalra
            $smarty->assign('rend_id', $rend_id);
            
            // kosár ürítése, kiléptetés
            kileptetes();
            $valasz = str_replace("{felh_email}",$user_adat['felh_email'],$forditas['koszonjuk_a_megrendelest']); // itt rossz az email cím behelyettesítés a weboldalra írva
            
            $smarty->assign('valasz', $valasz);
            
            $_SESSION['rendeles_elkuldve'] = 1;
            $_SESSION['gateway_volt'] = 1;
            
        } else {
            $tartalom = "megrendeles_oldal/megrendeles.tpl";
            $smarty->assign('valasz', $forditas['egyszer_mar_rendelt']);
        }
            // adatok adatbázisba mentése
            
            
            /**
             * If successful feedback is received from the Payment Gateway system,
             * the transaction was successful, the order can be completed.
             * Save the results to your database!
             */
            //$paymentgatewayErrorMessage = "";
            //$paymentgatewayResponseMessage = "<b>".$response->ResultMessage."</b>";
            //$paymentgatewayResponseMessage.= "<br/>Transaction ID: <b>".$response->ProviderTransactionId."</b>";
            //$paymentgatewayResponseMessage.= "<br/>Authorization number: <b>".$response->Anum."</b>";
            //$paymentgatewayResponseMessage.= "<br/><br/><xmp>".print_r($response, true)."</xmp>";
        } else {
            // ResultCode != SUCCESSFUL
            /**
             * If an error occurred during the payment, the error message should be displayed for the customer.
             */
            // hiba történt fizetéskor vissza kellene menni a választó oldalra
            
            // Hibakiírás
            //$paymentgatewayErrorMessage = $response->ResultCode.":".$response->ResultMessage;
            //$paymentgatewayErrorMessage.= "<br/><br/><xmp>".print_r($response, true)."</xmp>";
            
            $tartalom = "megrendeles_oldal/megrendeles.tpl";
            
            $valasz = $forditas['fizetes_nem_sikerult'].$paymentgatewayErrorMessage; // itt rossz az email cím behelyettesítés a weboldalra írva
            $smarty->assign('valasz', $valasz);
        }
        
        
     // itt jön létre a paymentgateway sor
    } else {
        
        if( isset($_GET['TransactionId']) ) {
            print "Hiba: Nem megfelelő TransactionId<br />\n";
            print "Van ilyen megrendelés?: ". Tranzakcio_vizsgalat($_GET['TransactionId'])."<br />\n";
            print "Ideigelenes táblában van: ". Tranzakcio_vizsgalat2($_GET['TransactionId']);
        }
        
        // kellenek a felhasználó adatai
        $user_adat = lekerdezes_tombbe("SELECT * FROM felhasznalok WHERE felh_id={$_SESSION['user']}");
        
        if( isset($_SESSION['bolt_id']) && $_SESSION['szallmod'] == 3) {
            $bolt_adat = lekerdezes_tombbe("SELECT * FROM pickpackpontok WHERE hely_id={$_SESSION['bolt_id']}");
            $bolt_adat2 = lekerdezes_tombbe("SELECT * FROM pickpackpontok WHERE hely_id={$_SESSION['bolt_id2']}");
        }
        
        if( isset($_SESSION['bolt_id']) && $_SESSION['szallmod'] == 5) {
            $bolt_adat = lekerdezes_tombbe("SELECT hely_nev,hely_cim,hely_open,hely_findme,hely_bolt_kod FROM foxpost WHERE hely_id={$_SESSION['bolt_id']}");
        }
        
        $optika_adat = lekerdezes_tombbe("SELECT * FROM boltok WHERE bolt_id={$_SESSION['optika_id']}");
        
        $dat['rend_datum']       = date("Y-m-d H:i:s");
        $dat['rend_felh_id']     = $_SESSION['user'];
        $dat['rend_varos']       = $user_adat['felh_varos'];
        $dat['rend_megye']       = $user_adat['felh_megye'];
        $dat['rend_utca']        = $user_adat['felh_utca'];
        $dat['rend_irsz']        = $user_adat['felh_irsz'];
        $dat['rend_szaml_varos'] = $user_adat['felh_szvaros'];
        $dat['rend_szaml_megye'] = $user_adat['felh_szmegye'];
        $dat['rend_szaml_utca']  = $user_adat['felh_szutca'];
        $dat['rend_szaml_irsz']  = $user_adat['felh_szirsz'];
        $dat['rend_egpenztar']   = $user_adat['felh_egpenztar'];
        $dat['rend_egazon']      = $user_adat['felh_egazon'];
        $dat['rend_osszesen']    = $_SESSION['osszesen'];
        $dat['fiz_mod']          = $_SESSION['fizmod'];            
        $dat['szall_mod']        = $_SESSION['szallmod'];
        $dat['aznapi_atvetel']   = $_SESSION['aznapi_atvetel'];
        $dat['rend_szamlanev']   = $user_adat['felh_szamlanev'];
        $dat['rend_rendnev']     = $user_adat['felh_csaladnev']." ".$user_adat['felh_keresztnev'];
        if( !empty($user_adat['felh_mobil2']) ) {
            $dat['rend_telefon'] = "06".$user_adat['felh_mobil1'].$user_adat['felh_mobil2'];
        } else {
            //$dat['rend_telefon'] = $user_adat['felh_telefon'];
        }
        $dat['rend_telefon2'] = $user_adat['felh_telefon'];
        $dat['rend_premium_futar'] = $_SESSION['premium_futar'];
        $dat['rend_sms_ertesites'] = $_SESSION['sms_ertesites'];
        $dat['rend_tel_ertesites'] = $_SESSION['tel_ertesites'];
        $dat['rend_megjegyzes']  = illegalis_karakter($_REQUEST['megjegyzes']); //paypalnál ezt nem menti?!
        $dat['rend_bolt_id'] = $_SESSION['optika_id'];
        $dat['raktaron_kerelem'] = $_REQUEST['raktaron_kerelem'];
        
        if( isset($_SESSION['ajandek_azon']) ) {
            $dat['rend_ajandek_azon'] = $_SESSION['ajandek_azon'];
        }
        
        if( !empty($_SESSION['premium_futar']) ) {
            $szall_osszes = $_SESSION['szallitas_osszeg']+$dat['rend_premium_futar']+$dat['rend_sms_ertesites']+$dat['rend_tel_ertesites'];
        } else {
            $szall_osszes = $_SESSION['szallitas_osszeg'];
        }
        $dat['rend_szallitasikoltseg'] = $szall_osszes;
        $dat['rend_suly']        = $_SESSION['osszes_suly'];
        if( $dat['szall_mod'] == 3 || $dat['szall_mod'] == 5 ) {
            $dat['rend_bolt_kod']    = $bolt_adat['hely_bolt_kod'];
            $dat['rend_bolt_id2']    = $bolt_adat2['hely_bolt_kod'];
        } else {
            $dat['rend_bolt_kod']    = 0;
        }
        
        $dat['kedvezmeny'] = $_SESSION['kedvezmeny'];
        //$dat['rend_orszag'] = geoip_country_code3_by_name($_SERVER['REMOTE_ADDR']);

        $mindosszesen = ($_SESSION['osszesen']+$dat['rend_szallitasikoltseg']);
        if( $_SESSION['kedvezmeny'] > 0) {
            $kedvezmeny = $_SESSION['kedvezmeny'];
            $mindosszesen -= $kedvezmeny;
        }
      
        // aznapi átvétel hozzáadása
        //if( isset($_SESSION['aznapi_atvetel']) && $_SESSION['aznapi_atvetel'] > 0) {
        //    $dat['rend_szallitasikoltseg'] += $_SESSION['aznapi_atvetel'];
        //}
        // itt már nem kell növelni még 1x
    
        // ha van termék a kosárban
        if( count($_SESSION['kosar']) ) {
            
            // ez az otp-s fizetési mód
            if( $_SESSION['fizmod'] == 2 && empty($_REQUEST['action']) ) {

                // Ide kell tenni az új fizetési módokat:
                if( isset($_POST['ujfizmod']) &&
                    ($_POST['ujfizmod']=='OTPSimple') ) {
                    
                    
                    $request = new PaymentGateway_Init_Request();
                    
                    $request->setProviderName($_POST['ujfizmod']) // A felhasználó által választott fizetési mód
                    ->setResponseUrl($sitenev.$alnev['megrendeles']) // Visszatérési URL
                    ->setAmount( number_format( ($mindosszesen) , 2, ".", "") ) // Összeg
                    ->setCurrency("HUF") // Valutanem
                    //->setMppPhoneNumber("36".$user_adat['felh_mobil1'].$user_adat['felh_mobil2'])
                    //->setMppPhoneNumber("36703969994")
                    //->setOrderId($rend_id) // Megrendelés azonosító : ezt hogy kérdezzem le előre????
                    ->setUserId($user_adat['felh_id']) // Vásárló / felhasználó azonosító
                    ->setLanguage( strtoupper($nyelv) ); // Nyelv
                    
                    $response = PaymentGateway::init($request);
                    
                    if ($response->ResultCode == "SUCCESSFUL" && $response->TransactionId)
                    {
                        /**
                         * If successful feedback is received from the Payment Gateway system, the purchaser can be sent to the payment page.
                         * IMPORTANT! Before you call the Start method, save the Transaction ID received from Payment Gateway to your database!
                         */
                         
                         // itt kell adatbázisba menteni a tranzakció azonosítót !!!
                         // ide került a megrendelés mentés
                         $dat['TransactionId'] = $response->TransactionId; // itt már tudjuk
                         $dat['ujfizmod'] = $_POST['ujfizmod'];
                         $dat['rend_bolt_id'] = $_SESSION['optika_id'];
                         $dat['kedvezmeny'] = $kedvezmeny;
                         $dat['raktaron_kerelem'] = $_SESSION['raktaron_kerelem'];
                         
                         $megr = new Megrendeles_tmp($dat);
                         $rend_id = $megr->felvetel();
                         
                         // init elött kell sajnos
                         $request->setOrderId($rend_id); // Megadjuk a rendelésszámot
                         
                         // megrendelés tételeinek elmentése
                            foreach( $_SESSION['kosar'] as $elem ) {

                                $egytetel['rend_id']   = $rend_id;
                                $egytetel['termek_id'] = $elem['termek_id'];
                                $egytetel['termek_db'] = $elem['termek_db'];
                                $egytetel['termek_ar'] = $elem['termek_ar'];
                                $egytetel['termek_szem'] = $elem['termek_szem']; // szöveges adat kell bele
                                $egytetel['jell1']     = $elem['jell1'];
                                $egytetel['jell2']     = $elem['jell2'];
                                $egytetel['jell3']     = $elem['jell3'];
                                $egytetel['jell4']     = $elem['jell4'];
                                $egytetel['jell5']     = $elem['jell5'];
                                $egytetel['jell6']     = $elem['jell6'];
                                
                                $egyt = new Rendeles_tetel_tmp($egytetel);
                                $egyt->felvetel();
                            }
                         
                        PaymentGateway::start(new PaymentGateway_Start_Request($response->TransactionId));
                    }
                    else {
                        
                        /**
                         * If an error occurred during the initialization, the error message should be displayed for the customer.
                         */
                        // Hibakiírás
                        //$paymentgatewayErrorMessage = $response->ResultCode.":".$response->ResultMessage;
                        //$paymentgatewayErrorMessage.= "<br/><br/><xmp>".print_r($response, true)."</xmp>";
                    }
                    
                    
                }
                
                $tartalom = "nezetek/paypal.tpl";
                  
            } 
            elseif( $_SESSION['fizmod'] != 2 && empty($_REQUEST['action']) ) {
            // nem elektronikus fizetés
                
                // megrendelés felvétele
                if( $_SESSION['rendeles_elkuldve'] == 0) {
                
                $tartalom = "megrendeles_oldal/megrendeles.tpl";

                $megr = new Megrendeles($dat);
                $rend_id = $megr->felvetel();
                
                // megrendelés tételeinek elmentése
                foreach( $_SESSION['kosar'] as $elem ) {

                    $egytetel['rend_id']   = $rend_id;
                    $egytetel['termek_id'] = $elem['termek_id'];
                    $egytetel['termek_db'] = $elem['termek_db'];
                    $egytetel['termek_ar'] = $elem['termek_ar'];
                    $egytetel['termek_szem'] = $elem['termek_szem']; // szöveges adat kell bele
                    $egytetel['jell1']     = $elem['jell1'];
                    $egytetel['jell2']     = $elem['jell2'];
                    $egytetel['jell3']     = $elem['jell3'];
                    $egytetel['jell4']     = $elem['jell4'];
                    $egytetel['jell5']     = $elem['jell5'];
                    $egytetel['jell6']     = $elem['jell6'];
                    
                    $egyt = new Rendeles_tetel($egytetel);
                    $egyt->felvetel();
                }
                
                // levél kiküldése
                include_once('includes/class.phpmailer.php');
                
                $mail                = new PHPMailer();
                $mail->Host          = $levelezes['host'];
                $mail->IsMail();
                //$mail->IsSMTP(); 
                //$mail->SMTPAuth      = true;                  
                //$mail->SMTPKeepAlive = true;            
                $mail->Port          = 25;      
                //$mail->Port          = 465;   
                //$mail->SMTPSecure = 'ssl';                 
                $mail->Username      = $levelezes['user']; 
                $mail->Password      = $levelezes['jelszo'];        
                $mail->CharSet       = 'utf-8';
                
                //$mail->Host          = "smtp.gmail.com";
                //$mail->Username      = "lencsekoffice@gmail.com"; 
                //$mail->Password      = "Jelko1009"; 
                //$mail->SetFrom('lencsekoffice@gmail.com', 'Lencsek.hu');
                $mail->AddReplyTo('iroda@kontaktlencsek.hu', 'Kontaktencsek.hu');
                $mail->SetFrom($levelezes['user'], $levelezes['kitol']);
                $mail->Subject       = $levelezes['targy'].$rend_id;
                
                // sablon feltöltése adatokkal
                $tpl = new Smarty();
                $tpl->template_dir = 'sablonkod';
                $tpl->compile_dir  = 'includes/smarty/templates_c';
                $tpl->cache_dir    = 'includes/smarty/cache';
                $tpl->config_dir   = 'includes/smarty/configs';
                
                // ajándék táblázat a kiválasztáshoz
                $tpl->assign('ajandek_azon', $_SESSION['ajandek_azon'] );
                if( $_SESSION['ajandek_azon'] != 'Nemkerem' ) {
                    $ajandek = lekerdezes_tombbe("SELECT * FROM ajandekok WHERE ajandek_azon=".qstr($_SESSION['ajandek_azon']) ); // 
                    $tpl->assign('ajandek',$ajandek);
                    $tpl->assign('ajandek_azon', $_SESSION['ajandek_azon'] );
                }
                
                $tpl->assign('optika',$optika_adat);
                $tpl->assign('optika_id',$dat['rend_bolt_id']);
            
                $tpl->assign('ford', $forditas);
                $tpl->assign('alnev', $alnev);
                $tpl->assign('dev', $dev);
                $tpl->assign('rend_id', $rend_id);
                $tpl->assign('rendadat', $dat);
                $tpl->assign('useradat', $user_adat);
                $tpl->assign('boltadat', $bolt_adat);
                $tpl->assign('boltadat2', $bolt_adat2);
                $tpl->assign('szallmod',$_SESSION['szallmod']);
                $tpl->assign('sitenev', $sitenev);
                $tpl->assign('osszes_suly',$_SESSION['osszes_suly']);
                
                $tpl->assign('osszesen',$dat['rend_osszesen']);
                $tpl->assign('kepsrc', KEPSRC);
                $tpl->assign('osszkoltseg', $mindosszesen );
                $tpl->assign('ujfizmod',$ujfizmodok[$dat['ujfizmod']]);
                $tpl->assign('osszkoltseg', $mindosszesen );
                $tpl->assign('kedvezmeny',  $kedvezmeny );
                $tpl->assign('optika',$optika_adat);
                $tpl->assign('optika_id',$dat['rend_bolt_id']);
                //-------------------------------------------
                $sz_tomb = lekerdezes_tombbe("SELECT szall_nev_{$nyelv} as szallnev FROM szallitasi_modok WHERE szall_id = {$_SESSION['szallmod']}");
                $tpl->assign('szallmod_ki',$sz_tomb['szallnev']);

                $f_tomb = lekerdezes_tombbe("SELECT fiz_modnev_{$nyelv} as fiznev FROM fizetesi_modok WHERE fiz_id = {$_SESSION['fizmod']}");
                $tpl->assign('fizmod_ki',$f_tomb['fiznev']);
                //-------------------------------------------
                
                $tpl->registerPlugin('modifier','arformat', 'arformat');
                $tpl->registerPlugin('function','jellemzoki','jellemzoki');
               
                $tpl->assign('tartalom',$_SESSION['kosar']); // itt a kosár tartalma
                $tpl->assign('kosar',$_SESSION['kosar']); // itt a kosár tartalmát írja a levélbe

                $body = $tpl->fetch($nyelv.'/megrendelo_level.tpl');
                
                $mail->MsgHTML($body);
                $mail->AddAddress($user_adat['felh_email']);
                $mail->AddBCC($levelezes['admin_email']);
                $mail->AddBCC('kozos@lencsek.hu');
                $mail->addBCC("rgazda@o3optika.hu");
                
                
                if( !$mail->Send() ) {
                    $uzenet['level_hiba'] = $mail->ErrorInfo;
                    
                    sql_update('megrendelesek',$uzenet,"rend_id=".$rend_id);
                } else {
                    // elmentjük, hogy elment a levél
                    $modosit['level_ment'] = date("Y-m-d H:i:s");
                    
                    //$akt_megrendeles = new Megrendeles($modosit);
                    //$akt_megrendeles->modositas($rend_id);
                    
                    sql_update('megrendelesek',$modosit,"rend_id=".$rend_id);
                    
                    //print "Levelet elküldtük!";
                    //print_r($rend_id);
                }
                
                $mail->ClearAddresses();
                $mail->ClearAttachments();
                
                // levél archiválása
                //hibalevel ( $rend_id." | ".csak_havi_vagy_apoloszer($_SESSION['kosar']) );
                 
                 // megbízható program
                 //if( csak_havi_vagy_apoloszer($_SESSION['kosar']) ) {
                     require_once 'includes/TrustedShop.php';
                     $Client = new TrustedShop('5dd19406ebf3b4f676e77cc1e90f5daf');
                     //9a24a16dac8c1c0773b7073d3946d681
                     $Client->SetEmail($user_adat['felh_email']);

                     foreach( $_SESSION['kosar'] as $elem ) {
                         $Client->AddProduct(termek_nev_from_id($elem['termek_id']));
                     }
                     //$Client->Send();
                     $megbizhato = $Client->SendtoVar();
                     
                     //hibalevel($rend_id);
                 //}
                 // megbízható bolt vége
             
                    // Criteo miatt kell
                    $smarty->assign('rend_id', $rend_id);
                    $smarty->assign('kosar',$_SESSION['kosar']);
                    $smarty->assign('osszesen',$dat['rend_osszesen']);
             
                    // kosár ürítése, kiléptetés
                    kileptetes();
                    
                    $valasz = str_replace("{felh_email}", "<b>".$user_adat['felh_email']."</b>", $forditas['koszonjuk_a_megrendelest']);
                    
                    $smarty->assign('valasz', $valasz);
                    $smarty->assign('megbizhato', $megbizhato);
                    
                    $_SESSION['rendeles_elkuldve'] = 1;
                    $_SESSION['gateway_volt'] = 1;
                    
                } else {
                    // már felvettük rendelését
                    print "Rendelését már felvettük!";
                }
                
                
            }
        
        }
    
    
    
    } // Mennie kell vásárolni vége
    
    
    //hibajavitas();
    
?>