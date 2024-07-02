<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'website';

// setting route for admin
$route['admin'] = 'admin/auth';

$route['admin/dashboard2'] = 'admin/dashboard/index2';

$route['adminlte'] = 'admin/auth';
$route['adminlte/(:any)'] = 'admin/adminlte/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



// blog_category ****************
$route['blog_category/add_blog_category'] = 'admin/blog_category/add_blog_category';
$route['blog_category/blog_category_submit_data'] = 'admin/blog_category/blog_category_submit_data';
$route['blog_category/view_blog_category']        = 'admin/blog_category/blog_category_view';
$route['blog_category/edit_blog_category/(:any)'] = 'admin/blog_category/blog_category_edit/$1';
$route['blog_category/blog_category_update_data'] = 'admin/blog_category/blog_category_update_data';
$route['blog_category/blog_category_delete/(:any)'] = 'admin/blog_category/blog_category_delete/$1';

// blog_detail ****************
$route['blog_detail/add_blog_detail'] = 'admin/blog_detail/add_blog_detail';
$route['blog_detail/blog_detail_submit_data'] = 'admin/blog_detail/blog_detail_submit_data';
$route['blog_detail/view_blog_detail']        = 'admin/blog_detail/blog_detail_view';
$route['blog_detail/edit_blog_detail/(:any)'] = 'admin/blog_detail/blog_detail_edit/$1';
$route['blog_detail/blog_detail_update_data'] = 'admin/blog_detail/blog_detail_update_data';
$route['blog_detail/blog_detail_delete/(:any)'] = 'admin/blog_detail/blog_detail_delete/$1';

// gallery ****************
$route['gallery/add_gallery'] = 'admin/gallery/add_gallery';
$route['gallery/gallery_submit_data'] = 'admin/gallery/gallery_submit_data';
$route['gallery/view_gallery']        = 'admin/gallery/gallery_view';
$route['gallery/edit_gallery/(:any)'] = 'admin/gallery/gallery_edit/$1';
$route['gallery/gallery_update_data'] = 'admin/gallery/gallery_update_data';
$route['gallery/gallery_delete/(:any)'] = 'admin/gallery/gallery_delete/$1';

// sub_gallery ****************
$route['sub_gallery/add_sub_gallery'] = 'admin/sub_gallery/add_sub_gallery';
$route['sub_gallery/sub_gallery_submit_data'] = 'admin/sub_gallery/sub_gallery_submit_data';
$route['sub_gallery/view_sub_gallery']        = 'admin/sub_gallery/sub_gallery_view';
$route['sub_gallery/edit_sub_gallery/(:any)'] = 'admin/sub_gallery/sub_gallery_edit/$1';
$route['sub_gallery/sub_gallery_update_data'] = 'admin/sub_gallery/sub_gallery_update_data';
$route['sub_gallery/sub_gallery_delete/(:any)'] = 'admin/sub_gallery/sub_gallery_delete/$1';

// seo ****************
$route['seo/add_seo'] = 'admin/seo/add_seo';
$route['seo/seo_submit_data'] = 'admin/seo/seo_submit_data';
$route['seo/view_seo']        = 'admin/seo/seo_view';
$route['seo/edit_seo/(:any)'] = 'admin/seo/seo_edit/$1';
$route['seo/seo_update_data'] = 'admin/seo/seo_update_data';
$route['seo/seo_delete/(:any)'] = 'admin/seo/seo_delete/$1';

// course ****************
$route['course/add_course'] = 'admin/course/add_course';
$route['course/course_submit_data'] = 'admin/course/course_submit_data';
$route['course/view_course']        = 'admin/course/course_view';
$route['course/edit_course/(:any)'] = 'admin/course/course_edit/$1';
$route['course/course_update_data'] = 'admin/course/course_update_data';
$route['course/course_delete/(:any)'] = 'admin/course/course_delete/$1';

// curriculum ****************
$route['curriculum/add_curriculum'] = 'admin/curriculum/add_curriculum';
$route['curriculum/curriculum_submit_data'] = 'admin/curriculum/curriculum_submit_data';
$route['curriculum/view_curriculum']        = 'admin/curriculum/curriculum_view';
$route['curriculum/edit_curriculum/(:any)'] = 'admin/curriculum/curriculum_edit/$1';
$route['curriculum/curriculum_update_data'] = 'admin/curriculum/curriculum_update_data';
$route['curriculum/curriculum_delete/(:any)'] = 'admin/curriculum/curriculum_delete/$1';

// detail ****************
$route['detail/add_detail'] = 'admin/detail/add_detail';
$route['detail/detail_submit_data'] = 'admin/detail/detail_submit_data';
$route['detail/view_detail']        = 'admin/detail/detail_view';
$route['detail/edit_detail/(:any)'] = 'admin/detail/detail_edit/$1';
$route['detail/detail_update_data'] = 'admin/detail/detail_update_data';
$route['detail/detail_delete/(:any)'] = 'admin/detail/detail_delete/$1';

