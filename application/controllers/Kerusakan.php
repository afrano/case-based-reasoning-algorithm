<?php

class Kerusakan extends ci_controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        cek_login();
        cek_hakakses(array(1));
    }

    public function index() {
        $data['database'] = $this->user_model->get_alldata('kerusakan');
        $data['isi'] = 'kerusakan/v_kerusakan';
        $data['title'] = 'Data User';
        $this->load->view('dashboard/dashboard', $data);
    }

}
