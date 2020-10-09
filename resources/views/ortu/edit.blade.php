<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('header')
        <title>Edit data orang tua</title>
    </head>
    <body id="page-top">
        @include('navbar')
        <section class="page-section mt-4 bg-primary">
            <div class="container bg-white p-5 rounded-lg">
                @include('alertberhasil')
                <h2 class="text-center"> Edit data orang tua</h2>
                @foreach($ortu as $p)
                <form action="/ortu/update" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $p->id }}"> <br/>
                    <div class="form-group">
                        <label for="inputNamaAyah"> Nama Ayah</label>
                        <input type="text" name="nama_ayah" required="required" value="{{ $p->nama_ayah }}" class="form-control" id="nama_ayah" placeholder="Masukkan nama ayah">
                    </div>
                    <div class="form-group">
                        <label for="inputNamaIbu"> Nama ibu</label>
                        <input type="text" name="nama_ibu" required="required" value="{{ $p->nama_ibu }}" class="form-control" id="nama_ibu" placeholder="Masukkan nama ibu">
                    </div>
                    <div class="form-group">
                        <label for="inputPekerjaanAyah"> Pekerjaan Ayah</label>
                        <input type="text" name="pekerjaan_ayah" required="required" value="{{ $p->pekerjaan_ayah }}" class="form-control" id="pekerjaan_ayah" placeholder="Masukkan pekerjaan ayah">
                    </div>
                    <div class="form-group">
                        <label for="inputPekerjaanIbu"> Pekerjaan Ibu</label>
                        <input type="text" name="pekerjaan_ibu" required="required" value="{{ $p->pekerjaan_ibu }}" class="form-control" id="pekerjaan_ibu" placeholder="Masukkan pekerjaan ibu">
                    </div>
                    <div class="form-group">
                        <label for="inputPendidikanAyah"> Pendidikan Ayah</label>
                        <input type="text" name="pendidikan_ayah" required="required" value="{{ $p->pendidikan_ayah }}" class="form-control" id="pendidikan_ayah" placeholder="Masukkan pendidikan ayah">
                    </div>
                    <div class="form-group">
                        <label for="inputPendidikanIbu"> Pendidikan Ibu</label>
                        <input type="text" name="pendidikan_ibu" required="required" value="{{ $p->pendidikan_ibu }}" class="form-control" id="pendidikan_ibu" placeholder="Masukkan pendidikan ibu">
                    </div>
                    <div class="form-group">
                        <label for="inputAlamatOrtu"> Alamat Orang Tua</label>
                        <textarea name="alamat_ortu" required="required" class="form-control" id="alamat_ortu" rows="3" placeholder="Masukkan Alamat Orang Tua">{{ $p->alamat_ortu }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="inputNoHpOrtu"> Nomor HP Orang Tua</label>
                        <input type="text" name="no_hp_ortu" readonly value="{{ $p->no_hp_ortu }}" class="form-control" id="no_hp_ortu" placeholder="Masukkan Nomor HP Orang Tua">
                    </div>
                    <div class="form-group">
                        <label for="inputNoHpOrtu"> Nomor KK</label>
                        <input type="text" name="no_kk" readonly value="{{ $p->no_kk }}" class="form-control" id="no_kk" >
                    </div>
                    <button type="submit" class="btn btn-primary" >Simpan Data</button>
                </form>
                @endforeach
            </div>
        </section>
        @include('footer')
    </body>
</html>
