<?php
    // korábbi rendelések megtekintése, újrarendelése
    //include_once('includes/bolt_fuggvenyek.php');
    //$db->debug=true;
    
    // ha már be van lépve, csak akkor
    if( $_SESSION['user'] ) {
        $tartalom = "nezetek/rendelesek_lista.tpl";
        
        //$ADODB_FETCH_MODE = 'ADODB_FETCH_ASSOC';
        //$rendelesei = $db->GetAll("SELECT MR.rend_id FROM megrendelesek AS MR WHERE MR.rend_felh_id = {$_SESSION['user']}
        //ORDER BY MR.rend_id");
        $result = $db->Execute("SELECT MR.rend_id FROM megrendelesek AS MR WHERE MR.rend_felh_id = {$_SESSION['user']} ORDER BY MR.rend_datum DESC LIMIT 5");
        // || MR.rend_uzletkoto_id = {$_SESSION['user']}
        $rendelesei = array();
        
        while( !$result->EOF ) {
            $rendelesei[] = $result->Fields('rend_id');
            $result->MoveNext();
        }
        //print_r($rendelesei);
        
        // berakjuk a kosárba a kiválasztott rendelés tételeit
        if( isset($_REQUEST['ujra_berak']) && in_array($_REQUEST['ujra_berak'], $rendelesei) ) {
            rendeles_kosarba($_REQUEST['ujra_berak']);
            
            // -> kosárhoz irányítjuk
            header("location:".$alnev['kosar']);
        }
        

        
        // egy rendelés adatai
        //if( isset($_REQUEST['rend_id']) && in_array($_REQUEST['rend_id'], $rendelesei) ) { 
            //$tartalom = "nezetek/egy_rendeles_adatai.tpl";
            
            
                
        //} else {
        // összes rendelése
            // kategóriák hozzárendelése sablonhoz
            $result = $db->Execute("SELECT
            MR.rend_id,
            MR.rend_datum,
            MR.rend_osszesen,
            FM.fiz_modnev_{$nyelv} AS fiz_modnev,
            SZM.szall_nev_{$nyelv} AS szall_modnev
            FROM
            megrendelesek AS MR
            INNER JOIN fizetesi_modok AS FM ON MR.fiz_mod = FM.fiz_id
            INNER JOIN szallitasi_modok AS SZM ON MR.szall_mod = SZM.szall_id
            WHERE
            MR.rend_felh_id = {$_SESSION['user']} 
            ORDER BY
            MR.rend_datum DESC LIMIT 5");
            $megrendelesek = $result->GetRows();
            $smarty->assign('megrendelesek', $megrendelesek);
            // || MR.rend_uzletkoto_id = {$_SESSION['user']}
            
            
            
            // $rendelesei-ből stringet csinálunk
            $rendeles_idk = '';
            foreach($rendelesei as $elem) {
                $rendeles_idk .= $elem.',';
            }
            $rendeles_idk = substr($rendeles_idk, 0, -1); // levágjuk az utolsó vesszőt
            
            if( !empty($rendelesei) ) {
                // Rendelés adatok
                $result = $db->Execute("SELECT
                RT.rend_id,
                T.termek_nev_{$nyelv},
                T.termek_alnev_{$nyelv},
                T.termek_kep,
                RT.termek_db,
                RT.termek_ar,
                RT.termek_szem,
                RT.jell1,
                RT.jell2,
                RT.jell3,
                RT.jell4,
                RT.jell5,
                RT.jell6,
                RT.jell7
                FROM
                rendeles_tetelek AS RT
                INNER JOIN termekek AS T ON RT.termek_id = T.termek_id
                WHERE RT.rend_id IN ({$rendeles_idk})
                ORDER BY
                RT.rend_id DESC");
                $tetelek = $result->GetRows();
                $smarty->assign('tetelek', $tetelek);
            } else {
                // Nincsenek korábbi rendelései
            }
            
            
        //}
        
        //print $rendeles_idk;
        
        
        
        
    
    } else {
    // Nincs belépve, nincs mit megjeleníteni neki        
        $tartalom = "nezetek/nincs_jogosultsag.tpl";
    }


?>