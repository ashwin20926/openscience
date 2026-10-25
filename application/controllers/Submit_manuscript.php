<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Submit_manuscript extends CI_Controller {

	public function index()
	{
	    $this->load->model('App_model');
		$data = [];
		$data['journals'] = $this->App_model->get_journals();
		$this->load->view('templates/header', $data);
        $this->load->view('pages/submit_manuscript.php', $data);
        $this->load->view('templates/footer', $data);
	}
	public function save_submit_manuscript_info() {		


		$this->load->model('App_model');
		$responce = $this->App_model->save_submit_manuscript_info($_POST);


		if($responce) {
			$status = array('status' => 'success','message' => 'Your Request has been sent Successfully');
		} else {
			$status = array('status' => 'danger','message' => 'Some thing went wrong please try again later');
		}		
		//echo var_dump(json_encode($status));
		echo json_encode($status, true);
	}
	public function save_user_contact_info() {		


		$this->load->model('App_model');
		$responce = $this->App_model->save_user_contact_info($_POST);


		if($responce) {
			$status = array('status' => 'success','message' => 'Your Request has been sent Successfully');
		} else {
			$status = array('status' => 'danger','message' => 'Some thing went wrong please try again later');
		}		
		//echo var_dump(json_encode($status));
		echo json_encode($status, true);
	}
}
