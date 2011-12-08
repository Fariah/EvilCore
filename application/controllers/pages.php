<?php

class Pages extends CI_Controller {

    public function view($page = 'home') {
        $this->load->helper(array('form', 'url', 'html'));

        $this->load->library(array('form_validation', 'ion_auth', 'session'));
        $this->load->database();

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data = array(
            'title' => $page,
            'logged_in' => $this->ion_auth->logged_in()
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