<!DOCTYPE html>
<html>
<head>
    <title>Data Calon Siswa </title>
    @include('header')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
</head>
<body id="page-top">
    @include('navbar')
    <section class="page-section mt-5 bg-primary">
        <div class="container bg-white p-5 rounded-lg border">
            @include('alertberhasil')
            @foreach($calon_siswa as $p)
            @foreach($zonasi as $z)
            <h2>Data Calon Siswa
                <a href="/calon_siswa/edit/{{ $p->nik_siswa }}" class="btn btn-md btn-warning btn-lg float-right">Edit Data</a>
            </h2><br>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Nama Siswa : </th>
                    <td>{{ $p->nama_siswa }}</td>
                    <td rowspan="6"><img width="210px" class=" mx-auto d-block" src="{{ url('/uploads/image_pasfoto/'.$p->image_pasfoto) }}"></td>
                </tr>
                <tr>
                    <th>Jenis Kelamin : </th>
                    <td>{{ $p->jenis_kelamin }}</td>
                </tr>
                <tr>
                    <th>Tempat, Tanggal Lahir : </th>
                    <td>{{ $p->tempat_lahir }}, {{ $p->tanggal_lahir }} </td>
                </tr>
                <tr>
                    <th>Alamat Lengkap: </th>
                    <td>{{ $p->alamat_siswa }}</td>
                </tr>
                <tr>
                    <th>Alamat Zonasi: </th>
                    <td>{{ $z->nama_zonasi}}</td>
                </tr>
                <tr>
                    <th>Pendidikan Sebelumnya : </th>
                    <td>{{ $p->pendidikan_sebelumnya }}</td>
                </tr>
                <tr>
                    <th>NIK Siswa : </th>
                    <td colspan="2">{{ $p->nik_siswa }}</td>
                </tr>
                <tr>
                    <th>Nama Ayah : </th>
                    <td colspan="2">{{ $p->ortu->nama_ayah }}</td>
                </tr>
                <tr>
                    <th>Nama Ibu : </th>
                    <td colspan="2">{{ $p->ortu->nama_ibu }}</td>
                </tr>
                <tr>
                    <th>Foto KK : </th>
                    <td colspan="2"><img width="150px" src="{{ url('/uploads/image_kk/'.$p->image_kk) }}"></td>
                </tr>
                <tr>
                    <th>Foto Akte : </th>
                    <td colspan="2"><img width="150px" src="{{ url('/uploads/image_akte/'.$p->image_akte) }}"></td>
                </tr>
                <tr>
                    <th>Foto Ijazah TK : </th>
                    <td colspan="2"><img width="150px" src="{{ url('/uploads/image_ijazah_tk/'.$p->image_ijazah_tk) }}"></td>
                </tr>
                <tr>

                    <td colspan="3">
                        <div id="mapid" style="width:100%;height:370px;"></div>
                        <script>
                            var siswa=new L.LatLng({{$p->lat_siswa}},{{$p->long_siswa}});
                            var map = L.map('mapid', {
                                center: siswa,
                                zoom: 12
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

                            var msiswa = L.marker(siswa).addTo(map).bindPopup("Lokasi alamat {{$p->nama_siswa}}").openPopup();
                        </script>
                    </td>
                </tr>
                {{-- <tr>
                    <th>Pasfoto : </th>
                    <td><img width="150px" src="{{ url('/uploads/image_pasfoto/'.$p->image_pasfoto) }}"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <a href="/calon_siswa/edit/{{ $p->id }}" class="btn btn-warning btn-block">Edit</a>
                    </td>
                </tr> --}}
            </table>
            @endforeach
            @endforeach
        </div>
    </section>
    @include('footer')    
</body>
</html>