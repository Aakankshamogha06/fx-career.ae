<div class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <?php foreach ($view_questions as $row) : ?>
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
                        <form class="form-horizontal" method="post" action="<?= base_url('questions/questions_update_data'); ?>" enctype="multipart/form-data">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                            <input type="hidden" name="id" value="<?= $row->id ?>">
                            <div class="row mb-3">
                                <div class="form-group col-md-6">
                                    <label for="question" class="form-label">Question <span class="text-danger">*</span></label>
                                    <input type="text" id="question" class="form-control" value="<?=$row->question?>" name="question">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="answer1" class="form-label">Answer 1 <span class="text-danger">*</span></label>
                                    <input type="text" id="answer1" class="form-control" value="<?=$row->answer1?>" name="answer1">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="form-group col-md-6">
                                    <label for="answer2" class="form-label">Answer 2 <span class="text-danger">*</span></label>
                                    <input type="text" id="answer2" class="form-control" value="<?=$row->answer2?>" name="answer2">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="answer3" class="form-label">Answer 3 <span class="text-danger">*</span></label>
                                    <input type="text" id="answer3" class="form-control" value="<?=$row->answer3?>" name="answer3">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="form-group col-md-6">
                                    <label for="answer4" class="form-label">Answer 4 <span class="text-danger">*</span></label>
                                    <input type="text" id="answer4" class="form-control" value="<?=$row->answer4?>" name="answer4">
                                </div> 
                                <div class="form-group col-md-6">
                                    <label for="correct_answer" class="form-label">Correct Answer <span class="text-danger">*</span></label>
                                    <input type="text" name="correct_answer" parsley-trigger="change" value="<?=$row->correct_answer?>" class="form-control" id="correct_answer" required>
                                </div>

                            </div>
                            </div>
                            <div class="widget-footer text-left mt-3">
                                <button type="submit" name="submit" value="Add" class="btn btn-primary" style="margin: 10px;">Add</button>
                                <button type="reset" class="btn btn-outline-primary" style="margin-left: 0px;">Reset</button>
                            </div>
                        </form>
                    </div>
                    <?php endforeach?>
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
