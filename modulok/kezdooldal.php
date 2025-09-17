<?php
    //ini_set("display_errors","1");
    
    $tartalom = "new/kezdooldal.tpl";
            
    // népszerű termékek lekérdezése
    $result = $db->Execute("SELECT *, termek_nev_{$nyelv} AS termek_nev, 
termek_alnev_{$nyelv} AS termek_alnev, 
termek_gyartok.gyarto_id,
termek_gyartok.gyarto_nev AS termek_gyarto
FROM
termekek
LEFT JOIN termek_gyartok ON termekek.termek_gyarto_id = termek_gyartok.gyarto_id
WHERE home=1 LIMIT 12");
    $nepszeru_termekek = $result->GetRows(); 
    $smarty->assign('nepszeru_termekek', $nepszeru_termekek);
?>