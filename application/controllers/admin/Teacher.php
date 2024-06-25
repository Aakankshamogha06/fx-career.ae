<?php
defined('BASEPATH') or exit('No direct script access allowed');

class teacher extends MY_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('pagination');
		$this->load->library('session');
		$this->load->library('email');
		$this->load->helper('cookie');
		$this->load->library('form_validation');
		$this->load->library('encryption');
		$this->load->model('admin/teacher_model', 'teacher_model');
		$this->load->helper('security');

		date_default_timezone_set('Asia/Kolkata');
	}






	public function add_teacher()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data['view'] = 'admin/teacher/add_teacher';

			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function teacher_submit_data()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data = [];
			if ($this->input->post()) {
				$data = $this->input->post();
				$config['upload_path'] = 'uploads/teachers';
				$config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
				$config['encrypt_name'] = TRUE;
				$this->load->library('upload',$config);
				$this->upload->initialize($config);
				if($this->upload->do_upload('teacher_image'))
				{
					$uploadData = $this->upload->data();
					$teacher_image = $uploadData['file_name'];
				}
				else
				{
					$error = array('error' => $this->upload->display_errors());
					print_r($error);
				}
				if ($this->teacher_model->teacher_data_submit($data,$teacher_image) == true) {

					redirect("admin/teacher/teacher_view");
				} ?> <?php
					} else {
						$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
					}
				} else {
					redirect('admin/auth/login');
				}
			}


			
			public function teacher_view()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data['teacher_view'] = $this->teacher_model->teacher_view();
					$data['view'] = 'admin/teacher/view_teacher';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}


			public function teacher_edit($id)
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$id = $this->uri->segment(4);

					$data['view_teacher'] = $this->teacher_model->teacher_edit($id);
					$data['view'] = 'admin/teacher/edit_teacher';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}

			public function teacher_update_data()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data = [];
					if ($this->input->post()) {
						$data = $this->input->post();
						$config['upload_path'] = 'uploads/teachers';
						$config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
						$config['encrypt_name'] = TRUE;
						$this->load->library('upload',$config);
						$this->upload->initialize($config);
						if($this->upload->do_upload('teacher_image'))
						{
							$uploadData = $this->upload->data();
							$teacher_image = $uploadData['file_name'];
						}
						else
						{
							$error = array('error' => $this->upload->display_errors());
							print_r($error);
						}
						if ($this->teacher_model->teacher_update_data($data,$teacher_image) == true) {

							redirect("teacher/view_teacher");
						} ?><?php
						} else {
							$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
						}
					} else {
						redirect('admin/auth/login');
					}
				}
				public function teacher_delete($id)
				{
					if ($this->session->has_userdata('is_admin_login')) {

						$id = $this->uri->segment(4);

						if ($this->teacher_model->teacher_delete($id) == true) {

							redirect("teacher/view_teacher");
			}
			} else {
				redirect('admin/auth/login');
		}
	}
}
?>