<?php


    // függvények
    function elmult($s1, $s2) {
        return strtotime($s1.$s2);
    }
    
    // Egy hétre betölti az időpontokat
    function hetre_betoltes($nap1,$nap2, $bolt=1) {
        global $db;
        
        //$db->debug=true;
        
        $result = $db->Execute("SELECT *
FROM latasvizsgalat
WHERE vizsg_nap >= '{$nap1}'
AND
vizsg_nap <= '{$nap2}' AND vizsg_bolt_id='{$bolt}'
ORDER BY vizsg_nap,vizsg_idopont");

        $iadatok = $result->GetRows();
    
        $h_adat = array();
    
        foreach($iadatok as $elem) {
            
            $n = date("md", strtotime($elem['vizsg_nap']));
            $i = date("Hi", strtotime($elem['vizsg_idopont']));
            
            // Ha van ügyfél, akkor foglalva
            if($elem['ugyf_nev'] !='' ) {
                $elem['foglalva'] = 1;
            }
            
            $h_adat[$n][$i] = $elem;
            
        }
       
        return $h_adat;
    }
    
    //$heti_adat['0805']['1000'] = array('foglalva'=>1, 'vizsg_optom'=>'Ági' );
    //$heti_adat['0805']['1030'] = array('vizsg_optom'=>'Ági' ); 
    
    
    // függvények vége
    
    // Változók
    $mire[1] = "Látásvizsgálat szemüveghez (Ingyenes akár!)";
    $mire[2] = "Látásvizsgálat első kontaktlencséhez (3990 Ft)";
    $mire[3] = "Kontaktlencse kontroll (2490 Ft)";
    $mire[4] = "Kontaktlencse illesztés +1pár lencse (3990 Ft)";
    
    $mire_text[1] = "<span class=ar_kiemel>2490 Ft</span><br />Látásának ellenőrzése, ha szemüveget nem készíttet. A vizsgálat során kiderül, hogy van-e szükség dioptriás korrekcióra, vagy sem.<br />Ez az ár kontaktlencse vizsgálatra nem vonatkozik.<br /><br /><span class=ar_kiemel>1490 Ft</span><br />Komplett szemüveg készíttetés esetén, ha a szemüveg komplett ára nem haladja meg a 20000 Ft-ot.<br />Ez az ár kontaktlencse vizsgálatra nem vonatkozik.<br /><br /> <span class=ar_kiemel>0 Ft</span><br />Ha 20000 Ft felett komplett szemüveget készíttet üzletünkben, akkor a látásvizsgálat ingyenes.<br />Ez az ár kontaktlencse vizsgálatra nem vonatkozik.<br /><br />Kérjük -ha rendelkezésre áll-, hozza magával előző vizsgálatának eredményeit !";

    $mire_text[2] = "<span class=ar_kiemel>3990 Ft</span><br />Ha még nem viselt kontaktlencsét, de szívesen kipróbálná. Ez az ár a látásvizsgálatot, próbalencsét és a kontaktlencse betanítást foglalja magában.<br /> A vizsgálat során a szemüveg dioptriájának megállapítására is sor kerül.<br /><br />Kérjük ha rendelkezésre áll, hozza magával előző vizsgálatának eredményeit!";
    
    $mire_text[3] = "<span class=ar_kiemel>2490 Ft</span><br />A jelenleg viselt kontaktlencse dioptriájának és illeszkedésének, illetve a szem állapotának ellenőrzése.<br /><br />Kérjük ha rendelkezésre áll, hozza magával előző vizsgálatának eredményeit!<br />Amennyiben dioptriájával és kontaktlencséjével elégedett, kérjük kontaktlencsében jöjjön.";
    
    $mire_text[4] = "<span class=ar_kiemel>3990 Ft</span><br />Látásvizsgálat + kontaktlencse illesztés<br /> Ha a jelenlegi lencséjével nem elégedett és más lencsére szeretne váltani. Ez az ár a szemvizsgálatot és a próbalencsét foglalja magában.<br /> A vizsgálat során a szemüveg dioptriájának megállapítására is sor kerül.<br/><br />Kérjük ha rendelkezésre áll, hozza magával előző vizsgálatának eredményeit, a vizsgálat napján ne tegye be a kontaktlencséit!";
    
    $optometristak['Ági']    = 'Ági';
    $optometristak['Tamara'] = 'Tamara';
    $optometristak['Attila'] = 'Attila';
    
    
    
    
    // Foglalható időpontok
    $idopontok = array('10:00','10:30','11:00','11:30','12:00','12:30','13:00',
    '13:30','14:00','14:30','15:00','15:30','16:00','16:30','17:00','17:30');
    
    // Aktuális hét
    $mai_nap = date('Y-m-d');
    
    if( !isset($_GET['h']) || empty($_GET['h']) ) {
        $honnan = $mai_nap;
        
        $a_honap = date("m");
        $a_nap   = date("d");
        $az_ev   = date("Y");
        
        $hetfotol_hany_nap = date("w")-1;
        
        $h = $hetfo;
    } else {
        $honnan = $_GET['h'];
        
        $a_honap = date("m", strtotime($honnan));
        $a_nap   = date("d", strtotime($honnan));
        $az_ev   = date("Y", strtotime($honnan)); 
        
        $hetfotol_hany_nap = date("w", strtotime($honnan))-1;
        
        $h = $honnan;
    }
    
    //$pentekig_hany_nap = 5-date("w");

    $hetfo       =  date('Y-m-d', mktime(0, 0, 0, $a_honap  , $a_nap-$hetfotol_hany_nap, $az_ev) );
    $kedd        =  date('Y-m-d', mktime(0, 0, 0, $a_honap  , $a_nap-($hetfotol_hany_nap-1), $az_ev) );
    $szerda      =  date('Y-m-d', mktime(0, 0, 0, $a_honap  , $a_nap-($hetfotol_hany_nap-2), $az_ev) );
    $csutortok   =  date('Y-m-d', mktime(0, 0, 0, $a_honap  , $a_nap-($hetfotol_hany_nap-3), $az_ev) );
    $pentek      =  date('Y-m-d', mktime(0, 0, 0, $a_honap  , $a_nap-($hetfotol_hany_nap-4), $az_ev) );

    $elozo_het   = date('Y-m-d', mktime(0, 0, 0, $a_honap  , $a_nap-$hetfotol_hany_nap-7, $az_ev) );
    $kov_het     = date('Y-m-d', mktime(0, 0, 0, $a_honap  , $a_nap-$hetfotol_hany_nap+7, $az_ev) );
    $max_kov_het = date('Y-m-d', mktime(0, 0, 0, date("m")  , date("d")-$hetfotol_hany_nap+14, date("Y")) );
    
    // Aktuális hét adatai
    $napok = array(
                 array('nev'=>'Hétfő',     'datum'=>$hetfo),
                 array('nev'=>'Kedd',      'datum'=>$kedd),
                 array('nev'=>'Szerda',    'datum'=>$szerda),
                 array('nev'=>'Csütörtök', 'datum'=>$csutortok),
                 array('nev'=>'Péntek',    'datum'=>$pentek)
             );
             
    $_SESSION['ell_kod'] = rand(10000,40000);
    // változók vége





    // boltok betöltése
    $res = $db->Execute("SELECT * FROM latasvizsgalat_boltok");
    $boltok = $res->GetRows();
    
    
    foreach($boltok as $elem ) {
        $bolt_idk[] = $elem['bolt_id'];
    }
    
    // bolt ellenörzés, beállítás
    if( isset($_GET['bolt']) and in_array($_GET['bolt'], $bolt_idk) ) {
        $_SESSION['bolt'] = $_GET['bolt'];
    } elseif( !isset($_SESSION['bolt']) ) {
        $_SESSION['bolt'] = 1;
    }

    
    
    // Egyéb nem kell
    
    // Mentés ekkor
    // $adott_nap < $max_kov_het && $mai_nap <= $adott_nap
    
    //if( $_SESSION['user'] > 0 ) {
        //$fadat = lekerdezes_tombbe("SELECT * FROM felhasznalok WHERE felh_id={$_SESSION['user']}");
        
        //$jogok = explode(',',$fadat['felh_jogok']);
        // beállítjuk az admin jogot, ha van
        //if( in_array('admin',$jogok) ) {
            //$tpl->assign('jog_admin',1);
    //}
        
        //$tpl->assign('fadat',$fadat);
    //}
    
    
    
?>