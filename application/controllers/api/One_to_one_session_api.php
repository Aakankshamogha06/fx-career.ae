<?php

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class One_to_one_session_api extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('Authorization_Token');
        $this->load->model('admin/Auth_model', 'Auth_model');
        $this->load->model('admin/one_to_one_session_model', 'one_to_one_session_model');
        $this->load->model('admin/book_session_model', 'book_session_model');
    }



    public function one_to_one_session_get()
    {
        $headers = $this->input->request_headers();
        if (!empty($headers['Authorization'])) {
            $decodedToken = $this->authorization_token->validateToken(trim($headers['Authorization']));
            if ($decodedToken['status']) {
        $id = $this->uri->segment(4);
        $data = $this->one_to_one_session_model->one_to_one_session_view($id);
        $this->response($data, REST_Controller::HTTP_OK);
        } else {
            $this->response($decodedToken, REST_Controller::HTTP_UNAUTHORIZED);
        }
        } else {
            $this->response(['Authentication failed'], REST_Controller::HTTP_UNAUTHORIZED);
        }
    }

    public function one_to_one_session_by_id_get()
    {
        $headers = $this->input->request_headers();
        if (!empty($headers['Authorization'])) {
            $decodedToken = $this->authorization_token->validateToken(trim($headers['Authorization']));
            if ($decodedToken['status']) {
                $id = $this->uri->segment(4);
                $data = $this->one_to_one_session_model->one_to_one_session($id);
                $this->response($data, REST_Controller::HTTP_OK);
            } else {
                $this->response($decodedToken, REST_Controller::HTTP_UNAUTHORIZED);
            }
            } else {
                $this->response(['Authentication failed'], REST_Controller::HTTP_UNAUTHORIZED);
            }
    
    }

    public function book_session_post()
    {
        $this->form_validation->set_rules('mobile', 'mobile', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('message', 'Message', 'trim|required');
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('session_name', 'Session Name', 'trim|required');

        // Check if validation passes
        if ($this->form_validation->run() === false) {
            $this->response(['error' => $this->form_validation->error_array()], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            // If validation is successful, get the form data
            $mobile = $this->input->post('mobile');
            $email = $this->input->post('email');
            $message = $this->input->post('message');
            $name = $this->input->post('name');
            $session_name = $this->input->post('session_name');

            // Prepare data for insertion
            $data = [
                'mobile' => $mobile,
                'email' => $email,
                'message' => $message,
                'name' => $name,
                'session_name' => $session_name,
                'created_at' => date('Y-m-d H:i:s'),
            ];

            // Insert into the database using your model
            $insert_id = $this->book_session_model->insert_user($data);

            if ($insert_id) {
                // Send a confirmation response
                $response = [
                    'message' => 'Your enquiry will be considered..',
                ];
                $this->response($response, REST_Controller::HTTP_OK);
            } else {
                $this->response(['error' => 'Error saving data. Please try again.'], REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
            }
        }
    }
}
?>