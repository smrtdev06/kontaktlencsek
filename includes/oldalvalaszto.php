    <?php
        switch($oldal) {
            // kosár oldal
            case $alnev['kosar']:
                $tartalom = SBNEV."/cart.tpl";
            break;
            
            // belépés oldal
            case $alnev['belepes']:
                $tartalom = SBNEV."/login.tpl";
            break;
            
            case $alnev['termek']:
                $tartalom = SBNEV."/termek-adatok.tpl";
            break;
            
            // gyártók nézete
            case 'gyarto_nezet':
                $szuro = " and termek_gyarto_id={$gyarto_id}";
                
                include_once("modulok/termeklista.php");
                $tartalom = SBNEV."/termeklista.tpl";
            break;
            
            //------------------------------------
            case $alnev['kapcsolat']:
                $tartalom = SBNEV."/kapcsolat.tpl"; // {$nyelv}
            break;
            
            case $alnev['adatvedelmi']:
                $tartalom = "{$nyelv}/adatvedelmi_nyilatkozat.tpl";
            break;
            
            case $alnev['altalanos_tudnivalok']:
                $tartalom = "{$nyelv}/altalanos_tudnivalok.tpl";
            break;
            
            case $alnev['szallitas_es_fizetes']:
                $tartalom = "{$nyelv}/szallitas_es_fizetes.tpl";
            break;
            
            //-----------------------------------
            
            
            case $alnev['kilepes']:
                kileptetes();
                // nincs break, default is végrehajtódik
            default:
                include_once("modulok/termeklista.php");
                $tartalom = SBNEV."/termeklista.tpl";
            break;
        }
  ?>