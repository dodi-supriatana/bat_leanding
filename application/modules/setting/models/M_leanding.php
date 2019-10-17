<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_leanding extends CI_Model
{

    public function get_menu()
    {
        $sql="SELECT * FROM conten WHERE is_menu='1' ORDER BY id_";
        $data = $this->db->query($sql);
        return $data->result();

    }

    public function get_conten()
    {
        $sql="SELECT * FROM conten WHERE conten_status='1' ORDER BY id_";
        $data = $this->db->query($sql);
        return $data->result();

    }
    /* End of file x.php */
}
