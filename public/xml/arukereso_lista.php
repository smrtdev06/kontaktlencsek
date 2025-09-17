<?php
    ini_set('display_errors',1);
    
    include_once("../includes/sql_fuggvenyek.php");
    
    $sitenev = "http://kontaktlencsek.hu/";
    
    // kategóriák hozzárendelése sablonhoz
    $result = $db->Execute("SELECT termek_kategoriak.arukereso_kat, termek_id, termek_nev_hu,
    CONCAT('Gyártó:',gyarto_nev,' ','IngyenesIngyenes átvétel több mint 600 ponton 10000 felett. Egészségpénztáraknál elszámolható.',termek_megjegyzes_hu) as termek_megjegyzes_hu,
    IF( termek_akcios_ar>0 ,  termek_akcios_ar, termek_ar ) as termek_ar,
    IF( termek_csoport > 2 , CONCAT('http://kepek.kontaktlencsek.hu/glasses/', termek_kep), CONCAT('http://kontaktlencsek.hu/lencsek/', termek_kep) ) as image,
    termek_alnev_hu , kat_nev_hu, gyarto_nev, termek_kiszereles_hu,
    IF(SUBSTR(termek_szallitas_hu,1,3) IN ('1-3','1-2','1-5'),1,3) AS szallitas
    
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
    
    $products = $dom->createElement('products');
    $dom->appendChild($products);
    
    //--------------------------------------------------------------------
    foreach( $adatok as $elem ) {
        $product = $dom->createElement('product');
        $products->appendChild($product);

        // identifier    
        $product->appendChild( $dom->createElement('identifier', $elem['termek_id']) );
      
        // manufacturer
        $gyarto = $dom->createElement('manufacturer');
        $gyarto->appendChild( $dom->createCDATASection($elem['gyarto_nev']));
        $product->appendChild($gyarto);
      
        // name     // createCDATASection
        $name = $dom->createElement('name');
        $name->appendChild( $dom->createCDATASection( $elem['termek_nev_hu']) );
        $product->appendChild($name);
        
        // category
        $category = $dom->createElement('category');
        $category->appendChild( $dom->createCDATASection($elem['arukereso_kat'])); // kat_nev_hu
        $product->appendChild($category);
        
        // product_url
        $urlsite = $dom->createElement('product_url');
        $urlsite->appendChild( $dom->createCDATASection($sitenev.$elem['termek_alnev_hu']) );
        $product->appendChild($urlsite);
        
        // price
        $price = $dom->createElement('price', round($elem['termek_ar']) );
        $product->appendChild($price);
        
        // net_price
        $net_price = $dom->createElement('net_price', round($elem['termek_ar']/1.27) );
        $product->appendChild($net_price);
        
        // warranty
        
        // delivery_time
        $szallitas = $dom->createElement('delivery_time');
        $szallitas->appendChild( $dom->createCDATASection($elem['szallitas']));
        $product->appendChild($szallitas);
        
        // image_url
        $urlpicture = $dom->createElement('image_url');
        $urlpicture->appendChild( $dom->createCDATASection($elem['image']) );
        $product->appendChild($urlpicture);
        
        // image_url_2
        // image_url_3
        
        // description
        $desc = $dom->createElement('description');
        $desc->appendChild( $dom->createCDATASection( $elem['termek_megjegyzes_hu']) );
        $product->appendChild($desc);
        
        // delivery_cost
        
        // ean_code

       
        
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