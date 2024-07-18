<?php
class Preffered_time_model extends CI_Model
{

	public function preffered_time_data_submit($data)
	{
		$data = [
			'time_slot' => $data['time_slot'],
		];
		return $this->db->insert('preffered_time', $data);
	}

	public function preffered_time_view()
	{
		$result = $this->db->get('preffered_time');
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return [];
		}
	}

	public function preffered_time_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('preffered_time');
	}

	public function preffered_time_update_data($data)
	{
		$this->db->where('id', $data['id']);
		return $this->db->update('preffered_time', ['time_slot' => $data['time_slot']]);
	}

	public function preffered_time_edit($id)
	{
		$this->db->where('id', $id);
		$result = $this->db->get('preffered_time');
		if ($result->num_rows() > 0) {
			return $result->row();
		} else {
			return null;
		}
	}
}
?>
