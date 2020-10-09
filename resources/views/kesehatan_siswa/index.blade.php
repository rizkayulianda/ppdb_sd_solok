<!DOCTYPE html>
<html>
<head>
	@include('header')
	<title>Tabel Kesehatan Siswa </title>
</head>
<body id="page-top">
	@include('navbar')
	<section class="page-section mt-3 bg-primary">
		<div class="container bg-white p-5 rounded-lg">
			@if ($message = session()->get('berhasil'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                  <br>{{$message}}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
            @endif
			<h2>Data Kesehatan Siswa</h2>
			<br>
			<table class="table table-bordered table-striped table-hover">
				<tr>
					<th>Nama,<br> NIK Siswa</th>
					<th>Tinggi Badan</th>
					<th>Berat Badan</th>
					<th>Penglihatan</th>
					<th>Pendengaran</th>
					<th>Gigi</th>
					<th>Riwayat Penyakit</th>
					<th>Aksi</th>
				</tr>
				@foreach($kesehatan_siswa as $p)
				<tr>
					<td>{{ $p->calon_siswa->nama_siswa }}, {{$p->nik_siswa}}</td>
					<td>{{ $p->tinggi }}</td>
					<td>{{ $p->berat }}</td>
					<td>{{ $p->penglihatan }}</td>
					<td>{{ $p->pendengaran }}</td>
					<td>{{ $p->gigi }}</td>
					<td>{{ $p->riwayat_penyakit }}</td>
					<td>
						<a href="/kesehatan_siswa/detail/{{ $p->nik_siswa }}" class="btn btn-info">Detail</a>
						<a href="/kesehatan_siswa/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
					</td>
				</tr>
				@endforeach
			</table>
		</div>
	</section>
	@include('footer')
</body>
</html>