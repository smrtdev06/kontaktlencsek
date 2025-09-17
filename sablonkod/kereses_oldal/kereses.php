<?php
    $tartalom = "kereses_oldal/kereses.tpl";

    $sql = "SELECT *, termek_nev_{$nyelv} AS termek_nev ,
termek_alnev_{$nyelv} AS termek_alnev ,
termek_gyartok.gyarto_nev AS termek_gyarto, IF(termek_akcios_ar>0,termek_akcios_ar,termek_ar) AS t_ar
FROM termekek
LEFT JOIN termek_gyartok ON termekek.termek_gyarto_id = termek_gyartok.gyarto_id
WHERE megszunt=0 and termek_ar > 0";

if( !isset($_GET['keres']) ) {
    $sql .= " and termek_gyarto_id={$gyarto_id}";
}
    
    
    // termékcsoport szürés
    if( isset($_GET['tcs']) && $_GET['tcs'] == 'napszemuveg' and !isset($_GET['keres']) ) { // 3
        $sql .= " and termek_csoport = 3";
    }
    
    if( isset($_GET['tcs']) && $_GET['tcs'] == 'szemuvegkeret') { // 4
        $sql .= " and termek_csoport = 4";
    }

    if( isset($_GET['keres']) and !empty($_GET['keres']) ) {
        $sql.= " and termek_nev_hu like ".qstr('%'.$_GET['keres'].'%')." ";
        
        $smarty->assign('keres', $_GET['keres']);
    }
    
    
    // rendezés
    if( isset($_GET['r']) and !empty($_GET['r']) ) {
        switch( $_GET['r'] ) {
            case 2:
                $sql .= " ORDER BY t_ar ";
            break;
            case 3:
                $sql .= " ORDER BY t_ar DESC";
            break;
            case 1:
                $sql .= " ORDER BY termek_nev";
            break;
            
        }
        $smarty->assign('r', $_GET['r']);
    } else {
        $sql .= " ORDER BY termek_nev";    
    }
    
    
    


         
    // termékek hozzárendelése sablonhoz
    $result = $db->Execute($sql);

    $termekek = $result->GetRows();

    $smarty->assign('termekek', $termekek);
    if( isset($_GET['tcs']) ) { $smarty->assign('tcs', $_GET['tcs']); }

    $title = $termekek[0]['termek_gyarto'].$forditas['title_gyarto'];
    $keywords = $termekek[0]['termek_gyarto'];
    
?>