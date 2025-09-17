<?php
    error_reporting(1);
    ini_set("display_errors","1");


/*
$to      = 'sattila@ativil.hu';
$subject = 'PHP Mail teszt';
$message = 'hello uzenet';
$headers = 'From: office@lencsek.hu' . "\r\n" .
    'Reply-To: office@lencsek.hu' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

print "Levél elküldve!";
*/



/* read the PHP source code */
$source_code = file_get_contents("class.alap.php");

/* create the encrypted version */
$redistributable_key = blenc_encrypt($source_code, "admin/class.alap.enc.php");

/* read which is the key_file */
$key_file = ini_get('blenc.key_file');

/* save the redistributable key */
file_put_contents($key_file, $redistributable_key, FILE_APPEND);

/*
include_once("class.alap.php");
$fh = fopen("./admin/class_alap.php","w");
bcompiler_write_header($fh);
bcompiler_write_class($fh,"DB");
// you must write DB_common before DB_mysql, as DB_mysql extends DB_common.
//bcompiler_write_class($fh,"DB_common");
bcompiler_write_class($fh,"Adat_vaz");
bcompiler_write_footer($fh);
fclose($fh);
*/

print "ok";
?>