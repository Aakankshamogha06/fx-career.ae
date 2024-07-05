<?php
class Auth_model extends CI_Model {

    public function login($data) {
        $email = $data['email'];
        $query = $this->db->query("SELECT *,(SELECT role_name FROM `role` WHERE id=is_admin) AS role_name FROM `users` WHERE email='$email'");
        
        if ($query->num_rows() == 0) {
            return false;
        } else {
            $result = $query->row_array();
            $validPassword = password_verify($data['password'], $result['password']);
            if ($validPassword) {
                return $result;
            } else {
                return false;
            }
        }
    }

    public function change_pwd($data, $id) {
        $this->db->where('id', $id);
        $this->db->update('users', $data);
        return true;
    }
}
?>
