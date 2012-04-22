<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Summary extends CI_Model {
    
    function __construct() {
        parent::__construct();
    }
    
    function get_summary($start, $end) {
        $query_string = "SELECT * FROM tbl_trip WHERE start_timestamp >= '" . $start . "'
                            AND end_timestamp <= '" . $end . "'";
                            
        $query = $this->db->query($query_string);
        
        return $query->result();
    }
    
    function get_summary_details($id) {
        $query_string = "SELECT * FROM tbl_trip_details WHERE trip_id = '" . $id . "'";
        $query = $this->db->query($query_string);
        
        return $query->result();
    }
    
    function pattern($start, $end) {
        $query_string = "SELECT * FROM tbl_pattern";
        $query = $this->db->query($query_string);
        
        return $query->result();
    }
}