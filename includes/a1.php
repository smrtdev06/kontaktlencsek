<?php
    //print md5("westend");

function generateRandomString($length = 10) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

include_once("sql_fuggvenyek_frissito.php");


for($i=1;$i<=200;$i++) {
    $kod = generateRandomString(5);
    //sql_insert('kuponok_201711', array('kod'=> $kod ) );
    print $kod."<br />\n";
}


    
?>




<?php
    //header('Content-Type: text/html; charset=UTF-8');
    //ini_set('display_errors',1);
    //include_once("sql_fuggvenyek.php");

/*    
$ch = curl_init("https://api.foxpost.hu/ecomm/places");
//curl_setopt($ch, CURLOPT_URL, "https://api.foxpost.hu/ecomm/places");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch,CURLOPT_HEADER,"Accept:application/vnd.cleveron+json; version=1.0");
curl_setopt($ch,CURLOPT_HEADER,"Content-Type:application/vnd.cleveron+xml");
curl_setopt($ch,CURLOPT_USERPWD,"O3_Optika:ac1lawo19ue7");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$res = curl_exec($ch);
curl_close($ch);
$res=json_decode($res);
*/
?>

<table>
<?php
/*
foreach( $res as $item ) {
    print "<tr><td>".$item->place_id."</td>
    <td>".$item->name."</td>
    <td>".$item->group."</td>
    <td>".$item->address."</td>
    <td>".$item->open."</td>
    <td>".$item->findme."</td>
    </tr>\n";   
}
*/
?>
</table>
