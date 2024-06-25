<?php

class Contact_model extends CI_Model
{
    
    public function contact_view()
    {
        $result = $this->db->query("SELECT * FROM `contact_form` order by id DESC;");
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return 0;
        }
    }

    public function contact_delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('contact_form');
    }

    public function contact_submit_data($data)
    {
        $data = [
            'username'=>$data['username'],
            'mobile_no'=>$data['mobile_no'],
            'email'=>$data['email'],
            'message'=>$data['message'],
        ];
        if ($this->db->insert('contact_form', $data)) 
        {
            return $data; 
        } 
        else
        { 
            return false; 
        }
    }

}
?>