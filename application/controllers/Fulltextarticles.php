<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fulltextarticles extends CI_Controller {

	public function index() {		
		$this->load->model('App_model');
		if($this->uri->segment(1)) {			
              
			$data['fulltext_info'] = $this->App_model->get_fulltext_info($this->uri->segment(2));			
            if(isset($data['fulltext_info'][0]['post_content']) && !empty($data['fulltext_info'][0]['post_content'])) {
              $data['title'] = $data['fulltext_info'][0]['post_browser_title']?$data['fulltext_info'][0]['post_browser_title']:"Fulltext Article";
                $data['meta_keywords'] = $data['fulltext_info'][0]['post_meta_keywords']?$data['fulltext_info'][0]['post_meta_keywords']:"";
                //$data['journal_name'] = $data['fulltext_info'][0]['post_meta_keywords']?$data['fulltext_info'][0]['post_meta_keywords']:"";
                $data['journal_name'] = $data['fulltext_info'][0]['journal_name']?$data['fulltext_info'][0]['journal_name']:"";
                $data['post_title'] = $data['fulltext_info'][0]['post_title']?$data['fulltext_info'][0]['post_title']:"";
    			$data['citation_fulltext_html_url'] = base_url();
    
                $data['published_date'] = $data['fulltext_info'][0]['published_date']?$data['fulltext_info'][0]['published_date']:"";
                $data['citation_volume'] = $data['fulltext_info'][0]['volume']?$data['fulltext_info'][0]['volume']:"";
                $data['citation_issue'] = $data['fulltext_info'][0]['issue']?$data['fulltext_info'][0]['issue']:"";
                $data['citation_firstpage'] = $data['fulltext_info'][0]['first_page']?$data['fulltext_info'][0]['first_page']:"";
                $data['citation_lastpage'] = $data['fulltext_info'][0]['last_page']?$data['fulltext_info'][0]['last_page']:"";
    			$data['issn_number'] = $data['fulltext_info'][0]['issn_number']?$data['fulltext_info'][0]['issn_number']:"";
    			$data['post_browser_title_slug'] = $data['fulltext_info'][0]['post_browser_title_slug']?$data['fulltext_info'][0]['post_browser_title_slug']:"";
                $data['json_format'] = $data['fulltext_info'][0]['json_format']?$data['fulltext_info'][0]['json_format']:"";
    			$data['accepted_date'] = $data['fulltext_info'][0]['accepted_date']?$data['fulltext_info'][0]['accepted_date']:"";
        		$data['author_affliations'] = $data['fulltext_info'][0]['author_affliations']?$data['fulltext_info'][0]['author_affliations']:"";
                if($data['fulltext_info'][0]['authors']) {
                    $data['authors'] = explode(',', $data['fulltext_info'][0]['authors']);
                }
              //  $data['citation_doi'] = $data['fulltext_info'][0]['doi_name']?$data['fulltext_info'][0]['doi_name']:"";
                //$data['article_type'] = $data['fulltext_info'][0]['post_content']?$data['fulltext_info'][0]['article_type']:"";
    			  $this->load->view('templates/abstract_header.php', $data);					        
       		   $this->load->view('pages/fulltextaricle_view.php', $data);
			   $this->load->view('templates/abstract_footer.php', $data);
            } else {
               $this->load->view('404');                            
            }
			

		} else {
			$this->load->view('404');
		}
	}
	public function xml() {		
		if($this->uri->segment(1) == "fulltextarticles") {			
			$data = array();
			$this->load->model('App_model');
			header("Content-Type: application/rss+xml");
			$data['fulltext_info'] = $this->App_model->get_fulltext_info($this->uri->segment(3));
			if(isset($data['fulltext_info'][0]['post_content']) && !empty($data['fulltext_info'][0]['post_content'])) {	
				$data['title'] = $data['fulltext_info'][0]['post_browser_title']?$data['fulltext_info'][0]['post_browser_title']:"Fulltext Article";
				$this->load->view('pages/fulltextxml.php', $data);
			}

		} else {
			$this->load->view('404');
		}		
	}
}