<!DOCTYPE html>
<html>
<head>
    @include('header')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <title>Detail Data Sekolah </title>
</head>
<body id="page-top">
    @include('navbarop')
    <section class="page-section mt-4 bg-primary">
        <div class="container bg-white p-5 rounded-lg">
            @include('alertberhasil')
            @foreach($sekolah as $p)
            <h2 class="text-center mt-1 mb-3">
                Data Sekolah {{$p->kd_sekolah}}
            </h2>
            <div class="container-fluid border rounded-lg">
                <br>
                <h5>
                    Data {{$p->nama_sekolah}}
                    <a href="/sekolah/edit" class="btn btn-warning btn float-right">Edit</a>
                </h5><br>
                <tr>
                    <div class="row">
                        <div class="col-lg-7">
                            <table class="table table-bordered table-striped">
                                <tr>    
                                    <th>NPSN Sekolah : </th>
                                    <td>{{ $p->kd_sekolah }}</td>
                                </tr>
                                <tr>
                                    <th>Nama Sekolah : </th>
                                    <td>{{ $p->nama_sekolah }}</td>
                                </tr>
                                <tr>
                                    <th>Alamat Sekolah : </th>
                                    <td>{{ $p->alamat_sekolah }}</td>
                                </tr>
                                <tr>
                                    <th>Alamat Zonasi : </th>
                                    <td>{{ $p->nama_zonasi }}</td>
                                </tr>
                                <tr>
                                    <th>Email Sekolah : </th>
                                    <td>{{ $p->email_sekolah }}</td>
                                </tr>
                                <tr>
                                    <th>Web Sekolah : </th>
                                    <td>{{ $p->web_sekolah }}</td>
                                </tr>
                                <tr>
                                    <th>No Telepon Sekolah : </th>
                                    <td>{{ $p->notelp_sekolah }}</td>
                                </tr>
                                <tr>
                                    <th>Kepala Sekolah : </th>
                                    <td>{{ $p->kepala_sekolah }}</td>
                                </tr>
                                <tr>
                                    
                                </tr>
                                @endforeach
                            </table>
                        </div>
                        <div class="col-lg-5">
                            <div id="mapid" style="width:100%;height:370px;"></div>
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
                            </script>
                        </div>
                    </div>
                
            </div>
        </div>
    </section>    
    @include('footer')
</body>
</html>