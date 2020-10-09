<!DOCTYPE html>
<html>
<head>
	@include('header')
	<title>Tabel Sekolah </title>
</head>
<body id="page-top">
	@include('navbar')
	<section class="page-section mt-5 bg-primary">
		<div class="container bg-white p-5 rounded-lg">
			@include('alertberhasil')
			<h2 class="text-center">Data Sekolah</h2>
			<br/>
				<table class="table table-bordered" id="tsekolah" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Nama Sekolah</th>
							<th>Zona Sekolah</th>
							<th>Alamat Sekolah</th>
							<th>Nama Kepala Sekolah</th>
						</tr>
					</thead>
					<tbody>
						@foreach($sekolah as $p)
						<tr>
							<td>{{ $p->nama_sekolah }}</td>
							<td>{{$p->zonasi->nama_zonasi}}</td>
							<td>{{ $p->alamat_sekolah }}</td>
							<td>{{ $p->kepala_sekolah }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
		</div>
	</section>
	@include('footer')
	<script>
		$(document).ready(function(){
			$('#tsekolah').DataTable();
		});
	</script>
</body>
</html>