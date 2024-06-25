<?php
$cur_tab = $this->uri->segment(2) == '' ? 'dashboard' : $this->uri->segment(2);
?>
<?php
$username = $this->session->userdata('username'); 
$role = $this->session->userdata('role_name'); 
?>

<div class="col-lg-2">
    <div class="sidebar pe-4 pb-3">
        <nav class="navbar bg-secondary navbar-dark">
            <!-- <a href="<?= base_url() ?>admin/dashboard" class="navbar-brand mx-4 mb-3">
                <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>FXCAREERS</h3>
            </a> --><br><br><br>
            <div class="d-flex align-items-center ms-4 mb-4">
                <div class="position-relative">
                    <img class="rounded-circle" src="<?= base_url() ?>public/admin/img/profile.png" alt="" style="width: 40px; height: 40px;">
                    <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0"><?= $username ?></h6>
                    <span><?= $role ?></span>
                </div>
            </div>
            <div class="navbar-nav w-100">
            <?php if ($this->session->userdata('role') === '1') : ?>
    <a href="<?= base_url('admin/dashboard'); ?>" class="nav-item nav-link" style="font-size:11px">
        <i class="fa fa-tachometer-alt me-2" style="font-size: 18px; "></i>DASHBOARD
    </a>
    <a href="<?= base_url('admin/users'); ?>" class="nav-item nav-link" style="font-size:11px">
        <i class="fa fa-user me-2" style="font-size: 18px; "></i>USERS
    </a>
    <a href="<?= base_url('admin/seo/seo_view'); ?>" class="nav-item nav-link" style="font-size:11px">
        <i class="fa fa-search me-2" style="font-size: 18px; "></i>SEO
    </a>
    <a href="<?= base_url('admin/blog_category/blog_category_view'); ?>" class="nav-item nav-link" style="font-size:11px">
        <i class="fa fa-layer-group me-2" style="font-size: 18px; "></i>BLOG CATEGORY
    </a>
    <a href="<?= base_url('admin/blog_detail/blog_detail_view'); ?>" class="nav-item nav-link" style="font-size:11px">
        <i class="fa fa-blog me-2" style="font-size: 18px; "></i>BLOG
    </a>
    <a href="<?= base_url('admin/analysis_detail/analysis_detail_view'); ?>" class="nav-item nav-link" style="font-size:11px">
        <i class="fa fa-chart-line me-2" style="font-size: 18px; "></i>ANALYSIS DETAIL
    </a>
    <a href="<?= base_url('admin/gallery/gallery_view'); ?>" class="nav-item nav-link" style="font-size:11px">
        <i class="fa fa-images me-2" style="font-size: 18px; "></i>GALLERY
    </a>
    <a href="<?= base_url('admin/sub_gallery/sub_gallery_view'); ?>" class="nav-item nav-link" style="font-size:11px">
        <i class="fa fa-image me-2" style="font-size: 18px; "></i>SUB GALLERY
    </a>
    <a href="<?= base_url('admin/course/course_view'); ?>" class="nav-item nav-link" style="font-size:11px">
        <i class="fa fa-book me-2" style="font-size: 18px; "></i>COURSE
    </a>
    <a href="<?= base_url('admin/course_category/course_category_view'); ?>" class="nav-item nav-link" style="font-size:11px">
        <i class="fa fa-list-alt me-2" style="font-size: 18px; "></i>CATEGORY
    </a>
    <a href="<?= base_url('admin/course_mode/course_mode_view'); ?>" class="nav-item nav-link" style="font-size:11px" >
        <i class="fa fa-book-open me-2" style="font-size: 18px; "></i>MODE
    </a>
    <a href="<?= base_url('admin/course_language/course_language_view'); ?>" class="nav-item nav-link" style="font-size:11px">
        <i class="fa fa-language me-2" style="font-size: 18px; "></i>LANGUAGE
    </a>
    <a href="<?= base_url('admin/topic/topic_view'); ?>" class="nav-item nav-link" style="font-size:11px">
        <i class="fa fa-lightbulb me-2" style="font-size: 18px; "></i>TOPIC
    </a>
    <a href="<?= base_url('admin/curriculum/curriculum_view'); ?>" class="nav-item nav-link" style="font-size:11px">
        <i class="fa fa-sitemap me-2" style="font-size: 18px; "></i>CURRICULUM
    </a>
    <a href="<?= base_url('admin/detail/detail_view'); ?>" class="nav-item nav-link" style="font-size:11px">
        <i class="fa fa-info-circle me-2" style="font-size: 18px; "></i>DETAIL
    </a>
    <a href="<?= base_url('admin/ebook/ebook_view'); ?>" class="nav-item nav-link" style="font-size:11px">
        <i class="fa fa-book-reader me-2" style="font-size: 18px; "></i>E-BOOK
    </a>
    <a href="<?= base_url('admin/slider/slider_view'); ?>" class="nav-item nav-link" style="font-size:11px">
        <i class="fa fa-sliders-h me-2" style="font-size: 18px; "></i>SLIDER
    </a>
    <a href="<?= base_url('admin/contact_us/contact_us_view'); ?>" class="nav-item nav-link" style="font-size:11px">
        <i class="fa fa-envelope me-2" style="font-size: 18px; "></i>CONTACT US
    </a>
<?php endif; ?>
<?php if ($this->session->userdata('role') === '3') : ?>
    <a href="<?= base_url('admin/dashboard'); ?>" class="nav-item nav-link" style="font-size:11px">
        <i class="fa fa-tachometer-alt me-2" style="font-size: 18px; "></i>DASHBOARD
    </a>
    <a href="<?= base_url('admin/seo/seo_view'); ?>" class="nav-item nav-link" style="font-size:11px">
        <i class="fa fa-search me-2" style="font-size: 18px; "></i>SEO
    </a>
    <a href="<?= base_url('admin/blog_detail/blog_detail_view'); ?>" class="nav-item nav-link" style="font-size:11px">
        <i class="fa fa-blog me-2" style="font-size: 18px; "></i>BLOG
    </a>
<?php endif; ?>


            </div>
        </nav>
    </div>
</div>