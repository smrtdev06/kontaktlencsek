<?php

    //if( $adm ) {
    //    $tartalom = "{$nyelv}/egy_termek_nezet_dominans.tpl";
    //} else {
        //$tartalom = "{$nyelv}/egy_termek_nezet.tpl";
        $tartalom = "termek_oldal/egy_termek_nezet.tpl";
    //}
    
    
    $result = $db->Execute("SELECT *, termek_nev_{$nyelv} AS termek_nev,
    termek_alnev_{$nyelv} AS termek_alnev,
    termek_kiszereles_{$nyelv} AS termek_kiszereles,
    termek_szallitas_{$nyelv} AS termek_szallitas,
    termek_megjegyzes_{$nyelv} AS termek_megjegyzes,
    termek_kep,
    termek_csoport,
    termek_kat_id,
    termek_gyartok.gyarto_nev AS termek_gyarto,
    termek_kategoriak.kat_nev_{$nyelv}_t AS termek_tipus,
    termek_kategoriak.kat_nev_{$nyelv} AS termek_kat_nev
FROM termekek 
LEFT JOIN termek_gyartok ON termekek.termek_gyarto_id = termek_gyartok.gyarto_id
LEFT JOIN termek_kategoriak ON termekek.termek_kat_id = termek_kategoriak.kat_id
WHERE termek_alnev_{$nyelv} like '{$_REQUEST['q']}'");

    $egy_termek = $result->GetRows();
    //$egy_termek = $result->GetArray();
    //$egy_termek = $egy_termek[0];
    if( $egy_termek[0]['termek_csoport'] == 1 ) {
        $title = $egy_termek[0]['termek_nev'].$forditas['title_termeknev'];
        $keywords = $egy_termek[0]['termek_nev'].$forditas['keywords_termeknev'].', '.htmlspecialchars($egy_termek[0]['termek_megjegyzes_'.$nyelv]);
    } else {
        $title = $egy_termek[0]['termek_nev']." ".$egy_termek[0]['termek_kat_nev'].$forditas['title_egyeb_termek'];
        $keywords = $egy_termek[0]['termek_nev']." ".$egy_termek[0]['termek_kat_nev'].', '.htmlspecialchars($egy_termek[0]['termek_megjegyzes_'.$nyelv]);
    }
    $description = htmlspecialchars($egy_termek[0]['termek_megjegyzes_'.$nyelv]);
    
    $res = $db->Execute("SELECT *, jell_nev_{$nyelv} AS jellnev FROM jellemzok ORDER BY jell");
    $jellemzok = $res->GetRows();
    
    $smarty->assign('jellemzok', $jellemzok);
    $smarty->assign('egy_termek', $egy_termek[0]);
    $smarty->assign('jell_javascript1', termek_javascript($egy_termek[0]['termek_id'],1) );
    $smarty->assign('jell_javascript2', termek_javascript($egy_termek[0]['termek_id'],2) );
    
    $res = $db->Execute("SELECT * FROM termekek WHERE termek_akcios_ar>0 and termek_kat_id<15 ORDER BY RAND() LIMIT 10");
    $smarty->assign('akcios_termekek', $res->GetRows() );
    
    
    // növeljük a számláló értékét
    $szamlalo = $egy_termek[0]['termek_latogato'];
    $data['termek_latogato'] = ++$szamlalo;
    sql_update('termekek',$data,"termek_id={$egy_termek[0]['termek_id']}");
?>