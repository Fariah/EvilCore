<?php

class News_mdl extends CI_Model {
    
    public $id;
    public $date;
    public $title;
    public $description;
    public $user_id;
    public $tables = array();

    public function __construct() {
        $this->load->database();
        $this->load->helper('date');
        $this->load->library('session');
    }

    public function get_news($id = FALSE) {
        if ($id === FALSE) {
            $query = $this->db->get('news');
            return $query->result_array();
        }

        $query = $this->db->get_where('news', array('id' => $id));
        return $query->row_array();
    }

    public function save_news($id, $data) {

        $this->id = $id;
        $this->date = $data['date'];
        $this->title = $data['title'];
        $this->description = $data['description'];
        $this->user_id = $this->session->userdata('user_id');

        return $this->db->update('news', $this, array('id' => $id));
    }

    public function set_news() {
        $this->load->helper('url');

        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'text' => $this->input->post('text')
        );

        return $this->db->insert('news', $data);
    }

}