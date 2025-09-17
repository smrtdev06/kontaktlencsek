<?php
    //ini_set("display_errors","1");
    
    $tartalom = "hu/air_optix_hydraglyde.tpl";
            
    // népszerű termékek lekérdezése
    $result = $db->Execute("SELECT *, termek_nev_{$nyelv} AS termek_nev, 
termek_alnev_{$nyelv} AS termek_alnev, 
termek_gyartok.gyarto_id,
termek_gyartok.gyarto_nev AS termek_gyarto
FROM
termekek
LEFT JOIN termek_gyartok ON termekek.termek_gyarto_id = termek_gyartok.gyarto_id
WHERE termek_id IN (38587,38588) ORDER BY termek_nev");
    $nepszeru_termekek = $result->GetRows(); 
    $smarty->assign('nepszeru_termekek', $nepszeru_termekek);
?>