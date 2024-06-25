<?php
class analysis_detail_model extends CI_Model
{


	public function analysis_detail_data_submit($data,$analysis_image)
	{
		$data = [
			
			'analysis_name' => $data['analysis_name'],
			'analysis_image' => $analysis_image,
            'analysis_category' => $data['analysis_category'],
            'analysis_author' => $data['analysis_author'],
            'analysis_date' => $data['analysis_date'],
            'analysis_desc' => $data['analysis_desc'],
            'long_desc' => $data['long_desc'],
		];
		if ($this->db->insert('analysis_detail', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function analysis_detail_view()
{
    $result = $this->db->query(" SELECT analysis_detail.*, blog_category.category AS analysis_category FROM analysis_detail LEFT JOIN 
	blog_category ON analysis_detail.analysis_category = blog_category.id");

    if ($result->num_rows() > 0) {
        return $result->result();
    } else {
        return 0;
    }
}


public function analysis_detail_data_nm()
{
    $uid = $this->uri->segment(2);
    $result = $this->db->query("SELECT * FROM `analysis_detail` WHERE REPLACE(LOWER(analysis_name), ' ', '-')='$uid'");

    if ($result->num_rows() > 0) 
    {
        return $result->result(); // Return the fetched data
    } 
    else {
        return 0;
    }
}



	public function analysis_detail_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('analysis_detail');
	}


	public function analysis_detail_update_data($data)
	{
		$newdata = [
			'analysis_name' => $data['analysis_name'],
			'analysis_image'=>$data['analysis_image'],
            'analysis_category' => $data['analysis_category'],
            'analysis_author' => $data['analysis_author'],
            'analysis_date' => $data['analysis_date'],
            'analysis_desc' => $data['analysis_desc'],
            'long_desc' => $data['long_desc'],
		];
		$this->db->where('id', $data['id']);
		if ($this->db->update('analysis_detail', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function analysis_detail_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `analysis_detail` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function role_fetch()
	{

		$role_data = $this->db->query("SELECT * FROM `analysis`");

		$fetch = $role_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $role_data->result_array();
		} else {
			return false;
		}
	}

    public function analysis_fetch()
	{

		$analysis_data = $this->db->query("SELECT * FROM `blog_category`");

		$fetch = $analysis_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $analysis_data->result_array();
		} else {
			return false;
		}
	}
	

	public function analysis($id)
    {

        $assign_data = $this->db->query("SELECT * FROM `analysis_detail` where analysis_detail.id=$id ");

        $fetch = $assign_data->num_rows();
        if ($fetch > 0) {
            return $fetch = $assign_data->result_array();
        } else {
            return false;
        }
    }

}
