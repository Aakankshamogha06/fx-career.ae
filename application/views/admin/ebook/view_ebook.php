<div class="content">
  <div class="container-fluid pt-4 px-4">
    <div class="row g-4 justify-content-center">
      <div class="col-lg-12">
        <div class="bg-secondary rounded p-4">
          <h6 class="mb-4">VIEW </h6>
          <a href="<?= base_url('admin/ebook/add_ebook'); ?>">
            <button type="button" class="btn btn-primary toggle-btn mb-4 mr-2" style="margin-left: 80.5%;">Add</button>
          </a>
          <hr>
          <div class="table-container">
            <div class="table-responsive">
              <table id="table_id" class="table table-striped">
                <thead style="color:#FEC83D;">
                  <tr>
                  <th>SR NO</th>
                  <th>E-BOOK NAME</th>
                  <th>E-BOOK IMAGE</th>
                  <th>E-BOOK PDF</th>
                  <th>E-BOOK PAGES</th>
                  <th>E-BOOK TYPE</th>
                  <th style="width: 150px;" class="text-right">OPTION</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $c = 1;
                foreach ($ebook_view as $row) : ?>
                  <tr>
                    <td><?= $c++; ?></td>
                    <td><?= $row->ebook_name ?></td>
                    <td> 
                      <?php if ($row->ebook_image) { ?>
                        <img src="<?php echo base_url('uploads/ebook_image/') . $row->ebook_image; ?>" style="width:50px;height:80px">
                      <?php } ?>
                    </td>
                    <td>
                    <?php if ($row->ebook_pdf) { ?>                        
        <a href="<?= base_url('uploads/ebook_pdf/') . $row->ebook_pdf; ?>" target="_blank">
            <i class="fas fa-file-pdf" style="height:20px; width:20px;"></i> <br>View E-Book
        </a>                      
    <?php } ?>
                    </td>
                    <td><?= $row->ebook_pages ?></td>
                    <td><?= $row->ebook_type ?></td>

                    <td class="text-right">
                      <!-- <a href="<?= base_url('admin/ebook/ebook_edit/' . $row->id); ?>">
                          <i class="fas fa-edit" style="font-size: 24px; color: blue;"></i></a> -->
                        <a href="<?= base_url('admin/ebook/ebook_delete/' . $row->id); ?>" onclick="return confirm('Are you sure want to delete ?');">
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
<script 
src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script>
  
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
