<?php

/**
 *
 */
class News extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library(array('ion_auth', 'session', 'form_validation'));
        $this->load->database();
        $this->load->helper(array('form', 'url', 'html'));
        $this->load->model('news_mdl');
    }

    public function index() {

        if ($this->ion_auth->is_admin()) {
            $data = array(
                'title' => 'backend',
                'logged_in' => $this->ion_auth->logged_in(),
                'evil_name' => $this->ion_auth->get_user()->username,
                'news' => $this->news_mdl->get_news(),
                'menu' => array('users', 'groups', 'news', 'settings'),
                'admin' => $this->ion_auth->is_admin()
            );

            $this->load->view('header', $data);
            $this->load->view('admin/menu', $data);
            $this->load->view('admin/news', $data);
            $this->load->view('footer', $data);
        } else {
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

    public function edit($id) {

        if ($this->ion_auth->is_admin()) {

            $data = array(
                'title' => 'backend',
                'logged_in' => $this->ion_auth->logged_in(),
                'evil_name' => $this->ion_auth->get_user()->username,
                'news' => $this->news_mdl->get_news($id),
                'menu' => array('users', 'groups', 'news', 'settings'),
                'id' => $id,
                'admin' => $this->ion_auth->is_admin()
            );

            $this->load->view('header', $data);
            $this->load->view('admin/menu', $data);
            $this->load->view('admin/edit_news', $data);
            $this->load->view('footer', $data);
        } else {
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

    public function save($id) {

        if ($this->ion_auth->is_admin()) {

            $date = date("Y-m-j");
            $title = $this->input->post('news_title');
            $description = $this->input->post('news_textarea');

            $data_set = array(
                'date' => $date,
                'title' => $title,
                'description' => $description);

            $this->news_mdl->save_news($id, $data_set);

            redirect('admin/news/', 'refresh');
        } else {
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

    public function create() {

        if ($this->ion_auth->is_admin()) {
            $data = array(
                'title' => 'backend',
                'logged_in' => $this->ion_auth->logged_in(),
                'evil_name' => $this->ion_auth->get_user()->username,
                'menu' => array('users', 'groups', 'news', 'settings'),
                'admin' => $this->ion_auth->is_admin(),
                'date' => date("Y-m-j")
            );

            $this->load->view('header', $data);
            $this->load->view('admin/menu', $data);
            $this->load->view('admin/form_news', $data);
            $this->load->view('footer', $data);
        } else {
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
        public function set_news() {

        if ($this->ion_auth->is_admin()) {
            $date = date("Y-m-j");
            $title = $this->input->post('news_title');
            $description = $this->input->post('news_textarea');

            $data_set = array(
                'date' => $date,
                'title' => $title,
                'description' => $description);

            $this->news_mdl->create_news($data_set);

            redirect('admin/news/', 'refresh');
        } else {
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