      <div class="page-content">
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
          <div>
            <h4 class="mb-3 mb-md-0">Event</h4>
          </div>
        </div>
        <!-- row -->
        <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Data Event</h6>
                <a class="btn btn-primary mb-3" href="javascript:void(0)" id="tambah">Tambah</a>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Nama Event</th>
                        <th>Lokasi</th>
                        <th>Tanggal Registrasi</th>
                        <th>Tanggal Event Berlangsung</th>
                        <th>Thumbnail</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($event as $key => $value){ ?>
                        <tr>
                          <td><?= $value['nama_event'] ?></td>
                          <td><?= $value['lokasi'] ?></td>
                          <td><?= $value['datetime_mulai_registrasi'] ?> - <?= $value['datetime_akhir_registrasi'] ?></td>
                          <td><?= $value['datetime_mulai_event'] ?> - <?= $value['datetime_akhir_event'] ?></td>
                          <td><img src="<?= $value['thumbnail'] ?>"></td>
                          <td>
                            <a href="#" class="btn btn-primary btn-sm edits" data-toggle="modal" data-target="#EditModal" onclick="prepare_update('<?= $value['id_event'] ?>')">Ubah</a>
                            <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal_delete" onclick="prepare_delete('<?= $value['id_event'] ?>')">Hapus</a>
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

                      <input type="hidden" name="id_event" id="id_event">

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="id_kategori_event">Kategori Event</label>
                            <select class="form-control" name="id_kategori_event" id="id_kategori_event">
                              <option selected="true" disabled="disabled">Pilih</option>
                              <?php foreach ($kategori as $key => $value){ ?>
                                <option value="<?= $value['id_kategori_event'] ?>"><?= $value['kategori_event'] ?></option>
                              <?php } ?>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="nama_event">Nama Event</label>
                            <input type="text" name="nama_event" id="nama_event" class="form-control">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="thumbnail" id="thumbnail-label">Thumbnail</label>
                            <input type="file" name="thumbnail" id="thumbnail" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="lokasi">Lokasi</label>
                            <input type="text" name="lokasi" id="lokasi" class="form-control">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="datetime_mulai_registrasi">Waktu Mulai Registrasi</label>
                            <input type="date" name="datetime_mulai_registrasi" id="datetime_mulai_registrasi" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="datetime_akhir_registrasi">Waktu Akhir Registrasi</label>
                            <input type="date" name="datetime_akhir_registrasi" id="datetime_akhir_registrasi" class="form-control">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="datetime_mulai_event">Waktu Event Mulai Berlangsung</label>
                            <input type="date" name="datetime_mulai_event" id="datetime_mulai_event" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="datetime_akhir_event">Waktu Event Selesai</label>
                            <input type="date" name="datetime_akhir_event" id="datetime_akhir_event" class="form-control">
                          </div>
                        </div>
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
                  <form action="<?= base_url('admin/event/destroy'); ?>" method="post">
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
      $('#modalHeader').html("Tambah Event");
      $("#addForm").attr('action', "<?= base_url('admin/event/store'); ?>");
      $("#id_event").val('');
      $("#id_kategori_event").val('');
      $("#nama_event").val('');
      $("#lokasi").val('');
      $("#datetime_mulai_registrasi").val('');
      $("#datetime_akhir_registrasi").val('');
      $("#datetime_mulai_event").val('');
      $("#datetime_akhir_event").val('');
      $("#thumbnail-label").html('Thumbnail');
      $('#modals').modal('show');
    });

    function prepare_update(id) {
      $('#modalHeader').html("Edit Event");
      $("#addForm").attr('action', "<?= base_url('admin/event/update'); ?>");

      $.getJSON('<?= base_url(); ?>admin/event/show/' + id, function(data) {
        $("#id_event").val(data.id_event);
        $("#id_kategori_event").val(data.id_kategori_event);
        $("#nama_event").val(data.nama_event);
        $("#lokasi").val(data.lokasi);
        $("#datetime_mulai_registrasi").val(data.datetime_mulai_registrasi);
        $("#datetime_akhir_registrasi").val(data.datetime_akhir_registrasi);
        $("#datetime_mulai_event").val(data.datetime_mulai_event);
        $("#datetime_akhir_event").val(data.datetime_akhir_event);
        $("#thumbnail-label").html('Thumbnail (Opsional)');
      });

      $('#modals').modal('show');
    }

    function prepare_delete(id) {
      $("#modalDeleteHeader").html('Hapus Event');
      $("#id_delete").empty();

      $.getJSON('<?= base_url(); ?>admin/event/show/' + id, function(data) {
        $("#id_delete").val(data.id_event);
        $("#text_delete").text(data.nama_event);
      });
    }
  </script>