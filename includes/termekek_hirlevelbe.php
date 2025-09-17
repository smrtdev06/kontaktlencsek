<?php
    error_reporting(1);
    ini_set("display_errors","1");
    
    require_once 'sql_fuggvenyek.php';
    
    // sablonkezelés
    include_once('smarty/libs/Smarty.class.php');
    $smarty = new Smarty();
    $smarty->template_dir = 'sablonkod';
    $smarty->compile_dir  = 'smarty/templates_c';
    $smarty->cache_dir    = 'smarty/cache';
    $smarty->config_dir   = 'smarty/configs';
    //$smarty->debugging = true;
    
    //$db->debug = true ;

    
    $result = $db->Execute("SELECT * FROM termekek WHERE termek_id IN (34435,34436,34437,34438,34439,34440,34441) ORDER BY termek_id");
    $termekek = $result->GetRows(); 
    //$smarty->assign('termekek', $termekek);
    
    //$smarty->display('nezetek/termek_hirlevelbe.tpl');
    
    print "<table>
    <tr><td>";
    
    $sor = 0;
    foreach($termekek as $egy_termek) {
        print '<table class="termektabla" style="width: 335px;" border="0">
        <tr>
<td width="233" height="110" align="center" valign="middle"><a href="http://lencsek.hu/'.$egy_termek['termek_alnev_hu'].'" target="_blank"><img src="http://kepek.lencsek.hu/lencsek/'.$egy_termek['termek_kep'].'" border="0" alt="'.$egy_termek['termek_nev_hu'].'" height="100"></a></td></tr><tr>
<td height="40">&nbsp;<a style="color: #46b7cb;
    font: arial, helvetica;
    font-size: 14px;
    font-weight: bold;" title="'.$egy_termek['termek_nev_hu'].'" href="http://lencsek.hu/'.$egy_termek['termek_alnev_hu'].'">'.$egy_termek['termek_nev_hu'].'</a></td>
</tr></table>';

        if( $sor / 2 == 1) {
            print "";
        }

    $sor ++;
    }
    
    print "</table>";
    
?>