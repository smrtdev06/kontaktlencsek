<?php

	$nyelvek = array('hu','ro');


	function nyelven_ki($nevek,$mezonev) {
	global $nyelv,$nyelvek;
	
	$akt_nyelven = $nevek[$mezonev.$nyelv];
	
	if( empty($akt_nyelven) ){
		
		foreach($nyelvek as $ertek) {
			if(!empty($nevek[$mezonev.$ertek]) ) {
				$akt_nyelven = $nevek[$mezonev.$ertek];
				break;
			}
		}
	} 
			
	return $akt_nyelven;
}

//Dátum átalakítás
function datum_atalakit($datum1) {
		$arrNapok = array("Vas�rnap", "Hétfő", "Kedd", "Szerda", "Csütörtök", "Péntek", "Szombat");
		//$arrNapok_eng = array("Sun.", "Mon.", "Tue.", "Wed.", "Thu.", "Fri.", "Sat.");
		$arrHnapok = array("", "Jan.", "Feb.", "Márc.", "Ápr.", "Máj.", "Jún.", "Júl.", "Aug.", "Szep.", "Okt.", "Nov.", "Dec.");
		//
		$date = strtotime($datum1);
		$date1 = date('Y-m-d', $date);
		$dateev = date ("Y", $date);
		$datenap = date ("d", $date);
		$strnap = $arrNapok[date("w", $date)];
		//$strnap_eng = $arrNapok_eng[date("w", $date)];
		$strhonap = $arrHnapok[date("n", $date)];

//my_utf8_decode($strnap)
		$datus = $dateev.". ".$strhonap." ".$datenap.". ".$strnap./*" - ".$strnap_eng.*/"&nbsp;&nbsp;&nbsp;".date ("H", $date).":".date ("i", $date);
		return $datus;
	}
function datum_atalakit_rovid($datum1) {
		$arrNapok = array("Vasárnap", "Hétfő", "Kedd", "Szerda", "Csütörtök", "Péntek", "Szombat");
		//$arrNapok_eng = array("Sun.", "Mon.", "Tue.", "Wed.", "Thu.", "Fri.", "Sat.");
		$arrHnapok = array("", "Jan.", "Feb.", "Márc.", "Ápr.", "Máj.", "Jún.", "Júl.", "Aug.", "Szep.", "Okt.", "Nov.", "Dec.");
		//
		$date = strtotime($datum1);
		$date1 = date('Y-m-d', $date);
		$dateev = date ("Y", $date);
		$datenap = date ("d", $date);
		$strnap = $arrNapok[date("w", $date)];
		//$strnap_eng = $arrNapok_eng[date("w", $date)];
		$strhonap = $arrHnapok[date("n", $date)];

		$datus = $dateev.". ".$strhonap." ".$datenap.". ".$strnap;
		return $datus;
	}

function mutasdmeg_kategoriak($kat) {
    $t[1] = "Washburn git�rod";
    $t[2] = "Parkered";
    $t[3] = "Oszidat";
    $t[5] = "Rekl�mok";
    $t[6] = "Randallod";
    $t[7] = "Edened";
    $t[8] = "Zenekarod";

    $v='';

    foreach( $t as $kulcs => $ertek) {
        $v.="<option value=\"{$kulcs}\"";
        if( $kulcs == $kat) { $v.=" SELECTED"; }
        $v.=">{$ertek}</option>\n";
    }
    return $v;
}
	

	function termek_kategoriak($kat_id) {
		$t[1] = "Elektromos";
		$t[2] = "Akusztikus";
		$t[3] = "Elektro-akusztikus";
		$t[4] = "Basszus";
		$t[5] = "kieg.-/tokok";
		$t[6] = "Er�s�t�k";
		$t[7] = "Folk";
		
		$v='';
		
		foreach( $t as $kulcs => $ertek) {
			$v.="<option value=\"{$kulcs}\">{$ertek}</option>\n";
		}
		return $v;
	}

	function termek_szeriak($szeria_id) {
		$t[1] = "Idol";
		$t[2] = "Paul Stanley";
		$t[3] = "Signature";
		$t[4] = "HM";
		$t[5] = "N";
		$t[6] = "X";
		$t[7] = "Hollow Bodies";
		
		$v='';
		
		foreach( $t as $kulcs => $ertek) {
			$v.="<option value=\"{$kulcs}\">{$ertek}</option>\n";
		}
		return $v;
	}

