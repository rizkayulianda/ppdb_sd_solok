<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Edit Data Sekolah</title>
        @include('header')
        {{-- memanggil LeafletJS untuk menampilkan map --}}
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    </head>
    <body id="page-top">
        @include('navbarop')
        <section class="page-section bg-primary mt-4">
            @php
                use App\Http\Controllers\CalonSiswaController;
            @endphp
            <div class="container bg-white rounded-lg p-5">
                <h3 class="text-center">Edit data sekolah</h3>
                @foreach($sekolah as $p)
                <form action="/sekolah/update" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $p->id }}"> <br/>
                    <div class="form-group">
                        <label for="inputIdSekolah"> NPSN Sekolah</label>
                        <input type="text" name="kd_sekolah" required="required" value="{{ $p->kd_sekolah }}" class="form-control" id="kd_sekolah" placeholder="Masukkan NPSN Sekolah" readonly>
                    </div>
                    <div class="form-group">
                        <label for="inputNamaSekolah"> Nama Sekolah</label>
                        <input type="text" name="nama_sekolah" required="required" value="{{ $p->nama_sekolah }}" class="form-control" id="nama_sekolah" placeholder="Masukkan Nama Sekolah">
                    </div>
                    
                    <div class="form-group">
                        <label for="inputAlamatSekolah"> Alamat Sekolah</label>
                        <textarea name="alamat_sekolah" required="required" class="form-control" id="alamat_sekolah" rows="3" placeholder="Masukkan Alamat Sekolah">{{ $p->alamat_sekolah }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="mapid"> Alamat baru</label>
                        <p class="text-muted">tap pada peta untuk memilih lokasi baru</p>                        
                        <div id="mapid" style="width:100%;height:400px;"></div><br>
                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Latitude dan longitude</span>
                            </div>
                            <input type="text" id="lat" name="lat_sekolah" aria-label="Pilih alamat pada peta" class="form-control" value="{{$p->lat_sekolah}}" readonly>
                            <input type="text" id="lng" name="long_sekolah" aria-label="Pilih alamat pada peta" class="form-control" value="{{$p->long_sekolah}}" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputZonasi"> Alamat Zonasi</label>
                        <select class="form-control" name="kd_zonasi" id="inputZonasi">
                          <option value=""> -- Pilih Zona Sekolah -- </option>
                          @foreach($zonasi as $s)
                          <option value="{{ $s->kd_zonasi }}" {{CalonSiswaController::cekOption($p->kd_zonasi,$s->kd_zonasi,'selected')}}>{{ $s->nama_zonasi }}</option>
                          @endforeach
                        </select>
                      </div>

                    <div class="form-group">
                        <label for="inputEmailSekolah"> Email Sekolah</label>
                        <input type="email" name="email_sekolah" value="{{ $p->email_sekolah }}" class="form-control" id="email_sekolah" placeholder="Masukkan Email Sekolah" readonly>
                    </div>
                    <div class="form-group">
                        <label for="inputWebSekolah"> Web Sekolah</label>
                        <input type="text" name="web_sekolah" value="{{ $p->web_sekolah }}" class="form-control" id="web_sekolah" placeholder="Masukkan Web Sekolah">
                    </div>
                    <div class="form-group">
                        <label for="inputNotelpSekolah"> Nomor Telpon Sekolah</label>
                        <input type="text" name="notelp_sekolah" value="{{ $p->notelp_sekolah }}" class="form-control" id="notelp_sekolah" placeholder="Masukkan Nomor Telpon Sekolah">
                    </div>
                    <div class="form-group">
                        <label for="inputKepalaSekolah"> Kepala Sekolah</label>
                        <input type="text" name="kepala_sekolah" required="required" value="{{ $p->kepala_sekolah }}" class="form-control" id="kepala_sekolah" placeholder="Masukkan Kepala Sekolah">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info btn-lg">Simpan Data</button>
                        <button class="btn btn-danger btn-lg" onclick="history.back()">Batal</button>
                    </div>
                </form>
                <script>
                    var sekolah=new L.LatLng({{$p->lat_sekolah}},{{$p->long_sekolah}});
                    var map = L.map('mapid', {
                    center: sekolah,
                    zoom: 11
                    });

                    L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=Ts9g8McLuNVEfjGFTHeG', {
                        attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">© MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">© OpenStreetMap contributors</a>'
                    }).addTo(map);
                    var msiswa = L.marker(sekolah).addTo(map).bindPopup("Lokasi alamat {{$p->nama_sekolah}} sekarang").openPopup();
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
