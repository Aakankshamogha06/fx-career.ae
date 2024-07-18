<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Preffered_time extends MY_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper(['url', 'form', 'cookie', 'security']);
		$this->load->library(['pagination', 'session', 'email', 'form_validation', 'encryption']);
		$this->load->model('admin/preffered_time_model', 'preffered_time_model');

		date_default_timezone_set('Asia/Kolkata');
	}

	public function add_preffered_time()
	{
		if ($this->session->has_userdata('is_admin_login')) {
			$data['view'] = 'admin/preffered_time/add_preffered_time';
			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function preffered_time_submit_data()
	{
		if ($this->session->has_userdata('is_admin_login')) {
			if ($this->input->post()) {
				$this->form_validation->set_rules('time_slot', 'Time Slot', 'required');

				if ($this->form_validation->run() == FALSE) {
					$data['message'] = '<div class="alert alert-danger"><strong>Error!</strong> ' . validation_errors() . '</div>';
				} else {
					$data = $this->input->post();
					if ($this->preffered_time_model->preffered_time_data_submit($data)) {
						redirect("preffered_time/view_preffered_time");
					} else {
						$data['message'] = '<div class="alert alert-danger"><strong>Error!</strong> Sorry, please try again.</div>';
					}
				}
			}
			$data['view'] = 'admin/preffered_time/add_preffered_time';
			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function preffered_time_view()
	{
		if ($this->session->has_userdata('is_admin_login')) {
			$data['preffered_time_view'] = $this->preffered_time_model->preffered_time_view();
			$data['view'] = 'admin/preffered_time/view_preffered_time';
			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function preffered_time_edit($id)
	{
		if ($this->session->has_userdata('is_admin_login')) {
			$data['view_preffered_time'] = $this->preffered_time_model->preffered_time_edit($id);
			$data['view'] = 'admin/preffered_time/edit_preffered_time';
			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function preffered_time_update_data()
	{
		if ($this->session->has_userdata('is_admin_login')) {
			if ($this->input->post()) {
				$this->form_validation->set_rules('time_slot', 'Time Slot', 'required');

				if ($this->form_validation->run() == FALSE) {
					$data['message'] = '<div class="alert alert-danger"><strong>Error!</strong> ' . validation_errors() . '</div>';
				} else {
					$data = $this->input->post();
					if ($this->preffered_time_model->preffered_time_update_data($data)) {
						redirect("preffered_time/view_preffered_time");
					} else {
						$data['message'] = '<div class="alert alert-danger"><strong>Error!</strong> Sorry, please try again.</div>';
					}
				}
			}
			$id = $this->input->post('id');
			$data['view_preffered_time'] = $this->preffered_time_model->preffered_time_edit($id);
			$data['view'] = 'admin/preffered_time/edit_preffered_time';
			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function preffered_time_delete($id)
	{
		if ($this->session->has_userdata('is_admin_login')) {
			if ($this->preffered_time_model->preffered_time_delete($id)) {
				redirect("preffered_time/view_preffered_time");
			}
		} else {
			redirect('admin/auth/login');
		}
	}
}
?>
