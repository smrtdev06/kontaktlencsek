<?php

include_once("class.alap.php");
 
class Megrendeles extends Adat_vaz {
    function __construct($data) {
        parent::__construct($data,'rend_id'); // meghívjuk a szülő konstructort is

        $this->tablanev = 'megrendelesek';

        // táblában mező neve : formban mező neve
        $this->adat['rend_datum']       = date("Y-m-d H:i:s");
        $this->adat['rend_felh_id']     = $data['rend_felh_id'];
        $this->adat['rend_varos']       = $data['rend_varos'];
        $this->adat['rend_megye']       = $data['rend_megye'];
        $this->adat['rend_utca']        = $data['rend_utca'];
        $this->adat['rend_irsz']        = $data['rend_irsz'];
        $this->adat['rend_szaml_varos'] = $data['rend_szaml_varos'];
        $this->adat['rend_szaml_irsz']  = $data['rend_szaml_irsz'];
        $this->adat['rend_szaml_megye'] = $data['rend_szaml_megye'];
        $this->adat['rend_szaml_utca']  = $data['rend_szaml_utca'];
        $this->adat['rend_egpenztar']   = $data['rend_egpenztar'];
        $this->adat['rend_egazon']      = $data['rend_egazon'];
        $this->adat['rend_osszesen']    = $data['rend_osszesen'];
        $this->adat['fiz_mod']          = $data['fiz_mod'];
        $this->adat['szall_mod']        = $data['szall_mod'];
        $this->adat['rend_szamlanev']   = $data['rend_szamlanev'];
        $this->adat['rend_rendnev']     = $data['rend_rendnev'];
        $this->adat['rend_telefon']     = $data['rend_telefon'];
        $this->adat['rend_telefon2']     = $data['rend_telefon2'];
        $this->adat['rend_megjegyzes']  = $data['rend_megjegyzes'];    
        $this->adat['rend_allapot']     = $data['rend_allapot'];
        $this->adat['rend_szallitasikoltseg'] = $data['rend_szallitasikoltseg'];
        $this->adat['rend_suly']        = $data['rend_suly'];
        $this->adat['rend_bolt_kod']    = $data['rend_bolt_kod'];
        
        $this->adat['TransactionId']    = $data['TransactionId'];
        $this->adat['ResultMessage']    = $data['ResultMessage'];
        $this->adat['ProviderTransactionId'] = $data['ProviderTransactionId'];
        $this->adat['Anum']             = $data['Anum'];
        $this->adat['ujfizmod']         = $data['ujfizmod'];
        $this->adat['rend_premium_futar'] = $data['rend_premium_futar'];
        $this->adat['rend_sms_ertesites'] = $data['rend_sms_ertesites'];
        $this->adat['rend_tel_ertesites'] = $data['rend_tel_ertesites'];
        $this->adat['level_ment']       = $data['level_ment'];
        $this->adat['rend_bolt_id']     = $data['rend_bolt_id'];
        $this->adat['rend_bolt_id2']    = $data['rend_bolt_id2'];
        $this->adat['rend_ajandek_azon'] = $data['rend_ajandek_azon'];
        $this->adat['rend_ip_cim']      = $_SERVER['REMOTE_ADDR'];
        $this->adat['kedvezmeny']       = $data['kedvezmeny'];
        $this->adat['aznapi_atvetel']   = $data['aznapi_atvetel'];
        //$this->adat['rend_orszag']      = geoip_country_code3_by_name($_SERVER['REMOTE_ADDR']);
        $this->adat['raktaron_kerelem'] = $data['raktaron_kerelem'];
                
        if( !empty($this->adat['rend_ajandek_azon']) ) {
            $this->adat['rend_megjegyzes'] .= "\nAjándék : ".$this->adat['rend_ajandek_azon'];
        }
        
        $this->adat['rend_uzletkoto_id'] = $data['rend_uzletkoto_id'];
    }
} 

class Rendeles_tetel extends Adat_vaz {
    function __construct($data) {
        parent::__construct($data,'tetel_id'); // meghívjuk a szülő konstructort is

        $this->tablanev = 'rendeles_tetelek';

        // táblában mező neve : formban mező neve
        $this->adat['rend_id']      = $data['rend_id'];
        $this->adat['termek_id']    = $data['termek_id'];
        $this->adat['termek_db']    = $data['termek_db'];
        $this->adat['termek_ar']    = $data['termek_ar'];
        $this->adat['termek_szem']  = $data['termek_szem'];
        $this->adat['jell1']        = $data['jell1'];
        $this->adat['jell2']        = $data['jell2'];
        $this->adat['jell3']        = $data['jell3'];
        $this->adat['jell4']        = $data['jell4'];
        $this->adat['jell5']        = $data['jell5'];
        $this->adat['jell6']        = $data['jell6'];
        $this->adat['jell7']        = $data['jell7'];
        
    }

}    


