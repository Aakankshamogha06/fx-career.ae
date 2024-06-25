<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Franchise extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Franchise_Model', 'Franchise_Model');
        $this->load->helper('url');
    }
    
    public function franchise_view()   
    {	
        $data['franchise_view'] = $this->Franchise_Model->franchise_view();
        $data['view'] ='admin/franchise/view_franchise';
        $this->load->view('admin/layout',$data);
    }
    
    public function franchise_delete($id) 
    {
        $id = $this->uri->segment(4);
        if ($this->Franchise_Model->franchise_delete($id) == true) 
        {
            redirect("admin/franchise/franchise_view");
        }
    }

    public function franchise_submit_data()
    {
        $data = [];
        if ($this->input->post()) {
            $data = $this->input->post();
            if ($this->Franchise_Model->franchise_submit_data($data) == true) {
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



