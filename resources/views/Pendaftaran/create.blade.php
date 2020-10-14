<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('header')
        <title>Pemilihan Sekolah</title>
        {{-- leafletJS --}}
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/> 
	    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    </head>
    <body id="page-top">
        @php
            use App\Http\Controllers\PendaftaranController;
        @endphp
        @include('navbar')
        <section class="page-section mt-4 bg-primary">
            <div class="container bg-white p-5 rounded-lg">
                <h2 class="text-center">Pemilihan sekolah</h2>
                @include('alertberhasil')
                <div class="alert alert-primary" role="alert">
                    <h4>Ketentuan</h4>
                    <p class="text-lg">
                        <ul style="list-style-type:disc;">
                            <li><strong>Disarakankan memilih sekolah dengan jarak terdekat </strong></li>
                            <li><strong>Pilihan sekolah tidak dapat diubah setelah menekan tombol 'Mendaftar'.</strong></li>
                            <li><strong>Jika anda masih ragu dengan pilihan sekolah anda, silahkan cek kembali daftar sekolah <a href="/sekolah">disini</a></strong></li>
                        </ul>
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-5">
                        <div id="mapid" style="width:100%;height:380px;"></div>
                        @foreach ($siswa as $s)
                        <script type="text/javascript">
                            var siswam=new L.LatLng({{$s->lat_siswa}},{{$s->long_siswa}});
                            var map = L.map('mapid', {
                                center: siswam,
                                zoom: 14
                                });
                            var msiswa = L.marker(siswam).addTo(map).bindPopup("Alamat {{$s->nama_siswa}}").openPopup();
                            // map api menggunakan mapbox
                            L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
                                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                                maxZoom: 18,
                                id: 'mapbox/streets-v11',
                                tileSize: 512,
                                zoomOffset: -1,
                                accessToken: 'pk.eyJ1IjoiYWN1cmFuZzIwMTIiLCJhIjoiY2tldm8zdnE1MGNlNzJ3cDlvZG14MW5pbyJ9.O_D1RzYTMFYpOkly9Xu32w'
                            }).addTo(map);
                        </script>
                        @endforeach
                        @foreach ($sekolah as $s)
                        <script>
                                var sekolah=new L.LatLng({{$s->lat_sekolah}},{{$s->long_sekolah}});
                                var msekolah= L.marker(sekolah).addTo(map).bindPopup("Alamat {{$s->nama_sekolah}}");
                        </script>
                        @endforeach
                    </div>
                    <div class="col-lg-7">
                        <table id="tabel-data" class="table">
                            <thead>
                                <tr>
                                    <th>Nama Sekolah</th>
                                    <th>Alamat Sekolah</th>
                                    <th>Jarak ke sekolah (Meter)</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($sekolah as $p)
                                <tr>
                                    <td>{{ $p->nama_sekolah }}</td>
                                    <td>{{ $p->alamat_sekolah }}</td>
                                    <td>
                                        @foreach ($siswa as $s)
                                            {{PendaftaranController::getJarak($p->lat_sekolah, $p->long_sekolah, $s->lat_siswa, $s->long_siswa)}}
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($siswa as $item)
                                        <form action="/pendaftaran/store" method="post">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="nik_siswa" value="{{$item->nik_siswa}}" readonly>
                                            <input type="hidden" name="tanggal_lahir" value="{{$item->tanggal_lahir}}" readonly>
                                            <input type="hidden" name="kd_sekolah" value="{{$p->kd_sekolah}}" readonly>
                                            <input 
                                            type="hidden" 
                                            name="jarak" 
                                            value="{{PendaftaranController::getJarak($p->lat_sekolah, $p->long_sekolah, $item->lat_siswa, $item->long_siswa)}}" 
                                            readonly>
                                            <input type="hidden" name="utama" value="{{$p->utama}}" readonly>
                                            <input type="hidden" name="cadangan" value="{{$p->cadangan}}" readonly>
                                            <button type="submit" class="btn btn-primary btn-lg">Mendaftar</button>
                                        </form>
                                        @endforeach
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        @include('footer')
        <script>
            $(document).ready(function(){
                $('#tabel-data').DataTable({
                    "order": [[2, "asc" ]],
                    "paging":false,
                    "info":false,
                    "searching":false,
                });
            });
        </script>
    </body>
</html>
