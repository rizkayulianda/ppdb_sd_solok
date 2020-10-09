<!DOCTYPE html>
<html>
<head>
	@include('header')
	<title>Tabel Pendaftaran </title>
</head>
<body id="page-top">
	@include('navbar')
	<section class="page-section mt-4 bg-primary">
		<div class="container rounded-lg bg-white p-5">
			<h2>Data Pendaftaran</h2>
			@foreach($pendaftaran as $p)
			<div class="card w-75 border-info">
				<div class="card-body">
					<dl class="row">
						<dt class="col-sm-4">Nomor Pendaftaran</dt>
						<dd class="col-sm-8">: {{$p->no_pendaftaran}}</dd>
						<dt class="col-sm-4">Nama</dt>
						<dd class="col-sm-8">: {{$p->nama_siswa}}</dd>
						<dt class="col-sm-4">Sekolah Tujuan</dt>
						<dd class="col-sm-8">: {{$p->nama_sekolah}}</dd>
					</dl>
				</div>
			</div><br>
			@endforeach
		</div>	
	</section>
	@include('footer')
</body>
</html>