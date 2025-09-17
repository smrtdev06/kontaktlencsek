<?php
    /**
    * 1. Kiírja fileba a domain neveket
    * 2. Sorba rendezi és ellenőrzi őket
    * 3. 
    * */
    

    error_reporting(1);
    ini_set("display_errors","1");
    
    /***
    * Végignézzük a feliratkozott e-mail címeket és deaktiváljuk a rosszakat
    */
    include_once 'class.verifyEmail.php';
    include_once 'class.verifyDomain.php';
    include_once('sql_fuggvenyek.php');
    
    
    $vmail = new verifyEmail();
    $vmail->setStreamTimeoutWait(20);
    //$vmail->Debug= TRUE;
    //$vmail->Debugoutput= 'html';
    $vmail->setEmailFrom('info@o3optika.hu');
    
    
    $fp = fopen('hibas_emailek.txt', 'w+');
    $fp2 = fopen('ervenyes_emailek.txt', 'w+');
    
    /*
    $result = $db->Execute("
SELECT DISTINCT
    wg5_users.mail,
    wg5_users.active,
    wg5_users.id
FROM
    wg2015.wg5_users
WHERE
    wg5_users.active = 1 and wg5_users.id > 164654
ORDER BY
    wg5_users.id
LIMIT 20000");
    $emailek = $result->GetRows(); 
    */
    
    $csak_domains = array();
    
    // domain ellenőrzés
    $vdomain = new verifyDomain();
    $vdomain->setStreamTimeoutWait(20);
    $vdomain->setEmailFrom('info@o3optika.hu');
    
    
    $olv = fopen('lencsekhu_emailek.txt', 'r');
    if ($olv) {
        while (($buffer = fgets($olv, 4096)) !== false) {
            
            // felosztjuk az e-mail címet
            $reszek = explode("@",$buffer);
            $email = trim($reszek[0]);
            $domain = strtolower( trim($reszek[1]) );
            
            
            // $domain nem üres
            if( !empty($domain) ) {
            
                //print $domain;
                $dom_tomb[$domain][] = $email;
                
                
                //$fp = fopen("./domains/".$domain.".txt", 'w+');
                //fwrite($fp, $email."\n");
                
                // beírjuk a domain tömbbe, ha nincs benne
                //if( !in_array($domain,$csak_domains) ) {
                //    $csak_domains[] = $domain;
                //}
                
                
                
                
                
                
                
                //echo $buffer;
                //list($email, $hiba) = explode("\t", $buffer);    
                //$email = trim($email);
                
                //foreach($emailek as $email) {
                
                /*
                if( !$valide ) {
                    fwrite($fp, $email."\t".$vmail->smtpMsg."\n");
                } else {
                    fwrite($fp2, $email."\n");
                }*/
                
                //print $valide."\t".$email;
                    //print $valide."\t".$email['mail']."\t\t".$email['id'];
                //if( !$valide ) { print "\t".$vmail->smtpMsg; }
                
                
                //print "\n";
                
                //sleep(1);
            //}
        
        
        
            } // nem üres vége
        
        }
    }
    
    
    //print_r($dom_tomb['index.hu']);
    
    foreach($dom_tomb as $egy_dom => $egy_tomb) {
        sort($egy_tomb);
        
        $eredm = $vmail->check_array($egy_tomb, $egy_dom);
        //print_r($egy_tomb);
        
        // végignézzük az eredményt, akkor ír bele ha egy domain megvan, javítani
        foreach($eredm as $egymail => $egy_code) {
            if( $egy_code ) {
                fwrite($fp2, $egymail."\n");
            } else {
                fwrite($fp, $egymail."\t".$egy_code."\n");
            }
        }
               
    }
    
    
    
    
    // DOMIAN rész
    /*
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
    */
    
    

    if (!feof($olv)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose($olv);
    
    fclose($fp);
    fclose($fp2);
    
    
    
    
    
    
?>