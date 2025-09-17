<?php
    $tartalom = "attekinto_oldal/rendeles_attekinto.tpl";
    $kupon_uzenet = '';
            
    $_SESSION['rendeles_elkuldve'] = 0;
    
    /*
    // kupont adott meg a kosárnál
    $jo_kuponok = array(); // 'ALCON15'
    
    if( isset($_REQUEST['kupon']) and in_array( strtoupper($_REQUEST['kupon']), $jo_kuponok) ) {
        // && $_SESSION['szallmod'] == 5
        $kupon_uzenet = "Kuponkód elfogadva!";
        
        switch( strtoupper($_REQUEST['kupon']) ) {
            
            case 'ALCON18':
                //$_SESSION['kedvezmeny'] = 500; // ez összeg, adatbázisba összeget mentünk
                $_SESSION['kedvezmeny'] = kedvezmeny_erre( array('38587','38588','20064','20158','21063','21064','19411','20856','28746','28747','28748','28749','33605','41733'), 0.15 );
            break;
            
        }
        
    } elseif( isset($_REQUEST['kupon']) ) {
        $kupon_uzenet = "Kuponkód hibás !";
        
        $_SESSION['kedvezmeny'] = 0;
    }
    */
    
    if( !isset($_SESSION['kedvezmeny']) ) { 
        // || $_SESSION['szallmod'] != 5
        $_SESSION['kedvezmeny'] = 0;
    }
    
    // Küldött kuponkódot, de nem jó
    //if( isset($_REQUEST['kupon']) && ($_REQUEST['kupon'] !='foxpost' || $_SESSION['szallmod'] != 5) ) {
    //    $kupon_uzenet = "Kuponkód hibás vagy a szállítási mód nem Foxpost!";
    //}    
    
    // kellenek a felhasználó adatai
    
    
    
    //-------------------------------------------
    $sz_tomb = lekerdezes_tombbe("SELECT szall_nev_{$nyelv} as szallnev FROM szallitasi_modok WHERE szall_id = {$_SESSION['szallmod']}");
    $smarty->assign('szallmod_ki',$sz_tomb['szallnev']);

    $f_tomb = lekerdezes_tombbe("SELECT fiz_modnev_{$nyelv} as fiznev FROM fizetesi_modok WHERE fiz_id = {$_SESSION['fizmod']}");
    $smarty->assign('fizmod_ki',$f_tomb['fiznev']);
    //-------------------------------------------
    if( isset($_SESSION['bolt_id']) && $_SESSION['szallmod']==3 ) { // pickpack esetén
        $bolt_adat = lekerdezes_tombbe("SELECT * FROM pickpackpontok WHERE hely_id={$_SESSION['bolt_id']}");
        $bolt_adat2 = lekerdezes_tombbe("SELECT * FROM pickpackpontok WHERE hely_id={$_SESSION['bolt_id2']}");
    }
    if( isset($_SESSION['bolt_id']) && $_SESSION['szallmod']==5 ) { // foxpost esetén
        $bolt_adat = lekerdezes_tombbe("SELECT hely_nev,hely_cim,hely_open,hely_findme,hely_bolt_kod FROM foxpost WHERE hely_id={$_SESSION['bolt_id']}");
    }
    
    // optikák személyes átvételhez
    if( $_SESSION['optika_id'] > 0 ) {
      $optika_adat = lekerdezes_tombbe("SELECT * FROM boltok WHERE bolt_id={$_SESSION['optika_id']}");
      $smarty->assign('optika',$optika_adat);
      $smarty->assign('optika_id',$_SESSION['optika_id']);
    }
    // optikák vége
    
    // ajándék táblázat a kiválasztáshoz
    if( isset($_SESSION['ajandek_azon']) ) {
        
        if( $_SESSION['ajandek_azon'] != 'Nemkerem' ) {
            $ajandek = lekerdezes_tombbe("SELECT * FROM ajandekok WHERE ajandek_azon=".qstr($_SESSION['ajandek_azon']) ); // 
            
            
            if( $_SESSION['osszesen'] <= $ajandek['ajandek_ertekhatar'] ) {
                unset($_SESSION['ajandek_azon']);
            } else {
                $smarty->assign('ajandek',$ajandek);
            }
        }
        
        $smarty->assign('ajandek_azon', $_SESSION['ajandek_azon'] );
    }
    
    
    // aznapi átvétel hozzáadása, itt növeljük meg a szállítás értékét
    if( isset($_SESSION['aznapi_atvetel']) && $_SESSION['aznapi_atvetel'] > 0) {
        $_SESSION['szallitas_osszeg'] += $_SESSION['aznapi_atvetel'];
    }
    
    $smarty->assign('fizmod',$_SESSION['fizmod']);
    $smarty->assign('szallmod',$_SESSION['szallmod']);
    $smarty->assign('tetelek',$_SESSION['kosar']);
    $smarty->assign('osszes_suly',$_SESSION['osszes_suly']);
    $smarty->assign('osszesen',$_SESSION['osszesen']);
    $smarty->assign('bolt_id',$_SESSION['bolt_id']);
    $smarty->assign('bolt_id2',$_SESSION['bolt_id2']);
    $smarty->assign('premiumcurrier',$_SESSION['premiumcurrier']);
    $smarty->assign('smscurrier',$_SESSION['smscurrier']);
    $smarty->assign('premium_futar',$_SESSION['premium_futar']);
    $smarty->assign('sms_ertesites',$_SESSION['sms_ertesites']);
    $smarty->assign('tel_ertesites',$_SESSION['tel_ertesites']);
    $smarty->assign('boltadat',$bolt_adat);
    $smarty->assign('boltadat2',$bolt_adat2);
    
    if( !empty($_SESSION['premium_futar']) ) {
        $szall_osszes = $_SESSION['szallitas_osszeg']+$_SESSION['premium_futar']+$_SESSION['sms_ertesites']+$_SESSION['tel_ertesites'];
    } else {
        $szall_osszes = $_SESSION['szallitas_osszeg'];
    }
    
    $mindosszesen = $_SESSION['osszesen'] + $szall_osszes;
    
    if( $_SESSION['kedvezmeny'] > 0) {
        $kedvezmeny = $_SESSION['kedvezmeny'];
        $mindosszesen -= $kedvezmeny;
    } else {
        $kedvezmeny = 0;
    }
    $smarty->assign('kedvezmeny', $kedvezmeny); // ez összeg, nem százalék
    
    
    
    $u_adat = lekerdezes_tombbe("SELECT * FROM kontaktlencsek_hu.felhasznalok WHERE felh_id='{$_SESSION['user']}'");
    
    // ajándék Renu 5000 felett és kuponkód
    //if( isset($_REQUEST['kupon']) && $_REQUEST['kupon'] =='K18LENCS' && $_SESSION['osszesen'] >= 5000 ) {
    //    $kupon_uzenet = "Ajándék Renu Multiplus (60ml) ápolószer ajándékba!";
    //    $u_adat['felh_megjegyzes'] .= "\nK18LENCS: Ajándék Renu Multiplus (60ml)";
    //}
    
    // ajándék OPTI-FREE
    //$havi_db = havi_lencse_kosarban();
    //if( isset($_REQUEST['kupon']) && $_REQUEST['kupon'] =='H18LENCS' && $havi_db) {
    //    $kupon_uzenet = $havi_db."db Ajándék OPTI-FREE Pure Moist (60ml) ápolószer ajándékba!";
    //    $u_adat['felh_megjegyzes'] .= "\nH18LENCS: ".$havi_db."db Ajándék OPTI-FREE Pure Moist (60ml)";
    //}
    
    
    $smarty->assign('kupon_uzenet',$kupon_uzenet);
    
    $smarty->assign('user_adat',$u_adat);
    $smarty->assign('szallitas_osszeg',$szall_osszes);
    $smarty->assign('mindosszesen', $mindosszesen );
    
    //print_r($_SESSION['kosar']);
?>