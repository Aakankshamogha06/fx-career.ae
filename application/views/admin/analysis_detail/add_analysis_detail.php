<div class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-12">

                <div class="bg-secondary rounded h-100 p-4">
                   <h5 class="card-title fw-semibold mb-4">analysis DETAIL</h5>

                   <form class="form-horizontal" method="post" action="<?= base_url('analysis_detail/analysis_detail_submit_data'); ?>" enctype="multipart/form-data">
                       <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                       

                       <div class="form-row">
                           <div class="form-group col-md-12">
                               <label for="analysis_name" class="form-label"> analysis Name <span class="text-danger">*</span></label>
                               <input type="text" id="analysis_name" class="form-control" name="analysis_name">

                           </div>
                           
                           <div class="form-group col-md-12">
                               <label for="inputEmail4" class="form-label">analysis Image <span class="text-danger">*</span> </label>
                               <input type="file" name="analysis_image" parsley-trigger="change" class="form-control" id="analysis_image" placeholder="analysis Image  " required>
                           </div>
                           <div class="form-group col-md-12">
                               <label for="analysis_category" class="form-label"> analysis Category <span class="text-danger">*</span></label>
                               <select id="analysis_category" class="form-control" name="analysis_category">
                                   <option value="">Select analysis Category</option>
                                   <?php
                                    $analysis_fetch_data = $this->analysis_detail_model->analysis_fetch();
                                    foreach ($analysis_fetch_data as $data) { ?>
                                       <option value="<?php echo $data['id']; ?>"><?php echo $data['category']; ?></option>
                                   <?php } ?>

                               </select>
                           </div>

                           <div class="form-group col-md-12">
                               <label for="inputEmail4" class="form-label">analysis Author <span class="text-danger">*</span> </label>
                               <input type="text" name="analysis_author" parsley-trigger="change" class="form-control" id="analysis_author" placeholder="analysis Author  " required>
                           </div>
                           <div class="form-group col-md-12">
                               <label for="inputEmail4" class="form-label">analysis Date <span class="text-danger">*</span> </label>
                               <input type="date" name="analysis_date" parsley-trigger="change" class="form-control" id="analysis_date" placeholder="analysis Date  " required>
                           </div>

                           <div class="form-group col-md-12">
                               <label for="inputEmail4" class="form-label">analysis Description <span class="text-danger">*</span> </label>
                               <textarea type="text" name="analysis_desc" parsley-trigger="change" class="form-control" id="analysis_desc" placeholder="analysis Description  " required></textarea>
                           </div>
                           <div class="form-group col-md-12">
                               <label for="inputEmail4" class="form-label">analysis Long Description <span class="text-danger">*</span> </label>
                               <textarea type="text" name="long_desc" parsley-trigger="change" class="form-control" id="long_desc" placeholder="analysis Long Description  " required></textarea>
                           </div>

                       </div>

                       <div class="widget-footer text-left">

                           <button type="submit" name="submit" value="Add analysis_detail" class="btn btn-primary " style="margin: 10px;">Add</button>
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
       CKEDITOR.replace('analysis_desc', {

           format_tags: 'p;h1;h2;h3;h4;h5;h6'

       });
   </script>