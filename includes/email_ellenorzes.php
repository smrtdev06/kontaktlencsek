<?php
    error_reporting(1);
    ini_set("display_errors","1");
    
    /***
    * Végignézzük a feliratkozott e-mail címeket és deaktiváljuk a rosszakat
    */
    include_once 'class.verifyEmail.php';
    include_once('sql_fuggvenyek.php');
    
    
    $vmail = new verifyEmail();
    $vmail->setStreamTimeoutWait(20);
    //$vmail->Debug= TRUE;
    //$vmail->Debugoutput= 'html';
    $vmail->setEmailFrom('info@o3optika.hu');
    
    
    $fp = fopen('hibas_webgalamb.txt', 'a+');
    $fp2 = fopen('ervenyes_webgalamb.txt', 'a+');
    
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
    
    $olv = fopen('lencsekhu_emailek.txt', 'r');
    if ($olv) {
        while (($buffer = fgets($olv, 4096)) !== false) {
            
            //echo $buffer;
            list($email, $hiba) = explode("\t", $buffer);    
            $email = trim($email);
            
        //foreach($emailek as $email) {
        
            $valide = $vmail->check($email); // $email['mail']
            
            if( !$valide ) {
                fwrite($fp, $email."\t".$vmail->smtpMsg."\n");
            } else {
                fwrite($fp2, $email."\n");
            }
            
            print $valide."\t".$email;
            //print $valide."\t".$email['mail']."\t\t".$email['id'];
            if( !$valide ) { print "\t".$vmail->smtpMsg; }
            print "\n";
            
            sleep(8);
        //}
        
        
        }
    }
    
    
    

    

    if (!feof($olv)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose($olv);
    
    fclose($fp);
    fclose($fp2);
    
    
    
    
    
    
?>