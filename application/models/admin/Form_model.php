
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // public function save_form_data($data) {
    //     return $this->db->insert('form_submissions', $data);
    // }
    public function save_form_data($data) {
        // $data['score'] = $score; // Add score to data array
        return $this->db->insert('form_submissions', $data);
    }
    
    public function get_questions() {
        // Example method to fetch questions from database
        $query = $this->db->get('questions'); // Replace 'questions' with your actual table name
        return $query->result();
    }


    public function preffered_time_fetch() {
        $preffered_time_data = $this->db->query("SELECT * FROM `preffered_time`");

        if ($preffered_time_data->num_rows() > 0) {
            return $preffered_time_data->result_array();
        } else {
            return false;
        }
    }

    public function preffered_topic_fetch() {
        $preffered_topic_data = $this->db->query("SELECT * FROM `preffered_topic`");

        if ($preffered_topic_data->num_rows() > 0) {
            return $preffered_topic_data->result_array();
        } else {
            return false;
        }
    }
    
}
