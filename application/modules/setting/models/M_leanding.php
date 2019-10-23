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

    public function update($table)
    {
        // $data['title_wihite'] = 'BEST WAY TO';
        $data[$this->input->post('field')] = $this->input->post('data');
        $this->db->update($table, $data);
        return json_encode($data);
    }
    /* End of file x.php */
}
