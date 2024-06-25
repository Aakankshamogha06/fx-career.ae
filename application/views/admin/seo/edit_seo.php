<div class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-12">

                <div class="bg-secondary rounded h-100 p-4">
                <?php foreach ($view_seo as $row) :

                ?>
                    <div class="card-header">
                        <h5>Edit</h5>
                        <?php if (isset($msg) || validation_errors() !== '') : ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <?= validation_errors(); ?>
                                <?= isset($msg) ? $msg : ''; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                        <?php endif; ?>
                    </div>
                    <form class="form-horizontal" method="post" action="<?= base_url('seo/seo_update_data'); ?>">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                        <input type="hidden" name="id" value="<?= $row->id ?>">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputEmail4" class="form-label">PAGE NAME<span class="text-danger">*</span> </label>
                                <input type="text" name="page_name" parsley-trigger="change" class="form-control" id="page_name" value="<?= $row->page_name ?>" placeholder="Page Name" required>
                            </div>
                           =
                            <div class="form-group col-md-12">
                                <label for="inputEmail4" class="form-label">KEYWORDS<span class="text-danger">*</span> </label>
                                <input type="text" name="keywords" parsley-trigger="change" class="form-control" id="keywords" value="<?= $row->keywords ?>" placeholder="Keywords" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputEmail4" class="form-label">TITLE<span class="text-danger">*</span> </label>
                                <input type="text" name="title" parsley-trigger="change" class="form-control" id="title" value="<?= $row->title ?>" placeholder="Title" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputEmail4" class="form-label">META DESCRIPTION<span class="text-danger">*</span> </label>
                                <input type="text" name="meta_description" parsley-trigger="change" class="form-control" id="meta_description" value="<?= $row->meta_description ?>" placeholder="Meta Description" required>
                            </div>

                        </div>

                        <div class="widget-footer text-left">

                            <button type="submit" name="submit" value="update seo" class="btn btn-primary " style="margin: 10px;">update seo</button>
                            <button type="reset" class="btn btn-outline-primary" style="margin-left: 0px;">Reset</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
    <!-- [ sample-page ] end -->
</div>
<!-- [ Main Content ] end -->
<?php endforeach; ?>

</div>