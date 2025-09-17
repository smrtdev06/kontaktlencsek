<?php
    $tartalom = "nezetek/napszemuveg_nezet.tpl";
         
    // termékek hozzárendelése sablonhoz
    $result2 = $db2->Execute("SELECT *, name AS termek_nev ,
name AS termek_alnev ,
brands.name AS termek_gyarto
FROM products
LEFT JOIN brands ON products.brand = brands.id
WHERE products.brand={$gyarto_id} ORDER BY name");
    $termekek = $result2->GetRows();
    $smarty->assign('termekek', $termekek);
            
    //$title = $termekek[0]['termek_gyarto'].$forditas['title_gyarto']; // ezt honnan vesszük?
    //$keywords = $termekek[0]['termek_gyarto'];
?>