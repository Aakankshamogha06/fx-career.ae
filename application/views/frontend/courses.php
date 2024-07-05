<main>

   <!-- breadcrumb-area-start -->
   <div class="it-breadcrumb-area it-breadcrumb-bg" data-background="<?=base_url()?>public/web/assets/img/breadcrumb/breadcrumb.jpg">
      <div class="container">
         <div class="row ">
            <div class="col-md-12">
               <div class="it-breadcrumb-content z-index-3 text-center">
                  <div class="it-breadcrumb-title-box">
                     <h3 class="it-breadcrumb-title"> COURSE </h3>
                  </div>
                  <div class="it-breadcrumb-list-wrap">
                     <div class="it-breadcrumb-list">
                        <span><a href="<?=base_url()?>">home</a></span>
                        <span class="dvdr">//</span>
                        <span> COURSE</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- breadcrumb-area-end -->

   <!-- course-area-start -->
   <div class="it-course-area p-relative grey-bg pt-120 pb-120">
      <div class="container">
         <div class="row">
         <?php foreach($course_details_view as $row):?>
         <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
               <div class="it-course-item">
                  <div class="it-course-thumb mb-20 p-relative">
                     <a href="<?=base_url()?>online-detail/<?=str_replace(' ','-',strtolower($row->course_name));?>"><img src="<?=base_url('images/').$row->course_image;?>" alt="image"></a>
                     <div class="it-course-thumb-text">
                        <span><?=$row->mode?></span>
                     </div>
                  </div>
                  <div class="it-course-content">

                     <h4 class="it-course-title pb-5"><a href="<?=base_url()?>online-detail/<?=str_replace(' ','-',strtolower($row->course_name));?>"><?=$row->course_name?></a></h4>
                     <div class="it-course-info pb-15 mb-25 d-flex justify-content-between">
                        <span><i class="fa-light fa-file-invoice"></i>Lesson <?=$row->lesson?></span>
                        <span><i class="fa-sharp fa-regular fa-clock"></i><?=$row->duration?></span>

                     </div>

                     <div class="it-course-price-box d-flex justify-content-between">
                        <span><i>$<?=$row->price?></i> $120</span>
                        <a href="<?=base_url()?>online-detail/<?=str_replace(' ','-',strtolower($row->course_name));?>"><i class="fa-light fa-cart-shopping"></i>Buy Course</a>
                     </div>
                  </div>
               </div>
            </div>
            <?php endforeach; ?>

            
         </div>
      </div>
   </div>
   <!-- course-area-end -->

  

</main>
