      <div class="page-content">
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
          <div>
            <h4 class="mb-3 mb-md-0">Konfigurasi</h4>
          </div>
        </div>
        <!-- row -->
        <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Data Konfigurasi</h6>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Nama Konfiguras</th>
                        <th>Value</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($config as $key => $value){ ?>
                        <tr>
                          <td><?= $value['nama_config'] ?></td>
                          <td><?= $value['nama_provinsi'] ?></td>
                          <td>
                            <a href="#" class="btn btn-primary btn-sm edits" data-toggle="modal" data-target="#EditModal" onclick="prepare_update('<?= $value['id_config'] ?>')">Ubah</a>
                            <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal_delete" onclick="prepare_delete('<?= $value['id_config'] ?>')">Hapus</a>
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
                    <form id="updateForm" action="<?= base_url() ?>admin/config/update" method="POST" name="updateForm" class="form-horizontal" enctype="multipart/form-data">

                      <input type="hidden" name="id_kategori_event" id="id_kategori_event">

                      <div class="form-group">
                        <label for="value">Konfigurasi</label>
                        <select name="value" class="form-control" id="value">
                          <?php foreach ($provinsi as $key => $value){ ?>
                            <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
                          <?php } ?>
                        </select>
                      </div>

                      <button type="submit" class="btn btn-primary w-100" id="submit" value="create">Simpan
                      </button>
                    </form>
                  </div>
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
      $('#modalHeader').html("Edit Konfigurasi");
      $.getJSON('<?= base_url(); ?>admin/config/show-provinsi', function(data) {
        $("#value").val(data.value);
      });

      $('#modals').modal('show');
    }
  </script>