<!DOCTYPE html>
<html>
<head>
    <title>Data Operator</title>
    @include('header')
</head>
<body id="page-top">
    @include('navbarop')
    <section class="page-section mt-4 bg-primary">
        <div class="container bg-white p-5 rounded-lg">
            @include('alertberhasil')
            <table class="table table-hover">
                    @foreach($operator as $p)
                    <tr>
                        <th colspan="2">
                            <h2>
                            Detail Operator
                            <a href="/operator/edit" class="btn btn-warning btn-lg float-right">Edit</a>
                            </h2>
                        </th>
                    </tr>
                    <tr>
                        <th>NPSN Sekolah : </th>
                        <td>{{ $p->kd_sekolah }}</td>
                    </tr>
                    <tr>
                        <th>Nama Operator </th>
                        <td>{{ $p->nama_op }}</td>
                    </tr>
                    <tr>
                        <th>Email Sekolah : </th>
                        <td>{{ $p->email_op }}</td>
                    </tr>
                    @endforeach
            </table>
        </div>
    </section>    
    @include('footer')
</body>
</html>