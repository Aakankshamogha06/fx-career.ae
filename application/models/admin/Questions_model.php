<?php
class questions_model extends CI_Model
{


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

	public function questions_view()
{
    $result = $this->db->query("SELECT * FROM `questions` ORDER BY RAND() LIMIT 5");

    if ($result->num_rows() > 0) {
        return $result->result();
    } else {
        return 0;
    }
}
public function questions() {
    $result = $this->db->query("SELECT * FROM `questions` ORDER BY RAND() LIMIT 5");
    if ($result->num_rows() > 0) {
        return $result->result();
    } else {
        return 0;
    }
}

public function questions_data_nm()
{
    $uid = $this->uri->segment(2);
    $result = $this->db->query("SELECT * FROM `questions` WHERE REPLACE(LOWER(slug), ' ', '-')='$uid'");

    if ($result->num_rows() > 0) 
    {
        return $result->result(); // Return the fetched data
    } 
    else {
        return 0;
    }
}



	public function questions_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('questions');
	}


	public function questions_update_data($data,$session_image)
	{
		$newdata = [
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
		if ($this->db->update('questions', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function questions_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `questions` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}
	// public function get_correct_answers() {
	// 	$result = $this->db->query("SELECT id, correct_answer FROM questions");
	// 	if ($result->num_rows() > 0) {
	// 		return $result->result_array();
	// 	} else {
	// 		return false;
	// 	}
	// }
	public function get_correct_answers() {
        // Fetch only correct answers from the questions table
        $query = $this->db->get('questions');
        return $query->result();
    }

    public function insert_user_data($data) {
        // Insert user data (including score) into a database table
        return $this->db->insert('form_submissions', $data);
    }
	
	public function answer_view($qid)
	{
		$result = $this->db->query("SELECT * FROM `questions` where id=$qid");
	
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}
}
