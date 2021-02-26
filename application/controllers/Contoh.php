<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Contoh extends CI_Controller
{
	
	function __construct(argument)
	{
		parent::__construct();
		$this->load->model("Contoh_mdl");
		$this->load->helper("url");
	}

	//Berfungsi untuk
	public function create()
	{

	}

	//Berfungsi untuk
	public function edit()
	{

	}

	//Berfungsi untuk
	public function update($id)
	{
		$data[''] = $this->siswa_model->getById($kd_siswa);
	}

	//Berfungsi untuk 
	public function delete()
	{
		$this->Contoh_mdl->delete('table', $data)
	}
}
?>