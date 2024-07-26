
    <?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Form_model extends CI_Model {
        public function save_user_details($data) {
            $this->db->insert('form_submissions', $data);
            return $this->db->insert_id();
        }
    
        public function get_questions() {
            return $this->db->get('questions')->result();
        }
    
        public function save_user_score($user_id, $score) {
            $this->db->insert('user_score', [
                'user_id' => $user_id,
                'score' => $score
            ]);
        }
    }
    