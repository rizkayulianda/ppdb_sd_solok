<!DOCTYPE html>
<html>
<head>
    @include('header')
    <title>Data Orang Tua Calon Siswa </title>
</head>
<body id="page-top">
    @include('navbar')
    <section class="page-section mt-4 bg-primary">
        <div class="container bg-white p-5 rounded-lg">
            @include('alertberhasil')
            <table class="table table-bordered table-striped table-hover">
                @foreach($ortu as $p)
                <h2>
                Data Orang Tua
                <a href="/ortu/edit" class="btn btn-warning btn-xl float-right">Edit</a>
                </h2><br>
                <br>
                <tr>
                    <th>Nama Ayah : </th>
                    <td>{{ $p->nama_ayah }}</td>
                </tr>
                <tr>
                    <th>Nama Ibu : </th>
                    <td>{{ $p->nama_ibu }}</td>
                </tr>
                <tr>
                    <th>Pekerjaan Ayah : </th>
                    <td>{{ $p->pekerjaan_ayah }}</td>
                </tr>
                <tr>
                    <th>Pekerjaan Ibu : </th>
                    <td>{{ $p->pekerjaan_ibu }}</td>
                </tr>
                <tr>
                    <th>Pendidikan Ayah : </th>
                    <td>{{ $p->pendidikan_ayah }}</td>
                </tr>
                <tr>
                    <th>Pendidikan Ibu : </th>
                    <td>{{ $p->pendidikan_ibu }}</td>
                </tr>
                <tr>
                    <th>Alamat Orang Tua : </th>
                    <td>{{ $p->alamat_ortu }}</td>
                </tr>
                <tr>
                    <th>No HP Orang Tua : </th>
                    <td>{{ $p->no_hp_ortu }}</td>
                </tr>
                <tr>
                    <th>Nomor KK : </th>
                    <td>{{ $p->no_kk }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </section>
    @include('footer')
</body>
</html>