// ebook ****************
$route['ebook/add_ebook'] = 'admin/ebook/add_ebook';
$route['ebook/ebook_submit_data'] = 'admin/ebook/ebook_submit_data';
$route['ebook/view_ebook']        = 'admin/ebook/ebook_view';
$route['ebook/edit_ebook/(:any)'] = 'admin/ebook/ebook_edit/$1';
$route['ebook/ebook_update_data'] = 'admin/ebook/ebook_update_data';
$route['ebook/ebook_delete/(:any)'] = 'admin/ebook/ebook_delete/$1';

// topic ****************
$route['topic/add_topic'] = 'admin/topic/add_topic';
$route['topic/topic_submit_data'] = 'admin/topic/topic_submit_data';
$route['topic/view_topic']        = 'admin/topic/topic_view';
$route['topic/edit_topic/(:any)'] = 'admin/topic/topic_edit/$1';
$route['topic/topic_update_data'] = 'admin/topic/topic_update_data';
$route['topic/topic_delete/(:any)'] = 'admin/topic/topic_delete/$1';

  // course_category ****************
$route['course_category/add_course_category'] = 'admin/course_category/add_course_category';
$route['course_category/course_category_submit_data'] = 'admin/course_category/course_category_submit_data';
$route['course_category/view_course_category']        = 'admin/course_category/course_category_view';
$route['course_category/edit_course_category/(:any)'] = 'admin/course_category/course_category_edit/$1';
$route['course_category/course_category_update_data'] = 'admin/course_category/course_category_update_data';
$route['course_category/course_category_delete/(:any)'] = 'admin/course_category/course_category_delete/$1';

  // course_mode ****************
$route['course_mode/add_course_mode'] = 'admin/course_mode/add_course_mode';
$route['course_mode/course_mode_submit_data'] = 'admin/course_mode/course_mode_submit_data';
$route['course_mode/view_course_mode']        = 'admin/course_mode/course_mode_view';
$route['course_mode/edit_course_mode/(:any)'] = 'admin/course_mode/course_mode_edit/$1';
$route['course_mode/course_mode_update_data'] = 'admin/course_mode/course_mode_update_data';
$route['course_mode/course_mode_delete/(:any)'] = 'admin/course_mode/course_mode_delete/$1';

  // course_language ****************
$route['course_language/add_course_language'] = 'admin/course_language/add_course_language';
$route['course_language/course_language_submit_data'] = 'admin/course_language/course_language_submit_data';
$route['course_language/view_course_language']        = 'admin/course_language/course_language_view';
$route['course_language/edit_course_language/(:any)'] = 'admin/course_language/course_language_edit/$1';
$route['course_language/course_language_update_data'] = 'admin/course_language/course_language_update_data';
$route['course_language/course_language_delete/(:any)'] = 'admin/course_language/course_language_delete/$1';

//franchise ****************
$route['franchise/add_franchise'] = 'admin/franchise/add_franchise';
$route['franchise/franchise_submit_data'] = 'admin/franchise/franchise_submit_data';
$route['franchise/view_franchise']        = 'admin/franchise/franchise_view';
$route['franchise/edit_franchise/(:any)'] = 'admin/franchise/franchise_edit/$1';
$route['franchise/franchise_update_data'] = 'admin/franchise/franchise_update_data';
$route['franchise/franchise_delete/(:any)'] = 'admin/franchise/franchise_delete/$1';

//slider ****************
$route['slider/add_slider'] = 'admin/slider/add_slider';
$route['slider/slider_submit_data'] = 'admin/slider/slider_submit_data';
$route['slider/view_slider']        = 'admin/slider/slider_view';
$route['slider/edit_slider/(:any)'] = 'admin/slider/slider_edit/$1';
$route['slider/slider_update_data'] = 'admin/slider/slider_update_data';
$route['slider/slider_delete/(:any)'] = 'admin/slider/slider_delete/$1';

//analysis_detail ****************
$route['analysis_detail/add_analysis_detail'] = 'admin/analysis_detail/add_analysis_detail';
$route['analysis_detail/analysis_detail_submit_data'] = 'admin/analysis_detail/analysis_detail_submit_data';
$route['analysis_detail/view_analysis_detail']        = 'admin/analysis_detail/analysis_detail_view';
$route['analysis_detail/edit_analysis_detail/(:any)'] = 'admin/analysis_detail/analysis_detail_edit/$1';
$route['analysis_detail/analysis_detail_update_data'] = 'admin/analysis_detail/analysis_detail_update_data';
$route['analysis_detail/analysis_detail_delete/(:any)'] = 'admin/analysis_detail/analysis_detail_delete/$1';

