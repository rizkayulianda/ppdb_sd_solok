<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      @include('header')
      <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
      <title>Data Sekolah</title>
    </head>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <body id="page-top">
      @include('navbarop')
      <section class="page-section mt-4 bg-primary">
        <div class="container bg-white p-5 rounded-lg">
          <div class="alert alert-primary mt-3" role="alert">
          @include('alertberhasil')
          <p>silahkan input data sekolah anda terlebih dahulu</p>
          </div>
           <h2>Input Data Sekolah</h2>
            <br/>
            <form action="/sekolah/store" class="w-75" method="post">
                {{ csrf_field()}}
                <div class="form-group">
                    <label for="inputKdSekolah"> NPSN Sekolah</label>
                <input type="text" name="kd_sekolah" readonly class="form-control" id="inputKdSekolah" value="{{auth()->user()->kd_sekolah}}">
                </div>
                <div class="form-group">
                    <label for="inputNamaSekolah"> Nama Sekolah</label>
                    <input type="text" name="nama_sekolah" required="required" class="form-control" id="nama_sekolah" placeholder="ex : SDN 11 Solok">
                </div>
                <div class="form-group">
                  <label for="inputAlamatSekolah"> Alamat Sekolah</label>
                  <textarea name="alamat_sekolah" required="required" class="form-control" id="alamat_sekolah" rows="3" placeholder="Masukkan Alamat Sekolah"></textarea>
                </div>
                <div class="form-group">
                  <label for="inputZonasi"> Alamat Zonasi</label>
                  <select class="form-control" name="kd_zonasi" id="inputZonasi">
                    <option value=""> -- Pilih Zona Sekolah -- </option>
                    @foreach($zonasi as $s)
                    <option value="{{ $s->kd_zonasi }}">{{ $s->nama_zonasi }}</option>
                    @endforeach
                  </select>
                </div><br>
                <div id="mapid" class="col-8" style="width:100%;height:380px;"></div><br>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Latitude dan longitude</span>
                  </div>
                  <input type="text" id="lat" name="lat_sekolah" aria-label="Pilih alamat pada peta" class="form-control">
                  <input type="text" id="lng" name="long_sekolah" aria-label="Pilih alamat pada peta" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputKuota">Kuota Dibutuhkan</label>
                    <input type="number" name="utama" class="form-control" id="inputKuota" placeholder="Masukkan kuota yang dibutuhkan" required >
                </div>
                <div class="form-group">
                    <label for="inputCadangan"> Kuota Cadangan</label>
                    <input type="number" name="cadangan" class="form-control" id="inputCadangan" placeholder="Masukkan kuota cadangan" required>
                </div>
                <div class="form-group">
                    <label for="inputEmailSekolah"> Email Sekolah/Operator</label>
                    <input type="email" name="email_sekolah" class="form-control" id="email_sekolah" value="{{auth()->user()->email_op}}" readonly>
                </div>
                <div class="form-group">
                    <label for="inputWebSekolah"> Web Sekolah</label>
                    <input type="text" name="web_sekolah" class="form-control" id="web_sekolah" placeholder="Masukkan Web Sekolah">
                </div>
                <div class="form-group">
                    <label for="inputNotelpSekolah"> Nomor Telpon Sekolah</label>
                    <input type="text" name="notelp_sekolah" class="form-control" id="notelp_sekolah" placeholder="Masukkan Nomor Telpon Sekolah">
                </div>
                <div class="form-group">
                    <label for="inputKepalaSekolah"> Kepala Sekolah</label>
                    <input type="text" name="kepala_sekolah" required="required" class="form-control" id="kepala_sekolah" placeholder="Masukkan Kepala Sekolah">
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
                          *data tidak dapat diubah lagi, pastikan data diisi dengan benar!
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
        
        // GOOGLE WAY
        // function taruhMarker(peta, posisiTitik){
        //     if( marker ){
        //     // pindahkan marker
        //     marker.setPosition(posisiTitik);
        //     } else {
        //     // buat marker baru
        //     marker = new google.maps.Marker({
        //         position: posisiTitik,
        //         map: peta
        //     });
        //     }
        
        //     // isi nilai koordinat ke form
        //     document.getElementById("lat").value = posisiTitik.lat();
        //     document.getElementById("lng").value = posisiTitik.lng();
            
        // }


        map.on('click', onMapClick);
    </script>
    </body>
</html>
