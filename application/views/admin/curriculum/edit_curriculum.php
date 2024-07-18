<div class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-12">

                <div class="bg-secondary rounded h-100 p-4">
                <?php foreach ($view_curriculum as $row) :

                ?>
                    <div class="card-header">
                        <h5>Edit curriculum</h5>
                        <?php if (isset($msg) || validation_errors() !== '') : ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <?= validation_errors(); ?>
                                <?= isset($msg) ? $msg : ''; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                        <?php endif; ?>
                    </div>
                    <form class="form-horizontal" method="post" action="<?= base_url('curriculum/curriculum_update_data'); ?>">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                        <input type="hidden" name="id" value="<?= $row->id ?>">

                        <div class="form-row row">
                            <div class="form-group col-md-6">
                                <label for="course_id" class="form-label"> course <span class="text-danger">*</span></label>
                                <select id="course_id" class="form-control" name="course_id">
                                    <option value="">Select course</option>
                                    <?php
                                    $course_fetch_data = $this->Curriculum_model->course_fetch();
                                    foreach ($course_fetch_data as $data) { ?>
                                        <option value="<?php echo $data['id']; ?>"<?php if ($data['id'] === $row->course_id ) echo 'selected="selected"'?>><?php echo $data['course_name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="topic_name" class="form-label"> topic <span class="text-danger">*</span></label>
                                <select id="topic_name" class="form-control" name="topic_name">
                                    <option value="">Select topic</option>
                                    <?php
                                    $topic_fetch_data = $this->Curriculum_model->topic_fetch();
                                    foreach ($topic_fetch_data as $data) { ?>
                                        <option value="<?php echo $data['id']; ?>"<?php if ($data['id'] === $row->topic_name ) echo 'selected="selected"'?>><?php echo $data['topic_name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                       
                            <div class="form-row row">
                        <div class="form-group col-md-6">
                                <label for="sub_topic_name" class="form-label">Sub topic name</label>
                                <input type="text" name="sub_topic_name" parsley-trigger="change" class="form-control" id="sub_topic_name" value="<?=$row->sub_topic_name?>" placeholder="Sub topic name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="video_link" class="form-label">Video Link</label>
                                <input type="text" name="video_link" parsley-trigger="change" class="form-control" id="video_link" value="<?=$row->video_link?>" placeholder="Video Link">
                            </div>
                          
                        </div>
                        <div class="form-row row">
                        <div class="form-group col-md-6">
                                <label for="video_duration" class="form-label">Video Duration <span class="text-danger">*</span></label>
                                <input type="text" name="video_duration" parsley-trigger="change" class="form-control" id="video_duration" value="<?=$row->video_duration?>" placeholder="Video Duration">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lang" class="form-label">Video Language <span class="text-danger">*</span></label>
                                <input type="text" name="lang" parsley-trigger="change" class="form-control" id="lang" value="<?=$row->lang?>" placeholder="Video Language">
                            </div>
                        </div>

            </div>
            <div class="widget-footer text-left">

                <button type="submit" name="submit" value="update" class="btn btn-primary " style="margin: 10px;">update</button>
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
    CKEDITOR.replace('long_desc', {

        format_tags: 'p;h1;h2;h3;h4;h5;h6'

    });

    CKEDITOR.replace('blog_desc', {

        format_tags: 'p;h1;h2;h3;h4;h5;h6'

    });
</script>