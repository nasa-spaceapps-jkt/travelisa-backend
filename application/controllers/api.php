<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends CI_Controller {
    
    public function index() {
        // TODO: create the summary of APIs
        $this->load->view('api_summary_view');
    }
    
    public function travel_summary() {
        
        if (!isset($_GET['start']) && !isset($_GET['end'])) {
            // TODO: Params missing
            $this->load->view('params_missing');
            return;
        }
        
        $start = $_GET['start'];
        $end = $_GET['end'];
        
        $data['data'] = $this->summary->get_summary($start, $end);
        
        echo json_encode($data);
    }
    
    public function summary_details() {
        if (!isset($_GET['trip_id']) || empty($_GET['trip_id'])) {
            // TODO: Params missing
            $this->load->view('params_missing');
            return;
        }
        
        $id = $_GET['trip_id'];
        
        $data['data'] = $this->summary->get_summary_details($id);
        
        echo json_encode($data);
    }
    
    public function pattern() {
        
        if (!isset($_GET['start']) && !isset($_GET['end'])) {
            $this->load->view('params_missing');
            return;
        }
        
        $start = $_GET['start'];
        $end = $_GET['end'];
        
        $data['data'] = $this->summary->pattern($start, $end);
        
        echo json_encode($data);
    }
    
    public function suggestions() {
        
    }
}