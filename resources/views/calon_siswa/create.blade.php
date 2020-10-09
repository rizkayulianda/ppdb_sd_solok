<!DOCTYPE html>
<html>
    <head>
        <title>PPDB SD Solok - Input Data Peserta didik</title>
        @include('header')
        {{-- LeafletJS --}}
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    </head>
    
    <body id="page-top">
        @include('navbar')
        <section class="page-section mt-4 bg-primary">
            <div class="container bg-white p-5 rounded-lg">
                @php
                use App\Http\Controllers\CalonSiswaController;
                @endphp
                @include('alertberhasil')
                <h2 class="text-center mt-1 mb-3">Form Data Calon Siswa</h2>
                <form action="/calon_siswa/store" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="inputNamaSiswa"> Nama Siswa</label>
                        <input type="text" name="nama_siswa" required="required" class="form-control" id="nama_siswa" placeholder="Masukkan nama siswa">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-6">
                            <label for="inputTempatLahir"> Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" required="required" class="form-control" id="tempat_lahir" placeholder="Masukkan Tempat Lahir">
                        </div>
                        <div class="form-group col-6">
                            <label for="inputTanggalLahir"> Tanggal Lahir (Bulan/Tanggal/Tahun)</label>
                            <input type="date" name="tanggal_lahir" required="required" class="form-control" id="tanggal_lahir" placeholder="Masukkan Tanggal Lahir">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputJenisKelamin">Jenis Kelamin</label><br>
                        <input required type="radio" class="form-check-inline" name="jenis_kelamin" value="Laki-laki">Laki-Laki
                        <br>
                        <input required type="radio" class="form-check-inline" name="jenis_kelamin" value="Perempuan">Perempuan
                    </div>

                    <div class="form-row">
                        <div class="form-group col-6">
                            <label for="inputAlamatSiswa"> Alamat Siswa</label>
                            <textarea name="alamat_siswa" required="required" class="form-control" id="alamat_siswa" rows="4" placeholder="Masukkan Alamat Siswa"></textarea>
                        </div>
                        <div class="form-group col-6">
                            <label for="inputZonasi"> Pilih Zonasi </label>
                            <div class="alert alert-danger" role="alert">
                                Catatan : zonasi tidak dapat diubah, pastikan anda memilih zonasi sesuai alamat anda dengan benar!
                            </div>
                            <select class="form-control" name="kd_zonasi" id="inputZonasi" required>
                              <option value=""> -- Pilih Zonasi -- </option>
                              @foreach($zonasi as $s)
                              <option value="{{ $s->kd_zonasi }}">{{ $s->nama_zonasi }}</option>
                              @endforeach
                            </select>
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <div class="input-group">
                            <label for="mapid">Pilih alamat pada peta (cukup klik lokasi anda pada peta hingga muncul latitude longitude alamat)</label>
                            <div id="mapid" class="col-12" style="width:100%;height:400px;"></div><br>
                            <div class="input-group-prepend">
                                <span class="input-group-text">Latitude dan longitude</span>
                            </div>
                            <input type="text" id="lat" name="lat_siswa" aria-label="Pilih alamat pada peta" class="form-control" readonly required>
                            <input type="text" id="lng" name="long_siswa" aria-label="Pilih alamat pada peta" class="form-control" readonly required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPendidikanSebelumbya"> Pendidikan Sebelumnya</label>
                        <input type="text" name="pendidikan_sebelumnya" required="required" class="form-control" id="pendidikan_sebelumnya" placeholder="Masukkan Pendidikan Sebelumnya">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-6">
                            <label for="inputNikSiswa"> NIK Siswa</label>
                            <input type="text" name="nik_siswa" required="required" class="form-control" id="nik_siswa" placeholder="Masukkan NIK Siswa">
                        </div>
                        <div class="form-group col-6">
                        <label for="inputNoKK"> No KK</label>
                            <input type="text" name="no_kk" readonly class="form-control" id="inputNoKK" value="{{session('no_kk')}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputImageKK">Foto KK</label>
                        <input type="file" name="image_kk" required="required" class="form-control-file" id="image_kk">
                    </div>
                    <div class="form-group">
                        <label for="inputImageAkte">Foto Akte Kelahiran</label>
                        <input type="file" name="image_akte" required="required" class="form-control-file" id="image_akte">
                    </div>
                    <div class="form-group">
                        <label for="inputImageKK">Foto Ijazah TK</label>
                        <input type="file" name="image_ijazah_tk" class="form-control-file" id="image_ijazah_tk">
                    </div>
                    <div class="form-group">
                        <label for="inputImagePasfoto">Pasfoto</label>
                        <input type="file" name="image_pasfoto" required="required" class="form-control-file" id="image_pasfoto">
                    </div>
                    <!-- Modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                        Simpan Data
                      </button>
                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">Apakah data sudah diisi dengan benar?</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              Untuk zonasi dan nik siswa, tidak dapat diubah lagi!, pastikan data diisi dengan benar!
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                              <button type="submit" class="btn btn-primary" >Ya</button>
                            </div>
                          </div>
                        </div>
                      </div>
                </form>
            </div>
        </section>
        @include('footer')
        <script type="text/javascript">
            // Using LeafletJS
            var map = L.map('mapid', {
            center: [-0.96438395, 100.89030974],
            zoom: 9
            });
    
            // map api menggunakan mapbox
            L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
              attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
              maxZoom: 18,
              id: 'mapbox/streets-v11',
              tileSize: 512,
              zoomOffset: -1,
              accessToken: 'pk.eyJ1IjoiYWN1cmFuZzIwMTIiLCJhIjoiY2tldm8zdnE1MGNlNzJ3cDlvZG14MW5pbyJ9.O_D1RzYTMFYpOkly9Xu32w'
            }).addTo(map);
    
            var popup = L.popup();
    
            function onMapClick(e) {
                var coord = e.latlng.toString().split(',');
                var lat = coord[0].split('(');
                var lng = coord[1].split(')');
                document.getElementById("lat").value = lat[1];
                document.getElementById("lng").value = lng[0];
    
                popup
                    .setLatLng(e.latlng)
                    .setContent("Latitude : " + lat[1] + " Longitude : " + lng[0])
                    .openOn(map);
            }
            
            map.on('click', onMapClick);
        </script>
    </body>
</html>
