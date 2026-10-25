<?php

class App_model extends CI_Model {

    /**
    * Validate the login's data with the database
    * @param string $user_name
    * @param string $password
    * @return void
    */ 

    function get_home_page_journals($position) {
		//$query = $this->db->query("SELECT * FROM `wp_journals` WHERE deleted='1' LIMIT $position, 4");
		$query = $this->db->query("SELECT * FROM wp_journals INNER JOIN wp_journal_posts ON wp_journals.id = wp_journal_posts.journal_id WHERE post_name = 'Home' AND wp_journals.deleted ='1' ORDER BY wp_journals.created_date ASC LIMIT $position, 6");
		
		return $query->result_array();
	}

	function get_journals() {
		$query  = $this->db->query("SELECT * FROM wp_journals INNER JOIN wp_journal_posts ON wp_journals.id = wp_journal_posts.journal_id WHERE post_name = 'Home' AND wp_journals.deleted ='1' ORDER BY wp_journals.created_date ASC");		
		return $query->result_array();		

	}
	function get_sidebar_slugs ($journal_name,$post_name) {		
		$query = $this->db->query('SELECT jp.post_name,j.journal_url_slug,jp.post_slug FROM wp_journal_posts jp INNER JOIN wp_journals j on jp.journal_id = j.id AND j.journal_url_slug = "'.$journal_name.'" ORDER BY jp.created_date ASC');		
		return $query->result_array();
	}
	function get_journal_page($journal_url_slug,$post_name,$post_type) {
		if($post_type == 'eb_post') {			
			$query = $this->db->query('SELECT eb.id,eb.eb_post_slug,eb.eb_journal_slug,j.journal_name,j.journal_image,eb.eb_member_name,eb.eb_member_photo,eb.eb_member_country,eb.editor_chief,eb.eb_member_desc,eb.updated_date, j.issn_number, j.banner_image, j.sidebar_image FROM wp_eb_members eb INNER JOIN wp_journals j on eb.journal_id = j.id WHERE j.journal_url_slug="'.$journal_url_slug.'" AND eb.deleted="1" ORDER BY eb.editor_chief DESC');		
		} else {
			$query = $this->db->query('SELECT wp_journal_posts.post_name,wp_journals.journal_url_slug, wp_journals.issn_number, wp_journal_posts.post_content, wp_journals.journal_name,wp_journals.journal_image FROM wp_journals INNER JOIN wp_journal_posts ON wp_journals.id = wp_journal_posts.journal_id WHERE post_slug = "'.$post_name.'" AND wp_journals.journal_url_slug ="'.$journal_url_slug.'"');		
			
		}
		return $query->result_array();
	}

	function get_eb_info ($journal_url_slug,$post_name) {	
		$query = $this->db->query('SELECT eb.id,eb.eb_post_slug,eb.eb_journal_slug,j.journal_name,eb.eb_member_name,eb.eb_member_photo,eb.eb_member_country,eb.editor_chief,eb.eb_member_desc,eb.updated_date, j.issn_number, j.banner_image, j.sidebar_image FROM wp_eb_members eb INNER JOIN wp_journals j on eb.journal_id = j.id WHERE j.journal_url_slug="'.$journal_url_slug.'" AND eb.deleted="1" ORDER BY eb.editor_chief DESC');
		return $query->result_array();
	}

