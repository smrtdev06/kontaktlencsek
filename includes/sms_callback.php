<?php
    // sms callback : seeme.hu

    function tomb_fileba($tomb) {
    $v = "->";
    if(is_array($tomb)) {
        foreach($tomb as $kulcs=>$item) {
            if( is_array($item) ) {
                $v .= tomb_fileba($item)."<-\n";
            } else {
                $v .= $kulcs." : ".$item."\n";
            }
        }
    } else {
        $v = $tomb."\n";
    }
    
    return $v;
}
    
    
    $fp = fopen("hibakereses/sms_kuldes_log.txt", 'a');
    fwrite($fp, date("Y-m-d H:i:s")."\n".tomb_fileba($_REQUEST));
    fwrite($fp, tomb_fileba($_SESSION));
    fwrite($fp,"-----------------------------------------------------------------------------------------------\n");
    fclose($fp);


?>