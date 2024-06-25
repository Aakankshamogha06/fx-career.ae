<footer>
   <!-- footer-area-start -->
   <div class="it-footer-area it-footer-bg black-bg pt-120 pb-70" data-background="<?=base_url()?>public/web/assets/img/footer/bg-1-1.jpg">
      <div class="container">
         <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-50">
               <div class="it-footer-widget footer-col-1">
                  <div class="it-footer-logo pb-25">
                     <a href="index-html"><img src="<?=base_url()?>public/web/assets/img/logo/logo-white.png" alt="" width="40%;"></a>
                  </div>
                  <div class="it-footer-text pb-5">
                     <p>Interdum velit laoreet id donec ultrices <br> tincidunt arcu. Tincidunt tortor aliquam nulla facilisi cras fermentum odio eu.</p>
                  </div>
                  <div class="it-footer-social">
                     <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                     <a href="#"><i class="fa-brands fa-instagram"></i></a>
                     <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                     <a href="#"><i class="fa-brands fa-twitter"></i></a>
                  </div>
               </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 mb-50">
               <div class="it-footer-widget footer-col-3">
                  <h4 class="it-footer-title">quick links:</h4>
                  <div class="it-footer-list">

                     <ul class="">
                        <li><a href="<?=base_url()?>about-us"><i class="fa-regular fa-angle-right"></i> About Us</a></li>
                        <li><a href="<?=base_url()?>trade-idea"><i class="fa-regular fa-angle-right"></i>Trade Idea</a></li>
                        <li><a href="<?=base_url()?>gallery"><i class="fa-regular fa-angle-right"></i> Gallery</a></li>
                        <li><a href="<?=base_url()?>e-books"><i class="fa-regular fa-angle-right"></i> E-Books</a></li>
                        <li><a href="<?=base_url()?>blog"><i class="fa-regular fa-angle-right"></i> Blog</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-50">
               <div class="it-footer-widget footer-col-2">
                  <h4 class="it-footer-title">Support:</h4>
                  <div class="it-footer-list">

                     <ul class="">
                        <li><a href="#"><i class="fa-regular fa-angle-right"></i> Disclaimer</a></li>
                        <li><a href="#"><i class="fa-regular fa-angle-right"></i> Privacy Policy</a></li>
                        <li><a href="#"><i class="fa-regular fa-angle-right"></i> Career</a></li>
                        <li><a href="#"><i class="fa-regular fa-angle-right"></i> Refund Policy</a></li>
                        <li><a href="#"><i class="fa-regular fa-angle-right"></i> Terms &amp; Conditions</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-50">
    <div class="it-footer-widget footer-col-4">
        <h4 class="it-footer-title">Gallery</h4>
        <div class="row gx-5">
            <?php foreach ($gallery_view as $row) : ?>
                <div class="col-md-4 col-4">
                    <div class="it-footer-thumb mb-10">
                        <img src="<?= base_url('uploads/gallery/') . $row->image; ?>" alt="Classes" class="img-fluid gallery-image">
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

         </div>
      </div>
   </div>
   <!-- footer-area-end -->

   <!-- copy-right area start -->
   <div class="it-copyright-area it-copyright-height">
      <div class="container">
         <div class="row">
            <div class="col-12 wow itfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
               <div class="it-copyright-text text-center">
                  <p>Copyright © 2023 <a href="#">FXCareers</a> || All Rights Reserved</p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- copy-right area end -->

</footer>



<!-- JS here -->
<script src="<?=base_url()?>public/web/assets/js/jquery.js"></script>
<script src="<?=base_url()?>public/web/assets/js/waypoints.js"></script>
<script src="<?=base_url()?>public/web/assets/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url()?>public/web/assets/js/slick.min.js"></script>
<script src="<?=base_url()?>public/web/assets/js/magnific-popup.js"></script>
<script src="<?=base_url()?>public/web/assets/css/fancybox/fancybox.min.js"></script>
<script src="<?=base_url()?>public/web/assets/js/purecounter.js"></script>
<script src="<?=base_url()?>public/web/assets/js/wow.js"></script>
<script src="<?=base_url()?>public/web/assets/js/nice-select.js"></script>
<script src="<?=base_url()?>public/web/assets/js/swiper-bundle.js"></script>
<script src="<?=base_url()?>public/web/assets/js/isotope-pkgd.js"></script>
<script src="<?=base_url()?>public/web/assets/js/imagesloaded-pkgd.js"></script>
<script src="<?=base_url()?>public/web/assets/js/ajax-form.js"></script>
<script src="<?=base_url()?>public/web/assets/js/main.js"></script>



</body>

</html>