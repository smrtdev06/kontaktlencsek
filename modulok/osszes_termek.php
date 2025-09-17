<?php
    $tartalom = "nezetek/osszes_termek.tpl";
            
    // termékek hozzárendelése sablonhoz
    $result = $db->Execute("SELECT *, termek_nev_{$nyelv} AS termek_nev ,
termek_alnev_{$nyelv} AS termek_alnev ,
termek_gyartok.gyarto_nev AS termek_gyarto
FROM termekek
LEFT JOIN termek_gyartok ON termekek.termek_gyarto_id = termek_gyartok.gyarto_id
WHERE megszunt=0 and termek_csoport = 1
ORDER BY termek_nev");
    $termekek = $result->GetRows();
    $smarty->assign('termekek', $termekek);
    
    
    $result = $db->Execute("SELECT *, termek_nev_{$nyelv} AS termek_nev,
    termek_alnev_{$nyelv} AS termek_alnev ,
    termek_gyartok.gyarto_nev AS termek_gyarto
   FROM termekek
   LEFT JOIN termek_gyartok ON termekek.termek_gyarto_id = termek_gyartok.gyarto_id
     WHERE megszunt=0 and termek_csoport = 2
     ORDER BY termek_nev");
    $kiegeszitok_alul = $result->GetRows();
    $smarty->assign('kiegeszitok_alul', $kiegeszitok_alul);
?>