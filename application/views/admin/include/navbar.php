<?php
	$cur_tab = $this->uri->segment(2) == '' ? 'dashboard' : $this->uri->segment(2);
?>
<?php
// Assuming you have access to the session data and user model
$username = $this->session->userdata('username'); // Fetch username from session
$role = $this->session->userdata('role_name'); // Fetch role from session
?>
<!-- Navbar Start -->
<nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
  <a href="<?= base_url() ?>" class="navbar-brand d-flex d-lg-none me-4">
    <!-- <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2> -->
  </a>
  <a href="#" class="sidebar-toggler flex-shrink-0">
    <i class="fa fa-bars"></i>
  </a>
  
  <!-- Left side (Search Bar) -->
  

  <!-- Center (Logo) -->
  <div class="me-3">
    <a href="<?=base_url()?>">
      <img src="<?= base_url() ?>public/web/assets/img/logo/fx-white.png" alt="Logo" style="height: 70px; margin-left:30px;">
    </a>
  </div>

  <!-- Right side (Profile and Dropdown) -->
  <div class="navbar-nav align-items-center ms-auto">
    <div class="nav-item dropdown">
      <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
        <img class="rounded-circle me-lg-2" src="<?= base_url() ?>public/admin/img/profile.png" alt="" style="width: 40px; height: 40px;">
        <span class="d-none d-lg-inline-flex" style="color:#ffc107;">
          <?= ucwords($this->session->userdata('name')); ?>
        </span>
      </a>
      <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
      <a href="#" class="dropdown-item" style="color:#ffc107; transition: color 0.3s;" onmouseover="this.style.color='#fff';" onmouseout="this.style.color='#ffc107';">
          <i class="fa fa-user me-2"></i>My Profile
      </a>
      <a href="#" class="dropdown-item" style="color:#ffc107; transition: color 0.3s;" onmouseover="this.style.color='#fff';" onmouseout="this.style.color='#ffc107';">
          <i class="fa fa-cog me-2"></i>Settings
      </a>
      <a href="<?= base_url() ?>admin/auth/login" class="dropdown-item" style="color:#ffc107; transition: color 0.3s;" onmouseover="this.style.color='#fff';" onmouseout="this.style.color='#ffc107';">
          <i class="fa fa-sign-out-alt me-2"></i>Log Out
      </a>

      </div>
    </div>
  </div>
</nav>
<!-- Navbar End -->

<!-- Footer Start -->
<!-- <div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded-top p-4">
        <div class="row">
            <div class="col-12 col-sm-6 text-center text-sm-start">
                &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
            </div>
            <div class="col-12 col-sm-6 text-center text-sm-end">
                Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
            </div>
        </div>
    </div>
</div> -->
<!-- Footer End -->
