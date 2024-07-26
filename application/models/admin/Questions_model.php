<?php



class Questions_model extends CI_Model
{
    // Insert question data
    public function questions_data_submit($data)
    {
        $data = [
            'question' => $data['question'],
            'answer1' => $data['answer1'],
            'answer2' => $data['answer2'],
            'answer3' => $data['answer3'],
            'answer4' => $data['answer4'],
            'correct_answer' => $data['correct_answer'],
        ];

        if ($this->db->insert('questions', $data)) {
            return $data;
        } else {
            return false;
        }
    }

    // Retrieve a random set of questions
    public function get_random_questions($limit = 5)
    {
        $this->db->order_by('id', 'RANDOM');
        $this->db->limit($limit);
        $query = $this->db->get('questions');
        
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    // Retrieve questions data by slug
    public function get_questions_by_slug($slug)
    {
        $this->db->where('REPLACE(LOWER(slug), " ", "-")', $slug);
        $query = $this->db->get('questions');

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    // Delete question by ID
    public function questions_delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('questions');
    }

    // Update question data
    public function questions_update_data($data, $session_image)
    {
        $update_data = [
            'session_name' => $data['session_name'],
            'session_image' => $session_image,
            'date' => $data['date'],
            'time' => $data['time'],
            'location' => $data['location'],
            'language' => $data['language'],
            'duration' => $data['duration'],
            'speaker' => $data['speaker'],
        ];

        $this->db->where('id', $data['id']);
        if ($this->db->update('questions', $update_data)) {
            return $update_data;
        } else {
            return false;
        }
    }

    // Edit question by ID
    public function questions_edit($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('questions');
        
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    // Get correct answers
    public function get_correct_answers()
    {
        $this->db->select('id, correct_answer');
        $query = $this->db->get('questions');

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    // Insert user data (including score)
    public function insert_user_data($data)
    {
        return $this->db->insert('form_submissions', $data);
    }

    // View answer by question ID
    public function answer_view($qid)
    {
        $this->db->where('id', $qid);
        $query = $this->db->get('questions');

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
}
?>