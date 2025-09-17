<?php
    /**
    * Webgalamb felhasználókat végignézzük, hogy heyes-e a mailcím
    * */
    

    error_reporting(1);
    ini_set("display_errors","1");
    
    /***
    * Végignézzük a feliratkozott e-mail címeket és deaktiváljuk a rosszakat
    */
    include_once 'class.verifyEmail.php';
    //include_once 'class.verifyDomain.php';
    $vmail = new verifyEmail();
    $vmail->setStreamTimeoutWait(20);
    //$vmail->Debug= TRUE;
    //$vmail->Debugoutput= 'html';
    $vmail->setEmailFrom('hirlevel@lencsek.hu');
    
    
    // rossz domainek tömbbe
    $fp = fopen('hibas_domain.txt', 'r');
    if ($fp) {
        while (($buffer = fgets($fp, 4096)) !== false) {
            $rossz_domainek[] = trim($buffer);
        }
    }
    
    
    include_once('sql_fuggvenyek.php');
    
    /* DISTINCT ,
    wg5_users.active,
    wg5_users.id*/
    
    $result = $db->Execute("SELECT DISTINCT mail
    FROM wg2015.wg5_users
    WHERE
        active = 1 and bounce = 0
        AND mdatum < '2016-06-09'
    LIMIT 4000");

/*SELECT DISTINCT
    wg5_users.mail
FROM
    wg2015.wg5_users
WHERE
     wg5_users.active = 1
     AND mail > 'zzsuzska@yahoo.com'
LIMIT 10000
ORDER BY
    wg5_users.mail*/
    
    // WHERE
    //wg5_users.active = 1 and wg5_users.id > 15747
    
    $emailek = $result->GetRows();
    
    foreach($emailek as $egy) {
        // mindig kiírjuk
        //print $egy['id']."\t".$egy['mail'];
        
        //print $egy['mail'];
        
        // felosztjuk az e-mail címet
        $reszek = explode("@",$egy['mail']);
        $email = trim($reszek[0]);
        $domain = strtolower( trim($reszek[1]) );

        // tömbbe rakjuk domain szerint        
        $tombok[$domain][] = $email;
        
        
        
        /* // a rossz domaineket kikapcsoljuk
        if( in_array($domain,$rossz_domainek) ) {
            // akkor írjuk ki ha rossz
            //print $egy['id']."\t".$egy['mail'];    
            print "\t rossz!";
            
            sql_run("UPDATE wg2015.wg5_users SET active = 0 WHERE wg5_users.id=".$egy['id']);
            //print "\n";
        }
        */

        //print "\n";
    }
    
    
    // feldolgozzuk a tömböket
    foreach($tombok as $key => $telem) {
                
        print $key; // ."\n"
        
        // rendezzük a domaint
        sort($telem);
        
        //foreach($telem as $egy_user) {
        //    print "\t".$egy_user."\n";
        //}
        
        // itt kellene felosztani az elelnőrzést mondjuk 50-vel, hogy el is mentsük az eredményt, egy domain-en belül
        // !!!
        
        // ellenörizzük a levélcímeket egy domainben
        $valide = $vmail->check_array($telem,$key);
        
        // egy domaint frissít
        foreach($valide as $key2 => $oke) {
            $cim = $key2."@".$key;
            //print $cim."\t".$oke."\n";
            
            if( !$oke ) {
                sql_run("UPDATE wg2015.wg5_users SET bounce = 1, active = 2 WHERE wg5_users.mail='".$cim."'");
            } else {
                sql_run("UPDATE wg2015.wg5_users SET mdatum = '".date("Y-m-d H:i:s")."' WHERE wg5_users.mail='".$cim."'");
            }
        }
    }
    
    
    
    
    /*
    
    $vmail = new verifyEmail();
    $vmail->setStreamTimeoutWait(20);
    //$vmail->Debug= TRUE;
    //$vmail->Debugoutput= 'html';
    $vmail->setEmailFrom('hirlevel@lencsek.hu');
    
    
    $fp = fopen('hibas_domain.txt', 'w+');
    $fp2 = fopen('ervenyes_domain.txt', 'w+');
    

    
    $csak_domains = array();
    
    // domain ellenőrzés
    $vdomain = new verifyDomain();
    $vdomain->setStreamTimeoutWait(20);
    $vdomain->setEmailFrom('hirlevel@lencsek.hu');
    
    
    $olv = fopen('webgalamb_emails.txt', 'r');
    if ($olv) {
        while (($buffer = fgets($olv, 4096)) !== false) {
            
            // felosztjuk az e-mail címet
            $reszek = explode("@",$buffer);
            $email = trim($reszek[0]);
            $domain = strtolower( trim($reszek[1]) );
            
            
            // $domain nem üres
            if( !empty($domain) ) {
            
                //print $domain;
                
                //$fp = fopen("./domains/".$domain.".txt", 'w+');
                //fwrite($fp, $email."\n");
                
                // beírjuk a domain tömbbe, ha nincs benne
                if( !in_array($domain,$csak_domains) ) {
                    $csak_domains[] = $domain;
                }
                
                //echo $buffer;
                //list($email, $hiba) = explode("\t", $buffer);    
                //$email = trim($email);
                
            //foreach($emailek as $email) {
                
                
                //if( !$valide ) {
                //    fwrite($fp, $email."\t".$vmail->smtpMsg."\n");
                //} else {
                //    fwrite($fp2, $email."\n");
                //}
                
                //print $valide."\t".$email;
                    //print $valide."\t".$email['mail']."\t\t".$email['id'];
                //if( !$valide ) { print "\t".$vmail->smtpMsg; }
                
                
                //print "\n";
                
                //sleep(1);
            //}
        
        
        
            } // nem üres vége
        
        }
    }
    
    
    // domainek rendezés
    sort($csak_domains);
    
    $fp_domain = fopen('domain_lista.txt', 'w+');
    foreach( $csak_domains as $elem) {
        
        
        
        $valide = $vdomain->check($elem);
                
        if( !$valide ) {
            // rossz mx domain
            fwrite($fp, $elem."\n");
        } else {
            // jó mx domain
            fwrite($fp2, $elem."\n");
        }
                
                
        print $elem."\t".$valide."\n";        
        
        // beírjuk a domain fájl-ba
        fwrite($fp_domain, $elem."\n");
        
        sleep(4);
        
    }
    fclose($fp_domain);
    // domainek vége
    

    if (!feof($olv)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose($olv);
    
    fclose($fp);
    fclose($fp2);
    
    
    */
    
    
    
?>