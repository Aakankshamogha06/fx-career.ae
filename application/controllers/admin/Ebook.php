<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ebook extends MY_Controller
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
		$this->load->model('admin/ebook_model', 'ebook_model');
		$this->load->helper('security');

		date_default_timezone_set('Asia/Kolkata');
	}

	public function add_ebook()
	{
		if ($this->session->has_userdata('is_admin_login')) {
			$data['view'] = 'admin/ebook/add_ebook';
			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function ebook_submit_data()
	{
		if ($this->session->has_userdata('is_admin_login')) {
			$data = $this->input->post();
			$config['upload_path'] = 'uploads/ebook_image';
			$config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
			$config['encrypt_name'] = TRUE;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ($this->upload->do_upload('ebook_image')) {
				$uploadData = $this->upload->data();
				$ebook_image = $uploadData['file_name'];
			} else {
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
			}

			$config['upload_path'] = 'uploads/ebook_pdf';
			$config['allowed_types'] = 'pdf';
			$config['encrypt_name'] = TRUE;
			$this->upload->initialize($config);
			if ($this->upload->do_upload('ebook_pdf')) {
				$uploadData = $this->upload->data();
				$ebook_pdf = $uploadData['file_name'];
			} else {
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
			}

			if ($this->ebook_model->ebook_data_submit($data, $ebook_image, $ebook_pdf)) {
				redirect("admin/ebook/ebook_view");
			} else {
				$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
			}
		} else {
			redirect('admin/auth/login');
		}
	}

	public function ebook_view()
	{
		if ($this->session->has_userdata('is_admin_login')) {
			$data['ebook_view'] = $this->ebook_model->ebook_view();
			$data['view'] = 'admin/ebook/view_ebook';
			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function ebook_edit($id)
	{
		if ($this->session->has_userdata('is_admin_login')) {
			$data['view_ebook'] = $this->ebook_model->ebook_edit($id);
			$data['view'] = 'admin/ebook/edit_ebook';
			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function ebook_update_data()
	{
		if ($this->session->has_userdata('is_admin_login')) {
			$data = $this->input->post();
			$config['upload_path'] = 'uploads/ebook_image';
			$config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
			$config['encrypt_name'] = TRUE;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ($this->upload->do_upload('ebook_image')) {
				$uploadData = $this->upload->data();
				$ebook_image = $uploadData['file_name'];
			} else {
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
			}
			if ($this->ebook_model->ebook_update_data($data, $ebook_image)) {
				redirect("admin/ebook/ebook_view");
			} else {
				$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
			}
		} else {
			redirect('admin/auth/login');
		}
	}

	public function ebook_delete($id)
	{
		if ($this->session->has_userdata('is_admin_login')) {
			if ($this->ebook_model->ebook_delete($id)) {
				redirect("admin/ebook/ebook_view");
			}
		} else {
			redirect('admin/auth/login');
		}
	}

}
?>
