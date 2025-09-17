<?php

// Mit, miben keresünk
//$searchfor = 'include';
$searchfor = "/^.*sql_fuggvenyek.php.*\$/m";

if( isset($_REQUEST['mit']) ) {
    $pattern = preg_quote($_REQUEST['mit'], '/');
    //$pattern = $_REQUEST['mit'];
    //$searchfor = "/^.*$pattern.*\$/m";
    $searchfor = "/^.*$pattern.*/m";
    
    //if( !empty($_REQUEST['nincs']) ) {
    //    $searchfor = "/^.*$pattern.*(?!".$_REQUEST['nincs'].")$/m";
    //}
}

if( isset($_REQUEST['filetip']) ) {
    $fileokban = $_REQUEST['filetip'];
} else {
    $fileokban = array('.php','.tpl','.css');
    $_REQUEST['filetip'] = [];
}




function bejar($mappa) {
    global $searchfor,$fileokban,$_REQUEST;

    $kihagyni = explode("\r\n", trim($_REQUEST['nenezd']) );
    
    $kihagyott_mappa = array('..', '.','Ati','node_modules','cache','termekkepek','compiled','smarty','smarty3','template_lite','adodb_lite','assets','flvplayer','.cache','images','videok','uploads','glasses');
    
    foreach($kihagyni as $mappa_nev) {
        // ha nincs benne .
        if( !strstr($mappa_nev,'.') ) {
            $kihagyott_mappa[] = $mappa_nev;
        }
    } 
    // kihagyott mappák
    $scanned_directory = array_diff(scandir($mappa), $kihagyott_mappa);
    
    foreach($scanned_directory as $egyfile) {
      if( is_dir($mappa."/".$egyfile) ){
          // könyvtár megjelenítés
          //echo "[$mappa/{$egyfile}]\n";
          echo bejar($mappa."/".$egyfile);
      } else {
        
        if( in_array(substr($egyfile,-4),$fileokban) and
        $egyfile !=basename($_SERVER['PHP_SELF']) and !in_array($egyfile,$kihagyni) ) {
            // filenev kiirasa
            //print $mappa."/".$egyfile."\n";
            print talalj($mappa."/".$egyfile,$searchfor);
        }
        /*
         elseif( in_array(substr($egyfile,-5), array('.html','.json','.woff','.less')) || in_array(substr($egyfile,-3), array('.db','.js')) || in_array(substr($egyfile,-4), array('.txt','.jpg','.JPG','.png','.swf','.ini','.gif','.map','.dtd','.lib','.eot','.svg','.pdf','.ico','.flv','.mp4','.inc','.otf','.ttf','.xml','.bat')) ) {
            // semmit nem csinalunk
          } else {
            //echo $mappa."/".$egyfile."\n";
          }
        */
      } // nem mappa vége
    } // foreach vége
} // bejar vége


// prevents the browser from parsing this as HTML.
//header('Content-Type: text/plain');
$talalat = array();
//phpinfo();

function kiemel($str) {
    return "<span style='background-color:#0066ff;color:#fff;'>".$str."</span>";
    // ide kell htmlspecialchars?
}

