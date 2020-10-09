<!DOCTYPE html>
<html>
<head>
	@include('header')
	<title>Tabel Pengumuman </title>
</head>
<body>
	@include('navbar')
	<section class="page-section mt-4 bg-primary">
		<div class="container bg-white p-5 rounded-lg">
			<h4 class="text-center">Hasil Pencarian</h4>
			<a href="/pengumuman/cetak/{{$keyword}}" class="btn btn-danger btn-lg float-right mb-2"> Cetak / Print</a>
			<br>
			<table class="table">
				<thead>
					<tr>
						<th>Nama Sekolah</th>
						<th>No Pendaftaran</th>
						<th>Nama Siswa</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					@foreach($pengumuman as $p)
					<tr>
						<td>{{ $p->nama_sekolah }}</td>
						<td>{{ $p->no_pendaftaran }}</td>
						<td>{{ $p->nama_siswa}}</td>
						<td>Diterima</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</section>
	@include('footer')
</body>
</html>