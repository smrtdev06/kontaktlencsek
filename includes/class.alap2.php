<?php

include_once("sql_fuggvenyek2.php");

class Adat_vaz2
{
    var $id;
    
    // meg kell adni
    var $tablanev;
    public $adat = array(); // csak ami a táblához kell;
    
    //var $tetelek = array();
                      
    // az adat ahonnan érkezik vagy id amit be kell tölteni
    public function __construct($idmezo) {
        $this->adat['idmezo'] = $idmezo; // ez ki van védve az sql_insert-ben
    }
       
    // megrendelés felvétele
    public function felvetel() {
        $this->id = sql_insert($this->tablanev,$this->adat);
        
        return $this->id;
    }

    // megrendelés módosítása
    // $id ami a megrendelés id mezõjének értéke
    public function modositas($id) {
        sql_update($this->tablanev,$this->adat,$this->adat['idmezo']."='{$id}'");
    }

    public function torles($id, $tipus=0) {
        sql_delete($this->tablanev,"{$this->adat['idmezo']}='{$id}'",$tipus);
    }

    function adat_vissza($id) {
        $data = lekerdezes("SELECT * FROM {$this->tablanev} WHERE {$this->adat['idmezo']}='{$id}'");
        
        return $data->fields;
    }
    
    function teszt() {
        return $this->adat;
    }
}


/* 
    haszn�lat


class Kiado_form extends Adat_vaz {

    public function __construct($data,$betoltes_id=0) {
        parent::__construct($data,'kiado_id',$betoltes_id);
        
        $this->tablanev = 'kiadok';
        
        // ide lehet felsorolni de felesleges, vagy ha módosítani kell az adaton
        
        //$this->adat['kiado_nev'] = utf8_encode($data['kiado_nev']);
        //$this->adat['kiado_tel'] = $data['kiado_tel'];
        
    }
}

$adatok['kiado_nev'] = 'Attila teszt';
$kform = new Kiado_form($adatok);

// új felvétel
$kform->felvetel();

// módosítás
$kform->modositas($id);

// törlés
$kform->torles($id);

*/

?>