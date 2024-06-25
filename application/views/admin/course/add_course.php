<div class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-12">

                <div class="bg-secondary rounded h-100 p-4">
                   <h5 class="card-title fw-semibold mb-4">COURSE</h5>

                   <form class="form-horizontal" method="post" action="<?= base_url('course/course_submit_data'); ?>" enctype="multipart/form-data">
                       <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                       

                       <div class="form-row">
                           <div class="form-group col-md-12">
                               <label for="course_type" class="form-label"> Course Type <span class="text-danger">*</span></label>
                               <input type="text" id="course_type" class="form-control" name="course_type">

                           </div>
                           
                           
                       </div>

                       <div class="widget-footer text-left">

                           <button type="submit" name="submit" value="Add course" class="btn btn-primary " style="margin: 10px;">Add</button>
                           <button type="reset" class="btn btn-outline-primary" style="margin-left: 0px;">Reset</button>
                       </div>
                   </form>

               </div>
               <!-- [ sample-page ] end -->
           </div>
       </div>
   </div>
   