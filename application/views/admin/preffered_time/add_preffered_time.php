<div class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-12">

                <div class="bg-secondary rounded h-100 p-4">
                   <h5 class="card-title fw-semibold mb-4">preffered_time</h5>

                   <form class="form-horizontal" method="post" action="<?= base_url('preffered_time/preffered_time_submit_data'); ?>" enctype="multipart/form-data">
                       <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                       <div class="form-row">
                           <div class="form-group col-md-6">
                               <label for="inputEmail4" class="form-label">Timing <span class="text-danger">*</span> </label>
                               <input type="text" name="time_slot" parsley-trigger="change" class="form-control" id="time_slot" placeholder="Timing" required>
                           </div>
                       </div>
                       <div class="widget-footer text-left">
                           <button type="submit" name="submit" value="Add preffered_time" class="btn btn-primary " style="margin: 10px;">Add</button>
                           <button type="reset" class="btn btn-outline-primary" style="margin-left: 0px;">Reset</button>
                       </div>
                   </form>

               </div>
               <!-- [ sample-page ] end -->
           </div>
       </div>
   </div>
   <!-- [ Main Content ] end -->
   <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>



   <script>
       CKEDITOR.replace('long_desc', {

           format_tags: 'p;h1;h2;h3;h4;h5;h6'

       });
       CKEDITOR.replace('blog_desc', {

           format_tags: 'p;h1;h2;h3;h4;h5;h6'

       });
   </script>