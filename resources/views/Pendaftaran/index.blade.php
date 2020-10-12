<!DOCTYPE html>
<html>
<head>
	<title>Tabel Pendaftaran </title>
	@include('header')
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/> 
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
</head>
<body id="page-top">
	@php
		use App\Http\Controllers\PendaftaranController;
		@endphp
	@include('navbarop')
	<section class="page-section mt-4 bg-primary">
		<div class="container rounded-lg bg-white p-5">
			@include('alertberhasil')
			<h1 class="text-center">Data Pendaftaran</h1><br> 
			<div class="card-deck mb-4 text-center">
				<div class="card my-auto mb-4 shadow-sm border-primary">
					<div class="card-body">
						<h1 class="card-title pricing-card-title">1
							{{PendaftaranController::getTotSekolah()}}
							<small class="text-muted"> sekolah</small>
						</h1>
						<p>Telah terdaftar di website ini</p>
					</div>
				</div>
				<div class="card my-auto mb-4 shadow-sm border-primary">
					<div class="card-body">
						<h1 class="card-title pricing-card-title">
							{{PendaftaranController::getTotPendaftar()}}
							<small class="text-muted"> calon peserta</small>
						</h1>
						<p>telah mendaftar dan diterima</p>
					</div>
				</div>
				<div class="card my-auto mb-4 shadow-sm border-primary">
					<div class="card-body">
						<h1 class="card-title pricing-card-title">
							{{PendaftaranController::getMyPendaftar()}}
							<small class="text-muted"> calon peserta </small>
						</h1>
						<p>total siswa yang mendaftar di sekolah anda </p>
					</div>
				</div>
			</div>
			<div role="alert" class="alert alert-primary" >
				<h5 class="alert-heading">Ketentuan</h5>
					<p class="text-lg">
						<ul style="list-style-type:disc;">
							<li><strong>Klik nama siswa untuk melihat detail data siswa</strong></li>
							<li><strong>Tombol "tolak" untuk menghapus data pendaftaran</strong></li>
							<li><strong>Data yang masuk ke tabel pengumuman adalah data yang berstatus "Diterima"</strong></li>
							<li><strong>Periksa ulang kembali data calon siswa anda sebelum ditampilkan ke tabel pengumuman</strong></li>
					</ul>
			</div><br>
			<table class="table table-striped table-bordered" id="tpendaftaran">
				<thead>

					<tr>
						<th>No Pendaftaran</th>
						<th>Nama Siswa</th>
						<th>Tanggal Pendaftaran</th>
						<th>Jarak rumah ke sekolah (Meter)</th>
						<th>Status</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					@foreach($pendaftaran as $p)
					<tr>
						<td>{{ $p->no_pendaftaran }}</td>
						<td><a href="/pendaftaran/detail/{{$p->nik_siswa}}">{{$p->nama_siswa}}</a></td>
						<td>{{ $p->tanggal_pendaftaran }}</td>
						<td>
							@foreach ($sekolah as $s)
								{{PendaftaranController::getJarak($s->lat_sekolah, $s->long_sekolah, $p->lat_siswa, $p->long_siswa)}}
							@endforeach 
						</td>
						<td>{{ $p->status }}</td>
						<td>
							<a href="/pendaftaran/terima/{{ $p->no_pendaftaran }}" class="btn btn-primary">Terima</a>
							<a href="/pendaftaran/hapus/{{ $p->no_pendaftaran }}"class="btn btn-danger ">Tolak</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table><br>
			<a href="/pendaftaran/pengumuman" class="btn btn-lg btn-warning">Tampilkan Ke Tabel Pengumuman</a>
		<br>
		</div>	
	</section>
	@include('footer')
	<script>
	$(document).ready(function(){
		$('#tpendaftaran').DataTable();
	});
	</script>
</body>
</html>