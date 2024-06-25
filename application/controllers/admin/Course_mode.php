<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Course_mode extends MY_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper(['url', 'form', 'cookie', 'security']);
		$this->load->library(['pagination', 'session', 'email', 'form_validation', 'encryption']);
		$this->load->model('admin/course_mode_model', 'course_mode_model');

		date_default_timezone_set('Asia/Kolkata');
	}

	public function add_course_mode()
	{
		if ($this->session->has_userdata('is_admin_login')) {
			$data['view'] = 'admin/course_mode/add_course_mode';
			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function course_mode_submit_data()
	{
		if ($this->session->has_userdata('is_admin_login')) {
			$data = [];
			if ($this->input->post()) {
				$this->form_validation->set_rules('mode_name', 'Mode Name', 'required');

				if ($this->form_validation->run() == FALSE) {
					$data['message'] = '<div class="alert alert-danger"><strong>Error!</strong> ' . validation_errors() . '</div>';
				} else {
					$data = $this->input->post();
					if ($this->course_mode_model->course_mode_data_submit($data)) {
						redirect("course_mode/view_course_mode");
					} else {
						$data['message'] = '<div class="alert alert-danger"><strong>Error!</strong> Sorry, please try again.</div>';
					}
				}
			}
			$data['view'] = 'admin/course_mode/add_course_mode';
			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function course_mode_view()
	{
		if ($this->session->has_userdata('is_admin_login')) {
			$data['course_mode_view'] = $this->course_mode_model->course_mode_view();
			$data['view'] = 'admin/course_mode/view_course_mode';
			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function course_mode_edit($id)
	{
		if ($this->session->has_userdata('is_admin_login')) {
			$id = $this->uri->segment(4);
			$data['view_course_mode'] = $this->course_mode_model->course_mode_edit($id);
			$data['view'] = 'admin/course_mode/edit_course_mode';
			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function course_mode_update_data()
	{
		if ($this->session->has_userdata('is_admin_login')) {
			$data = [];
			if ($this->input->post()) {
				$this->form_validation->set_rules('mode_name', 'Mode Name', 'required');

				if ($this->form_validation->run() == FALSE) {
					$data['message'] = '<div class="alert alert-danger"><strong>Error!</strong> ' . validation_errors() . '</div>';
				} else {
					$data = $this->input->post();
					if ($this->course_mode_model->course_mode_update_data($data)) {
						redirect("course_mode/view_course_mode");
					} else {
						$data['message'] = '<div class="alert alert-danger"><strong>Error!</strong> Sorry, please try again.</div>';
					}
				}
			}
			$id = $this->input->post('id');
			$data['view_course_mode'] = $this->course_mode_model->course_mode_edit($id);
			$data['view'] = 'admin/course_mode/edit_course_mode';
			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function course_mode_delete($id)
	{
		if ($this->session->has_userdata('is_admin_login')) {
			$id = $this->uri->segment(4);
			if ($this->course_mode_model->course_mode_delete($id)) {
				redirect("course_mode/view_course_mode");
			}
		} else {
			redirect('admin/auth/login');
		}
	}
}
?>
