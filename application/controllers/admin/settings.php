<?php

class Settings extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('settings_mdl');
        $this->load->model('ion_auth_model');
    }

    public function index() {
        $this->load->helper(array('form', 'url', 'html'));

        $this->load->library(array('form_validation', 'ion_auth', 'session'));
        $this->load->database();

        if ($this->ion_auth->is_admin()){
            $data = array(
                'title' => 'backend',
                'logged_in' => $this->ion_auth->logged_in(),
                'evil_name' => $this->ion_auth->get_user()->username,
                'admin' => $this->ion_auth->is_admin(),
                'menu' => array('users', 'groups', 'news', 'settings'),
                'settings' => $this->settings_mdl->get_settings()
            );
            $this->load->view('header', $data);
            $this->load->view('admin/menu', $data);
            $this->load->view('admin/settings', $data);
            $this->load->view('footer', $data);
        }
        else {
            $data = array(
                'title' => 'Error',
                'logged_in' => $this->ion_auth->logged_in(),
                'admin' => $this->ion_auth->is_admin()
            );
            $this->load->view('header', $data);
            $this->load->view('admin_error', $data);
            $this->load->view('footer', $data);
        }

    }

}