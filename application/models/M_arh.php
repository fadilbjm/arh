<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_arh extends CI_Model {

    function getSiswa()
    {
        $q = $this->db->get('t_siswa');
        return $q;
    }
    

}

/* End of file M_arh.php */
