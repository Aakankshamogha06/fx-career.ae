<?php

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class slider_api extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('Authorization_Token');
        $this->load->model('admin/Auth_model', 'Auth_model');
        $this->load->model('admin/slider_model', 'slider_model');
    }



    public function slider_get()
    {
        $headers = $this->input->request_headers();
        if (!empty($headers['Authorization'])) {
            $decodedToken = $this->authorization_token->validateToken(trim($headers['Authorization']));
            if ($decodedToken['status']) {
        $id = $this->uri->segment(4);
        $data = $this->slider_model->slider_view($id);
        $this->response($data, REST_Controller::HTTP_OK);
    } else {
        $this->response($decodedToken, REST_Controller::HTTP_UNAUTHORIZED);
    }
} else {
    $this->response(['Authentication failed'], REST_Controller::HTTP_UNAUTHORIZED);
}
    }

}
?>