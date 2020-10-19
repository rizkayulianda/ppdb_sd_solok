<!DOCTYPE html>
<html>
<head>
	@include('header')
	<title>Data Pengumuman</title>
</head>
<body id="page-top">
	@include('navbarop')
	<section class="page-section mt-4 bg-primary">
		@include('alertberhasil')
		<div class="container bg-white p-5 rounded-lg">
			<h2 class="text-center">Tabel Data Pengumuman</h2><br>
			<a href="/pengumuman/cetakop" class="btn btn-info btn-lg float-right mb-2">Cetak/Print</a>
			<table class="table table-bordered table-striped table-hover">
				<tr>
					<th>No Pendaftaran</th>
					<th>Nama Siswa</th>
					<th>Tanggal Pendaftaran</th>
					<th>Nama Sekolah</th>
					<th>Umur</th>
					<th>Jarak rumah ke sekolah</th>
					<th>Status</th>
				</tr>
				@foreach($pengumuman as $p)
				<tr>
					<td>{{ $p->no_pendaftaran }}</td>
					<td>{{ $p->nama_siswa}}</td>
					<td>{{ $p->tanggal_pendaftaran }}</td>
					<td>{{ $p->nama_sekolah }}</td>
					<td>{{ $p->umur}}</td>
					<td>{{ $p->jarak}}</td>
					<td>{{ $p->status}}</td>
				</tr>
				@endforeach
			</table>
		</div>
	</section>
	@include('footer')
</body>
</html>