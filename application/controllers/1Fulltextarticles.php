<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fulltextarticles extends CI_Controller {
	public function index() {		
		$this->load->model('App_model');

		if($this->uri->segment(1)) {			
			$data['fulltext_info'] = $this->App_model->get_fulltext_info($this->uri->segment(2));			
			$data['title'] = $data['fulltext_info'][0]['post_browser_title']?$data['fulltext_info'][0]['post_browser_title']:"Fulltext Article";

			$data['meta_keywords'] = $data['fulltext_info'][0]['post_meta_keywords']?$data['fulltext_info'][0]['post_meta_keywords']:"";
			$this->load->view('templates/header', $data);					        
			$this->load->view('pages/fulltextaricle_view.php', $data);
			$this->load->view('templates/footer', $data);
		} else {
			$this->load->view('404');
		}
	}
}