<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

    public function __construct() {
        parent::__construct();

        if (!$this->is_logged_in()) {
            redirect('login');
        }
    }

    public function index() {
    
        if ($this->session->userdata('role') == 'advisor') {
            $this->load->view('staffhomepage');
        }

        if ($this->session->userdata('role') == 'admin') {
            $this->load->view('mainhomepage');
        }
    }

    private function is_logged_in() {
        return $this->session->userdata('is_logged_in');
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('site');
    }

}
/* End of file main.php */