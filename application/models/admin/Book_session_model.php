<?php
class Book_session_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function insert_user($data)
    {
        return $this->db->insert('book_session', $data);
    }

    // Other methods for admin functionality can remain as they are.
}
