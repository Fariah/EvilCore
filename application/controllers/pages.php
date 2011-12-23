<?php

class Pages extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library(array('ion_auth', 'session', 'form_validation', 'alcaptcha'));
        $this->load->database();
        $this->load->helper(array('form', 'url', 'html'));
    }

    function captha_img($fiction_param) {
        echo $this->alcaptcha->image();
    }

    function captha_reloaded($fiction_param) {
        $this->alcaptcha->generate_code(4);
        echo $this->alcaptcha->image();
    }
    public function view($page = 'home') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $this->alcaptcha->generate_code(4);
        $data = array(
            'title' => $page,
            'logged_in' => $this->ion_auth->logged_in(),
            'admin' => $this->ion_auth->is_admin()
        );

        if ($this->ion_auth->logged_in())
            $data['evil_name'] = $this->ion_auth->get_user()->username;

        $this->load->view('header', $data);
        $this->load->view('login', $data);
        $this->load->view('register', $data);
        $this->load->view('pages/' . $page, $data);
        $this->load->view('footer', $data);
    }

}