<!DOCTYPE html>
<html>
	<head>
		<link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
		<title>Hasil Pengumuman</title>
	</head>
	<body class="bg-white">
        @php
		    use App\Http\Controllers\PendaftaranController;
		@endphp
		<div class="container-fluid"><br>
				<h5 class="text-center">
					<img class="float-left" style="height: 2cm ;width: 2cm" src="img-home/kabsolok.png" alt="Kab. Solok">
					Kementrian Pendidikan dan Kebudayaan
					<img class="float-right" style="height: 2cm ;width: 2cm" src="img-home/tuwh.png" alt="Kemdikbud">
				</h5>
				<h4 class="text-center mb-4">PPDB Sekolah Dasar Kabupaten Solok</h4>
			<hr><br>
			<h5 class="text-center mb-3">Rekapitulasi hasil pendaftar</h5>
            <p class="text-left">Total semua sekolah : <strong>{{PendaftaranController::getTotSekolah()}}</strong></p>
            <p class="text-left">Total semua pendaftar : <strong>{{PendaftaranController::getTotPendaftar()}}</strong></p>
            <p class="text-left">Total pendaftar di sekolah anda : <strong>{{PendaftaranController::getMyPendaftar()}}</strong></p>
            <table class="table table-bordered">
				<thead>
					<tr>
						<th>No Pendaftaran</th>
						<th>Nama Siswa</th>
						<th>Umur</th>
						<th>Jarak tempat tinggal siswa dengan sekolah</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					@foreach($data as $p)
					<tr>
						<td>{{ $p->no_pendaftaran }}</td>
                        <td>{{ $p->nama_siswa}}</td>
                        <td>{{ $p->umur}}</td>
                        <td>{{ $p->jarak}}</td>
                        <td>{{ $p->status}}</td>
					</tr>
					@endforeach
				</tbody>
			</table><br><br>
		</div>
	</body>
</html>