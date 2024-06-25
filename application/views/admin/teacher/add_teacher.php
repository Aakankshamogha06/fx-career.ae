<div class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h5 class="card-title fw-semibold mb-4">TEACHER</h5>

                    <form class="form-horizontal" method="post" action="<?= base_url('teacher/teacher_submit_data'); ?>" enctype="multipart/form-data">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="teacher_name" class="form-label"> Name <span class="text-danger">*</span></label>
                                <input type="text" id="teacher_name" class="form-control" name="teacher_name" placeholder="Your name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="teacher_image" class="form-label">Profile Image <span class="text-danger">*</span></label>
                                <input type="file" name="teacher_image" class="form-control" id="teacher_image" placeholder="Profile Image" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="teacher_mobile" class="form-label">Mobile Number <span class="text-danger">*</span></label>
                                <input type="text" id="teacher_mobile" class="form-control" name="teacher_mobile" placeholder="Mobile number" required>
                            </div>
                            <div class="col-md-6">
                                <label for="teacher_email" class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email" id="teacher_email" class="form-control" name="teacher_email" placeholder="Email" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                        <div class="col-md-6">
                                <label for="designation" class="form-label">Designation <span class="text-danger">*</span></label>
                                <input type="text" id="designation" class="form-control" name="designation" placeholder="designation" required>
                            </div>
                            <div class="col-md-6">
                                <label for="teacher_address" class="form-label">Address <span class="text-danger">*</span></label>
                                <input type="text" id="teacher_address" class="form-control" name="teacher_address" placeholder="Address" required>
                            </div>
                            
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="facebook" class="form-label">Facebook Profile URL <span class="text-danger">*</span></label>
                                <input type="text" id="facebook" class="form-control" name="facebook" placeholder="Facebook" required>
                            </div>
                            <div class="col-md-6">
                                <label for="twitter" class="form-label">Twitter Profile URL <span class="text-danger">*</span></label>
                                <input type="text" id="twitter" class="form-control" name="twitter" placeholder="Twitter" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                        <div class="col-md-6">
                                <label for="instagram" class="form-label">Instagram Profile URL <span class="text-danger">*</span></label>
                                <input type="text" id="instagram" class="form-control" name="instagram" placeholder="Instagram" required>
                            </div>
                            <div class="col-md-6">
                                <label for="skype" class="form-label">Skype ID <span class="text-danger">*</span></label>
                                <input type="text" id="skype" class="form-control" name="skype" placeholder="Skype" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-md-6">
                                <label for="teacher_education" class="form-label">Your Education <span class="text-danger">*</span></label>
                                <textarea id="teacher_education" class="form-control" name="teacher_education" placeholder="Education" required></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="teacher_introduction" class="form-label">Your Introduction <span class="text-danger">*</span></label>
                                <textarea id="teacher_introduction" class="form-control" name="teacher_introduction" placeholder="Introduction" required></textarea>
                            </div>
                        </div>

                        <div class="widget-footer text-left">
                            <button type="submit" name="submit" value="Add teacher" class="btn btn-primary" style="margin: 10px;">Add</button>
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
    CKEDITOR.replace('teacher_introduction', {
        format_tags: 'p;h1;h2;h3;h4;h5;h6'
    });
    CKEDITOR.replace('teacher_education', {
        format_tags: 'p;h1;h2;h3;h4;h5;h6'
    });
</script>
