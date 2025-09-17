<?php
/*
    Feladat: levél küldése 1 hét eltelte után a vásárlónak, hogy írjon véleményt a boltról.

    Url: https://plus.google.com/117846177889795079228/about?review=1&source=lo-ta&hl=hu&gl=hu
*/

    header('Content-Type: text/html; charset=UTF-8');
    ini_set('display_errors',1);

    include_once("sql_fuggvenyek_frissito.php");
    
    
    
            require_once 'includes/sql_fuggvenyek.php';
            
            include_once("includes/nyelvek/{$nyelv}.php");
            include_once('includes/smarty/libs/Smarty.class.php');
    
     // levél kiküldése
            include_once('includes/class.phpmailer.php');
            
            $mail                = new PHPMailer();
            //$mail->IsSMTP(); 
            $mail->IsMail();
            $mail->Host          = $levelezes['host']; 
            //$mail->SMTPAuth      = true;                  
            //$mail->SMTPKeepAlive = true;            
            //$mail->Port          = 25;      
            //$mail->Port          = 465;   
            //$mail->SMTPSecure = 'ssl';                
            //$mail->Username      = $levelezes['user']; 
            //$mail->Password      = $levelezes['jelszo'];        
            $mail->CharSet       = 'utf-8';
            $mail->SetFrom($levelezes['user'], $levelezes['kitol']);
            $mail->Subject       = $levelezes['targy'].$rend_id;
            
            // sablon feltöltése adatokkal
            $tpl = new Smarty();
            $tpl->template_dir = 'sablonkod';
            $tpl->compile_dir  = 'includes/smarty/templates_c';
            $tpl->cache_dir    = 'includes/smarty/cache';
            $tpl->config_dir   = 'includes/smarty/configs';
            
            $tpl->assign('fizmod_ki',$fizki);
            //-------------------------------------------

            $body = $tpl->fetch($nyelv.'/megrendelo_level.tpl');
            
            $mail->MsgHTML($body);
            $mail->AddAddress($user_adat['felh_email']);
            //if( $user_adat['felh_email'] != "sattila@websons.hu" ) {
                $mail->AddAddress($levelezes['admin_email']);
                $mail->AddBCC("o3optika@freemail.hu");
            //}
            $mail->AddBCC("rgazda@o3optika.hu");
            
            if( !$mail->Send() ) {
                $uzenet['level_hiba'] = $mail->ErrorInfo;
                    
                sql_update('megrendelesek',$uzenet,"rend_id=".$rend_id);
            } else {
                // elmentjük, hogy elment a levél
                $modosit['level_ment'] = date("Y-m-d H:i:s");
                sql_update('megrendelesek',$modosit,"rend_id=".$rend_id);
                //$akt_megrendeles = new Megrendeles($modosit);
                //$akt_megrendeles->modositas($rend_id);
            }
            
            $mail->ClearAddresses();
            $mail->ClearAttachments();
            
?>