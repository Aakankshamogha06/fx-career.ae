<?php
defined('BASEPATH') or exit('No direct script access allowed');

class sub_gallery extends MY_Controller
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
        $this->load->model('admin/sub_gallery_model', 'sub_gallery_model');
        $this->load->helper('security');

        date_default_timezone_set('Asia/Kolkata');
    }

    public function add_sub_gallery()
    {
        if ($this->session->has_userdata('is_admin_login')) {
            $data['view'] = 'admin/sub_gallery/add_sub_gallery';
            $this->load->view('admin/layout', $data);
        } else {
            redirect('admin/auth/login');
        }
    }

    public function sub_gallery_submit_data()
    {
        if ($this->session->has_userdata('is_admin_login')) {
            $data = $this->input->post();
            $config['upload_path'] = 'uploads/sub_gallery';
            $config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('image')) {
                $uploadData = $this->upload->data();
                $image = $uploadData['file_name'];
                if ($this->sub_gallery_model->sub_gallery_data_submit($data, $image)) {
                    redirect("admin/sub_gallery/sub_gallery_view");
                } else {
                    $data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
                }
            } else {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
            }
        } else {
            redirect('admin/auth/login');
        }
    }

    public function sub_gallery_view()
    {
        if ($this->session->has_userdata('is_admin_login')) {
            $data['sub_gallery_view'] = $this->sub_gallery_model->sub_gallery_view();
            $data['view'] = 'admin/sub_gallery/view_sub_gallery';
            $this->load->view('admin/layout', $data);
        } else {
            redirect('admin/auth/login');
        }
    }

    public function sub_gallery_edit($id)
    {
        if ($this->session->has_userdata('is_admin_login')) {
            $data['view_sub_gallery'] = $this->sub_gallery_model->sub_gallery_edit($id);
            $data['view'] = 'admin/sub_gallery/edit_sub_gallery';
            $this->load->view('admin/layout', $data);
        } else {
            redirect('admin/auth/login');
        }
    }

    public function sub_gallery_update_data()
    {
        if ($this->session->has_userdata('is_admin_login')) {
            $data = $this->input->post();
            $config['upload_path'] = 'uploads/sub_gallery';
            $config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('image')) {
                $uploadData = $this->upload->data();
                $image = $uploadData['file_name'];
                if ($this->sub_gallery_model->sub_gallery_update_data($data, $image)) {
                    redirect("admin/sub_gallery/sub_gallery_view");
                } else {
                    $data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
                }
            } else {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
            }
        } else {
            redirect('admin/auth/login');
        }
    }

    public function sub_gallery_delete($id)
    {
        if ($this->session->has_userdata('is_admin_login')) {
            if ($this->sub_gallery_model->sub_gallery_delete($id)) {
                redirect("admin/sub_gallery/sub_gallery_view");
            }
        } else {
            redirect('admin/auth/login');
        }
    }
}
?>
