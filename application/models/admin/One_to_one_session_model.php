<?php
class one_to_one_session_model extends CI_Model
{


	public function one_to_one_session_data_submit($data,$session_image)
	{
		$data = [
			'session_name' => $data['session_name'],
			'session_image' => $session_image,
            'date' => $data['date'],
            'time' => $data['time'],
            'location' => $data['location'],
            'language' => $data['language'],
            'duration' => $data['duration'],
            'speaker' => $data['speaker'],
		];
		if ($this->db->insert('one_to_one_session', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function one_to_one_session_view()
{
    $result = $this->db->query(" SELECT * FROM one_to_one_session ");

    if ($result->num_rows() > 0) {
        return $result->result();
    } else {
        return 0;
    }
}
public function one_to_one_session(){
	$result = $this->db->query("SELECT * FROM `one_to_one_session` ORDER BY blog_date DESC LIMIT 3");
	if ($result->num_rows() > 0) {
        return $result->result();
    } else {
        return 0;
    }
}

public function one_to_one_session_data_nm()
{
    $uid = $this->uri->segment(2);
    $result = $this->db->query("SELECT * FROM `one_to_one_session` WHERE REPLACE(LOWER(slug), ' ', '-')='$uid'");

    if ($result->num_rows() > 0) 
    {
        return $result->result(); // Return the fetched data
    } 
    else {
        return 0;
    }
}



	public function one_to_one_session_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('one_to_one_session');
	}


	public function one_to_one_session_update_data($data,$session_image)
	{
		$newdata = [
			'session_name' => $data['session_name'],
			'session_image' => $session_image,
            'date' => $data['date'],
            'time' => $data['time'],
            'location' => $data['location'],
            'language' => $data['language'],
            'duration' => $data['duration'],
            'speaker' => $data['speaker'],
		];
		$this->db->where('id', $data['id']);
		if ($this->db->update('one_to_one_session', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function one_to_one_session_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `one_to_one_session` where id=$id");
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
	public function get_recent_one_to_one_session($limit = 3) {
		$this->db->select('*');
		$this->db->from('one_to_one_session');
		$this->db->order_by('date', 'DESC');
		$this->db->limit($limit);
	
		$query = $this->db->get();
	
		return $query->result();
	}	

	public function blog($id)
    {

        $assign_data = $this->db->query("SELECT * FROM `one_to_one_session` where one_to_one_session.id=$id ");

        $fetch = $assign_data->num_rows();
        if ($fetch > 0) {
            return $fetch = $assign_data->result_array();
        } else {
            return false;
        }
    }

}
