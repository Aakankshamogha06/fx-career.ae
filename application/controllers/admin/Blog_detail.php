<?php
defined('BASEPATH') or exit('No direct script access allowed');

class blog_detail extends MY_Controller
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
		$this->load->model('admin/blog_detail_model', 'blog_detail_model');
		$this->load->helper('security');

		date_default_timezone_set('Asia/Kolkata');
	}






	public function add_blog_detail()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data['view'] = 'admin/blog_detail/add_blog_detail';

			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function blog_detail_submit_data()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data = [];
			if ($this->input->post()) {
				$data = $this->input->post();
				$config['upload_path'] = 'uploads/blogs';
				$config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
				$config['encrypt_name'] = TRUE;
				$this->load->library('upload',$config);
				$this->upload->initialize($config);
				if($this->upload->do_upload('blog_image'))
				{
					$uploadData = $this->upload->data();
					$blog_image = $uploadData['file_name'];
				}
				else
				{
					$error = array('error' => $this->upload->display_errors());
					print_r($error);
				}
				if ($this->blog_detail_model->blog_detail_data_submit($data,$blog_image) == true) {

					redirect("admin/blog_detail/blog_detail_view");
				} ?> <?php
					} else {
						$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
					}
				} else {
					redirect('admin/auth/login');
				}
			}


			
			public function blog_detail_view()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data['blog_detail_view'] = $this->blog_detail_model->blog_detail_view();
					$data['view'] = 'admin/blog_detail/view_blog_detail';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}


			public function blog_detail_edit($id)
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$id = $this->uri->segment(4);

					$data['view_blog_detail'] = $this->blog_detail_model->blog_detail_edit($id);
					$data['view'] = 'admin/blog_detail/edit_blog_detail';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}

			public function blog_detail_update_data()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data = [];
					if ($this->input->post()) {
						$data = $this->input->post();
						$config['upload_path'] = 'uploads/blogs';
						$config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
						$config['encrypt_name'] = TRUE;
						$this->load->library('upload',$config);
						$this->upload->initialize($config);
						if($this->upload->do_upload('blog_image'))
						{
							$uploadData = $this->upload->data();
							$blog_image = $uploadData['file_name'];
						}
						else
						{
							$error = array('error' => $this->upload->display_errors());
							print_r($error);
						}
						if ($this->blog_detail_model->blog_detail_update_data($data,$blog_image) == true) {

							redirect("blog_detail/view_blog_detail");
						} ?><?php
						} else {
							$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
						}
					} else {
						redirect('admin/auth/login');
					}
				}
				public function blog_detail_delete($id)
				{
					if ($this->session->has_userdata('is_admin_login')) {

						$id = $this->uri->segment(4);

						if ($this->blog_detail_model->blog_detail_delete($id) == true) {

							redirect("blog_detail/view_blog_detail");
			}
			} else {
				redirect('admin/auth/login');
		}
	}
	public function index() {
        $this->load->model('Blog_detail_model');
        $category = 'blog_category';
        $data['blogs'] = $this->Blog_detail_model->get_recent_blogs($category);
        $this->load->view('blog_view', $data);
    }
}
?>