<?php
class course_model extends CI_Model
{


	public function course_data_submit($data)
	{
		$data = [
			
			'course_type' => $data['course_type'],
		
            
		];
		if ($this->db->insert('course', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function course_view()
{
    $result = $this->db->query(" SELECT * FROM `course`;");

    if ($result->num_rows() > 0) {
        return $result->result();
    } else {
        return 0;
    }
}


	


	public function course_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('course');
	}


	public function course_update_data($data)
	{
		$newdata = [
			'course_type' => $data['course_type'],
		];
		$this->db->where('id', $data['id']);
		if ($this->db->update('course', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function course_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `course` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	

}
