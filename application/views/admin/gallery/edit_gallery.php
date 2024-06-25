<div class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-12">

                <div class="bg-secondary rounded h-100 p-4">
                <?php foreach ($view_gallery as $row) :

                ?>
                    <div class="card-header">
                        <h5>Edit gallery</h5>
                        <?php if (isset($msg) || validation_errors() !== '') : ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <?= validation_errors(); ?>
                                <?= isset($msg) ? $msg : ''; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                        <?php endif; ?>
                    </div>
                    <form class="form-horizontal" method="post" action="<?= base_url('gallery/gallery_update_data'); ?>">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                        <input type="hidden" name="id" value="<?= $row->id ?>">

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="gallery_id" class="form-label"> Gallery Name <span class="text-danger">*</span></label>
                                <input type="text" id="gallery_id" class="form-control" name="gallery_id" value="<?= $row->gallery_id ?>">
                            </div>

                            <div class="form-group col-md-12">
                                <label for="inputEmail4" class="form-label">Image <span class="text-danger">*</span> </label>
                                <input type="file" name="image" parsley-trigger="change" class="form-control" id="image" placeholde="Image  " required>
                            </div>

                        </div>

            </div>
            <div class="widget-footer text-left">

                <button type="submit" name="submit" value="update gallery" class="btn btn-primary " style="margin: 10px;">update gallery</button>
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