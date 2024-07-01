<body>

    <div class="content">
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-12">
                    <div class="bg-secondary rounded h-100 p-4">
                        <h5 class="card-title fw-semibold mb-4">TRADE IDEA</h5>
                        <form class="form-horizontal" method="post" action="<?= base_url('trade_idea/trade_idea_submit_data'); ?>" enctype="multipart/form-data">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                            <div class="row mb-3">
                                <div class="form-group col-md-6">
                                    <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                                    <input type="text" id="title" class="form-control" name="title">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="keywords" class="form-label">Keywords <span class="text-danger">*</span></label>
                                    <input type="text" id="keywords" class="form-control" name="keywords">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="form-group col-md-6">
                                    <label for="meta_desc" class="form-label">Meta Description <span class="text-danger">*</span></label>
                                    <input type="text" id="meta_desc" class="form-control" name="meta_desc">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="slug" class="form-label">Slug <span class="text-danger">*</span></label>
                                    <input type="text" id="slug" class="form-control" name="slug">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="form-group col-md-6">
                                    <label for="trade_name" class="form-label">Trade Idea Name <span class="text-danger">*</span></label>
                                    <input type="text" id="trade_name" class="form-control" name="trade_name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="trade_image" class="form-label">Trade Image <span class="text-danger">*</span></label>
                                    <input type="file" name="trade_image" parsley-trigger="change" class="form-control" id="trade_image" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="date" class="form-label">Date <span class="text-danger">*</span></label>
                                    <input type="date" name="date" parsley-trigger="change" class="form-control" id="date" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="description" class="form-label">Description <span class="text-danger">*</span></label>
                                    <textarea name="description" parsley-trigger="change" class="form-control" id="description" required></textarea>
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
