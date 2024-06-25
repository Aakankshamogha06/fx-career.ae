<?php
defined('BASEPATH') or exit('No direct script access allowed');

class topic extends MY_Controller
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
        $this->load->model('admin/topic_model', 'topic_model');
        $this->load->helper('security');

        date_default_timezone_set('Asia/Kolkata');
    }

    public function add_topic()
    {
        if ($this->session->has_userdata('is_admin_login')) {
            $data['view'] = 'admin/topic/add_topic';
            $this->load->view('admin/layout', $data);
        } else {
            redirect('admin/auth/login');
        }
    }

    public function topic_submit_data()
    {
        if ($this->session->has_userdata('is_admin_login')) {
            $data = $this->input->post();
                if ($this->topic_model->topic_data_submit($data)) {
                    redirect("admin/topic/topic_view");
                } else {
                    $data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
                }
        } else {
            redirect('admin/auth/login');
        }
    }

    public function topic_view()
    {
        if ($this->session->has_userdata('is_admin_login')) {
            $data['topic_view'] = $this->topic_model->topic_view();
            $data['view'] = 'admin/topic/view_topic';
            $this->load->view('admin/layout', $data);
        } else {
            redirect('admin/auth/login');
        }
    }

    public function topic_edit($id)
    {
        if ($this->session->has_userdata('is_admin_login')) {
            $data['view_topic'] = $this->topic_model->topic_edit($id);
            $data['view'] = 'admin/topic/edit_topic';
            $this->load->view('admin/layout', $data);
        } else {
            redirect('admin/auth/login');
        }
    }

    public function topic_update_data()
    {
        if ($this->session->has_userdata('is_admin_login')) {
            $data = $this->input->post();
                if ($this->topic_model->topic_update_data($data)) {
                    redirect("admin/topic/topic_view");
                } else {
                    $data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
                }
        } else {
            redirect('admin/auth/login');
        }
    }

    public function topic_delete($id)
    {
        if ($this->session->has_userdata('is_admin_login')) {
            if ($this->topic_model->topic_delete($id)) {
                redirect("admin/topic/topic_view");
            }
        } else {
            redirect('admin/auth/login');
        }
    }
}
?>
