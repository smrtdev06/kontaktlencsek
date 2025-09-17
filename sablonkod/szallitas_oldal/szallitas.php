<?php
    if( isset($_GET['ajandek']) ) {
        $result = $db->Execute("SELECT ajandek_azon FROM ajandekok");
        $ajandekok = $result->GetRows();
        
        //print_r($ajandekok);
        //print "Benne van:".in_array($_GET['ajandek'], $ajandekok['ajandek_azon']);
        
        //if( in_array($_GET['ajandek'], $ajandekok['ajandek_azon']) ) {
        $_SESSION['ajandek_azon'] = $_GET['ajandek'];
        //}
        $smarty->assign('ajandek_beallitva',1);
    } else {
        //unset($_SESSION['ajandek_azon']);
        //$smarty->assign('ajandek_beallitva',0);
    }
    
    //$tartalom = "szallitas_oldal/szallitas_fizetes_mobil.tpl";
    ///if( $adm ) {
        $tartalom = "szallitas_oldal/szallitas_fizetes_posta2024.tpl";
    //}
        //$tartalom = "szallitas_oldal/szallitas_1pickpack.tpl";
        //$tartalom = "new/szallitas_valaszto.tpl";
    //} else {
    //    $tartalom = "nezetek/szallitas_fizetes_uj.tpl";
    //}
            
    //$result = $db->Execute("SELECT *, szall_nev_{$nyelv} as szallnev, segitseg_{$nyelv} as segitseg FROM szallitasi_modok");
    //$szallitasok = $result->GetRows();
    //$smarty->assign('szallitasok', $szallitasok);
    
    //$result = $db->Execute("SELECT *, fiz_modnev_{$nyelv} as fiznev, segitseg_{$nyelv} as segitseg FROM fizetesi_modok");
    //$fizetesek = $result->GetRows();
    //$smarty->assign('fizetesek', $fizetesek);
    $_SESSION['premium_futar'] = 0;
    $_SESSION['sms_ertesites'] = 0;
    $_SESSION['tel_ertesites'] = 0;
    $_SESSION['aznapi_atvetel'] = 0;
    
    //$result = $db->Execute("SELECT DISTINCT megye_nev, megye_id FROM pickpack_lista WHERE megye_nev IS NOT NULL ORDER BY megye_nev");
    //$smarty->assign('megyek', $result->GetRows() );
    
    $result = $db->Execute("SELECT * FROM boltok");
    $smarty->assign('optikak', $result->GetRows() );
    
    $result = $db->Execute("SELECT bolt_nyitvatartas FROM boltok");
    $optika_nyitvatartasok = $result->GetRows();
    $smarty->assign('optika_nyitvatartasok', $optika_nyitvatartasok);
    
    /* Foxpost --------------------------------------------------------------------------- */
    // csak azok a megyék jelennek meg, ahol van átvételi pont
    /*$result = $db->Execute("SELECT DISTINCT megye_nev, megye_id FROM foxpost_lista WHERE megye_nev IS NOT NULL ORDER BY megye_nev");
    $smarty->assign('f_megyek', $result->GetRows() );
    
    function foxpost_varosok() {
        // csak azok a városok jelennek meg, ahol van átvételi pont
        global $db;
        
        $res=$db->Execute("SELECT DISTINCT varos_id,varos_szulo,varos FROM foxpost_lista ORDER BY varos_szulo, varos");
        $varosok = "{ ";
        $z=1;
        $tmp_szulo = 0;
        while( !$res->EOF ) {
            $tomb = $res->fields;
                        
            if( $z== 1) {
              $varosok .= " \"{$tomb['varos_szulo']}\" : [";
            }
            
            if( $tmp_szulo != $tomb['varos_szulo']) {
                $varosok .= " ], \"{$tomb['varos_szulo']}\" : [";
            }
            
            $varosok .= " {\"varos_id\": \"{$tomb['varos_id']}\", \"varos\":\"{$tomb['varos']}\" },";
            $tmp_szulo = $tomb['varos_szulo'];
            $z++;
            $res->MoveNext();
        }
        
        $varosok = substr($varosok,0,-1);
        //$nyitvatartasok = substr($nyitvatartasok,0,-1);
        $varosok .= " ] }";
        
        return $varosok;
    }
    
    //$res=$db->Execute("SELECT * FROM foxpost WHERE hely_id >= 8000 ORDER BY hely_szulo, hely_cim, hely_nev");
    $res=$db->Execute("SELECT * FROM foxpost_lista ORDER BY hely_szulo, hely_cim, hely_nev");
    
    $varosok = "{ ";
    $nyitvatartasok = "{ \"0\" : { \"hely_nyitva\" : \"\" }, ";
    $z=1;
    $tmp_szulo = 0;
    while( !$res->EOF ) {
        $tomb = $res->fields;
        $nyitvatartasok .= " \"{$tomb['hely_id']}\" : { \"hely_nyitva\":\"Nyitva: {$tomb['hely_open']}\", \"hely_findme\":\"".htmlspecialchars($tomb['hely_findme'])."\"},";
        
        if( $z== 1) {
          $varosok .= " \"{$tomb['hely_szulo']}\" : [";
        }
        
        if( $tmp_szulo != $tomb['hely_szulo']) {
            $varosok .= " ], \"{$tomb['hely_szulo']}\" : [";
        }
        
        $varosok .= " {\"hely_id\": \"{$tomb['hely_id']}\", \"hely_nev\":\"{$tomb['hely_nev']}\", \"hely_cim\":\"{$tomb['hely_cim']}\" },";
        $tmp_szulo = $tomb['hely_szulo'];
        $z++;
        $res->MoveNext();
    }
    
    $varosok = substr($varosok,0,-1);
    $nyitvatartasok = substr($nyitvatartasok,0,-1);
    $varosok .= " ] }";
    $nyitvatartasok .= " }";
    
    $smarty->assign('foxpost_helyek',$varosok);
    $smarty->assign('foxpost_varosok', foxpost_varosok() );
    $smarty->assign('fox_nyitvatartasok',$nyitvatartasok);
    */
    
    /* Foxpost vége ------------------------------------------------------------------------ */
    
    // /\r\n|\r|\n/
    // /\s+/
    $optika1_ny = trim(preg_replace('/\r\n|\r|\n/', ', ', $optika_nyitvatartasok[0]['bolt_nyitvatartas']));
    $optika2_ny = trim(preg_replace('/\r\n|\r|\n/', ', ', $optika_nyitvatartasok[1]['bolt_nyitvatartas']));
    $optika3_ny = trim(preg_replace('/\r\n|\r|\n/', ', ', $optika_nyitvatartasok[2]['bolt_nyitvatartas']));
    $optika4_ny = trim(preg_replace('/\r\n|\r|\n/', ', ', $optika_nyitvatartasok[3]['bolt_nyitvatartas']));
    
    //$optika1_ny = nl2br( $optika_nyitvatartasok[0]['bolt_nyitvatartas'] );
    //$optika2_ny = nl2br( $optika_nyitvatartasok[1]['bolt_nyitvatartas'] );
    
    $smarty->assign('optika1_ny', $optika1_ny );
    $smarty->assign('optika2_ny', $optika2_ny );
    $smarty->assign('optika3_ny', $optika3_ny );
    $smarty->assign('optika4_ny', $optika4_ny );
    //-------------------------------------------------
    
    function pickpack_varosok() {
        // csak azok a városok jelennek meg, ahol van átvételi pont
        global $db;
        
        $res=$db->Execute("SELECT DISTINCT varos_id,varos_szulo,varos FROM pickpack_lista ORDER BY varos_szulo, varos");
        $varosok = "{ ";
        $z=1;
        $tmp_szulo = 0;
        while( !$res->EOF ) {
            $tomb = $res->fields;
                        
            if( $z== 1) {
              $varosok .= " \"{$tomb['varos_szulo']}\" : [";
            }
            
            if( $tmp_szulo != $tomb['varos_szulo']) {
                $varosok .= " ], \"{$tomb['varos_szulo']}\" : [";
            }
            
            $varosok .= " {\"varos_id\": \"{$tomb['varos_id']}\", \"varos\":\"{$tomb['varos']}\" },";
            $tmp_szulo = $tomb['varos_szulo'];
            $z++;
            $res->MoveNext();
        }
        
        $varosok = substr($varosok,0,-1);
        //$nyitvatartasok = substr($nyitvatartasok,0,-1);
        $varosok .= " ] }";
        
        return $varosok;
    }
    
    
    //$res=$db->Execute("SELECT * FROM pickpackpontok ORDER BY hely_szulo, hely_nev, hely_bolt, hely_cim");
    /*$res=$db->Execute("SELECT * FROM pickpack_lista ORDER BY hely_szulo, hely_nev, hely_bolt, hely_cim");
    
    $varosok = "{ ";
    $nyitvatartasok = "{ \"0\" : { \"hely_nyitva\" : \"\" }, ";
    $z=1;
    $tmp_szulo = 0;
    while( !$res->EOF ) {
        
        $tomb = $res->fields;
        
        $nyitvatartasok .= " \"{$tomb['hely_id']}\" : { \"hely_nyitva\":\"Nyitva: Hétfő {$tomb['ny_h']},  Kedd {$tomb['ny_k']},<br />Szerda {$tomb['ny_sz']}, Csütörtök {$tomb['ny_cs']},<br />Péntek {$tomb['ny_p']}, Szombat {$tomb['ny_szo']},<br />Vasárnap {$tomb['ny_v']}\"},";
        
        if( $z== 1) {
          $varosok .= " \"{$tomb['hely_szulo']}\" : [";
        }
        
        if( $tmp_szulo != $tomb['hely_szulo']) {
            $varosok .= " ], \"{$tomb['hely_szulo']}\" : [";
            
        }
        
        $varosok .= " {\"hely_id\": \"{$tomb['hely_id']}\", \"hely_nev\":\"{$tomb['hely_nev']}\", \"hely_cim\":\"{$tomb['hely_cim']}\", \"hely_bolt\":\"{$tomb['hely_bolt']}\" },";
        $tmp_szulo = $tomb['hely_szulo'];
        $z++;
        $res->MoveNext();
    }
    $varosok = substr($varosok,0,-1);
    $nyitvatartasok = substr($nyitvatartasok,0,-1);
    $varosok .= " ] }";
    $nyitvatartasok .= " }";
    
    $smarty->assign('helyek',$varosok);
    $smarty->assign('pickpack_varosok', pickpack_varosok() );
    
    $smarty->assign('nyitvatartasok',$nyitvatartasok);
    */
    //------------------------------------------------------
    
    $res=$db->Execute("SELECT * FROM szallitas_hozzarendeles order by szall_id,fiz_id");
    while( !$res->EOF ) {
        $tomb = $res->fields;
        
        //$szall_tomb[$tomb['fiz_id']][$tomb['szall_id']] = array( 'ar'=>szallitasi_koltseg($tomb['fiz_id'],$tomb['szall_id'], $_SESSION['osszes_suly']), 'ingyen'=>$tomb['szall_ingyenes']);
        
        $szallar_tomb[$tomb['szall_id']][$tomb['fiz_id']] = array( 'ar'=>szallitasi_koltseg($tomb['fiz_id'],$tomb['szall_id'], $_SESSION['osszes_suly']), 'ingyen'=>$tomb['szall_ingyenes']);
        
        $res->MoveNext();
    }
    //$smarty->assign('szall_tomb',$szall_tomb);
    $smarty->assign('szallar_tomb',$szallar_tomb);
    
    // kedvezmény
    if( $_SESSION['osszesen'] < 3000 ) { $_SESSION['kedvezmeny'] = 0; }
    
    if( $_SESSION['kedvezmeny'] > 0 ) {
        $kedvezmeny = $_SESSION['kedvezmeny']; // $_SESSION['osszesen'] * $_SESSION['kedvezmeny'];
    } else {
        $kedvezmeny = 0;
    }
    $smarty->assign('kedvezmeny',$kedvezmeny);
    // kedvezmény vége
    
    
    /*
    $artomb = "";
    $fizszam = 0;
    foreach($fizetesek as $kulcs => $elem) {
        $artomb .= "\"{$elem['fiz_id']}\":{";
        ++$fizszam;
        
        foreach($szallitasok as $kulcs2 => $elem2) {
            $artomb .= "\"{$elem2['szall_id']}\":".szallitasi_koltseg($elem['fiz_id'],$elem2['szall_id'], $_SESSION['osszes_suly']).",";
        }
        $artomb = substr($artomb,0,-1);
        
        $artomb .= "},";

    }
    $artomb = substr($artomb,0,-1);
    $smarty->assign('fizszam',$fizszam);
    //$smarty->assign('artomb',$artomb);
    //"1":{"1":0,"2":0},"2":{"1":890,"2":1090},"3":{"1":" - ","2":0}
    */
    if( !isset($_SESSION['osszesen']) )    { $_SESSION['osszesen'] = 0; }
    if( !isset($_SESSION['osszes_suly']) ) { $_SESSION['osszes_suly'] = 0; }
    
    $smarty->assign('osszesen',$_SESSION['osszesen']?$_SESSION['osszesen']:0);
    $smarty->assign('osszes_suly',$_SESSION['osszes_suly']);
    
    $aznapi_osszeg = 0;
    //$aznapi_osszeg = 390;
    //if( date("H") > 14 ) {
    //    $aznapi_osszeg = 290;
    //}
    
    $smarty->assign('aznapi_osszeg',$aznapi_osszeg);
    //$smarty->assign('fizmod',$_SESSION['fizmod']);
    //$smarty->assign('szallmod',$_SESSION['szallmod']);
    //$smarty->assign('szallar', szallitasi_koltseg(2,1, $_SESSION['osszes_suly']) );
?>