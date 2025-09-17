<?php
    ini_set('display_errors',1);
    
    include_once("../includes/sql_fuggvenyek.php");

    
    
    if( !isset($_GET['kat_id']) ) {
        $kat_id = 3;
    } else {
        $kat_id = $_GET['kat_id'];
    }
    
    
    // kategóriák hozzárendelése sablonhoz
    $result = $db->Execute("
    SELECT termek_id, termek_nev_hu, 'Ingyenes átvétel Bp-en. Kedvezményes átvétel az ország több mint 250 pontján. Egészségpénztáraknál elszámolható.' as termek_megjegyzes_hu, IF( termek_akcios_ar>0 ,  termek_akcios_ar, termek_ar ) as termek_ar, termek_kep, termek_alnev_hu , kat_nev_hu, gyarto_nev, termek_kiszereles_hu, termek_szallitas_hu
    
    FROM termekek
        INNER JOIN termek_kategoriak ON termekek.termek_kat_id = termek_kategoriak.kat_id
        LEFT  JOIN termek_gyartok ON termekek.termek_gyarto_id = termek_gyartok.gyarto_id
    WHERE termekek.termek_kat_id=".qstr($kat_id)."
        ORDER BY termek_nev_hu
    ");
    
    
    
    $adatok = $result->GetRows(); 
    
    
    //print_r($adatok);
    
    $dom = new DOMDocument('1.0', 'utf-8');
    $dom->formatOutput = true;
    //$dom ->load("olcsobbat.xml");
    
    $catalog = $dom->createElement('Catalog');
    $catalog->setAttribute('date',date("d-m-Y H:i:s"));
    $dom->appendChild($catalog);
    
    
    //--------------------------------------------------------------------
    foreach( $adatok as $elem ) {
        $product = $dom->createElement('product');
        $catalog->appendChild($product);
    
        $id = $dom->createElement('id', $elem['termek_id']);
        $product->appendChild($id);
      
        $name = $dom->createElement('nev');
        $name->appendChild( $dom->createCDATASection( $elem['termek_nev_hu']) );
        $product->appendChild($name);
        
        $desc = $dom->createElement('leiras');
        $desc->appendChild( $dom->createCDATASection( $elem['termek_megjegyzes_hu']) );
        $product->appendChild($desc);
        
        $price = $dom->createElement('ar', round($elem['termek_ar']) );
        $product->appendChild($price);
        
        $status = $dom->createElement('status');
        $status->appendChild( $dom->createCDATASection("Raktáron") );
        $product->appendChild($status);
        //--------------------------------------------
        $category = $dom->createElement('kategoria');
        $category->appendChild( $dom->createCDATASection($elem['kat_nev_hu']));
        $product->appendChild($category);
        
        $gyarto = $dom->createElement('gyarto');
        $gyarto->appendChild( $dom->createCDATASection($elem['gyarto_nev']));
        $product->appendChild($gyarto);
        
        $kiszereles = $dom->createElement('kiszereles');
        $kiszereles->appendChild( $dom->createCDATASection($elem['termek_kiszereles_hu']));
        $product->appendChild($kiszereles);
        
        $szallitas = $dom->createElement('szallitas');
        $szallitas->appendChild( $dom->createCDATASection($elem['termek_szallitas_hu']));
        $product->appendChild($szallitas);
        
        $urlsite = $dom->createElement('termekurl');
        $urlsite->appendChild( $dom->createCDATASection("http://lencsek.hu/".$elem['termek_alnev_hu']) );
        $product->appendChild($urlsite);
        
        $urlpicture = $dom->createElement('kepurl');
        $urlpicture->appendChild( $dom->createCDATASection("http://lencsek.hu/kepek/termek_kepek/".$elem['termek_kep']) );
        $product->appendChild($urlpicture);
    }
    
    //--------------------------------------------------------------------
    
    //$id = $dom->createTextNode("");
    //$product->appendChild($id);
    
    
    $out = $dom->saveXML();
    
    print $out;

?>