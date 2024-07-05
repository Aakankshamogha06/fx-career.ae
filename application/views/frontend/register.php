<main>
   <!-- breadcrumb-area-start -->
   <div class="it-breadcrumb-area it-breadcrumb-bg" data-background="<?= base_url() ?>public/web/assets/img/breadcrumb/breadcrumb.jpg">
      <div class="container">
         <div class="row ">
            <div class="col-md-12">
               <div class="it-breadcrumb-content z-index-3 text-center">
                  <div class="it-breadcrumb-title-box">
                     <h3 class="it-breadcrumb-title">Register</h3>
                  </div>
                  <div class="it-breadcrumb-list-wrap">
                     <div class="it-breadcrumb-list">
                        <span><a href="<?= base_url() ?>">Home</a></span>
                        <span class="dvdr">//</span>
                        <span>Register</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- breadcrumb-area-end -->

   <!-- signup-area-start -->
   <div class="it-signup-area pt-120 pb-120">
      <div class="container">
         <div class="it-signup-bg p-relative">
            <div class="row">
               <div class="col-xl-6 col-lg-6">
                  <form id="registerForm" action="<?= base_url('website/webadd') ?>" method="POST" enctype="multipart/form-data" class="mt-4">
                     <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                     <div class="it-signup-wrap">
                        <div class="it-category-title-box">
                           <span class="sub-head mb-3">Register</span>
                           <h4 class="it-section-title mb-4">Create An Account</h4>
                        </div>
                        <div class="it-signup-input-wrap mb-4">
                           <div class="row">
                              <div class="col-lg-6">
                                 <div class="it-signup-input mb-20">
                                    <input type="text" name="firstname" id="firstname" placeholder="First Name *" required>
                                    <?= form_error('firstname', '<div class="error">', '</div>'); ?>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="it-signup-input mb-20">
                                    <input type="text" name="lastname" id="lastname" placeholder="Last Name *" required>
                                    <?= form_error('lastname', '<div class="error">', '</div>'); ?>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="it-signup-input mb-20">
                                    <input type="text" name="mobile_no" id="mobile_no" placeholder="Phone *" required>
                                    <?= form_error('mobile_no', '<div class="error">', '</div>'); ?>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="it-signup-input mb-20">
                                    <input type="email" name="email" id="email" placeholder="Email *" required>
                                    <?= form_error('email', '<div class="error">', '</div>'); ?>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="it-signup-input mb-20">
                                    <input type="password" name="password" id="password" placeholder="Password *" required>
                                    <?= form_error('password', '<div class="error">', '</div>'); ?>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="it-signup-input mb-20">
                                    <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password *" required>
                                    <?= form_error('confirm_password', '<div class="error">', '</div>'); ?>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="formgroup">
                                    <img src="<?= $captcha['image']; ?>" class="capt mb-2" alt="CAPTCHA Image">
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="formgroup">
                                    <input type="text" name="captcha" id="captcha" class="form-control" placeholder="CAPTCHA" required>
                                    <?= form_error('captcha', '<div class="error">', '</div>'); ?>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="it-signup-btn mb-4">
                           <input type="submit" name="submit" value="Register" class="it-btn large">
                        </div>
                        <div class="it-signup-text">
                           <span>Already have an account? <a href="<?= base_url('login') ?>">Login</a></span>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="col-xl-6 col-lg-6 align-self-center">
                  <img src="<?= base_url() ?>public/web/assets/img/login.png" alt="" class="w-75">
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- signup-area-end -->
</main>

<!-- Bootstrap Alerts Script -->
<script>
   // Example of showing Bootstrap alerts for form validation errors
   document.getElementById('registerForm').addEventListener('submit', function(event) {
      var form = this;
      if (!form.checkValidity()) {
         event.preventDefault();
         event.stopPropagation();
         // Show Bootstrap alert for each error
         var errorElements = form.querySelectorAll('.error');
         errorElements.forEach(function(element) {
            var errorMessage = element.innerHTML.trim();
            if (errorMessage.length > 0) {
               var alertDiv = document.createElement('div');
               alertDiv.classList.add('alert', 'alert-danger', 'mt-2');
               alertDiv.textContent = errorMessage;
               form.insertBefore(alertDiv, form.firstElementChild);
            }
         });
      }
      form.classList.add('was-validated');
   });
</script>
