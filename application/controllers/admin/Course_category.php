<?php
defined('BASEPATH') or exit('No direct script access allowed');

class course_category extends MY_Controller
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
        $this->load->model('admin/course_category_model', 'course_category_model');
        $this->load->helper('security');

        date_default_timezone_set('Asia/Kolkata');
    }

    public function add_course_category()
    {
        if ($this->session->has_userdata('is_admin_login')) {
            $data['view'] = 'admin/course_category/add_course_category';
            $this->load->view('admin/layout', $data);
        } else {
            redirect('admin/auth/login');
        }
    }

    public function course_category_submit_data()
    {
        if ($this->session->has_userdata('is_admin_login')) {
            $data = $this->input->post();
                if ($this->course_category_model->course_category_data_submit($data)) {
                    redirect("admin/course_category/course_category_view");
                } else {
                    $data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
                }
        } else {
            redirect('admin/auth/login');
        }
    }

    public function course_category_view()
    {
        if ($this->session->has_userdata('is_admin_login')) {
            $data['course_category_view'] = $this->course_category_model->course_category_view();
            $data['view'] = 'admin/course_category/view_course_category';
            $this->load->view('admin/layout', $data);
        } else {
            redirect('admin/auth/login');
        }
    }

    public function course_category_edit($id)
    {
        if ($this->session->has_userdata('is_admin_login')) {
            $data['view_course_category'] = $this->course_category_model->course_category_edit($id);
            $data['view'] = 'admin/course_category/edit_course_category';
            $this->load->view('admin/layout', $data);
        } else {
            redirect('admin/auth/login');
        }
    }

    public function course_category_update_data()
    {
        if ($this->session->has_userdata('is_admin_login')) {
            $data = $this->input->post();
                if ($this->course_category_model->course_category_update_data($data)) {
                    redirect("admin/course_category/course_category_view");
                } else {
                    $data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
                }
        } else {
            redirect('admin/auth/login');
        }
    }

    public function course_category_delete($id)
    {
        if ($this->session->has_userdata('is_admin_login')) {
            if ($this->course_category_model->course_category_delete($id)) {
                redirect("admin/course_category/course_category_view");
            }
        } else {
            redirect('admin/auth/login');
        }
    }
}
?>
