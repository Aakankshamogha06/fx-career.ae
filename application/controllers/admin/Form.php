<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/Form_model','Form_model');
    }

    public function submit_form() {
        $postData = $this->input->post();
        $userId = $this->Form_model->save_user_details($postData);

        // Calculate score
        $questions = $this->Form_model->get_correct_answers();
        $score = 0;
        foreach ($questions as $question) {
            $userAnswer = $postData["question_{$question->id}"];
            if ($userAnswer == $question->correct_answer) {
                $score++;
            }
        }

        $this->Form_model->save_user_score($userId, $score);

        echo json_encode(['score' => $score]);
    }
}
