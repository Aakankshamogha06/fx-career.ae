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
        $data['gallery_view'] = $this->gallery_model->gallery();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/one-to-one-session');
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
        $data['gallery_view'] = $this->gallery_model->gallery();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/trade-idea');
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
        $this->load->view('frontend/register',$data);
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

    public function webadd() {
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
            $this->load->view('frontend/include/footer',$data);
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
}
?>