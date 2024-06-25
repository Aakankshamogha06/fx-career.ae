<?php
class Course_mode_model extends CI_Model
{
	public function course_mode_data_submit($data)
	{
		$data = [
			'mode_name' => $data['mode_name'],
		];
		return $this->db->insert('course_mode', $data);
	}

	public function course_mode_view()
	{
		$result = $this->db->get('course_mode');
		return $result->num_rows() > 0 ? $result->result() : [];
	}

	public function course_mode_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('course_mode');
	}

	public function course_mode_update_data($data)
	{
		$newdata = [
			'mode_name' => $data['mode_name'],
		];
		$this->db->where('id', $data['id']);
		return $this->db->update('course_mode', $newdata);
	}

	public function course_mode_edit($id)
	{
		$this->db->where('id', $id);
		$result = $this->db->get('course_mode');
		return $result->num_rows() > 0 ? $result->row() : false;
	}
}
?>
