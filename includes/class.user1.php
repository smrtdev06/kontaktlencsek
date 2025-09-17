<?php

include_once("class.alap.php");
 
class Felhasznalo extends Adat_vaz {
    
    public function __construct($data) {
        parent::__construct('felh_id'); // meghívjuk a szülő konstructort is

        $this->tablanev = 'felhasznalok';
        
        // táblában mező neve : formban mező neve
        $this->adat['felh_email']      = $data['felh_email'];
        $this->adat['felh_csaladnev']  = $data['felh_csaladnev'];
        $this->adat['felh_keresztnev'] = $data['felh_keresztnev'];
        $this->adat['felh_jelszo']     = $data['felh_jelszo'];
        $this->adat['felh_telefon']    = $data['felh_telefon'];
        $this->adat['felh_varos']      = $data['felh_varos'];
        $this->adat['felh_utca']       = $data['felh_utca'];
        $this->adat['felh_irsz']       = $data['felh_irsz'];
        $this->adat['felh_megye']      = $data['felh_megye'];
        $this->adat['felh_utolsobelepes'] = $data['felh_utolsobelepes'];
        $this->adat['felh_szmegye']    = $data['felh_szmegye'];
        $this->adat['felh_szvaros']    = $data['felh_szvaros'];
        $this->adat['felh_szutca']     = $data['felh_szutca'];
        $this->adat['felh_szirsz']     = $data['felh_szirsz'];
        $this->adat['felh_szamlanev']  = $data['felh_szamlanev'];
        $this->adat['felh_egpenztar']  = $data['felh_egpenztar'];
        $this->adat['felh_egazon']     = $data['felh_egazon'];
        $this->adat['felh_tagnev']     = $data['felh_tagnev'];
        $this->adat['felh_megjegyzes'] = $data['felh_megjegyzes'];
    }
    
} 
    
function beleptetes($adat) {
    $user_adat = lekerdezes_tombbe("SELECT felh_id FROM felhasznalok WHERE felh_email='{$adat['felh_email']}' and felh_jelszo='{$adat['felh_jelszo']}'");
    
    if( is_array($user_adat) and count($user_adat) ) {
        return $user_adat['felh_id'];
    } else {
        return 0;
    }
}
?>