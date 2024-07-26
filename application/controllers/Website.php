<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Website extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Auth_model', 'Auth_model');
        $this->load->model('admin/blog_detail_model', 'blog_detail_model');
        $this->load->model('admin/gallery_model', 'gallery_model');
        $this->load->model('admin/sub_gallery_model', 'sub_gallery_model');
        $this->load->model('admin/Franchise_model', 'Franchise_model');
        $this->load->model('admin/Contact_model', 'Contact_model');
        $this->load->model('admin/curriculum_model', 'curriculum_model');
        $this->load->model('admin/topic_model', 'topic_model');
        $this->load->model('admin/detail_model', 'detail_model');
        $this->load->model('admin/ebook_model', 'ebook_model');
        $this->load->model('admin/user_model', 'user_model');
        $this->load->model('admin/teacher_model', 'teacher_model');
        $this->load->model('admin/analysis_detail_model', 'analysis_detail_model');
        $this->load->model('admin/trade_idea_model', 'trade_idea_model');
        $this->load->model('admin/one_to_one_session_model', 'one_to_one_session_model');
        $this->load->model('admin/Form_model', 'Form_model');
        $this->load->model('admin/questions_model', 'questions_model');
        $this->load->model('admin/book_session_model', 'book_session_model');
        $this->load->helper('url');
    }
    public function index()
    {
        $data['gallery_view'] = $this->gallery_model->gallery();
        $data['teachers'] = $this->teacher_model->teacher();
        $data['blog_detail_view'] = $this->blog_detail_model->blog_detail();
        $data['course_details_view'] = $this->detail_model->online_course_index();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/index', $data);
        $this->load->view('frontend/include/newsletter');
        $this->load->view('frontend/include/footer', $data);
    }
    public function results()
    {
        $data['gallery_view'] = $this->gallery_model->gallery();
        $data['teachers'] = $this->teacher_model->teacher();
        $data['blog_detail_view'] = $this->blog_detail_model->blog_detail();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/results', $data);
        $this->load->view('frontend/include/newsletter');
        $this->load->view('frontend/include/footer', $data);
    }
    public function about()
    {
        $data['teachers'] = $this->teacher_model->teacher_view();
        $data['gallery_view'] = $this->gallery_model->gallery();
        $data['course_details_view'] = $this->detail_model->online_course_index();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/about-us', $data);
        $this->load->view('frontend/include/newsletter');
        $this->load->view('frontend/include/footer', $data);
    }
    public function one_to_one_session()
    {
        $data['one_to_one_session_view'] = $this->one_to_one_session_model->one_to_one_session_view();
        $data['gallery_view'] = $this->gallery_model->gallery();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/one-to-one-session', $data);
        $this->load->view('frontend/include/newsletter');
        $this->load->view('frontend/include/footer', $data);
    }
    public function book_slot()
    {
        $data['gallery_view'] = $this->gallery_model->gallery();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/book-slot');
        $this->load->view('frontend/include/newsletter');
        $this->load->view('frontend/include/footer', $data);
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
            $data['one_to_one_session_view'] = $this->one_to_one_session_model->one_to_one_session_view();
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
                redirect(base_url());
            } else {
                $this->session->set_flashdata('error', 'An error occurred. Please try again.');
                redirect('website/one_to_one_session');
            }
        }
    }

    public function become_partner()
    {
        $data['gallery_view'] = $this->gallery_model->gallery();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/become-partner');
        $this->load->view('frontend/include/newsletter');
        $this->load->view('frontend/include/footer', $data);
    }
    public function trade_idea()
    {
        $data['trade_idea_view'] = $this->trade_idea_model->trade_idea_view();
        $data['gallery_view'] = $this->gallery_model->gallery();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/trade-idea', $data);
        $this->load->view('frontend/include/newsletter');
        $this->load->view('frontend/include/footer', $data);
    }
    public function trade_idea_detail()
    {
        $data['trade_idea_detail'] = $this->trade_idea_model->trade_idea_data_nm();
        $data['trade_ideas'] = $this->trade_idea_model->get_recent_trade_idea(3);
        $data['gallery_view'] = $this->gallery_model->gallery();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/trade-idea-detail', $data);
        $this->load->view('frontend/include/newsletter');
        $this->load->view('frontend/include/footer', $data);
    }
    public function e_books()
    {
        $data['ebook_view'] = $this->ebook_model->ebook_view();
        $data['gallery_view'] = $this->gallery_model->gallery();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/e-books', $data);
        $this->load->view('frontend/include/newsletter');
        $this->load->view('frontend/include/footer', $data);
    }
    public function login()
    {
        $data['gallery_view'] = $this->gallery_model->gallery();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/login');
        $this->load->view('frontend/include/newsletter');
        $this->load->view('frontend/include/footer', $data);
    }
    public function register()
    {
        $data['captcha'] = $this->generate_captcha();
        $data['gallery_view'] = $this->gallery_model->gallery();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/register', $data);
        $this->load->view('frontend/include/newsletter');
        $this->load->view('frontend/include/footer', $data);
    }

    public function gallery()
    {
        $data['gallery_view'] = $this->gallery_model->gallery_view();
        $data['gallery_view'] = $this->gallery_model->gallery();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/gallery', $data);
        $this->load->view('frontend/include/newsletter');
        $this->load->view('frontend/include/footer', $data);
    }
    public function contact()
    {
        $data['gallery_view'] = $this->gallery_model->gallery();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/contact');
        $this->load->view('frontend/include/newsletter');
        $this->load->view('frontend/include/footer', $data);
    }
    public function blog()
    {
        $data['blog_detail_view'] = $this->blog_detail_model->blog_detail_view();
        $data['gallery_view'] = $this->gallery_model->gallery();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/blog', $data);
        $this->load->view('frontend/include/newsletter');
        $this->load->view('frontend/include/footer', $data);
    }
    public function blog_details()
    {
        $data['blog_detail'] = $this->blog_detail_model->blog_detail_data_nm();
        $data['blogs'] = $this->blog_detail_model->get_recent_blogs(3);
        $data['gallery_view'] = $this->gallery_model->gallery();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/blog-details', $data);
        $this->load->view('frontend/include/newsletter');
        $this->load->view('frontend/include/footer', $data);
    }
    public function mentor()
    {
        $data['teachers'] = $this->teacher_model->teacher_view();
        $data['gallery_view'] = $this->gallery_model->gallery();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/mentor', $data);
        $this->load->view('frontend/include/newsletter');
        $this->load->view('frontend/include/footer', $data);
    }
    public function mentor_details()
    {
        $data['teacher_detail'] = $this->teacher_model->teacher_data_nm();
        $data['gallery_view'] = $this->gallery_model->gallery();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/mentor-details', $data);
        $this->load->view('frontend/include/newsletter');
        $this->load->view('frontend/include/footer', $data);
    }
    public function classroom_courses()
    {
        $data['classroom_detail_view'] = $this->detail_model->offline_course();
        $data['gallery_view'] = $this->gallery_model->gallery();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/classroom-courses', $data);
        $this->load->view('frontend/include/newsletter');
        $this->load->view('frontend/include/footer', $data);
    }
    public function classroom_detail()
    {
        $id = $this->uri->segment(2);
        $data['detail_view'] = $this->detail_model->offlineBasic($id);
        $data['gallery_view'] = $this->gallery_model->gallery();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/classroom-detail', $data);
        $this->load->view('frontend/include/newsletter');
        $this->load->view('frontend/include/footer', $data);
    }
    public function courses()
    {
        $data['course_details_view'] = $this->detail_model->online_course();
        $data['gallery_view'] = $this->gallery_model->gallery();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/courses', $data);
        $this->load->view('frontend/include/newsletter');
        $this->load->view('frontend/include/footer', $data);
    }
    public function online_detail()
    {
        $id = $this->uri->segment(2);
        $data['detail_view'] = $this->detail_model->onlineBasic($id);
        $data['gallery_view'] = $this->gallery_model->gallery();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/classroom-detail', $data);
        $this->load->view('frontend/include/newsletter');
        $this->load->view('frontend/include/footer', $data);
    }
    public function self_learning()
    {
        $data['recorded_detail_view'] = $this->detail_model->recorded_course();
        $data['gallery_view'] = $this->gallery_model->gallery();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/self-learning', $data);
        $this->load->view('frontend/include/newsletter');
        $this->load->view('frontend/include/footer', $data);
    }
    public function recorded_detail()
    {
        $id = $this->uri->segment(2);
        $data['detail_view'] = $this->detail_model->recorded($id);
        $data['gallery_view'] = $this->gallery_model->gallery();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/recorded-detail', $data);
        $this->load->view('frontend/include/newsletter');
        $this->load->view('frontend/include/footer', $data);
    }

    public function webadd()
    {
        // Form validation rules
        $this->form_validation->set_rules('firstname', 'First Name', 'trim|required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('mobile_no', 'Phone', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[password]');
        $this->form_validation->set_rules('captcha', 'CAPTCHA', 'required|callback_check_captcha');

        if ($this->form_validation->run() === FALSE) {
            // Validation failed, reload the registration form with errors
            $data['captcha'] = $this->generate_captcha();
            $data['gallery_view'] = $this->gallery_model->gallery();
            $this->load->view('frontend/include/header');
            $this->load->view('frontend/register', $data);
            $this->load->view('frontend/include/footer', $data);
        } else {
            // Validation passed, insert user data into database
            $data = array(
                'username' => $this->input->post('firstname') . ' ' . $this->input->post('lastname'),
                'firstname' => $this->input->post('firstname'),
                'lastname' => $this->input->post('lastname'),
                'mobile_no' => $this->input->post('mobile_no'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                'is_admin' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            );

            $this->user_model->insert_user($data); // Insert into your database using your model
            $this->session->set_flashdata('success', 'Registration successful. Please login.');
            // Optionally, you can redirect to a success page or show a success message
            redirect('login'); // Redirect to login page after successful registration
        }
    }

    public function check_captcha($str)
    {

        $user_input = strtolower($str);

        $captcha_code = strtolower($this->session->userdata('captcha_code'));

        if ($user_input === $captcha_code) {

            return TRUE;
        } else {

            $this->form_validation->set_message('check_captcha', 'The CAPTCHA code entered is incorrect.');

            return FALSE;
        }
    }

    private function generate_captcha()
    {

        $captcha_code = substr(md5(uniqid(mt_rand(), true)), 0, 5);

        $this->session->set_userdata('captcha_code', $captcha_code);

        $data['captcha']['image'] = $this->create_captcha_image($captcha_code);

        return $data['captcha'];
    }

    private function create_captcha_image($captcha_code)
    {

        $img_width = 282;
        $img_height = 37;
        $font_size = 22;
        $image = imagecreatetruecolor($img_width, $img_height);
        $background_color = imagecolorallocate($image, 249, 195, 17);
        $text_color = imagecolorallocate($image, 1, 1, 1);
        imagefill($image, 0, 0, $background_color);
        imagestring($image, 5, 10, 8, $captcha_code, $text_color);
        ob_start();
        imagepng($image);
        $image_data = ob_get_clean();
        imagedestroy($image);
        $base64_image = 'data:image/png;base64,' . base64_encode($image_data);
        return $base64_image;
    }

    public function form()
    {
        $data['questions'] = $this->questions_model->questions();
        $data['gallery_view'] = $this->gallery_model->gallery();
        $data['teachers'] = $this->teacher_model->teacher();
        $data['blog_detail_view'] = $this->blog_detail_model->blog_detail();
        $data['course_details_view'] = $this->detail_model->online_course_index();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/form', $data);
        $this->load->view('frontend/include/newsletter');
        $this->load->view('frontend/include/footer', $data);
    }


    public function submit()
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $score = 0;

            // Fetch questions from the database
            $questions = $this->Form_model->get_questions();

            foreach ($questions as $question) {
                $question_id = $question->id;
                $correct_answer = $question->correct_answer; // Adjust according to your database structure

                // Retrieve user's answer from POST data
                $user_answer = $this->input->post('question_' . $question_id);

                // Compare user's answer with correct answer
                if ($user_answer && $user_answer === $correct_answer) {
                    $score++;
                }
            }

            // For debugging, check if $score is incremented correctly
            echo "Score: " . $score;

            // If score is correctly calculated, proceed to save form data
            $data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'email_address' => $this->input->post('email_address'),
                'phone_number' => $this->input->post('phone_number'),
                'address' => $this->input->post('address'),
                'product_purchase' => $this->input->post('product_purchase'),
                'address_state' => $this->input->post('address_state'),
                'product_satisfaction' => $this->input->post('product_satisfaction'),
                'referal_first_name' => $this->input->post('referal_first_name'),
                'referal_last_name' => $this->input->post('referal_last_name'),
                'referal_email_address' => $this->input->post('referal_email_address'),
                'referal_phone_number' => $this->input->post('referal_phone_number'),
                'product_feedback' => $this->input->post('product_feedback'),
                'score' => $score
                // Add other fields as needed
            );

            // Save data to database
            $this->Form_model->save_form_data($data);

            // Redirect to results page or home based on your logic
            redirect('website/results');
            return;
        }

        // If form was not submitted via POST, redirect to home
        redirect('home');
    }
    public function submit_form() {
        
        
        // Collect form data
        $data = [
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email_address' => $this->input->post('email_address'),
            'phone_number' => $this->input->post('phone_number'),
            'address' => $this->input->post('address'),
            'preffered_topic' => $this->input->post('preffered_topic'),
            'address_state' => $this->input->post('address_state'),
            'product_satisfaction' => $this->input->post('product_satisfaction'),
            'referal_first_name' => $this->input->post('referal_first_name'),
            'referal_last_name' => $this->input->post('referal_last_name'),
            'referal_email_address' => $this->input->post('referal_email_address'),
            'referal_phone_number' => $this->input->post('referal_phone_number'),
            'product_feedback' => $this->input->post('product_feedback')
        ];

        // Save user details to database
        $user_id = $this->Form_model->save_user_details($data);
        
        // Calculate score
        $questions = $this->Form_model->get_questions();
        $score = 0;
        
        foreach ($questions as $question) {
            $user_answer = $this->input->post('question_' . $question->id);
            if ($user_answer == $question->correct_answer) {
                $score++;
            }
        }

        // Save score to database
        $this->Form_model->save_user_score($user_id, $score);

        // Redirect to result view with score
        $this->session->set_flashdata('score', $score);
        redirect('results');
    }

    public function show_result() {
        $score = $this->session->flashdata('score');
        if ($score === NULL) {
            redirect('book');
        }

        $data['score'] = $score;
        $this->load->view('results', $data);
    }
}
