<?php
class Preferred_topic_model extends CI_Model
{
    public function preferred_topic_data_submit($data)
    {
        $data = [
            'topic_name' => $this->security->xss_clean($data['topic_name']),
        ];
        return $this->db->insert('preferred_topic', $data);
    }

    public function preferred_topic_view()
    {
        $result = $this->db->get('preferred_topic');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return [];
        }
    }

    public function preferred_topic_delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('preferred_topic');
    }

    public function preferred_topic_update_data($data)
    {
        $this->db->where('id', $this->security->xss_clean($data['id']));
        return $this->db->update('preferred_topic', ['topic_name' => $this->security->xss_clean($data['topic_name'])]);
    }

    public function preferred_topic_edit($id)
    {
        $this->db->where('id', $id);
        $result = $this->db->get('preferred_topic');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return null;
        }
    }
}
?>
