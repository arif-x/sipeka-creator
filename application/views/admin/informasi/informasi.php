      <div class="page-content">
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
          <div>
            <h4 class="mb-3 mb-md-0">Informasi</h4>
          </div>
        </div>
        <!-- row -->
        <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Data Informasi</h6>
                <a class="btn btn-primary mb-3" href="javascript:void(0)" id="tambah">Tambah</a>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Judul Informasi</th>
                        <th>Kategori Informasi</th>
                        <th>Tanggal</th>
                        <th>Thumbnail</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($informasi as $key => $value){ ?>
                        <tr>
                          <td><?= $value['judul_informasi'] ?></td>
                          <td><?= $value['kategori_informasi'] ?></td>
                          <td><?= $value['tanggal'] ?></td>
                          <td><img src="<?= $value['img_informasi'] ?>"></td>
                          <td>
                            <a href="#" class="btn btn-primary btn-sm edits" data-toggle="modal" data-target="#EditModal" onclick="prepare_update('<?= $value['id_informasi'] ?>')">Ubah</a>
                            <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal_delete" onclick="prepare_delete('<?= $value['id_informasi'] ?>')">Hapus</a>
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

                      <input type="hidden" name="id_informasi" id="id_informasi">

                      <div class="form-group">
                        <label for="judul_informasi">Judul informasi</label>
                        <input type="text" name="judul_informasi" id="judul_informasi" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="id_kategori_informasi">Kategori Informasi</label>
                        <select class="form-control" name="id_kategori_informasi" id="id_kategori_informasi" required>
                          <option selected="true" disabled="disabled">Pilih</option>
                          <?php foreach ($kategori as $key => $value){ ?>
                            <option value="<?= $value['id_kategori_informasi'] ?>"><?= $value['kategori_informasi'] ?></option>
                          <?php } ?>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" name="tanggal" id="tanggal" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="img_informasi">Thumbnail</label>
                        <input type="file" name="img_informasi" id="img_informasi" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="konten">Konten</label>
                        <textarea rows="15" name="konten" id="konten" class="form-control"></textarea>
                      </div>
                      
                      <button type="submit" class="btn btn-primary w-100" id="submit" value="create">Simpan
                      </button>
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
                  <form action="<?= base_url('admin/informasi/destroy'); ?>" method="post">
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
    $('#tambah').click(function() {
      $('#saveBtn').val("add");
      $('#modalHeader').html("Tambah Informasi");
      $("#addForm").attr('action', "<?= base_url('admin/informasi/store'); ?>");
      $("#id_informasi").val('');
      $("#id_kategori_informasi").val('');
      $("#judul_informasi").val('');
      $("#tanggal").val('');
      $("#konten").val('');
      $('#modals').modal('show');
    });

    function prepare_update(id) {
      $('#modalHeader').html("Edit Informasi");
      $("#addForm").attr('action', "<?= base_url('admin/informasi/update'); ?>");

      $.getJSON('<?= base_url(); ?>admin/informasi/show/' + id, function(data) {
        $("#id_informasi").val(data.id_informasi);
        $("#id_kategori_informasi").val(data.id_kategori_informasi);
        $("#judul_informasi").val(data.judul_informasi);
        $("#tanggal").val(data.tanggal);
        $("#konten").val(data.konten);
      });

      $('#modals').modal('show');
    }

    function prepare_delete(id) {
      $("#modalDeleteHeader").html('Hapus Informasi');
      $("#id_delete").empty();

      $.getJSON('<?= base_url(); ?>admin/informasi/show/' + id, function(data) {
        $("#id_delete").val(data.id_informasi);
        $("#text_delete").text(data.judul_informasi);
      });
    }
  </script>