<?php
    //ini_set('display_errors',1);
    //error_reporting(E_ALL);
   
    //include_once("../includes/sql_fuggvenyek_frissito.php");
    include_once("../includes/class.alap.php");
    //$db->debug = true ;
    
    class Foxpost extends Adat_vaz {
    
        public function __construct($data) {
            parent::__construct('hely_id'); // meghívjuk a szülő konstructort is

            $this->tablanev = 'foxpost';
           
            // táblában mező neve : formban mező neve
            $this->adat['hely_szulo']    = $data['hely_szulo'];
            $this->adat['hely_nev']      = $data['hely_nev'];
            $this->adat['hely_varos']    = $data['hely_varos'];
            $this->adat['hely_cim']      = $data['hely_cim'];
            $this->adat['hely_open']     = $data['hely_open'];
            $this->adat['hely_findme']   = $data['hely_findme'];
            $this->adat['hely_bolt_kod'] = $data['hely_bolt_kod'];
        }
        
    } 
    
    function hely_szulo_vissza($varos) {
        global $db;
        
        $lek = $db->Execute("SELECT hely_id FROM foxpost WHERE hely_nev like \"".trim($varos)."\"");
        
        if( $lek->RecordCount() ) {
            return $lek->fields("hely_id");
        } else {
            return 50;
        }
    }
    
    $ch = curl_init("http://cdn.foxpost.hu/foxpost_terminals_extended_v3.json");
    //curl_setopt($ch, CURLOPT_URL, "https://api.foxpost.hu/ecomm/places");
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch,CURLOPT_HEADER,"Accept:application/vnd.cleveron+json; version=1.0");
    curl_setopt($ch,CURLOPT_HEADER,"Content-Type:application/vnd.cleveron+xml");
    //curl_setopt($ch,CURLOPT_USERPWD,"O3_Optika:ac1lawo19ue7");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $boltok = curl_exec($ch);
    curl_close($ch);
    $boltok = json_decode($boltok);

    header('Content-Type: text/html; charset=utf-8');
    
    
    /*
    print "<table>\n";
    foreach( $boltok as $item ) {
        print "<tr><td>".$item->place_id."</td>
        <td>".$item->name."</td>
        <td>".$item->group."</td>
        <td>".$item->address."</td>
        <td>".$item->open."</td>
        <td>".$item->findme."</td>
        </tr>\n";   
    }
    print "</table>";
    */
    
    
    // végigjárjuk a tömböt
    $z=0;
    foreach($boltok as $bolt) {
        $z++;
        
        $egybolt_nev = trim($bolt->name);
        
        $boltok[] = $egybolt_nev; // Elmentjük a boltok neveit
        
        $lek = $db->Execute("SELECT * FROM foxpost WHERE hely_nev like \"".$egybolt_nev."\" and hely_bolt_kod = '{$bolt->place_id}'");
        if( $lek->RecordCount() ) { // van rekord
            $egysor = $lek->fields;
            $mod = 0;
            $rec_be = array(); // kiürítjük a tömböt
            
            // de adat nem egyezik
            if( trim($bolt->address) != $egysor['hely_cim'] ) { $rec_be['hely_cim'] = trim($bolt->address); $mod=1; }
            if( $bolt->open != $egysor['hely_open'] ) { $rec_be['hely_open'] = $bolt->open; $mod=1;}
            if( $bolt->findme != $egysor['hely_findme'] ) { $rec_be['hely_findme'] = $bolt->findme; $mod=1;}
            
            if( $mod==1 ) {
                $ujpont = new Foxpost($rec_be);
                
                if( !empty($egybolt_nev) ) {
                    $mod_id = $ujpont->modositas($egysor['hely_id']);
                }
                
                print "[".$z."] "; print "Módosítva: ".$egybolt_nev." (".$egysor['hely_bolt_kod'].")\n";
            } else {
                //print "[".$z."] "." Van: ".$egybolt_nev."<br />\n";
            }
           
        } else { // nincs rekord
            print "Nincs még: ".$egybolt_nev." : {$bolt->group} \n";
            
            $rec_be['hely_szulo']    = hely_szulo_vissza($bolt->group);
            $rec_be['hely_nev']      = $egybolt_nev;
            $rec_be['hely_cim']      = trim($bolt->address);
            $rec_be['hely_open']     = $bolt->open;
            $rec_be['hely_findme']   = $bolt->findme;
            $rec_be['hely_bolt_kod'] = $bolt->place_id;
            $rec_be['hely_varos']     = trim($bolt->group);

            if( !empty($egybolt_nev) ) {
                $ujpont = new Foxpost($rec_be);    
            }
            
            //if( $_GET['felvenni'] == 'i' ) {
                $uj_hely_id = $ujpont->felvetel();
            //}
            
            //print_r($rec_be);
            
            /* // Minta adatok
            
            <ZipCode>1164</ZipCode>
            <City> Budapest</City>
            <Area>XVI.</Area>
            <Address> Szabadföldi út 1.</Address>
            <Name>LEE-MIX Kft. (OMV)</Name>
            <ShopType>OMV</ShopType>
            <ShopCode>101005</ShopCode>
            <Monday>00:00-24:00</Monday>
            <Tuesday>00:00-24:00</Tuesday>
            <Wednesday>00:00-24:00</Wednesday>
            <Thursday>00:00-24:00</Thursday>
            <Friday>00:00-24:00</Friday>
            <Saturday>00:00-24:00</Saturday>
            <Sunday>00:00-24:00</Sunday>
            <IsBankCard>X</IsBankCard>
            <Description/>
            <Status/>
            <Lat>47,51770</Lat>
            <Lng>19,21439</Lng>
            */
        }
        
        
    }

    
    
    //print "<a href=\"{$_SERVER['PHP_SELF']}?felvenni=i\">Felvétel</a> - <a href=\"{$_SERVER['PHP_SELF']}?torolni=i\">Törlés</a><br /><br />";
    
    
    
    
    print "<hr />\n";
    // Ellenörzés megvan-e még a hely, ki kell őket törölni
    
    $lek = $db->Execute("SELECT * FROM foxpost WHERE hely_id > 7323"); // Megyék itt vége
    
    while( !$lek->EOF ) {
        $sor = $lek->fields;
        
        if( in_array($sor['hely_nev'],$boltok) ) {
            
        } else {
            print "Nincs már meg: ({$sor['hely_id']})". $sor['hely_nev']."\n";
            
            //if( $_GET['torolni'] == 'i') {
                $torles = $db->Execute("DELETE FROM foxpost WHERE hely_nev like \"{$sor['hely_nev']}\"");
                //print "DELETE FROM pickpackpontok WHERE hely_nev like \"{$sor['hely_nev']}\"";
            //}
        }
        
        //print $sor['hely_nev']."<br />";
            
        $lek->MoveNext();
    }
    
    
    
?>