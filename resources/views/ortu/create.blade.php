<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      @include('header')
      <title>Buat data orang tua</title>
    </head>
    <body id="page-top">
      @include('navbar')
      <section class="page-section mt-4 bg-primary">
        <div class="container bg-white p-5 rounded-lg">
            <br/>
            <div class="alert alert-primary" role="alert">
               Selamat datang pengunjung baru!<br>
               Silahkan lengkapi data orang tua calon siswa terlebih dahulu
            </div>
            <h3>Form Input Data Orang Tua</h3>                
            <form action="/ortu/store" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="inputNamaAyah"> Nama Ayah</label>
                    <input type="text" name="nama_ayah" required="required" class="form-control" id="nama_ayah" placeholder="Masukkan nama ayah">
                </div>
                <div class="form-group">
                    <label for="inputNamaIbu"> Nama ibu</label>
                    <input type="text" name="nama_ibu" required="required" class="form-control" id="nama_ibu" placeholder="Masukkan nama ibu">
                </div>
                <div class="form-group">
                    <label for="inputPekerjaanAyah"> Pekerjaan Ayah</label>
                    <input type="text" name="pekerjaan_ayah" required="required" class="form-control" id="pekerjaan_ayah" placeholder="Masukkan pekerjaan ayah">
                </div>
                <div class="form-group">
                    <label for="inputPekerjaanIbu"> Pekerjaan Ibu</label>
                    <input type="text" name="pekerjaan_ibu" required="required" class="form-control" id="pekerjaan_ibu" placeholder="Masukkan pekerjaan ibu">
                </div>
                <div class="form-group">
                    <label for="inputPendidikanAyah"> Pendidikan Ayah</label>
                    <input type="text" name="pendidikan_ayah" required="required" class="form-control" id="pendidikan_ayah" placeholder="Masukkan pendidikan ayah">
                </div>
                <div class="form-group">
                    <label for="inputPendidikanIbu"> Pendidikan Ibu</label>
                    <input type="text" name="pendidikan_ibu" required="required" class="form-control" id="pendidikan_ibu" placeholder="Masukkan pendidikan ibu">
                </div>
                <div class="form-group">
                    <label for="inputAlamatOrtu"> Alamat Orang Tua</label>
                    <textarea name="alamat_ortu" required="required" class="form-control" id="alamat_ortu" rows="3" placeholder="Masukkan Alamat Orang Tua"></textarea>
                </div>
                <div class="form-group">
                    <label for="inputNoHpOrtu"> Nomor HP Orang Tua</label>
                <input type="text" name="no_hp_ortu" class="form-control" id="no_hp_ortu" value="{{session('no_hp_ortu')}}" readonly>
                </div>
                <div class="form-group">
                    <label for="inputNoHpOrtu"> Nomor KK</label>
                    <input type="text" name="no_kk" required="required" class="form-control" id="no_kk" placeholder="Masukkan Nomor KK">
                </div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                    Simpan Data
                </button>
                <br>
                <br>
                  
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Apakah data sudah diisi dengan benar?</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          *data tidak dapat diubah lagi, pastikan data diisi dengan benar!
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                          <button type="submit" class="btn btn-primary" >Ya</button>
                        </div>
                      </div>
                    </div>
                  </div>
            </form>
        </div>
      </section>
      @include('footer')
    </body>
</html>
