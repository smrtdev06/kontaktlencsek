<?php
    
    // Webgalamb leiratkozás
                    
    if( $_REQUEST['email'] && email_ellenorzes($_REQUEST['email']) ) {
        include_once("includes/class.webgalamb.php");
        $wadat['mail'] = $_REQUEST['email'];
        $egy_w = new Webgalamb($wadat);
        $egy_w->leiratkozas();
    }
    
    //$smarty->assign('kosarki', $kos->kiir() );
    $tartalom = $nyelv."/leiratkozas.tpl";
?>