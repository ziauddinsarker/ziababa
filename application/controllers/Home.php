<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }


    function index(){
        $this->load->view('templates/header_template_view');
        $this->load->view('templates/homepage_template_view');
        $this->load->view('templates/footer_template_view');
    }



}
?>