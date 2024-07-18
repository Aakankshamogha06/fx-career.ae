<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Preferred_topic extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper(['url', 'form', 'cookie', 'security']);
        $this->load->library(['pagination', 'session', 'email', 'form_validation', 'encryption']);
        $this->load->model('admin/preferred_topic_model', 'preferred_topic_model');
    }

    public function add_preferred_topic()
    {
        if ($this->session->has_userdata('is_admin_login')) {
            $data['view'] = 'admin/preferred_topic/add_preferred_topic';
            $this->load->view('admin/layout', $data);
        } else {
            redirect('admin/auth/login');
        }
    }

    public function preferred_topic_submit_data()
    {
        if ($this->session->has_userdata('is_admin_login')) {
            if ($this->input->post()) {
                $this->form_validation->set_rules('topic_name', 'Topic Name', 'required');

                if ($this->form_validation->run() == FALSE) {
                    $data['message'] = '<div class="alert alert-danger"><strong>Error!</strong> ' . validation_errors() . '</div>';
                } else {
                    $data = $this->input->post();
                    if ($this->preferred_topic_model->preferred_topic_data_submit($data)) {
                        redirect("preferred_topic/view_preferred_topic");
                    } else {
                        $data['message'] = '<div class="alert alert-danger"><strong>Error!</strong> Sorry, please try again.</div>';
                    }
                }
            }
            $data['view'] = 'admin/preferred_topic/add_preferred_topic';
            $this->load->view('admin/layout', $data);
        } else {
            redirect('admin/auth/login');
        }
    }

    public function preferred_topic_view()
    {
        if ($this->session->has_userdata('is_admin_login')) {
            $data['preferred_topic_view'] = $this->preferred_topic_model->preferred_topic_view();
            $data['view'] = 'admin/preferred_topic/view_preferred_topic';
            $this->load->view('admin/layout', $data);
        } else {
            redirect('admin/auth/login');
        }
    }

    public function preferred_topic_edit($id)
    {
        if ($this->session->has_userdata('is_admin_login')) {
            $data['view_preferred_topic'] = $this->preferred_topic_model->preferred_topic_edit($id);
            $data['view'] = 'admin/preferred_topic/edit_preferred_topic';
            $this->load->view('admin/layout', $data);
        } else {
            redirect('admin/auth/login');
        }
    }

    public function preferred_topic_update_data()
    {
        if ($this->session->has_userdata('is_admin_login')) {
            if ($this->input->post()) {
                $this->form_validation->set_rules('topic_name', 'Topic Name', 'required');

                if ($this->form_validation->run() == FALSE) {
                    $data['message'] = '<div class="alert alert-danger"><strong>Error!</strong> ' . validation_errors() . '</div>';
                } else {
                    $data = $this->input->post();
                    if ($this->preferred_topic_model->preferred_topic_update_data($data)) {
                        redirect("preferred_topic/view_preferred_topic");
                    } else {
                        $data['message'] = '<div class="alert alert-danger"><strong>Error!</strong> Sorry, please try again.</div>';
                    }
                }
            }
            $id = $this->input->post('id');
            $data['view_preferred_topic'] = $this->preferred_topic_model->preferred_topic_edit($id);
            $data['view'] = 'admin/preferred_topic/edit_preferred_topic';
            $this->load->view('admin/layout', $data);
        } else {
            redirect('admin/auth/login');
        }
    }

    public function preferred_topic_delete($id)
    {
        if ($this->session->has_userdata('is_admin_login')) {
            if ($this->preferred_topic_model->preferred_topic_delete($id)) {
                redirect("preferred_topic/view_preferred_topic");
            }
        } else {
            redirect('admin/auth/login');
        }
    }
}
?>
