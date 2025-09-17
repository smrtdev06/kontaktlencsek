<?php
    include_once("class.alap.php");
    

class Termek extends Adat_vaz {
    function Termek($data) {
        Adat_vaz::Adat_vaz($data,'termek_id'); // megh�vjuk a sz�l� konstructort is

        $this->tablanev = 'termek';


        $this->adat['termek_nev']     = $data['termek_nev'];
        // t�bl�ban mez� neve : formban mez� neve
        $this->adat['termek_marka']    = $data['termek_marka'];
        $this->adat['termek_marka_l']  = $data['termek_marka_l'];
        $this->adat['termek_ar1']      = $data['termek_ar1'];
        $this->adat['termek_ar1_l']         = $data['termek_ar1_l'];

        $this->adat['termek_ar2'] = $data['termek_ar2'];
        $this->adat['termek_ar2_l'] = $data['termek_ar2_l'];

        $this->adat['termek_ar3']     = $data['termek_ar3'];
        $this->adat['termek_ar3_l']    = $data['termek_ar3_l'];

        $this->adat['termek_ar4'] = $data['termek_ar4'];
        $this->adat['termek_ar4_l'] = $data['termek_ar4_l'];

        $this->adat['termek_raktaron']  = $data['termek_raktaron'];
        $this->adat['termek_raktaron_l'] = $data['termek_raktaron_l'];
        $this->adat['termek_kep']     = $data['termek_kep'];
        $this->adat['termek_leiras']   = $data['termek_leiras'];

        $this->adat['termek_leiras_l'] = $data['termek_leiras_l'];

        $this->adat['termek_modell']  = $data['termek_modell'];
        $this->adat['termek_szin'] = $data['termek_szin'];
        $this->adat['termek_rovid_leiras'] = $data['termek_rovid_leiras'];
        $this->adat['termek_holvan'] = $data['termek_holvan'];
        $this->adat['termek_hangszer_tipus'] = $data['termek_hangszer_tipus'];
        // itt csak azok ker�lnek be amik val�ban vannak a t�bl�ban, ha t�bb lenne a t�mben azok nem tudnak
        // az inserthez �s az updatehez kell
    }

}

class Oldal extends Adat_vaz {
    function Oldal($data) {
        Adat_vaz::Adat_vaz($data,'old_id'); // megh�vjuk a sz�l� konstructort is

        $this->tablanev = 'oldalak';

        // t�bl�ban mez� neve : formban mez� neve
        $this->adat['old_nev']     = $data['old_nev'];
        $this->adat['old_tip']     = $data['old_tip'];
        $this->adat['old_allapot'] = $data['old_allapot'];
        // itt csak azok ker�lnek be amik val�ban vannak a t�bl�ban, ha t�bb lenne a t�mben azok nem tudnak
        // az inserthez �s az updatehez kell
    }

}

class Partner extends Adat_vaz {
    function Partner($data) {
        Adat_vaz::Adat_vaz($data,'pid');

        $this->tablanev = 'partnerek';

        $this->adat['partner_nev']    = $data['partner_nev'];
        $this->adat['partner_link']   = $data['partner_link'];
        $this->adat['partner_megye']  = $data['partner_megye'];
        $this->adat['partner_email']  = $data['partner_email'];
        $this->adat['partner_cim']    = $data['partner_cim'];
        $this->adat['partner_tel']    = $data['partner_tel'];
        $this->adat['partner_fax']    = $data['partner_fax'];
        $this->adat['partner_leiras'] = $data['partner_leiras'];

    }

}

?>