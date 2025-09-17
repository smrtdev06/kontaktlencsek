<?php

  include_once("class.alap.php");
 
class Webgalamb extends Adat_vaz {
    function __construct($data) {
        parent::__construct('id'); // meghívjuk a szülő konstructort is : itt volt egy nagy hiba

        $this->tablanev = 'wg5_users';

        // táblában mező neve : formban mező neve
        $this->adat['datum']       = date("Y-m-d H:i:s");
        $this->adat['mdatum']       = date("Y-m-d H:i:s");
        $this->adat['ip']          = $_SERVER['REMOTE_ADDR'];
        //$this->adat['name']        = $data['name'];
        $this->adat['mail']        = $data['mail'];
        $this->adat['verify_code'] = base64_encode( date("Y-m-d H:i:s") );
        $this->adat['mail_id']     = 1;
        $this->adat['active']      = 1;
        $this->adat['g'] = 12;
    }

    function feliratkozas() {
        sql_run("USE wg2015;");
        $keres = lekerdezes_tombbe("SELECT id,mail FROM wg5_users WHERE g=1 and mail='{$this->adat['mail']}'");

        if( !empty($keres['id']) ) {
            // megvan a táblában
            $this->modositas($keres['id']);
            
        } else {
            // nincs meg benne, vegyük fel
            $this->felvetel();
        }
        sql_run("USE kontaktlencsek_hu;");
    }
    
    function leiratkozas() {
        sql_run("USE wg2015;");
        $keres = lekerdezes_tombbe("SELECT id,mail FROM wg5_users WHERE g=1 and mail='{$this->adat['mail']}'");
        if( !empty($keres['id']) ) {
            // megvan a táblában
            $this->adat['active'] = 0;
            $this->modositas($keres['id']);
        }
        sql_run("USE kontaktlencsek_hu;");
    }
} 



?>