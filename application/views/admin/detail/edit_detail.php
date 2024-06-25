<div class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-12">

                <div class="bg-secondary rounded h-100 p-4">
                <?php foreach ($view_detail as $row) :

                ?>
                    <div class="card-header">
                        <h5>Edit detail</h5>
                        <?php if (isset($msg) || validation_errors() !== '') : ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <?= validation_errors(); ?>
                                <?= isset($msg) ? $msg : ''; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                        <?php endif; ?>
                    </div>
                    <form class="form-horizontal" method="post" action="<?= base_url('detail/detail_update_data'); ?>">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                        <input type="hidden" name="id" value="<?= $row->id ?>">

            <div class="form-row">
                            <div class="form-group col-md-6">
                               <label for="inputEmail4" class="form-label">Course Name <span class="text-danger">*</span> </label>
                               <input type="text" name="course_name" parsley-trigger="change" class="form-control" id="course_name" value=" <?= $row->course_name?>" placeholder="Course Name" required>
                           </div>
                           <div class="form-group col-md-6">
                               <label for="inputEmail4" class="form-label">Course Image <span class="text-danger">*</span> </label>
                               <input type="file" name="course_image" parsley-trigger="change" class="form-control" id="course_image" value=" <?= $row->course_image?>" placeholder="Course Image" required>
                           </div>
                       </div>
                       <div class="form-row">
                       <div class="form-group col-md-6">
                               <label for="inputEmail4" class="form-label">Course Author <span class="text-danger">*</span> </label>
                               <input type="text" name="author" parsley-trigger="change" class="form-control" id="author" value=" <?= $row->author?>" placeholder="Course Author" required>
                           </div>
                            <div class="form-group col-md-6">
                               <label for="category" class="form-label"> course_category <span class="text-danger">*</span></label>
                               <select id="category" class="form-control" name="category">
                                   <option value="">Select course_category</option>
                                   <?php
                                    $course_category_fetch_data = $this->detail_model->course_category_fetch();
                                    foreach ($course_category_fetch_data as $data) { ?>
                                       <option value="<?php echo $data['id']; ?>"<?php if ($data['id'] === $row->category ) echo 'selected="selected"'?>><?php echo $data['category_name']; ?></option>
                                   <?php } ?>
                               </select>
                           </div>
                           
                       </div>

                       <div class="form-row"> 
                           <div class="form-group col-md-6">
                               <label for="mode" class="form-label"> Course Mode <span class="text-danger">*</span></label>
                               <select id="mode" class="form-control" name="mode">
                                   <option value="">Select Course Mode</option>
                                   <?php
                                    $course_mode_fetch_data = $this->detail_model->course_mode_fetch();
                                    foreach ($course_mode_fetch_data as $data) { ?>
                                       <option value="<?php echo $data['id']; ?>"<?php if ($data['id'] === $row->mode ) echo 'selected="selected"'?>><?php echo $data['mode_name']; ?></option>
                                   <?php } ?>
                               </select>
                           </div>
                           <div class="form-group col-md-6">
                               <label for="language" class="form-label"> Course Language <span class="text-danger">*</span></label>
                               <select id="language" class="form-control" name="language">
                                   <option value="">Select Course Language</option>
                                   <?php
                                    $course_language_fetch_data = $this->detail_model->course_language_fetch();
                                    foreach ($course_language_fetch_data as $data) { ?>
                                       <option value="<?php echo $data['id']; ?>"<?php if ($data['id'] === $row->language ) echo 'selected="selected"'?>><?php echo $data['language_name']; ?></option>
                                   <?php } ?>
                               </select>
                           </div>
                       </div>
                       <div class="form-row">
                            <div class="form-group col-md-6">
                               <label for="inputEmail4" class="form-label">No. of Lessons <span class="text-danger">*</span> </label>
                               <input type="text" name="lesson" parsley-trigger="change" class="form-control" id="lesson" value=" <?= $row->lesson?>" placeholder="No. of Lessons " required>
                           </div>
                           <div class="form-group col-md-6">
                               <label for="inputEmail4" class="form-label">Price of Course <span class="text-danger">*</span> </label>
                               <input type="text" name="price" parsley-trigger="change" class="form-control" id="price" value=" <?= $row->price?>" placeholder="Price of Course " required>
                           </div>
                       </div>
                       <div class="form-row">
                            <div class="form-group col-md-6">
                               <label for="inputEmail4" class="form-label">Duration of Course <span class="text-danger">*</span> </label>
                               <input type="text" name="duration" parsley-trigger="change" class="form-control" id="duration" value=" <?= $row->duration?>" placeholder="Duration of Course " required>
                           </div>
                          
                       </div>
                       <div class="form-row">
                            
                           <div class="form-group col-md-12">
                               <label for="inputEmail4" class="form-label">Description <span class="text-danger">*</span> </label>
                               <textarea type="text" name="description" parsley-trigger="change" class="form-control" id="description" placeholder="Description" required><?=$row->description?> </textarea>
                           </div>
                           <div class="form-group col-md-12">
                               <label for="inputEmail4" class="form-label"> Long Description <span class="text-danger">*</span> </label>
                               <textarea type="text" name="long_description" parsley-trigger="change" class="form-control" id="long_description" placeholder="Long Description" required><?=$row->long_description?> </textarea>
                           </div>
                       </div>
            <div class="widget-footer text-left">

                <button type="submit" name="submit" value="update detail" class="btn btn-primary " style="margin: 10px;">update detail</button>
                <button type="reset" class="btn btn-outline-primary" style="margin-left: 0px;">Reset</button>
            </div>
            </form>
        </div>
    </div>
    <!-- [ sample-page ] end -->
</div>
<!-- [ Main Content ] end -->
<?php endforeach; ?>

</div>
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

   <script>
       CKEDITOR.replace('description', {

           format_tags: 'p;h1;h2;h3;h4;h5;h6'

       });
       CKEDITOR.replace('long_description', {

           format_tags: 'p;h1;h2;h3;h4;h5;h6'

       });
   </script>