<div class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-12">

                <div class="bg-secondary rounded h-100 p-4">

                <div class="bg-secondary rounded h-100 p-4">
                    <?php foreach ($view_blog_detail as $row) :

                    ?>
                        <div class="card-header">
                            <h5>Edit blog_detail</h5>
                            <?php if (isset($msg) || validation_errors() !== '') : ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <?= validation_errors(); ?>
                                    <?= isset($msg) ? $msg : ''; ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                            <?php endif; ?>
                        </div>
                            <form class="form-horizontal" method="post" action="<?= base_url('blog_detail/blog_detail_update_data'); ?>">
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <input type="hidden" name="id" value="<?= $row->id ?>">
                                <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4" class="form-label">SEO Title  <span class="text-danger">*</span> </label>
                                    <input type="text" name="seo_title" parsley-trigger="change" class="form-control" id="seo_title" value="<?= $row->seo_title ?>" placeholde="SEO Title  " required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4" class="form-label">SEO Keywords  <span class="text-danger">*</span> </label>
                                    <input type="text" name="seo_keywords" parsley-trigger="change" class="form-control" id="seo_keywords" value="<?= $row->seo_keywords ?>" placeholde="SEO Keywords  " required>
                                </div>
                            </div>
                           
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                <label for="blog_name" class="form-label"> Blog Name <span class="text-danger">*</span></label>
                                    <input type="text" id="blog_name" class="form-control" name="blog_name" value="<?= $row->blog_name ?>">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4" class="form-label">SEO Description <span class="text-danger">*</span> </label>
                                    <textarea type="text" name="seo_desc" parsley-trigger="change" class="form-control" id="seo_desc" value="<?= $row->seo_desc ?>" placeholde="SEO Description " required></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4" class="form-label">Blog Image  <span class="text-danger">*</span> </label>
                                    <input type="file" name="blog_image" parsley-trigger="change" class="form-control" id="blog_image"  placeholde="Blog Image  " required>
                                </div>
                                <div class="form-group col-md-12">
                                <label for="blog_category" class="form-label"> Blog Category <span class="text-danger">*</span></label>
                                    <select id="blog_category" class="form-control" name="blog_category">
                                        <option value="">Select Blog Category</option>
                                        <?php
                                        $blog_fetch_data = $this->blog_detail_model->blog_fetch();
                                        foreach ($blog_fetch_data as $data) { ?>
                                            <option value="<?php echo $data['id']; ?>"<?php if ($data['id'] === $row->blog_category ) echo 'selected="selected"'?>><?php echo $data['category']; ?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4" class="form-label">Blog Author  <span class="text-danger">*</span> </label>
                                    <input type="text" name="blog_author" parsley-trigger="change" class="form-control" id="blog_author" value="<?= $row->blog_author ?>" placeholde="Blog Author  " required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4" class="form-label">Blog Date  <span class="text-danger">*</span> </label>
                                    <input type="date" name="blog_date" parsley-trigger="change" class="form-control" id="blog_date" value="<?= $row->blog_date ?>" placeholde="Blog Date  " required>
                                </div>
                            </div>
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4" class="form-label">Blog Description  <span class="text-danger">*</span> </label>
                                    <textarea type="text" name="blog_desc" parsley-trigger="change" class="form-control" id="blog_desc"  placeholde="Blog Description  " required> <?=$row->blog_desc ?> </textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4" class="form-label">Blog Long Description  <span class="text-danger">*</span> </label>
                                    <textarea type="text" name="long_desc" parsley-trigger="change" class="form-control" id="long_desc"  placeholde="Blog Long Description  " required> <?=$row->long_desc ?> </textarea>
                                </div>
                            

                    </div>
                        <div class="widget-footer text-left">

                            <button type="submit" name="submit" value="update blog_detail" class="btn btn-primary " style="margin: 10px;">update blog_detail</button>
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