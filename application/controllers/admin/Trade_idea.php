<?php
defined('BASEPATH') or exit('No direct script access allowed');

class trade_idea extends MY_Controller
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
		$this->load->model('admin/trade_idea_model', 'trade_idea_model');
		$this->load->helper('security');

		date_default_timezone_set('Asia/Kolkata');
	}






	public function add_trade_idea()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data['view'] = 'admin/trade_idea/add_trade_idea';

			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function trade_idea_submit_data()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data = [];
			if ($this->input->post()) {
				$data = $this->input->post();
				$config['upload_path'] = 'uploads/trade_idea';
				$config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
				$config['encrypt_name'] = TRUE;
				$this->load->library('upload',$config);
				$this->upload->initialize($config);
				if($this->upload->do_upload('trade_image'))
				{
					$uploadData = $this->upload->data();
					$trade_image = $uploadData['file_name'];
				}
				else
				{
					$error = array('error' => $this->upload->display_errors());
					print_r($error);
				}
				if ($this->trade_idea_model->trade_idea_data_submit($data,$trade_image) == true) {

					redirect("admin/trade_idea/trade_idea_view");
				} ?> <?php
					} else {
						$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
					}
				} else {
					redirect('admin/auth/login');
				}
			}


			
			public function trade_idea_view()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data['trade_idea_view'] = $this->trade_idea_model->trade_idea_view();
					$data['view'] = 'admin/trade_idea/view_trade_idea';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}


			public function trade_idea_edit($id)
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$id = $this->uri->segment(4);

					$data['view_trade_idea'] = $this->trade_idea_model->trade_idea_edit($id);
					$data['view'] = 'admin/trade_idea/edit_trade_idea';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}

			public function trade_idea_update_data()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data = [];
					if ($this->input->post()) {
						$data = $this->input->post();
						$config['upload_path'] = 'uploads/trade_idea';
						$config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
						$config['encrypt_name'] = TRUE;
						$this->load->library('upload',$config);
						$this->upload->initialize($config);
						if($this->upload->do_upload('trade_image'))
						{
							$uploadData = $this->upload->data();
							$trade_image = $uploadData['file_name'];
						}
						else
						{
							$error = array('error' => $this->upload->display_errors());
							print_r($error);
						}
						if ($this->trade_idea_model->trade_idea_update_data($data,$trade_image) == true) {

							redirect("trade_idea/view_trade_idea");
						} ?><?php
						} else {
							$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
						}
					} else {
						redirect('admin/auth/login');
					}
				}
				public function trade_idea_delete($id)
				{
					if ($this->session->has_userdata('is_admin_login')) {

						$id = $this->uri->segment(4);

						if ($this->trade_idea_model->trade_idea_delete($id) == true) {

							redirect("trade_idea/view_trade_idea");
			}
			} else {
				redirect('admin/auth/login');
		}
	}
	public function index() {
        $this->load->model('trade_idea_model');
        $category = 'blog_category';
        $data['trade_idea'] = $this->trade_idea_model->get_recent_trade_idea($category);
        $this->load->view('blog_view', $data);
    }
}
?>