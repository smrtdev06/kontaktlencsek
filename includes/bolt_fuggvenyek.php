<?php


function kerekit0ra($osszeg) {
    if( $osszeg % 10 == 0) {
        return $osszeg;
    } else {
        return $osszeg - ($osszeg%10);
    }
}

function tomb_fileba($tomb) {
    $v = "->\n";
    if(is_array($tomb)) {
        foreach($tomb as $kulcs=>$item) {
            if( is_array($item) ) {
                $v .= $kulcs." ";
                $v .= tomb_fileba($item)."<-\n";
            } else {
                $v .= $kulcs." : ".$item."\n";
            }
        }
    } else {
        $v = $tomb."\n";
    }
    
    return $v;
}

function domain_validate($email, $record = 'MX') {
    $reszek = explode('@', $email);
    return checkdnsrr($reszek[1], $record);
}

function szallarformat($par, &$smarty) {
        global $forditas,$dev,$nyelv;
        
        //return $par['ar'];
        
        if( $par['ar'] > 0 ) {
            $v = arformat($par['ar']);
            
            if ( $par['ingyen'] > 0 ) { 
                if( $nyelv == 'hu' ) {
                $v .= "<br /> <span class=\"kicsi-ingyen\">{$forditas['ingyenes']}:</span> <span class=\"kicsi-select\">".arformat($par['ingyen'])." -{$forditas['tol']}</span>";
                }
                
                if( $nyelv == 'en' ) {
                $v .= "<br /> <span class=\"kicsi-select\">{$forditas['ingyenes']} {$forditas['tol']} ".arformat($par['ingyen'])."</span>";
                }
                
                if( $nyelv == 'ro' ) {
                $v .= "<br /> <span class=\"kicsi-select\">{$forditas['ingyenes']} {$forditas['tol']} ".arformat($par['ingyen'])."</span>";
                }
                
            }
            
            return $v;
        } else {
            if( $par['ar'] != " - " ) {
                return " - ";
            } else {
                return $forditas['ingyenes'];
            }
        }
        
    }

function kileptetes() {
    global $_SESSION;
    
    unset($_SESSION['user']);
    unset($_SESSION['kosar']);
    unset($_SESSION['fizmod']);
    unset($_SESSION['szallmod']);
    unset($_SESSION['osszesen']);
    unset($_SESSION['ajandek_azon']);
    unset($_SESSION['tkupon']);
}


function kosarban_van($termek_id) {
    global $_SESSION;
    
    $van = 0;
    
    foreach( $_SESSION['kosar'] as $elem) {
        if($elem['termek_id'] == $termek_id) {
            $van = 1;
        }
    }
    
    return $van;
}

