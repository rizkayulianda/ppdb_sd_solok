<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Edit Data Calon Siswa </title>
        @include('header')
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    </head>
    <body id="page-top">
        @include('navbar')
        <section class="page-section mt-4 bg-primary">
            @php
                use App\Http\Controllers\CalonSiswaController;
            @endphp
            <div class="container p-5 bg-white rounded-lg">
                @include('alertberhasil')
                <h3 class="text-center">Edit Data Calon Siswa</h3>  
                @foreach($calon_siswa as $p)
                <form action="/calon_siswa/update/{{ $p->id }}" method="POST" enctype="multipart/form-data" >
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $p->id }}"> <br/>
                    <div class="form-group">
                        <label for="inputNamaSiswa"> Nama Siswa</label>
                        <input type="text" name="nama_siswa" required="required" value="{{ $p->nama_siswa }}" class="form-control" id="nama_siswa" placeholder="Edit Nama Siswa">
                    </div>
                    <div class="form-group">
                        <label for="inputTempatLahir"> Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" required="required" value="{{ $p->tempat_lahir }}" class="form-control" id="tempat_lahir" placeholder="Edit Tempat Lahir">
                    </div>
                    <div class="form-group">
                        <label for="inputTanggalLahir"> Tanggal Lahir (Bulan/Tanggal/Tahun)</label>
                        <input type="date" name="tanggal_lahir" required="required" value="{{ $p->tanggal_lahir }}" class="form-control" id="nama_siswa" placeholder="Edit Tanggal Lahir">
                    </div>
                    <div class="form-group">
                        <label for="inputAlamatSiswa"> Alamat Siswa</label>
                        <textarea name="alamat_siswa" required="required" class="form-control" id="alamat_siswa" rows="3" placeholder="Edit Alamat Siswa">{{ $p->alamat_siswa }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="mapid"> Alamat baru</label>                        
                        <div id="mapid" class="col-12" style="width:100%;height:500px;"></div><br>
                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Latitude dan longitude</span>
                            </div>
                            <input type="text" id="lat" name="lat_siswa" aria-label="Pilih alamat pada peta" class="form-control" value="{{$p->lat_siswa}}" readonly>
                            <input type="text" id="lng" name="long_siswa" aria-label="Pilih alamat pada peta" class="form-control" value="{{$p->long_siswa}}" readonly>
                        </div>
                    </div>
                    {{-- <div class="form-group">
                        <label for="inputZonasi"> Pilih Zonasi</label>
                        <div class="alert alert-danger" role="alert">
                            Data zonasi tidak bisa diubah setelah membuat 
                        </div>
                        <select class="form-control" name="kd_zonasi" id="inputZonasi">
                          <option value=""> -- Pilih Zona Sekolah -- </option>
                          @foreach($zonasi as $s)
                          <option value="{{ $s->kd_zonasi }}" {{CalonSiswaController::cekOption($p->kd_zonasi,$s->kd_zonasi,'selected')}}>{{ $s->nama_zonasi }}</option>
                          @endforeach
                        </select>
                      </div> --}}
                    <div class="form-group">
                        <label>Jenis Kelamin</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1" value="Laki-laki" {{CalonSiswaController::cekOption('Laki-laki',$p->jenis_kelamin,'checked')}}>
                            <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio2" value="Perempuan" {{CalonSiswaController::cekOption('Perempuan',$p->jenis_kelamin,'checked')}}>
                            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPendidikanSebelumbya"> Pendidikan Sebelumnya</label>
                        <input type="text" name="pendidikan_sebelumnya" required="required" value="{{ $p->pendidikan_sebelumnya }}" class="form-control" id="pendidikan_sebelumnya" placeholder="Edit Pendidikan Sebelumnya">
                    </div>
                    <div class="form-group">
                        <label for="inputNikSiswa"> NIK Siswa</label>
                        <input type="text" name="nik_siswa" required="required" value="{{ $p->nik_siswa }}" class="form-control" id="nik_siswa" placeholder="Edit NIK Siswa">
                    </div>
                    <div class="form-group">
                        <label for="inputImageKK">Foto KK</label>
                        <input type="file" name="image_kk"  value="{{ $p->image_kk}}" class="form-control-file" id="image_kk">
                    </div>
                    <div class="form-group">
                        <label for="inputImageAkte">Foto Akte Kelahiran</label>
                        <input type="file" name="image_akte"  value="{{ $p->image_akte }}" class="form-control-file" id="image_akte">
                    </div>
                    <div class="form-group">
                        <label for="inputImageKK">Foto Ijazah TK</label>
                        <input type="file" name="image_ijazah_tk" value="{{ $p->image_ijazah_tk }}" class="form-control-file" id="image_ijazah_tk">
                    </div>
                    <div class="form-group">
                        <label for="inputImagePasfoto">Pasfoto</label>
                        <input type="file" name="image_pasfoto"  value="{{ $p->image_pasfoto }}" class="form-control-file" id="image_pasfoto">
                    </div>
                    <button type="submit" class="btn btn-info btn-lg" >Simpan Data</button>
                </form>
                <script>
                    var siswa=new L.LatLng({{$p->lat_siswa}},{{$p->long_siswa}});
                    var map = L.map('mapid', {
                    center: siswa,
                    zoom: 11
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

                    var msiswa = L.marker(siswa).addTo(map).bindPopup("Lokasi alamat {{$p->nama_siswa}} sekarang").openPopup();
                    var popup = L.popup();
                    function onMapClick(e) 
                    {
                        var coord = e.latlng.toString().split(',');
                        var lat = coord[0].split('(');
                        var lng = coord[1].split(')');
                        document.getElementById("lat").value = lat[1];
                        document.getElementById("lng").value = lng[0];
                        popup
                            .setLatLng(e.latlng)
                            .setContent(" Lokasi Baru <br>Latitude : " + lat[1] + " Longitude : " + lng[0])
                            .openOn(map);
                    }
                    map.on('click', onMapClick);
                </script>
                @endforeach
            </div>
        </section>
        @include('footer')
    </body>
</html>
