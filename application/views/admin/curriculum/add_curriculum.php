<div class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-12">

                <div class="bg-secondary rounded h-100 p-4">
                   <h5 class="card-title fw-semibold mb-4">CURRICULUM</h5>

                   <form class="form-horizontal" method="post" action="<?= base_url('curriculum/curriculum_submit_data'); ?>" enctype="multipart/form-data">
                       <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                       

                       <div class="form-row">
                        <div class="form-group col-md-6">
                                <label for="course_id" class="form-label"> course <span class="text-danger">*</span></label>
                                <select id="course_id" class="form-control" name="course_id">
                                    <option value="">Select course</option>
                                    <?php
                                        $course_fetch_data = $this->curriculum_model->course_fetch();
                                        foreach ($course_fetch_data as $data) { ?>
                                        <option value="<?php echo $data['id']; ?>"><?php echo $data['course_name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                               <label for="topic_name" class="form-label"> topic <span class="text-danger">*</span></label>
                               <select id="topic_name" class="form-control" name="topic_name">
                                   <option value="">Select topic</option>
                                   <?php
                                    $topic_fetch_data = $this->curriculum_model->topic_fetch();
                                    foreach ($topic_fetch_data as $data) { ?>
                                       <option value="<?php echo $data['id']; ?>"><?php echo $data['topic_name']; ?></option>
                                   <?php } ?>
                               </select>
                           </div>
                           
                           

                           <div class="form-group col-md-6">
                               <label for="inputEmail4" class="form-label">Sub Topic Name <span class="text-danger">*</span> </label>
                               <input type="text" name="sub_topic_name" parsley-trigger="change" class="form-control" id="sub_topic_name" placeholder="Sub Topic Name" required>
                           </div>


                       </div>

                       <div class="widget-footer text-left">

                           <button type="submit" name="submit" value="Add curriculum" class="btn btn-primary " style="margin: 10px;">Add</button>
                           <button type="reset" class="btn btn-outline-primary" style="margin-left: 0px;">Reset</button>
                       </div>
                   </form>

               </div>
               <!-- [ sample-page ] end -->
           </div>
       </div>
   </div>
   <!-- [ Main Content ] end -->
   <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>



   <script>
       CKEDITOR.replace('long_desc', {

           format_tags: 'p;h1;h2;h3;h4;h5;h6'

       });
       CKEDITOR.replace('blog_desc', {

           format_tags: 'p;h1;h2;h3;h4;h5;h6'

       });
   </script>