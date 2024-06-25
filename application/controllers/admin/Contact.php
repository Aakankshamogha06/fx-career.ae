<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Contact extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Contact_model', 'Contact_model');
        $this->load->helper('url');
    }


    public function contact_view()   
    {	
        $data['contact_view'] = $this->Contact_model->contact_view();
        $data['view'] ='admin/contact/view_contact';
        $this->load->view('admin/layout',$data);
    }
    public function contact_delete($id) 
    {
        $id = $this->uri->segment(4);
        if ($this->Contact_model->contact_delete($id) == true) 
        {
            redirect("admin/contact/contact_view");
        }
    }

    public function contact_submit_data()
    {
        $data = [];
        if ($this->input->post()) {
            $data = $this->input->post();
            if ($this->Contact_model->contact_submit_data($data) == true) {
                redirect(base_url());
            } ?>
        <?php
        } 
        else {
            $data['message'] = '<div class="alert alert-danger">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">
                                        &times;
                                    </a>
                                    <strong>Error!</strong>
                                    Sorry Please Try Again.
                                </div>';
        }
    }
}
?>



