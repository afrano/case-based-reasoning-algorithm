<?php

class Kasus extends ci_controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        cek_login();
        cek_hakakses(array(1));
    }

    public function index() {
        //  $data['alldata'] = $this->user_model->get_alldata('basis_kasus');
        $data['isi'] = 'kasus/v_kasus';
        $data['title'] = 'Data User';
        $this->load->view('dashboard/dashboard', $data);
    }

}
