<?php

class Users extends CI_Controller {

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
                'title' => 'backend',
                'logged_in' => $this->ion_auth->logged_in(),
                'evil_name' => $this->ion_auth->get_user()->username,
                'admin' => $this->ion_auth->is_admin(),
                'menu' => array('users', 'groups', 'news', 'settings'),
                'users' => $this->ion_auth->get_users()
            );
            $this->load->view('header', $data);
            $this->load->view('admin/menu', $data);
            $this->load->view('admin/users', $data);
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
    
    public function delete($id) {
        $this->load->helper(array('form', 'url', 'html'));

        $this->load->library(array('form_validation', 'ion_auth', 'session'));
        $this->load->database();
        
        if ($this->ion_auth->is_admin()){
            $this->ion_auth->delete_user($id);
            redirect('admin/users', 'refresh');
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