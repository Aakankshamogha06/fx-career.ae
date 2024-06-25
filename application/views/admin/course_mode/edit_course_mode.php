<div class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <?php if ($view_course_mode): ?>
                        <div class="card-header">
                            <h5>Edit Course Mode</h5>
                            <?php if (isset($message) || validation_errors() !== ''): ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <?= validation_errors(); ?>
                                    <?= isset($message) ? $message : ''; ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php endif; ?>
                        </div>
                        <form class="form-horizontal" method="post" action="<?= base_url('course_mode/course_mode_update_data'); ?>">
                            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                            <input type="hidden" name="id" value="<?= $view_course_mode->id ?>">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="mode_name" class="form-label">Mode Name <span class="text-danger">*</span></label>
                                    <input type="text" name="mode_name" class="form-control" id="mode_name" value="<?= $view_course_mode->mode_name ?>" placeholder="Mode Name" required>
                                </div>
                            </div>
                            <div class="widget-footer text-left">
                                <button type="submit" name="submit" value="Update course_mode" class="btn btn-primary" style="margin: 10px;">Update</button>
                                <button type="reset" class="btn btn-outline-primary" style="margin-left: 0px;">Reset</button>
                            </div>
                        </form>
                    <?php else: ?>
                        <div class="alert alert-danger" role="alert">
                            <strong>Error!</strong> Invalid Course Mode ID.
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('long_desc', {
        format_tags: 'p;h1;h2;h3;h4;h5;h6'
    });
    CKEDITOR.replace('blog_desc', {
        format_tags: 'p;h1;h2;h3;h4;h5;h6'
    });
</script>
