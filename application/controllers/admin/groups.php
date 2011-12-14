<?php

class Groups extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('news_mdl');
        $this->load->model('ion_auth_model');
    }

    public function index() {
        $this->load->helper(array('form', 'url', 'html'));

        $this->load->library(array('form_validation', 'ion_auth', 'session'));
        $this->load->database();

        if ($this->ion_auth->is_admin()){
            $data = array(
                'title' => 'Backend Users',
                'logged_in' => $this->ion_auth->logged_in(),
                'evil_name' => $this->ion_auth->get_user()->username,
                'admin' => $this->ion_auth->is_admin(),
                'menu' => array('users', 'groups', 'news', 'settings'),
                'groups' => $this->ion_auth->get_groups()
            );
            $this->load->view('header', $data);
            $this->load->view('admin/menu', $data);
            $this->load->view('admin/groups', $data);
            $this->load->view('footer', $data);
        }

    }

}