<div class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-12">

                <div class="bg-secondary rounded h-100 p-4">
                   <h5 class="card-title fw-semibold mb-4">BLOG DETAIL</h5>

                   <form class="form-horizontal" method="post" action="<?= base_url('ebook/ebook_submit_data'); ?>" enctype="multipart/form-data">
                       <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                       

                       <div class="form-row">
                           <div class="form-group col-md-6">
                               <label for="ebook_name" class="form-label"> Ebook Name <span class="text-danger">*</span></label>
                               <input type="text" id="ebook_name" class="form-control" name="ebook_name">

                           </div>
                           <div class="form-group col-md-6">
                               <label for="ebook_desc" class="form-label"> Ebook Description <span class="text-danger">*</span></label>
                               <input type="text" id="ebook_desc" class="form-control" name="ebook_desc">

                           </div>
                           
                           <div class="form-group col-md-6">
                               <label for="inputEmail4" class="form-label"> E-book Image <span class="text-danger">*</span> </label>
                               <input type="file" name="ebook_image" parsley-trigger="change" class="form-control" id="ebook_image" placeholder="E-book Image  " required>
                           </div>
                           <div class="form-group col-md-6">
                           <label for="inputEmail4" class="form-label"> E-book Pdf <span class="text-danger">*</span> </label>
                               <input type="file" name="ebook_pdf" parsley-trigger="change" class="form-control" id="ebook_pdf" placeholder="E-book Pdf  " required>
                           </div>

                           <div class="form-group col-md-6">
                               <label for="inputEmail4" class="form-label">Ebook Type <span class="text-danger">*</span> </label>
                               <input type="text" name="ebook_type" parsley-trigger="change" class="form-control" id="ebook_type" placeholder="Ebook Type  " required>
                           </div>
                           <div class="form-group col-md-6">
                               <label for="inputEmail4" class="form-label">Ebook Pages <span class="text-danger">*</span> </label>
                               <input type="text" name="ebook_pages" parsley-trigger="change" class="form-control" id="ebook_pages" placeholder="Ebook Pages  " required>
                           </div>

                          

                       </div>

                       <div class="widget-footer text-left">

                           <button type="submit" name="submit" value="Add ebook" class="btn btn-primary " style="margin: 10px;">Add</button>
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