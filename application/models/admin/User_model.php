<?php
	class User_model extends CI_Model{

		public function add_user($data){
			$this->db->insert('users', $data);
			return true;
		}
		public function insert_user($data)
		{
			return $this->db->insert('users', $data);
			
		}
		public function insert_users($data) {
			// Insert user data into 'users' table
			$this->db->insert('users', $data);
			return $this->db->insert_id(); // Return the insert ID
		}
		public function get_all_users(){
			$query = $this->db->query("SELECT *,(SELECT role_name FROM `role` where id=is_admin) as role_name  FROM `users`;");
			return $result = $query->result_array();
		}

		public function get_user_by_id($id){
			$query = $this->db->get_where('users', array('id' => $id));
			return $result = $query->row_array();
		}

		public function edit_user($data, $id){
			$this->db->where('id', $id);
			$this->db->update('users', $data);
			return true;
		}


		public function role_fetch()
    {
        
        $role_data = $this->db->query("SELECT * FROM `role`");

        $fetch = $role_data->num_rows();
        if ($fetch > 0) {
            return $fetch = $role_data->result_array();
			
        } else {
            return false;
        }
    }


	public function resolve_user_login($email, $password) {
		
		$this->db->select('password');
		$this->db->from('users');
		$this->db->where('email', $email);
		$hash = $this->db->get()->row('password');
		
		return $this->verify_password_hash($password, $hash);
		
	}
	public function hash_password($password)
{
    return password_hash($password, PASSWORD_BCRYPT);
}
	
	
	public function verify_password_hash($password, $hash) {
		
		return password_verify($password, $hash);
		
	}

	public function get_user_id_from_username($email) {
		
		$this->db->select('id');
		$this->db->from('users');
		$this->db->where('email', $email);

		return $this->db->get()->row('id');
		
	}
	
	public function get_user($user_id) {
		
		$this->db->from('users');
		$this->db->where('id', $user_id);
		return $this->db->get()->row();
		
	}
	public function user($id)
    {

        $assign_data = $this->db->query("SELECT * FROM `users` where users.id=$id ");

        $fetch = $assign_data->num_rows();
        if ($fetch > 0) {
            return $fetch = $assign_data->result_array();
        } else {
            return false;
        }
    }
	public function update_user($user_id, $data)
	{
		$user = $this->db->get_where('users', ['id' => $user_id])->row();
		if ($user) {
			$update_data = [];
			if (isset($data['firstname'])) {
				$update_data['firstname'] = $data['firstname'];
			}

			if (isset($data['lastname'])) {
				$update_data['lastname'] = $data['lastname'];
			}

			if (isset($data['email'])) {
				$update_data['email'] = $data['email'];
			}
	
			if (isset($data['mobile_no'])) {
				$update_data['mobile_no'] = $data['mobile_no'];
			}

			if (isset($data['username'])) {
				$update_data['username'] = $data['username'];
			}
			$this->db->where('id', $user_id);
			$this->db->update('users', $update_data);
	
			return true; 
		}
	
		return false;
	}

	
	}

?>