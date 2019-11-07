<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setting extends MY_Controller
{

	public function index()
	{
		// $this->load->model("leanding/M_leanding");
		// $menu['menu'] = $this->M_leanding->get_menu();
		// $conten = $this->M_leanding->get_conten();

		// foreach ($conten as $contens) {
		// 	$data[$contens->tabel] = $this->db->query("SELECT * FROM " . $contens->tabel)->row();
		// }
		$this->load->view('main');
		// echo json_encode($data);

	}

	public function load_html($page)
	{
		$data[$page] = $this->db->query("SELECT * FROM " . $page)->row();
		$this->load->view($page, $data);
	}

	public function setting_update($table)
	{
		$this->load->model("setting/M_leanding");
		$this->M_leanding->update($table);
		echo 1;
	}

	public function uploadImg()
	{
		$get = $this->input->get();
		$table = $get['table'];
		$field = $get['field'];
		date_default_timezone_set("asia/Jakarta");
		$name = date('Ymdhis');
		$extention = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
		// if ($this->input->post()) {
		//echo var_dump($_POST);
		$config['upload_path']          = './assets/images/'.$table;
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10024;
		$config['max_width']            = 6000;
		$config['max_height']           = 6000;
		$config['file_name']			= $name;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('file')) {
			echo $this->upload->display_errors();
			echo "fail";
		} else {
			$data = [$field=>$name.".".$extention];
			$this->load->model("setting/M_leanding");
			$this->M_leanding->update_image($table,$data);
			echo "sukses";
		}
		//}
	}
}
