<!DOCTYPE html>
<html>
<head>
    <title>Data Kesehatan Calon Siswa </title>
    @include('header')
</head>
<body id="page-top">  
    @include('navbar')
    <section class="page-section mt-4 bg-primary">
        <div class="container bg-white rounded-lg p-5">
            @include('alertberhasil')
            @foreach($kesehatan_siswa as $p)
            <h2 class="text-center">
            Data Kesehatan {{$p->calon_siswa->nama_siswa}}
            <a href="/kesehatan_siswa/edit/{{ $p->nik_siswa }}" class="btn btn-warning btn-lg float-right">Edit</a>
            </h2><br>
            <table class="table table-bordered table-striped table-hover">

                <tr>
                    <th>NIK Siswa : </th>
                    <td>{{ $p->calon_siswa->nik_siswa }}</td>
                </tr>
                <tr>
                    <th>Nama Siswa : </th>
                    <td>{{ $p->calon_siswa->nama_siswa }}</td>
                </tr>
                <tr>
                    <th>Tinggi Badan : </th>
                    <td>{{ $p->tinggi }}</td>
                </tr>
                <tr>
                    <th>Berat Badan : </th>
                    <td>{{ $p->berat }}</td>
                </tr>
                <tr>
                    <th>Penglihatan : </th>
                    <td>{{ $p->penglihatan }}</td>
                </tr>
                <tr>
                    <th>Pendengaran : </th>
                    <td>{{ $p->pendengaran }}</td>
                </tr>
                <tr>
                    <th>Gigi : </th>
                    <td>{{ $p->gigi }}</td>
                </tr>
                <tr>
                    <th>Riwayat Penyakit : </th>
                    <td>{{ $p->riwayat_penyakit }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </section>  
    @include('footer')
</body>
</html>