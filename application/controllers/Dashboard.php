<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }

    function index() {
        $this->load->view('dashboard/front');
    }

    function admin() {
        $this->load->view('dashboard/dashboard');
    }

}
