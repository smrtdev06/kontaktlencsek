<?php
    $tartalom = "regisztracio_oldal/regisztracio.tpl";
            
    if( $_SESSION['user'] > 0 && !isset($_REQUEST['kuldve2']) ) {
        // kellenek a felhasználó adatai
        $fadat = lekerdezes_tombbe("SELECT * FROM kontaktlencsek_hu.felhasznalok WHERE felh_id='{$_SESSION['user']}'");
    } else {
        $fadat['felh_email']      = $_REQUEST['felh_email'];
        $fadat['felh_jelszo']     = $_REQUEST['felh_jelszo'];
        $fadat['felh_csaladnev']  = $_REQUEST['felh_csaladnev'];
        $fadat['felh_keresztnev'] = $_REQUEST['felh_keresztnev'];
        $fadat['felh_telefon']    = $_REQUEST['felh_telefon'];
        $fadat['felh_mobil1']     = $_REQUEST['felh_mobil1'];
        $fadat['felh_mobil2']     = $_REQUEST['felh_mobil2'];
        $fadat['felh_megye']      = $_REQUEST['felh_megye'];
        $fadat['felh_varos']      = $_REQUEST['felh_varos'];
        $fadat['felh_utca']       = $_REQUEST['felh_utca'];
        $fadat['felh_irsz']       = $_REQUEST['felh_irsz'];
        $fadat['felh_szamlanev']  = $_REQUEST['felh_szamlanev'];
        $fadat['felh_szmegye']    = $_REQUEST['felh_szmegye'];
        $fadat['felh_szvaros']    = $_REQUEST['felh_szvaros'];
        $fadat['felh_szutca']     = $_REQUEST['felh_szutca'];
        $fadat['felh_szirsz']     = $_REQUEST['felh_szirsz'];
        $fadat['felh_egpenztar']  = $_REQUEST['felh_egpenztar'];
        $fadat['felh_egazon']     = $_REQUEST['felh_egazon'];
        $fadat['felh_tagnev']     = $_REQUEST['felh_tagnev'];
        $fadat['felh_megjegyzes'] = $_REQUEST['felh_megjegyzes'];
		
		$fadat['felh_adoszam'] = $_REQUEST['felh_adoszam'];
		$fadat['felh_regszam'] = $_REQUEST['felh_regszam'];
    }
    
    $smarty->assign('fadat',$fadat);
    $smarty->assign('bolt_id',$_SESSION['bolt_id']);
    $smarty->assign('premiumcurrier',$_SESSION['premiumcurrier']);
    $smarty->assign('smscurrier',$_SESSION['smscurrier']);
    //-------------------------------------------------
    $res=$db->Execute("SELECT * FROM egpenztarak ORDER BY penztar_id");
    $penztarak = "{ ";
    $z=1;
    while( !$res->EOF ) {
        
        $tomb = $res->fields;
        
        $penztarak .= " \"{$tomb['penztar_id']}\" : { \"penztar_nev\":\"{$tomb['penztar_nev']}\", \"penztar_varos\":\"{$tomb['penztar_varos']}\", \"penztar_utca\":\"{$tomb['penztar_utca']}\", \"penztar_irsz\":\"{$tomb['penztar_irsz']}\", \"penztar_szamla\":\"{$tomb['penztar_szamla']}\" } ,";

        $z++;
        $res->MoveNext();
    }
    $penztarak = substr($penztarak,0,-1);
    $penztarak .= " }";

    $smarty->assign('penztarak',$penztarak);
    //------------------------------------------------------
    
    
    // egészségpénztárak feltöltése
    $result = $db->Execute("SELECT * FROM egpenztarak ORDER BY penztar_id");
    $smarty->assign('egpenztarak', $result->GetRows() );
?>