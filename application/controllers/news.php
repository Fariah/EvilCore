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

        $data = array(
            'title' => 'News',
            'logged_in' => $this->ion_auth->logged_in(),
            'news' => $this->news_mdl->get_news()
        );

        if ($this->ion_auth->logged_in())
            $data['evil_name'] = $this->ion_auth->get_user()->username;

        $this->load->view('header', $data);
        $this->load->view('login', $data);
        $this->load->view('register', $data);
        $this->load->view('news/index', $data);
        $this->load->view('footer', $data);
    }

    public function view($id) {

        $this->load->helper(array('form', 'url', 'html'));

        $this->load->library(array('form_validation', 'ion_auth', 'session'));
        $this->load->database();

        $data = array(
            'title' => 'News',
            'logged_in' => $this->ion_auth->logged_in(),
            'news' => $this->news_mdl->get_news($id)
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