//--------------------------------------------------
function havi_lencse_kosarban() {
    global $_SESSION;
    $van = 0;
    
    $termekek = '';
    
    foreach( $_SESSION['kosar'] as $elem) {
        if( !empty($elem['termek_id']) ) {
            $termekek .= $elem['termek_id'].",";
        }
    }

    $eredm = lekerdezes_tombbe("SELECT COUNT(termek_id) as db FROM termekek
INNER JOIN termek_kategoriak ON termekek.termek_kat_id=termek_kategoriak.kat_id
WHERE termek_id IN (".substr($termekek,0,-1).")");
    
    return $eredm['db'];
}
//---------------------------------------------------

function van2lencse_kosarban() {
    global $_SESSION;
    
    $van = 0;
    
    foreach( $_SESSION['kosar'] as $elem) {
        
        // kontaktlencséről van szó
        if($elem['termek_csoport'] == 1) {
            $van += $elem['termek_db'];
        }
    }
    
    return $van;
    
    //if($van >= 2 && $van > 5) {
    //    return 1;
    //} else {
    //    return 0;
    //}
}

function checkEmail($s) {
      $lastDot  = strrpos($s,'.');
      $ampersat = strrpos($s,'@');
      $length   = strlen($s);
      
      return !(
        $lastDot === false ||
        $ampersat === false ||
        $length === false ||
        $lastDot - $ampersat < 3 ||
        $length - $lastDot < 3 
        // || filter_var($s, FILTER_VALIDATE_EMAIL) : nem tudnak vele regisztrálni
      );
}

// keres és cserél illegális karaktereket : ;,[Enter]
function illegalis_karakter($szoveg) {
    $mit_keres = array(";", "\r\n", ",");
    $mire_cserel   = array("", " ", "");

    return str_replace($mit_keres, $mire_cserel, $szoveg);
}

// van-e már ilyen e-mail címünk
function email_ellenorzes($email) {
    $talalat = lekerdezes_tombbe("SELECT felh_email FROM felhasznalok WHERE felh_email='{$email}'");
    if( !empty($talalat['felh_email']) ) {
        return 1;
    } else {
        return 0;
    }
}

// fel van-e már iratkozva
function hirlevel_ellenorzes($email) {
    $talalat = lekerdezes_tombbe("SELECT tag_email FROM hirlevel WHERE tag_email='{$email}'");
    if( !empty($talalat['tag_email']) ) {
        return 1;
    } else {
        return 0;
    }
}

function hiba_kiiras($text) {
    return "<span class=\"error\">".$text."</span>";
}

function szallitas_beallitas() {
    global $_SESSION, $_REQUEST;
    
    if( isset($_REQUEST['szallmod']) && $_REQUEST['szallmod'] > 0 ) {
        $_SESSION['szallitas_osszeg'] = szallitasi_koltseg($_REQUEST['fizetesmod'],$_REQUEST['szallmod'],$_SESSION['osszes_suly']);
        $_SESSION['fizmod']   = $_REQUEST['fizetesmod'];
        $_SESSION['szallmod'] = $_REQUEST['szallmod'];
        $_SESSION['optika_id'] = $_REQUEST['optika_id'];
        $_SESSION['aznapi_atvetel'] = $_REQUEST['aznapi_atvetel'];
        
        if( $_REQUEST['szallmod'] == 3 ) {
            $_SESSION['bolt_id']  = $_REQUEST['p_hely'];
            $_SESSION['bolt_id2']  = $_REQUEST['p_hely2'];
        } elseif( $_REQUEST['szallmod'] == 5 ) {
            $_SESSION['bolt_id']  = $_REQUEST['f_hely'];    
        }
    }
}

function gyartok_listaja() {
    global $db, $smarty;
    
    // gyártók hozzárendelése sablonhoz
    $res = $db->Execute("SELECT
tgy.gyarto_nev,
tgy.gyarto_alnev,
COUNT(termekek.termek_gyarto_id) AS gyarto_db
FROM termek_gyartok AS tgy
LEFT JOIN termekek ON tgy.gyarto_id = termekek.termek_gyarto_id
WHERE sorrend > 0 
GROUP BY tgy.gyarto_id ORDER BY tgy.gyarto_nev"); // sorrend
    // gyarto_tip=1 and 

    $smarty->assign('gyartok', $res->GetRows() );
}

function jellemzok($params, &$smarty) {
    global $nyelv;
    global $db;
    //$params['jell'],$params['termek_id']
    $v = "";
    
    $result = $db->Execute("SELECT
jell.jell,
jell.jell_id,
jell.sorrend,
jell.ertek_{$nyelv} as ertek,
lencsejell.termek_id,
jellemzok.jell_nev_{$nyelv}
FROM
jell
INNER JOIN jellemzok ON jell.jell = jellemzok.jell
INNER JOIN lencsejell ON lencsejell.jell_id = jell.jell_id AND lencsejell.jell = jell.jell
WHERE lencsejell.termek_id = {$params['termek_id']} and jell.jell = {$params['jell']}
ORDER BY jell.sorrend, ertek ASC");
    

    if( $result->RecordCount() == 1 ) {
        $egysor = $result->fields;
        $v = "<input type=\"hidden\" name=\"jell{$params['jell']}[]\" value=\"{$egysor['jell_id']}\"> {$egysor["ertek"]}";
    } elseif( $result->RecordCount() > 1 ) {
        
        $v = "<select id=\"jell{$params['jid']}_{$params['jell']}\" name=\"jell{$params['jell']}[]\" class=\"form-control select-block\"> <option value=\"\" selected=\"selected\">Válasszon</option>\n";
        
        $eredmeny = $result->GetRows();
        foreach($eredmeny as $egysor) {
            $v.= "<option value=\"{$egysor['jell_id']}\">{$egysor["ertek"]}</option>\n";
        }
        /*
        while( !$result->EOF ) {
            $egysor = $result->fields;
            $v.= "<option value=\"{$egysor['jell_id']}\">{$egysor["ertek"]}</option>\n";
            $result->MoveNext();
        }
        */
        
        $v.= "</select>\n";
    }
    
    return $v;
}
    
function mennyiseg($params, &$smarty) {
    $v = "";
    for($i=0; $i<=$params['db']; $i++) {
        $v .= "<option value=\"{$i}\"";
        if( $i==1 ) { $v.=" selected=\"selected\""; }
        $v .= ">{$i}</option>";
    }
    return $v;
}


function mennyiseg2($params, &$smarty) {
    $v = "";
    for($i=1; $i<=$params['db']; $i++) {
        $v .= "<option value=\"{$i}\"";
        if( $i == $params['akt'] ) { $v.=" selected=\"selected\""; }
        $v .= ">{$i}</option>";
    }
    return $v;
}


function jellemzoki($par, &$smarty) {
    global $db;
    global $nyelv;
    
    // $jell, $jell_id
    
    $res = $db->Execute("SELECT
jellemzok.jell_nev_{$nyelv} as jell_nev,
jell.ertek_{$nyelv} as jell_ertek
FROM
jellemzok
INNER JOIN jell ON jell.jell = jellemzok.jell
WHERE jell.jell={$par['jell']} and jell.jell_id={$par['jell_id']}");
    
    if( $res && $res->RecordCount() > 0 ) {
        $adatok = $res->fields;
        
        return "<b>{$adatok['jell_nev']} :</b> {$adatok['jell_ertek']}";
    } else {
        return '';
    }
  
}


function szallitasi_koltseg($fiz_id,$szall_id,$szall_suly) {
    global $_SESSION;
    
    $tomb = lekerdezes_tombbe("SELECT * FROM szallitas_hozzarendeles WHERE fiz_id='{$fiz_id}' and szall_id='{$szall_id}' ");
    
    if( is_array($tomb)  ) {
        // and $tomb['szall_ar'] > 0
        $arak = explode("|",$tomb['szall_arak']);
        $sulyok = explode("|",$tomb['szall_sulyok']);
        
        $i= 0;
        foreach( $sulyok as $kulcs => $elem) {
            if( $elem > $szall_suly || $elem == "max") {
                //$t = $i;
                $t = $kulcs;
            }
            $i++;
        }
        
        if( $tomb['szall_arak'] == 'NULL' ) {
            $v = "\" - \"";
        } else {
            $v = $_SESSION['osszesen']>$tomb['szall_ingyenes'] ? 0 : $arak[$t];
        }
        
    } else {
        $v = 0;
    }
    
    return $v;
}

function termek_jellemzo($termek_id, $jellemzo) {
    $eredmeny = lekerdezes_tombbe("SELECT COUNT(lencsejell.jell) AS jellemzo_db
FROM
lencsejell
WHERE
lencsejell.termek_id = {$termek_id} AND
lencsejell.jell = {$jellemzo}");

    return $eredmeny['jellemzo_db'];
}

function termek_javascript($termek_id, $jellid) {
    global $db;
    
    $res = $db->Execute("SELECT jell, COUNT(jell) as db
FROM lencsejell
WHERE
lencsejell.termek_id = {$termek_id}
GROUP BY jell ");

    $eredmeny = $res->GetRows();
    
    if( $res->RecordCount() > 0 ) {
        $v = "";
        foreach($eredmeny as $elem) {
            if( $elem['db'] > 1 ) {
              $v .= " f.elements[\"jell{$jellid}_{$elem['jell']}\"].value == '' ||";
            }
        }
        
        return substr($v,0,-2);
    } else {
        return "0";
    }
    

}

// Megnézi, van-e ilyen tranzakció már?!
// Megnézi, hogy a megrendelés mikor jött létre a megrendelesek_tmp táblában, ha túl régi, nem jó
function Tranzakcio_vizsgalat($tranz_id) {
        global $db;
        
        if( !empty($tranz_id) ) {
            //$db->debug = true;
            $db->Execute("SELECT TransactionId FROM megrendelesek WHERE TransactionId=".qstr($tranz_id));
            return $db->Affected_Rows();    
        } else {
            return 0;
        }
      
    }

function Tranzakcio_vizsgalat2($tranz_id) {
    global $db;
    
    if( !empty($tranz_id) ) {
        $db->Execute("SELECT TransactionId FROM megrendelesek_tmp WHERE TransactionId=".qstr($tranz_id));
        // rend_datum >= DATE(CURDATE()-5) and 
        //rend_datum >= DATE(CURDATE()-1) and
        return $db->Affected_Rows();    
    } else {
        return 0;
    }
  
}

function generateRandomString($length = 10) {
    return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
}

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

        if( !empty($kategoriak) ) {
            foreach( $kategoriak as $elem ) {
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


function hibalevel($rend_id) {
    
     include_once('class.phpmailer.php');
             
     $mail                = new PHPMailer();
     $mail->IsMail();
     $mail->CharSet       = 'utf-8';
     $mail->SetFrom('office@lencsek.hu', 'Lencsék.hu');
     $mail->Subject       = "Értékelés : ".$rend_id;
     
     $body = "<html>
     
     <body>
     A {$rend_id} számú rendelésről ment értékelő levél.
     </body>
     </html>";
     
     $mail->MsgHTML($body);
     $mail->AddAddress('attila@optix.hu');
     $mail->Send();
     
     
}

// termekinfo tömb árakkal, db
function kedvezmenyes_ar($termekinfo, $db) {

    if( $db >= 2 && $termekinfo['termek_ar_2'] > 0) {
        $ar = $termekinfo['termek_ar_2'];
    } else {
        $ar = $termekinfo['termek_ara'];
    }
    
    if( $db >= 4 && $termekinfo['termek_ar_4'] > 0) {
        $ar = $termekinfo['termek_ar_4'];
    }
   
    return $ar;
}

// berak egy rendelést a kosárba
// rend_id : rendelés számát kell megadni

// Hiba: ne rakhassa be csak a saját rendeléseit
// Ha változott az ár, az új árral kerüljön be
// Lehet, hogy az a dioptria kifogyott, közben?
// Lehet a termék is megszünt

// kedvezmény számolás adott termékre
/*
    - végigmegyünk a kosáron, ha a termék szerepel a megadott tömbben számoljuk a kedvezményt
    - figyelni kell a darabszámot és kedvezményes árat is
    - 
    - Pl: kedvezmeny_erre(array('38587'),0.15)
*/
function kedvezmeny_erre($tomb, $kedv) {
    global $_SESSION;
    $kedv_osszeg = 0;
    
    //unset($_SESSION['hiba_kedv']);
    //unset($_SESSION['hiba_osszeg']);
    
    foreach($_SESSION['kosar'] as $elem)  {
        if( in_array($elem['termek_id'],$tomb) ) {
            $kedv_osszeg += round($elem['termek_ar'] * $elem['termek_db'] * $kedv);
            
            // hibakeresés
            //$_SESSION['hiba_kedv'][] = $elem['termek_id'];
            //$_SESSION['hiba_osszeg'][] = round($elem['termek_ar'] * $elem['termek_db'] * $kedv);
        }
        
        
    }
    
    return $kedv_osszeg;
}

function rendeles_kosarba($rend_id) {
    global $nyelv,$db,$_SESSION;
    //$nyelv = 'hu';
    
    
    // Ami megszünt, már bele sem rakjuk
    $egy_rendeles = $db->Execute("
    SELECT
RTETEL.termek_id,
RTETEL.termek_db,
RTETEL.termek_szem,
RTETEL.jell1,
RTETEL.jell2,
RTETEL.jell3,
RTETEL.jell4,
RTETEL.jell5,
RTETEL.jell6,
RTETEL.jell7,
T.termek_nev_{$nyelv} AS termek_nev,
T.termek_alnev_{$nyelv} AS termek_alnev,
IF( T.termek_akcios_ar>0 , T.termek_akcios_ar, T.termek_ar ) as termek_ar,
T.termek_csoport,
T.termek_kep,
T.termek_szallitas_{$nyelv} AS termek_szallitas,
T.termek_suly
FROM
rendeles_tetelek AS RTETEL
INNER JOIN termekek AS T ON RTETEL.termek_id = T.termek_id
WHERE
T.termek_aktiv = 1 AND
T.megszunt = 0 AND
T.lencsek_hu = 1 AND
RTETEL.rend_id=".qstr($rend_id) );

    $egy_rendeles_tomb = $egy_rendeles->GetRows();
    
    
    include_once("class.kosar.php");
    $kos = new Kosar();
    
    foreach($egy_rendeles_tomb as $kulcs => $elem ) {
        // berakunk egy elemet
        $berakom = array();
        
        // rendeles_tetelek táblából
        $berakom['termek_id']   = $elem['termek_id'];
        // ez a termek_db
        $berakom['mennyiseg'][0] = $elem['termek_db'];
        if( $elem['termek_szem'] > 0 ) { $berakom['termek_szem'] = $elem['termek_szem']; }
        if( $elem['jell1'] > 0 ) { $berakom['jell1'][0] = $elem['jell1']; }
        if( $elem['jell2'] > 0 ) { $berakom['jell2'][0] = $elem['jell2']; }
        if( $elem['jell3'] > 0 ) { $berakom['jell3'][0] = $elem['jell3']; }
        if( $elem['jell4'] > 0 ) { $berakom['jell4'][0] = $elem['jell4']; }
        if( $elem['jell5'] > 0 ) { $berakom['jell5'][0] = $elem['jell5']; }
        if( $elem['jell6'] > 0 ) { $berakom['jell6'][0] = $elem['jell6']; }
        
        // termekek táblából jön
        $berakom['termek_ar']        = $elem['termek_ar']; // innen jön mert az aktuálsi ár kell
        $berakom['termek_nev']       = $elem['termek_nev'];
        $berakom['termek_kep']       = $elem['termek_kep'];
        $berakom['termek_alnev']     = $elem['termek_alnev'];
        $berakom['termek_csoport']   = $elem['termek_csoport'];
        $berakom['termek_suly']      = $elem['termek_suly'];
        $berakom['termek_szallitas'] = $elem['termek_szallitas'];
        
        // berakjuk a kosárba
        $kos->berak($berakom);
        
        //print_r($berakom);
        
    }
    
    //print "Kosárba rakom!";
}

?>