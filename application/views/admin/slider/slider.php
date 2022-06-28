      <div class="page-content">
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
          <div>
            <h4 class="mb-3 mb-md-0">Slider</h4>
          </div>
        </div>
        <!-- row -->
        <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Data Slider</h6>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Slider</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($slider as $key => $value){ ?>
                        <tr>
                          <?php
                          $slider = $value['slider'];
                          $slider = str_replace('_', ' ', $slider);
                          ?>
                          <td><?= str_replace(base_url().'upload/slider/', ' ', $slider); ?></td>
                          <td>
                          <a href="#" class="btn btn-primary btn-sm edits" data-toggle="modal" data-target="#EditModal" onclick="prepare_update('<?= $value['id_slider'] ?>')">Ubah</a>
                        </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div class="modal fade" id="modals" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="modalHeader"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form id="addForm" action="" method="POST" name="addForm" class="form-horizontal" enctype="multipart/form-data">

                      <input type="hidden" name="id_slider" id="id_slider">

                      <div class="form-group">
                        <label for="slider">Slider</label>
                        <input type="file" name="slider" id="slider" class="form-control" accept="video/mp4">
                      </div>
                      
                      <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary w-100" id="submit" value="create">Simpan
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <div id="modal_delete" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="modalDeleteHeader"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="<?= base_url('admin/slider/destroy'); ?>" method="post">
                    <div class="modal-body">
                      <input type="hidden" name="id_delete" id="id_delete">
                      <p>Apakah anda yakin menghapus <b><span id="text_delete"></span></b> ?</p>
                    </div>
                    <div class="modal-footer">
                      <input type="submit" class="btn btn-danger" name="submit" value="YA">
                      <button type="button" class="btn btn-default" data-dismiss="modal">TIDAK</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- partial:partials/_footer.html -->
      <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
        <p class="text-muted text-center text-md-left">Copyright © 2021 <a href="https://www.nobleui.com" target="_blank">NobleUI</a>. All rights reserved</p>
        <p class="text-muted text-center text-md-left mb-0 d-none d-md-block">Handcrafted With <i class="mb-1 text-primary ml-1 icon-small" data-feather="heart"></i></p>
      </footer>
      <!-- partial -->
    </div>
  </div>
  <script>

    function prepare_update(id) {
      $('#modalHeader').html("Edit Slider");
      $("#addForm").attr('action', "<?= base_url('admin/slider/update'); ?>");

      $.getJSON('<?= base_url(); ?>admin/slider/show/' + id, function(data) {
        $("#id_slider").val(data.id_slider);
        $("#slider").val(data.slider);
      });

      $('#modals').modal('show');
    }

  </script>