<!DOCTYPE html>
<html>
<head>
    <title>PPDB SD Solok - Peserta didik</title>
    @include('header')
</head>
<body id="page-top">
    @include('navbar')
    <section class="page-section mt-4 bg-primary" id="table">
        <div class="container bg-white rounded-lg p-5">  
            @include('alertberhasil')
            <br><div class="alert alert-primary" role="alert">
                <h4>Petunjuk</h4>
                <p class="text-lg">
                    <ul style="list-style-type:disc;">
                        <li><strong>Klik tombol 'Tambahkan Data Calon Siswa' untuk menambahkan data calon siswa </strong></li>
                        <li><strong>Klik link 'Detail' untuk melihat data calon siswa seluruhnya.</strong></li>
                        <li><strong>Klik link 'Data Kesehatan' untuk melihat data kesehatan siswa</strong></li>
                        <li><strong>Klik tombol 'Daftar Sekolah' untuk mendaftarkan calon siswa</strong></li>
                    </ul>
                </p>
            </div>
            <h2> Data Calon Siswa</h2>
            @foreach($calon_siswa as $p)
            <div class="container row p-2 border border-grey bg-light mx-auto rounded-lg mt-3">
                <div class="col-3-sm p-4">
                    <img width="150px" class="mx-auto d-block" src="{{ url('/uploads/image_pasfoto/'.$p->image_pasfoto) }}">
                </div>
                <div class="col-9 p-4">
                    <table class="table table-sm table-borderless">
                        <tr>
                            <th>Nama Siswa</th>
                            <td> : {{ $p->nama_siswa }}</td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <td> : {{ $p->jenis_kelamin }}</td>
                        </tr>
                        <tr>
                            <th>Tempat & Tanggal Lahir</th>
                            <td> : {{ $p->tempat_lahir }}, {{ $p->tanggal_lahir }} </td>
                        </tr>
                        <tr>
                            <th>Data Lengkap</th>
                            <td> : <a href="/calon_siswa/detail/{{ $p->nik_siswa }}">Detail</a></td>
                        </tr>
                        <tr>
                            <th>Data Kesehatan</th>
                            <td> : <a href="/kesehatan_siswa/detail/{{ $p->nik_siswa }}">Data Kesehatan</a></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <a href="/pendaftaran/data/{{ $p->nik_siswa }}" class="btn btn-primary btn-block btn-lg "><i class="fas fa-graduation-cap mr-2"></i>Daftar Sekolah</a><br>
                                <div class="float-right">
                                    <a href="/calon_siswa/edit/{{ $p->nik_siswa }}" class="btn btn-warning"><i class="fas fa-edit mr-2"></i>Edit data</a>
                                    <a href="/calon_siswa/hapus/{{ $p->nik_siswa }}" class="btn btn-danger"><i class="fas fa-trash mr-2"></i>Hapus data</a>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            @endforeach
            @if (session('limit')!='udah')
            <a href="/calon_siswa/create/" class="mt-3 btn btn-primary btn-lg"><i class="fas fa-plus mr-2"></i>Tambahkan Data Calon Siswa</a><br>
            @endif
        </div>
    </section>
    @include('footer')
</body>
</html>