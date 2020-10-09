<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Edit Data Operator</title>
        @include('header')
    </head>
    <body id="page-top">
        @include('navbarop')
        <section class="page-section mt-4 bg-primary">
            <div class="container p-5 bg-white rounded-lg">
                <h2 class="tex-center">Edit data operator</h2>
                @foreach($operator as $p)
                <form action="/operator/update" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $p->id }}">
                    <div class="form-group">
                        <label for="namaop"> Nama Operator :</label>
                        <input type="text" name="nama_op" required="required" value="{{ $p->nama_op }}" class="form-control" id="namaop" placeholder="Masukkan nama operator">
                    </div>
                    <div class="form-group">
                        <label for="emailop">Email sekolah</label>
                        <input type="text" name="email_op" required="required" value="{{ $p->email_op }}" class="form-control" id="emialop" placeholder="Masukkan alamat email sekolah">
                    </div>
                    <button type="submit" class="btn btn-primary" >Simpan Data</button>
                </form>
                @endforeach
            </div>
        </section>
        @include('footer')
    </body>
</html>
