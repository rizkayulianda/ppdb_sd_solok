<!DOCTYPE html>
<html>
<head>
    @include('header')
	<title>Pencarian Pengumuman</title>
</head>
<body id="page-top">
    @include('navbar')
    <section class="page-section mt-4 bg-primary">
        <div class="container bg-white p-5 rounded-lg"><br>
            <div class="card w-50 border-grey">
                @include('alertberhasil')
                <div class="card-body mb-2">
                    <h5 class="card-title">Pengumuman</h5>
<<<<<<< HEAD
                    <label for="formCari">Silahkan masukkan nomor pendaftaran anda:</label>
                    <form class="form-inline" action="/pengumuman/mencari" method="post">
                        {{ csrf_field() }}
                        <input type="text" class="form-control" id="formCari" name="keyword" required>
=======
                    <label for="formCari">Cari nomor pendaftaran anda:</label>
                    <form class="form-inline" action="/pengumuman/mencari" method="post">
                        {{ csrf_field() }}
                        <input type="text" class="form-control" id="formCari" name="keyword" placeholder="masukkan nomor pendaftaran" required>
>>>>>>> 6b3d0f026526f3447a71020d1f602fdef8fbe535
                        <input class="btn btn-primary" type="submit" value="Cari">
                    </form>
                </div>
            </div>
        </div>
    </section>
    @include('footer')
</body>
</html>