class Megrendeles_tmp extends Adat_vaz {
    function __construct($data) {
        parent::__construct($data,'rend_id'); // meghívjuk a szülő konstructort is

        $this->tablanev = 'megrendelesek_tmp';

        // táblában mező neve : formban mező neve
        $this->adat['rend_datum']       = date("Y-m-d H:i:s");
        $this->adat['rend_felh_id']     = $data['rend_felh_id'];
        $this->adat['rend_varos']       = $data['rend_varos'];
        $this->adat['rend_megye']       = $data['rend_megye'];
        $this->adat['rend_utca']        = $data['rend_utca'];
        $this->adat['rend_irsz']        = $data['rend_irsz'];
        $this->adat['rend_szaml_varos'] = $data['rend_szaml_varos'];
        $this->adat['rend_szaml_irsz']  = $data['rend_szaml_irsz'];
        $this->adat['rend_szaml_megye'] = $data['rend_szaml_megye'];
        $this->adat['rend_szaml_utca']  = $data['rend_szaml_utca'];
        $this->adat['rend_egpenztar']   = $data['rend_egpenztar'];
        $this->adat['rend_egazon']      = $data['rend_egazon'];
        $this->adat['rend_osszesen']    = $data['rend_osszesen'];
        $this->adat['fiz_mod']          = $data['fiz_mod'];
        $this->adat['szall_mod']        = $data['szall_mod'];
        $this->adat['rend_szamlanev']   = $data['rend_szamlanev'];
        $this->adat['rend_rendnev']     = $data['rend_rendnev'];
        $this->adat['rend_telefon']     = $data['rend_telefon'];
        $this->adat['rend_telefon2']    = $data['rend_telefon2'];
        $this->adat['rend_megjegyzes']  = $data['rend_megjegyzes'];
        $this->adat['rend_allapot']     = $data['rend_allapot'];
        $this->adat['rend_szallitasikoltseg'] = $data['rend_szallitasikoltseg'];
        $this->adat['rend_suly']          = $data['rend_suly'];
        $this->adat['rend_tranzakcio_id'] = $data['rend_tranzakcio_id'];
        $this->adat['rend_bolt_kod']      = $data['rend_bolt_kod'];
        $this->adat['TransactionId']      = $data['TransactionId'];
        $this->adat['ResultMessage']      = $data['ResultMessage'];
        $this->adat['ProviderTransactionId'] = $data['ProviderTransactionId'];
        $this->adat['Anum']               = $data['Anum'];
        $this->adat['ujfizmod']           = $data['ujfizmod'];
        $this->adat['rend_premium_futar'] = $data['rend_premium_futar'];
        $this->adat['rend_sms_ertesites'] = $data['rend_sms_ertesites'];
        $this->adat['rend_tel_ertesites'] = $data['rend_tel_ertesites'];
        $this->adat['rend_bolt_id']       = $data['rend_bolt_id'];
        $this->adat['rend_bolt_id2']      = $data['rend_bolt_id2'];
        $this->adat['rend_ajandek_azon']  = $data['rend_ajandek_azon'];
        $this->adat['aznapi_atvetel']     = $data['aznapi_atvetel'];
        //$this->adat['rend_orszag']        = geoip_country_code3_by_name($_SERVER['REMOTE_ADDR']);
        $this->adat['raktaron_kerelem']   = $data['raktaron_kerelem'];
        $this->adat['rend_uzletkoto_id']  = $data['rend_uzletkoto_id'];
    }

} 

class Rendeles_tetel_tmp extends Adat_vaz {
    function __construct($data) {
        parent::__construct($data,'tetel_id'); // meghívjuk a szülő konstructort is

        $this->tablanev = 'rendeles_tetelek_tmp';

        // táblában mező neve : formban mező neve
        $this->adat['rend_id']      = $data['rend_id'];
        $this->adat['termek_id']    = $data['termek_id'];
        $this->adat['termek_db']    = $data['termek_db'];
        $this->adat['termek_ar']    = $data['termek_ar'];
        $this->adat['termek_szem']  = $data['termek_szem'];
        $this->adat['jell1']        = $data['jell1'];
        $this->adat['jell2']        = $data['jell2'];
        $this->adat['jell3']        = $data['jell3'];
        $this->adat['jell4']        = $data['jell4'];
        $this->adat['jell5']        = $data['jell5'];
        $this->adat['jell6']        = $data['jell6'];
        $this->adat['jell7']        = $data['jell7'];
        
    }

}   


?>