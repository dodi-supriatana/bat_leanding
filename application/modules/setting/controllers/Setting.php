<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setting extends MY_Controller
{

	public function index()
	{
		$this->load->model("leanding/M_leanding");
		$menu['menu'] = $this->M_leanding->get_menu();
		$conten = $this->M_leanding->get_conten();

		foreach ($conten as $contens) {
			$data[$contens->tabel] = $this->db->query("SELECT * FROM " . $contens->tabel)->row();
		}
		$this->load->view('main', $data);
		echo json_encode($data);
		
	}

	public function setting_update($table)
	{
		// $this->load->model("leanding/M_leanding");
		// $this->M_leanding->update($table);
		echo " field " . $this->input->post('field');
		echo " data " . $this->input->post('data');
	}
}