//teacher ****************
$route['teacher/add_teacher'] = 'admin/teacher/add_teacher';
$route['teacher/teacher_submit_data'] = 'admin/teacher/teacher_submit_data';
$route['teacher/view_teacher']        = 'admin/teacher/teacher_view';
$route['teacher/edit_teacher/(:any)'] = 'admin/teacher/teacher_edit/$1';
$route['teacher/teacher_update_data'] = 'admin/teacher/teacher_update_data';
$route['teacher/teacher_delete/(:any)'] = 'admin/teacher/teacher_delete/$1';

// contact_us ****************
$route['contact_us/add_contact_us'] = 'admin/contact_us/add_contact_us';
$route['contact_us/contact_us_submit_data'] = 'admin/contact_us/contact_us_submit_data';
$route['contact_us/view_contact_us']        = 'admin/contact_us/contact_us_view';
$route['contact_us/edit_contact_us/(:any)'] = 'admin/contact_us/contact_us_edit/$1';
$route['contact_us/contact_us_update_data'] = 'admin/contact_us/contact_us_update_data';
$route['contact_us/contact_us_delete/(:any)'] = 'admin/contact_us/contact_us_delete/$1';

// one_to_one_session ****************
$route['one_to_one_session/add_one_to_one_session'] = 'admin/one_to_one_session/add_one_to_one_session';
$route['one_to_one_session/one_to_one_session_submit_data'] = 'admin/one_to_one_session/one_to_one_session_submit_data';
$route['one_to_one_session/view_one_to_one_session']        = 'admin/one_to_one_session/one_to_one_session_view';
$route['one_to_one_session/edit_one_to_one_session/(:any)'] = 'admin/one_to_one_session/one_to_one_session_edit/$1';
$route['one_to_one_session/one_to_one_session_update_data'] = 'admin/one_to_one_session/one_to_one_session_update_data';
$route['one_to_one_session/one_to_one_session_delete/(:any)'] = 'admin/one_to_one_session/one_to_one_session_delete/$1';

// trade_idea ****************
$route['trade_idea/add_trade_idea'] = 'admin/trade_idea/add_trade_idea';
$route['trade_idea/trade_idea_submit_data'] = 'admin/trade_idea/trade_idea_submit_data';
$route['trade_idea/view_trade_idea']        = 'admin/trade_idea/trade_idea_view';
$route['trade_idea/edit_trade_idea/(:any)'] = 'admin/trade_idea/trade_idea_edit/$1';
$route['trade_idea/trade_idea_update_data'] = 'admin/trade_idea/trade_idea_update_data';
$route['trade_idea/trade_idea_delete/(:any)'] = 'admin/trade_idea/trade_idea_delete/$1';






//website
$route['index']  = 'website/index';
$route['about-us']  = 'website/about';
$route['gallery']  = 'website/gallery';
$route['one-to-one-session'] = 'website/one_to_one_session';
$route['become-partner'] = 'website/become_partner';
$route['e-books']  = 'website/e_books';
$route['trade-idea']  = 'website/trade_idea';
$route['blog']  = 'website/blog';
$route['contact']  = 'website/contact';
$route['login']  = 'website/login';
$route['register']  = 'website/register';
$route['courses'] = 'website/courses';
$route['online-detail/(:any)']  = 'website/online_detail/$1';
$route['mentor-details']  = 'website/mentor_details';
$route['self-learning']  = 'website/self_learning';
$route['recorded-detail/(:any)']  = 'website/recorded_detail/$1';
$route['classroom-courses']  = 'website/classroom_courses';
$route['classroom-detail/(:any)']  = 'website/classroom_detail/$1';
$route['blog/(:any)'] = 'website/blog_details/$1';
$route['blog-details'] = 'website/blog_details';
$route['book-slot'] = 'website/book_slot';
$route['mentor'] = 'website/mentor';
$route['mentor/(:any)'] = 'website/mentor_details/$1';
$route['trade-idea/(:any)'] = 'website/trade_idea_detail/$1';
$route['trade-idea-detail'] = 'website/trade_idea_detail';




/* API */
$route['api/register'] = 'api/User/register';
$route['api/login'] = 'api/User/login';
$route['api/logout'] = 'api/User/logout';
$route['reGenToken'] = 'api/Token/reGenToken';
$route['course_api/course'] = 'course_api/course_get';
$route['course_api/course_by_id/(:/num)'] = 'course_api/course_by_id_get/$1';
$route['ebook_api/ebook'] = 'ebook_api/ebook_get';
$route['slider_api/slider'] = 'slider_api/slider_get';
$route['course_api/curriculum/(:/num)/(:/num)'] = 'course_api/curriculum_get/$1/$2';
$route['course_api/topic/(:/num)'] = 'course_api/topic_get/$1';
$route['blog_api/blog'] = 'blog_api/blog_get';
$route['blog_api/blog_by_id/(:/num)'] = 'blog_api/blog_by_id_get/$1';