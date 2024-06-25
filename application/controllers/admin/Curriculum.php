<?php
defined('BASEPATH') or exit('No direct script access allowed');

class curriculum extends MY_Controller
{
    public function __construct()
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
        $this->load->model('admin/curriculum_model', 'curriculum_model');
        $this->load->helper('security');

        date_default_timezone_set('Asia/Kolkata');
    }

    public function add_curriculum()
    {
        if ($this->session->has_userdata('is_admin_login')) {
            $data['view'] = 'admin/curriculum/add_curriculum';
            $this->load->view('admin/layout', $data);
        } else {
            redirect('admin/auth/login');
        }
    }

    public function curriculum_submit_data()
    {
        if ($this->session->has_userdata('is_admin_login')) {
            $data = $this->input->post();
                if ($this->curriculum_model->curriculum_data_submit($data)) {
                    redirect("admin/curriculum/curriculum_view");
                } else {
                    $data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
                }
        } else {
            redirect('admin/auth/login');
        }
    }

    public function curriculum_view()
    {
        if ($this->session->has_userdata('is_admin_login')) {
            $data['curriculum_view'] = $this->curriculum_model->curriculum_view();
            $data['view'] = 'admin/curriculum/view_curriculum';
            $this->load->view('admin/layout', $data);
        } else {
            redirect('admin/auth/login');
        }
    }

    public function curriculum_edit($id)
    {
        if ($this->session->has_userdata('is_admin_login')) {
            $data['view_curriculum'] = $this->curriculum_model->curriculum_edit($id);
            $data['view'] = 'admin/curriculum/edit_curriculum';
            $this->load->view('admin/layout', $data);
        } else {
            redirect('admin/auth/login');
        }
    }

    public function curriculum_update_data()
    {
        if ($this->session->has_userdata('is_admin_login')) {
            $data = $this->input->post();
                if ($this->curriculum_model->curriculum_update_data($data)) {
                    redirect("admin/curriculum/curriculum_view");
                } else {
                    $data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
                }
        } else {
            redirect('admin/auth/login');
        }
    }

    public function curriculum_delete($id)
    {
        if ($this->session->has_userdata('is_admin_login')) {
            if ($this->curriculum_model->curriculum_delete($id)) {
                redirect("admin/curriculum/curriculum_view");
            }
        } else {
            redirect('admin/auth/login');
        }
    }
}
?>
