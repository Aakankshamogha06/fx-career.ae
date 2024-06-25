<div class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-12">

                <div class="bg-secondary rounded h-100 p-4">
                   <h5 class="card-title fw-semibold mb-4">BLOG DETAIL</h5>

                   <form class="form-horizontal" method="post" action="<?= base_url('blog_detail/blog_detail_submit_data'); ?>" enctype="multipart/form-data">
                       <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                       

                       <div class="form-row">
                           <div class="form-group col-md-12">
                               <label for="blog_name" class="form-label"> Blog Name <span class="text-danger">*</span></label>
                               <input type="text" id="blog_name" class="form-control" name="blog_name">

                           </div>
                           
                           <div class="form-group col-md-12">
                               <label for="inputEmail4" class="form-label">Blog Image <span class="text-danger">*</span> </label>
                               <input type="file" name="blog_image" parsley-trigger="change" class="form-control" id="blog_image" placeholder="Blog Image  " required>
                           </div>
                           <div class="form-group col-md-12">
                               <label for="blog_category" class="form-label"> Blog Category <span class="text-danger">*</span></label>
                               <select id="blog_category" class="form-control" name="blog_category">
                                   <option value="">Select Blog Category</option>
                                   <?php
                                    $blog_fetch_data = $this->blog_detail_model->blog_fetch();
                                    foreach ($blog_fetch_data as $data) { ?>
                                       <option value="<?php echo $data['id']; ?>"><?php echo $data['category']; ?></option>
                                   <?php } ?>

                               </select>
                           </div>

                           <div class="form-group col-md-12">
                               <label for="inputEmail4" class="form-label">Blog Author <span class="text-danger">*</span> </label>
                               <input type="text" name="blog_author" parsley-trigger="change" class="form-control" id="blog_author" placeholder="Blog Author  " required>
                           </div>
                           <div class="form-group col-md-12">
                               <label for="inputEmail4" class="form-label">Blog Date <span class="text-danger">*</span> </label>
                               <input type="date" name="blog_date" parsley-trigger="change" class="form-control" id="blog_date" placeholder="Blog Date  " required>
                           </div>

                           <div class="form-group col-md-12">
                               <label for="inputEmail4" class="form-label">Blog Description <span class="text-danger">*</span> </label>
                               <textarea type="text" name="blog_desc" parsley-trigger="change" class="form-control" id="blog_desc" placeholder="Blog Description  " required></textarea>
                           </div>
                           <div class="form-group col-md-12">
                               <label for="inputEmail4" class="form-label">Blog Long Description <span class="text-danger">*</span> </label>
                               <textarea type="text" name="long_desc" parsley-trigger="change" class="form-control" id="long_desc" placeholder="Blog Long Description  " required></textarea>
                           </div>

                       </div>

                       <div class="widget-footer text-left">

                           <button type="submit" name="submit" value="Add blog_detail" class="btn btn-primary " style="margin: 10px;">Add</button>
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