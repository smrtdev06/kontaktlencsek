<?php
function preparare_seo($nume){
  $seo_name = strtolower($nume);
  $seo_name = preg_replace('/& /', '', $seo_name);
  $seo_name = preg_replace('/\./', '', $seo_name);
  $seo_name = preg_replace('/\'/', '-', $seo_name);
  $seo_name = preg_replace('/\//', '-', $seo_name);
  $seo_name = preg_replace('/ /', '-', $seo_name);
  $seo_name = preg_replace('/\+/', '-', $seo_name);
  $seo_name = preg_replace('/\(|\)/', '', $seo_name);
  $seo_name = preg_replace('/'.chr(183).'/', '-', $seo_name);


return($seo_name);
}

function preparare_type($p_type, $lang){
  switch($p_type){
      case "1":
         switch($lang){
         case "hu":
         $p_type = "kontaktlencse";
         break;

         case "en":
         $p_type = "contact-lenses";
         break;
         }
      break;

      case "2":
         switch($lang){
         case "hu":
         $p_type = "kontaktlencse-kiegeszito";
         break;

         case "en":
         $p_type = "contact-lenses-accessories";
         break;
         }
      break;
  }
return($p_type);
}
?>