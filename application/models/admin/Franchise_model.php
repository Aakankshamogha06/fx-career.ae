<?php

class Franchise_Model extends CI_Model
{
    

    public function franchise_view()
    {
        $result = $this->db->query("SELECT * FROM `franchise`");
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return 0;
        }
    }

    public function franchise_delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('franchise');
    }

    public function franchise_submit_data($data)
    {
        $data = [
            'username'=>$data['username'],
            'email'=>$data['email'],
            'mobile_no'=>$data['mobile_no'],
            'location' =>$data['location'] ,
            'message'=>$data['message'],
        ];
        if ($this->db->insert('franchise', $data)) 
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