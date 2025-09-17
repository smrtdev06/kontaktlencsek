<?php
include_once("class.alap.php");

function utolso_tetel_id() {
    global $_SESSION;
    
    $utolso_tetel_id = 0;
    
    foreach( $_SESSION['kosar'] as $elem) {
        
        if($elem['tetel_id'] > $utolso_tetel_id) {
            $utolso_tetel_id = $elem['tetel_id'];
        }
    }
    
    return $utolso_tetel_id;
}

function mar_kosarban($termek_id) {
    global $_SESSION;
    
    $benne['i'] = false;
    $benne['h'] = 0;
    
    $termek_id = trim($termek_id);
    
    foreach( $_SESSION['kosar'] as $kulcs => $elem) {
        
        if($elem['termek_id'] == $termek_id) {
            $benne['i'] = true;
            $benne['h'] = $kulcs;
            break;
        }
    }
    
    return $benne;
}


class Kosar {
    // var $kosar = array();
    
    function Kosar(){
        global $_SESSION,$adm;
        
        if( !isset($_SESSION['kosar']) ) {
            $_SESSION['kosar'] = array();
        } 
        //$this->kosar = $_SESSION['kosar'];
    }
    
    function berak($tomb) {
        global $_SESSION;
        
        
        //$fp = fopen('includes/ati/kosar_hiba.txt', 'w');
        //fwrite($fp, tomb_fileba($_SESSION['kosar']) );
        //fclose($fp);
        
        // benne van már a kosárban
        //$bentvan = false;
        //$bentvan = array_search( trim($tomb['termek_id']), array_column($_SESSION['kosar'],'termek_id'));
        
        $bent = mar_kosarban( $tomb['termek_id'] );
        // Ha integer: 0,1,2,3..; akkor benne van
        $_SESSION['bent'] = $bent;
        
        //if( $bent['i'] == true ) { 
            // csak megnöveljük a mennyiséget
            // itt nem nézzük még a jellemzőket, az kelleni fog lencséknél !!!
            
            // extrém módosítás, nem hozzáadjuk a mennyiséget, hanem felülírjuk
            //$_SESSION['kosar'][$bent['h']]['termek_db'] = $_SESSION['kosar'][$bent['h']]['termek_db'] + $tomb['mennyiseg'][0];
            
            //$_SESSION['kosar2'][$bent['h']]['termek_db'] = $_SESSION['kosar'][$bent['h']]['termek_db'] + $tomb['mennyiseg'][0];
        //} else {
            // nincs benne még
        
            //if( count($_SESSION['kosar']) < 1) {
            //    $kov_index = 1;
            //} else {
                //$kov_index = end( array_keys($_SESSION['kosar']['tetel_id']) )+1; // következő index a kosárban
                
            //}
            
        // 2 elemet dolgoz fel, a jobb és bal szemet
        for( $k=0; $k<2; $k++ ) {
                $kov_index = utolso_tetel_id() + 1;
            
            // akkor tesszük be, ha a mennyiség nem nulla
            if( $tomb['mennyiseg'][$k] > 0 ) {
                    $egysor['tetel_id']         = $kov_index; // +$k kivéve
                $egysor['termek_id']    = $tomb['termek_id'];
                $egysor['termek_nev']   = $tomb['termek_nev'];
                    $egysor['termek_alnev']     = urldecode($tomb['termek_alnev']);
                    $egysor['termek_ar']        = trim($tomb['termek_ar']);
                    $egysor['termek_csoport']   = $tomb['termek_csoport'];
                    $egysor['termek_db']        = $tomb['mennyiseg'][$k];
                    $egysor['termek_szem']      = $k; // itt adjuk meg mi legyen a szem értéke
                    $egysor['termek_suly']      = $tomb['termek_suly'];

                    if( isset($tomb['termek_kep']) ) { $egysor['termek_kep'] = $tomb['termek_kep']; }
                    if( isset($tomb['termek_szallitas']) ) { $egysor['termek_szallitas'] = $tomb['termek_szallitas']; }
                    if( isset($tomb['jell1'][$k]) ) { $egysor['jell1'] = $tomb['jell1'][$k]; }
                    if( isset($tomb['jell2'][$k]) ) { $egysor['jell2'] = $tomb['jell2'][$k]; }
                    if( isset($tomb['jell3'][$k]) ) { $egysor['jell3'] = $tomb['jell3'][$k]; }
                    if( isset($tomb['jell4'][$k]) ) { $egysor['jell4'] = $tomb['jell4'][$k]; }
                    if( isset($tomb['jell5'][$k]) ) { $egysor['jell5'] = $tomb['jell5'][$k]; }
                    if( isset($tomb['jell6'][$k]) ) { $egysor['jell6'] = $tomb['jell6'][$k]; }
                    if( isset($tomb['jell7'][$k]) ) { $egysor['jell7'] = $tomb['jell7'][$k]; }
                
                // termék kedvezmény érvényesítése
                if( strtoupper($_SESSION['tkupon']) == KEDVEZMENYKOD) {
                    if( $termekinfo['kedvezmeny'] < 1 && $termekinfo['kedvezmeny'] > 0 ) {
                        $egysor['termek_ar'] = kerekit0ra($egysor['termek_ar'] - ($egysor['termek_ar']*$termekinfo['kedvezmeny']) );
                    } else {
                        $egysor['termek_ar'] = kerekit0ra($egysor['termek_ar'] - $termekinfo['kedvezmeny']);
                    }
                    
                }
                
                // Ha van 2 lencse a kosárban és Renu 60ml (All_In_One_Light) 1db esetén
                if( $tomb['termek_id'] == 22684 &&
                    !kosarban_van(22684) &&
                    $tomb['mennyiseg'][$k]==1 &&
                    van2lencse_kosarban() >= 2) {
                    // ekkor ez a termék 50%-os áron van
                    $egysor['termek_ar'] = round($egysor['termek_ar']/2);
                }
                // 2db esetén
                if( $tomb['termek_id'] == 22684 &&
                    !kosarban_van(22684) &&
                    $tomb['mennyiseg'][$k]==2 &&
                    van2lencse_kosarban() >= 4) {
                    // ekkor ez a termék 50%-os áron van
                    $egysor['termek_ar'] = round($egysor['termek_ar']/2);
                }
                
                
                    //print_r($_SESSION['kosar']);
                    //print_r($egysor);
                
                
                // ha véletlenül 0 lenne az ára
                if( $egysor['termek_ar'] == 0) {
                    $egysor['termek_ar'] = 90000;
                }
                
                //$egysor['termek_csoport']   = $tomb['termek_csoport'];
                //$egysor['termek_db']        = $tomb['mennyiseg'][$k];
                //if( isset($tomb['termek_db']) && $tomb['termek_db'] > 0 ) {
                //    $egysor['termek_db'] = $tomb['termek_db'];
                //}
                //$egysor['termek_szem']      = $k; // itt adjuk meg mi legyen a szem értéke
                // ez a kosárba újrarendelés miatt kell
                if( isset($tomb['termek_szem']) ) {
                    $egysor['termek_szem'] = $tomb['termek_szem'];
                }
                //$egysor['termek_suly']      = $tomb['termek_suly'];
                $egysor['termek_kep']       = $tomb['termek_kep'];
                //$egysor['termek_szallitas'] = $tomb['termek_szallitas'];
                //if( isset($tomb['jell1'][$k]) ) { $egysor['jell1'] = $tomb['jell1'][$k]; }
                //if( isset($tomb['jell2'][$k]) ) { $egysor['jell2'] = $tomb['jell2'][$k]; }
                //if( isset($tomb['jell3'][$k]) ) { $egysor['jell3'] = $tomb['jell3'][$k]; }
                //if( isset($tomb['jell4'][$k]) ) { $egysor['jell4'] = $tomb['jell4'][$k]; }
                //if( isset($tomb['jell5'][$k]) ) { $egysor['jell5'] = $tomb['jell5'][$k]; }
                //if( isset($tomb['jell6'][$k]) ) { $egysor['jell6'] = $tomb['jell6'][$k]; }
                //if( isset($tomb['jell7'][$k]) ) { $egysor['jell7'] = $tomb['jell7'][$k]; }
                
                //array_push($_SESSION['kosar'], $egysor);
                //array_push($this->kosar, $egysor);
                $_SESSION['kosar'][$kov_index] = $egysor;
                $_SESSION['kosar2'][$kov_index] = $egysor;
            }
        }
        
        
    }
    
