<?php

    // Árfolyam lekérdezés
    $xmlstr=file_get_contents("http://www.bnro.ro/nbrfxrates.xml");

    $xml = new SimpleXMLElement($xmlstr);

    foreach ($xml->Body[0]->Cube[0]->Rate as $rate) {
        switch((string) $rate['currency']) {
        case ('EUR'):
             $eur=number_format( (float)$rate[0] ,4,".","");
        break;
        
        case ('HUF'):
             $huf=number_format( (float)$rate[0] ,4,".","");
        break;
        }
    }
    
    
    //if( $eur < 4 ) {
    //    $rate = "4.2";
    //    $eur = number_format($rate,4,".","");
    //}

    print "Euro: ".$eur."<br />";
    print "Huf: ".$huf."<br />";
    
    
    
?>