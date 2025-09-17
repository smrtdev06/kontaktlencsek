<?php
    header('Content-Type: text/html; charset=UTF-8');
    ini_set('display_errors',1);
    
    // 10 percenként szerver ellenörző script
    // A Server 7.2 PHP-t használ, a webszerver 5.6-ot
    
    // PDO database használat
    $db = new PDO('mysql:host=localhost;dbname=eles_szemuvegek;','frissito','Pr!:7=C+2');
    //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    
    // VPS adatábizis
    $db2 = new PDO('mysql:host=vps.irodaiszerver.hu;dbname=michael_db;','frissito','Pr!:7=C+2');
    $db2->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // vagy
    //$stmt = $db->prepare($sql);
    //$stmt->execute();
    // $stmt->setFetchMode(PDO::FETCH_ASSOC);
    
    
    // sablonkezelés, levélküldéshez
    //include_once('smarty/libs/Smarty.class.php');
    //$smarty = new Smarty();
    //$smarty->template_dir = '../sablonkod';
    //$smarty->compile_dir  = 'smarty/templates_c';
    //$smarty->cache_dir    = 'smarty/cache';
    //$smarty->config_dir   = 'smarty/configs';
    
    
    // szemüvegek.hu adatbázis
    $stmt = $db->query("SELECT M.rend_id FROM eles_szemuvegek.megrendelesek AS M ORDER BY M.rend_id DESC LIMIT 1");
    $szrec = $stmt->fetch();
    
    $sql_db = "SELECT
Count(megrendelesek.rend_id) AS rend_db
FROM
megrendelesek
WHERE
megrendelesek.rend_datum >= CURDATE()
GROUP BY
DATE_FORMAT(megrendelesek.rend_datum,\"%Y-m-d\")";
    $stmt = $db->query($sql_db);
    $szdb = $stmt->fetch();
    // szemüvegek.hu
    
    
    // lencse.hu
    $stmt = $db->query("SELECT M.rend_id FROM lencse_shop.megrendelesek AS M ORDER BY M.rend_id DESC LIMIT 1");
    $lerec = $stmt->fetch();
    
    $stmt = $db->query("SELECT
Count(megrendelesek.rend_id) AS rend_db
FROM
lencse_shop.megrendelesek
WHERE
megrendelesek.rend_datum >= CURDATE()
GROUP BY
DATE_FORMAT(megrendelesek.rend_datum,\"%Y-m-d\")");
    $ledb = $stmt->fetch();
    // lencse.hu vége
    
    
    // optilens.hu
    $stmt = $db->query("SELECT M.rend_id FROM optilens_hu.megrendelesek AS M ORDER BY M.rend_id DESC LIMIT 1");
    $oprec = $stmt->fetch();
    
    $stmt = $db->query("SELECT
Count(megrendelesek.rend_id) AS rend_db
FROM
optilens_hu.megrendelesek
WHERE
megrendelesek.rend_datum >= CURDATE()
GROUP BY
DATE_FORMAT(megrendelesek.rend_datum,\"%Y-m-d\")");
    $opdb = $stmt->fetch();
    // optilens.hu vége
    
    
    // kontaktlencsek.hu
    $stmt = $db->query("SELECT M.rend_id FROM kontaktlencsek_hu.megrendelesek AS M ORDER BY M.rend_id DESC LIMIT 1");
    $krec = $stmt->fetch();
    
    $stmt = $db->query("SELECT
Count(megrendelesek.rend_id) AS rend_db
FROM
kontaktlencsek_hu.megrendelesek
WHERE
megrendelesek.rend_datum >= CURDATE()
GROUP BY
DATE_FORMAT(megrendelesek.rend_datum,\"%Y-m-d\")");
    $kdb = $stmt->fetch();
    // kontaktlencsek.hu vége
    
    
    // szepulj.hu
    $stmt = $db->query("SELECT M.rend_id FROM szepulj.megrendelesek AS M ORDER BY M.rend_id DESC LIMIT 1");
    $szerec = $stmt->fetch();
    
    $stmt = $db->query("SELECT
Count(megrendelesek.rend_id) AS rend_db
FROM
szepulj.megrendelesek
WHERE
megrendelesek.rend_datum >= CURDATE()
GROUP BY
DATE_FORMAT(megrendelesek.rend_datum,\"%Y-m-d\")");
    $szedb = $stmt->fetch();
    // szepulj.hu vége
    
    
    // lencsek.hu adatbázis
    $stmt = $db2->query("SELECT M.rend_id FROM megrendelesek AS M ORDER BY M.rend_id DESC LIMIT 1");
    $lrec = $stmt->fetch();
    
    $stmt = $db2->query("SELECT
Count(megrendelesek.rend_id) AS rend_db
FROM
megrendelesek
WHERE
megrendelesek.rend_datum >= CURDATE()
GROUP BY
DATE_FORMAT(megrendelesek.rend_datum,\"%Y-m-d\")");
    $ldb = $stmt->fetch();
    //var_dump($lrec);





    // Üzenet megírása
    $uzenet  = "O3 Webserver üzenet \n\n";
    $uzenet .= "Szemüvegek.hu : {$szrec['rend_id']}, Rendelés db: {$szdb['rend_db']}\n";
    $uzenet .= "Lencsek.hu : {$lrec['rend_id']}, Rendelés db: {$ldb['rend_db']}\n";
    $uzenet .= "Lencse.hu : {$lerec['rend_id']}, Rendelés db: {$ledb['rend_db']}\n";
    $uzenet .= "Optilens.hu : {$oprec['rend_id']}, Rendelés db: {$opdb['rend_db']}\n";
    $uzenet .= "Kontaktlencsek.hu : {$krec['rend_id']}, Rendelés db: {$kdb['rend_db']}\n";
    $uzenet .= "Szepulj.hu : {$szerec['rend_id']}, Rendelés db: {$szedb['rend_db']}";
    //$uzenet .= "\n";
    //$uzenet .= "Lens.ro : {$szerec['rend_id']}, Rendelés db: {$szedb['rend_db']}";
    //$uzenet .= "Bestlens.ro : {$szerec['rend_id']}, Rendelés db: {$szedb['rend_db']}";
    //$uzenet .= "Ochelarii.ro : {$szerec['rend_id']}, Rendelés db: {$szedb['rend_db']}";
    //$uzenet .= "\n";
    //$uzenet .= "Optix.hu : {$szerec['rend_id']}, Rendelés db: {$szedb['rend_db']}";
    //$uzenet .= "Optix.eu : {$szerec['rend_id']}, Rendelés db: {$szedb['rend_db']}";
    //$uzenet .= "O3trade.eu : {$szerec['rend_id']}, Rendelés db: {$szedb['rend_db']}";
    
    $uzenet = nl2br($uzenet);
    print $uzenet;
    
    $headers = "MIME-Version:1.0\r\n".
        "Content-Type: text/html; charset=UTF-8\r\n".
        "From:webserver@mail2.irodaiszerver.hu\r\n";
    
    mail("sattila@irodaiszerver.hu","O3Server működik",$uzenet,$headers);
?>