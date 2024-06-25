<div class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-12">

                <div class="bg-secondary rounded h-100 p-4">
                   <h5 class="card-title fw-semibold mb-4">SUB GALLERY</h5>

                   <form class="form-horizontal" method="post" action="<?= base_url('sub_gallery/sub_gallery_submit_data'); ?>" enctype="multipart/form-data">
                       <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                       

                       <div class="form-row">
                           
                           
                           
                           <div class="form-group col-md-12">
                               <label for="gallery_id" class="form-label"> Gallery <span class="text-danger">*</span></label>
                               <select id="gallery_id" class="form-control" name="gallery_id">
                                   <option value="">Select Gallery</option>
                                   <?php
                                    $gallery_fetch_data = $this->sub_gallery_model->gallery_fetch();
                                    foreach ($gallery_fetch_data as $data) { ?>
                                       <option value="<?php echo $data['id']; ?>"><?php echo $data['image_name']; ?></option>
                                   <?php } ?>

                               </select>
                           </div>
                               <div class="form-group col-md-12">
                               <label for="inputEmail4" class="form-label">Sub Gallery Image <span class="text-danger">*</span> </label>
                               <input type="file" name="image" parsley-trigger="change" class="form-control" id="image" placeholder="Blog Image  " required>
                           </div>
                           
                       </div>

                       <div class="widget-footer text-left">

                           <button type="submit" name="submit" value="Add sub_gallery" class="btn btn-primary " style="margin: 10px;">Add</button>
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