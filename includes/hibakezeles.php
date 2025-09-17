<?php

// visszaadja egy tömb tartalmát
function tomb_ki($tomb, $tip=0) {
	
	if( count($tomb) > 0) {
	$vissza = "<table align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"3\">\n";
	$vissza.= "<tr bgcolor=\"grey\"><td>v. név</td><td>érték</td></tr>";
	
	foreach ($tomb as $kulcs => $ertek) {
		
		if( $tip=='f') {
			$ertek = utf8_decode($ertek);
		}
	    
	    if( is_object($tomb[$kulcs]) ) {
	    	$vissza .= "<tr align=\"left\"><td>$kulcs</td><td>{$tomb[$kulcs]->azon}</td></tr>\n";
	    }
	    
	    if( is_array($tomb[$kulcs]) ) {
	    	$ertek = tomb_ki($tomb[$kulcs],$tip);
	    }
	    
	    $vissza .= "<tr align=\"left\"><td valign=\"top\">$kulcs</td><td>$ertek</td></tr>\n";
	}
	
	$vissza .= "</table>\n";
	return $vissza;
	
	}
}

function hiba_fileba($filename, $adat) {
      $somecontent = "Hibaelhárító fájl: ".date("Y-m-d H:i:s")."\n\n";
      $vissza = "";
      
      if( is_array($adat) ) {
      
      foreach ($adat as $kulcs => $ertek) {
         $somecontent.= $kulcs." = ".$ertek."\n\n";
      }
      
      } else { // ha tömb vége
      	$somecontent.= $adat;
      }
          // In our example we're opening $filename in append mode.
          // The file pointer is at the bottom of the file hence
          // that's where $somecontent will go when we fwrite() it.
          if (!$handle = fopen($filename, 'w')) {
              $vissza = "Cannot open file ($filename)";
              exit;
          }

          // Write $somecontent to our opened file.
          if (fwrite($handle, $somecontent) === FALSE) {
              $vissza = "Cannot write to file ($filename)";
              exit;
          }

          //echo "Success, wrote ($somecontent) to file ($filename)";
          fclose($handle);
      //return $vissza;
}

?>