	/*function get_archive_info($journal_name,$post_name) {		
		if((strpos($post_name, 'articles-in-press') !== false)) {
			$archive_type = '1';			
		} else if((strpos($post_name, 'current-issue') !== false)) {
			$archive_type = '2';						
		} else if((strpos($post_name, 'archive') !== false)) {			
			$archive_type = '3';						
		}else if((strpos($post_name, 'special-issues') !== false) ||  (strpos($post_name, 'special-issue') !== false)) {			
			$archive_type = '4';						
		}
		
		$query  = $this->db->query('SELECT j.journal_name,jp.archive_fulltext_views,jp.article_title,jp.article_link, jp.article_authors, jp.archive_pdf_views,jp.supli_pdf_views,jp.archive_volume,jp.id,jp.archive_year,jp.archive_desc,jp.archive_volume,jp.archive_fulltext,jp.archive_pdf,jp.supli_pdf,jp.archive_in,jp.article_type,jp.archive_volume, jv.volume_name, j.journal_url_slug,jp.archive_in,jp.article_type, jv.volume_name FROM 
			wp_journal_archives jp JOIN wp_journals j 			 
			on jp.journal_id = j.id 
			left join wp_journal_volumes jv 
  			on jv.id=jp.archive_volume
			WHERE jp.archive_in = "'.$archive_type.'" AND j.journal_url_slug = "'.$journal_name.'" AND jp.deleted="1" ORDER BY jp.archive_year ASC,jv.volume_name ASC,jp.archive_pdf ASC'
			);
		
		return $query->result_array();
	}*/
	
	
	function get_archive_info($journal_name,$post_name) {		
		if((strpos($post_name, 'articles-in-press') !== false)) {
			$archive_type = '1';			
		} else if((strpos($post_name, 'current-issue') !== false)) {
			$archive_type = '2';						
		} else if((strpos($post_name, 'archive') !== false)) {			
			$archive_type = '3';						
		}else if((strpos($post_name, 'special-issues') !== false) ||  (strpos($post_name, 'special-issue') !== false)) {			
			$archive_type = '4';						
		}
		
		$query  = $this->db->query('SELECT DISTINCT wt.post_browser_title_slug, wt.json_format, j.journal_name,jp.archive_fulltext_views,jp.article_title,jp.article_link, jp.article_authors, jp.archive_pdf_views,jp.supli_pdf_views,jp.archive_volume,jp.id,jp.archive_year,jp.archive_desc,jp.archive_volume,jp.archive_fulltext,jp.archive_pdf,jp.supli_pdf,jp.archive_in,jp.article_type,jp.archive_volume, jv.volume_name, j.journal_url_slug,jp.archive_in,jp.article_type, jv.volume_name FROM 
			wp_journal_archives jp JOIN wp_journals j 			 
			on jp.journal_id = j.id 
			left join wp_journal_volumes jv 
  			on jv.id=jp.archive_volume
  			left join wp_fulltextarticles wt
			on jp.article_title = wt.post_browser_title
			WHERE jp.archive_in = "'.$archive_type.'" AND j.journal_url_slug = "'.$journal_name.'" AND jp.deleted="1" ORDER BY jp.archive_year ASC,jv.volume_name ASC,jp.archive_pdf ASC'
			);
		
		return $query->result_array();
	}
	function get_journal_latest_articles($position) {
//		$query = $this->db->query("SELECT * FROM wp_latest_articles la INNER JOIN wp_journals j ON la.article_category = j.id WHERE la.deleted ='1' ORDER BY la.created_date LIMIT $position, 8");
$query = $this->db->query("SELECT la.article_name, la.article_image, la.pdf_link, j.journal_name, la.author_name,jp.post_slug,j.journal_url_slug FROM wp_latest_articles la JOIN wp_journals j ON la.article_category = j.id JOIN wp_journal_posts jp ON jp.journal_id = j.id WHERE jp.post_name = 'Home' AND la.deleted='1' ORDER BY la.created_date LIMIT $position, 8");

		return $query->result_array();
	}
	function save_submit_manuscript_info($data) {	
		if(isset($data) && !empty($data)) {	
		   $query = $this->db->query(
		   	"INSERT INTO wp_manuscript (firstname, lastname, phoneno,tel_no, email , country,state, journal, article, cauthor, uploadfile, created_date,read_status) VALUES 
		   		('".$data['sm_first_name']."','".$data['sm_last_name']."','".$data['sm_phone']."','".$data['sm_telno']."','".$data['sm_email']."','".$data['sm_country']."','".$data['sm_state']."','".$data['sm_journal']."','".$data['sm_article']."','".$data['sm_author']."','".$data['temp_file_upload']."','".date('Y-m-d')."',2)"
		   	);	   
			return $query;	
		}
	}
	function save_user_contact_info($data) {	
		if(isset($data) && !empty($data)) {	

		   $query = $this->db->query(
		   	"INSERT INTO  wp_contact_enquiries (user_first_name,user_last_name, user_email, user_phone,user_message, created_date,read_status) VALUES 
		   		('".$data['first_name']."','".$data['last_name']."','".$data['email']."','".$data['user_phone']."','".$data['message']."','".date('Y-m-d')."',2)"
		   	);	   
			return $query;	
		}
	}
function get_search_results($string) {
		if(isset($string) && !empty($string)) {
			$query  = $this->db->query('SELECT * FROM wp_journal_archives jp JOIN wp_journals j on jp.journal_id = j.id WHERE jp.article_title LIKE "%'.$string.'%"');

			return $query->result_array();					
		}
	}
function get_fulltext_info($title) {
		$temp = explode(".", $title);					
		if(isset($title) && !empty($title)) {
			$query  = $this->db->query('SELECT ft.author_affliations, ft.post_browser_title_slug,ft.published_date, ft.first_page,ft.last_page, ft.authors, j.journal_name,j.issn_number,ft.post_browser_title,ft.volume,ft.issue,ft.season,ft.special_issue,ft.suplementary_issue,ft.issue_qa,ft.submitted_date,ft.accepted_date,ft.published_date,ft.first_page,ft.last_page,ft.post_title,ft.json_format, ft.post_content,ft.post_browser_title,ft.post_meta_keywords,j.issn_number,j.journal_name,j.banner_image,j.sidebar_image FROM wp_fulltextarticles ft JOIN wp_journals j ON ft.journal_id = j.id WHERE ft.post_title ="'.$temp[0].'" AND ft.deleted="1"');

			return $query->result_array();					
		}
}

function generate_sitemap_pdf() {
    $query = $this->db->query('SELECT article_link FROM  wp_journal_archives WHERE deleted="1"');	
    return $query->result_array();
}
function generate_sitemap_fulltext() {
    $query = $this->db->query('SELECT post_title FROM  wp_fulltextarticles WHERE deleted="1"');	
    return $query->result_array();
}
function generate_sitemap_abstract() {
    $query = $this->db->query('SELECT DISTINCT post_browser_title_slug FROM wp_fulltextarticles WHERE deleted="1" AND json_format="1"');	
    return $query->result_array();
}

    
    function get_abstract_info($title) {
    	if(isset($title) && !empty($title)) {
			$pdf = $this->db->query('SELECT post_title FROM wp_fulltextarticles WHERE post_browser_title_slug = "'.$title.'" AND deleted="1"')->result_array();
			//print_r($pdf[0]['post_title']);exit;
    		$query = $this->db->query('
    		SELECT 
    		ft.accepted_date, 
    		ft.published_date,
    		ft.volume,
    		ft.authors,
    		ft.issue,
    		ft.first_page,
    		ft.last_page,
    		ft.json_format, 
    		ft.post_content,
    		ft.post_title, 
    		ft.post_browser_title,
    		ft.post_meta_keywords,
			ft.post_browser_title_slug,
			ft.json_format,
    		j.issn_number,
    		j.journal_name,
    		j.banner_image,
			wa.doi_name,
			ft.author_affliations,
    		j.sidebar_image FROM wp_fulltextarticles ft 
    		LEFT JOIN wp_journals j ON ft.journal_id = j.id 
			LEFT JOIN wp_journal_archives wa ON wa.archive_pdf = "'.$pdf[0]['post_title'].'.pdf"
    		WHERE ft.post_browser_title_slug ="'.$title.'" AND ft.deleted="1"');
    		return $query->result_array();					
    	}
    }
}