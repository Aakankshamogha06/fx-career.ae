<div class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-12">

                <div class="bg-secondary rounded h-100 p-4">
                <h5 class="card-title fw-semibold mb-4">SEO</h5>

                <form class="form-horizontal" method="post" action="<?= base_url('seo/seo_submit_data'); ?>">
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                    <div class="form-row">
                        <label for="inputEmail4" class="form-label">PAGE NAME<span class="text-danger">*</span> </label>
                        <input type="text" name="page_name" parsley-trigger="change" class="form-control" id="page_name" placeholder="Page Name" required>
                    </div>
                    
                    <div class="form-group col-md-12">
                        <label for="inputEmail4" class="form-label">KEYWORDS<span class="text-danger">*</span> </label>
                        <input type="text" name="keywords" parsley-trigger="change" class="form-control" id="keywords" placeholder="Keywords" required>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="inputEmail4" class="form-label">TITLE<span class="text-danger">*</span> </label>
                        <input type="text" name="title" parsley-trigger="change" class="form-control" id="title" placeholder="Title" required>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="inputEmail4" class="form-label">META DESCRIPTION<span class="text-danger">*</span> </label>
                        <input type="text" name="meta_description" parsley-trigger="change" class="form-control" id="meta_description" placeholder="Meta Description" required>
                    </div>

                    <button type="submit" name="submit" value="Add" class="btn btn-primary " style="margin: 10px;">Add</button>
                    <button type="reset" class="btn btn-outline-primary" style="margin-left: 0px;">Reset</button>

                </form>
            </div>
        </div>
    </div>
</div>