<?php

class Pages extends CI_Controller {

    public function view($page = 'home') {
        $this->load->helper('html');
        $this->load->helper('url');

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['title'] = $page;

        $this->load->view('header', $data);
        $this->load->view('login', $data);
        $this->load->view('register', $data);
        $this->load->view('pages/' . $page, $data);
        $this->load->view('footer', $data);
    }

}