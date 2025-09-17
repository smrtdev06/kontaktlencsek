<?php
    ini_set("display_errors",1);
    
    require_once '../includes/sql_fuggvenyek.php';
    //require_once 'includes/bolt_fuggvenyek.php';
    //include_once("includes/nyelvek/{$nyelv}.php");
    //include_once('includes/smarty/libs/Smarty.class.php');

    // Megvizsgáljuk, hogy a megrendelés táblában, létezik-e már ez a tranzakció
    function Tranzakcio_vizsgalat($tranz_id) {
        global $db;
        
        if( !empty($tranz_id) ) {
            $db->Execute("SELECT TransactionId FROM megrendelesek WHERE TransactionId=".qstr($tranz_id) );
            return $db->Affected_Rows();    
        } else {
            return 0;
        }
      
    }
    
    print Tranzakcio_vizsgalat("b3b1e881d5c8245f32c3550e3971291");
    

?>