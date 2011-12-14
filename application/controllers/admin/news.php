<?php

/**
 *
 */
class News extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('news_mdl');
    }

    public function index() {
        $this->load->helper(array('form', 'url', 'html'));

        $this->load->library(array('form_validation', 'ion_auth', 'session'));
        $this->load->database();

        if ($this->ion_auth->is_admin()){
            $data = array(
                'title' => 'News',
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
        }
    }

    public function view($id) {

        $this->load->helper(array('form', 'url', 'html'));

        $this->load->library(array('form_validation', 'ion_auth', 'session'));
        $this->load->database();

        $data = array(
            'title' => 'News',
            'logged_in' => $this->ion_auth->logged_in(),
            'news' => $this->news_mdl->get_news($id),
            'admin' => $this->ion_auth->is_admin()
        );

        if ($this->ion_auth->logged_in())
            $data['evil_name'] = $this->ion_auth->get_user()->username;

        $this->load->view('header', $data);
        $this->load->view('login', $data);
        $this->load->view('register', $data);
        $this->load->view('news/view', $data);
        $this->load->view('footer', $data);
    }

}