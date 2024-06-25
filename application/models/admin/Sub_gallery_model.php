<?php
class sub_gallery_model extends CI_Model
{


	public function sub_gallery_data_submit($data,$image)
	{
		$data = [
			
			'gallery_id' => $data['gallery_id'],
			'image' => $image,
            
		];
		if ($this->db->insert('sub_gallery', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function sub_gallery_view()
{
    $result = $this->db->query(" SELECT *,(SELECT image_name FROM gallery WHERE gallery.id=sub_gallery.gallery_id)as gallery_id FROM `sub_gallery`");

    if ($result->num_rows() > 0) {
        return $result->result();
    } else {
        return 0;
    }
}
public function sub_gallery_get($id)
{
    $result = $this->db->query(" SELECT *,(SELECT image_name FROM gallery WHERE gallery.id=sub_gallery.gallery_id)as gallery_id FROM `sub_gallery` where gallery_id=$id;");

    if ($result->num_rows() > 0) {
        return $result->result();
    } else {
        return 0;
    }
}

public function sub_gallery_data_nm()
{
    $uid = $this->uri->segment(2);
    $result = $this->db->query("SELECT * FROM `sub_gallery` WHERE REPLACE(LOWER(gallery_id), ' ', '-')='$uid'");

    if ($result->num_rows() > 0) 
    {
        return $result->result(); // Return the fetched data
    } 
    else {
        return 0;
    }
}


	public function sub_gallery_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('sub_gallery');
	}


	public function sub_gallery_update_data($data,$image)
	{
		$newdata = [
			'gallery_id' => $data['gallery_id'],
			'image' => $image,
		];
		$this->db->where('id', $data['id']);
		if ($this->db->update('sub_gallery', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function sub_gallery_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `sub_gallery` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function gallery_fetch()
	{

		$gallery_data = $this->db->query("SELECT * FROM `gallery`");

		$fetch = $gallery_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $gallery_data->result_array();
		} else {
			return false;
		}
	}

}
