<?php
class slider_model extends CI_Model
{


	public function slider_data_submit($data,$slider_image)
	{
		$data = [
			
			'slider_url' => $data['slider_url'],
            'slider_image' => $slider_image,   
		];
		if ($this->db->insert('slider', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function slider_view()
{
    $result = $this->db->query("SELECT * FROM `slider`;");

    if ($result->num_rows() > 0) {
        return $result->result();
    } else {
        return 0;
    }
}

	public function slider_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('slider');
	}


	public function slider_update_data($data,$slider_image)
	{
		$newdata = [
			'slider_url' => $data['slider_url'],
            'slider_image' => $slider_image, 
		];
		$this->db->where('id', $data['id']);
		if ($this->db->update('slider', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function slider_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `slider` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function slider($id)
    {

        $assign_data = $this->db->query("SELECT * FROM `slider` where slider.id=$id ");

        $fetch = $assign_data->num_rows();
        if ($fetch > 0) {
            return $fetch = $assign_data->result_array();
        } else {
            return false;
        }
    }

}
