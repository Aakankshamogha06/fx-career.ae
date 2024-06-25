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
        $this->load->model('admin/detail_model','detail_model');
        $this->load->model('admin/ebook_model','ebook_model');
        $this->load->model('admin/teacher_model', 'teacher_model');
        $this->load->model('admin/analysis_detail_model','analysis_detail_model');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['gallery_view']= $this->gallery_model->gallery();
        $data['teachers'] = $this->teacher_model->teacher();
        $data['blog_detail_view']= $this->blog_detail_model->blog_detail();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/index',$data);
        $this->load->view('frontend/include/newsletter');
         $this->load->view('frontend/include/footer',$data);
       
    }

    public function about()
    {
        $data['teachers'] = $this->teacher_model->teacher_view();
        $data['gallery_view']= $this->gallery_model->gallery();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/about-us',$data);
        $this->load->view('frontend/include/newsletter');
         $this->load->view('frontend/include/footer',$data);
       
    }
    public function one_to_one_session()
    {
        $data['gallery_view']= $this->gallery_model->gallery();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/one-to-one-session');
        $this->load->view('frontend/include/newsletter');
         $this->load->view('frontend/include/footer',$data);
       
    }
    public function book_slot()
    {
        $data['gallery_view']= $this->gallery_model->gallery();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/book-slot');
        $this->load->view('frontend/include/newsletter');
         $this->load->view('frontend/include/footer',$data);
       
    }
    public function become_partner()
    {
        $data['gallery_view']= $this->gallery_model->gallery();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/become-partner');
        $this->load->view('frontend/include/newsletter');
         $this->load->view('frontend/include/footer',$data);
       
    }
    public function trade_idea()
    {
        $data['gallery_view']= $this->gallery_model->gallery();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/trade-idea');
        $this->load->view('frontend/include/newsletter');
         $this->load->view('frontend/include/footer',$data);
       
    }
    public function e_books()
    {
        $data['gallery_view']= $this->gallery_model->gallery();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/e-books');
        $this->load->view('frontend/include/newsletter');
         $this->load->view('frontend/include/footer',$data);
       
    }
    public function login()
    {
        $data['gallery_view']= $this->gallery_model->gallery();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/login');
        $this->load->view('frontend/include/newsletter');
         $this->load->view('frontend/include/footer',$data);
       
    }
    public function register()
    {
        $data['gallery_view']= $this->gallery_model->gallery();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/register');
        $this->load->view('frontend/include/newsletter');
         $this->load->view('frontend/include/footer',$data);
       
    }

    public function gallery()
    {
        $data['gallery_view']= $this->gallery_model->gallery_view();
        $data['gallery_view']= $this->gallery_model->gallery();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/gallery',$data);
        $this->load->view('frontend/include/newsletter');
         $this->load->view('frontend/include/footer',$data);
       
    }
    public function contact()
    {
        $data['gallery_view']= $this->gallery_model->gallery();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/contact');
        $this->load->view('frontend/include/newsletter');
         $this->load->view('frontend/include/footer',$data);
       
    }
    public function blog()
    {
        $data['blog_detail_view']= $this->blog_detail_model->blog_detail_view();
        $data['gallery_view']= $this->gallery_model->gallery();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/blog',$data);
        $this->load->view('frontend/include/newsletter');
         $this->load->view('frontend/include/footer',$data);
       
    }
    public function blog_details() {
        $data['blog_detail'] = $this->blog_detail_model->blog_detail_data_nm();
        $data['blogs'] = $this->blog_detail_model->get_recent_blogs(3);
        $data['gallery_view']= $this->gallery_model->gallery();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/blog-details', $data);
        $this->load->view('frontend/include/newsletter');
         $this->load->view('frontend/include/footer',$data);
       
    }
    public function teacher()
    {
        $data['teachers']=$this->teacher_model->teacher_view();
        $data['gallery_view']= $this->gallery_model->gallery();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/teacher',$data);
        $this->load->view('frontend/include/newsletter');
         $this->load->view('frontend/include/footer',$data);
       
    }
    public function teacher_details()
    {
        $data['teacher_detail'] = $this->teacher_model->teacher_data_nm();
        $data['gallery_view']= $this->gallery_model->gallery();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/teacher-details',$data);
        $this->load->view('frontend/include/newsletter');
         $this->load->view('frontend/include/footer',$data);
       
    }
    public function classroom_courses()
    {
        $data['classroom_detail_view'] = $this->detail_model->offline_course(); 
        $data['gallery_view']= $this->gallery_model->gallery();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/classroom-courses',$data);
        $this->load->view('frontend/include/newsletter');
         $this->load->view('frontend/include/footer',$data);
       
    }
    public function classroom_detail()
    {
        $id = $this->uri->segment(2);
        $data['detail_view'] = $this->detail_model->offlineBasic($id);
        $data['gallery_view']= $this->gallery_model->gallery();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/classroom-detail',$data);
        $this->load->view('frontend/include/newsletter');
         $this->load->view('frontend/include/footer',$data);
       
    }
    public function courses()
    {
        $data['course_details_view'] = $this->detail_model->online_course(); 
        $data['gallery_view']= $this->gallery_model->gallery();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/courses',$data);
        $this->load->view('frontend/include/newsletter');
         $this->load->view('frontend/include/footer',$data);
       
    }
    public function online_detail()
    {
        $id = $this->uri->segment(2);
        $data['detail_view'] = $this->detail_model->onlineBasic($id);
        $data['gallery_view']= $this->gallery_model->gallery();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/classroom-detail',$data);
        $this->load->view('frontend/include/newsletter');
         $this->load->view('frontend/include/footer',$data);
       
    }
    public function self_learning()
    {
        $data['recorded_detail_view'] = $this->detail_model->recorded_course(); 
        $data['gallery_view']= $this->gallery_model->gallery();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/self-learning',$data);
        $this->load->view('frontend/include/newsletter');
         $this->load->view('frontend/include/footer',$data);
       
    }
    public function recorded_detail()
    {
        $id = $this->uri->segment(2);
        $data['detail_view'] = $this->detail_model->recorded($id);
        $data['gallery_view']= $this->gallery_model->gallery();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/recorded-detail',$data);
        $this->load->view('frontend/include/newsletter');
         $this->load->view('frontend/include/footer',$data);
       
    }
    
}
?>