<?php
defined('BASEPATH') or exit('No direct script access allowed');

class course extends MY_Controller
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
        $this->load->model('admin/course_model', 'course_model');
        $this->load->helper('security');

        date_default_timezone_set('Asia/Kolkata');
    }

    public function add_course()
    {
        if ($this->session->has_userdata('is_admin_login')) {
            $data['view'] = 'admin/course/add_course';
            $this->load->view('admin/layout', $data);
        } else {
            redirect('admin/auth/login');
        }
    }

    public function course_submit_data()
    {
        if ($this->session->has_userdata('is_admin_login')) {
            $data = $this->input->post();
                if ($this->course_model->course_data_submit($data, $image)) {
                    redirect("admin/course/course_view");
                } else {
                    $data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
                }
        } else {
            redirect('admin/auth/login');
        }
    }

    public function course_view()
    {
        if ($this->session->has_userdata('is_admin_login')) {
            $data['course_view'] = $this->course_model->course_view();
            $data['view'] = 'admin/course/view_course';
            $this->load->view('admin/layout', $data);
        } else {
            redirect('admin/auth/login');
        }
    }

    public function course_edit($id)
    {
        if ($this->session->has_userdata('is_admin_login')) {
            $data['view_course'] = $this->course_model->course_edit($id);
            $data['view'] = 'admin/course/edit_course';
            $this->load->view('admin/layout', $data);
        } else {
            redirect('admin/auth/login');
        }
    }

    public function course_update_data()
    {
        if ($this->session->has_userdata('is_admin_login')) {
            $data = $this->input->post();
                if ($this->course_model->course_update_data($data)) {
                    redirect("admin/course/course_view");
                } else {
                    $data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
                }
        } else {
            redirect('admin/auth/login');
        }
    }

    public function course_delete($id)
    {
        if ($this->session->has_userdata('is_admin_login')) {
            if ($this->course_model->course_delete($id)) {
                redirect("admin/course/course_view");
            }
        } else {
            redirect('admin/auth/login');
        }
    }
}
?>
