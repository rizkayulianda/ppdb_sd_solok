<!DOCTYPE html>
<html>
<head>
    @include('header')
    <title>Data Calon Siswa </title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
</head>
<body id="page-top">
    @include('navbarop')  
    <section class="page-section mt-4 bg-primary">
        <div class="container bg-white p-5 rounded-lg"><br>
            @include('alertberhasil')
            <h1 class="text-center"> Data Pendaftar</h1>
            <br/>
            <table class="table table-bordered table-striped table-hover">
                @foreach($calon_siswa as $p)
                <tr>
                    <th colspan="3" > 
                        <h3> Data Pribadi
                        </h3>
                    </th>
                </tr>
                <tr>
                    <th>Nama Siswa : </th>
                    <td>{{ $p->nama_siswa }}</td>
                </tr>
                <tr>
                    <th>Tempat Lahir : </th>
                    <td>{{ $p->tempat_lahir }}</td>
                </tr>
                <tr>
                    <th>Tanggal Lahir : </th>
                    <td>{{ $p->tanggal_lahir }}</td>
                </tr>
                <tr>
                    <th>Alamat : </th>
                    <td>{{ $p->alamat_siswa }}</td>
                </tr>
                <tr>
                    <th>Jenis Kelamis : </th>
                    <td>{{ $p->jenis_kelamin }}</td>
                </tr>
                <tr>
                    <th>Pendidikan Sebelumnya : </th>
                    <td>{{ $p->pendidikan_sebelumnya }}</td>
                </tr>
                <tr>
                    <th>NIK Siswa : </th>
                    <td>{{ $p->nik_siswa }}</td>
                </tr>
                <tr>
                    <th>Foto KK : </th>
                    <td><img width="150px" src="{{ url('/uploads/image_kk/'.$p->image_kk) }}"><br>
                        <a class=" mt-2 btn btn-light" href="{{ url('/uploads/image_kk/'.$p->image_kk) }}" download="kk-{{$p->nik_siswa}}.jpg">
                            Download Foto KK 
                        </a></td>
                </tr>
                <tr>
                    <th>Foto Akte : </th>
                    <td><img width="150px" src="{{ url('/uploads/image_akte/'.$p->image_akte) }}"><br>
                        <a  class=" mt-2 btn btn-light" href="{{ url('/uploads/image_akte/'.$p->image_akte) }}" download="akte-{{$p->nik_siswa}}.jpg">
                            Download Foto Akte
                        </a>
                    </td>
                </tr>
                <tr>
                    <th>Foto Ijazah TK : </th>
                    <td>
                        <img width="150px" src="{{ url('/uploads/image_ijazah_tk/'.$p->image_ijazah_tk) }}"><br>
                        <a class=" mt-2 btn btn-light"  href="{{ url('/uploads/image_ijazah_tk/'.$p->image_ijazah_tk) }}" download="ijazah-{{$p->nik_siswa}}.jpg">
                            Download Foto Ijazah
                        </a>
                    </td>
                </tr>
                <tr>
                    <th>Pasfoto : </th>
                    <td>
                        <img width="150px" src="{{ url('/uploads/image_pasfoto/'.$p->image_pasfoto) }}"><br>
                        <a class=" mt-2 btn btn-light"  href="{{ url('/uploads/image_pasfoto/'.$p->image_pasfoto) }}" download="pasfoto-{{$p->nik_siswa}}.jpg">
                            Download Pasfoto
                        </a>
                    </td>
                </tr>
            </table>
            <table class="table table-bordered table-striped table-hover">
                @foreach($kesehatan_siswa as $k)
                <th colspan="3" > 
                    <h3> Data Kesehatan Siswa
                    </h3>
                </th>
                <tr>
                    <th>Tinggi Badan : </th>
                    <td>{{ $k->tinggi }}</td>
                </tr>
                <tr>
                    <th>Berat Badan : </th>
                    <td>{{ $k->berat }}</td>
                </tr>
                <tr>
                    <th>Penglihatan : </th>
                    <td>{{ $k->penglihatan }}</td>
                </tr>
                <tr>
                    <th>Pendengaran : </th>
                    <td>{{ $k->pendengaran }}</td>
                </tr>
                <tr>
                    <th>Gigi : </th>
                    <td>{{ $k->gigi }}</td>
                </tr>
                <tr>
                    <th>Riwayat Penyakit : </th>
                    <td>{{ $k->riwayat_penyakit }}</td>
                </tr>
                @endforeach
            </table>
            <table class="table table-bordered table-striped table-hover">
                <th colspan="3" > 
                    <h3> Data Orang Tua
                    </h3>
                </th>
                <tr>
                    <th>Nama Ayah : </th>
                    <td>{{ $p->ortu->nama_ayah }}</td>
                </tr>
                <tr>
                    <th>Nama Ibu : </th>
                    <td>{{ $p->ortu->nama_ibu }}</td>
                </tr>
                <tr>
                    <th>Pekerjaan Ayah : </th>
                    <td>{{ $p->ortu->pekerjaan_ayah }}</td>
                </tr>
                <tr>
                    <th>Pekerjaan Ibu : </th>
                    <td>{{ $p->ortu->pekerjaan_ibu }}</td>
                </tr>
                <tr>
                    <th>Pendidikan Ayah : </th>
                    <td>{{ $p->ortu->pendidikan_ayah }}</td>
                </tr>
                <tr>
                    <th>Pendidikan Ibu : </th>
                    <td>{{ $p->ortu->pendidikan_ibu }}</td>
                </tr>
                <tr>
                    <th>Alamat Orang Tua : </th>
                    <td>{{ $p->ortu->alamat_ortu }}</td>
                </tr>
                <tr>
                    <th>No HP Orang Tua : </th>
                    <td>{{ $p->ortu->no_hp_ortu }}</td>
                </tr>
                <tr>
                    <th>Nomor KK : </th>
                    <td>{{ $p->ortu->no_kk }}</td>
                </tr>
            @endforeach
            </table>
            <div id="mapid" style="width:100%;height:380px;"></div>
        </div>
    </section>  
    @foreach ($calon_siswa as $p)
    <script>
        var map = L.map('mapid').setView([{{$p->lat_siswa}}, {{$p->long_siswa}}], 16);

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'pk.eyJ1IjoiYWN1cmFuZzIwMTIiLCJhIjoiY2tldm8zdnE1MGNlNzJ3cDlvZG14MW5pbyJ9.O_D1RzYTMFYpOkly9Xu32w'
        }).addTo(map);

        var marker = L.marker([{{$p->lat_siswa}}, {{$p->long_siswa}}]).addTo(map).bindPopup("Alamat {{$p->nama_siswa}}").openPopup();
    </script>
    @endforeach
    @include('footer')
</body>
</html>