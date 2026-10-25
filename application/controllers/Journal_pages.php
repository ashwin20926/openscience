<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Journal_pages extends CI_Controller {

	public function index($journal_slug,$post_slug)
	{		
		$data = [];        

		$this->load->model('App_model');
		if((strpos($this->uri->segment(2), 'for-editors-and-reviewers') !== false) || (strpos($this->uri->segment(2), 'contact-us') !== false) || (strpos($this->uri->segment(2), 'copyright-and-disclaimer') !== false) || (strpos($this->uri->segment(2), 'download-contributor-form') !== false) || (strpos($this->uri->segment(2), 'about-us') !== false) || (strpos($this->uri->segment(2), 'home') !== false) || (strpos($this->uri->segment(2), 'aims-scope') !== false) || (strpos($this->uri->segment(2), 'aim-and-scope') !== false) || (strpos($this->uri->segment(2), 'aims-and-scope') !== false)  || (strpos($this->uri->segment(2), 'manuscript-work-flow') !== false) ||  (strpos($this->uri->segment(2), 'instructions-to-author') !== false) || (strpos($this->uri->segment(2), 'instructions-for-authors') !== false)) {
	        $data['links_info'] = $this->App_model->get_sidebar_slugs($journal_slug, $post_slug);
	        $data['p_info'] = $this->App_model->get_journal_page($journal_slug, $post_slug,'');
            $data['title'] = $this->getPageTitle($data);
			$this->load->view('templates/header', $data);		
	        $this->load->view('pages/journal_pages.php', $data);
	        $this->load->view('templates/footer', $data);
	    } elseif (
	    	(strpos($this->uri->segment(2), 'current-issue') !== false) || 
	    	(strpos($this->uri->segment(2), 'articles-in-press') !== false) || 
	    	(strpos($this->uri->segment(2), 'article-in-press') !== false) || 
	    	(strpos($this->uri->segment(2), 'archive') !== false)) {
	    	$data['links_info'] = $this->App_model->get_sidebar_slugs($journal_slug, $post_slug);
	    	$data['p_info'] = $this->App_model->get_journal_page($journal_slug, $post_slug,'');

	    	$data['articles_info'] = $this->App_model->get_archive_info($this->uri->segment(1),$this->uri->segment(2));
	    	$data['title'] = $this->getPageTitle($data);
	    	$this->load->view('templates/header', $data);		
	        $this->load->view('pages/archive_info.php', $data);
	        $this->load->view('templates/footer', $data);
	    }
	     else if((strpos($this->uri->segment(2), 'editorial-board') !== false)) {

            //$data['eb_info'] = $this->App_model->get_eb_info($journal_slug, $post_slug);
            $data['links_info'] = $this->App_model->get_sidebar_slugs($journal_slug, $post_slug);
            $data['p_info'] = $this->App_model->get_journal_page($journal_slug, $post_slug,'eb_post');
            $data['p_info'][0]['post_name'] = 'Editorial Board';
            $data['p_info'][0]['post_type'] = 'eb_post';
            if(isset($data) && !empty($data)) {         
                $data['title'] = '';                        
                $data['description'] = '';
            }
            $data['title'] = $this->getPageTitle($data);
            $this->load->view('templates/header', $data);
            $this->load->view('pages/journal_pages.php', $data);
            $this->load->view('templates/footer', $data);
        } 
	    else {
	    	$this->load->view('404');
	    }
	}
	private function getPageTitle($data) {
		if(isset($data['p_info']) && !empty($data['p_info'])) {
			return $data['title'] = $data['p_info'][0]['journal_name'] ." - ".$data['p_info'][0]['post_name'];
		}		
	}
}
