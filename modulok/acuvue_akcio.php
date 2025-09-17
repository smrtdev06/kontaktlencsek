<?php
    //ini_set("display_errors","1");
    
    $tartalom = "hu/acuvue_akcio.tpl";
            
    // népszerű termékek lekérdezése
    $result = $db->Execute("SELECT *, termek_nev_{$nyelv} AS termek_nev, 
termek_alnev_{$nyelv} AS termek_alnev, 
termek_gyartok.gyarto_id,
termek_gyartok.gyarto_nev AS termek_gyarto
FROM
termekek
LEFT JOIN termek_gyartok ON termekek.termek_gyarto_id = termek_gyartok.gyarto_id
WHERE termek_id IN (19425,20058,22810,20863,20960,19422,37197,20063)");
    $nepszeru_termekek = $result->GetRows(); 
    $smarty->assign('nepszeru_termekek', $nepszeru_termekek);
?>