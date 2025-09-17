<?php

    // közös függvények és változók
    include_once("includes/latasvizsgalathoz.php");
    
    $smarty->assign('boltok', $boltok );
    $smarty->assign('mire', $mire);
    $smarty->assign('mire_text', $mire_text);
    $smarty->assign('ell_kod', $_SESSION['ell_kod']);
    $smarty->assign('akt_bolt', $_SESSION['bolt']);
   
   
    $hib = "";
    // időpont rögzítés
    if( $_GET['ipontrogzit'] == 1 ) {
        $kezdes = strtotime($_GET['nap1']." ".$_GET['ipont1']);
        $vege   = strtotime($_GET['nap1']." ".$_GET['ipont2']);
        
        while ( $kezdes <= $vege ) {
            $ab['vizsg_nap']     = $_GET['nap1'];
            $ab['vizsg_idopont'] = date("H:i",$kezdes);
            $ab['vizsg_optom']   = $_GET['optom'];
            $ab['vizsg_bolt_id']    = $_SESSION['bolt'];
            //$ab[''] = $_POST[''];  

            // ellenőrzés
            $tesztadat = lekerdezes_tombbe("SELECT vizsg_id FROM latasvizsgalat WHERE vizsg_nap='{$ab['vizsg_nap']}' and vizsg_idopont='{$ab['vizsg_idopont']}' and vizsg_bolt_id ='{$_SESSION['bolt']}'");

            // mentés
            if( empty($tesztadat) ) {
                sql_insert("latasvizsgalat",$ab);
                $hib .= date("Y-m-d H:i",$kezdes)."<br/>\n";
            }
            
            $kezdes = $kezdes + 1800; // 30 percel később //növeljük az időpontot 30 perccel
        }
        
    }

    // szemüvegek.hu változat vége
    
    // lencsek.hu változat
    $smarty->register_function('elmult','elmult');
    $smarty->assign('idopontok', $idopontok);
    $smarty->assign('napok', $napok);
    $smarty->assign('mai_nap', $mai_nap);
    $smarty->assign('elozo_het', $elozo_het);
    $smarty->assign('kov_het', $kov_het);
    $smarty->assign('max_kov_het', $max_kov_het);
    $smarty->assign('h', $h);
    $smarty->assign('hetfo', $hetfo);
    $smarty->assign('pentek', $pentek);
    
   
    // adatmódosítások elötte legyenek
    $heti_adat = hetre_betoltes($hetfo,$pentek, $_SESSION['bolt']);
    $smarty->assign('heti_adat', $heti_adat);                                     
    $smarty->assign('hib', $hib); 

    $tartalom = $nyelv."/latasvizsgalat.tpl";
?>