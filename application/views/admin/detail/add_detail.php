<div class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h5 class="card-title fw-semibold mb-4">COURSE DETAIL</h5>
                    <form class="form-horizontal" method="post" action="<?= base_url('detail/detail_submit_data'); ?>" enctype="multipart/form-data">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

                        <div class="form-row row mb-4">
                            <div class="form-group col-md-6">
                                <label for="course_name" class="form-label">Course Name <span class="text-danger">*</span> </label>
                                <input type="text" name="course_name" parsley-trigger="change" class="form-control" id="course_name" placeholder="Course Name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="course_image" class="form-label">Course Image <span class="text-danger">*</span> </label>
                                <input type="file" name="course_image" parsley-trigger="change" class="form-control" id="course_image" placeholder="Course Image" required>
                            </div>
                        </div>
                        <div class="form-row row mb-4">
                            <div class="form-group col-md-6">
                                <label for="author" class="form-label">Course Author <span class="text-danger">*</span> </label>
                                <input type="text" name="author" parsley-trigger="change" class="form-control" id="author" placeholder="Course Author" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="category" class="form-label">Course Category <span class="text-danger">*</span></label>
                                <select id="category" class="form-control" name="category">
                                    <option value="">Select Course Category</option>
                                    <?php
                                    $course_category_fetch_data = $this->detail_model->course_category_fetch();
                                    foreach ($course_category_fetch_data as $data) { ?>
                                        <option value="<?php echo $data['id']; ?>"><?php echo $data['category_name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-row row mb-4"> 
                            <div class="form-group col-md-6">
                                <label for="mode" class="form-label">Course Mode <span class="text-danger">*</span></label>
                                <input type="text" name="mode" parsley-trigger="change" class="form-control" id="mode" placeholder="Course Mode" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="language" class="form-label">Course Language <span class="text-danger">*</span></label>
                                <select id="language" class="form-control" name="language">
                                    <option value="">Select Course Language</option>
                                    <?php
                                    $course_language_fetch_data = $this->detail_model->course_language_fetch();
                                    foreach ($course_language_fetch_data as $data) { ?>
                                        <option value="<?php echo $data['id']; ?>"><?php echo $data['language_name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-row row mb-4">
                            <div class="form-group col-md-6">
                                <label for="lesson" class="form-label">No. of Lessons <span class="text-danger">*</span> </label>
                                <input type="text" name="lesson" parsley-trigger="change" class="form-control" id="lesson" placeholder="No. of Lessons" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="price" class="form-label">Price of Course <span class="text-danger">*</span> </label>
                                <input type="text" name="price" parsley-trigger="change" class="form-control" id="price" placeholder="Price of Course" required>
                            </div>
                        </div>
                        <div class="form-row row mb-4">
                            <div class="form-group col-md-6">
                                <label for="duration" class="form-label">Duration of Course <span class="text-danger">*</span> </label>
                                <input type="text" name="duration" parsley-trigger="change" class="form-control" id="duration" placeholder="Duration of Course" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
                                <input type="text" name="status" parsley-trigger="change" class="form-control" id="status" placeholder="Status" required>
                            </div>
                        </div>
                        <div class="form-row row mb-4">
                            <div class="form-group col-md-12">
                                <label for="long_description" class="form-label">Long Description <span class="text-danger">*</span> </label>
                                <textarea name="long_description" parsley-trigger="change" class="form-control" id="long_description" placeholder="Long Description" required></textarea>
                            </div>
                        </div>
                        <div class="widget-footer text-left">
                            <button type="submit" name="submit" value="Add detail" class="btn btn-primary" style="margin: 10px;">Add</button>
                            <button type="reset" class="btn btn-outline-primary" style="margin-left: 0px;">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    const editorConfig = {
        format_tags: 'p;h1;h2;h3;h4;h5;h6'
    };    
    CKEDITOR.replace('long_description', editorConfig);
</script>