function talalj($file,$searchfor) {
    static $ind=1;
    global $talalat, $_REQUEST;

    $strback = '';
    // get the file contents, assuming the file to be readable (and exist)
    $contents = file_get_contents($file);
    // escape special characters in the query
    //$pattern = preg_quote($searchfor, '/');
    // finalise the regular expression, matching the whole line
    //$pattern = "/^.*$pattern.*\$/m";
    // search, and store all matching occurences in $matches
    
    
    
    if(preg_match_all($searchfor, $contents, $matches, PREG_OFFSET_CAPTURE)){ // 
        //echo $ind." találat<br />";
       $strsor = '';
        
       //echo "$ind.<span style='background-color:#ff9900;'>".substr($file,1)."</span>\n";
       //echo implode("\n", str_replace(' ','',$matches[0]))."\n";
       //echo htmlspecialchars( implode("\n", preg_replace('/\s+/','',$matches[0]) ) )."\n";
       //echo htmlspecialchars( implode("\n",$matches[0]) )."\n";
       //var_dump($matches);
       //echo htmlspecialchars( implode("\n", trim($matches[0]) ) )."\n";
       //ksort($mathes[0]);
       $db = 0;
          
        foreach( $matches[0] as $elem){
            $row = $elem;
            
            $offset = $row[1];
            $elem = trim($row[0]);
            
            // $_REQUEST['nincs'] nincs a stringben
            if( empty($_REQUEST['nincs']) || !strstr($elem,$_REQUEST['nincs']) ) {
                
                $line = substr_count(substr($contents, 0, $offset), PHP_EOL) + 1;
                
                $strsor .= "".$line.": ".( str_replace($_REQUEST['mit'],kiemel($_REQUEST['mit']),$elem ))."\n";
                $db++;
                // <span style='background-color:#9933ff;color:#fff;'></span>
                // htmlspecialchars() ?
                //$elem = preg_replace('/\s+/', '',$elem);
                  
                if( !in_array($elem,$talalat) ) {
                    $talalat[]=$elem; 
                } else {
                    
                }
            }
        }
        
        
        if( !empty($strsor) ) {
            $strback = "<fieldset><legend>&nbsp;{$ind}.<span style='background-color:#ff9900;'>".$file." [{$db}]</span>&nbsp;";
            
            if( $_REQUEST['syntax'] == 1 ) {
                $ell = exec("php -l ".$file);
                $ell = substr($ell,0,25);
                $szin = !strcmp(substr($ell,0,5),"Error") ? "#f00": "#0f0";
                $strback .= "<span style='background-color:{$szin};'>(".$ell.")</span>";
            }
            
            $strback .="</legend>";
            $strback .= $strsor;
            $strback .= "</fieldset>\n";
        }
        
        $ind++;
        
    } else{
       //echo "({$file}) No matches found\n";
    }
    
    return $strback;
}

?>

<!DOCTYPE html>
<html>
<title>Fájlban kereső</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body style="margin-top: 20px;">

<div class="w3-container" style="margin:10px;">
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
<fieldset style="width: 600px;">
    <div style="float:right;">
    Kihagyni fájl/mappa:<br />
    <textarea cols="20" rows="2" name="nenezd"><?php echo htmlspecialchars(trim($_REQUEST['nenezd'])); ?></textarea>
    </div>
    
    Mit: <input type="text" name="mit"  size='20' value="<?php echo htmlspecialchars($_REQUEST['mit']); ?>"> <input class="w3-btn w3-green" type="submit" value="Keres"><br />
    <input type="checkbox" name="filetip[]" value=".tpl" <?php if( in_array('.tpl',$_REQUEST['filetip'])) { print 'checked="checked"'; } ?>> .tpl &nbsp;&nbsp;<input type="checkbox" name="filetip[]" value=".php" <?php if( in_array('.php',$_REQUEST['filetip']) || !isset($_REQUEST['filetip']) ) { print 'checked="checked"'; } ?>> .php &nbsp;&nbsp;
    <input type="checkbox" name="syntax" value="1"> syntax<br />
    
    Miben: <input type="text" name="egyfile" size="10" value="<?php echo htmlspecialchars($_REQUEST['egyfile']); ?>"> 
    Nincs: <input type="text" name="nincs" size="10" value="<?php echo htmlspecialchars($_REQUEST['nincs']); ?>"><br />
    
</fieldset>
</form>




<pre>
<?php

if( $_SERVER['REMOTE_ADDR'] == "193.91.88.194" ) {
    
    if( !empty(trim($_REQUEST['egyfile'])) ) {
        // egy fileban keresünk
        print talalj($_REQUEST['egyfile'], $searchfor);
    } else {
        // mappát nézzük át
        bejar('.');
    }
    
    //print "\n";
    //print "<hr style='border-color:#00ff00;' />";
    //print_r($talalat);
} else {
    print $_SERVER['REMOTE_ADDR'];    
}

?>
</pre>
</div>

</body>
</html> 
