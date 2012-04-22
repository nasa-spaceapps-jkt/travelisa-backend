<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

    public function index() {
        // TODO: Create a default main view for this API main page
        $this->load->view('main_view');
    }
}
