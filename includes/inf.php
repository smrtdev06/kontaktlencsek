<?php
  //phpinfo();
  
   header('Content-Type: text/html; charset=UTF-8');

   function is_email($email, $test_mx = true) { 
      if(preg_match("~^([_a-z0-9-]+)(\.[_a-z0-9-]+)*@([a-z0-9-]+)(\.[a-z0-9-]+)*(\.[a-z]{2,4})$~", $email)) {
        if($test_mx) { 
          list(, $domain) = split("@", $email); 
          return (checkdnsrr($domain, 'MX') or checkdnsrr($domain, 'A')); 
        } 
        return 1; 
      } 
      return 'err';
    }
   
   ini_set('display_errors',1);

    include_once("sql_fuggvenyek.php");
    include_once("class.webgalamb.php");
    
    $sitenev = "lencsek.hu";
    include_once("nyelvek/hu.php"); // árformat
    
    
    
    function csak_havi_vagy_apoloszer($kosar_tomb) {
    global $db;
    
    $v = 0;
    
    if( !empty($kosar_tomb) ) {
        
        foreach($kosar_tomb as $elem ) {
            $ujtomb[] = $elem['termek_id'];
        }
        $termek_idk = implode(",",$ujtomb);
    
        $sql = "SELECT DISTINCT termek_kategoriak.kat_id
    FROM termekek 
    LEFT JOIN termek_kategoriak ON termekek.termek_kat_id = termek_kategoriak.kat_id
    WHERE termekek.termek_id IN ({$termek_idk})";

        $result = $db->Execute($sql);
        $kategoriak = $result->GetRows();

        //var_dump($kategoriak);
        
        if( !empty($kategoriak) ) {
            foreach( $kategoriak as $elem ) {
                print $elem[0]."<br />";
                
                if( $elem[0] == 5 or $elem[0] == 12) { // csak 5,12 a kategória
                    $v = 1;
                } else {
                    $v = 0;
                }
            }    
        }
           
    }
    
    return $v;
}
    
    
    
    function email_ellenorzes($email) {
        $talalat = lekerdezes_tombbe("SELECT felh_email FROM felhasznalok WHERE felh_email='{$email}'");
        if( !empty($talalat['felh_email']) ) {
            return 1;
        } else {
            return 0;
        }
    }
    
    print email_ellenorzes("sattila@ativi.hu");
    
    
    /*
    $wadat['name'] = $_REQUEST['tag_nev'];
    $wadat['mail'] = $_REQUEST['tag_email'];
    $egy_w = new Webgalamb($wadat);
    $egy_w->feliratkozas();
    
    
    
    
    //print "Attila teszt szöveg\n<br />";
    //$db->Execute("USE lencseku_webgalamb");
    $result = $db->Execute("SELECT SUBSTR(REPLACE(name,\";\",\"\"),1,40) AS name, mail AS mail
FROM
lencseku_webgalamb.wg3_users
WHERE
active = 1 and g = 1
LIMIT 1000");
    //$cimek = $result->GetRows();
    
    while( !$result->EOF ) {
        $elem = $result->fields;
        
        // $elem['tag_id']." : ".
        print $elem['name']." | ".$elem['mail']." | ".is_email($elem['mail'])."\n<br />";
        
        $result->MoveNext();
    }
    */
    
    /*
    foreach($cimek as $elem) {
        print $elem['tag_id']." : ".$elem['name']." | ".$elem['mail']." | ".is_email($elem['mail'])."\n<br />";
        
        //$egy_w = new Webgalamb($elem);
        //$egy_w->feliratkozas(); 
    }
    */
    


    
    // Hírlevélhez termékek táblázatban
    
    // 20032,23309,19414
    
    
    $result = $db->Execute("SELECT * FROM termekek WHERE termek_id IN (19401, 22066, 19407, 19459) ");
    $termekek = $result->GetRows();
    
    
    print "<table><tr>";
    $i=1;
    
    foreach($termekek as $elem) {
        
        //print $elem['termek_id']." | ".$elem['termek_nev_hu']."\n<br />";
        
        $ar = ($elem['termek_akcios_ar'] < $elem['termek_ar'] && $elem['termek_akcios_ar'] > 0) ? $elem['termek_akcios_ar'] : $elem['termek_ar'];
        
        
        
        print "<td>";
        
        print "<!-- Egy termek -->
<table class=\"termektabla\" border=\"0\">
<tbody>
<tr>
<td rowspan=\"2\" width=\"160\" height=\"110\" align=\"center\" valign=\"middle\"><a title=\"{$elem['termek_nev_hu']}\" href=\"http://lencsek.hu/{$elem['termek_alnev_hu']}\">
<img title=\"MyDay (30 db)\" src=\"http://kepek.lencsek.hu/lencsek/{$elem['termek_kep']}\" border=\"0\" height=\"100\" alt=\"{$elem['termek_nev_hu']}\"></a></td>
<td height=\"60\">&nbsp;</td>
</tr>
<tr>
<td style=\"background-image:url('http://www.lencsek.hu/view/images/akcios_termek_bg.gif')\" rowspan=\"2\" width=\"90\" height=\"92\" align=\"right\"><br><br><span style=\"font: arial, helvetica; font-size: 16px; color: #769d18;    font-weight: bold;\">".arformat($ar)."</span>&nbsp;&nbsp;</td>
</tr>
<tr>
<td height=\"40\">&nbsp;<a style=\"color: #46b7cb;
    font: arial, helvetica;
    font-size: 14px;
    font-weight: bold;\" title=\"{$elem['termek_nev_hu']}\" href=\"http://lencsek.hu/{$elem['termek_alnev_hu']}\">{$elem['termek_nev_hu']}</a></td>
</tr>
</tbody>
</table>
<!-- Egy termek vege -->";

    print "</td>";
    
    if( $i == 3 ) { 
        print "</tr><tr>\n";
        $i=1;
    } else {
        $i++;
    }
    
    

    }
    
    print "</tr></table>";
     

       
    //session_start();
    //print csak_havi_vagy_apoloszer( $_SESSION['kosar'] );
    //phpinfo();
?>
