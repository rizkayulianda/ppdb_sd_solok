<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Bootstrap core CSS -->
		<link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
		<title>Data Pendaftaran</title>
	</head>
	<body class="bg-white">
		<div class="container-fluid">
			<h4 class="text-center">PPDB Sekolah Dasar<br>Kabupaten Solok</h4><br>
            @foreach($pendaftaran as $p)
            <div class="card">
				<div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nomor Pendaftaran</th>
                            <td>: {{ $p->no_pendaftaran }}</td>
                        </tr>
                        <tr>
                            <th>Nama</th>
                            <td>: {{ $p->nama_siswa }}</td>
                        </tr>
                        <tr>
                            <th>Sekolah Tujuan</th>
                            <td>: {{ $p->nama_sekolah }}</td>
                        </tr>
                    </table>
                </div>
            </div>
			@endforeach
		</div>
	</body>
</html>