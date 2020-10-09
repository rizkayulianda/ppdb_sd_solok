<!DOCTYPE html>
<html>
<head>
	<title>Tabel Operator </title>
	@include('header')
</head>
<body id="page-top">
	@include('navbarop')
	<section class="page-section mt-4 bg-primary">
		<div class="container p-5 bg-white rounded-lg">
			<h2>Data Operator</h2><br/>
			<table class="table table-bordered table-striped table-hover">
				<tr>
					<th>Kode Sekolah</th>
					<th>Nama Operator</th>
					<th>Email Operator</th>
					<th>Password Operator</th>
				</tr>
				@foreach($operator as $p)
				<tr>
					<td>{{ $p->kd_sekolah }}</td>
					<td>{{ $p->nama_op }}</td>
					<td>{{ $p->email_op }}</td>
					<td>{{ $p->password }}</td>
					
				</tr>
				@endforeach
			</table>
		</div>
	</section>
	@include('footer')
</body>
</html>