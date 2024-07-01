<?php
class trade_idea_model extends CI_Model
{


	public function trade_idea_data_submit($data,$trade_image)
	{
		$data = [
			
			'trade_name' => $data['trade_name'],
			'trade_image' => $trade_image,
            'date' => $data['date'],
            'description' => $data['description'],
            'slug' => $data['slug'],
            'title' => $data['title'],
            'keywords' => $data['keywords'],
            'meta_desc' => $data['meta_desc'],
		];
		if ($this->db->insert('trade_idea', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function trade_idea_view()
{
    $result = $this->db->query(" SELECT * FROM trade_idea ");

    if ($result->num_rows() > 0) {
        return $result->result();
    } else {
        return 0;
    }
}
public function trade_idea(){
	$result = $this->db->query("SELECT * FROM `trade_idea` ORDER BY blog_date DESC LIMIT 3");
	if ($result->num_rows() > 0) {
        return $result->result();
    } else {
        return 0;
    }
}

public function trade_idea_data_nm()
{
    $uid = $this->uri->segment(2);
    $result = $this->db->query("SELECT * FROM `trade_idea` WHERE REPLACE(LOWER(slug), ' ', '-')='$uid'");

    if ($result->num_rows() > 0) 
    {
        return $result->result(); // Return the fetched data
    } 
    else {
        return 0;
    }
}



	public function trade_idea_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('trade_idea');
	}


	public function trade_idea_update_data($data,$trade_image)
	{
		$newdata = [
			'trade_name' => $data['trade_name'],
			'trade_image' => $trade_image,
            'date' => $data['date'],
            'description' => $data['description'],
            'slug' => $data['slug'],
            'title' => $data['title'],
            'keywords' => $data['keywords'],
            'meta_desc' => $data['meta_desc'],
		];
		$this->db->where('id', $data['id']);
		if ($this->db->update('trade_idea', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function trade_idea_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `trade_idea` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function role_fetch()
	{

		$role_data = $this->db->query("SELECT * FROM `blog`");

		$fetch = $role_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $role_data->result_array();
		} else {
			return false;
		}
	}

    public function blog_fetch()
	{

		$blog_data = $this->db->query("SELECT * FROM `blog_category`");

		$fetch = $blog_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $blog_data->result_array();
		} else {
			return false;
		}
	}
	public function get_recent_trade_idea($limit = 3) {
		$this->db->select('*');
		$this->db->from('trade_idea');
		$this->db->order_by('date', 'DESC');
		$this->db->limit($limit);
	
		$query = $this->db->get();
	
		return $query->result();
	}	

	public function blog($id)
    {

        $assign_data = $this->db->query("SELECT * FROM `trade_idea` where trade_idea.id=$id ");

        $fetch = $assign_data->num_rows();
        if ($fetch > 0) {
            return $fetch = $assign_data->result_array();
        } else {
            return false;
        }
    }

}
