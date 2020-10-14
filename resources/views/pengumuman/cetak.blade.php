<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
		<title>Tabel Pengumuman </title>
	</head>
	<body class="bg-white">
		<h5 class="text-center">
			<img class="float-left" style="height: 2cm ;width: 2cm" src="img-home/kabsolok.png" alt="Kab. Solok">
				Kementrian Pendidikan dan Kebudayaan
			<img class="float-right" style="height: 2cm ;width: 2cm" src="img-home/tuwh.png" alt="Kemdikbud">
		</h5>
		<h4 class="text-center">Pengumuman PPDB Sekolah Dasar<br>Kabupaten Solok</h4><br>
		<table class="table border">
			<thead>
				<tr>
					<th>Nama Siswa</th>
					<th>No Pendaftaran</th>
					<th>Nama Sekolah</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
				@foreach($pengumuman as $p)
				<tr>
					<td>{{ $p->nama_siswa}}</td>
					<td>{{ $p->no_pendaftaran }}</td>
					<td>{{ $p->nama_sekolah }}</td>
					<td>{{ $p->status }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</body>
</html>