<?php
class Contact_us_model extends CI_Model
{
    public function contact_us_data_submit($data)
    {
        $data = [
            'username' => $data['username'],
            'email' => $data['email'],
            'mobile_no' => $data['mobile_no'],
            'location' => $data['location'],
            'message' => $data['message'],
            'subject' => $data['subject'],
        ];
        if ($this->db->insert('contact', $data)) {
            return $data;
        } else {
            return false;
        }
    }

    public function contact_us_view()
    {
        $result = $this->db->query("SELECT * FROM `contact`;");
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return 0;
        }
    }

    public function contact_us_delete($id)
    {
        return $this->db->where('id', $id)->delete('contact');
    }

    public function contact_us_update_data($data)
    {
        $newdata = [
            'name' => $data['name'],
            'email' => $data['email'],
            'mobile_no' => $data['mobile_no'],
            'location' => $data['location'],
            'message' => $data['message'],
            'subject' => $data['subject'],
        ];
        $this->db->where('id', $data['id']);
        if ($this->db->update('contact', $newdata)) {
            return $newdata;
        } else {
            return false;
        }
    }

    public function contact_us_edit($id)
    {
        $result = $this->db->query("SELECT * FROM `contact` WHERE id=$id");
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return 0;
        }
    }
}
?>
