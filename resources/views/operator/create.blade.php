<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      @include('header')
      <title>Register Operator</title>
    </head>
    <body id="page-top">
      <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="/">PPDB SD Solok</a>
            <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              Menu  
              <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                @auth
                  <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ url('/pendaftaran') }}">Pendaftaran</a></li>
                  <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/pengumuman/indexop">Pengumuman</a></li>
                  <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/sekolah/detail">Sekolah</a></li>
                  <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/operator/detail">Operator</a></li>
                  <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ Route('logoutop') }}">Logout</a></li>
                @else
                  <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ route('registerop') }}">Register</a></li>
                  <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ route('loginop') }}">Login</a></li>
                @endauth
                <ul>
            </div>
        </div>
      </nav>
      <section class="page-section mt-4 bg-primary">
        <div class="container p-5 bg-white rounded-lg">
          @if ($message = session()->get('peringatan'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Kesalahan </strong><br>{{$message}}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif         
               <h2 class="text-center"> Register Operator</h2>
                <br/>
                <form action="/operator/store" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="inputIdSekolah">NPSN Sekolah</label>
                        <input type="text" name="kd_sekolah" required class="form-control" id="inputIdSekolah" placeholder="Masukkan NPSN Sekolah">
                    </div>
                    <div class="form-group">
                        <label for="inputNamaOperator">Nama Operator</label>
                        <input type="text" name="nama_op" required="required" class="form-control" id="inputNamaOperator" placeholder="Masukkan Nama Operator">
                    </div>
                    <div class="form-group">
                        <label for="inputEmailOperator">Email Sekolah</label>
                        <input type="email" name="email_op" class="form-control" id="inputEmailOperator" placeholder="Masukkan Email Sekolah Yang Anda Wakili">
                    </div>
                    <div class="form-group">
                        <label for="inputPasswordOperator">Password Operator</label>
                        <input type="password" name="password" required="required" class="form-control" id="inputPasswordOperator" placeholder="Masukkan Password Operator">
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
        </div>
      </section>
      @include('footer')
    </body>
</html>