    function torol( $tetel_id ) {
        global $_SESSION;


        unset($_SESSION['kosar'][$tetel_id]);
        unset($_SESSION['kosar2'][$tetel_id]);
        
        /*        
        $uj_tomb = array();
        
        foreach( $_SESSION['kosar'] as $elem ) {
            if( $elem['tetel_id'] != $tetel_id) {
                $uj_tomb[] = $elem;
            }
        }
        
        $_SESSION['kosar'] = $uj_tomb;
        $_SESSION['kosar2'] = $uj_tomb;
        */
    }
    
    
    function kiir() {
        global $_SESSION, $forditas, $dev, $alnev, $oldal;
        
        if( is_array($_SESSION['kosar']) && empty($_SESSION['kosar']) ) {
            return $forditas['ures_kosar'];
        } else {         
          
            $osszes_suly = 0;
            $osszesen = 0;
            foreach($_SESSION['kosar'] as $elem) {
                $osszesen += $elem['termek_ar'] * $elem['termek_db'];
                $osszes_suly += $elem['termek_suly'] * $elem['termek_db'];
            }
            
            $tpl = new Smarty();
            $tpl->template_dir = 'sablonkod';
            $tpl->compile_dir  = 'includes/smarty3/compiled';
            //$tpl->template_dir = 'sablonkod';
            //$tpl->compile_dir  = 'includes/smarty/templates_c';
            //$tpl->cache_dir    = 'includes/smarty/cache';
            //$tpl->config_dir   = 'includes/smarty/configs';
            
            $tpl->assign('ford', $forditas);
            $tpl->assign('alnev', $alnev);
            $tpl->assign('dev', $dev);
            
            $tpl->assign('osszes_suly',$osszes_suly);
            $tpl->assign('osszesen',$osszesen);
            
            $_SESSION['osszesen'] = $osszesen;
            $_SESSION['osszes_suly'] = $osszes_suly;
            
            //$tpl->register_function('mennyiseg2','mennyiseg2');
            //$tpl->register_function('jellemzoki','jellemzoki');
            $tpl->registerPlugin('function','mennyiseg2', 'mennyiseg2');
            $tpl->registerPlugin('function','jellemzoki','jellemzoki');
            $tpl->registerPlugin('modifier','arformat', 'arformat');
            
            $tpl->assign('tartalom',$_SESSION['kosar']);
            $tpl->assign('oldal', $oldal);
            $tpl->assign('kepsrc', KEPSRC);
            $tpl->assign('kepsrc2', KEPSRC2);
            
            return $tpl->fetch('kosar_oldal/kosar_tablazat.tpl');
            
        }
    }
}


?>