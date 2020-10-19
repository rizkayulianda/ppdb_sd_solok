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
						<img src="/assets/img/gedung.svg" alt="Pendaftar" class="img-fluid">
						<h1 class="card-title pricing-card-title">
							{{PendaftaranController::getTotSekolah()}}
							<small class="text-muted"> Sekolah</small>
						</h1>
						<p>Telah Terdaftar Di Website Ini</p>
					</div>
				</div>
				<div class="card my-auto mb-4 shadow-sm border-primary">
					<div class="card-body">
						<img src="/assets/img/decision.svg" alt="Pendaftar" class="img-fluid">
						<h1 class="card-title pricing-card-title">
							{{PendaftaranController::getTotPendaftar()}}
							<small class="text-muted"> Calon Peserta Didik</small>
						</h1>
						<p>Telah Diterima Di Seluruh Sekolah</p>
					</div>
				</div>
				<div class="card my-auto mb-4 shadow-sm border-primary">
					<div class="card-body">
							<img src="/assets/img/form.svg" alt="Pendaftar" class="img-fluid">
							<h1 class="card-title pricing-card-title">
								{{PendaftaranController::getMyPendaftar()}}
								<small class="text-muted"> Calon Peserta Didik</small>
							</h1>
							<p>Telah Mendaftar Di Dekolah Anda </p>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-body">
					<h5 class="alert-heading">Ketentuan</h5>
					<ul style="list-style-type:disc;">
						<li><strong>Klik nama siswa untuk melihat detail data siswa</strong></li>
						<li><strong>Siswa yang berstatus 'Diterima' telah lulus seleksi jarak umur selama kuota utama sekolah anda masih tersedia </strong></li>
						<li><strong>Siswa yang berstatus 'Cadangan' merupakan pendaftar yang lulus seleksi namun kuota utama penuh dan pendaftar yang berjarak lebih dari 3km dari sekolah</strong></li>
						<li><strong>Periksa ulang kembali data calon siswa anda sebelum ditampilkan ke tabel pengumuman</strong></li>
					</ul>
				</div>
			</div><br>
			<table class="table table-striped table-bordered" id="tpendaftaran">
				<thead>

					<tr>
						<th>No Pendaftaran</th>
						<th>Nama Siswa</th>
						<th>Tanggal Pendaftaran</th>
						<th>Jarak rumah ke sekolah (Meter)</th>
						<th>Umur</th>
						<th>Status</th>
						{{-- <th>Aksi</th> --}}
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
						<td>{{ $p->umur }}</td>
						<td>{{ $p->status }}</td>
						{{-- <td>
							<a href="/pendaftaran/terima/{{ $p->no_pendaftaran }}" class="btn btn-primary">Terima</a>
							<a href="/pendaftaran/hapus/{{ $p->no_pendaftaran }}"class="btn btn-danger ">Tolak</a>
						</td> --}}
					</tr>
					@endforeach
				</tbody>
			</table><br>
			<div class="row">
				<div class="col-sm-5">
					<a href="/pendaftaran/pengumuman" class="btn btn-lg btn-warning btn-block"><i class="fas fa-file-alt mr-2"></i>Tampilkan Ke Tabel Pengumuman</a>
				</div>
				<div class="col-sm-2"></div>
				<div class="col-sm-5">
					<a href="/pendaftaran/cetak" class="btn btn-lg btn-primary btn-block"><i class="fas fa-print"></i> Print Rekapitulasi Pendaftaran</a>
				</div>
			</div>
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