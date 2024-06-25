<?php
class gallery_model extends CI_Model
{


	public function gallery_data_submit($data,$image)
	{
		$data = [
			'image' => $image,
            'image_name' => $data['image_name'],
		];
		if ($this->db->insert('gallery', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function gallery_view()
{
    $result = $this->db->query(" SELECT *  FROM gallery");

    if ($result->num_rows() > 0) {
        return $result->result();
    } else {
        return 0;
    }
}
public function gallery()
{
    $result = $this->db->query(" SELECT *  FROM gallery LIMIT 6");

    if ($result->num_rows() > 0) {
        return $result->result();
    } else {
        return 0;
    }
}



	public function gallery_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('gallery');
	}


	public function gallery_update_data($data,$image)
	{
		$newdata = [
			'image' => $image,
            'image_name' => $data['image_name'],
		];
		$this->db->where('id', $data['id']);
		if ($this->db->update('gallery', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function gallery_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `gallery` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


}
