<?php
    ini_set('display_errors',1);
    
    include_once("../includes/sql_fuggvenyek.php");
    
    $sitenev = "http://kontaktlencsek.hu/";
    
    // kategóriák hozzárendelése sablonhoz
    $result = $db->Execute("SELECT termek_kategoriak.arukereso_kat, termek_id, termek_nev_hu,
    CONCAT('Gyártó:',gyarto_nev,' ','Ingyenes átvétel több mint 600 ponton 10000 felett. Egészségpénztáraknál elszámolható.',termek_megjegyzes_hu) as termek_megjegyzes_hu,
    IF( termek_akcios_ar>0 ,  termek_akcios_ar, termek_ar ) as termek_ar,
    IF( termek_csoport > 2 , CONCAT('http://kepek.kontaktlencsek.hu/glasses/', termek_kep), CONCAT('http://kepek.kontaktlencsek.hu/lencsek/', termek_kep) ) as image,
    termek_alnev_hu , kat_nev_hu, gyarto_nev, termek_kiszereles_hu,
    IF(SUBSTR(termek_szallitas_hu,1,3) IN ('1-3','1-2','1-5'),'AZONNAL','3 munkanap') AS szallitas,
    IF(termek_ar > 15000 , 0, 790 ) as szallitas_ar
    
    FROM termekek
    INNER JOIN termek_kategoriak ON termekek.termek_kat_id = termek_kategoriak.kat_id
    LEFT  JOIN termek_gyartok ON termekek.termek_gyarto_id = termek_gyartok.gyarto_id
    WHERE termek_csoport < 3
    ORDER BY termek_nev_hu
    ");
    
    $adatok = $result->GetRows(); 
    //print_r($adatok);
    
    $dom = new DOMDocument('1.0', 'utf-8');
    $dom->formatOutput = true;
    //$dom ->load("olcsobbat.xml");
    
    //$catalog = $dom->createElement('Catalog');
    //$catalog->setAttribute('date',date("d-m-Y H:i:s"));
    //$dom->appendChild($catalog);
    
    $products = $dom->createElement('termeklista');
    $dom->appendChild($products);
    
    //--------------------------------------------------------------------
    foreach( $adatok as $elem ) {
        $product = $dom->createElement('termek');
        $products->appendChild($product);

        // identifier    
        $product->appendChild( $dom->createElement('cikkszam', $elem['termek_id']) );
      
        // manufacturer
        //$gyarto = $dom->createElement('manufacturer');
        //$gyarto->appendChild( $dom->createCDATASection($elem['gyarto_nev']));
        //$product->appendChild($gyarto);
      
        // name     // createCDATASection
        $name = $dom->createElement('nev');
        $name->appendChild( $dom->createCDATASection( $elem['termek_nev_hu']) );
        $product->appendChild($name);
        
        // description
        $desc = $dom->createElement('leiras');
        $desc->appendChild( $dom->createCDATASection( $elem['termek_megjegyzes_hu']) );
        $product->appendChild($desc);
        
        // price
        $price = $dom->createElement('ar', round($elem['termek_ar']) );
        $product->appendChild($price);
        
        // category
        //ategory = $dom->createElement('category');
        //ategory->appendChild( $dom->createCDATASection($elem['arukereso_kat'])); // kat_nev_hu
        //roduct->appendChild($category);
                
        // image_url
        $urlpicture = $dom->createElement('fotolink');
        $urlpicture->appendChild( $dom->createCDATASection($elem['image']) );
        $product->appendChild($urlpicture);
        
        // product_url
        $urlsite = $dom->createElement('termeklink');
        $urlsite->appendChild( $dom->createCDATASection($sitenev.$elem['termek_alnev_hu']) );
        $product->appendChild($urlsite);
        
        // net_price
        //$net_price = $dom->createElement('net_price', round($elem['termek_ar']/1.27) );
        //$product->appendChild($net_price);
        
        // warranty
        
        // delivery_time
        $szallitas = $dom->createElement('ido');
        $szallitas->appendChild( $dom->createCDATASection($elem['szallitas']));
        $product->appendChild($szallitas);
        
        $szallitas_ar = $dom->createElement('szallitas');
        $szallitas_ar->appendChild( $dom->createCDATASection($elem['szallitas_ar']));
        $product->appendChild($szallitas_ar);
                
        //--------------------------------------------
        //$kiszereles = $dom->createElement('kiszereles');
        //$kiszereles->appendChild( $dom->createCDATASection($elem['termek_kiszereles_hu']));
        //$product->appendChild($kiszereles);


        
        
    }
    
    //--------------------------------------------------------------------
    
    //$id = $dom->createTextNode("");
    //$product->appendChild($id);
    
    
    $out = $dom->saveXML();
    
    print $out;

?>