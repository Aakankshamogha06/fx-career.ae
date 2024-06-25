<div class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-12">

                <div class="bg-secondary rounded h-100 p-4">
                    <?php foreach ($view_blog_category as $row) :

                    ?>
                        <div class="card-header">
                            <h5>Edit seo</h5>
                            <?php if (isset($msg) || validation_errors() !== '') : ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <?= validation_errors(); ?>
                                    <?= isset($msg) ? $msg : ''; ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                            <?php endif; ?>
                        </div>
                    <form class="form-horizontal" method="post" action="<?= base_url('blog_category/blog_category_update_data'); ?>">
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputEmail4" class="form-label">Blog category name<span class="text-danger">*</span> </label>
                            <input type="text" name="category" parsley-trigger="change" class="form-control" id="category" value="<?=$row->category?>" placeholder="Blog Category Name" required>
                        </div>
                        <div>
                            <button type="submit" name="submit" value="Update " class="btn btn-primary " style="margin: 10px;">Update</button>
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