      <div class="page-content">
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
          <div>
            <h4 class="mb-3 mb-md-0">Wisata</h4>
          </div>
        </div>
        <!-- row -->
        <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Data Wisata</h6>
                <a class="btn btn-primary mb-3" href="javascript:void(0)" id="tambah">Tambah</a>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Nama Wisata</th>
                        <th>Kategori</th>
                        <th>Email</th>
                        <th>No. HP</th>
                        <th>Website</th>
                        <th>Alamat</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($wisata as $key => $value){ ?>
                        <tr>
                          <td><?= $value['nama_wisata'] ?></td>
                          <td><?= $value['kategori_wisata'] ?></td>
                          <td><?= $value['email_wisata'] ?></td>
                          <td><?= $value['no_hp_wisata'] ?></td>
                          <td><?= $value['website_wisata'] ?></td>
                          <td><?= $value['alamat_wisata'] ?></td>
                          <td><img src="<?= $value['img'] ?>"></td>
                          <td>
                            <a href="#" class="btn btn-primary btn-sm edits" data-toggle="modal" data-target="#EditModal" onclick="prepare_update('<?= $value['id_wisata'] ?>')">Ubah</a>
                            <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal_delete" onclick="prepare_delete('<?= $value['id_wisata'] ?>')">Hapus</a>
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

                      <input type="hidden" name="id_wisata" id="id_wisata">

                      <div class="form-group">
                        <label for="nama_wisata">Nama Wisata</label>
                        <input type="text" name="nama_wisata" id="nama_wisata" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="id_kategori_wisata">Kategori Wisata</label>
                        <select class="form-control" name="id_kategori_wisata" id="id_kategori_wisata" required>
                          <option selected="true" disabled="disabled">Pilih</option>
                          <?php foreach ($kategori as $key => $value){ ?>
                            <option value="<?= $value['id_kategori_wisata'] ?>"><?= $value['kategori_wisata'] ?></option>
                          <?php } ?>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="email_wisata">Email Wisata</label>
                        <input type="text" name="email_wisata" id="email_wisata" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="no_hp_wisata">No Hp. Wisata</label>
                        <input type="text" name="no_hp_wisata" id="no_hp_wisata" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="website_wisata">Website Wisata</label>
                        <input type="text" name="website_wisata" id="website_wisata" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="alamat_wisata">Alamat Wisata</label>
                        <input type="text" name="alamat_wisata" id="alamat_wisata" class="form-control">
                      </div>

                      <input type="hidden" name="id_provinsi" id="id_provinsi">

                      <div class="form-group">
                        <label for="id_kota_kab">Kota/Kabupaten (Isi Provinsi Terlebuh Dahulu)</label>
                        <select class="form-control" name="id_kota_kab" id="id_kota_kab" required>
                          <option selected="true" disabled="disabled">Pilih</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="id_kecamatan">Kecamatan (Isi Kota/Kabupaten Terlebuh Dahulu)</label>
                        <select class="form-control" name="id_kecamatan" id="id_kecamatan" required>
                          <option selected="true" disabled="disabled">Pilih</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="id_desa_kelurahan">Desa/Kelurahan (Isi Kecamatan Terlebuh Dahulu)</label>
                        <select class="form-control" name="id_desa_kelurahan" id="id_desa_kelurahan" required>
                          <option selected="true" disabled="disabled">Pilih</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/v2.2.0/mapbox-gl.css" type="text/css">
                        <script src="https://api.mapbox.com/mapbox-gl-js/v2.2.0/mapbox-gl.js"></script>
                        <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.min.js"></script>

                        <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.css" type="text/css">

                        <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.min.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script> 
                        <style type="text/css">
                          #map {
                            position: relative;
                            width: 100%;
                            height: 450px;
                          }
                        </style>
                        <label for="peta_maps">Peta Maps</label>
                        <div id="map"></div>
                        <!-- <input type="text" name="peta_maps" id="peta_maps" class="form-control"> -->
                        <input type="hidden" name="latitude" id="latitude">
                        <input type="hidden" name="longitude" id="longitude">
                      </div>

                      <div class="form-group">
                        <label for="deskripsi_wisata">Deskripsi Wisata</label>
                        <textarea rows="10" class="form-control" name="deskripsi_wisata" id="deskripsi_wisata"></textarea>
                      </div>

                      <div class="form-group">
                        <label for="img">Foto</label>
                        <input type="file" name="img" id="img" class="form-control">
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
                  <form action="<?= base_url('admin/wisata/destroy'); ?>" method="post">
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
    mapboxgl.accessToken = 'pk.eyJ1IjoiYXJpcG9uIiwiYSI6ImNrbjV3cmZ5NTA4aDUyd25zenk3MmlwYzgifQ.YbJ_Ir794eD8VlrVvpX64g';
    $('#tambah').click(function() {
      $('#saveBtn').val("add");
      $('#modalHeader').html("Tambah Wisata");
      $("#addForm").attr('action', "<?= base_url('admin/wisata/store'); ?>");
      $("#id_wisata").val('');
      $("#id_kategori_wisata").val('');
      $("#nama_wisata").val('');
      $("#email_wisata").val('');
      $("#no_hp_wisata").val('');
      $("#website_wisata").val('');
      $("#alamat_wisata").val('');
      $("#latitude").val('');
      $("#longitude").val('');
      $("#deskripsi_wisata").val('');
      var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',      
        center: [124.283788, 0.774097],
        zoom: 8
      });

      map.addControl(
        new MapboxGeocoder({
          accessToken: mapboxgl.accessToken,
          mapboxgl: mapboxgl
        })
        );


      map.on('style.load', function() {
        map.on('click', function(e) {       
          var coordinates = e.lngLat;
          var lat = e.lngLat.wrap().lat;
          $('#latitude').val(lat);
          var lng = e.lngLat.wrap().lng;
          $('#longitude').val(lng);
          new mapboxgl.Popup()        
          .setLngLat(coordinates)
          .setHTML('')
          .addTo(map);
        });
      }); 

      map.on('load', function() {
        map.resize();
      });
      $('#modals').modal('show');
    });

    function prepare_update(id) {
      $('#modalHeader').html("Edit Wisata");
      $("#addForm").attr('action', "<?= base_url('admin/wisata/update'); ?>");

      $.getJSON('<?= base_url(); ?>admin/wisata/show/' + id, function(data) {
        $("#id_wisata").val(data.id_wisata);
        $("#id_kategori_wisata").val(data.id_kategori_wisata);
        $("#nama_wisata").val(data.nama_wisata);
        $("#email_wisata").val(data.email_wisata);
        $("#no_hp_wisata").val(data.no_hp_wisata);
        $("#website_wisata").val(data.website_wisata);
        $("#alamat_wisata").val(data.alamat_wisata);
        $('#id_kota_kab').append($('<option>', { 
          value: data.id_kota_kab,
          text : data.nama_kota_kab
        }));
        $("#id_kota_kab").val(data.id_kota_kab);
        $('#id_kecamatan').append($('<option>', { 
          value: data.id_kecamatan,
          text : data.nama_kecamatan
        }));
        $("#id_kecamatan").val(data.id_kecamatan);
        $('#id_desa_kelurahan').append($('<option>', { 
          value: data.id_desa_kelurahan,
          text : data.nama_desa_kelurahan
        }));
        $("#id_desa_kelurahan").val(data.id_desa_kelurahan);
        $("#latitude").val(data.latitude);
        $("#longitude").val(data.longitude);
        $("#deskripsi_wisata").val(data.deskripsi_wisata);


        document.getElementById("map").innerHTML = '';

              var map = new mapboxgl.Map({
                container: 'map',
                style: 'mapbox://styles/mapbox/streets-v11',
                center: [data.longitude, data.latitude],
                zoom: 8
              });             

              map.addControl(
                new MapboxGeocoder({
                  accessToken: mapboxgl.accessToken,
                  mapboxgl: mapboxgl
                })
                );

              map.addControl(new mapboxgl.NavigationControl());

              map.addControl(
                new mapboxgl.GeolocateControl({
                  positionOptions: {
                    enableHighAccuracy: true
                  },
                  trackUserLocation: true
                })
                );

              map.on('style.load', function() {
                var coordinates = [data.longitude, data.latitude];
                var lat = data.latitude;
                $('#latitude').val(lat);
                var lng = data.longitude;
                $('#longitude').val(lng);
                new mapboxgl.Popup()        
                .setLngLat(coordinates)
                .setHTML('')
                .addTo(map);
              }); 

              map.on('style.load', function() {
                map.on('click', function(e) {       
                  var coordinates = e.lngLat;
                  var lat = e.lngLat.wrap().lat;
                  $('#latitude').val(lat);
                  var lng = e.lngLat.wrap().lng;
                  $('#longitude').val(lng);
                  new mapboxgl.Popup()        
                  .setLngLat(coordinates)
                  .setHTML('')
                  .addTo(map);
                });
              }); 


              map.on('load', function() {
                map.resize();
              });
      });

      $('#modals').modal('show');
    }

    function prepare_delete(id) {
      $("#modalDeleteHeader").html('Hapus Wisata');
      $("#id_delete").empty();

      $.getJSON('<?= base_url(); ?>admin/wisata/show/' + id, function(data) {
        $("#id_delete").val(data.id_wisata);
        $("#text_delete").text(data.nama_wisata);
      });
    }

    <?php
    $prov = '';
    foreach ($provinsi as $key => $value) {
      $prov = $value['value'];
    }
    ?>

    $(document).ready(function() {

      var id_provinsi = "<?= $prov ?>";   
      $('#id_provinsi').val(id_provinsi);
      $.ajax({
        url : "<?= base_url() ?>admin/wilayah/kota-kab/"+id_provinsi,
        method : "GET",
        async : true,
        dataType : 'json',
        success: function(data){
          console.log("Responses data "+data);
          $('select[name="id_kota_kab"]').empty();
          $('select[name="id_kecamatan"]').empty();
          $('select[name="id_desa_kelurahan"]').empty();
          var sub = '';
          var i;
          sub = '<option value="">Pilih</option>';
          for(i=0; i<data.length; i++){
            sub += '<option value='+data[i].id+'>'+data[i].name+'</option>';
          }
          $('#id_kota_kab').html(sub);
        }
      });
      return false;
    }); 

    $('select[name="id_kota_kab"]').on('change', function() {
      var id_kota_kab=$(this).val();   
      $.ajax({
        url : "<?= base_url() ?>admin/wilayah/kecamatan/"+id_kota_kab,
        method : "GET",
        async : true,
        dataType : 'json',
        success: function(data){
          console.log("Responses data "+data);
          $('select[name="id_kecamatan"]').empty();
          $('select[name="id_desa_kelurahan"]').empty();
          var sub = '';
          var i;
          sub = '<option value="">Pilih</option>';
          for(i=0; i<data.length; i++){
            sub += '<option value='+data[i].id+'>'+data[i].name+'</option>';
          }
          $('#id_kecamatan').html(sub);
        }
      });
      return false;
    });

    $('select[name="id_kecamatan"]').on('change', function() {
      var id_desa_kelurahan=$(this).val();   
      $.ajax({
        url : "<?= base_url() ?>admin/wilayah/desa-kelurahan/"+id_desa_kelurahan,
        method : "GET",
        async : true,
        dataType : 'json',
        success: function(data){
          console.log("Responses data "+data);
          $('select[name="id_desa_kelurahan"]').empty();
          var sub = '';
          var i;
          sub = '<option value="">Pilih</option>';
          for(i=0; i<data.length; i++){
            sub += '<option value='+data[i].id+'>'+data[i].name+'</option>';
          }
          $('#id_desa_kelurahan').html(sub);
        }
      });
      return false;
    }); 
  </script>