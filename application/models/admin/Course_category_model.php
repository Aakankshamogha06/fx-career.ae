<?php
class course_category_model extends CI_Model
{


	public function course_category_data_submit($data)
	{
		$data = [
			
			'category_name' => $data['category_name'],
		];
		if ($this->db->insert('course_category', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function course_category_view()
{
    $result = $this->db->query(" SELECT * FROM `course_category`;");

    if ($result->num_rows() > 0) {
        return $result->result();
    } else {
        return 0;
    }
}


	


	public function course_category_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('course_category');
	}


	public function course_category_update_data($data)
	{
		$newdata = [
'category_name' => $data['category_name'],
		];
		$this->db->where('id', $data['id']);
		if ($this->db->update('course_category', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function course_category_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `course_category` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


}
