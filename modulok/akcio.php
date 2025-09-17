<?php

    $result = $db->Execute("SELECT * FROM ajandekok WHERE lencsek_hu = 1 and ajandek_id <> 15 and ajandek_id>29 ORDER BY ajandek_id");
    $ajandekok1 = $result->GetRows(); 
    $smarty->assign('ajandekok1',$ajandekok1);
    
    $result = $db->Execute("SELECT * FROM ajandekok WHERE lencsek_hu = 1 and ajandek_id <> 15 and ajandek_id<29 ORDER BY ajandek_id");
    $ajandekok2 = $result->GetRows(); 
    $smarty->assign('ajandekok2',$ajandekok2);
    
?>