<div class="content">
  <div class="container-fluid pt-4 px-4">
    <div class="row g-4 justify-content-center">
      <div class="col-lg-12">
        <div class="bg-secondary rounded p-4">
          <h6 class="mb-4">VIEW </h6>
          <a href="<?= base_url('admin/detail/add_detail'); ?>">
            <button type="button" class="btn btn-primary toggle-btn mb-4 mr-2" style="margin-left: 80.5%;">Add</button>
          </a>
          <hr>
          <div class="table-container">
            <div class="table-responsive">
              <table id="table_id" class="table table-striped">
                <thead style="color:#FEC83D;">
                  <tr>
                    <th>SR NO</th>
                    <th>COURSE NAME</th>
                    <th>COURSE IMAGE</th>
                    <th>COURSE CATEGORY</th>
                    <th>COURSE AUTHOR</th>
                    <th>COURSE LANGUAGE</th>
                    <th>COURSE MODE</th>
                    <th>COURSE LESSON</th>
                    <th>COURSE DURATION</th>
                    <th>COURSE PRICE</th>
                    <th>LONG DESCRIPTION </th>
                    <th style="width: 150px;" class="text-right">OPTION</th>
                  </tr>
                </thead>
                <tbody style="text-align: center;">
                  <?php
                  $c = 1;
                  foreach ($detail_view as $row) : ?>
                    <tr>
                      <td><?= $c++; ?></td>
                      <td><?= $row->course_name ?></td>
                      <td>
                        <?php if ($row->course_image) { ?>
                          <img src="<?php echo base_url('uploads/course/') . $row->course_image; ?>" style="width:50px;height:80px">
                        <?php } ?>
                      </td>
                      <td><?= $row->category ?></td>
                      <td><?= $row->author ?></td>
                      <td><?= $row->language ?></td>
                      <td><?= $row->mode ?></td>
                      <td><?= $row->lesson ?>Lessons</td>
                      <td><?= $row->duration ?>Hours</td>
                      <td>USD<?= $row->price ?></td>
                      <td><?= substr($row->long_description, 0, 20) . '...' ?></td>
                      <td class="text-right"><a href="<?= base_url('admin/detail/detail_edit/' . $row->id); ?>">
                          <i class="fas fa-edit" style="font-size: 24px; color: blue;"></i></a>
                        <a href="<?= base_url('admin/detail/detail_delete/' . $row->id); ?>" onclick="return confirm('Are you sure want to delete ?');">
                          <i class="fas fa-trash-alt" style="font-size: 24px; color: red;"></i>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <!-- Include DataTables Bootstrap <script integration JS -->
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script>

    <script>
      jQuery(document).ready(function($) {
        $('#table_id').DataTable({
          "pagingType": "simple_numbers",
          "lengthMenu": [5, 10, 25, 50],
          "pageLength": 5,
          "language": {
            "paginate": {
              "previous": "<",
              "next": ">"
            }
          },
          "responsive": true
        });
      });
    </script>