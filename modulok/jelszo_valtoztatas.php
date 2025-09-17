<?php
    include_once("includes/class.user.php");

    $tartalom = "nezetek/jelszo_valtoztatas.tpl";
    $elf_hiba = "";
    
    $ellenorzott_user = user_ellenorzes($_REQUEST['felh_email']);
    
    function level_felhasznalonak($adatok) {
        global $levelezes, $forditas, $alnev, $sitenev;
        
        //$elladat = lekerdezes_tombbe("SELECT * FROM felhasznalok WHERE felh_email='{$_REQUEST['felh_email']}'");
        
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
        $tpl->assign('token', $adatok['token']);
        
        $body = $tpl->fetch('nezetek/jelszo_level2.tpl');
        
        $mail->MsgHTML($body);
        $mail->AddAddress($adatok['email']);
        $mail->AddBCC("naplo@irodaiszerver.hu");
        
        if( !$mail->Send() ) {
            $uzenet = $mail->ErrorInfo;
        }
        
        $mail->ClearAddresses();
        $mail->ClearAttachments();
    }
    
    function token_ellenorzes($token) {
        $user_adat = lekerdezes_tombbe("SELECT felh_id FROM felhasznalok WHERE felh_token=".qstr($token) );
    
        if( is_array($user_adat) and count($user_adat) ) {
            return $user_adat['felh_id'];
        } else {
            return 0;
        }
    }

    
    // email_ellenorzes($_REQUEST['felh_email']) 
    
    if( $_REQUEST['kuldve'] == 1 && (empty($_REQUEST['felh_email']) || !$ellenorzott_user ) && !isset($_REQUEST['token'])) {
        $elf_hiba = "<tr><td colspan=\"2\" style=\"color:red\">{$forditas['nem_letezo_email']}</td></tr>";
        
        $smarty->assign('elf_hiba',$elf_hiba);
        
    } elseif( !empty($_REQUEST['felh_email']) &&
              $_REQUEST['kuldve']== 1 &&
              $ellenorzott_user ){
        // ellenörzött e-mail cím
        $smarty->assign('jelszo_uzenet',$forditas['jelszotoken_elkuldve']);
        
        $userbe['felh_token'] = generateRandomString(30);
        $fmod = new Felhasznalo($userbe);
        $fmod->modositas($ellenorzott_user);
        
        // token levél küldése felhasználónak
        $adatok['email'] = $_REQUEST['felh_email'];
        $adatok['token'] = $userbe['felh_token'];
        level_felhasznalonak($adatok);
        
    } elseif( isset($_REQUEST['token']) && token_ellenorzes($_REQUEST['token']) && empty($_REQUEST['felh_jelszo']) ) {
        
        // jelszót akar változtatni
        $smarty->assign('token', $_REQUEST['token']);
        
        $tartalom = "nezetek/jelszo_valtoztatas2.tpl";

    } elseif( isset($_REQUEST['felh_jelszo']) 
              && isset($_REQUEST['felh_jelszo2'])
              && $_REQUEST['felh_jelszo'] == $_REQUEST['felh_jelszo2']
              && isset($_REQUEST['token']) 
              && token_ellenorzes($_REQUEST['token'])) {
        
        // küldött helyes adatokat a jelszóváltoztatáshoz
        $ellenorzott_token = token_ellenorzes($_REQUEST['token']);
      
        $adatbe['felh_jelszo'] = $_REQUEST['felh_jelszo'];
        $adatbe['felh_md5_jelszo'] = md5($_REQUEST['felh_jelszo']);
        
        $fmod = new Felhasznalo($adatbe);
        $fmod->modositas($ellenorzott_token);
      
        $tartalom = "nezetek/jelszo_valtoztatas2.tpl";
             
        $smarty->assign('jelszo_uzenet', "Jelszava megváltozott!");     
    }
    
    
    
?>
