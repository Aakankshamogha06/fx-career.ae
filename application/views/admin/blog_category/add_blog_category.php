<div class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-12">

                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">ADD BLOG CATEGORY</h6>

                    <form class="form-horizontal" method="post" action="<?= base_url('blog_category/blog_category_submit_data'); ?>">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputEmail4" class="form-label">Blog category name<span class="text-danger">*</span> </label>
                                <input type="text" name="category" parsley-trigger="change" class="form-control" id="category" placeholder="Blog Category Name" required>
                            </div>
                            <div>
                                <button type="submit" name="submit" value="Add blog" class="btn btn-primary " style="margin: 10px;">Add</button>
                                <button type="reset" class="btn btn-outline-primary" style="margin-left: 0px;">Reset</button>
                            </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>