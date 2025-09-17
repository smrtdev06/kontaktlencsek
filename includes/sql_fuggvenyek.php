<?php
    // Only load ADOdb if it's not already loaded (e.g., by Composer autoloader)
    if( !function_exists('ADONewConnection') ) {
        if( $_SERVER['SERVER_NAME'] == 'kontaktlencsek.hu' || $_SERVER['SERVER_NAME'] == 'test.kontaktlencsek.hu' ) {
            require_once 'adodb_lite/adodb.inc.php';
        }
    }
      
    $db = ADONewConnection('mysqli');
    //$db->debug = true;
    //$result = $db->Connect("62.75.213.95", "lencseku_shop", "TitOk_42", "lencseku_shop");
    //$result = $db->Connect("localhost", "michael", "O32132_", "michael_db");
    $result = $db->Connect("localhost", "klencsek_hu", "K45_34!", "kontaktlencsek_hu");
    // be�ll�tjuk az utf8 adatlek�r�st
    $db->Execute("SET NAMES 'utf8'");


    // Második MySQL kapcsolat
    //$db2 = ADONewConnection('mysql');
    //$result2 = $db2->Connect("localhost", "new_freelancer", "O3@Bors10_", "freelancer_new_szem");
    //$db2->Execute("SET NAMES 'utf8'");


    
    // nem sz�ks�ges haszn�lni
	function MySQLDB() {
        global $db;
        /*
		$Host		= "localhost";
		$Database	= "lenscity_shop";
		$User		= "lenscity_shop";
		$Password	= "TitOk_42";

		// adodb
		$db = ADONewConnection("mysql");
		
		//$db->debug = true;
		$db->Connect($Host, $User, $Password, $Database);
        // be�ll�tjuk az utf8 adatlek�r�st
        $db->Execute("SET NAMES 'utf8'");
		*/
		return $db;
	}
	

    function sql_insert($tablanev, $mit) {
        global $hiba;
	$aDB = MysqlDB();
	$i=0;

	//$nextid = $aDB->Insert_ID();

	//$mezonevek = $mit['idmezo'];
	//$ertekek = $nextid;
	$mezonevek = '';
	$ertekek = '';

	foreach( $mit as $kulcs => $ertek ) {
	    if( !empty($ertek) ) {
	        
	        if( $kulcs != 'idmezo' ) {

	            if($i!=0) {
	            	$mezonevek.=",";
	            	$ertekek.=",";
	            }
	            $i = 1;
	            $mezonevek.= $kulcs;
	            
	            
	            // id mez� bet�tele ha sz�ks�ges
                //$ertek = str_replace("_idmezo",$nextid,$ertek);
	            $ertekek.= qstr($ertek);
				
	        }
	    
	    }
	}

    if( $i > 0 ) {
	    $aSQL = "INSERT INTO {$tablanev} ({$mezonevek}) VALUES ({$ertekek})";
	    $aDB->Execute( $aSQL );
	    
        //$hiba.= $aSQL;
        	    
	    //echo($aSQL."<br>");
	    
	    return $aDB->Insert_ID();
    } else {
        return 0;
    }
}

    function sql_update($tablanev,$mit,$hol) {
        global $hiba;
    $aDB = MysqlDB();
	$i=0;

	$mezok = '';
	foreach( $mit as $kulcs => $ertek ) {
	    if( strcmp($ertek,"")!=0 ) {
	        if( $kulcs != 'idmezo' ) {
	            if($i!=0) {
	                $mezok.=",";
	            }
	            $i = 1;
	            if( $ertek =='def_' || $ertek == ' ' ) {
	                $mezok.= $kulcs."=''";
	            } else {
	                $mezok.= $kulcs."=".qstr($ertek);
	            }
	        
	        }
	    }
	}

	if( $i > 0 ) {

	   $aSQL = "UPDATE {$tablanev} SET {$mezok} WHERE ".$hol;
       //print $aSQL;
	   $db = $aDB->Execute( $aSQL );
	   return $db;

    } else {
        return 0;
    }
}
   



    function sql_run($sql) {
	   $aDB = MySQLDB();

	   /*
	   if ($aDB->Execute($sql) === false) {
	   	print 'error inserting: '.$aDB->ErrorMsg().'<BR>';
	   }
	   */
	   
	   $aDB->Execute( $sql ); // !!!
    } 
    
    // ha allapot=1 akkor allapot='t' re �ll�t csak �s nem t�r�l v�glegesen
    function sql_delete($tablanev,$melyiket,$allapot=0) {
    if( $allapot==1) {
        $adat['allapot'] = 't';
        sql_update($tablanev,$adat,$melyiket);
    } else {
        sql_run("DELETE FROM ".$tablanev." WHERE ".$melyiket);
    }
}
    
   
// sqtr rövidebb változat
function qstr($str) {
    global $db;

    return $db->qstr($str);
}
   
    
    // ez j�l m�k�dik �sszekapcsol�skor is
    function lekerdezes( $sql ) {
		$db = MySQLDB();
		
    	$db = & $db->Execute( $sql ); // qstr
    	//if( $aDB->num_rows() > 0 ) {
    	//   $aDB->next_record();
    	//}

    	return $db;
	}

    // ez j�l m�k�dik �sszekapcsol�skor is
    function lekerdezes_tombbe($sql) {
    	$aDB = MySQLDB();
    	
    	$aDB = & $aDB->Execute( $sql );
    	if( is_object($aDB) && $aDB->RecordCount() > 0 ) {
    	   //$aDB->next_record();
    	   
    	   return $aDB->fields;
    	} else {
    	    return array();
    	} 
    	
    }

?>