<?php

class Feed_model extends CI_Model {
    function get_archive_info($journal, $type)
    {
        $query  = $query  = $this->db->query('SELECT * FROM wp_journal_archives jp JOIN wp_journals j on jp.journal_id = j.id WHERE jp.archive_in = "'.$type.'" AND j.journal_url_slug = "'.$journal.'" ORDER BY jp.archive_year ASC,jp.archive_volume ASC,jp.archive_pdf ASC');		
		return $query->result_array();
    }
}

