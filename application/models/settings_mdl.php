<?php

class Settings_mdl extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_settings($id = FALSE) {
        if ($id === FALSE) {
            $query = $this->db->get('settings');
            return $query->result_array();
        }

        $query = $this->db->get_where('settings', array('id' => $id));
        return $query->row_array();
    }


    public function set_settings() {
        $this->load->helper('url');

        $data = array(
            'title' => $this->input->post('title')
        );

        return $this->db->insert('settings', $data);
    }

}