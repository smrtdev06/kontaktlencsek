<?php
    // hírlevélre feliratkozás jquery-vel
    // lens.ro esetén
    
    //ini_set("display_errors","1");
    
    include_once("includes/sql_fuggvenyek.php");
    include_once("includes/class.webgalamb.php");
    
    if( isset($_POST['name']) ) {
    
        //print "\n\nNév: ".$_POST['name']."\n";
        //print "E-mail: ".$_POST['email']."\n";
        
        $wadat['name'] = htmlspecialchars($_POST['name']);
        $wadat['mail'] = htmlspecialchars($_POST['email']);
        $egy_w = new Webgalamb($wadat);
        $egy_w->feliratkozas();
        
        levelkuldes($wadat['mail']);
    
    } else {
        //print "ok";
    }

    function levelkuldes($email) {
        
        $nyelv = 'hu';
        // levél elküldése
        include_once('includes/class.phpmailer.php');
        include_once('includes/nyelvek/hu.php'); // nyelvi fileok, levelezés beállítások
        
        $mail                = new PHPMailer();
        $mail->IsMail();
        $mail->CharSet       = 'utf-8';
        $mail->SetFrom($levelezes['user'], $levelezes['kitol']);
        $mail->Subject       = "Lencsek.hu kupon";
        
        // sablon feltöltése adatokkal
        include_once('includes/smarty/libs/Smarty.class.php');
        $tpl = new Smarty();
        $tpl->template_dir = 'sablonkod';
        $tpl->compile_dir  = 'includes/smarty/templates_c';
        $tpl->cache_dir    = 'includes/smarty/cache';
        $tpl->config_dir   = 'includes/smarty/configs';
        
        $sitenev = 'http://lencsek.hu/';
        $tpl->assign('sitenev', $sitenev);
        $tpl->assign('ford', $forditas);
        
        $body = $tpl->fetch($nyelv.'/feliratkozo_level.tpl');
        $mail->MsgHTML($body);
        $mail->AddAddress($email);
        $mail->AddBCC("naplo@o3optika.hu");
        //$mail->AddBCC("sattila@ativil.hu");

        if( !$mail->Send() ) {
            //$uzenet['level_hiba'] = $mail->ErrorInfo;
            //sql_update('megrendelesek',$uzenet,"rend_id=".$rend_id);
        } else {
            // elmentjük, hogy elment a levél
            //$modosit['level_ment'] = date("Y-m-d H:i:s");
            //sql_update('megrendelesek',$modosit,"rend_id=".$rend_id);
        }

        $mail->ClearAddresses();
        $mail->ClearAttachments();
    }

?>