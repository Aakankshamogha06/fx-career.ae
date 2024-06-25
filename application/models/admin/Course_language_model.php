<?php
class course_language_model extends CI_Model
{


	public function course_language_data_submit($data)
	{
		$data = [
			
			'language_name' => $data['language_name'],
		];
		if ($this->db->insert('course_language', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function course_language_view()
{
    $result = $this->db->query(" SELECT * FROM `course_language`;");

    if ($result->num_rows() > 0) {
        return $result->result();
    } else {
        return 0;
    }
}


	


	public function course_language_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('course_language');
	}


	public function course_language_update_data($data)
	{
		$newdata = [
			'language_name' => $data['language_name'],
		];
		$this->db->where('id', $data['id']);
		if ($this->db->update('course_language', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function course_language_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `course_language` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


}
