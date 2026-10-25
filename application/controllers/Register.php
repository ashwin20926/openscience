<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
		$data = [];
		$this->load->model('App_model');
		$data['j_info'] = $this->App_model->get_journals();
		$this->load->view('templates/header', $data);
        $this->load->view('pages/register.php', $data);
        $this->load->view('templates/footer', $data);
	}
}
