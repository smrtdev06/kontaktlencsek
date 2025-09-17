<?php

include_once("class.alap.php");
 
class Latogato extends Adat_vaz {
    
    public function __construct($data = []) {
        parent::__construct('id'); // meghívjuk a szülő konstructort is
       
        $this->tablanev = 'infok.latogatok';
        
        // táblában mező neve : formban mező neve
        $this->adat['ip']              = $_SERVER['REMOTE_ADDR'];
        $this->adat['datum']           = date("Y-m-d H:i:s");
        $this->adat['url']             = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; //$_SERVER['SCRIPT_URI'];
        $this->adat['orszag']          = $data['orszag'];
        $this->adat['ajanlo']          = $_SERVER['HTTP_REFERER'];
        $this->adat['user_agent']      = $_SERVER['HTTP_USER_AGENT'];
        $this->adat['query_string']    = $_SERVER['QUERY_STRING'];
        $this->adat['method']          = $_SERVER['REQUEST_METHOD'];
        $this->adat['felh_id']         = $_SESSION['user'];

        $this->felvetel();
    }
    
    public static function save()
    {
        return new Latogato();
    }
} 

?>