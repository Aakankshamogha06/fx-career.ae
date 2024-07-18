<div class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h5 class="card-title fw-semibold mb-4">CURRICULUM</h5>
                    <form class="form-horizontal" method="post" action="<?= base_url('curriculum/curriculum_submit_data'); ?>" enctype="multipart/form-data">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                        <div class="form-row row">
                            <div class="form-group col-md-6">
                                <label for="course_id" class="form-label">Course <span class="text-danger">*</span></label>
                                <select id="course_id" class="form-control" name="course_id">
                                    <option value="">Select course</option>
                                    <?php
                                        $course_fetch_data = $this->Curriculum_model->course_fetch();
                                        foreach ($course_fetch_data as $data) { ?>
                                        <option value="<?php echo $data['id']; ?>"><?php echo $data['course_name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="topic_name" class="form-label">Topic <span class="text-danger">*</span></label>
                                <select id="topic_name" class="form-control" name="topic_name">
                                    <option value="">Select topic</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row row">
                        <div class="form-group col-md-6">
                                <label for="sub_topic_name" class="form-label">Sub topic name</label>
                                <input type="text" name="sub_topic_name" parsley-trigger="change" class="form-control" id="sub_topic_name" placeholder="Sub topic name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="video_link" class="form-label">Video Link</label>
                                <input type="text" name="video_link" parsley-trigger="change" class="form-control" id="video_link" placeholder="Video Link">
                            </div>
                            
                        </div>
                        <div class="form-row row">
                            <div class="form-group col-md-6">
                                <label for="lang" class="form-label">Video Language <span class="text-danger">*</span></label>
                                <input type="text" name="lang" parsley-trigger="change" class="form-control" id="lang" placeholder="Video Language">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="video_duration" class="form-label">Video Duration <span class="text-danger">*</span></label>
                                <input type="text" name="video_duration" parsley-trigger="change" class="form-control" id="video_duration" placeholder="Video Duration">
                            </div>
                        </div>
                        <div class="widget-footer text-left mt-4">
                            <button type="submit" name="submit" value="Add curriculum" class="btn btn-primary" style="margin: 10px;">Add</button>
                            <button type="reset" class="btn btn-outline-primary" style="margin-left: 0px;">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>        
<script>
    CKEDITOR.replace('long_desc', {
        format_tags: 'p;h1;h2;h3;h4;h5;h6'
    });
    CKEDITOR.replace('blog_desc', {
        format_tags: 'p;h1;h2;h3;h4;h5;h6'
    });
</script>
<script>
    $(document).ready(function() {
        $('#course_id').change(function() {

            var course_id = $('#course_id').val();
            if (course_id != '') {
                $.ajax({
                    url: "<?php echo base_url(); ?>admin/curriculum/fetch_topic",
                    method: "POST",
                    headers: {
                        '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
                    },
                    data: {
                        course_id: course_id
                    },
                    success: function(data) {

                        $('#topic_name').html(data);
                        // $('#city').html('<option value="">Select City</option>');
                    }
                });
            } else {
                $('#topic_name').html('<option value="">Select Topic</option>');
                // $('#city').html('<option value="">Select City</option>');
            }
        });
    });
    </script>
