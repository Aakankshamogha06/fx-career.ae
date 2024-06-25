<div class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <?php foreach ($view_topic as $row) : ?>
                        <div class="card-header">
                            <h5>Edit Course Mode</h5>
                            <?php if (isset($message) || validation_errors() !== '') : ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <?= validation_errors(); ?>
                                    <?= isset($message) ? $message : ''; ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php endif; ?>
                        </div>
                        <form class="form-horizontal" method="post" action="<?= base_url('topic/topic_update_data'); ?>">
                            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                            <input type="hidden" name="id" value="<?= $row->id ?>">
                            <div class="form-row">

                                <div class="form-group col-md-12">
                                    <label for="course_id" class="form-label"> course <span class="text-danger">*</span></label>
                                    <select id="course_id" class="form-control" name="course_id">
                                        <option value="">Select course</option>
                                        <?php
                                        $course_fetch_data = $this->topic_model->course_fetch();
                                        foreach ($course_fetch_data as $data) { ?>
                                            <option value="<?php echo $data['id']; ?>"><?php echo $data['course_name']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="inputEmail4" class="form-label">Topic name<span class="text-danger">*</span> </label>
                                    <input type="text" name="topic_name" parsley-trigger="change" class="form-control" id="topic_name  " value="<?= $row->topic_name ?>" placeholder="Topic name " required>
                                </div>

                                <div class="widget-footer text-left">
                                    <button type="submit" name="submit" value="Add topic" class="btn btn-primary " style="margin: 10px;">Add</button>
                                    <button type="reset" class="btn btn-outline-primary" style="margin-left: 0px;">Reset</button>
                                </div>
                        </form>
                    <?php endforeach; ?>
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