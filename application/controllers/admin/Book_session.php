<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Book_session extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper(['url', 'form', 'security', 'cookie']);
        $this->load->library(['pagination', 'session', 'email', 'form_validation', 'encryption']);
        $this->load->model('admin/book_session_model', 'book_session_model');

        date_default_timezone_set('Asia/Kolkata');
    }

    public function book_session()
    {
        // Form validation rules
        $this->form_validation->set_rules('mobile', 'Phone', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[book_session.email]');
        $this->form_validation->set_rules('message', 'Message', 'trim|required');

        if ($this->form_validation->run() === FALSE) {
            // Validation failed, reload the registration form with errors
            $data['gallery_view'] = $this->gallery_model->gallery();
            $this->load->view('frontend/include/header');
            $this->load->view('frontend/one-to-one-session', $data);
            $this->load->view('frontend/include/footer', $data);
        } else {
            // Validation passed, insert user data into database
            $data = array(
                'message' => $this->input->post('message'),
                'mobile' => $this->input->post('mobile'),
                'email' => $this->input->post('email'),
            );

            if ($this->book_session_model->insert_user($data)) {
                $this->session->set_flashdata('success', 'Registration successful. Please login.');
                redirect('index'); // Redirect to the index page after successful registration
            } else {
                $this->session->set_flashdata('error', 'An error occurred. Please try again.');
                redirect('website/book_session'); // Redirect back to the booking form
            }
        }
    }

    // Other methods for admin functionality can remain as they are.
}
