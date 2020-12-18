<?php
Class Login extends CI_model{

    public function daftar($data){
        $this->db->insert('tbl_login',$data);
    }


}

?>