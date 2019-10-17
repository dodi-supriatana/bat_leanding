<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leanding extends MY_Controller {

	public function index()
	{
		$script = array(
            'script' => TRUE,
            'script_url' => 'main_script'
		);
		$this->load->model("leanding/M_leanding");
		$menu['menu']=$this->M_leanding->get_menu();
		$conten=$this->M_leanding->get_conten();
		
		$this->load->view('layout/header_leanding',$menu);
		foreach ($conten as $contens) {

			$data[$contens->tabel]=$this->db->query("SELECT * FROM ".$contens->tabel)->row();
			$this->load->view($contens->conten_name,$data);
		}

        $this->load->view('layout/footer_leanding', $script);
        // $this->load->view('main_script');
	}
}
