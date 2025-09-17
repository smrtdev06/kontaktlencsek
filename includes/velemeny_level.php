<?php
    // Feladat : vélemény levél kiküldése adott boltról, megrendelés után 1 héttel
    
    //József Krt. : https://plus.google.com/117846177889795079228/about?review=1&source=lo-ta&hl=hu&authuser=0&gl=hu
    //Bajcsy      : https://plus.google.com/110875620009928149304/about?review=1&source=lo-ta&hl=hu&gl=hu

    // Megoldás : lekérdezés azokról a felhasználókról aki a boltban vásárolt és megrendelesek.velemeny_level != 1
    // levél kiküldése sablon alapján
    // megrendelesek.velemeny_level = 1 -re állítása
    // Időzítés : hetente
    // google_level VIEW a mysql adatbázisban
    
    // beállítások
    $levelezes['host']   = "localhost";
    $levelezes['user']   = "office@lencsek.hu";
    $levelezes['jelszo'] = "O3_56!";
    $levelezes['kitol']  = "Lencsék.hu";
    $levelezes['targy']  = "Véleménykérés Lencsék.hu Optika";
    $levelezes['admin_email'] = "office@lencsek.hu";
    
    $nyelv = "hu";
    
    $forditas['rendelesi_szam'] = "Rendelési szám";
    // beállítások vége
    
    
    
    
    // smarty és phpmailer befoglalása
    include_once('smarty/libs/Smarty.class.php');
    include_once('class.phpmailer.php');
                
    $mail                = new PHPMailer();
    $mail->Host          = $levelezes['host'];
    $mail->IsMail();
    $mail->CharSet       = 'utf-8';
    $mail->SetFrom($levelezes['user'], $levelezes['kitol']);
    $mail->Subject       = $levelezes['targy'];
    //$mail->AddReplyTo('office@lencsek.hu', 'Lencsek.hu');

    // sablon feltöltése adatokkal
    $tpl = new Smarty();
    $tpl->template_dir = '../sablonkod';
    $tpl->compile_dir  = 'smarty/templates_c';
    $tpl->cache_dir    = 'smarty/cache';
    $tpl->config_dir   = 'smarty/configs';
    
    $tpl->assign('sitenev',"http://lencsek.hu/");
    $tpl->assign('ford', $forditas);
    
    $body = $tpl->fetch($nyelv.'/bolt_velemeny_level.tpl');
    
    $mail->MsgHTML($body);
    $mail->AddAddress("rgazda@o3optika.hu");
    
    if( !$mail->Send() ) {
        $uzenet['level_hiba'] = $mail->ErrorInfo;
        
        //sql_update('megrendelesek',$uzenet,"rend_id=".$rend_id);
    } else {
        // elmentjük, hogy elment a levél
        $modosit['level_ment'] = date("Y-m-d H:i:s");
        
        //$akt_megrendeles = new Megrendeles($modosit);
        //$akt_megrendeles->modositas($rend_id);
        
        //sql_update('megrendelesek',$modosit,"rend_id=".$rend_id);
        
        //print "Levelet elküldtük!";
        //print_r($rend_id);
    }
    
    $mail->ClearAddresses();
    $mail->ClearAttachments();
    
    
    print "ok";
?>