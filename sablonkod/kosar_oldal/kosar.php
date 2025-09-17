<?php
    include_once("includes/class.kosar.php");
   
    $kos = new Kosar();
           
    // hozzáadás
    if( isset($_REQUEST['do']) and $_REQUEST['do'] == 'berak') {
        
        if( isset($_REQUEST['tkupon']) && strtoupper($_REQUEST['tkupon']) == KEDVEZMENYKOD ) {
            $_SESSION['tkupon'] = strtoupper($_REQUEST['tkupon']);
        }
        
        $kos->berak($_REQUEST);
    }
    
    // törlés
    if( isset($_REQUEST['do']) and $_REQUEST['do'] == 'torles') {
        $kos->torol($_REQUEST['tetel_id']);
    }
    
    
    
    
    
    if( isset($_REQUEST['mennyiseg_mod']) and $_REQUEST['mennyiseg_mod'] == 1 ) {
        $z=0;
        
        foreach( $_SESSION['kosar'] as $elem) {
            if($_REQUEST['mennyisegek'][$elem['tetel_id']] > 0) {
                
            $termekinfo = lekerdezes_tombbe("SELECT termekek.termek_id, termekek.termek_nev_hu,
IF( termek_akcios_ar>0 AND termek_akcios_ar < termek_ar,  termek_akcios_ar, termek_ar ) AS termek_ara, termek_ar_2, termek_ar_4,kedvezmeny 
FROM termekek WHERE termekek.termek_id = ".qstr($_SESSION['kosar'][$z]['termek_id']) );

               $_SESSION['kosar'][$z]['termek_db'] = $_REQUEST['mennyisegek'][$elem['tetel_id']];
               
               $_SESSION['kosar'][$z]['termek_ar'] = kedvezmenyes_ar($termekinfo, $_REQUEST['mennyisegek'][$elem['tetel_id']]);
               
               // termék kedvezmény érvényesítése           
                if( strtoupper($_SESSION['tkupon']) == KEDVEZMENYKOD ) {
                    if( $termekinfo['kedvezmeny'] < 1 && $termekinfo['kedvezmeny'] > 0 ) {
                        $_SESSION['kosar'][$z]['termek_ar'] = kerekit0ra($_SESSION['kosar'][$z]['termek_ar'] - ($_SESSION['kosar'][$z]['termek_ar']*$termekinfo['kedvezmeny']) );
                    } else {
                        $_SESSION['kosar'][$z]['termek_ar'] = kerekit0ra($_SESSION['kosar'][$z]['termek_ar'] - $termekinfo['kedvezmeny']);
                    }
                    
                }
            }
            
            $z++;
        }
    }
    
    $smarty->assign('kosarki', $kos->kiir() );
    $tartalom = "kosar_oldal/kosar.tpl";
    
    // ajándék táblázat a kiválasztáshoz
        $smarty->assign('osszesen', $_SESSION['osszesen'] ); // ez kellett ide az ajándék miatt
      if( isset($_SESSION['ajandek_azon']) ) {
          $smarty->assign('ajandek_azon', $_SESSION['ajandek_azon'] );
      } else {
          $smarty->assign('ajandek_azon', 'Nemkerem' );
      }
    $smarty->assign('ajandek_ok', ($_SESSION['osszesen']>300) );
    $smarty->assign('ajandek_kulonbozet', 300-$_SESSION['osszesen'] );
    $result = $db->Execute("SELECT * FROM ajandekok WHERE lencsek_hu = 1 ORDER BY ajandek_id");
    $ajandekok = $result->GetRows(); 
    $smarty->assign('ajandekok',$ajandekok);
?>