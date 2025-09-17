<?php

include_once("class.alap.php");
 
class Felhasznalo extends Adat_vaz {
    
    public function __construct($data) {
        parent::__construct('felh_id'); // meghívjuk a szülő konstructort is

        $this->tablanev = 'felhasznalok';
        
        // táblában mező neve : formban mező neve
        $this->adat['felh_email']      = trim($data['felh_email']);
        $this->adat['felh_csaladnev']  = trim($data['felh_csaladnev']);
        $this->adat['felh_keresztnev'] = trim($data['felh_keresztnev']);
        $this->adat['felh_jelszo']     = $data['felh_jelszo'];
        $this->adat['felh_telefon']    = $data['felh_telefon'];
        $this->adat['felh_mobil1']     = $data['felh_mobil1'];
        $this->adat['felh_mobil2']     = $data['felh_mobil2'];
        $this->adat['felh_varos']      = $data['felh_varos'];
        $this->adat['felh_utca']       = $data['felh_utca'];
        $this->adat['felh_irsz']       = $data['felh_irsz'];
        $this->adat['felh_megye']      = $data['felh_megye'];
        $this->adat['felh_utolsobelepes'] = $data['felh_utolsobelepes'];
        $this->adat['felh_szmegye']    = $data['felh_szmegye'];
        $this->adat['felh_szvaros']    = $data['felh_szvaros'];
        $this->adat['felh_szutca']     = $data['felh_szutca'];
        $this->adat['felh_szirsz']     = $data['felh_szirsz'];
		$this->adat['felh_adoszam']     = $data['felh_adoszam'];
		$this->adat['felh_regszam']     = $data['felh_regszam'];
        $this->adat['felh_szamlanev']  = $data['felh_szamlanev'];
        $this->adat['felh_egpenztar']  = $data['felh_egpenztar'];
        $this->adat['felh_egazon']     = $data['felh_egazon'];
        $this->adat['felh_tagnev']     = $data['felh_tagnev'];
        $this->adat['felh_kedvezmenyezett'] = $data['felh_kedvezmenyezett'];
        $this->adat['felh_megjegyzes'] = $data['felh_megjegyzes'];
        $this->adat['felh_nyelv']      = $data['felh_nyelv'];
        $this->adat['felh_token']      = $data['felh_token'];
        $this->adat['felh_ip_cim']     = $data['felh_ip_cim'];
        //$this->adat['raktaron_kerelem'] = $data['raktaron_kerelem'];
        //$this->adat['felh_nemvette_at'] = $data['felh_nemvette_at'];
    }
    
} 
    
function nem_tiltott_email($email) {
    $v = 1;
    
    $email_tomb = explode("@",$email,2);
    
    if( $email_tomb[1] == "o2.pl") {
        $v = 0;
    }
    
    return $v;
}
    
function beleptetes($adat) {
    global $_SESSION;
    $email = trim($adat['felh_email']);
    
    $user_adat = lekerdezes_tombbe("SELECT felh_id FROM felhasznalok WHERE felh_email='".$email."' and felh_jelszo=".qstr(trim($adat['felh_jelszo'])) );
    
    
    
    
    
    
    if( is_array($user_adat) and
        count($user_adat) and
        nem_tiltott_email($email) ) {
        
        log_fileba("includes/log/jo_belepes.log",$email."|".date("Y-m-d H:i:s")."|".$_SERVER['REMOTE_ADDR']."| belépett.\n");
        /*
        include_once('class.verifyEmail.php');
        $vmail = new verifyEmail();
        $vmail->setStreamTimeoutWait(20);
        $vmail->setEmailFrom('iroda@kontaktlencsek.hu');
        
        $_SESSION['valide'] = $vmail->check($email);
        
        if( !$_SESSION['valide'] ) {
            log_fileba("includes/log/hibas_email.log",$email."|".date("Y-m-d H:i:s")."|".$_SERVER['REMOTE_ADDR']."| rossz e-mail.\n");
        }
        */
        return $user_adat['felh_id'];
    } else {
        
        log_fileba("includes/log/hibas_belepes.log",$email."|".date("Y-m-d H:i:s")."|".$_SERVER['REMOTE_ADDR']."| rossz jelszóval akart belépni.\n");
        
        return 0;
    }
}

// e-mail alapján user ellnőrzés : jelszóváltoztatáshoz
function user_ellenorzes($adatbe) {
    $user_adat = lekerdezes_tombbe("SELECT felh_id FROM felhasznalok WHERE felh_email=".qstr(trim($adatbe)) );
    
    if( is_array($user_adat) and count($user_adat) ) {
        return $user_adat['felh_id'];
    } else {
        return 0;
    }
}

function log_fileba($filenev,$uzenet){
    $fp = fopen($filenev, 'a');
    fwrite($fp, $uzenet);
    fclose($fp);
}

?>