<?php
    $tartalom = "nezetek/hirlevel.tpl";
            
            include_once("includes/class.hirlevel.php");
            $egy_tag = new Hirlevel($_REQUEST);
            
            //if( !empty($_REQUEST['tag_nev']) && !empty($_REQUEST['tag_email']) && $_REQUEST['tag_nev'] != "Név" ) {
            if( !empty($_REQUEST['tag_email']) && strlen($_REQUEST['tag_email'])>7 ) {                
                
                        include_once("includes/class.webgalamb.php");
                        //$wadat['name'] = $_REQUEST['tag_nev'];
                        $wadat['mail'] = $_REQUEST['tag_email'];
                        $egy_w = new Webgalamb($wadat);
                        $egy_w->feliratkozas();
                        
                //if( !hirlevel_ellenorzes($_REQUEST['tag_email']) ) {
                    $egy_tag->felvetel();
                    $valasz = $forditas['koszonjuk_jelentkezeset'];
                //} else {
                    //$valasz = "<span class=\"error\">{$forditas['szerepel_emailcim']}</span>";
                //}
                
            } else {
                $valasz = "<span class=\"error\">{$forditas['hibas_emailcim']}<br /></span>{$forditas['probalja_ujra']}";
            }
            
            $smarty->assign('valasz',$valasz);
?>