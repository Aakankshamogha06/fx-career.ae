<?php
defined('BASEPATH') or exit('No direct script access allowed');

class analysis_detail extends MY_Controller
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
		$this->load->model('admin/analysis_detail_model', 'analysis_detail_model');
		$this->load->helper('security');

		date_default_timezone_set('Asia/Kolkata');
	}






	public function add_analysis_detail()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data['view'] = 'admin/analysis_detail/add_analysis_detail';

			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function analysis_detail_submit_data()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data = [];
			if ($this->input->post()) {
				$data = $this->input->post();
				$config['upload_path'] = 'uploads/analysis';
				$config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
				$config['encrypt_name'] = TRUE;
				$this->load->library('upload',$config);
				$this->upload->initialize($config);
				if($this->upload->do_upload('analysis_image'))
				{
					$uploadData = $this->upload->data();
					$analysis_image = $uploadData['file_name'];
				}
				else
				{
					$error = array('error' => $this->upload->display_errors());
					print_r($error);
				}
				if ($this->analysis_detail_model->analysis_detail_data_submit($data,$analysis_image) == true) {

					redirect("admin/analysis_detail/analysis_detail_view");
				} ?> <?php
					} else {
						$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
					}
				} else {
					redirect('admin/auth/login');
				}
			}


			
			public function analysis_detail_view()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data['analysis_detail_view'] = $this->analysis_detail_model->analysis_detail_view();
					$data['view'] = 'admin/analysis_detail/view_analysis_detail';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}


			public function analysis_detail_edit($id)
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$id = $this->uri->segment(4);

					$data['view_analysis_detail'] = $this->analysis_detail_model->analysis_detail_edit($id);
					$data['view'] = 'admin/analysis_detail/edit_analysis_detail';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}

			public function analysis_detail_update_data()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data = [];
					if ($this->input->post()) {
						$data = $this->input->post();


						if ($this->analysis_detail_model->analysis_detail_update_data($data) == true) {

							redirect("analysis_detail/view_analysis_detail");
						} ?><?php
						} else {
							$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
						}
					} else {
						redirect('admin/auth/login');
					}
				}
				public function analysis_detail_delete($id)
				{
					if ($this->session->has_userdata('is_admin_login')) {

						$id = $this->uri->segment(4);

						if ($this->analysis_detail_model->analysis_detail_delete($id) == true) {

							redirect("analysis_detail/view_analysis_detail");
			}
			} else {
				redirect('admin/auth/login');
		}
	}
	public function index() {
        $this->load->model('analysis_detail_model');
        $category = 'analysis_category';
        $data['analysis'] = $this->analysis_detail_model->get_recent_analysis($category);
        $this->load->view('analysis_view', $data);
    }
}
?>