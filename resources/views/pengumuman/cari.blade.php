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
                    <label for="formCari">Cari nama sekolah yang dipilih:</label>
                    <form class="form-inline" action="/pengumuman/mencari" method="post">
                        {{ csrf_field() }}
                        <input type="text" class="form-control" id="formCari" name="keyword" placeholder="masukkan nama sekolah" required>
                        <input class="btn btn-primary" type="submit" value="Cari">
                    </form>
                </div>
            </div>
        </div>
    </section>
    @include('footer')
</body>
</html>