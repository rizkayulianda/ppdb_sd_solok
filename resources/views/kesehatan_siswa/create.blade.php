<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      @include('header')
      <title>Input data kesehatan siswa</title>
    </head>
    <body id="page-top">
      @include('navbar')
      <section class="page-section mt-4 bg-primary">
        <div class="container bg-white rounded-lg p-5">
          @include('alertberhasil')
          <h2 class="text-center mt-1 mb-3">Form Kesehatan Siswa</h2>
          <br/>
          <form action="/kesehatan_siswa/store" method="post">
              {{ csrf_field() }}
              <div class="form-group">
                  <label for="inputNikSiswa"> NIK Siswa</label>
              <input type="text" name="nik_siswa" readonly class="form-control" id="inputNikSiswa" value="{{session('nik_siswa')}}">
              </div>
              <div class="form-group">
                  <label for="inputTinggiBadan">Tinggi Badan</label>
                  <input type="text" name="tinggi" required="required" class="form-control" id="tinggi" placeholder="Masukkan Tinggi Badan">
              </div>
              <div class="form-group">
                  <label for="inputBeratBadan">Berat Badan</label>
                  <input type="text" name="berat" required="required" class="form-control" id="berat" placeholder="Masukkan Berat Badan">
              </div>
              <div class="form-group">
                  <label for="inputPenglihatan">Penglihatan</label>
                  <input type="text" name="penglihatan" required="required" class="form-control" id="penglihatan" placeholder="Masukkan Penglihatan">
              </div>
              <div class="form-group">
                  <label for="inputPendengaran">Pendengaran</label>
                  <input type="text" name="pendengaran" required="required" class="form-control" id="pendengaran" placeholder="Masukkan Pendengaran">
              </div>
              <div class="form-group">
                  <label for="inputGigi">Gigi</label>
                  <input type="text" name="gigi" required="required" class="form-control" id="gigi" placeholder="Masukkan Gigi">
              </div>
              <div class="form-group">
                  <label for="inputRiwayatPenyakit">Riwayat Penyakit</label>
                  <input type="text" name="riwayat_penyakit" required="required" class="form-control" id="riwayat_penyakit" placeholder="Masukkan Riwayat Penyakit">
              </div>
              <!-- Modal -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                  Simpan Data
                </button>
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
