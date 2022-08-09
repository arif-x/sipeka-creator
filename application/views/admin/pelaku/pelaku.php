      <div class="page-content">
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
          <div>
            <h4 class="mb-3 mb-md-0">Pelaku Ekraf</h4>
          </div>
        </div>
        <!-- row -->
        <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Data Pelaku Ekraf</h6>
                <a class="btn btn-primary mb-3" href="javascript:void(0)" id="tambah">Tambah</a>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No. HP</th>
                        <th>Website</th>
                        <th>Alamat</th>
                        <th>Kategori</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($pelaku as $key => $value){ ?>
                        <tr>
                          <td><?= $value['nama_lengkap'] ?></td>
                          <td><?= $value['email'] ?></td>
                          <td><?= $value['no_hp'] ?></td>
                          <td><?= $value['website'] ?></td>
                          <td><?= $value['alamat'] ?></td>
                          <td><?= $value['kategori'] ?></td>
                          <td><?= $value['deskripsi'] ?></td>
                          <td>
                            <a href="#" class="btn btn-primary btn-sm edits" data-toggle="modal" data-target="#EditModal" onclick="prepare_update('<?= $value['id_pelaku_ekraf'] ?>')">Ubah</a>
                            <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal_delete" onclick="prepare_delete('<?= $value['id_pelaku_ekraf'] ?>')">Hapus</a>
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

                      <input type="hidden" name="id_pelaku_ekraf" id="id_pelaku_ekraf">

                      <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="no_hp">No. HP</label>
                        <input type="text" name="no_hp" id="no_hp" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="website">Website</label>
                        <input type="text" name="website" id="website" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="alamat">Alamat Lengkap</label>
                        <input type="text" name="alamat" id="alamat" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <input type="text" name="kategori" id="kategori" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" id="deskripsi"></textarea>
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
                  <form action="<?= base_url('admin/pelaku-ekraf/destroy'); ?>" method="post">
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
      $('#modalHeader').html("Tambah Pelaku Ekraf");
      $("#addForm").attr('action', "<?= base_url('admin/pelaku-ekraf/store'); ?>");
      $("#id_pelaku_ekraf").val('');
      $("#nama_lengkap").val('');
      $("#email").val('');
      $("#no_hp").val('');
      $("#website").val('');
      $("#alamat").val('');
      $("#kategori").val('');
      $("#deskripsi").val('');
      $('#modals').modal('show');
    });

    function prepare_update(id) {
      $('#modalHeader').html("Edit Pelaku Ekraf");
      $("#addForm").attr('action', "<?= base_url('admin/pelaku-ekraf/update'); ?>");

      $.getJSON('<?= base_url(); ?>admin/pelaku-ekraf/show/' + id, function(data) {
        $("#id_pelaku_ekraf").val(data.id_pelaku_ekraf);
        $("#nama_lengkap").val(data.nama_lengkap);
        $("#email").val(data.email);
        $("#no_hp").val(data.no_hp);
        $("#website").val(data.website);
        $("#alamat").val(data.alamat);
        $("#kategori").val(data.kategori);
        $("#deskripsi").val(data.deskripsi);
      });

      $('#modals').modal('show');
    }

    function prepare_delete(id) {
      $("#modalDeleteHeader").html('Hapus Pelaku Ekraf');
      $("#id_delete").empty();

      $.getJSON('<?= base_url(); ?>admin/pelaku-ekraf/show/' + id, function(data) {
        $("#id_delete").val(data.id_pelaku_ekraf);
        $("#text_delete").text(data.nama_lengkap);
      });
    }
  </script>