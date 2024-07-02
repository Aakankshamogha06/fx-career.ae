<?php
defined('BASEPATH') or exit('No direct script access allowed');

class one_to_one_session extends MY_Controller
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
		$this->load->model('admin/one_to_one_session_model', 'one_to_one_session_model');
		$this->load->helper('security');

		date_default_timezone_set('Asia/Kolkata');
	}






	public function add_one_to_one_session()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data['view'] = 'admin/one_to_one_session/add_one_to_one_session';

			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function one_to_one_session_submit_data()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data = [];
			if ($this->input->post()) {
				$data = $this->input->post();
				$config['upload_path'] = 'uploads/one_to_one_session';
				$config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
				$config['encrypt_name'] = TRUE;
				$this->load->library('upload',$config);
				$this->upload->initialize($config);
				if($this->upload->do_upload('session_image'))
				{
					$uploadData = $this->upload->data();
					$session_image = $uploadData['file_name'];
				}
				else
				{
					$error = array('error' => $this->upload->display_errors());
					print_r($error);
				}
				if ($this->one_to_one_session_model->one_to_one_session_data_submit($data,$session_image) == true) {

					redirect("admin/one_to_one_session/one_to_one_session_view");
				} ?> <?php
					} else {
						$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
					}
				} else {
					redirect('admin/auth/login');
				}
			}


			
			public function one_to_one_session_view()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data['one_to_one_session_view'] = $this->one_to_one_session_model->one_to_one_session_view();
					$data['view'] = 'admin/one_to_one_session/view_one_to_one_session';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}


			public function one_to_one_session_edit($id)
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$id = $this->uri->segment(4);

					$data['view_one_to_one_session'] = $this->one_to_one_session_model->one_to_one_session_edit($id);
					$data['view'] = 'admin/one_to_one_session/edit_one_to_one_session';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}

			public function one_to_one_session_update_data()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data = [];
					if ($this->input->post()) {
						$data = $this->input->post();
						$config['upload_path'] = 'uploads/one_to_one_session';
						$config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
						$config['encrypt_name'] = TRUE;
						$this->load->library('upload',$config);
						$this->upload->initialize($config);
						if($this->upload->do_upload('session_image'))
						{
							$uploadData = $this->upload->data();
							$session_image = $uploadData['file_name'];
						}
						else
						{
							$error = array('error' => $this->upload->display_errors());
							print_r($error);
						}
						if ($this->one_to_one_session_model->one_to_one_session_update_data($data,$session_image) == true) {

							redirect("one_to_one_session/view_one_to_one_session");
						} ?><?php
						} else {
							$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
						}
					} else {
						redirect('admin/auth/login');
					}
				}
				public function one_to_one_session_delete($id)
				{
					if ($this->session->has_userdata('is_admin_login')) {

						$id = $this->uri->segment(4);

						if ($this->one_to_one_session_model->one_to_one_session_delete($id) == true) {

							redirect("one_to_one_session/view_one_to_one_session");
			}
			} else {
				redirect('admin/auth/login');
		}
	}
	public function index() {
        $this->load->model('one_to_one_session_model');
        $category = 'blog_category';
        $data['one_to_one_session'] = $this->one_to_one_session_model->get_recent_one_to_one_session($category);
        $this->load->view('blog_view', $data);
    }
}
?>