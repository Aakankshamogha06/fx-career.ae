<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/auth_model', 'auth_model');
		$this->load->model('admin/user_model', 'user_model');
    }

    public function index() {
        if ($this->session->has_userdata('is_admin_login')) {
            redirect('admin/dashboard');
        } else {
            $this->load->view('admin/auth/login');
        }
    }

    public function login() {
        if ($this->input->post('submit')) {
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('login');
            } else {
                $data = array(
                    'email' => $this->input->post('email'),
                    'password' => $this->input->post('password')
                );
                $result = $this->auth_model->login($data);
                if ($result) {
                    $admin_data = array(
                        'admin_id' => $result['id'],
                        'username' => $result['username'],
                        'name' => $result['firstname'] . ' ' . $result['lastname'],
                        'role' => $result['is_admin'],
                        'is_admin_login' => TRUE
                    );
                    $this->session->set_userdata($admin_data);
                    redirect(base_url('admin/dashboard'), 'refresh');
                } else {
                    $data['msg'] = 'Invalid Email or Password!';
                    $this->load->view('login', $data);
                }
            }
        } else {
            $this->load->view('admin/auth/login');
        }
    }

    public function change_pwd() {
        $id = $this->session->userdata('admin_id');
        if ($this->input->post('submit')) {
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            $this->form_validation->set_rules('confirm_pwd', 'Confirm Password', 'trim|required|matches[password]');
            if ($this->form_validation->run() == FALSE) {
                $data['view'] = 'admin/auth/change_pwd';
                $this->load->view('admin/layout', $data);
            } else {
                $data = array(
                    'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT)
                );
                $result = $this->auth_model->change_pwd($data, $id);
                if ($result) {
                    $this->session->set_flashdata('msg', 'Password has been changed successfully!');
                    redirect(base_url('admin/auth/change_pwd'));
                }
            }
        } else {
            $data['view'] = 'admin/auth/change_pwd';
            $this->load->view('admin/layout', $data);
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect(base_url('admin/auth/login'), 'refresh');
    }

	public function process_login() {
        // Form validation rules
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            // Validation failed, show login form with errors
            $this->load->view('login');
        } else {
            // Validation passed, check credentials
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            // Check user credentials against database
            $user = $this->user_model->resolve_user_login($email, $password);

            if ($user) {
                // Set session data
                $user_data = array(
                    'user_id' => $user->id,
                    'email' => $user->email,
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($user_data);

                // Redirect to dashboard or any other page
                redirect('admin/dashboard');
            } else {
                // Login failed, show error message
                $data['msg'] = 'Invalid email or password';
				redirect('login');
            }
        }
    }
}
?>
