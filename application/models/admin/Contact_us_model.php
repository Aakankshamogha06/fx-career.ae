<?php
class Contact_us_model extends CI_Model
{


	public function contact_us_data_submit($data)
	{
		$data = [
			'name' => $data['name'],
			'email' => $data['email'],
			'phone_number' => $data['phone_number'],
			'location' => $data['location'],
			'message' => $data['message'],
		];
		if ($this->db->insert('contact_us', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function contact_us_view()
	{
		$result = $this->db->query("SELECT * FROM `contact_us`;");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function contact_us_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('contact_us');
	}


	public function contact_us_update_data($data)
	{
		echo ("hi");
		$newdata = [
			'contact_us_name' => $data['contact_us_name'],

		];
		print_r($newdata);
		$this->db->where('id', $data['id']);
		if ($this->db->update('contact_us', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function contact_us_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `contact_us` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	
}
