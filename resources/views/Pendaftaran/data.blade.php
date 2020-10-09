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
			@include('alertberhasil')
			<h2>Data Pendaftaran</h2>
			@if (session('cekcetak')!='kosong')
			<a href="/pendaftaran/cetak/{{$nik_siswa}}" class="btn btn-info btn-lg float-right mb-2">Cetak/Print</a>
			@endif
			@if (session('limitsekolah')!='udah')
			<p class="card-text">Klik tombol pilih sekolah untuk memilih sekolah.</p>
			<a href="/pendaftaran/create/{{$nik_siswa}}" class="btn btn-primary btn-lg">Pilih Sekolah</a><br><br>
			@endif
			
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