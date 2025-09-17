<?php

  include_once("class.alap.php");
 
class Hirlevel extends Adat_vaz {
    function __construct($data) {
        parent::__construct($data,'tag_id'); // meghívjuk a szülő konstructort is

        $this->tablanev = 'hirlevel';

        // táblában mező neve : formban mező neve
        $this->adat['tag_nev']   = $data['tag_nev'];
        $this->adat['tag_email'] = $data['tag_email'];
        $this->adat['tag_nyelv'] = $data['tag_nyelv'];
        $this->adat['tag_aktiv'] = $data['tag_aktiv'];
    }

} 

?>