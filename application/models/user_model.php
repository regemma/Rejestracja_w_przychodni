<?php
class User_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
    public function wyswietl(){
        $query = $this->db->get('pracownicy');
        return $query -> result_array();
    }
    
}
?>