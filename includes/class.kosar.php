<?php
include_once("class.alap.php");
include_once("bolt_fuggvenyek.php");

class Kosar {
    // var $kosar = array();
    
    function Kosar(){
        global $_SESSION;
        
        if( !isset($_SESSION['kosar']) ) {
            $_SESSION['kosar'] = array();
        } 
        //$this->kosar = $_SESSION['kosar'];
    }
    
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
    
    function berak($tomb) {
        global $_SESSION;
        
        $kov_index = count($_SESSION['kosar']); // következő index a kosárban
        // 2 elemet dolgoz fel, a jobb és bal szemet
        for( $k=0; $k<2; $k++ ) {
            
            // akkor tesszük be, ha a mennyiség nem nulla
            if( $tomb['mennyiseg'][$k] > 0 ) {
                $egysor['tetel_id']     = $kov_index+$k;
                $egysor['termek_id']    = $tomb['termek_id'];
                $egysor['termek_nev']   = $tomb['termek_nev'];
                $egysor['termek_alnev'] = $tomb['termek_alnev'];
                $egysor['termek_ar']    = $tomb['termek_ar'];
                
                // adatok adatbázisból
                $termekinfo = lekerdezes_tombbe("SELECT termekek.termek_id, termekek.termek_nev_hu,
IF( termek_akcios_ar>0 AND termek_akcios_ar < termek_ar,  termek_akcios_ar, termek_ar ) AS termek_ara, termekek.termek_ar_2, termekek.termek_ar_4, kedvezmeny
FROM termekek WHERE termekek.termek_id = ".qstr($egysor['termek_id']) );
                
                $egysor['termek_kedvezmeny'] = $termekinfo['kedvezmeny'];
                
                $egysor['termek_ar'] = $termekinfo['termek_ara'];
                // számolunk mennyiségi kedvezményt
                if( $tomb['mennyiseg'][$k] >= 2) {
                    //$egysor['termek_ar'] = kedvezmenyes_ar($termekinfo,$tomb['mennyiseg'][$k]);
                }
                
                // termék kedvezmény érvényesítése
                /*
                if( strtoupper($_SESSION['tkupon']) == KEDVEZMENYKOD) {
                    if( $termekinfo['kedvezmeny'] < 1 && $termekinfo['kedvezmeny'] > 0 ) {
                        $egysor['termek_ar'] = kerekit0ra($egysor['termek_ar'] - ($egysor['termek_ar']*$termekinfo['kedvezmeny']) );
                    } else {
                        $egysor['termek_ar'] = kerekit0ra($egysor['termek_ar'] - $termekinfo['kedvezmeny']);
                    }    
                }
                */
                
                

                // ha véletlenül 0 lenne az ára
                if( $egysor['termek_ar'] == 0) {
                    $egysor['termek_ar'] = 90000;
                }
                
                $egysor['termek_csoport']   = $tomb['termek_csoport'];
                $egysor['termek_db']        = $tomb['mennyiseg'][$k];
                //if( isset($tomb['termek_db']) && $tomb['termek_db'] > 0 ) {
                //    $egysor['termek_db'] = $tomb['termek_db'];
                //}
                $egysor['termek_szem']      = $k; // itt adjuk meg mi legyen a szem értéke
                // ez a kosárba újrarendelés miatt kell
                if( isset($tomb['termek_szem']) ) {
                    $egysor['termek_szem'] = $tomb['termek_szem'];
                }
                $egysor['termek_suly']      = $tomb['termek_suly'];
                $egysor['termek_kep']       = $tomb['termek_kep'];
                $egysor['termek_szallitas'] = $tomb['termek_szallitas'];
                if( isset($tomb['jell1'][$k]) ) { $egysor['jell1'] = $tomb['jell1'][$k]; }
                if( isset($tomb['jell2'][$k]) ) { $egysor['jell2'] = $tomb['jell2'][$k]; }
                if( isset($tomb['jell3'][$k]) ) { $egysor['jell3'] = $tomb['jell3'][$k]; }
                if( isset($tomb['jell4'][$k]) ) { $egysor['jell4'] = $tomb['jell4'][$k]; }
                if( isset($tomb['jell5'][$k]) ) { $egysor['jell5'] = $tomb['jell5'][$k]; }
                if( isset($tomb['jell6'][$k]) ) { $egysor['jell6'] = $tomb['jell6'][$k]; }
                if( isset($tomb['jell7'][$k]) ) { $egysor['jell7'] = $tomb['jell7'][$k]; }
                
                // A termék éra legyen nagyobb mint 0!
                if( $egysor['termek_ar'] > 0) {
                    array_push($_SESSION['kosar'], $egysor);
                }
                //array_push($this->kosar, $egysor);
            }
        }
        
        
    }
    
    function torol( $tetel_id ) {
        global $_SESSION;

        $uj_tomb = array();
        
        foreach( $_SESSION['kosar'] as $elem ) {
            if( $elem['tetel_id'] != $tetel_id) {
                $uj_tomb[] = $elem;
            }
        }
        
        $_SESSION['kosar'] = $uj_tomb;
    }
    
    
    function kiir() {
        global $_SESSION, $forditas, $dev, $alnev, $oldal;
        
        if( is_array($_SESSION['kosar']) && empty($_SESSION['kosar']) ) {
            return "<p align='center' style='padding:20px;'>".$forditas['ures_kosar']."</p>";
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