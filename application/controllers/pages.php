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

        $this->load->view('templates/header', $data);
        $this->load->view('pages/' . $page, $data);
        $this->load->view('templates/footer', $data);
    }

    public function about() {
        $this->load->helper('html');
        $this->load->helper('url');

        $data['title'] = 'About';

        $this->load->view('templates/header', $data);
        $this->load->view('pages/about', $data);
        $this->load->view('templates/footer', $data);
    }

    public function contact() {
        $this->load->helper('html');
        $this->load->helper('url');

        $data['title'] = 'Contact';

        $this->load->view('templates/header', $data);
        $this->load->view('pages/contact', $data);
        $this->load->view('templates/footer', $data);
    }

}