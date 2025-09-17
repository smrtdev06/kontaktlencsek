<?php
    
    // terméklista oldala
    gyartok_listaja(); // gyártók nevei menübe
    
    // lapozó változók
    $t_db  = 16; // oldalanként ennyi db termék
    $t_tol = 1;  // melyik oldaltól
    $t_page = 1; // aktuális oldal
    $smarty->assign('t_db', $t_db); 
    
    
    
    // termékek hozzárendelése sablonhoz
    $select = "SELECT *, termek_nev_{$nyelv} AS termek_nev,
    termek_alnev_{$nyelv} AS termek_alnev";
    
    $select2 = "SELECT termek_id"; // egy mező elég a számoláshoz
    
    
    $sql = " FROM termekek WHERE termek_aktiv=1 ";
    // and (termek_csoport=1 or termek_csoport=2)
    
    if( isset($szuro) ) {
        $sql .= $szuro;
    }
    
    $sql2 = $select2.$sql; // rendezés elötti lista
    // Összesen hány találat van
    $res2 = $db->Execute($sql2);
    $t_osszes = $res2->RecordCount();
    $t_page_db = round($t_osszes/$t_db);
    if( ($t_osszes % $t_db) > 0 ) { $t_page_db++; }
    
    // lapozó alul
    if( $t_page_db > 6 ) {
        $smarty->assign('sz_tol', $t_page);
        $smarty->assign('sz_ig', $t_page+6);
    } else {
        $smarty->assign('sz_tol', 1);
        $smarty->assign('sz_ig', $t_page_db);
    }
    
    if($t_page > 6) {
        $smarty->assign('sz_tol', $t_page-3);
        $smarty->assign('sz_ig', $t_page+3);
    }
    // lapozó alul vége
    
    if( isset($_GET['page']) && is_numeric($_GET['page']) && ($_GET['page']>=1 && $_GET['page']<=$t_page_db) ) {
        $t_page = $_GET['page'];
        $t_tol = round(($t_page-1)*$t_db)+1;
    }
    
    $t_ig = $t_tol+$t_db-1; // edig jelenik meg
    if($t_ig > $t_osszes) {
        $t_ig = $t_osszes;
    }
    
    
    $sql .= " ORDER BY termek_nev LIMIT ".($t_tol-1).",$t_db";
    // LIMIT-et javítani kell, lapozóval

    
    
    
    
    
    $smarty->assign('t_osszes', $t_osszes );
    $smarty->assign('t_page_db', $t_page_db ); 
    $smarty->assign('t_page', $t_page);
    $smarty->assign('t_tol', $t_tol);
    $smarty->assign('t_ig', $t_ig);
    
    //print $sql;
    //$db->debug = true;
    $res = $db->Execute($select.$sql);
    $smarty->assign('Products', $res->GetRows() );
    

?>