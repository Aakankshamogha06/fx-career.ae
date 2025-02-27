<main>
   <!-- breadcrumb-area-start -->
   <div class="it-breadcrumb-area it-breadcrumb-bg" data-background="<?= base_url() ?>public/web/assets/img/breadcrumb/breadcrumb.jpg">
      <div class="container">
         <div class="row ">
            <div class="col-md-12">
               <div class="it-breadcrumb-content z-index-3 text-center">
                  <div class="it-breadcrumb-title-box">
                     <h3 class="it-breadcrumb-title">contact us</h3>
                  </div>
                  <div class="it-breadcrumb-list-wrap">
                     <div class="it-breadcrumb-list">
                        <span><a href="<?= base_url() ?>">home</a></span>
                        <span class="dvdr">//</span>
                        <span>contact</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- breadcrumb-area-end -->
   <!-- contact-area-start -->
   <div class="it-contact__area pt-120 pb-120">
      <div class="container">
         <div class="it-contact__wrap fix z-index-3 p-relative">
            <div class="it-contact__shape-1 d-none d-xl-block">
               <img src="<?= base_url() ?>public/web/assets/img/contact/shape-2-1.png" alt="">
            </div>
            <div class="row align-items-end">
               <div class="col-xl-7">
                  <div class="it-contact__right-box">
                     <div class="it-contact__section-box pb-20">
                        <h4 class="it-contact__title pb-15">Get in Touch</h4>
                        <p>Suspendisse ultrice gravida dictum fusce placerat <br>
                           ultricies integer </p>
                     </div>
                     <div class="it-contact__content mb-55">
                        <ul>
                           <li>
                              <div class="it-contact__list d-flex align-items-start">
                                 <div class="it-contact__icon">
                                    <span><i class="fa-solid fa-location-dot"></i></span>
                                 </div>
                                 <div class="it-contact__text">
                                    <span>Our Address</span>
                                    <a href="#"> 1209, Burlington tower - Business Bay - Dubai - United Arab Emirates</a>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="it-contact__list d-flex align-items-start">
                                 <div class="it-contact__icon">
                                    <span><i class="fa-solid fa-phone phone"></i></span>
                                 </div>
                                 <div class="it-contact__text">
                                    <span>Call Us</span>
                                    <a href="tel:+99358954565">+99- 35895-4565</a>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="it-contact__list d-flex align-items-start">
                                 <div class="it-contact__icon">
                                    <span><i class="fa-solid fa-phone phone"></i></span>
                                 </div>
                                 <div class="it-contact__text">
                                    <span>Email Us</span>
                                    <a href="mailto:supportyou@info.com">supportyou@info.com</a>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                     <div class="it-contact__bottom-box d-flex align-items-center justify-content-between">
                        <div class="it-contact__scrool smooth">
                           <a href="#it-newsletter"><i class="fa-solid fa-arrow-down"></i>Customer Care</a>
                        </div>
                        <div class="it-footer-social">
                           <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                           <a href="#"><i class="fa-brands fa-instagram"></i></a>
                           <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                           <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-5">
                  <div class="it-contact__form-box">
                     <form id="contactForm" method="POST" action="<?= base_url('contact_us/contact_us_submit_data'); ?>" enctype="multipart/form-data" onsubmit="showAlert()">
                        <div class="row">
                           <div class="col-12 mb-25">
                              <div class="it-contact-input-box">
                                 <label>Name*</label>
                                 <input type="text" name="username" placeholder="Name" required>
                              </div>
                           </div>
                           <div class="col-12 mb-25">
                              <div class="it-contact-input-box">
                                 <label>Email Address*</label>
                                 <input type="email" name="email" placeholder="Email" required>
                              </div>
                           </div>
                           <div class="col-12 mb-25">
                              <div class="it-contact-input-box">
                                 <label>Phone*</label>
                                 <input type="text" id="mobile_no" name="mobile_no" placeholder="Phone" required>
                              </div>
                           </div>
                           <script>
                              document.getElementById('mobile_no').addEventListener('input', function(e) {
                                 this.value = this.value.replace(/[^0-9]/g, '');
                              });

                              function showAlert() {
                                 alert("Your form has been submitted successfully!");
                                 return true; // Allow the form to be submitted
                              }
                           </script>
                           <div class="col-12 mb-25">
                              <div class="it-contact-input-box">
                                 <label>Location</label>
                                 <input type="text" name="location" placeholder="Location">
                              </div>
                           </div>
                           <div class="col-12 mb-25">
                              <div class="it-contact-input-box">
                                 <label>Subject*</label>
                                 <input type="text" name="subject" placeholder="Subject" required>
                              </div>
                           </div>
                           <div class="col-12 mb-25">
                              <div class="it-contact-textarea-box">
                                 <label>Message</label>
                                 <textarea name="message" placeholder="Message"></textarea>
                              </div>
                           </div>
                           <div class="col-12">
                              <input type="submit" name="submit" class="it-btn" value="Send Message">
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- contact-area-end -->
</main>