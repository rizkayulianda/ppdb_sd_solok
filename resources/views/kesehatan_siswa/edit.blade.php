<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('header')
        <title>Edit data kesehatan siswa</title>
    </head>
    <body id="page-top">
        @include('navbar')
        <section class="page-section mt-4 bg-primary">
            @php
            use App\Http\Controllers\KesehatanSiswaController;
            @endphp
            <div class="container p-5 rounded-lg bg-white">
                @include('alertberhasil')
                <h2>Edit Data Kesehatan Siswa</h2>
                @foreach($kesehatan_siswa as $p)
                <form action="/kesehatan_siswa/update" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $p->id }}"> <br/>
                    <div class="form-group ">
                        <label for="inputSiswa">Nik Siswa</label>
                        <input type="text" name="nik_siswa" readonly value="{{ $p->nik_siswa }}" class="form-control" id="inputSiswa">
                    </div>
                    <div class="form-group">
                        <label for="inputTinggiBadan">Tinggi Badan</label>
                        <input type="text" name="tinggi" required="required" value="{{ $p->tinggi }}" class="form-control" id="tinggi" placeholder="Masukkan Tinggi Badan">
                    </div>
                    <div class="form-group">
                        <label for="inputBeratBadan">Berat Badan</label>
                        <input type="text" name="berat" required="required" value="{{ $p->berat }}" class="form-control" id="berat" placeholder="Masukkan Berat Badan">
                    </div>
                    <div class="form-group">
                        <label for="inputPenglihatan">Penglihatan</label>
                        <input type="text" name="penglihatan" required="required" value="{{ $p->penglihatan }}" class="form-control" id="penglihatan" placeholder="Masukkan Penglihatan">
                    </div>
                    <div class="form-group">
                        <label for="inputPendengaran">Pendengaran</label>
                        <input type="text" name="pendengaran" required="required" value="{{ $p->pendengaran }}" class="form-control" id="pendengaran" placeholder="Masukkan Pendengaran">
                    </div>
                    <div class="form-group">
                        <label for="inputGigi">Gigi</label>
                        <input type="text" name="gigi" required="required" value="{{ $p->gigi }}" class="form-control" id="gigi" placeholder="Masukkan Gigi">
                    </div>
                    <div class="form-group">
                        <label for="inputRiwayatPenyakit">Riwayat Penyakit</label>
                        <input type="text" name="riwayat_penyakit" required="required" value="{{ $p->riwayat_penyakit }}" class="form-control" id="riwayat_penyakit" placeholder="Masukkan Riwayat Penyakit">
                    </div>
                    <button type="submit" class="btn btn-primary" >Simpan Data</button>
                </form>
                @endforeach
            </div>
        </section>
        @include('footer')
    </body>
</html>
