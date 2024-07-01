
   <main>
      <!-- breadcrumb-area-start -->
      <div class="it-breadcrumb-area it-breadcrumb-bg" data-background="<?=base_url()?>public/web/assets/img/breadcrumb/breadcrumb.jpg">
         <div class="container">
            <div class="row ">
               <div class="col-md-12">
                  <div class="it-breadcrumb-content z-index-3 text-center">
                     <div class="it-breadcrumb-title-box">
                        <h3 class="it-breadcrumb-title">TEACHER Details</h3>
                     </div>
                     <div class="it-breadcrumb-list-wrap">
                        <div class="it-breadcrumb-list">
                           <span><a href="<?=base_url()?>">home</a></span>
                           <span class="dvdr">//</span>
                           <span>Teacher Details</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- breadcrumb-area-end -->

      <!-- teacher-details-area-start -->
      <div class="it-teacher-details-area pt-120 pb-120">
         <div class="container">
            <div class="it-teacher-details-wrap">
            <?php foreach($teacher_detail as $row):?>   
               <div class="row">
                  <div class="col-xl-3 col-lg-3">
                    
                     <div class="it-teacher-details-left">
                        <div class="it-teacher-details-left-thumb">
                           <img src="<?=base_url()?>uploads/teachers/<?=$row->teacher_image?>" alt="">
                        </div>
                        <div class="it-teacher-details-left-social text-center">
                        <a href="<?= $row->twitter ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="<?= $row->facebook ?>" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="<?= $row->instagram ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="<?= $row->skype ?>" target="_blank"><i class="fab fa-skype"></i></a>
                        </div>
                        <div class="it-teacher-details-left-info">
                           <ul>
                              <li>
                                 <i class="fa-light fa-phone-volume"></i>
                                 <a href="tel:(568)367987237"><?=$row->teacher_mobile?></a>
                              </li>
                              <li>
                                 <i class="fa-light fa-location-dot"></i>
                                 <a href="https://www.google.com/maps" target="_blank"><?=$row->teacher_address?></a>
                              </li>
                              <li>
                                 <i class="fa-light fa-envelope"></i>
                                 <a href=""><?=$row->teacher_email?></a>
                              </li>
                           </ul>
                        </div>
  
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9">
                     <div class="it-teacher-details-right">
                        <div class="it-teacher-details-right-title-box">
                           <h4><?=$row->teacher_name?></h4>
                           <span><?=$row->designation?></span>
                           <h4>Introduction:</h4>
                           <p><?=$row->teacher_introduction?></p>
                           
                        </div>
                        <div class="it-teacher-details-right-content mb-40">
                           <h4>Education:</h4>
                           <p><?=$row->teacher_education?>
                           </p>
                        </div>
                        
                     </div>
                  </div>
                  <!-- blog/<?=str_replace(' ','-',strtolower($row->blog_name));?> -->
                   <?php endforeach?>
               </div>
            </div>
         </div>
      </div>
      <!-- teacher-details-area-end -->

    

      

   </main>

<!-- Footer
 Include  -->


