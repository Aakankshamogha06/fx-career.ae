<?php
class topic_model extends CI_Model
{


	public function topic_data_submit($data)
	{
		$data = [
			
			'course_id' => $data['course_id'],
            'topic_name' => $data['topic_name'],
            
		];
		if ($this->db->insert('topic', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function topic_view()
{
    $result = $this->db->query(" SELECT *,(SELECT course_name FROM detail WHERE topic.course_id= detail.id) AS course_id FROM `topic`;
	");

    if ($result->num_rows() > 0) {
        return $result->result();
    } else {
        return 0;
    }
}


	


	public function topic_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('topic');
	}


	public function topic_update_data($data)
	{
		$newdata = [
			'course_id' => $data['course_id'],
			'topic_name' => $data['topic_name'],
		];
		$this->db->where('id', $data['id']);
		if ($this->db->update('topic', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function topic_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `topic` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function course_fetch()
	{

		$course_data = $this->db->query("SELECT * FROM `detail`");

		$fetch = $course_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $course_data->result_array();
		} else {
			return false;
		}
	}


	public function onlineBasic_topic($id)
    {
    $result = $this->db->query("SELECT * FROM `topic` WHERE course_id=$id");

    if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return 0;
        }
    }

	public function offlineBasic_topic($id)
    {
    $result = $this->db->query("SELECT * FROM `topic` WHERE course_id=$id");

    if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return 0;
        }
    }

	public function topic($id)
{
	
	$result = $this->db->query("SELECT * FROM topic WHERE course_id= $id");
	if ($result->num_rows() > 0) {
		return $result->result();
	} else {
		return 0;
	}
}
}
