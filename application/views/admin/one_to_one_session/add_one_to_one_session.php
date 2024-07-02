<body>

    <div class="content">
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-12">
                    <div class="bg-secondary rounded h-100 p-4">
                        <h5 class="card-title fw-semibold mb-4">ONE TO ONE SESSION</h5>
                        <form class="form-horizontal" method="post" action="<?= base_url('one_to_one_session/one_to_one_session_submit_data'); ?>" enctype="multipart/form-data">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                            <div class="row mb-3">
                                <div class="form-group col-md-6">
                                    <label for="session_name" class="form-label">Name <span class="text-danger">*</span></label>
                                    <input type="text" id="session_name" class="form-control" name="session_name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="session_image" class="form-label">Session Image <span class="text-danger">*</span></label>
                                    <input type="file" id="session_image" class="form-control" name="session_image">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="form-group col-md-6">
                                    <label for="date" class="form-label">Date <span class="text-danger">*</span></label>
                                    <input type="date" id="date" class="form-control" name="date">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="time" class="form-label">Time <span class="text-danger">*</span></label>
                                    <input type="text" id="time" class="form-control" name="time">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="form-group col-md-6">
                                    <label for="location" class="form-label">Location <span class="text-danger">*</span></label>
                                    <input type="text" id="location" class="form-control" name="location">
                                </div> 
                                <div class="form-group col-md-6">
                                    <label for="language" class="form-label">Language <span class="text-danger">*</span></label>
                                    <input type="text" name="language" parsley-trigger="change" class="form-control" id="language" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="duration" class="form-label">Duration <span class="text-danger">*</span></label>
                                    <input type="text" name="duration" parsley-trigger="change" class="form-control" id="duration" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="speaker" class="form-label">Speaker <span class="text-danger">*</span></label>
                                    <input type="speaker" name="speaker" parsley-trigger="change" class="form-control" id="speaker" required>
                                </div>
                            </div>
                            <div class="widget-footer text-left mt-3">
                                <button type="submit" name="submit" value="Add" class="btn btn-primary" style="margin: 10px;">Add</button>
                                <button type="reset" class="btn btn-outline-primary" style="margin-left: 0px;">Reset</button>
                            </div>
                        </form>
                    </div>
                    <!-- [ sample-page ] end -->
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description', {
            format_tags: 'p;h1;h2;h3;h4;h5;h6'
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
