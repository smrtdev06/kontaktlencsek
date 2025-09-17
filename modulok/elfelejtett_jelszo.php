<?php
    $tartalom = "nezetek/elfelejtett_jelszo.tpl";
    $elf_hiba = "";
    
    if( $_REQUEST['kuldve'] == 1 && (empty($_REQUEST['felh_email']) || !email_ellenorzes($_REQUEST['felh_email']) ) ) {
        $elf_hiba = "<tr><td colspan=\"2\" style=\"color:red\">{$forditas['nem_letezo_email']}</td></tr>";
        
        $smarty->assign('elf_hiba',$elf_hiba);
    }
    

    if( !empty($_REQUEST['felh_email']) 
        && $_REQUEST['kuldve']== 1
        && email_ellenorzes($_REQUEST['felh_email']) )
    {
        $smarty->assign('jelszo_uzenet',$forditas['jelszavat_elkuldtuk']);
        
        // itt el kell küldeni a jelszót
        
        $elladat = lekerdezes_tombbe("SELECT * FROM felhasznalok WHERE felh_email='{$_REQUEST['felh_email']}'");
        
        // levél kiküldése
        include_once('includes/class.phpmailer.php');
        
        $mail                = new PHPMailer();
        $mail->IsMail();
        //$mail->IsSMTP();
        //$mail->Host          = $levelezes['host']; 
        //$mail->SMTPAuth      = true;
        //$mail->Username      = $levelezes['user']; 
        //$mail->Password      = $levelezes['jelszo']; 
        $mail->CharSet       = 'utf-8';
        $mail->SetFrom($levelezes['user'], $levelezes['kitol']);
        $mail->Subject       = $forditas['elfelejtett_jelszo'];
        
        // sablon feltöltése adatokkal
        $tpl = new Smarty();
        $tpl->template_dir = 'sablonkod';
        $tpl->compile_dir  = 'includes/smarty/templates_c';
        $tpl->cache_dir    = 'includes/smarty/cache';
        $tpl->config_dir   = 'includes/smarty/configs';
        
        $tpl->assign('ford', $forditas);
        $tpl->assign('alnev', $alnev);
        $tpl->assign('sitenev', $sitenev);
        $tpl->assign('jelszo', $elladat['felh_jelszo']);
        
        $body = $tpl->fetch($nyelv.'/jelszo_level.tpl');
        
        $mail->MsgHTML($body);
        $mail->AddAddress($elladat['felh_email']);
        $mail->AddBCC("naplo@irodaiszerver.hu");
        
        if( !$mail->Send() ) {
            $uzenet = $mail->ErrorInfo;
        }
        
        $mail->ClearAddresses();
        $mail->ClearAttachments();
        
        // levél archiválása
        
        
    }
?>