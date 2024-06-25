<div class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <?php foreach ($view_teacher as $row) : ?>
                        <div class="card-header">
                            <h5>Edit teacher</h5>
                            <?php if (isset($msg) || validation_errors() !== '') : ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <?= validation_errors(); ?>
                                    <?= isset($msg) ? $msg : ''; ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                            <?php endif; ?>
                        </div>
                        <form class="form-horizontal" method="post" action="<?= base_url('teacher/teacher_update_data'); ?>" enctype="multipart/form-data">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                            <input type="hidden" name="id" value="<?= $row->id ?>">
                            <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="teacher_name" class="form-label"> Name <span class="text-danger">*</span></label>
                                <input type="text" id="teacher_name" class="form-control" name="teacher_name" placeholder="Your name" value="<?=$row->teacher_name?>" required>
                            </div>
                            <div class="col-md-6">
                                <label for="teacher_image" class="form-label">Profile Image <span class="text-danger">*</span></label>
                                <input type="file" name="teacher_image" class="form-control" id="teacher_image" placeholder="Profile Image" value="<?=$row->teacher_image?>" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="teacher_mobile" class="form-label">Mobile Number <span class="text-danger">*</span></label>
                                <input type="text" id="teacher_mobile" class="form-control" name="teacher_mobile" placeholder="Mobile number" value="<?=$row->teacher_mobile?>" required>
                            </div>
                            <div class="col-md-6">
                                <label for="teacher_email" class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email" id="teacher_email" class="form-control" name="teacher_email" placeholder="Email" value="<?=$row->teacher_email?>" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            
                            <div class="col-md-6">
                                <label for="teacher_address" class="form-label">Address <span class="text-danger">*</span></label>
                                <input type="text" id="teacher_address" class="form-control" name="teacher_address" placeholder="Address" value="<?=$row->teacher_address?>" required>
                            </div>
                            <div class="col-md-6">
                                <label for="instagram" class="form-label">Instagram Profile URL <span class="text-danger">*</span></label>
                                <input type="text" id="instagram" class="form-control" name="instagram" placeholder="Instagram" value="<?=$row->instagram?>" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="facebook" class="form-label">Facebook Profile URL <span class="text-danger">*</span></label>
                                <input type="text" id="facebook" class="form-control" name="facebook" placeholder="Facebook" value="<?=$row->facebook?>" required>
                            </div>
                            <div class="col-md-6">
                                <label for="twitter" class="form-label">Twitter Profile URL <span class="text-danger">*</span></label>
                                <input type="text" id="twitter" class="form-control" name="twitter" placeholder="Twitter" value="<?=$row->twitter?>" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="skype" class="form-label">Skype ID <span class="text-danger">*</span></label>
                                <input type="text" id="skype" class="form-control" name="skype" placeholder="Skype" value="<?=$row->skype?>" required>
                            </div>
                            <div class="col-md-6">
                                <label for="designation" class="form-label">designation  <span class="text-danger">*</span></label>
                                <input type="text" id="designation" class="form-control" name="designation" placeholder="designation" value="<?=$row->designation?>" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-md-6">
                                <label for="teacher_education" class="form-label">Your Education <span class="text-danger">*</span></label>
                                <textarea id="teacher_education" class="form-control" name="teacher_education" placeholder="Education" required><?=$row->teacher_introduction?></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="teacher_introduction" class="form-label">Your Introduction <span class="text-danger">*</span></label>
                                <textarea id="teacher_introduction" class="form-control" name="teacher_introduction" placeholder="Introduction" required><?=$row->teacher_education?></textarea>
                            </div>
                        </div>

                            <div class="widget-footer text-left">
                                <button type="submit" name="submit" value="update teacher" class="btn btn-primary" style="margin: 10px;">Update Blog Detail</button>
                                <button type="reset" class="btn btn-outline-primary" style="margin-left: 0px;">Reset</button>
                            </div>
                        </form>
                    <?php endforeach; ?>
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