function termek_markak($marka_id) {
        $t[2] = "Washburn";
		$t[1] = "Parker";
		$t[3] = "Oscar Schmidt";
		$t[4] = "Amerikai modellek";
	    $t[5] = "Vinci";
		$t[6] = "Er�s�t�, Audio Technik";
		//$t[7] = "Hollow Bodies";
		
		$v='';
		
		foreach( $t as $kulcs => $ertek) {
			$v.="<option value=\"{$kulcs}\">{$ertek}</option>\n";
		}
		return $v;
	}
	
//pontot ki



function pontot_ki($szam) {



	return str_replace(".", "", $szam);



}


function menukep_ki($kepnev,$link) {
    $vissza = '';
    if( !empty($link) ) { $vissza .= "<a href=\"http://{$link}\" target=\"_blank\">"; }
    
    $vissza .= "<img src=\"img/{$kepnev}\" alt=\"\" border=\"0\" height=\"104\" width=\"104\">";
    
    if( !empty($link) ) { $vissza .= "</a>"; }
    
    return $vissza;
}


function szeriak_javascriptbe() {
    global $hiba;
    
    $qry = lekerdezes("SELECT * from szeriak ORDER BY szeria_marka_id,szeria_kat_id");
    
    $v='';
    $temp_kat = 0;
    $temp_marka = 0;
    
    while( $qry->next_record() ) {
        $sor = $qry->Record;
        
        if($temp_kat != $sor['szeria_kat_id'] || $temp_marka != $sor['szeria_marka_id']) {
            $temp_kat = $sor['szeria_kat_id'];
            $temp_marka = $sor['szeria_marka_id'];
            $v.="\n";
            $i=1;
        }
        
        $v.= "\tdata_".($sor['szeria_marka_id']-1)."_{$sor['szeria_kat_id']}_{$i} = new Option(\"{$sor['szeria_nev']}\", \"{$sor['szeria_id']}\");\n";
        $i++;
        
    }
    
    return $v;
}

// pontot be



function pontot_be($szam) {



	return number_format($szam, 0, '.','.');



}





function nulla_ar($ar){

	if($ar == "0"){

		$ar = "-";

	}

	return $ar;

}



function akcio($akcios_ar, $akcio_l, $termek_ar) {



    if( !empty($akcios_ar) && $akcio_l>0) {



        //ha akci� van



        $arak = "<s>".nulla_ar(pontot_be($termek_ar))."</s> Ft<br><br><b>Akci�s �r:<br><span style=\"color:#FF6600; font-size:14px;\">".nulla_ar(pontot_be($akcios_ar))."</span> Ft</b>";



    }else{



        //ha nincs akci�



        $arak = "<b>".nulla_ar(pontot_be($termek_ar))." Ft</b>";



    }







    return $arak;



}







function termek_szine($szinek) {







    if( !empty($szinek) ) {



        $szinek = lekerdezes_tombbe("SELECT szin FROM `szinek` WHERE szid IN ({$szinek})");







        if( is_array($szinek) && count($szinek)>0 ) {



            $vissza = "";



            $i=1;



            foreach ($szinek as $ertek) {



                if($i>1) { $vissza.=','; }



                $vissza.=$ertek;



                $i++;



            }



            $vissza.="<br>";



            return $vissza;



        } else {



            return '';



        }



    } else {



        return '';



    }



}







function termek_markaja($marka_id) {



    if( $marka_id > 0 ) {



        $qry = lekerdezes_egyrec("SELECT marka_nev FROM marka WHERE marka_id='{$marka_id}'");



        $adatok = $qry->Record;







        return "<a href=\"".FILENEV."?old={$marka_id}\">".$adatok['marka_nev']."</a><br>";



    } else {



        return '';



    }



}



function alnev_betoltes($o) {

    $egytomb = lekerdezes_tombbe("SELECT old_id,alnev FROM alnevek WHERE alnev ='$o' ");



    if( $egytomb['old_id'] > 0 ) {

        return $egytomb['old_id'];

    } else {

        return $o;

    }

}



function alnevek_selectbe() {

    //$v = "<select name=\"alnevek\">\n";

    $v="";

    $qry = lekerdezes("SELECT alnev from alnevek ORDER BY alnev");

    if($qry->num_rows() > 0 ) {

    $i=0;

    while( $qry->next_record() ) {

        //$v.= "<option>{$qry->f('alnev')}</option>\n";

        if( $i > 0 ){ $v.=","; }

        $v.= "\"".$qry->f('alnev')."\"";

        $i++;

    }



    } else {

        // nincs record

    }



    //$v.="</select>";



    return $v;

}


// form f�ggv�nyek

function checked_pipa($v) {
    if( $v==1 ) {
        return 'CHECKED';
    } else {
        return '';
    }
}

?>