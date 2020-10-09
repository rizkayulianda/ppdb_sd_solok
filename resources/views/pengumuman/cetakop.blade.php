<!DOCTYPE html>
<html>
	<head>
		<link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
		<title>Hasil Pengumuman</title>
	</head>
	<body class="bg-white">
		<div class="container-fluid"><br>
				<h5 class="text-center">
					<img class="float-left" style="height: 2cm ;width: 2cm" src="img-home/kabsolok.png" alt="Kab. Solok">
					Kementrian Pendidikan dan Kebudayaan
					<img class="float-right" style="height: 2cm ;width: 2cm" src="img-home/tuwh.png" alt="Kemdikbud">
				</h5>
				<h4 class="text-center mb-4">PPDB Sekolah Dasar Kabupaten Solok</h4>
			<hr><br>
			@foreach ($sekolah as $i)
			<h5 class="text-center mb-3">Pengumuman hasil penerimaan peserta didik baru <br> {{$i->nama_sekolah}}</h5>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No Pendaftaran</th>
						<th>Nama Siswa</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					@foreach($pengumuman as $p)
					<tr>
						<td>{{ $p->no_pendaftaran }}</td>
						<td>{{ $p->nama_siswa}}</td>
						<td>Diterima</td>
					</tr>
					@endforeach
				</tbody>
			</table><br><br>
			<div class="row">
				<div class="col-9"></div>
				<div class="col-3 float-right">
					<p class="text-center"><strong>Mengetahui</strong></p>
					<p class="text-center"><strong>Kepala Sekolah</strong></p><br><br><br>
					<p class="text-center"><strong>{{$i->kepala_sekolah}}</strong></p>
					<p class="text-left"><strong>Nip:</strong></p>
				</div>	
			</div>
			@endforeach
		</div>
	</body>
</html>