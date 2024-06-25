
   <main>

      <!-- breadcrumb-area-start -->
      <div class="it-breadcrumb-area it-breadcrumb-bg" data-background="<?=base_url()?>public/web/assets/img/breadcrumb/breadcrumb.jpg">
         <div class="container">
            <div class="row ">
               <div class="col-md-12">
                  <div class="it-breadcrumb-content z-index-3 text-center">
                     <div class="it-breadcrumb-title-box">
                        <h3 class="it-breadcrumb-title">blog </h3>
                     </div>
                     <div class="it-breadcrumb-list-wrap">
                        <div class="it-breadcrumb-list">
                           <span><a href="<?=base_url()?>">home</a></span>
                           <span class="dvdr">//</span>
                           <span>blog</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- breadcrumb-area-end -->

      <!-- blog-area-start -->
      <div class="it-blog-area  pt-120 pb-90">
         <div class="container">
            <div class="row">
               <?php foreach($blog_detail_view as $row):?>
               <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                  <div class="it-blog-item-box" data-background="<?=base_url()?>public/web/assets/img/blog/bg-1.jpg">                  
                     <div class="it-blog-item">
                        <div class="it-blog-thumb fix">
                        <a href="<?=base_url()?>blog/<?=str_replace(' ','-',strtolower($row->blog_name));?>">
                        <img src="<?=base_url('uploads/blogs/').$row->blog_image;?>" alt=""></a>
                        </div>
                        <div class="it-blog-meta pb-15">
                           <span>
                              <i class="fa-solid fa-calendar-days"></i>
                              <?= date('d-m-Y', strtotime($row->blog_date))?></span>
                           <!-- <span>
                              <i class="fa-light fa-messages"></i>
                              Comment (06)</span> -->
                        </div>
                        <h4 class="it-blog-title line-clamp-2"><a href="<?= base_url('blog/')?><?=str_replace(' ','-',strtolower($row->blog_name));?>">velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat</a></h4>
                        <a class="it-btn sm" href="<?= base_url('blog/')?><?=str_replace(' ','-',strtolower($row->blog_name));?>">
                           <span>
                              read more
                              <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M11 1.24023L16 7.24023L11 13.2402" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M1 7.24023H16" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                           </span>
                        </a>   
                     </div>
                  </div>
               </div>
               <?php endforeach?>
            </div>
         </div>
      </div>
      <!-- blog-area-end -->



   </main>
<!-- footer Include  -->
