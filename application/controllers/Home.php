<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data = [];
		$this->load->view('templates/header', $data);
        $this->load->view('pages/home.php', $data);
        $this->load->view('templates/footer', $data);
	}
	public function get_home_page_journals() {		
		$this->load->model('App_model');

		//sanitize post value
		if($this->input->post("page")) {
			$page_number = $this->input->post("page");
		if(!is_numeric($page_number)){die('Invalid page number!');} //incase of invalid page number
		} else{
			$page_number = 1;
		}

		//get current starting point of records
		$position = (($page_number-1) * 5);

		$data['latest_articles'] = $this->App_model->get_home_page_journals($position);

		echo $this->load->view('pages/ajax_home_page_journals', $data,TRUE);	
	}
	public function upload_files() {
		$config['upload_path']          = './public/images';
        $config['allowed_types']        = 'zip|docx|pdf|tar|rar|doc';
        $config['max_size']             = 25 * 1024 *1024;        
 	
        $this->load->library('upload', $config); 
    	
        foreach ($_FILES as $key => $value) {        	        	
        	if($value['name']) {        		
	        	if ( ! $this->upload->do_upload($key))
		        {
	                $data = array('error' => $this->upload->display_errors());	                

		        }
		        else
		        {		        	
		            $data[] = array('upload_data' => $this->upload->data());		            

		        }
	        }	
        }               
		echo json_encode($data, true);
	}
	public function search() {
		if ( ! file_exists(APPPATH.'views/pages/search.php') || ! isset($_GET['s']))
        {
           show_404();
        }

		$this->load->model('App_model');
		$data['search_results'] = $this->App_model->get_search_results($_GET['s']);
        $data['title'] = "Search Page";

        $this->load->view('templates/header', $data);
        $this->load->view('pages/search.php', $data);
        $this->load->view('templates/footer', $data);
		
	}
	public function generate_sitemap_fulltext() {
        $this->load->model('App_model');		        
        $data['title'] = "Generate Sitemap"; // Capitalize the first letter
        $data['site_map'] = $this->App_model->generate_sitemap_fulltext();	        
        $this->load->view('pages/site_map.php', $data);
    }
    public function generate_sitemap_pdf() {
        $this->load->model('App_model');		        
        $data['title'] = "Generate Sitemap"; // Capitalize the first letter
        $data['site_map_pdf'] = $this->App_model->generate_sitemap_pdf();	        
        $this->load->view('pages/site_map_pdf.php', $data);
    }
    public function generate_sitemap_abstract() {
        $this->load->model('App_model');		        
        $data['title'] = "Generate Sitemap"; // Capitalize the first letter
        $data['site_map_abstract'] = $this->App_model->generate_sitemap_abstract();	        
        $this->load->view('pages/site_map_abstract.php', $data);
    }

}
