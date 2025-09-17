<?php

include_once("class.alap.php");
 
class Admin_log extends Adat_vaz {
    
    public function __construct($data) {
        parent::__construct('log_id'); // meghívjuk a szülő konstructort is

        $this->tablanev = 'admin_log';
        
        // táblában mező neve : formban mező neve
        $this->adat['log_ip']          = $data['log_ip'];
        $this->adat['log_time']        = date("Y-m-d H:i:s");
        $this->adat['log_description'] = $data['log_description'];
        $this->adat['log_url']         = $data['log_url'];
        $this->adat['log_country']     = $data['log_country'];
        $this->adat['log_status']      = $data['log_status'];
        $this->adat['log_user_agent']  = $data['log_user_agent'];
        $this->adat['log_query_string'] = $data['log_query_string'];
        $this->adat['log_method']      = $data['log_method'];
    }
    
} 

?>