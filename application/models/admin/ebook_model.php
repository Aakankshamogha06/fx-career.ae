	<?php
class ebook_model extends CI_Model
{


	public function ebook_data_submit($data,$ebook_image,$ebook_pdf)
	{
		$data = [
			
			'ebook_name' => $data['ebook_name'],
			'ebook_desc' => $data['ebook_desc'],
            'ebook_image' => $ebook_image,
           'ebook_pdf' =>$ebook_pdf,
            'ebook_type' => $data['ebook_type'],
            'ebook_pages' => $data['ebook_pages'],
            
		];
		if ($this->db->insert('ebook', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function ebook_view()
{
    $result = $this->db->query("SELECT * FROM `ebook`;");

    if ($result->num_rows() > 0) {
        return $result->result();
    } else {
        return 0;
    }
}


	


	public function ebook_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('ebook');
	}


	public function ebook_update_data($data,$ebook_image,$ebook_pdf)
	{
		$newdata = [
			
			'ebook_name' => $data['ebook_name'],
			'ebook_desc' => $data['ebook_desc'],
            'ebook_image' => $ebook_image,
           'ebook_pdf' =>$ebook_pdf,
            'ebook_type' => $data['ebook_type'],
            'ebook_pages' => $data['ebook_pages'],
            
		];
		$this->db->where('id', $data['id']);
		if ($this->db->update('ebook', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function ebook_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `ebook` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function ebook_category_fetch()
	{

		$ebook_category_data = $this->db->query("SELECT * FROM `ebook_category`");

		$fetch = $ebook_category_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $ebook_category_data->result_array();
		} else {
			return false;
		}
	}
    public function ebook_mode_fetch()
	{

		$ebook_mode_data = $this->db->query("SELECT * FROM `ebook_mode`");

		$fetch = $ebook_mode_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $ebook_mode_data->result_array();
		} else {
			return false;
		}
	}
    public function ebook_language_fetch()
	{

		$ebook_language_data = $this->db->query("SELECT * FROM `ebook_language`");

		$fetch = $ebook_language_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $ebook_language_data->result_array();
		} else {
			return false;
		}
	}
    public function topic_fetch()
	{

		$topic_data = $this->db->query("SELECT * FROM `topic`");

		$fetch = $topic_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $topic_data->result_array();
		} else {
			return false;
		}
	}

}
