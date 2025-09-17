<?php
    //if( $egy_kategoria['kat_szulo'] == 1 ) {
        //$tartalom = "nezetek/kategoria_nezet_mobil.tpl";
        //$tartalom = "o_kategoria/kategoria_nezet.tpl";
        $tartalom = "kiegeszitok_oldal/kiegeszitok.tpl";
        
    //} else {
    //    $tartalom = "nezetek/kiegeszito_nezet.tpl";
    //}
    

    // termékek hozzárendelése sablonhoz
    $result = $db->Execute("SELECT *, termek_nev_{$nyelv} AS termek_nev ,
termek_alnev_{$nyelv} AS termek_alnev ,
termek_gyartok.gyarto_nev AS termek_gyarto
FROM termekek
LEFT JOIN termek_gyartok ON termekek.termek_gyarto_id = termek_gyartok.gyarto_id
WHERE megszunt=0 and termek_kat_id IN (12,13,20,21) ORDER BY termek_nev");
    // termek_csoport = {$egy_kategoria['kat_szulo']} and : kivettem
    
    $termekek = $result->GetRows();
    $smarty->assign('termekek', $termekek);
    
    $title = $egy_kategoria['kat_nev'].$forditas['title_kategoriak'];
    $keywords = $egy_kategoria['kat_nev'];
    
?>