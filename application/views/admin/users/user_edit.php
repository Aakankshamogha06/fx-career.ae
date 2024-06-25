<div class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-12">

                <div class="bg-secondary rounded h-100 p-4">
                <h5 class="card-title fw-semibold mb-4">USER</h5>
                    
                    <?php echo form_open(base_url('admin/users/edit/'.$user['id']) )?> 
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                <label for="firstname" >First Name</label>
                                <input type="text" name="firstname" value="<?= $user['firstname']; ?>" class="form-control" id="firstname" placeholder="">
                                </div>
                                <div class="form-group col-md-12">
                                <label for="lastname" >Last Name</label>
                                <input type="text" name="lastname" value="<?= $user['lastname']; ?>" class="form-control" id="lastname" placeholder="">
                                </div>
                            </div>
                            <div class="form-row">
                            <div class="form-group col-md-12">
                            <label for="email" >Email</label>
                            <input type="email" name="email" value="<?= $user['email']; ?>" class="form-control" id="email" placeholder="">
                            </div>
                            <div class="form-group col-md-12" >
                            <label for="mobile_no" >Mobile No</label>

                            <input type="number" name="mobile_no" value="<?= $user['mobile_no']; ?>" class="form-control" id="mobile_no" placeholder="">
                            </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-12">
                                <label for="role" >Select Role</label>
                                <select name="user_role" class="form-control">
                    <option value="">Select Role</option>
                    <?php
                    
                    $role_fetch_data = $this->user_model->role_fetch();
                    foreach ($role_fetch_data as $data) {?>
                     <option value="<?php echo $data['id']; ?>"<?php if ($data['id'] === $user['is_admin']) echo 'selected="selected"'?>><?php echo $data['role_name']; ?></option>
                      <?php } ?>

                    
                  </select>
                                </div>
                               
                            </div>
                            <input type="submit" class="btn  btn-primary" name="submit" value="Update User">
                           
                            <?php echo form_close( ); ?>
                    </div>
                </div>
            </div>
            <!-- [ sample-page ] end -->
        </div>
        <!-- [ Main Content ] end -->
