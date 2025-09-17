<?php
    //ini_set('display_errors',1);
    //error_reporting(E_ALL);
    
    header('Content-Type: text/html; charset=utf-8');

    //include_once("../includes/sql_fuggvenyek_frissito.php");
    include_once("../includes/class.alap.php");
    //$db->debug = true ;
    
    $out = '';
    
class Pickpackpont extends Adat_vaz {
    
    public function __construct($data) {
        parent::__construct('hely_id'); // meghívjuk a szülő konstructort is

        $this->tablanev = 'pickpackpontok';
        
        // táblában mező neve : formban mező neve
        $this->adat['hely_szulo']      = $data['hely_szulo'];
        $this->adat['hely_nev']        = trim($data['hely_nev']);
        $this->adat['hely_cim']        = strip_tags(trim($data['hely_cim']));
        $this->adat['hely_irsz']       = $data['hely_irsz'];
        $this->adat['hely_bankkartya'] = $data['hely_bankkartya'];
        $this->adat['hely_leiras']     = strip_tags(trim($data['hely_leiras']));
        $this->adat['hely_bolt_kod']   = $data['hely_bolt_kod'];
        $this->adat['tmp_varos']       = strip_tags(trim($data['tmp_varos']));
        $this->adat['tmp_megye']       = strip_tags(trim($data['tmp_megye']));
        $this->adat['hely_bolt']       = $data['hely_bolt'];
        $this->adat['ny_h']            = $data['ny_h'];
        $this->adat['ny_k']            = $data['ny_k'];
        $this->adat['ny_sz']           = $data['ny_sz'];
        $this->adat['ny_cs']           = $data['ny_cs'];
        $this->adat['ny_p']            = $data['ny_p'];
        $this->adat['ny_szo']          = $data['ny_szo'];
        $this->adat['ny_v']            = $data['ny_v'];
        
    }
    
} 
    
    function hely_szulo_vissza($varos,$kerulet) {
        global $db;
        
        $lek = $db->Execute("SELECT hely_id FROM pickpackpontok WHERE hely_nev like \"".trim($varos)."\"");
        
        if( $lek->RecordCount() ) {
            return $lek->fields("hely_id");
        } else {
            return 50;
        }
    }
    
    
    $boltok = array();
    $varos_kell = array();
    
    // Ellenörzés van-e új cím az xml-ben
    $xml = simplexml_load_file("http://partner.pickpackpont.hu/stores/validboltlista.xml");
    $z=0; $j=0;
    
    foreach($xml->children() as $bolt) {
        $z++;
        
        // $bolt->getName()
        //print $bolt->ZipCode .":".$bolt->Name."<br />";
        
        //$boltok[] = array('nev'=> $bolt->Name, 'varos'=> trim($bolt->City) );
        
        $tmp_nev = explode('#', addslashes( strip_tags($bolt->Name)) );
        $egybolt_nev = trim($tmp_nev[0]);
        
        $boltok[] = $bolt->ShopCode; // Elmentjük a boltok neveit
        
        $lek = $db->Execute("SELECT * FROM pickpackpontok WHERE hely_id > 7323 and hely_bolt_kod = '".trim($bolt->ShopCode)."'");
        // hely_nev like \"".$egybolt_nev."\" and
        
        if( $lek->RecordCount() ) { // van rekord
            $egysor = $lek->fields;
            $mod = 0;
            $rec_be = array(); // kiürítjük a tömböt
            $mivaltozott = '';
            // boltkódot veszünk alapúl
            
            // de adat nem egyezik
            if( $bolt->Monday != $egysor['ny_h'] ) { $rec_be['ny_h'] = $bolt->Monday; $mod=1;
                $mivaltozott .= $bolt->Monday." | ".$egysor['ny_h'];
            }
            if( $bolt->Tuesday != $egysor['ny_k'] ) { $rec_be['ny_k'] = $bolt->Tuesday; $mod=1;}
            if( $bolt->Wednesday != $egysor['ny_sz'] ) { $rec_be['ny_sz'] = $bolt->Wednesday; $mod=1;}
            if( $bolt->Thursday != $egysor['ny_cs'] ) { $rec_be['ny_cs'] = $bolt->Thursday; $mod=1;}
            if( $bolt->Friday != $egysor['ny_p'] ) { $rec_be['ny_p'] = $bolt->Friday; $mod=1;}
            if( $bolt->Saturday != $egysor['ny_szo'] ) { $rec_be['ny_szo'] = $bolt->Saturday; $mod=1;}
            if( $bolt->Sunday != $egysor['ny_v'] ) { $rec_be['ny_v'] = $bolt->Sunday; $mod=1;}
            if( trim($bolt->Address) != $egysor['hely_cim'] ) { $rec_be['hely_cim'] = trim($bolt->Address); $mod=1; }
            if( trim($bolt->Description) != $egysor['hely_leiras'] ) { $rec_be['hely_leiras'] = trim($bolt->Description); $mod=1;     $mivaltozott .= $bolt->Description." | ".$egysor['hely_leiras']."<br />";
            
                if( empty($bolt->Description) ) { $rec_be['hely_leiras'] = 'def_'; }
            }
            if( $egybolt_nev != $egysor['hely_nev'] ) { 
                $rec_be['hely_nev'] = $egybolt_nev; $mod=1;
                $mivaltozott .= "->|".$egybolt_nev."|".$egysor['hely_nev']."|\n";
            }
            if( $bolt->ZipCode != $egysor['hely_irsz'] ) { $rec_be['hely_irsz'] = $bolt->ZipCode; $mod=1;
                $mivaltozott .= $bolt->ZipCode." | ".$egysor['hely_irsz'];
            }
            if( trim($bolt->City) != $egysor['tmp_varos'] ) { $rec_be['tmp_varos'] = trim($bolt->City); $mod=1;
                $mivaltozott .= $bolt->City." | ".$egysor['tmp_varos'];
            }
            if( trim($bolt->Area) != $egysor['tmp_megye'] ) { $rec_be['tmp_megye'] = trim($bolt->Area); $mod=1;
                $mivaltozott .= $bolt->Area." | ".$egysor['tmp_megye'];
            }
            if( trim($bolt->ShopType) != $egysor['hely_bolt'] ) { $rec_be['hely_bolt'] = trim($bolt->ShopType); $mod=1;
                $mivaltozott .= $bolt->ShopType." | ".$egysor['hely_bolt'];
            }
            
            //if( $bolt->IsBankCard != $egysor['hely_bankkartya'] ) { $rec_be['hely_bankkartya'] = 1; $mod=1;
            //    print $bolt->IsBankCard." | ".$egysor['hely_bankkartya'];
            //}
            //if( $bolt->ShopCode != $egysor['hely_bolt_kod'] ) { $rec_be['hely_bolt_kod'] = $bolt->ShopCode; $mod=1;
            //    print $bolt->ShopCode." | ".$egysor['hely_bolt_kod'];
            //}
            
            // print $bolt->Address." | ".$egysor['hely_cim'];
            
            if( $mod==1 ) {
                $ujpont = new Pickpackpont($rec_be);
                
                if( !empty($egybolt_nev) ) {
                    $mod_id = $ujpont->modositas($egysor['hely_id']);
                }
                
                $out = "[".$bolt->ShopCode."] Módosítva: ".$egybolt_nev."\n";
                $out .= $mivaltozott;
            } else {
                //print "Van: ".$egybolt_nev."<br />";
            }
           
        } else { // nincs rekord
            $j++;
            
            $varos = trim($bolt->City);
            
            if( $varos == 'Budapest') {
                $varos = trim($bolt->City)." ".trim($bolt->Area)."%";
            }
            
            $hely_szulo_tmp = hely_szulo_vissza($varos,trim($bolt->ZipCode));
            
            $out .= "{$j}. Nincs:({$bolt->ShopCode}) ".$egybolt_nev." : ".$hely_szulo_tmp." : {$bolt->City} : {$bolt->Area} (".hely_szulo_vissza(trim($bolt->Area)).") \n";
            
            if( $hely_szulo_tmp == 50 ){
                $varos_kell[] = trim($bolt->City);
            }
            
            
            $rec_be['hely_szulo'] = $hely_szulo_tmp;
            $rec_be['hely_nev'] = $egybolt_nev;
            $rec_be['hely_cim'] = $bolt->Address;
            $rec_be['hely_irsz'] = $bolt->ZipCode;
            $rec_be['hely_bankkartya'] = $bolt->IsBankCard;
            $rec_be['hely_leiras'] = $bolt->Description;
            $rec_be['hely_bolt_kod'] = $bolt->ShopCode;
            
            $rec_be['tmp_varos'] = $bolt->City;
            $rec_be['tmp_megye'] = $bolt->Area;
            $rec_be['hely_bolt'] = $bolt->ShopType;
            
            $rec_be['ny_h'] = $bolt->Monday;
            $rec_be['ny_k'] = $bolt->Tuesday;
            $rec_be['ny_sz'] = $bolt->Wednesday;
            $rec_be['ny_cs'] = $bolt->Thursday;
            $rec_be['ny_p'] = $bolt->Friday;
            $rec_be['ny_szo'] = $bolt->Saturday;
            $rec_be['ny_v'] = $bolt->Sunday;
            
            if( !empty($egybolt_nev) ) {
                $ujpont = new Pickpackpont($rec_be);  
            }
            
            
            //if( $_GET['felvenni'] == 'i' ) {
            // automatikus felvétel
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
    
    //$out .= "<hr />\n";
    $out .= "-------------------------------------------------------------------\n";
    // Ellenörzés megvan-e még a hely, ki kell őket törölni
    
    $lek = $db->Execute("SELECT * FROM pickpackpontok WHERE hely_id > 7323"); // Megyék itt vége
    
    while( !$lek->EOF ) {
        $sor = $lek->fields;
        
        if( in_array($sor['hely_bolt_kod'],$boltok) ) {
            
        } else {
            $out .= "Nincs már:({$sor['hely_bolt_kod']}) ". $sor['hely_nev']."\n";
            
            //if( $_GET['torolni'] == 'i') {
            // automatikus törlés
                $torles = $db->Execute("DELETE FROM pickpackpontok WHERE hely_id = \"{$sor['hely_id']}\"");
                //print "DELETE FROM pickpackpontok WHERE hely_id = \"{$sor['hely_id']}\"";
            //}
        }
        
        //print $sor['hely_nev']."<br />";
            
        $lek->MoveNext();
    }
    
    
    foreach($varos_kell as $item_name) {
        $out .= $item_name."\n";
    }
    
    $out .= "\nPick-Pack frissítve!\n";
    
    print $out;
    
    mail('naplo@irodaiszerver.hu','Pick-Pack frissítés',$out,"Content-Type: text/plain; charset=UTF-8");
?>