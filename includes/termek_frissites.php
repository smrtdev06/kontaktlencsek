<?php
    header('Content-Type: text/html; charset=UTF-8');
    error_reporting(0);
    ini_set('display_errors',0);
    include_once("sql_fuggvenyek_frissito.php");

    
    // beállítósok kiolvasása szemüvegek
    $result = $db->Execute("SELECT * FROM eles_szemuvegek.beallitas LIMIT 1");
    $beallitasok = $result->GetRows();
    
    $result = $db->Execute("SELECT futhat FROM beallitas LIMIT 1");
    $beallitasok_lencsek = $result->GetRows();
    
    $result = $db->Execute("SELECT * FROM optix_hu.beallitas LIMIT 1");
    $beallitasok_optix = $result->GetRows();
    
    $result = $db->Execute("SELECT * FROM o3trade_eu.beallitas LIMIT 1");
    $beallitasok_o3trade = $result->GetRows();

    //print nl2br("szemuvegek.hu: ".$beallitasok[0]['futhat']."\n");
    //print nl2br("lencsek.hu: ".$beallitasok_lencsek[0]['futhat']."\n");
    //print nl2br("optix.hu: ".$beallitasok_optix[0]['futhat']."\n");
    //print nl2br("o3trade_eu: ".$beallitasok_o3trade[0]['futhat']."\n");
    
    
    // log mentés, néha űrítjük a filet
    if( $beallitasok_optix[0]['futhat']) {
        $file_string = 'w'; // létrehozza a filet
    } else {
        $file_string = 'a'; // hozzáfűzi a filehoz
    }
    
    $fp = fopen("./termek_frissites.log", $file_string);
    fwrite($fp, "-----------------------------------\n");
    fwrite($fp, "Lefutottam: ".date("Y-m-d H:i:s")."\n");
    
    
    // végrehajtó függvények
    function vegrehajtas($parancs_tomb) {
        global $fp,$db;
        
        foreach( $parancs_tomb as $parancs) {
            
            // nem frissítünk hiba van
            $result = $db->Execute($parancs);
            fwrite($fp, $parancs.";\n"); // "SQL: ".
            print ($parancs."<br />\n");
            
            if( $db->ErrorMsg() ) {
                fwrite($fp, "DB Error: ".$db->ErrorMsg()."\n");
                print ( $db->ErrorMsg() ."<br />\n");
            }
        }
    }
    
    /*
    function vegrehajtas2($parancs_tomb) {
        global $fp,$db2;
        
        foreach( $parancs_tomb as $parancs) {
            
            $result = $db2->Execute($parancs);
            fwrite($fp, $parancs.";\n"); // "SQL: ".
            print ($parancs."<br />\n");
            
            if( $db2->ErrorMsg() ) {
                fwrite($fp, "DB Error: ".$db2->ErrorMsg()."\n");
                print ( $db2->ErrorMsg() ."<br />\n");
            }
        }
    }
    */
    
    function uzenet($domain) {
        global $fp;
        
        $uzenet = "* Frissítés {$domain} kész! *\n";
        $uzenet .= ".....................................\n";
        fwrite($fp, $uzenet);
        print nl2br($uzenet);
    }
    
    // kiír egy sort a fileba és a képernyőre is
    function sorkiir($uzenet) {
        global $fp;
        
        fwrite($fp, $uzenet);
        print nl2br($uzenet);
    }
    
    // szemüvegek.hu frissítése 
    sorkiir("SZEMUVEGEK.HU: ".$beallitasok[0]['futhat']."\n");
    if( $beallitasok[0]['futhat'] == 1 ) {
        $akt_db_name = 'eles_szemuvegek';
        
        // ha van benne sor, csak akkor fusson le
        $result = $db->Execute("SELECT id FROM {$akt_db_name}.products_temp LIMIT 1");
        if ( count( $result->GetRows() ) ) {
            unset($parancs_tomb);
            
            // Backup törlése
            $parancs_tomb[] = "DROP TABLE IF EXISTS {$akt_db_name}.products_backup";
            // Új backup létrehozása, products létrehozása
            $parancs_tomb[] = "RENAME TABLE {$akt_db_name}.products TO {$akt_db_name}.products_backup_".date("md_Hi").", {$akt_db_name}.products_temp TO {$akt_db_name}.products";
            // products_temp létrehozása
            $parancs_tomb[] = "CREATE TABLE {$akt_db_name}.products_temp LIKE {$akt_db_name}.products";
            $parancs_tomb[] = "TRUNCATE {$akt_db_name}.products_temp";
            
            $parancs_tomb[] = "RENAME TABLE {$akt_db_name}.product_sizes TO {$akt_db_name}.product_sizes_backup_".date("md_Hi").", {$akt_db_name}.product_sizes_temp TO {$akt_db_name}.product_sizes";
            $parancs_tomb[] = "CREATE TABLE {$akt_db_name}.product_sizes_temp LIKE {$akt_db_name}.product_sizes";
            $parancs_tomb[] = "TRUNCATE {$akt_db_name}.product_sizes_temp";
            $parancs_tomb[] = "RENAME TABLE {$akt_db_name}.sizes TO {$akt_db_name}.sizes_backup_".date("md_Hi").", {$akt_db_name}.sizes_temp TO {$akt_db_name}.sizes";
            $parancs_tomb[] = "CREATE TABLE {$akt_db_name}.sizes_temp LIKE {$akt_db_name}.sizes";
            $parancs_tomb[] = "TRUNCATE {$akt_db_name}.sizes_temp";
            // INDEX készítése
            $parancs_tomb[] = "CREATE INDEX prod_index ON products (id,name)";
            // script futás beállítása
            $parancs_tomb[] = "UPDATE {$akt_db_name}.beallitas SET futhat=0";
            
            vegrehajtas($parancs_tomb);
            //uzenet("szemuvegek.hu");
        }
    }
    // szemüvegek.hu frissítése vége
    
    // ochelarii.ro frissítése 
    sorkiir("OCHELARII.RO: ".$beallitasok[0]['futhat']."\n");
    if( $beallitasok[0]['futhat'] == 1 ) {
        $akt_db_name = 'ochelarii_shop';
        
        // ha van benne sor, csak akkor fusson le
        //$result = $db->Execute("SELECT * FROM {$akt_db_name}.products_temp LIMIT 1");
        $result = $db->Execute("SELECT id FROM ochelarii_shop.products_temp LIMIT 1");
        if ( count( $result->GetRows() ) ) {
            unset($parancs_tomb);
            
            // Backup törlése
            $parancs_tomb[] = "DROP TABLE IF EXISTS {$akt_db_name}.products_backup";
            // Új backup létrehozása, products létrehozása
            $parancs_tomb[] = "RENAME TABLE {$akt_db_name}.products TO {$akt_db_name}.products_backup_".date("md_Hi").", {$akt_db_name}.products_temp TO {$akt_db_name}.products";
            // products_temp létrehozása
            $parancs_tomb[] = "CREATE TABLE {$akt_db_name}.products_temp LIKE {$akt_db_name}.products";
            $parancs_tomb[] = "TRUNCATE {$akt_db_name}.products_temp";
            
            $parancs_tomb[] = "RENAME TABLE {$akt_db_name}.product_sizes TO {$akt_db_name}.product_sizes_backup, {$akt_db_name}.product_sizes_temp TO {$akt_db_name}.product_sizes";
            $parancs_tomb[] = "CREATE TABLE {$akt_db_name}.product_sizes_temp LIKE {$akt_db_name}.product_sizes";
            $parancs_tomb[] = "TRUNCATE {$akt_db_name}.product_sizes_temp";
            $parancs_tomb[] = "DROP TABLE IF EXISTS {$akt_db_name}.sizes";
            $parancs_tomb[] = "CREATE TABLE {$akt_db_name}.sizes LIKE eles_szemuvegek.sizes";
            // script futás beállítása
            //$parancs_tomb[] = "UPDATE {$akt_db_name}.beallitas SET futhat=0";
            
            vegrehajtas($parancs_tomb);
            uzenet("ochelarii.ro");
        }
    }
    // ochelarii.ro frissítése vége
    
    
    // lencsek.hu
    sorkiir("LENCSEK.HU: ".$beallitasok_lencsek[0]['futhat']."\n");
    if( $beallitasok_lencsek[0]['futhat'] == 1 ) {
        $akt_db_name = 'michael_db';
        
        // ha van benne sor, csak akkor fusson le
        $result = $db->Execute("SELECT * FROM {$akt_db_name}.termekek_temp LIMIT 1");
        if ( count( $result->GetRows() ) ) {
            unset($parancs_tomb);
            
            $parancs_tomb[0] = "DROP TABLE IF EXISTS {$akt_db_name}.termekek_backup";
            $parancs_tomb[1] = "RENAME TABLE {$akt_db_name}.termekek TO {$akt_db_name}.termekek_backup, {$akt_db_name}.termekek_temp TO {$akt_db_name}.termekek";
            $parancs_tomb[2] = "CREATE TABLE {$akt_db_name}.termekek_temp LIKE {$akt_db_name}.termekek";
            $parancs_tomb[3] = "TRUNCATE {$akt_db_name}.termekek_temp";
            $parancs_tomb[4] = "DROP TABLE IF EXISTS {$akt_db_name}.lencsejell_backup";
            $parancs_tomb[5] = "RENAME TABLE {$akt_db_name}.lencsejell TO {$akt_db_name}.lencsejell_backup, {$akt_db_name}.lencsejell_temp TO {$akt_db_name}.lencsejell";
            $parancs_tomb[6] = "CREATE TABLE {$akt_db_name}.lencsejell_temp LIKE {$akt_db_name}.lencsejell";
            $parancs_tomb[7] = "TRUNCATE {$akt_db_name}.lencsejell_temp";
            $parancs_tomb[8] = "UPDATE {$akt_db_name}.beallitas SET futhat=0";
            
            vegrehajtas($parancs_tomb);
            uzenet("lencsek.hu");
        }
    }
    // lencsek.hu vége
    
    
    // lencse.hu frissítése
    sorkiir("LENCSE.HU: ".$beallitasok_lencsek[0]['futhat']."\n");
    if( $beallitasok[0]['futhat'] == 1 ) {
        // $beallitasok_lencsek[0]['futhat'] == 1
        $akt_db_name = 'lencse_shop';
        
        // ha van benne sor, csak akkor fusson le
        $result = $db->Execute("SELECT * FROM {$akt_db_name}.termekek_temp LIMIT 1");
        if ( count( $result->GetRows() ) ) {
            unset($parancs_tomb);
            
            $parancs_tomb[] = "DROP TABLE IF EXISTS {$akt_db_name}.termekek_backup";
            $parancs_tomb[] = "RENAME TABLE {$akt_db_name}.termekek TO {$akt_db_name}.termekek_backup_".date("md_Hi").", {$akt_db_name}.termekek_temp TO {$akt_db_name}.termekek";
            $parancs_tomb[] = "CREATE TABLE {$akt_db_name}.termekek_temp LIKE {$akt_db_name}.termekek";
            $parancs_tomb[] = "TRUNCATE {$akt_db_name}.termekek_temp";
            $parancs_tomb[] = "TRUNCATE {$akt_db_name}.lencsejell";
            $parancs_tomb[] = "INSERT INTO {$akt_db_name}.lencsejell SELECT * FROM michael_db.lencsejell";
            
            // árak frissítése
            //$result = $db->Execute("UPDATE lencse_shop.termekek SET termek_akcios_ar = termek_akcios_ar_lencsehu, termek_ar = termek_ar_lencsehu");
            //fwrite($fp, "Ár frissítés: ".$db->ErrorMsg()."\n");
            // árakhoz nem nyúltunk : termek_ar_lencsehu, termek_akcios_ar_lencsehu
            
            vegrehajtas($parancs_tomb);
            uzenet("lencse.hu");
        }
    }
    // lencse.hu frissítése vége
    

    // optilens.hu frissítése
    $akt_db_name = 'optilens_hu';
    sorkiir(strtoupper($akt_db_name).": ".$beallitasok_lencsek[0]['futhat']."\n");
    if( $beallitasok[0]['futhat'] == 1 ) { // $beallitasok_lencsek[0]['futhat'] ==

        // ha van benne sor, csak akkor fusson le
        $result = $db->Execute("SELECT * FROM lencse_shop.termekek LIMIT 1");
        if ( count( $result->GetRows() ) ) {
            unset($parancs_tomb);
            
            // Backup törlése
            $parancs_tomb[] = "DROP TABLE IF EXISTS {$akt_db_name}.termekek_backup";
            // Új backup létrehozása
            $parancs_tomb[] = "RENAME TABLE {$akt_db_name}.termekek TO {$akt_db_name}.termekek_backup";
            // új termékek importálása lencse.hu -ból
            $parancs_tomb[] = "CREATE TABLE {$akt_db_name}.termekek LIKE lencse_shop.termekek";
            $parancs_tomb[] = "INSERT INTO {$akt_db_name}.termekek SELECT * FROM lencse_shop.termekek";
            // lencsejell frissítés
            $parancs_tomb[] = "TRUNCATE {$akt_db_name}.lencsejell";
            $parancs_tomb[] = "INSERT INTO {$akt_db_name}.lencsejell SELECT * FROM lencse_shop.lencsejell";
            
            vegrehajtas($parancs_tomb);
            uzenet($akt_db_name);
        }
    }
    // optilens.hu frissítése
    
    
    // kontaktlencsek.hu frissítése
    $akt_db_name = 'kontaktlencsek_hu';
    sorkiir(strtoupper($akt_db_name).": ".$beallitasok_lencsek[0]['futhat']."\n");
    if( $beallitasok[0]['futhat'] == 1 ) { // $beallitasok_lencsek[0]['futhat'] ==
        // ha van benne sor, csak akkor fusson le
        $result = $db->Execute("SELECT * FROM lencse_shop.termekek LIMIT 1");
        if ( count( $result->GetRows() ) ) {
            //sorkiir(strtoupper($akt_db_name).": 1\n");
            
            unset($parancs_tomb);
            
            // Backup törlése
            $parancs_tomb[] = "DROP TABLE IF EXISTS {$akt_db_name}.termekek_backup";
            // Új backup létrehozása
            $parancs_tomb[] = "RENAME TABLE {$akt_db_name}.termekek TO {$akt_db_name}.termekek_backup";
            // új termékek importálása lencse.hu -ból
            $parancs_tomb[] = "CREATE TABLE {$akt_db_name}.termekek LIKE lencse_shop.termekek";
            $parancs_tomb[] = "INSERT INTO {$akt_db_name}.termekek SELECT * FROM lencse_shop.termekek";
            // lencsejell frissítés
            $parancs_tomb[] = "TRUNCATE {$akt_db_name}.lencsejell";
            $parancs_tomb[] = "INSERT INTO {$akt_db_name}.lencsejell SELECT * FROM lencse_shop.lencsejell";
            
            // INDEX készítése
            $parancs_tomb[] = "CREATE INDEX termek_index ON termekek (termek_id,termek_nev_hu)";
            
            vegrehajtas($parancs_tomb);
            uzenet($akt_db_name);
        }
    }
    // kontaktlencsek.hu vége
    
    
    // lens.ro frissítése
    sorkiir("LENS.RO: ".$beallitasok_lencsek[0]['futhat']."\n");    
    if( $beallitasok_lencsek[0]['futhat'] == 1 ) {
        $akt_db_name = 'lens_ro_db';
        
        // ha van benne sor, csak akkor fusson le
        $result = $db->Execute("SELECT * FROM {$akt_db_name}.termekek_temp LIMIT 1");
        if ( count( $result->GetRows() ) ) {
            unset($parancs_tomb);
        
            $parancs_tomb[] = "DROP TABLE IF EXISTS lens_ro_db.termekek_backup";
            $parancs_tomb[] = "RENAME TABLE {$akt_db_name}.termekek TO {$akt_db_name}.termekek_backup, {$akt_db_name}.termekek_temp TO {$akt_db_name}.termekek";
            $parancs_tomb[] = "CREATE TABLE {$akt_db_name}.termekek_temp LIKE {$akt_db_name}.termekek";
            $parancs_tomb[] = "TRUNCATE {$akt_db_name}.termekek_temp";
            $parancs_tomb[] = "TRUNCATE {$akt_db_name}.lencsejell";
            $parancs_tomb[] = "INSERT INTO {$akt_db_name}.lencsejell SELECT * FROM michael_db.lencsejell";
            
            // INDEX készítése
            $parancs_tomb[] = "CREATE INDEX termek_index ON termekek (termek_id,termek_nev_ro)";
            //"DROP TABLE lens_ro_db.lencsejell_backup"
            //"RENAME TABLE lens_ro_db.lencsejell TO lens_ro_db.lencsejell_backup, lens_ro_db.lencsejell_temp TO lens_ro_db.lencsejell"
            //"CREATE TABLE lens_ro_db.lencsejell_temp LIKE lens_ro_db.lencsejell"
            
            vegrehajtas($parancs_tomb);
            uzenet("lens.ro");
        }
    }
    // lens.ro frissítése vége
    
    
    // bestlens.ro frissítése
    sorkiir("BESTLENS.RO: ".$beallitasok_lencsek[0]['futhat']."\n");
    if( $beallitasok_lencsek[0]['futhat'] == 1 ) {
        $akt_db_name = "bestlens_ro";
        // ha van benne sor, csak akkor fusson le
        $result = $db->Execute("SELECT * FROM {$akt_db_name}.termekek_temp LIMIT 1");
        if ( count( $result->GetRows() ) ) {
            unset($parancs_tomb);
            
            $parancs_tomb[] = "DROP TABLE IF EXISTS {$akt_db_name}.termekek_temp"; // csak most kell
            $parancs_tomb[] = "CREATE TABLE {$akt_db_name}.termekek_temp LIKE {$akt_db_name}.termekek";
            $parancs_tomb[] = "INSERT INTO {$akt_db_name}.termekek_temp SELECT * FROM {$akt_db_name}.termekek";
            $parancs_tomb[] = "TRUNCATE {$akt_db_name}.lencsejell";
            $parancs_tomb[] = "INSERT INTO {$akt_db_name}.lencsejell SELECT * FROM {$akt_db_name}.lencsejell";
            $parancs_tomb[] = "DROP TABLE {$akt_db_name}.termekek_backup";
            $parancs_tomb[] = "RENAME TABLE {$akt_db_name}.termekek TO {$akt_db_name}.termekek_backup, {$akt_db_name}.termekek_temp TO {$akt_db_name}.termekek";
            //$result = $db->Execute("RENAME TABLE lens_ro_db.lencsejell TO lens_ro_db.lencsejell_backup, lens_ro_db.lencsejell_temp TO lens_ro_db.lencsejell");
            //$result = $db->Execute("CREATE TABLE lens_ro_db.lencsejell_temp LIKE lens_ro_db.lencsejell");
            // árakhoz nem nyúltunk : termek_ar_lencsehu, termek_akcios_ar_lencsehu
            
            vegrehajtas($parancs_tomb);
            uzenet("bestlens.ro");
        }
    }
    // bestlens.ro vége
    
    
    //fwrite($fp, "Futhat bestlens.ch: ".$beallitasok_lencsek[0]['futhat']."\n");
    //if( $beallitasok_lencsek[0]['futhat'] == 1 ) {
        // bestlens.ch frissítése
        //$result = $db->Execute("DROP TABLE bestlens_ch.termekek_temp"); // csak most kell
        //$result = $db->Execute("CREATE TABLE bestlens_ch.termekek_temp LIKE bestlens_ch.termekek");
        //$result = $db->Execute("INSERT INTO bestlens_ch.termekek_temp SELECT * FROM michael_db.termekek");
        //$result = $db->Execute("TRUNCATE bestlens_ch.lencsejell");
        //$result = $db->Execute("INSERT INTO bestlens_ch.lencsejell SELECT * FROM michael_db.lencsejell");
        //$result = $db->Execute("DROP TABLE lencse_shop.termekek_backup");
        //$result = $db->Execute("RENAME TABLE lencse_shop.termekek TO lencse_shop.termekek_backup, lencse_shop.termekek_temp TO lencse_shop.termekek");
        //$result = $db->Execute("RENAME TABLE lens_ro_db.lencsejell TO lens_ro_db.lencsejell_backup, lens_ro_db.lencsejell_temp TO lens_ro_db.lencsejell");
        //$result = $db->Execute("CREATE TABLE lens_ro_db.lencsejell_temp LIKE lens_ro_db.lencsejell");
        //fwrite($fp, "Frissítés bestlens.ch kész!\n");
        //print "Frissítés bestlens.ch kész!<br>\n";
    //}
    
    
    // szepulj.termekek
    sorkiir("SZEPULJ.HU: ".$beallitasok_lencsek[0]['futhat']."\n");
    if( $beallitasok2[0]['futhat'] == 1 ) {
        
        $akt_db_name = "szepulj";
        // ha van benne sor, csak akkor fusson le
        $result = $db->Execute("SELECT * FROM {$akt_db_name}.termekek_temp LIMIT 1");
        if ( count( $result->GetRows() ) ) {
            unset($parancs_tomb);
            
            $parancs_tomb[] = "DROP TABLE IF EXISTS {$akt_db_name}.termekek_backup";
            $parancs_tomb[] = "DROP TABLE IF EXISTS {$akt_db_name}.kategoria_hozzarendeles_backup";
            $parancs_tomb[] = "DROP TABLE IF EXISTS {$akt_db_name}.termek_kategoriak_backup";
            //$parancs_tomb[] = "DROP TABLE IF EXISTS szepulj.termek_kategoriak_temp";
            $parancs_tomb[] = "RENAME TABLE {$akt_db_name}.termekek TO {$akt_db_name}.termekek_backup_".date("md_Hi").", {$akt_db_name}.termekek_temp TO {$akt_db_name}.termekek";
            $parancs_tomb[] = "RENAME TABLE {$akt_db_name}.kategoria_hozzarendeles TO {$akt_db_name}.kategoria_hozzarendeles_backup, {$akt_db_name}.kategoria_hozzarendeles_temp TO {$akt_db_name}.kategoria_hozzarendeles";
            // CREATE INDEX termek ON hirlevel (tag_nev,tag_email) USING BTREE;
            //$result = $db->Execute("CREATE INDEX termek_es_kat ON szepulj.kategoria_hozzarendeles (termek_id,kategoria_id)");
            //fwrite($fp, "5. DB Error: ".$db->ErrorMsg()."\n");
            $parancs_tomb[] = "CREATE TABLE {$akt_db_name}.termekek_temp LIKE {$akt_db_name}.termekek";
            $parancs_tomb[] = "CREATE TABLE {$akt_db_name}.kategoria_hozzarendeles_temp LIKE {$akt_db_name}.kategoria_hozzarendeles";
            $parancs_tomb[] = "TRUNCATE {$akt_db_name}.termekek_temp";
            $parancs_tomb[] = "TRUNCATE {$akt_db_name}.kategoria_hozzarendeles_temp";
            $parancs_tomb[] = "RENAME TABLE {$akt_db_name}.termek_kategoriak TO {$akt_db_name}.termek_kategoriak_backup, {$akt_db_name}.termek_kategoriak_temp TO {$akt_db_name}.termek_kategoriak";
            $parancs_tomb[] = "CREATE TABLE {$akt_db_name}.termek_kategoriak_temp LIKE {$akt_db_name}.termek_kategoriak";
            //$result = $db->Execute("DELETE FROM szepulj.termekek WHERE termek_szallitas_hu like '1-6%'");
            //$result = $db->Execute("UPDATE beallitas SET futhat=0");
            
            vegrehajtas($parancs_tomb);
            uzenet("szepulj.hu");
        }
    }
    // szepulj.hu vége
    
    
    // optix.eu frissítése
    sorkiir("OPTIX.EU: ".$beallitasok_lencsek[0]['futhat']."\n");    
    if( $beallitasok_optix[0]['futhat'] == 1 ) {
        $akt_db_name = 'new_optix';
        
        // ha van benne sor, csak akkor fusson le
        $result = $db->Execute("SELECT * FROM {$akt_db_name}.termekek_temp LIMIT 1");
        if ( count( $result->GetRows() ) ) {
            unset($parancs_tomb);
                
            $parancs_tomb[] = "DROP TABLE IF EXISTS {$akt_db_name}.termekek_backup";
            $parancs_tomb[] = "RENAME TABLE {$akt_db_name}.termekek TO {$akt_db_name}.termekek_backup, {$akt_db_name}.termekek_temp TO {$akt_db_name}.termekek";
            $parancs_tomb[] = "CREATE TABLE {$akt_db_name}.termekek_temp LIKE {$akt_db_name}.termekek";
            $parancs_tomb[] = "TRUNCATE {$akt_db_name}.termekek_temp";

            vegrehajtas($parancs_tomb);
            uzenet("optix.eu");
        }
    }
    // optix.eu frissítése vége
    
    
    // optix.hu frissítése
    sorkiir("OPTIX.HU: ".$beallitasok_optix[0]['futhat']."\n");
    if( $beallitasok_optix[0]['futhat'] == 1 ) {
        $akt_db_name = 'optix_hu';
        
        // ha van benne sor, csak akkor fusson le
        $result = $db->Execute("SELECT * FROM {$akt_db_name}.termekek_temp LIMIT 1");
        if ( count( $result->GetRows() ) ) {
            unset($parancs_tomb);
            
            //$parancs_tomb[0] = "DROP TABLE IF EXISTS optix_hu.termekek_backup2";
            //$parancs_tomb[1] = "RENAME TABLE optix_hu.termekek_backup TO optix_hu.termekek_backup2";
            $parancs_tomb[] = "RENAME TABLE {$akt_db_name}.termekek TO {$akt_db_name}.termekek_backup_".date("md_Hi").", {$akt_db_name}.termekek_temp TO {$akt_db_name}.termekek";
            $parancs_tomb[] = "CREATE TABLE {$akt_db_name}.termekek_temp LIKE {$akt_db_name}.termekek";
            $parancs_tomb[] = "TRUNCATE {$akt_db_name}.termekek_temp";
            $parancs_tomb[] = "RENAME TABLE {$akt_db_name}.felhasznalok TO {$akt_db_name}.felhasznalok_backup_".date("md_Hi").", {$akt_db_name}.felhasznalok_temp TO {$akt_db_name}.felhasznalok";
            $parancs_tomb[] = "CREATE TABLE {$akt_db_name}.felhasznalok_temp LIKE {$akt_db_name}.felhasznalok";
            $parancs_tomb[] = "TRUNCATE {$akt_db_name}.felhasznalok_temp";
            $parancs_tomb[] = "UPDATE {$akt_db_name}.beallitas SET futhat=0";
            
            vegrehajtas($parancs_tomb);
            uzenet("optix.hu");
        }
    }
    // optix.hu vége
    
    
    // o3trade.eu frissítése
    sorkiir("O3TRADE.EU: ".$beallitasok_o3trade[0]['futhat']."\n");
    if( $beallitasok_o3trade[0]['futhat'] == 1 ) {
        $akt_db_name = 'o3trade_eu';
        
        // ha van benne sor, csak akkor fusson le
        $result = $db->Execute("SELECT * FROM {$akt_db_name}.termekek_temp LIMIT 1");
        if ( count( $result->GetRows() ) ) {
            unset($parancs_tomb);
            
            //$parancs_tomb[0] = "DROP TABLE IF EXISTS optix_hu.termekek_backup2";
            //$parancs_tomb[1] = "RENAME TABLE optix_hu.termekek_backup TO optix_hu.termekek_backup2";
            $parancs_tomb[] = "RENAME TABLE {$akt_db_name}.termekek TO {$akt_db_name}.termekek_backup_".date("md_Hi").", {$akt_db_name}.termekek_temp TO {$akt_db_name}.termekek";
            $parancs_tomb[] = "CREATE TABLE {$akt_db_name}.termekek_temp LIKE {$akt_db_name}.termekek";
            $parancs_tomb[] = "TRUNCATE {$akt_db_name}.termekek_temp";
            $parancs_tomb[] = "RENAME TABLE {$akt_db_name}.felhasznalok TO {$akt_db_name}.felhasznalok_backup_".date("md_Hi").", {$akt_db_name}.felhasznalok_temp TO {$akt_db_name}.felhasznalok";
            $parancs_tomb[] = "CREATE TABLE {$akt_db_name}.felhasznalok_temp LIKE {$akt_db_name}.felhasznalok";
            $parancs_tomb[] = "UPDATE {$akt_db_name}.beallitas SET futhat=0";
            
            vegrehajtas($parancs_tomb);
            uzenet("o3trade.eu");
        }
    }
    // o3trade.eu vége
    
    
    // lezárjuk a fájlt
    fclose($fp);
?>