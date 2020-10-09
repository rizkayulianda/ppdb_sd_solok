<!DOCTYPE html>
{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}
<html>    
    <head>
        @include('header')
        <title>PPDB Sekolah Dasar Kabupaten Solok</title>
    </head>
    <body id="page-top" class="bg-primary">
      {{-- dark section --}}
      <header class="bg-secondary">
        @include('navbar')
            <br><br><br><br>
            <div class="container pb-3 mt-5">
              <div class="row align-items-center">
                <div class="col-lg-5">
                    <img src="/assets/img/backtoschool.svg" class="img-fluid">
                </div>
                <div class="col-lg-7">
                  <h1 class="display-4 text-white mt-5 mb-2">Selamat Datang</h1>
                  <p class="lead mb-5 text-white-50">di website pelayanan penerimaan peserta didik baru sekolah dasar<br>Kabupaten Solok</p>
                </div>
              </div>
            </div>
          </header>
        <section class="page-section bg-primary py-0">
          <div class="container px-5 py-3 bg-white my-3 rounded-lg">
            <h1 class="font-weight-light text-center display-4 mt-4 mb-5">Landasan hukum</h1>
            <div class="row text-center">
              {{-- section 1 --}}
              <div class="col-md-4">
                <div class="card border-white">
                  <img class="card-img-top w-50 mx-auto" src="/assets/img/graduation.svg" alt="">
                  <div class="card-body">
                    <h4 class="card-title font-weight-light">Undang-Undang Dasar Negara Republik Indonesia tahun 1945 Pasal 31</h4>
                    <p class="card-text">
                      (1) "Setiap warga negara berhak mendapat pendidikan." 
                      <br>
                      (2) "Setiap warga negara wajib mengikuti pendidikan dasar dan pemerintah wajib membiayainya."
                    </p>
                  </div>
                </div>
              </div>

              {{-- section 2 --}}
              <div class="col-md-4">
                <div class="card border-white">
                  <img class="card-img-top w-50 mx-auto" src="/assets/img/book.svg" alt="">
                  <div class="card-body">
                    <h4 class="card-title font-weight-light">Peraturan Pemerintah Republik Indonesia</h4>
                    <h6 class="card-subtitle mb-3 text-muted font-weight-light">No 47 TAHUN 2008 <br>Pasal 1 tentang Wajib belajar</h6>
                    <p class="card-text">
                      (1) "Wajib  belajar adalah program pendidikan minimal yang harus diikuti oleh warga negara Indonesia atas tanggung jawab Pemerintah dan pemerintah daerah."
                    </p>
                  </div>
                </div>
              </div>
              
              {{-- section 3 --}}
              <div class="col-md-4 mb-4">
                <div class="card border-white">
                  <img class="card-img-top w-50 mx-auto" src="/assets/img/place.svg" alt="">
                  <div class="card-body">
                    <h4 class="card-title font-weight-light">Peraturan Menteri Pendidikan dan Kebudayaan</h4>
                    <h6 class="card-subtitle mb-3 text-muted font-weight-light">No 44 tahun 2019 Pasal 14 tentang zonasi</h6>
                    <p class="card-text">
                      (1) "Jalur zonasi diperuntukkan bagi peserta didik yang berdomisili di dalam wilayah zonasi yang ditetapkan Pemerintah Daerah"
                      <br>
                      (3) "Domisili calon peserta didik sebagaimana dimaksud pada ayat (1) berdasarkan alamat pada kartu keluarga yang diterbitkan paling singkat 1(satu) tahun sejak tanggal pendaftaran PPDB."
                    </p>
                  </div>
                </div>
              </div>
            </div>  
            <h1 class="font-weight-light display-4 text-center">Persyaratan</h1>
            <div class="row align-items-center mb-5 p-3">
              <div class="col-lg-6">
                <h1 class="font-weight-light">PPDB tingkat sekolah dasar</h1>
                <h5 class="card-subtitle mb-3 text-muted font-weight-light">Peraturan Menteri Pendidikan dan Kebudayaan <br>Nomor 44 Tahun 2019 Pasal 5 tentang tentang tata cara PPDB</h5>
                <p class="card-text ml-2">
                  <i class="fas fa-check"></i>Usia 7-12 tahun<br>
                  <i class="fas fa-check"></i>Paling rendah usia 5 (lima) tahun 6 (enam) bulan pada tanggal 1 Juli tahun berjalan dibuktikan dengan rekomendasi tertulis dari psikolog profesional atau dewan guru sekolah<br>
                </p>
                <h5 class="font-weight-light text-muted">Untuk kelengkapan dokumen dibutuhkan :</h5>
                <p class="card-text ml-2">
                  <i class="fas fa-check"></i>Foto Akte Kelahiran <br>
                  <i class="fas fa-check"></i>Foto KK <br>
                  <i class="fas fa-check"></i>Pas Foto 3x4<br>
                  <i class="fas fa-check"></i>Foto Ijazah TK (jika ada)<br>
                </p>
                </div>
              <!-- /.col-lg-6 -->
              <div class="col-lg-6">
                <img class="img-fluid" src="/assets/img/checklist.svg" >
              </div>
              <!-- /.col-md-6 -->
            </div>      
          </div>
        </section>
       @include('footer')
    </body>
</html>
