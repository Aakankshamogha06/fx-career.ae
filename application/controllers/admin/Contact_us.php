<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact_us extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper(['url', 'form', 'cookie', 'security']);
        $this->load->library(['pagination', 'session', 'email', 'form_validation', 'encryption']);
        $this->load->model('admin/Contact_us_model', 'Contact_us_model');
        date_default_timezone_set('Asia/Kolkata');
    }

    public function add_contact_us()
    {
        $data['view'] = 'admin/frontend/contact';
        $this->load->view('admin/layout', $data);
    }

    public function contact_us_submit_data()
    {
        if ($this->input->post()) {
            $data = $this->input->post();
            if ($this->Contact_us_model->contact_us_data_submit($data)) {
                redirect(base_url());
            } else {
                $data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
                $this->load->view('admin/layout', $data);
            }
        }
    }

    public function contact_us_view()
    {
        $data['contact_us_view'] = $this->Contact_us_model->contact_us_view();
        $data['view'] = 'admin/contact_us/view_contact_us';
        $this->load->view('admin/layout', $data);
    }

    public function contact_us_edit($id)
    {
        $id = $this->uri->segment(4);
        $data['view_contact_us'] = $this->Contact_us_model->contact_us_edit($id);
        $data['view'] = 'admin/contact_us/edit_contact_us';
        $this->load->view('admin/layout', $data);
    }

    public function contact_us_update_data()
    {
        if ($this->input->post()) {
            $data = $this->input->post();
            if ($this->Contact_us_model->contact_us_update_data($data)) {
                redirect("admin/contact_us/view_contact_us");
            } else {
                $data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
                $this->load->view('admin/layout', $data);
            }
        }
    }

    public function contact_us_delete($id)
    {
        $id = $this->uri->segment(4);
        if ($this->Contact_us_model->contact_us_delete($id)) {
            redirect("admin/contact_us/contact_us_view");
        }
    }
}
?>
