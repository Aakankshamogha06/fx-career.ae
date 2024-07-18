<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/form_model','form_model');
    }

    public function submit() {
        // Retrieve form data
        $data = array(
            'first_name' => $this->input->post('first-name'),
            'last_name' => $this->input->post('last-name'),
            'email' => $this->input->post('email-address'),
            'phone' => $this->input->post('phone-number'),
            'address' => $this->input->post('address'),
            'topics' => implode(',', $this->input->post('product-purchase')),
            'preferred_time' => $this->input->post('address-state'),
            'reference' => $this->input->post('product-satisfaction'),
            'feedback' => $this->input->post('product-feedback')
        );

        // Validate form data (example)
        $this->form_validation->set_rules('firstname', 'First Name', 'required');
        $this->form_validation->set_rules('last-name', 'Last Name', 'required');
        $this->form_validation->set_rules('email-address', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('phone-number', 'Phone Number', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Validation failed
            $this->load->view('form'); // Adjust this to your form view
        } else {
            // Validation succeeded, insert data into database
            $this->form_model->insert_form_data($data);

            // Redirect or load a success view
            $this->load->view('form_success'); // Adjust this to your success view
        }
    }
}
